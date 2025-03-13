<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EntrenadorController extends Controller
{
    // Método para el dashboard del entrenador
    public function dashboard()
    {
        return view('entrenador.dashboard'); 
    }
}
