<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Vistas extends Controller
{
    public function home(){
        return view('welcome');
    }

    public function info(){
        return view('Qual');
    }

    public function logged(){
        return view('Logged');
    }
}
