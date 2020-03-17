<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index() {

        $users = User::all();

        $title = 'Listado de usuarios';

        return view('users.index', compact('users', 'title'));   
    }

    public function show($id) 
    {
        $users = new User();

        $users = $users->where('id', $id)->first();
    
        return view('users.show', compact('user'));
    }

        
}
