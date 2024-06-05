<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MateriasController extends Controller
{
    public function materias(){
        return view('materias');
    }
}