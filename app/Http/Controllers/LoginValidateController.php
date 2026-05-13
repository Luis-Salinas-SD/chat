<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginValidateController extends Controller
{
    //
    public function login()
    {
        return view('login');
    }

    public function validation(Request $request)
    {

        $credential = $request->only('user', 'password');

        $request->validate([
            'user' => 'required',
            'password' => 'required'
        ]);


        //dd(Auth::attempt($credential));

        // Intentar autenticar
        if (Auth::attempt($credential)) {
            dd('Autenticación exitosa');

            // Regenera la sesión por seguridad
            $request->session()->regenerate();


            return redirect()->route('dashboard')
                ->with('success', 'Inicio de sesión exitoso');
        }

        dd('Autenticación fallida');


        return redirect()->back()->with('success', 'Inicio de sesión exitoso');
    }
}
