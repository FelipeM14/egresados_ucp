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
        ->middleware('permission:Realizar ajustes');

    Route::get('categories_edit/{category}', 'CategoryController@edit')->name('categories.edit')
        ->middleware('permission:Realizar ajustes');

    Route::get('categories_index', 'CategoryController@index')->name('categories.index')
        ->middleware('permission:Realizar ajustes');

    Route::post('categories_store', 'CategoryController@store')->name('categories.store')
        ->middleware('permission:Realizar ajustes');

    Route::put('categories_update/{category}', 'CategoryController@update')->name('categories.update')
        ->middleware('permission:Realizar ajustes');


    //COLUMNS
    Route::get('columns_index', 'ColumnController@index')->name('columns.index')
        ->middleware('permission:Realizar ajustes');

    Route::get('columns_create', 'ColumnController@create')->name('columns.create')
        ->middleware('permission:Realizar ajustes');

    Route::post('columns_store', 'ColumnController@store')->name('columns.store')
        ->middleware('permission:Realizar ajustes');

    Route::get('columns_edit/{column}', 'ColumnController@edit')->name('columns.edit')
        ->middleware('permission:Realizar ajustes');

    Route::put('columns_update/{column}', 'ColumnController@update')->name('columns.update')
        ->middleware('permission:Realizar ajustes');


    //DATA
    Route::post('data/store', 'DataController@store')->name('data.store')
        ->middleware('permission:Administrar datos graduados');

    Route::get('data', 'DataController@index')->name('data.index')
        ->middleware('permission:Consultar datos graduados');

    Route::get('get_columns', 'DataController@getCols')->name('data.cols')
        ->middleware('permission:Consultar datos graduados');

    Route::get('get_basic_columns', 'DataController@getBasicCols')->name('data.cols')
        ->middleware('permission:Consultar datos graduados');

    Route::get('new_registry', 'DataController@NewRegistry')->name('data.new')
        ->middleware('permission:Consultar datos graduados');

    Route::put('store_col_graduate/{graduate_id}', 'DataController@updateCol')->name('data.updateCol')
        ->middleware('permission:Administrar datos graduados');

    Route::get('get_graduates/{col}/{text}/{order_col}/{order}/{num}', 'DataController@getGraduates')->name('data.get_graduates')
        ->middleware('permission:Consultar datos graduados');

    Route::name('graduate.delete')->delete('graduate_delete/{graduate}', 'DataController@graduateDelete')
        ->middleware('permission:Administrar datos graduados');

    Route::get('data_import', 'DataController@dataImport')->name('data.import')
        ->middleware('permission:Consultar datos graduados');

    Route::get('data_export_template', 'DataController@exportTemplate')->name('data.export.template')
        ->middleware('permission:Consultar datos graduados');

    Route::post('graduates_import', 'DataController@import')->name('graduates.import')
        ->middleware('permission:Administrar datos graduados');

    Route::get('graduates_view_export', 'DataController@ViewExport')->name('data.export')
        ->middleware('permission:Consultar datos graduados');

    Route::post('graduates_export', 'DataController@export')->name('graduates.export')
        ->middleware('permission:Administrar datos graduados');

    Route::get('data_update', 'DataController@dataUpdate')->name('data.update')
        ->middleware('permission:Consultar datos graduados');


    //Graduates
    Route::get('show_graduate/{graduate_id}', 'GraduateController@show')->name('graduate.show');

    Route::post('update_graduate/{graduate_id}', 'GraduateController@update')->name('graduate.update');

    //ACTUALIZACION DE DATOS
    Route::post('actualizacion/store', 'ActualizacionController@store')->name('actualizacion.store');

    Route::get('actualizacion', 'ActualizacionController@index')->name('actualizacion.index');

    Route::get('actualizacion/create', 'ActualizacionController@create')->name('actualizacion.create');

    Route::match(['put','patch'],'actualizacion/{role}', 'ActualizacionController@update')->name('actualizacion.update');

    Route::get('actualizacion/{role}', 'ActualizacionController@show')->name('actualizacion.show');

    Route::delete('actualizacion/{role}', 'ActualizacionController@destroy')->name('actualizacion.destroy');

    Route::get('actualizacion/{role}/edit', 'ActualizacionController@edit')->name('actualizacion.edit');

    Route::post('actualizacion/searchgraduate', 'ActualizacionController@searchgraduate')->name('actualizacion.searchgraduate');




    //Rutas Usuarios
    Route::get('users_index', 'UsersController@index')->name('users.index')
        ->middleware('permission:Administrar usuarios');

    Route::get('users_edit/{user}', 'UsersController@edit')->name('users.edit')
        ->middleware('permission:Administrar usuarios');

    Route::put('users_update/{user}', 'UsersController@update')->name('users.update')
        ->middleware('permission:Administrar usuarios');

    Route::get('users_create', 'UsersController@create')->name('users.create')
        ->middleware('permission:Administrar usuarios');

    Route::post('users_store', 'UsersController@store')->name('users.store')
        ->middleware('permission:Administrar usuarios');

    Route::get('users_roles/{user}', 'UsersController@roles')->name('users.roles')
        ->middleware('permission:Administrar usuarios');


    //Agragar rol a un usuario
    Route::post('users_roles/{user}', 'UsersController@addRole')->name('users.addRole')
        ->middleware('permission:Administrar usuarios');


    //Romover rol a un usuario
    Route::get('users_roles/{user}/{role}', 'UsersController@removeRole')->name('users.removeRole')
        ->middleware('permission:Administrar usuarios');


    //Roles
    Route::get('roles_index', 'RolesController@index')->name('roles.index')
        ->middleware('permission:Administrar usuarios');

    Route::get('roles_create', 'RolesController@create')->name('roles.create')
        ->middleware('permission:Administrar usuarios');

    Route::post('roles_store', 'RolesController@store')->name('roles.store')
        ->middleware('permission:Administrar usuarios');

    Route::get('roles_edit/{role}', 'RolesController@edit')->name('roles.edit')
        ->middleware('permission:Administrar usuarios');

    Route::put('roles_update/{role}', 'RolesController@update')->name('roles.update')
        ->middleware('permission:Administrar usuarios');

    Route::get('roles_delete/{role}', 'RolesController@delete')->name('roles.delete')
        ->middleware('permission:Administrar usuarios');

    Route::get('roles_setting/{role}', 'RolesController@setting')->name('roles.setting')
        ->middleware('permission:Administrar usuarios');

    Route::name('getNoPermissions')->get('permissions_np/{id}', 'RolesController@noPermissions')
        ->middleware('permission:Administrar usuarios');

    Route::name('getRolePermissions')->get('permissions_role/{role}', 'RolesController@getRolePermissions')
        ->middleware('permission:Administrar usuarios');

    Route::name('addPermissionsToRole')->post('permissions_to_role', 'RolesController@addPermissionToRole')
        ->middleware('permission:Administrar usuarios');

    Route::name('deleteRolePermissions')->delete('delete_permissions_role/{role}/{permission}', 'RolesController@deleteRolePermissions')
        ->middleware('permission:Administrar usuarios');

});
