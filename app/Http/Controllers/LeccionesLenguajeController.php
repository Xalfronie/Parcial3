<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LeccionesLenguajeController extends Controller
{
    public function leccioneslenguaje(){
        return view('leccioneslenguaje');
    }
}
