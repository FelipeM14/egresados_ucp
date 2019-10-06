<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateColumnRequest;
use Illuminate\Http\Request;
use App\Category;
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

}
