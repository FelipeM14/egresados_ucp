<?php

namespace App\Http\Controllers;

use App\Actualizacion;
use App\Category;
use App\Columns;
use App\Graduate;
use App\Graduates;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ActualizacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index() {
        return view('data.upgrade');
    }

    public function searchGraduate(Request $request){

        $graduate = Graduates::where('codigo', $request->cedula)->first();

        if (!$graduate){
            return redirect()->route('welcome');
        } else {

            $category = Category::find(2);
            $cols = $category->columns()->get();
            return view('data.poll', ['cols' => $cols, 'graduate' => $graduate]);
        }

    }

    public function update(Request $request, $graduate_id){

        $updates = 0;
        $category = Category::find(2);
        $cols = $category->columns()->get();

        foreach ($cols as $col){
            $name_col = $col->name;

            //VALIDAR QUE EL TEXTO DE LA CELDA NO SOBREPASE EL TAMAÑO DE LA COLUMNA
            if(strlen($request->$name_col) > $col->size){
                session()->flash('mjs_error', 'El tamaño del campo de la columna '.$col->title.' es mayor de '.$col->size.' caracteres!');
                return back();
            }
            $updates += DB::table('graduates')->where('id', $graduate_id)->update([$name_col => $request->$name_col]);
        }

        if($updates)
            session()->flash('message', 'Los datos de han actualizado correctamente!');
        else {
            session()->flash('mjs_error', 'No se han realizado cambios!');
        }

        return redirect()->route('welcome');

    }



}
