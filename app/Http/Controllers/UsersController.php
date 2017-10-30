<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(){

        $users = User::all();
        return view('users.index')->with(compact('users'));
    }

    public function listar(){
        $users = User::all();
        return response()->json($users, 200);
    }
}
