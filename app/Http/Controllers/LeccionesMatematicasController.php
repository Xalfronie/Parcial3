<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LeccionesMatematicasController extends Controller
{
    public function leccionesmatematicas(){
        return view('leccionesmatematicas');
    }
}
