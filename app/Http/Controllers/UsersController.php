<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Mail\Complete;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;

class UsersController extends Controller
{
    public function index(){

        $users = User::orderBy('id', 'DESC')->paginate(5);

        return view('users.index',['users' => $users]);

    }

    public function create(){

        $roles = Role::all();
        return view('users.create', ['roles' => $roles]);
    }

    //Crear un nuevo usuario
    public function store(CreateUserRequest $request){

        $code = Str::random(40);

        $user = User::create([
            'name' => $request->name,
            'last_name' => $request->last_name,
            'document_type' => $request->document_type,
            'document_number' => $request->document_number,
            'email' => $request->email,
            'remember_token' => $code,
        ]);

        if($user){

            $role = Role::find($request->role);
            $user->assignRole($role);

            Mail::to($request->email)
                ->send(new Complete($request->name, $request->last_name, $code));
        }


        if($user){
            session()->flash('message', 'El usuario '.$request->name.' fue creado correctamente!');
        }

        return redirect()->route('users.index');

    }

    public function complete($code){

        $user = User::where('remember_token', $code)
            ->whereNull('password')->first();

        return view('users.complete', ['user' => $user]);
    }

    public function updatePass(User $user, Request $request){

        $update = $user->update(['password' => Hash::make($request->password)]);

        if($update){
            session()->flash('message', 'Sus datos se han actualizado correctamente!');
        }

        return redirect()->route('login');
    }

    public function edit(User $user){

        return view('users.edit', ['user' => $user]);
    }

    public function update(UpdateUserRequest $request, User $user){

        $u = $user->update([
            'name' => $request->name,
            'last_name' => $request->last_name,
            'document_type' => $request->document_type,
            'document_number' => $request->document_number,
            'email' => $request->email,
            'active' => $request->active,
        ]);

        if($u){
            session()->flash('message', 'Los datos del usuario '.$request->name.' fueron actualizados correctamente!');
        }

        return redirect()->route('users.index');
    }

    public function roles(User $user){

        $roles = $user->roles()->paginate(5);
        $role_arr = [];

        foreach ($roles as $role)
            $role_arr[] = $role->id;

        $not_roles = Role::whereNotIn('id', $role_arr)->get();

        return view('users.roles.index', ['roles' => $roles, 'not_roles' => $not_roles, 'user' => $user]);
    }

    public function addRole(User $user, Request $request){

        $messages = [
            'new_role.required' => 'Debe seleccionar un rol!'
        ];

        $validator = Validator::make($request->all(), [
            'new_role' => 'required',
        ], $messages);

        if($validator->fails()){
            return redirect()->route('users.addRole', ['user' => $user->id])
                ->withErrors($validator)
                ->withInput();
        }

        $r = $user->assignRole($request->new_role);

        if($r){
            $role = Role::find($request->new_role);
            session()->flash('message', 'El rol '.$role->name.' fue asignado correctamente!');
        }

        return redirect()->route('users.addRole', ['user' => $user->id]);
    }

    public function removeRole(User $user, Role $role){

        $r = $user->removeRole($role->id);

        if($r){
            session()->flash('message', 'El rol '.strtolower($role->name).' fue removido correctamente!');
        }

        return redirect()->route('users.addRole', ['user' => $user->id]);

    }
}
