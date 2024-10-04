<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function login()
    {
        return view('login.login');
    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return to_route('login')->with('status', 'Usuario logout exitosamente!');
    }

    public function store(Request $request)
    {
        $credencials = $request->validate([
            'email'=>['required', 'string', 'email'],
            'password'=>['required', 'string'],
        ]);

        if ( ! Auth::attempt($credencials, $request->boolean('remember'))){
            throw ValidationException::withMessages(['email' => __('auth.failed')]);
        } 

        $request->session()->regenerate();
        return redirect()->intended()->with('status', 'Usuario logueado exitosamente!');
    }

    public function create_login()
    {
        return view('login.create');
    }

    public function store_login(SaveUserRequest $request)
    {
        $user = User::create([
            'name' => $request->input('name'),       
            'email' => $request->input('email'), 
            'password' => bcrypt($request->input('password')), 
         ]);

         Auth::login($user);

         return to_route('home', [
            'nombre'=> 'Home Page',
            'icono'=>'bi bi-house-heart-fill'
        ])->with('status', 'Usuario Creado Exitosamente!');
    }
}



