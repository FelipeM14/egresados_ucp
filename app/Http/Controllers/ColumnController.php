<?php

namespace App\Http\Controllers;

use App\Column;
use App\Http\Requests\CreateColumnRequest;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Http\Request;
use App\Category;
use Illuminate\Support\Facades\Schema;

class ColumnController extends Controller
{

    //Retorna una vista con el listado de las columnas
    public function index(){

        $columns = Column::all();
        return view('columns.index', ['columns' => $columns]);
    }

    //Retorna una vista con los datos de todas las categorias
    public function create(){

        $categories = Category::all();
        return view('columns.create', ['categories' => $categories]);
    }

    //Agrega una nuevo columna en la tabla graduates
    private function addColumnTable($nameCol, $nameTabla = 'graduates'){

        Schema::table($nameTabla, function ($table) use ($nameCol) {
            $table->string($nameCol)->nullable(true);
        });
    }

    //Valida que el nombre de la columna no exista en la bd
    private function validaNameColumn($name, $id = []){

        $col = Column::where('name', $name)
            ->whereNotIn('id', $id)->count();

        return $col;
    }

    //Guarda los datos de la columna en la tabla columns
    public function store(CreateColumnRequest $request){

        $category = Category::find($request->category_id);

        $name = $this->prepareName($request->title);
        $name_ant = $this->validaNameColumn($name);

        if($name_ant){
            session()->flash('mjs_error', 'Ya existe una columna con ese título!');
            return back();
        }

        $column = $category->columns()->create([
            'title' => $request->title,
            'name' => $name,
            'order' => $request->order,
            'status' => $request->status,
            'size' => $request->size,
        ]);

        if($column){
            $this->addColumnTable($name);
        }

        if($column){
            session()->flash('message', 'La columna '.strtolower($column->title).' fue creada correctamente!');
        }

        return redirect()->route('data.index');

    }

    //Retorna una vista con los datos de la columna a editar
    public function edit(Column $column){

        $categories = Category::all();
        return view('columns.edit', ['column' => $column, 'categories' => $categories]);
    }

    private function renameColumn($before, $after, $table = 'graduates'){

        Schema::table($table, function (Blueprint $table) use($before, $after) {
            $table->renameColumn($before, $after);
        });

    }

    public function update(Column $column, CreateColumnRequest $request){

        $name = $this->prepareName($request->title);
        $name_ant = $this->validaNameColumn($name, [$column->id]);

        if($name_ant){
            session()->flash('mjs_error', 'Ya existe una columna con ese título!');
            return back();
        }

        $name_before = $column->name;

        $changes = $column->update([
            'title' => $request->title,
            'name' => $name,
            'order' => $request->order,
            'status' => $request->status,
            'size' => $request->size,
            'category_id' => $request->category_id,
        ]);

        if($changes){
            $this->renameColumn($name_before, $name);
            session()->flash('message', 'La columna '.strtolower($column->title).' fue actualizada correctamente!');
        }

        return redirect()->route('data.index');

    }

}
