<?php

namespace App\Http\Controllers;

use App\Column;
use App\Http\Requests\CreateColumnRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class ColumnController extends Controller
{

    public function create(){

        $categories = Category::all();
        return view('columns.create', ['categories' => $categories]);
    }

    private function addColumnTable($nameCol, $nameTabla = 'graduates'){

        Schema::table($nameTabla, function ($table) use ($nameCol) {
            $table->string($nameCol)->nullable(true);
        });
    }

    public function store(CreateColumnRequest $request){

        $category = Category::find($request->category_id);

        $name = $this->prepareName($request->title);

        $column = $category->columns()->create([
            'title' => $request->title,
            'name' => $name,
            'order' => $request->order,
        ]);

        if($column){
            $this->addColumnTable($name);
        }

        if($column){
            session()->flash('message', 'La columna '.strtolower($column->title).' fue creada correctamente!');
        }

        return redirect()->route('data.index');

    }

    //Se llama desde javascript en el metodo createNewRegistry para traer los nombres de las columnas
    public function getCols(){

        $cols = Column::select('color', 'color_text', 'columns.name', 'columns.id', 'columns.title')
            ->join('categories', 'categories.id', 'columns.category_id')
            ->orderBy('categories.order', 'ASC')
            ->orderBy('columns.order', 'ASC')->get();

        $time = Carbon::now()->format('Y-m-d H:i:s');

        $id = DB::table('graduates')->insertGetId([
                'created_at' => $time,
                'updated_at' => $time,
            ]);

        return array($cols, $id);

    }

    public function updateCol(Request $request, $graduate_id){

        return DB::table('graduates')->where('id', $graduate_id)->update([
            $request->name => $request->col
        ]);
    }

}
