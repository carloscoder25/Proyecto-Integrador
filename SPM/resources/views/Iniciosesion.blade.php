@extends('layouts.plantilla')

@section('titulo', 'SPM - Sport Performance Metrics')

@section('contenido')

@if(session('exito'))
<script>
    Swal.fire({
        title: "¡Éxito!",
        text: "{{{ session('exito') }}}",
        icon: "success",
        confirmButtonText: "Aceptar",
    });
</script>
@endif

<script>
function toggleRole() {
    const role = document.getElementById('roleSelect').value;

    // Mostrar/Ocultar campos según el rol seleccionado
    document.getElementById('atletaFields').classList.toggle('d-none', role !== 'atleta');
    document.getElementById('entrenadorFields').classList.toggle('d-none', role !== 'entrenador');
}

// Inicializar estado del formulario
document.addEventListener('DOMContentLoaded', toggleRole);

</script>

<div class="p-4" style="background-color: lightslategray; border:1px solid #ddd; border-radius: 10px;">

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
                        <form method="POST" action="{{ route('rutalogin') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">Correo Electrónico</label>
                                <input type="email" class="form-control" id="lemail" name="lemail" value="{{ old('lemail') }}">
                                <small class="text-danger fst-bold">{{ $errors->first('lemail') }}</small>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Contraseña</label>
                                <input type="password" class="form-control" id="lpassword" name="lpassword" value="{{ old('lpassword') }}">
                                <small class="text-danger fst-bold">{{ $errors->first('lpassword') }}</small>
                            </div>
                            
                            <button type="submit" class="btn btn-primary w-100">Iniciar Sesión</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-success text-white">
                        <h3>Crea una Cuenta</h3>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('rutaRegister') }}">
                            @csrf
                            
                            <!-- Nombre -->
    <div class="mb-3">
        <label for="name" class="form-label">Nombre Completo</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" >
        <small class="text-danger fst-bold">{{ $errors->first('name') }}</small>
    </div>

    <!-- Correo Electrónico -->
    <div class="mb-3">
        <label for="email" class="form-label">Correo Electrónico</label>
        <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" >
        <small class="text-danger fst-bold">{{ $errors->first('email') }}</small>
    </div>

    <!-- Contraseña -->
    <div class="mb-3">
        <label for="password" class="form-label">Contraseña</label>
        <input type="password" class="form-control" id="password" name="password" >
        <small class="text-danger fst-bold">{{ $errors->first('password') }}</small>
    </div>

    <!-- Selección de Rol -->
    <div class="mb-3">
        <label class="form-label">Registrarse como:</label>
        <select class="form-select" id="roleSelect" name="role" onchange="toggleRole()">
            <option value="atleta" {{ old('role') == 'atleta' ? 'selected' : '' }}>Atleta</option>
            <option value="entrenador" {{ old('role') == 'entrenador' ? 'selected' : '' }}>Entrenador</option>
        </select>
    </div>

    <!-- Deporte -->
    <div class="mb-3">
        <label for="deporte" class="form-label">Deporte</label>
        <input type="text" class="form-control" id="deporte" name="deporte" value="{{ old('deporte') }}" >
        <small class="text-danger fst-bold">{{ $errors->first('deporte') }}</small>
    </div>

    <!-- Campos para Atleta -->
    <div id="atletaFields" class="d-none">
        <div class="mb-3">
            <label for="entrenador" class="form-label">Entrenador</label>
            <input type="text" class="form-control" id="entrenador" name="entrenador" value="{{ old('entrenador') }}">
            <small class="text-danger fst-bold">{{ $errors->first('entrenador') }}</small>
        </div>
    </div>

    <!-- Campos para Entrenador -->
    <div id="entrenadorFields" class="d-none">
        <!-- No se necesitan campos adicionales para Entrenador -->
    </div>

    <!-- Botón de Enviar -->
    <button type="submit" class="btn btn-success w-100">Registrarse</button>

                        </form>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>

@endsection
