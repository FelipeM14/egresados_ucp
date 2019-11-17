<?php

namespace App\Http\Controllers;

use App\Actualizacion;
use App\Columns;
use App\Graduates;
use Illuminate\Http\Request;

class ActualizacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['columns'] = Columns::paginate();#Problema consulta, solo tra 15 campos
        return view('columns.creategraduate', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosactualizacion = request()->except('_token');
        Graduates::insert($datosactualizacion);
        return redirect('actualizacion');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Actualizacion  $actualizacion
     * @return \Illuminate\Http\Response
     */
    public function show(Actualizacion $actualizacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Actualizacion  $actualizacion
     * @return \Illuminate\Http\Response
     */
    public function edit($codigo)
    {
        $datos['columns'] = Columns::where('category_id', 2)->paginate();
        #$datos['graduadodate'] = Graduates::findOrFail($codigo);
        $datos['graduadodate'] = Graduates::where('codigo', $codigo)->firstOrFail();
        return view('columns.editdatosgraduados',$datos);

    }
    public function searchgraduate()
    {
        $datosactualizacion = request()->except('_token');
        $datospersona = Graduates::where('codigo', $datosactualizacion['cedula'])->firstOrFail();
        printf($datospersona);
        #Fecha en la qie se hizo la ultima actualizacion
        $fechaactualizacion = $datospersona->updated_at;
        echo "<br>".$fechaactualizacion;
        #$fechaactual = date( );
        #echo  "<br>".$fechaactual;

        if ($datospersona->codigo == null){
            return redirect('actualizacion');
        }else{
            return redirect('actualizacion/'.$datospersona->codigo.'/edit');
        }

        #return view('columns.editdatosgraduados',$datospersona);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Actualizacion  $actualizacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosactualizacion = request()->except('_token','_method');
        Graduates::where('codigo','=', $id)->update($datosactualizacion);
        return redirect('actualizacion');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Actualizacion  $actualizacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Actualizacion $actualizacion)
    {
        //
    }
}