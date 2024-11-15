@extends('layouts.plantilla')

@section('titulo', 'SPM - Sport Performance Metrics')

@section('contenido')
<!-- Portada -->
<div id="Portada" 
     class="d-flex justify-content-center align-items-center text-white"
     style="height: 100vh; background-image: url('{{ asset('images/PortadaSPM.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat; position: relative;">
    <div class="text-center" style="background: rgba(0, 0, 0, 0.7); padding: 40px; border-radius: 15px; max-width: 700px;">
        <h1 class="display-3" style="color: #FFA500; font-weight: bold;">Sport Performance Metrics</h1>
        <p class="lead" style="color: #f1f1f1;">Transformando el rendimiento deportivo con soluciones innovadoras.</p>
        <a href="#secciones" class="btn btn-lg" style="background-color: #FFA500; color: black; font-weight: bold; border-radius: 25px;">Descubre más</a>
    </div>
</div>

<!-- Propósito -->
<div id="proposito" class="d-flex justify-content-center align-items-center" style="height: 100vh; background-color: #333; color: #f1f1f1;">
    <div class="text-center">
        <h2 style="color: #FFA500; font-weight: bold;">Nuestro Propósito</h2>
        <p style="font-size: 1.2rem;">En SPM creemos en el poder de la tecnología para mejorar el rendimiento deportivo. Nuestra misión es ofrecer herramientas avanzadas que permitan a los atletas y entrenadores tomar decisiones basadas en datos precisos y en tiempo real.</p>
    </div>
</div>

<!-- Equipo -->
<div id="equipo" class="d-flex justify-content-center align-items-center" style="height: 100vh; background-color: #444; color: #f1f1f1;">
    <div class="row align-items-center text-center w-100">
        <div class="col-md-6">
            <img src="{{ asset('images/Equipo.jpeg') }}" alt="Equipo SPM" class="img-fluid rounded" style="width: 100%; height: 100%; object-fit: cover; border: 3px solid #FFA500;">
        </div>
        <div class="col-md-6">
            <h2 style="color: #FFA500; font-weight: bold;">Nuestro Equipo</h2>
            <p style="font-size: 1rem;">Nuestro equipo está formado por desarrolladores, expertos en tecnología deportiva, y entrenadores con amplia experiencia. Trabajamos en conjunto para crear soluciones que combinan ciencia, tecnología y usabilidad.</p>
        </div>
    </div>
</div>


<!-- Beneficios -->
<div id="beneficios" class="d-flex justify-content-center align-items-center" style="height: 100vh; background-color: #555; color: #f1f1f1;">
    <div class="text-center w-100">
        <h2 style="color: #FFA500; font-weight: bold;">Beneficios de SPM</h2>
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="card text-white bg-dark">
                    <div class="card-body text-center">
                        <i class="fas fa-heartbeat fa-3x" style="color: #FFA500;"></i>
                        <h5 class="card-title mt-3">Monitoreo Avanzado</h5>
                        <p class="card-text">Datos en tiempo real para optimizar entrenamientos.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-white bg-dark">
                    <div class="card-body text-center">
                        <i class="fas fa-chart-line fa-3x" style="color: #FFA500;"></i>
                        <h5 class="card-title mt-3">Resultados Tangibles</h5>
                        <p class="card-text">Gráficas claras que muestran el progreso de manera visual.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-white bg-dark">
                    <div class="card-body text-center">
                        <i class="fas fa-user-shield fa-3x" style="color: #FFA500;"></i>
                        <h5 class="card-title mt-3">Prevención de Lesiones</h5>
                        <p class="card-text">Alertas personalizadas para garantizar la seguridad de los atletas.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
