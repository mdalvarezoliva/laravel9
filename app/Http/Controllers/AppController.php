<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{

    public function pruebas()
    {
        return view('pruebas', [
            'nombre'=> 'Home Page',
            'icono'=>'bi bi-house-heart-fill'
        ]);
    }

    public function home()
    {
        return view('home', [
            'nombre'=> 'Home Page',
            'icono'=>'bi bi-house-heart-fill'
        ]);
    }

    public function about()
    {
        return view('about', [
            'nombre'=> 'Acerca de...',
            'icono'=>'bi bi-bookmark-check-fill'
        ]);
    }

    public function contact()
    {
        return view('contact', [
            'nombre'=> 'Contacto',
            'icono'=>'bi bi-person-vcard-fill'
        ]);
    }
}
