<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{
    Validator,
    Auth,
};

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except(['logout']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('public.home');
    }

    public function index()
    {
        return view('Public.Login.Login');
    }

    public function store(Request $request)
    {

        $rules = [
            'email'                    => 'required|email|exists:users,email',
            'password'                 => 'required|min:8',
        ];
        $messages = [
            'email.required'           => 'Ingresa tu correo',
            'email.exists'             => 'Este usuario no existe',
            'email.email'              => 'Tu correo no es valido',

            'password.required'        => 'Introduce una contraseña',
            'password.min'             => '8 caracteres como minimo',

        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) :
            return back()->withErrors($validator)->withInput()->with('error', 'Error al iniciar sesión');
        else :
            if (Auth::attempt([
                'email'     => e($request->input('email')),
                'password'  => $request->input('password'),
                'idStatu'   => '1'], true)) :
                return redirect()->route('public.home.index');
            else :
                return back()->with('error', 'Error, Usuario suspendido');
            endif;
        endif;
    }
}
