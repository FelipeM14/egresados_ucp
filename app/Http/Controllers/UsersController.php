<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Mail\Complete;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
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
}
