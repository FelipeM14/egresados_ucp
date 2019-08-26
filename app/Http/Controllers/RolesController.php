<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRoleRequest;
use App\Http\Requests\UpdateRoleRequest;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesController extends Controller
{

    //Muestra los roles creados
    public function index(){

        $roles = Role::paginate(5);

        return view('roles.index', ['roles' => $roles]);

    }

    //Muestra la vista ingresar un nuevo rol
    public function create(){

        return view('roles.create');
    }

    //Ingresa un nuevo rol a la BD
    public function store(CreateRoleRequest $request){

        $role = Role::create([
            'name' => $request->name
        ]);

        if($role){
            session()->flash('message', 'El rol '.$request->name.' fue creado correctamente!');
        }

        return redirect()->route('roles.index');
    }

    //Muestra la vista para editar un rol
    public function edit(Role $role){

        return view('roles.edit', ['role' => $role]);
    }

    //Edita un rol
    public function update(UpdateRoleRequest $request, Role $role){

        $c = $role->update(['name' => $request->name]);

        if($c){
            session()->flash('message', 'El rol '.$request->name.' fue actualizado correctamente!');
        }

        return redirect()->route('roles.index');
    }

    //Eliminar un rol
    public function delete(Role $role){

        //Busca los permisos que tiene el rol
        $permissions = $role->permissions()->get()->toArray();

        //Busca los usuarios que tienen el rol
        $users = $role->users()->get()->toArray();

        $np = count($permissions);

        if($np){
            session()->flash('mjs_error', 'No es posible eliminar el rol por que tiene permisos asignados');
            return redirect()->route('roles.index');
        }

        $nu = count($users);
        if($nu){
            session()->flash('mjs_error', 'No es posible eliminar el rol por que '.$nu.' usuario(s) lo tiene(n) asignado');
            return redirect()->route('roles.index');
        }

        $d = $role->delete();

        if($d){
            session()->flash('message', 'El rol '.$role->name.' fue eliminado correctamente!');
        }

        return redirect()->route('roles.index');
    }

    public function setting(Role $role){

        return view('roles.setting', ['role' => $role]);
    }




    public function noPermissions($id){

        $role = [];
        $yes_roles = $this->getRolePermissions($id);

        foreach ($yes_roles as $yes_role){
            $role[] = $yes_role->id;
        }

        return Permission::select('permissions.id', 'permissions.name')
            ->whereNotIn('id', $role)
            ->get();
    }

    public function addPermissionToRole(Role $role, Permission $permission){

        $role->givePermissionTo($permission);
    }

    public function getRolePermissions(Role $role){

        return $role->permissions()->get();
    }

    public function deleteRolePermissions($id){

        //

    }

}
