@extends('layouts.plantilla')

@section('titulo', 'SPM - Sport Performance Metrics')

@section('contenido')
<div class="p-4" style="background-color: lightslategray; border:1px solid #ddd; border-radius: 10px;">
    <div id="Portada" 
         class="d-flex justify-content-center align-items-center text-white" 
         style="height: 100vh; background-image: url('{{ asset('images/PortadaSPM.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat; position: relative;">
        
        <div class="text-center" style="background: rgba(0, 0, 0, 0.5); padding: 20px; border-radius: 10px;">
            <h1 class="display-4">Sport Performance Metrics (SPM)</h1>
            <p class="lead">La plataforma definitiva para medir y mejorar el rendimiento deportivo.</p>
        </div>
    </div>

    <div class="mt-5 container">
        <!-- Section: Business Overview -->
        <div class="card mb-4">
            <div class="card-header bg-primary text-white">
                <h2>Requerimientos del Negocio</h2>
            </div>
            <div class="card-body">
                <p><strong>Situación actual:</strong> El proyecto está en fase de reformulación debido a fallos en la ejecución inicial. La organización busca una solución confiable y precisa para la medición de métricas deportivas.</p>
                <p><strong>Oportunidad de negocio:</strong> Existe una alta demanda de herramientas avanzadas para entrenamientos, con oportunidades en personalización, accesibilidad y facilidad de uso frente a competidores como Garmin y TomTom.</p>
            </div>
        </div>

        <!-- Section: Objectives -->
        <div class="card mb-4">
            <div class="card-header bg-success text-white">
                <h2>Objetivos del Proyecto</h2>
            </div>
            <div class="card-body">
                <ul>
                    <li>Mejorar el rendimiento de atletas de alto nivel con métricas precisas y en tiempo real.</li>
                    <li>Aumentar la eficiencia de entrenadores en un 15% mediante herramientas simplificadas.</li>
                    <li>Expandir la base de usuarios en un 20% durante el primer año.</li>
                    <li>Reducir costos operativos en un 10% centralizando funciones en una única plataforma.</li>
                </ul>
            </div>
        </div>

        <!-- Section: Solution Features -->
        <div class="card mb-4">
            <div class="card-header bg-info text-white">
                <h2>Funciones Principales</h2>
            </div>
            <div class="card-body">
                <ul>
                    <li>Monitoreo de frecuencia cardíaca en tiempo real.</li>
                    <li>Cálculo de zonas de entrenamiento con la fórmula de Karvonen.</li>
                    <li>Visualización gráfica del progreso deportivo.</li>
                    <li>Sistema de alertas para evitar lesiones por sobreentrenamiento.</li>
                    <li>Gestión de perfiles de atletas y entrenadores.</li>
                </ul>
            </div>
        </div>

        <!-- Section: Business Context -->
        <div class="card mb-4">
            <div class="card-header bg-warning text-dark">
                <h2>Contexto del Negocio</h2>
            </div>
            <div class="card-body">
                <p><strong>Perfil de interesados:</strong> Incluye ejecutivos, entrenadores, atletas y desarrolladores de tecnología.</p>
                <p><strong>Ambiente de operación:</strong> Usuarios globales acceden a través de dispositivos móviles y wearables con alta disponibilidad.</p>
                <p><strong>Reglas de negocio:</strong> Las métricas se actualizan en tiempo real y solo usuarios autorizados tienen acceso a datos sensibles.</p>
            </div>
        </div>
    </div>
</div>
@endsection
