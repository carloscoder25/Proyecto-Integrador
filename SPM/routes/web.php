<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\InicioSesion;
use App\Http\Controllers\Vistas;
use Illuminate\Support\Facades\Route;

// Ruta de inicio
Route::get('/', [Vistas::class, 'home'])->name('rutainicio');

// Ruta de información
Route::get('/Info', [Vistas::class, 'info'])->name('rutaInfo');

// Ruta de logged (inicio de sesión)
Route::get('/Logged', [Vistas::class, 'logged'])->name('rutalg');

// Ruta de inicio de sesión (Formulario)
Route::get('/InicioSesion', [InicioSesion::class, 'create'])->name('rutaIS');

// Ruta para registrar
Route::post('/Register', [InicioSesion::class, 'store'])->name('rutaRegister');

// Ruta para iniciar sesión (POST)
Route::post('/Login', [InicioSesion::class, 'index'])->name('rutalogin');

// Rutas protegidas por autenticación (middleware 'auth')
Route::middleware('auth')->group(function () {
    // Dashboard de atleta (solo accesible por atletas)
    Route::get('/atleta/dashboard', [InicioSesion::class, 'atleta'])->name('atleta.dashboard');

    // Dashboard de entrenador (solo accesible por entrenadores)
    Route::get('/entrenador/dashboard', [InicioSesion::class, 'entrenador'])->name('entrenador.dashboard'); // Cambié de POST a GET

    // Cerrar sesión
    Route::post('/logout', [InicioSesion::class, 'logout'])->name('logout');
});
