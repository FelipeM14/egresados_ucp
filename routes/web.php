<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//Rutas para el proyecto
Route::middleware(['auth'])->group(function () {

    Route::post('data/store', 'DataController@store')->name('data.store')
        ->middleware('permission:data.create');

    Route::get('data', 'DataController@index')->name('data.index')
        ->middleware('permission:data.index');

    Route::get('data/create', 'DataController@create')->name('data.create')
        ->middleware('permission:data.create');

    Route::put('data/{role}', 'DataController@update')->name('data.update')
        ->middleware('permission:data.edit');

    Route::get('data/{role}', 'DataController@show')->name('data.show')
        ->middleware('permission:data.show');

    Route::delete('data/{role}', 'DataController@destroy')->name('data.destroy')
        ->middleware('permission:data.destroy');

    Route::get('data/{role}/edit', 'DataController@edit')->name('data.edit')
        ->middleware('permission:data.edit');


    //Users
    Route::get('users_index', 'UsersController@index')->name('users.index')
        ->middleware('permission:data.index');

    Route::get('users_edit/{user}', 'UsersController@edit')->name('users.edit')
        ->middleware('permission:data.edit');

    Route::put('users_update/{user}', 'UsersController@update')->name('users.update')
        ->middleware('permission:data.edit');

    Route::get('users_create', 'UsersController@create')->name('users.create')
        ->middleware('permission:data.create');

    Route::post('users_store', 'UsersController@store')->name('users.store')
        ->middleware('permission:data.create');


    //Roles
    Route::get('roles_index', 'RolesController@index')->name('roles.index')
        ->middleware('permission:data.index');


});
