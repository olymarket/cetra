<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\{
    Date,
    Hash,
    Validator
};
use App\Models\User;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except(['logout']);
    }

    public function index()
    {
        return view('Public.Register');
    }
    public function store(Request $request)
    {

        $rules = [
            'name'     => 'required|min:3|max:40|unique:users,name',
            'email'    => 'required|email|unique:users,email',
            'password' => 'required|min:8',
        ];

        $messages = [
            'name.required'     => 'Ingresar nombre',
            'name.min'          => '3 caracteres como minimo',
            'name.max'          => '40 caracteres como maximo',
            'name.unique'       => 'Este usuario ya existe',

            'email.required'    => 'Ingresar correo',
            'email.email'       => 'Tu correo no es valido',
            'email.unique'      => 'Este correo ya esta registrado',

            'password.required' => 'Ingresar contraseña',
            'password.min'      => '8 caracteres como mínimo',
        ];


        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) :
            return back()->withErrors($validator)->withInput()->with('error', 'Corriga los siguientes campos');
        else:
            $user = new User();
            $user->idStatu  = '1';
            $user->name     = e($request->input('name'));
            $user->idRole   = '2';
            $user->email    = e($request->input('email'));
            $user->password = Hash::make($request->input('password'));
            $user->date     = Date::now()->format('Y-m-d');
            $user->time     = Date::now()->format('g:i:s');
            $user->save();
        endif;

        return redirect()->route('public.login.index')->with('success', 'Usuario creado con exito');
    }
}
