<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

//Modelos
use App\Models\User;


class LoginController extends Controller
{
    public function create()
    {
        return view('Auth.login');
    }

    public function store()
    {
        $credentials =  request()->validate([
            'usuario' => ['required', 'string'],
            'password' => ['required', 'string'],
        ]);

        if (Auth::attempt($credentials)) {

            request()->session()->regenerate();

            return redirect(route('pagmain'));
        } else {
            Session::flash('Login_Incorrecto', 'Usuario o contraseña incorrecta, por favor verifique.');
            return redirect(route('/'));
        }
    }

    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
