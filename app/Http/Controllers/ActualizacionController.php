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
        $datos['columns'] = Columns::where('category_id', 2)->paginate();

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
        $datos['columns'] = Columns::where('category_id', 2)->paginate();
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
    public function searchgraduate(Request $request)
    {


        $datospersona = Graduates::where('codigo', $request->cedula)->first();
        $create_fecha = Graduates::where('codigo', $request->create_at)->first();


        #printf($datospersona);
        #Fecha en la qie se hizo la ultima actualizacion
        #$fechaactualizacion = $datospersona->updated_at;
        #echo "<br>".$fechaactualizacion;
        #$fechaactual = date( );
        #echo  "<br>".$fechaactual;


        if (!$datospersona){

            return redirect(config('app.url'));

        }else{
            return redirect('actualizacion/'.$datospersona->codigo.'/edit');
        }
        if($datospersona->create_at<$create_fecha ){

        }
        #return redirect('actualizacion/'.$datospersona->codigo.'/edit');

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
        return redirect('http://127.0.0.1:8000');

    }
    public function upgrade(Request $request, $id)
    {
        $datosactualizacion = request()->except('_token','_method');
        Graduates::where('codigo','=', $id)->update($datosactualizacion);
        return redirect('http://127.0.0.1:8000');

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
