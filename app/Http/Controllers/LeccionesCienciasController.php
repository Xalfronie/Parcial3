<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LeccionesCienciasController extends Controller
{
    public function leccionesciencias(){
        return view('leccionesciencias');
    }
}
