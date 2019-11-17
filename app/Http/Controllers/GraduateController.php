<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\UpdateGraduateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GraduateController extends Controller
{

    private function getCategories(){
        return Category::all();
    }

    public function show($graduate_id, Request $request){

        $category_id = '';
        $category = Category::find($request->category_id);
        $cols = [];

        if($category){
            $cols = $category->columns()->get();
            $category_id = $category->id;
        }

        $graduate = DB::table('graduates')->where('id', $graduate_id)->first();
        $categories = $this->getCategories();

        return view('data.show', ['graduate' => $graduate, 'categories' => $categories, 'cols' => $cols, 'category_id' => $category_id]);
    }

    public function update($graduate_id, UpdateGraduateRequest $request){

        $category = Category::find($request->category);
        $this->middleware('permission:'.$category->name. ' editar22323');
        $updates = 0;

        $cols = $category->columns()->get();

        foreach ($cols as $col){
            $name_col = $col->name;
            $updates += DB::table('graduates')->where('id', $graduate_id)->update([$name_col => $request->$name_col]);
        }

        if($updates)
            session()->flash('message', 'Los datos de han actualizado correctamente!');
        else {
            session()->flash('mjs_error', 'No se han realizado cambios!');
        }

        return redirect()->route('data.update');

    }
}
