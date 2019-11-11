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

Auth::routes(["register" => false]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/complete/{code}', 'UsersController@complete')->name('complete');
Route::put('/update_pass/{user}', 'UsersController@updatePass')->name('user.update.pass');

//Rutas para el proyecto
Route::middleware(['auth', 'checkActive'])->group(function () {

    //CATEGORIES
    Route::get('categories_create', 'CategoryController@create')->name('categories.create')
        ->middleware('permission:Ingresar datos');

    Route::get('categories_edit/{category}', 'CategoryController@edit')->name('categories.edit')
        ->middleware('permission:Editar datos');

    Route::get('categories_index', 'CategoryController@index')->name('categories.index')
        ->middleware('permission:Ver datos');

    Route::post('categories_store', 'CategoryController@store')->name('categories.store')
        ->middleware('permission:Ingresar datos');

    Route::put('categories_update/{category}', 'CategoryController@update')->name('categories.update')
        ->middleware('permission:Editar datos');


    //COLUMNS
    Route::get('columns_index', 'ColumnController@index')->name('columns.index')
        ->middleware('permission:Ver datos');

    Route::get('columns_create', 'ColumnController@create')->name('columns.create')
        ->middleware('permission:Ingresar datos');

    Route::post('columns_store', 'ColumnController@store')->name('columns.store')
        ->middleware('permission:Ingresar datos');

    Route::get('columns_edit/{column}', 'ColumnController@edit')->name('columns.edit')
        ->middleware('permission:Editar datos');

    Route::put('columns_update/{column}', 'ColumnController@update')->name('columns.update')
        ->middleware('permission:Editar datos');


    //DATA
    Route::post('data/store', 'DataController@store')->name('data.store')
        ->middleware('permission:Ingresar datos');

    Route::get('data', 'DataController@index')->name('data.index')
        ->middleware('permission:Ver datos');

    Route::get('get_columns', 'DataController@getCols')->name('data.cols')
        ->middleware('permission:Ingresar datos');

    Route::get('get_basic_columns', 'DataController@getBasicCols')->name('data.cols')
        ->middleware('permission:Ingresar datos');

    Route::get('new_registry', 'DataController@NewRegistry')->name('data.new')
        ->middleware('permission:Ingresar datos');

    Route::put('store_col_graduate/{graduate_id}', 'DataController@updateCol')->name('data.updateCol')
        ->middleware('permission:Editar datos');

    Route::get('get_graduates/{col}/{text}/{order_col}/{order}/{num}', 'DataController@getGraduates')->name('data.get_graduates')
        ->middleware('permission:Ver datos');

    Route::name('graduate.delete')->delete('graduate_delete/{graduate}', 'DataController@graduateDelete')
        ->middleware('permission:Eliminar datos');

    Route::get('data_import', 'DataController@dataImport')->name('data.import')
        ->middleware('permission:Ver datos');

    Route::get('data_export_template', 'DataController@exportTemplate')->name('data.export.template')
        ->middleware('permission:Ver datos');

    Route::post('graduates_import', 'DataController@import')->name('graduates.import')
        ->middleware('permission:Ver datos');

    Route::get('graduates_view_export', 'DataController@ViewExport')->name('data.export')
        ->middleware('permission:Ver datos');

    Route::post('graduates_export', 'DataController@export')->name('graduates.export')
        ->middleware('permission:Ver datos');

    Route::get('data_update', 'DataController@dataUpdate')->name('data.update')
        ->middleware('permission:Ver datos');


    //Graduates
    Route::get('show_graduate/{graduate_id}', 'GraduateController@show')->name('graduate.show');
    Route::post('update_graduate/{graduate_id}', 'GraduateController@update')->name('graduate.update');




    //Users
    Route::get('users_index', 'UsersController@index')->name('users.index')
        ->middleware('permission:Ver datos');

    Route::get('users_edit/{user}', 'UsersController@edit')->name('users.edit')
        ->middleware('permission:Editar datos');

    Route::put('users_update/{user}', 'UsersController@update')->name('users.update')
        ->middleware('permission:Editar datos');

    Route::get('users_create', 'UsersController@create')->name('users.create')
        ->middleware('permission:Ingresar datos');

    Route::post('users_store', 'UsersController@store')->name('users.store')
        ->middleware('permission:Ingresar datos');

    Route::get('users_roles/{user}', 'UsersController@roles')->name('users.roles')
        ->middleware('permission:Editar datos');


    //Agragar rol a un usuario
    Route::post('users_roles/{user}', 'UsersController@addRole')->name('users.addRole')
        ->middleware('permission:Editar datos');

    //Romover rol a un usuario
    Route::get('users_roles/{user}/{role}', 'UsersController@removeRole')->name('users.removeRole')
        ->middleware('permission:Editar datos');



    //Roles
    Route::get('roles_index', 'RolesController@index')->name('roles.index')
        ->middleware('permission:Ver datos');

    Route::get('roles_create', 'RolesController@create')->name('roles.create')
        ->middleware('permission:Ingresar datos');

    Route::post('roles_store', 'RolesController@store')->name('roles.store')
        ->middleware('permission:Ingresar datos');

    Route::get('roles_edit/{role}', 'RolesController@edit')->name('roles.edit')
        ->middleware('permission:Editar datos');

    Route::put('roles_update/{role}', 'RolesController@update')->name('roles.update')
        ->middleware('permission:Editar datos');

    Route::get('roles_delete/{role}', 'RolesController@delete')->name('roles.delete')
        ->middleware('permission:Eliminar datos');

    Route::get('roles_setting/{role}', 'RolesController@setting')->name('roles.setting')
        ->middleware('permission:Editar datos');


    Route::name('getNoPermissions')->get('permissions_np/{id}', 'RolesController@noPermissions')
        ->middleware('permission:Editar datos');

    Route::name('getRolePermissions')->get('permissions_role/{role}', 'RolesController@getRolePermissions')
        ->middleware('permission:Editar datos');

    Route::name('addPermissionsToRole')->post('permissions_to_role', 'RolesController@addPermissionToRole')
        ->middleware('permission:Editar datos');

    Route::name('deleteRolePermissions')->delete('delete_permissions_role/{role}/{permission}', 'RolesController@deleteRolePermissions')
        ->middleware('permission:Editar datos');



});
