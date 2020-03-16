<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        return 'Hola amigos';   
    }

    public function create() {
        return 'crea un nuevo usuario';   
    }

    public function saludar($name) {
        return view('users.users', compact('name'));
    }

    public function users() {
       $users = ['jorge', 'juana', 'jorgelina', 'bernardo'];
       
        return view('users.users', compact('users'));
    }
        
}
