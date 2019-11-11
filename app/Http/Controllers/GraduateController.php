<?php

namespace App\Http\Controllers;

use App\Category;
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

    public function GraduateController(){

    }
}
