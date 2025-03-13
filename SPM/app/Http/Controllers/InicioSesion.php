<?php

namespace App\Http\Controllers;

use App\Http\Requests\Validacion;
use App\Http\Requests\ValidacionLg;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;

class InicioSesion extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(ValidacionLg $request)
    {
        // Verificar que el usuario existe en la base de datos
        $user = DB::table('usuarios_s_p_m')->where('email', $request->lemail)->first();
    
        if (!$user || $request->lpassword !== $user->password) {
            // Si el usuario no existe o la contraseña es incorrecta
            return back()->withErrors(['lemail' => 'Correo electrónico o contraseña incorrectos']);
        }
    
        // Iniciar sesión (guardar datos en la sesión)
        session([
            'user_id' => $user->id,
            'role' => $user->role,
            'name' => $user->name,
        ]);
    
        // Verificar si el rol es de entrenador (por ejemplo, rol 1 para entrenador)
        if ($user->role == 'entrenador') {
            // Si es un entrenador, redirigir a la vista de entrenadores
            return redirect()->route('entrenador.dashboard');
        } else {
            // Si no es un entrenador (por ejemplo, si es un atleta), no permitir el acceso
            return back()->withErrors(['lemail' => 'No tienes permisos para acceder']);
        }
    }
    
    
    // Método para cerrar sesión
    public function logout()
    {
        session()->flush();
        return redirect()->route('iniciosesion'); // Redirige al formulario de inicio de sesión
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('iniciosesion');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Validacion $request)
    {
        DB::table('usuarios_s_p_m')->insert([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'role' => $request->input('role'), // 'atleta' o 'entrenador'
            'deporte' => $request->input('deporte'),
            'entrenador' => $request->input('role') === 'atleta' ? $request->input('entrenador') : null, // Si es atleta, se guarda el entrenador
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        // Redirección con un mensaje flash
        $usuario = $request->input('name');
        session()->flash('exito', 'Se guardó el usuario: ' . $usuario);
        return to_route('rutaIS'); // Asegúrate de que esta ruta esté correctamente definida
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
