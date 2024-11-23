<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\InicioSesion;
use App\Http\Controllers\Vistas;
use Illuminate\Support\Facades\Route;


Route::get('/',[Vistas::class,'home'])->name('rutainicio');

Route::get('/Info',[Vistas::class,'info'])->name('rutaInfo');


Route::get('/Logged',[Vistas::class,'logged'])->name('rutalg');

Route::get('/InicioSesion',[InicioSesion::class,'create'])->name('rutaIS');



Route::post('/Register',[InicioSesion::class,'store'])->name('rutaRegister');

Route::post('/Login',[InicioSesion::class,'index'])->name('rutalogin');


Route::middleware('auth')->group(function () {
    Route::get('/atleta/dashboard', [InicioSesion::class, 'atleta'])->name('atleta.dashboard'); // Dashboard de atleta
    Route::get('/entrenador/dashboard', [InicioSesion::class, 'entrenador'])->name('entrenador.dashboard'); // Dashboard de entrenador
    Route::post('/logout', [InicioSesion::class, 'logout'])->name('logout'); // Cerrar sesión
});
