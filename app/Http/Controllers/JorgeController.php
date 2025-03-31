<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JorgeController extends Controller
{

    public function index ()
    {
        return view('VistaJorge.Prueba');
    }

    public function info (){
        return view('VistaJorge.info');
    }
}
