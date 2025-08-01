<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="NutriGym - Tu guía completa para nutrición y fitness. Planes personalizados, recetas saludables y rutinas de ejercicio.">

        <title>Laravel - NutriGymDP</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600|family=poppins:500,600,700" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

        <!-- Scripts -->
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
        
        <style>
            :root {
                --primary: #4361ee;
                --primary-dark: #3a56d4;
                --secondary: #3f37c9;
                --accent: #4895ef;
                --light: #f8f9fa;
                --dark: #212529;
            }
            
            body {
                font-family: 'Instrument Sans', sans-serif;
                scroll-behavior: smooth;
                line-height: 1.6;
                margin: 0;
                padding: 0;
                overflow-x: hidden;
            }
            
            .container {
                width: 100%;
                max-width: 1200px;
                margin: 0 auto;
                padding: 0 20px;
                box-sizing: border-box;
            }
            
            .hero-gradient {
                background: linear-gradient(135deg, var(--primary) 0%, var(--accent) 100%);
                color: white;
                padding: 80px 0;
            }
            
            .feature-card {
                transition: all 0.3s ease;
                background: white;
                border-radius: 12px;
                padding: 30px;
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
                margin-bottom: 20px;
            }
            
            .feature-card:hover {
                transform: translateY(-5px);
                box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            }
            
            .btn-primary {
                background: var(--primary);
                color: white;
                padding: 12px 24px;
                border-radius: 8px;
                font-weight: 500;
                display: inline-block;
                transition: all 0.3s ease;
                text-decoration: none;
                border: none;
                cursor: pointer;
            }
            
            .btn-primary:hover {
                background: var(--primary-dark);
                transform: translateY(-2px);
                box-shadow: 0 5px 15px rgba(67, 97, 238, 0.4);
            }
            
            .btn-outline {
                border: 2px solid white;
                color: white;
                padding: 12px 24px;
                border-radius: 8px;
                font-weight: 500;
                display: inline-block;
                transition: all 0.3s ease;
                text-decoration: none;
                background: transparent;
                cursor: pointer;
            }
            
            .btn-outline:hover {
                background: white;
                color: var(--primary);
            }
            
            .section-title {
                font-size: 2.5rem;
                font-weight: 700;
                margin-bottom: 20px;
                font-family: 'Poppins', sans-serif;
                text-align: center;
                position: relative;
                padding-bottom: 15px;
            }
            
            .section-title:after {
                content: '';
                position: absolute;
                width: 80px;
                height: 4px;
                background: var(--primary);
                bottom: 0;
                left: 50%;
                transform: translateX(-50%);
                border-radius: 2px;
            }
            
            .section-subtitle {
                font-size: 1.2rem;
                color: #666;
                text-align: center;
                max-width: 700px;
                margin: 0 auto 50px;
            }
            
            /* Header styles */
            header {
                background: white;
                box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
                position: sticky;
                top: 0;
                z-index: 1000;
                padding: 15px 0;
            }
            
            .logo {
                display: flex;
                align-items: center;
                font-size: 1.5rem;
                font-weight: 700;
                color: var(--primary);
                text-decoration: none;
            }
            
            .logo i {
                margin-right: 10px;
            }
            
            /* Hero section */
            .hero-content {
                display: flex;
                flex-direction: column;
                align-items: center;
                text-align: center;
            }
            
            .hero-image {
                max-width: 100%;
                height: auto;
                border-radius: 12px;
                box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
                margin-top: 30px;
            }
            
            /* Features section */
            .features-grid {
                display: grid;
                grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
                gap: 30px;
                margin-top: 50px;
            }
            
            /* Responsive adjustments */
            @media (min-width: 768px) {
                .hero-content {
                    flex-direction: row;
                    text-align: left;
                    align-items: center;
                }
                
                .hero-text {
                    flex: 1;
                    padding-right: 40px;
                }
                
                .hero-image-container {
                    flex: 1;
                }
                
                .hero-image {
                    margin-top: 0;
                }
            }
            
            @media (max-width: 767px) {
                .section-title {
                    font-size: 2rem;
                }
                
                .btn-primary, .btn-outline {
                    display: block;
                    width: 100%;
                    margin-bottom: 10px;
                }
                
                .hero-buttons {
                    display: flex;
                    flex-direction: column;
                }
            }
        </style>
    </head>
    <body>
        <!-- Header -->
        <header>
            <div class="container">
                <div class="flex justify-between items-center">
                    <a href="#" class="logo">
                        <i class="fas fa-dumbbell"></i>
                        <span>NutriGym</span>
                    </a>
                    
                    @if (Route::has('login'))
                        <nav class="hidden md:flex items-center gap-6">
                            <a href="#servicios" class="text-gray-700 hover:text-primary">Servicios</a>
                            <a href="#nutricion" class="text-gray-700 hover:text-primary">Nutrición</a>
                            <a href="#testimonios" class="text-gray-700 hover:text-primary">Testimonios</a>
                            
                            @auth
                                <a href="{{ url('/dashboard') }}" class="btn-primary">
                                    Dashboard
                                </a>
                            @else
                                <a href="{{ route('login') }}" class="text-gray-700 hover:text-primary">
                                    Iniciar Sesión
                                </a>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="btn-primary">
                                        Registrarse
                                    </a>
                                @endif
                            @endauth
                        </nav>
                    @endif
                    

                </div>
            </div>
        </header>

        <!-- Hero Section -->
        <section id="inicio" class="hero-gradient">
            <div class="container">
                <div class="hero-content">
                    <div class="hero-text">
                        <h1 class="text-4xl md:text-5xl font-bold mb-6">Transforma tu cuerpo, mejora tu salud</h1>
                        <p class="text-xl mb-8">Programas personalizados de nutrición y entrenamiento para ayudarte a alcanzar tus metas fitness.</p>
                        <div class="hero-buttons">
                            <a href="#servicios" class="btn-outline mr-4 mb-4 md:mb-0">Nuestros Servicios</a>
                            <a href="{{ route('register') }}" class="btn-primary">Empieza Ahora</a>
                        </div>
                    </div>
                    <div class="hero-image-container">
                        <img src="https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=880&q=80"
                             alt="Persona haciendo ejercicio"
                             class="hero-image">
                    </div>
                </div>
            </div>
        </section>

        <!-- Features Section -->
        <section id="servicios" class="py-20 bg-gray-50">
            <div class="container">
                <h2 class="section-title">Nuestros Servicios</h2>
                <p class="section-subtitle">Ofrecemos soluciones integrales para tu bienestar físico y nutricional.</p>
                
                <div class="features-grid">
                    <!-- Feature 1 -->
                    <div class="feature-card">
                        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6">
                            <i class="fas fa-utensils text-primary text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-3">Planes Nutricionales</h3>
                        <p class="text-gray-600">Dietas personalizadas según tus objetivos, preferencias y estilo de vida.</p>
                    </div>
                    
                    <!-- Feature 2 -->
                    <div class="feature-card">
                        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6">
                            <i class="fas fa-dumbbell text-primary text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-3">Rutinas de Entrenamiento</h3>
                        <p class="text-gray-600">Programas de ejercicio adaptados a tu nivel y disponibilidad de tiempo.</p>
                    </div>
                    
                    <!-- Feature 3 -->
                    <div class="feature-card">
                        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6">
                            <i class="fas fa-chart-line text-primary text-2xl"></i>
                        </div>
                        <h3 class="text-xl font-bold mb-3">Seguimiento Personalizado</h3>
                        <p class="text-gray-600">Acompañamiento constante y ajustes para garantizar tu progreso.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Nutrition Section -->
        <section id="nutricion" class="py-20">
            <div class="container">
                <div class="flex flex-col md:flex-row items-center">
                    <div class="md:w-1/2 mb-10 md:mb-0 md:pr-10">
                        <h2 class="section-title text-left">Nutrición Científica</h2>
                        <p class="text-gray-600 mb-6">La alimentación es el 70% de tus resultados. Nuestros planes se basan en:</p>
                        
                        <ul class="space-y-4 mb-8">
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-primary mt-1 mr-3"></i>
                                <span>Balance adecuado de macronutrientes</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-primary mt-1 mr-3"></i>
                                <span>Enfoque en alimentos naturales y nutritivos</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-primary mt-1 mr-3"></i>
                                <span>Flexibilidad para incluir tus comidas favoritas</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-primary mt-1 mr-3"></i>
                                <span>Adaptación a intolerancias y alergias</span>
                            </li>
                        </ul>
                        
                        <a href="{{ route('register') }}" class="btn-primary">Empieza tu Plan</a>
                    </div>
                    
                    <div class="md:w-1/2">
                        <div class="grid grid-cols-2 gap-4">
                            <div class="rounded-lg overflow-hidden shadow-md">
                                <img src="https://images.unsplash.com/photo-1512621776951-a57141f2eefd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80"
                                     alt="Desayuno saludable"
                                     class="w-full h-48 object-cover">
                            </div>
                            <div class="rounded-lg overflow-hidden shadow-md">
                                <img src="https://images.unsplash.com/photo-1490641815614-b45106d6dd04?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80"
                                     alt="Batido proteico"
                                     class="w-full h-48 object-cover">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonials Section -->
        <section id="testimonios" class="py-20 bg-gray-50">
            <div class="container">
                <h2 class="section-title">Historias de Éxito</h2>
                <p class="section-subtitle">Lo que dicen nuestros clientes sobre NutriGym</p>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <!-- Testimonial 1 -->
                    <div class="bg-white p-8 rounded-xl shadow-md">
                        <div class="flex items-center mb-6">
                            <img src="https://randomuser.me/api/portraits/women/32.jpg"
                                 alt="Cliente satisfecho"
                                 class="w-12 h-12 rounded-full mr-4">
                            <div>
                                <h4 class="font-bold">María González</h4>
                                <p class="text-sm text-gray-500">Perdió 15kg</p>
                            </div>
                        </div>
                        <p class="text-gray-600">"Gracias a NutriGym logré cambiar mis hábitos alimenticios y perder el peso que tenía de más. Los planes son fáciles de seguir y los entrenamientos se adaptan a mi rutina."</p>
                        <div class="mt-4 text-yellow-400">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                    
                    <!-- Testimonial 2 -->
                    <div class="bg-white p-8 rounded-xl shadow-md">
                        <div class="flex items-center mb-6">
                            <img src="https://randomuser.me/api/portraits/men/45.jpg"
                                 alt="Cliente satisfecho"
                                 class="w-12 h-12 rounded-full mr-4">
                            <div>
                                <h4 class="font-bold">Carlos Martínez</h4>
                                <p class="text-sm text-gray-500">Ganó 8kg de músculo</p>
                            </div>
                        </div>
                        <p class="text-gray-600">"Como deportista amateur, necesitaba un plan que me ayudara a ganar masa muscular sin descuidar mi rendimiento. Los resultados han sido increíbles en solo 4 meses."</p>
                        <div class="mt-4 text-yellow-400">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                    
                    <!-- Testimonial 3 -->
                    <div class="bg-white p-8 rounded-xl shadow-md">
                        <div class="flex items-center mb-6">
                            <img src="https://randomuser.me/api/portraits/women/68.jpg"
                                 alt="Cliente satisfecho"
                                 class="w-12 h-12 rounded-full mr-4">
                            <div>
                                <h4 class="font-bold">Laura Fernández</h4>
                                <p class="text-sm text-gray-500">Mejoró su salud</p>
                            </div>
                        </div>
                        <p class="text-gray-600">"Después de mi embarazo necesitaba recuperar mi energía y salud. El enfoque integral de NutriGym me ayudó no solo físicamente, sino también mentalmente."</p>
                        <div class="mt-4 text-yellow-400">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="bg-gray-900 text-white py-12">
            <div class="container">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                    <div>
                        <h3 class="text-xl font-bold mb-4">NutriGym</h3>
                        <p class="text-gray-400">Transforma tu cuerpo, mejora tu salud con nuestros programas personalizados de nutrición y entrenamiento.</p>
                    </div>
                    <div>
                        <h4 class="font-bold mb-4">Enlaces Rápidos</h4>
                        <ul class="space-y-2">
                            <li><a href="#inicio" class="text-gray-400 hover:text-white">Inicio</a></li>
                            <li><a href="#servicios" class="text-gray-400 hover:text-white">Servicios</a></li>
                            <li><a href="#nutricion" class="text-gray-400 hover:text-white">Nutrición</a></li>
                            <li><a href="#testimonios" class="text-gray-400 hover:text-white">Testimonios</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="font-bold mb-4">Contacto</h4>
                        <ul class="space-y-2 text-gray-400">
                            <li class="flex items-center">
                                <i class="fas fa-map-marker-alt mr-2"></i> Av. Fitness 123, Ciudad
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-phone mr-2"></i> +1 234 567 890
                            </li>
                            <li class="flex items-center">
                                <i class="fas fa-envelope mr-2"></i> info@nutrigym.com
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="font-bold mb-4">Síguenos</h4>
                        <div class="flex space-x-4">
                            <a href="#" class="text-gray-400 hover:text-white text-xl"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="text-gray-400 hover:text-white text-xl"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="text-gray-400 hover:text-white text-xl"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="text-gray-400 hover:text-white text-xl"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
                <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
                    <p>&copy; 2023 NutriGym. Todos los derechos reservados.</p>
                </div>
            </div>
        </footer>
    </body>
</html>