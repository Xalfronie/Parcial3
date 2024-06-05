<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LeccionesSocialesController extends Controller
{
    public function leccionessociales(){
        return view('leccionessociales');
    }
}
