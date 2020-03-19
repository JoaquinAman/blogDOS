<?php

namespace App\Http\Controllers;

use App\Profession;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function index() {

        $users = User::all();

        $title = 'Listado de usuarios';

        return view('users.index', compact('users', 'title'));   
    }

    public function show($id) 
    {
    $user = new User();

        $user = $user->where('id', $id)->first();

        if ($user == null) {
            return view('errors.404');
        }

        return view('users.show', compact('user'));
    }

    public function create()
    {
        $professions = Profession::all();

        return view('users.create', compact('professions'));
    }

    public function store()
    {
        $data = request()->validate([
            'name' => 'required',
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => 'required',
            'profession_id' => 'required',
        ], [
            'name.required' => 'El campo nombre es obligatorio',
            'email.required' => 'El campo email es obligatorio',
            'email.unique' => 'Este email ya fue tomado',
            'password.required' => 'El campo contraseña es obligatorio',
            'profession.required' => 'El campo profesion es obligatorio'
        ]);

        $user = new User;
        $user->name = $data["name"];
        $user->email = $data["email"];
        $user->password = $data["password"];
        $user->profession_id = $data["profession_id"];

        $user->save();

        return redirect()->route('users.index');
    }

    public function edit(User $user)
    {

        $professions = Profession::all();

        return view('users.edit',  ['user' => $user] , compact('professions'));
    }

    public function update(User $user)
    {
        $data = request()->validate([
            'name' => 'required',
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => 'required',
            'profession_id' => 'required',
        ], [
            'name.required' => 'El campo nombre es obligatorio',
            'email.required' => 'El campo email es obligatorio',
            'email.unique' => 'Este email ya fue tomado',
            'password.required' => 'El campo contraseña es obligatorio',
            'profession.required' => 'El campo profesion es obligatorio'
        ]);

        if($data['password'] != null) {
            $data['password'] = bcrypt($data['password']);
        } else {
            unset($data['password']);
        }

        if(isset($user)){
            $user->name = $data["name"];
            $user->email = $data["email"];
            $user->password = $data["password"];
            $user->profession_id = $data["profession_id"];
            $user->save();
        }else{
            return response()->view('errors.404', [], 404); 
        }

        return redirect()->route('users.show' , ['id' => $user->id]);
    }     

    function destroy(User $user)
    {
        if(isset($user)){
            $user->delete();
        }
        // else{
        //     return response()->view('errors.404', [], 404); 
        // }
        return redirect()->route('users.index');
    }

} 
