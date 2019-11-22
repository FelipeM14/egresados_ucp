<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\CreateCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;

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
            Permission::create(['name' => $request->name]);
            session()->flash('message', 'La categoría '.strtolower($category->name).' fue creada correctamente!');
        }

        return redirect()->route('categories.index');
    }

    public function edit(Category $category){

        return view('categories.edit',['category' => $category]);
    }

    //Valida que el nombre de la caetgoria no exista en la bd
    private function validaNameCategory($name, $id = []){

        $col = Category::where('name', $name)
            ->whereNotIn('id', $id)->count();

        return $col;
    }

    //Renombra el nombre del permiso para la categoria
    public function renamePermission($before_name, $new_name){

        $e = false;
        $v = false;

        $permission_edit = Permission::where('name', $before_name. ' editar')->first();
        $permission_view = Permission::where('name', $before_name. ' ver')->first();

        if($permission_edit)
            $e = $permission_edit->update(['name' => $new_name. ' edit']);

        if($permission_view)
            $v = $permission_view->update(['name' => $new_name. ' ver']);

        if($e || $v)
            return true;
        else
            return false;
    }

    //actualiza los datos de una categoria
    public function update(UpdateCategoryRequest $request, Category $category){

        $count_name_ant = $this->validaNameCategory($request->name, [$category->id]);

        if($count_name_ant){
            session()->flash('mjs_error', 'Ya existe una categoría con ese nombre!');
            return back();
        }

        $before_name = $category->name;

        $u = $category->update([
            'name' => $request->name,
            'color' => $request->color,
            'color_text' => $request->color_text,
            'order' => $request->order,
        ]);

        $changes_name = $category->update([
            'name' => $request->name,
        ]);

        if($changes_name){
            $this->renamePermission($before_name, $request->name);
        }

        if($u || $changes_name){
            session()->flash('message', 'La categoría '.strtolower($category->name).' fue actualizada correctamente!');
        }

        return redirect()->route('categories.index');

    }
}
