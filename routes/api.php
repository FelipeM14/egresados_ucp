<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Aquí es donde puede registrar rutas API para su aplicación.
| El RouteServiceProvider carga estas rutas dentro de un grupo
| al que se le asigna el grupo de middleware "api". ¡Disfruta creando tu API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
