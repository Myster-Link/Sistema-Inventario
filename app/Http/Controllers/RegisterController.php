<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

//Modelos
use App\Models\User;


class RegisterController extends Controller
{

    public function create()
    {
        return view('Auth.register');
    }

    public function store(Request $request)
    {
        $Datos = request()->validate(
            [
                'usuario' => ['required', 'unique:users','string'],
                'password' => 'required|min:8',
                'name' => ['required', 'string'],
                'apellidos' => ['required', 'string'],
                'email' => 'required|email|unique:users,email,',
                'telefono' => ['required', 'string'],

            ],
        );

        $Datos = $request->all();

        $Datos['password'] = bcrypt($request->password);

        User::create($Datos);

        return redirect(route('login'));
    }

}
