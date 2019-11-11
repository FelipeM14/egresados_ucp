<?php

namespace App\Http\Controllers;

use App\Category;
use App\Column;
use App\Data;
use App\Http\Requests\ExportGraduateRequest;
use App\Http\Requests\ImportGraduateRequest;
use Illuminate\Http\Request;
use App\Graduate;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Exports\TemplateGraduatesExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\GraduatesImport;

class DataController extends Controller
{

    //Obtiene los datos de las columnas de la table columns
    private function getColumns(){
        $cols = Column::select('color', 'color_text', 'columns.name', 'columns.id', 'columns.title', 'columns.status', 'columns.size', 'categories.name as category_name')
            ->join('categories', 'categories.id', 'columns.category_id')
            ->where('columns.status', 1)
            ->orderBy('categories.order', 'ASC')
            ->orderBy('columns.order', 'ASC')->get();

        return $cols;
    }

    //Obtiene los datos de las columnas de la categoria datos basicos de la table columns
    private function getBasicColumns(){

        $category = Category::where('name', 'Datos básicos')->first();

        $cols = $category->columns()->select('columns.name', 'columns.id', 'columns.title', 'columns.status', 'columns.size')
            ->orderBy('columns.order', 'ASC')->get();

        return $cols;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



    //Retorna todas las categorias
    private function getCategories():array
    {
        $categories = Category::orderBy('categories.order', 'ASC')->get();
        $data = [];

        foreach ($categories as $category){

            $data[] = [
                'cols' => $category->columns()->where('status', 1)->count(),
                'name' => $category->name,
                'color' => $category->color,
                'color_text' => $category->color_text,
            ];
        }
        return $data;
    }

    //Retorna las columnas a la vista data
    public function index()
    {
        $categories = $this->getCategories();
        $cols = $this->getColumns();
        return view('data.index', ['columns' => $cols, 'categories' => $categories]);
    }

    //Se llama desde varios metodos javascript para traer los nombres de las columnas
    public function getCols(){

        $cols = $this->getColumns();
        return array($cols);
    }

    //Se llama desde varios metodos javascript para traer los nombres de las columnas de la categoria datos basicos
    public function getBasicCols(){

        $cols = $this->getBasicColumns();
        return array($cols);
    }

    //Se llama desde javascript crea un nuevo registro nullo en la tabla egresados
    public function NewRegistry(){

        $time = Carbon::now()->format('Y-m-d H:i:s');

        $id = DB::table('graduates')->insertGetId([
            'created_at' => $time,
            'updated_at' => $time,
        ]);

        return array($id);
    }

    //actualiza el valor de cada columna de la tabla graduates es llamado desde javascript
    public function updateCol(Request $request, $graduate_id){

        $date = Carbon::now();
        return DB::table('graduates')->where('id', $graduate_id)->update([
            $request->name => $request->col,
            'updated_at' => $date
        ]);
    }

    //Obtiene los datos de los egresados es llamado desde javascript en el metodo getGraduates
    public function getGraduates($col, $text, $order_col ,$order , $num){

        if($text != 'default' && $col != 'all'){ //
            return DB::table('graduates')->where($col, 'LIKE', '%'.$text.'%')->orderBy($order_col, $order)->paginate($num);
        } else {
            return DB::table('graduates')->orderBy($order_col, $order)->paginate($num);
        }
    }

    public function graduateDelete(Graduate $graduate){
        $graduate->delete();
    }

    public function dataImport(){

        return view('data.import');
    }

    public function exportTemplate(){

        $cols = Column::all();
        $arr = [];

        foreach ($cols as $col){
            $arr[] = $col->name;
        }

        Excel::create('Plantilla', function($excel) use ($arr) {
            $excel->sheet('Egresados', function($sheet) use ($arr) {
                $sheet->row(1, $arr);
                $sheet->row(1, function($row) {

                    // Cambia la fuente a bold
                    $row->setFontWeight('bold');

                });
            });
        })->download('xlsx');
    }

    private function insertGraduates($arr_file){

        $dtsOK = DB::table('graduates')->insert($arr_file);

        return $dtsOK;
    }

    public function import(ImportGraduateRequest $request){

        $arr_file = [];
        $cols = Column::all();
        $arr = [];
        $i = 0;
        $dtsOK = false;

        foreach ($cols as $col){
            $arr[] = $col->name;
        }

        if($request->hasFile('file')){

            $path = $request->file('file')->getRealPath();
            $data = Excel::load($path)->get();

            //$size = $request->file('file')->getSize();

            if ($data->count()){

                foreach ($data as $key => $value) {

                    foreach ($cols as $col){
                        $name = $col->name;
                        if($value->$name){
                            $arr_file[$i][$name] = $value->$name;
                        } else {
                            $arr_file[$i][$name] = '';
                        }
                    }
                    if($i == 500){
                        $dtsOK = $this->insertGraduates($arr_file);
                        $arr_file = [];
                        $i = 0;
                    } else
                        $i++;
                }
            }
        }

        if(!empty($arr_file)) {
            $dtsOK = $this->insertGraduates($arr_file);
        }

        if($dtsOK){
            $categories = $this->getCategories();
            $cols = $this->getColumns();
            session()->flash('message', 'Los datos de han importado correctamente!');
            return view('data.index', ['columns' => $cols, 'categories' => $categories]);
        } else
            return back();
    }


    public function ViewExport(){

        $programs = Graduate::select('programa')->get()->unique('programa');
        $dates = Graduate::select('fecha_graduacion')->get()->unique('fecha_graduacion');
        $years = [];

        foreach ($dates as $date){
            $y = new Carbon($date->fecha_graduacion);
            $years[] = $y->format('Y');
        }

        $years = array_unique($years);

        $categories = Category::all();
        return view('data.export', ['categories' => $categories, 'programs' => $programs, 'years' => $years]);
    }

    public function export(ExportGraduateRequest $request){

        $arr = [];
        $titles = [];
        $cols = Category::select('columns.name', 'columns.title')->join('columns', 'columns.category_id', 'categories.id')
                    ->whereIn('categories.id', $request->category_id)->get();

        $program = '%'.$request->program.'%';
        $year = '%'.$request->year.'%';

        $graduates = Graduate::where('programa', 'LIKE', $program)
            ->where('fecha_graduacion', 'LIKE', $year)
            ->get();

        foreach ($cols as $col){
            $arr[] = $col->name;
            $titles[] = $col->title;
        }

        Excel::create('Egresados', function($excel) use ($arr, $graduates, $titles) {
            $excel->sheet('Egresados', function($sheet) use ($arr, $graduates, $titles) {
                $sheet->row(1, $titles);
                $sheet->row(1, function($row) {

                    // Cambia la fuente a bold
                    $row->setFontWeight('bold');
                });

                $line = 2;
                $data = [];
                foreach ($graduates as $graduate){
                    foreach ($arr as $value){
                        if($graduate->$value){
                            $data[] = $graduate->$value;
                        } else {
                            $data[] = '';
                        }
                    }
                    $sheet->row($line, $data);
                    $line++;
                    $data = [];
                }

            });
        })->download('xlsx');

    }

    public function dataUpdate(){

        $cols = $this->getBasicColumns();
        return view('data.update', ['columns' => $cols]);
    }

}
