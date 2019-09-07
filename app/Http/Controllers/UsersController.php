<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function index(){

        $users = User::paginate(5);

        return view('users.index',['users' => $users]);

    }

    public function create(){

        return view('users.create');
    }

    public function store(CreateUserRequest $request){

        User::create([
            'name' => $request->name,
            'last_name' => $request->last_name,
            'document_type' => $request->document_type,
            'document_number' => $request->document_number,
            'email' => $request->email,
        ]);
    }
}
