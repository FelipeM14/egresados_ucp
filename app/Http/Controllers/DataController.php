<?php

namespace App\Http\Controllers;

use App\Column;
use App\Data;
use Illuminate\Http\Request;
use App\Graduate;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class DataController extends Controller
{

    //Obtiene los datos de las columnas de la table columns
    private function getColumns(){
        $cols = Column::select('color', 'color_text', 'columns.name', 'columns.id', 'columns.title', 'columns.status', 'columns.size')
            ->join('categories', 'categories.id', 'columns.category_id')
            ->where('columns.status', 1)
            ->orderBy('categories.order', 'ASC')
            ->orderBy('columns.order', 'ASC')->get();

        return $cols;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //Retorna las columnas a la vista data
    public function index()
    {
        $cols = $this->getColumns();
        return view('data.index', ['columns' => $cols]);
    }


    //Se llama desde javascript en el metodo createNewRegistry para traer los nombres de las columnas
    public function getCols(){

        $cols = $this->getColumns();
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

}
