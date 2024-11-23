@extends('layouts.plantilla')

@section('titulo', 'SPM - Sport Performance Metrics')

@section('contenido')
<div class="p-4" style="background-color: lightslategray; border:1px solid #ddd; border-radius: 10px;">
    <!-- Portada -->
    <div id="Portada" 
         class="d-flex justify-content-center align-items-center text-white" 
         style="height: 100vh; background-image: url('{{ asset('images/PortadaSPM.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat; position: relative;">
        
        <div class="text-center" style="background: rgba(0, 0, 0, 0.5); padding: 20px; border-radius: 10px;">
            <h1 class="display-4">Sport Performance Metrics (SPM)</h1>
            <p class="lead">La plataforma definitiva para medir y mejorar el rendimiento deportivo.</p>
        </div>
    </div>

    <div class="mt-5 container">
        <!-- Sección de Inicio de Sesión y Registro -->
        <div class="row">
            <!-- Inicio de Sesión -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h3>Inicia Sesión</h3>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">Correo Electrónico</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Contraseña</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="remember" name="remember">
                                <label class="form-check-label" for="remember">Recuérdame</label>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Iniciar Sesión</button>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Registro -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-success text-white">
                        <h3>Crea una Cuenta</h3>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Nombre Completo</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Correo Electrónico</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Contraseña</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <div class="mb-3">
                                <label for="password_confirmation" class="form-label">Confirmar Contraseña</label>
                                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                            </div>
                            <button type="submit" class="btn btn-success w-100">Registrarse</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
