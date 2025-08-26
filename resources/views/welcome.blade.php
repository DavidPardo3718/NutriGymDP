@extends('layouts.app')

@section('title', 'NutriGym - Transforma tu cuerpo')

@section('content')

    <!-- Hero Section -->
    <section id="inicio" class="hero-gradient py-5" style="min-height: 500px; color: white;">
        <div class="container">
            <div class="row align-items-center" style="min-height: 500px;">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold mb-4">Transforma tu cuerpo, mejora tu salud</h1>
                    <p class="lead mb-4">Programas personalizados de nutrición y entrenamiento para ayudarte a alcanzar tus metas fitness.</p>
                    <div class="d-flex gap-3 flex-wrap">
                        <a href="#servicios" class="btn btn-light btn-lg">Nuestros Servicios</a>
                        <a href="{{ route('suplementos.index') }}" class="btn btn-outline-light btn-lg">
                            <i class="fas fa-pills me-2"></i> Ver Suplementos
                        </a>
                        <a href="{{ route('register') }}" class="btn btn-primary btn-lg">
                            Empieza Ahora
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80"
                        class="img-fluid rounded-lg shadow-lg" alt="Fitness">
                </div>
            </div>
        </div>
    </section>

    <!-- Servicios -->
    <section id="servicios" class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Nuestros Servicios</h2>
                <p class="text-muted">Ofrecemos soluciones integrales para tu bienestar físico y nutricional.</p>
            </div>
            
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm text-center p-4">
                        <i class="fas fa-utensils fa-3x text-primary mb-3"></i>
                        <h5 class="card-title">Planes Nutricionales</h5>
                        <p class="card-text">Dietas personalizadas según tus objetivos, preferencias y estilo de vida.</p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm text-center p-4">
                        <i class="fas fa-dumbbell fa-3x text-primary mb-3"></i>
                        <h5 class="card-title">Rutinas de Entrenamiento</h5>
                        <p class="card-text">Programas de ejercicio adaptados a tu nivel y disponibilidad de tiempo.</p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm text-center p-4">
                        <i class="fas fa-chart-line fa-3x text-primary mb-3"></i>
                        <h5 class="card-title">Seguimiento Personalizado</h5>
                        <p class="card-text">Acompañamiento constante y ajustes para garantizar tu progreso.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
