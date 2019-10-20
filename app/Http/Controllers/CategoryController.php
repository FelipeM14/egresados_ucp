<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\CreateCategoryRequest;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index(){

        $categories = Category::orderBy('order', 'ASC')->get();
        return view('categories.index', ['categories' => $categories]);
    }

    public function generateRandomString($length = 6) {
        $characters = '0123456789ABCDEF';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return '#'.$randomString;
    }

    public function create(){

        return view('categories.create', ['color' => $this->generateRandomString()]);
    }

    public function store(CreateCategoryRequest $request){

        $category = Category::create([
            'name' => $request->name,
            'color' => $request->color,
            'color_text' => $request->color_text,
            'order' => $request->order,
        ]);

        if($category){
            session()->flash('message', 'La categoría '.strtolower($category->name).' fue creada correctamente!');
        }

        return redirect()->route('categories.index');
    }

    public function edit(Category $category){

        return view('categories.edit',['category' => $category]);
    }

    public function update(CreateCategoryRequest $request, Category $category){

        $u = $category->update([
            'name' => $request->name,
            'color' => $request->color,
            'color_text' => $request->color_text,
            'order' => $request->order,
        ]);

        if($u){
            session()->flash('message', 'La categoría '.strtolower($category->name).' fue actualizada correctamente!');
        }

        return redirect()->route('categories.index');

    }
}