<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <title>Zimmple Logística</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;900&display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <style>
    html {
      scroll-behavior: smooth;
    }

    body {
      font-family: 'Inter', sans-serif;
    }

    .typewriter-cursor::after {
      content: '|';
      animation: blink 0.7s infinite;
      margin-left: 2px;
    }

    @keyframes blink {
      50% {
        opacity: 0;
      }
    }

    .carousel {
      position: absolute;
      width: 100%;
      height: 100%;
      top: 0;
      left: 0;
      z-index: 0;
      display: flex;
      transition: transform 1s ease-in-out;
    }

    .carousel img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      flex-shrink: 0;
    }

    /* Mobile specific styles */
    @media (max-width: 767px) {
      .hero-mobile {
        height: 80vh;
      }
      
      .hero-title {
        font-size: 2rem !important;
      }
      
      .hero-subtitle {
        font-size: 1.25rem !important;
      }
      
      .hero-text {
        font-size: 1rem !important;
      }
      
      .hero-button {
        padding: 0.75rem 1.5rem !important;
        font-size: 1rem !important;
      }
      
      .section-padding {
        padding: 2rem 1rem !important;
      }
      
      .mobile-stack {
        flex-direction: column !important;
      }
      
      .mobile-full-width {
        width: 100% !important;
        padding: 0 !important;
      }
      
      .mobile-single-column {
        grid-template-columns: 1fr !important;
      }
      
      .mobile-text-center {
        text-align: center !important;
      }
      
      .mobile-card-padding {
        padding: 1.5rem !important;
      }
    }
  </style>
</head>

<body class="bg-white text-gray-800">
  <!-- Header -->
  <nav class="bg-white shadow-md sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between items-center h-16">
        <img class="h-12 w-auto" src="./logo.png" alt="Zimmple Logo">

        <!-- Botón hamburguesa -->
        <button class="md:hidden text-gray-600 focus:outline-none" onclick="toggleMenu()">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        </button>

        <!-- Menú Desktop -->
        <div class="hidden md:flex items-center space-x-4">
          <a href="#inicio" class="text-gray-600 hover:text-[#fd883d] px-3 py-2 text-sm font-bold">Inicio</a>
          <a href="#porque" class="text-gray-600 hover:text-[#fd883d] px-3 py-2 text-sm font-bold">Por qué Zimmple</a>
          <a href="#soluciones" class="text-gray-600 hover:text-[#fd883d] px-3 py-2 text-sm font-bold">Soluciones</a>
          <a href="#contacto" class="bg-[#fd883d] text-white px-4 py-2 rounded-md text-sm font-bold hover:bg-[#162858] transition">Contacto</a>
        </div>
      </div>

      <!-- Menú Mobile -->
      <div id="mobile-menu" class="md:hidden hidden absolute top-full left-0 right-0 bg-white px-4 py-2 shadow-lg">
        <div class="flex flex-col space-y-2 nav-links">
          <a href="#inicio" class="block text-gray-600 hover:text-[#fd883d] px-3 py-2 text-sm font-bold">Inicio</a>
          <a href="#porque" class="block text-gray-600 hover:text-[#fd883d] px-3 py-2 text-sm font-bold">Por qué Zimmple</a>
          <a href="#soluciones" class="block text-gray-600 hover:text-[#fd883d] px-3 py-2 text-sm font-bold">Soluciones</a>
          <a href="#contacto" class="block bg-[#fd883d] text-white px-4 py-2 rounded-md text-sm font-bold hover:bg-[#162858] transition text-center">Contacto</a>
        </div>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <section id="inicio" class="relative h-screen hero-mobile overflow-hidden">
    <div class="carousel">
      <img src="zim1.jpg" alt="Logistics 1">
      <img src="zim2.jpg" alt="Logistics 2">
      <img src="zim3.jpg" alt="Logistics 3">
    </div>
    <div class="absolute inset-0 bg-[#162858] bg-opacity-60"></div>
    <div class="relative z-10 flex flex-col items-center justify-center h-full text-center px-4">
      <h1 id="typewriter-title" class="text-4xl sm:text-6xl lg:text-7xl font-extrabold text-white mb-4 hidden"></h1>

      <h2 class="text-3xl sm:text-4xl font-bold text-white mb-6 hero-title" data-aos="fade-up">Consultora Integral en Logística</h2>
      <p class="text-xl sm:text-2xl text-gray-200 mb-10 max-w-4xl hero-text" data-aos="fade-up" data-aos-delay="500">Ofrecemos soluciones en Crecimiento Integral, Optimización Sistémica, Incremento en Ganancias y Administración de Información.</p>
      <a href="#contacto" class="bg-[#fd883d] text-white px-8 py-4 rounded-md text-xl font-semibold hover:bg-white hover:text-[#162858] transition hero-button" data-aos="fade-up" data-aos-delay="1000">Trabajemos Juntos</a>
    </div>
  </section>

  <!-- Why Zimmple Section -->
  <section id="porque" class="py-16 bg-white section-padding">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <h2 class="text-3xl font-extrabold text-[#162858] text-center mb-12 mobile-text-center" data-aos="fade-up">¿Por qué elegir Zimmple?</h2>
      <div class="flex flex-col md:flex-row items-center mobile-stack">
        <div class="md:w-1/2 mb-8 md:mb-0 mobile-full-width" data-aos="fade-right">
          <img src="https://sundancecollege.com/wp-content/uploads/2024/09/professional-business-manager-working-on-project-with-laptop-768x399.webp" alt="Logistics" class="rounded-lg w-full">
        </div>
        <div class="md:w-1/2 md:pl-12 mobile-full-width" data-aos="fade-left">
          <p class="text-lg text-gray-600 mb-4">Nos enfocamos en los procesos internos de cada área porque la eficiencia comienza desde adentro.</p>
          <p class="text-lg text-gray-600">Analizamos cómo funcionan, se comunican y operan tus equipos para reducir costos y lograr operaciones más simples, coordinadas y autónomas. Transformamos la logística desde la raíz con soluciones sostenibles.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Vision & Mission Section -->
  <section class="py-16 bg-gradient-to-b from-white to-gray-100 section-padding">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid md:grid-cols-2 gap-8 mobile-single-column">
        <div class="bg-white p-8 rounded-lg shadow-lg mobile-card-padding" data-aos="fade-up" data-aos-delay="100">
          <div class="flex items-center mb-4">
            <svg class="w-8 h-8 text-[#fd883d] mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
            </svg>
            <h3 class="text-2xl font-semibold text-[#162858]">Visión</h3>
          </div>
          <p class="text-gray-600">Trabajamos codo a codo con nuestros clientes, como socios estratégicos, buscando soluciones a medida para el desarrollo integral de sus negocios.</p>
        </div>
        <div class="bg-white p-8 rounded-lg shadow-lg mobile-card-padding" data-aos="fade-up" data-aos-delay="200">
          <div class="flex items-center mb-4">
            <svg class="w-8 h-8 text-[#fd883d] mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
            </svg>
            <h3 class="text-2xl font-semibold text-[#162858]">Misión</h3>
          </div>
          <p class="text-gray-600">Ayudamos a emprendedores, pymes y productores a lograr una logística de alto nivel, reorganizando procesos para que sean más simples, eficientes y adaptados a sus necesidades.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Values Section -->
  <section id="valores" class="py-16 bg-white section-padding">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <h2 class="text-3xl font-extrabold text-[#162858] text-center mb-12 mobile-text-center" data-aos="fade-up">Nuestra Esencia</h2>
      <div class="grid md:grid-cols-4 gap-8 mobile-single-column">
        <div class="text-center" data-aos="fade-up" data-aos-delay="100">
          <svg class="w-10 h-10 mx-auto mb-3 text-[#fd883d]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
          </svg>
          <h3 class="text-xl font-semibold text-[#162858] mb-2">Compromiso</h3>
          <p class="text-gray-600 text-sm">Trabajamos como socios estratégicos para impulsar el éxito de tu negocio.</p>
        </div>
        <div class="text-center" data-aos="fade-up" data-aos-delay="200">
          <svg class="w-10 h-10 mx-auto mb-3 text-[#fd883d]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
          </svg>
          <h3 class="text-xl font-semibold text-[#162858] mb-2">Simplicidad</h3>
          <p class="text-gray-600 text-sm">Diseñamos procesos claros y eficientes para facilitar tu operación.</p>
        </div>
        <div class="text-center" data-aos="fade-up" data-aos-delay="300">
          <svg class="w-10 h-10 mx-auto mb-3 text-[#fd883d]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
          </svg>
          <h3 class="text-xl font-semibold text-[#162858] mb-2">Sostenibilidad</h3>
          <p class="text-gray-600 text-sm">Creamos soluciones que cuidan el futuro y el medio ambiente.</p>
        </div>
        <div class="text-center" data-aos="fade-up" data-aos-delay="400">
          <svg class="w-10 h-10 mx-auto mb-3 text-[#fd883d]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
          </svg>
          <h3 class="text-xl font-semibold text-[#162858] mb-2">Innovación</h3>
          <p class="text-gray-600 text-sm">Usamos herramientas modernas para lograr resultados reales.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Solutions Section -->
  <section id="soluciones" class="py-16 bg-white section-padding">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <h2 class="text-3xl font-extrabold text-[#162858] text-center mb-12 mobile-text-center" data-aos="fade-up">Nuestras Soluciones</h2>
      <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 mobile-single-column">
        <div class="bg-[#162858] text-white p-6 rounded-lg shadow-lg transition-transform duration-300 hover:transform hover:-translate-y-1 hover:shadow-xl mobile-card-padding" data-aos="fade-up" data-aos-delay="100">
          <svg class="w-10 h-10 mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
          </svg>
          <h3 class="text-xl font-semibold mb-2 text-center">Crecimiento Integral</h3>
          <p class="text-sm text-center">Co-creamos herramientas para impulsar las ventas y desarrollamos estrategias de marketing para posicionar tu negocio.</p>
        </div>
        <div class="bg-[#fd883d] text-white p-6 rounded-lg shadow-lg transition-transform duration-300 hover:transform hover:-translate-y-1 hover:shadow-xl mobile-card-padding" data-aos="fade-up" data-aos-delay="200">
          <svg class="w-10 h-10 mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 21" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2 2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2"></path>
          </svg>
          <h3 class="text-xl font-semibold mb-2 text-center">Optimización Sistémica</h3>
          <p class="text-sm text-center">Implementamos sistemas para hacer tu organización más eficiente, evitando errores y mejorando la atención al cliente.</p>
        </div>
        <div class="bg-[#162858] text-white p-6 rounded-lg shadow-lg transition-transform duration-300 hover:transform hover:-translate-y-1 hover:shadow-xl mobile-card-padding" data-aos="fade-up" data-aos-delay="300">
          <svg class="w-10 h-10 mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
          </svg>
          <h3 class="text-xl font-semibold mb-2 text-center">Incremento en Ganancias</h3>
          <p class="text-sm text-center">Utilizamos herramientas innovadoras para mejorar la rentabilidad de tu negocio.</p>
        </div>
        <div class="bg-[#fd883d] text-white p-6 rounded-lg shadow-lg transition-transform duration-300 hover:transform hover:-translate-y-1 hover:shadow-xl mobile-card-padding" data-aos="fade-up" data-aos-delay="400">
          <svg class="w-10 h-10 mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"></path>
          </svg>
          <h3 class="text-xl font-semibold mb-2 text-center">Administración de Información</h3>
          <p class="text-sm text-center">Vinculamos postulantes con empleadores a través de bases de datos optimizadas.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Pain Points Section -->
  <section class="py-16 bg-gradient-to-b from-white to-gray-100 section-padding">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <h2 class="text-3xl font-extrabold text-[#162858] text-center mb-12 mobile-text-center" data-aos="fade-up">¿Cuándo consultar a Zimmple?</h2>
      <div class="grid md:grid-cols-3 gap-8 mobile-single-column">
        <div class="bg-white p-6 rounded-lg shadow-lg text-center mobile-card-padding" data-aos="zoom-in" data-aos-delay="100">
          <div class="inline-block mb-3 p-3 rounded-full bg-orange-100">
            <svg class="w-8 h-8 text-[#fd883d]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
            </svg>
          </div>
          <p class="text-gray-600 font-medium">"Tengo muchas ideas, pero no sé cómo implementarlas."</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-lg text-center mobile-card-padding" data-aos="zoom-in" data-aos-delay="200">
          <div class="inline-block mb-3 p-3 rounded-full bg-orange-100">
            <svg class="w-8 h-8 text-[#fd883d]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
          </div>
          <p class="text-gray-600 font-medium">"Me cuesta delegar y no me alcanza el tiempo."</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-lg text-center mobile-card-padding" data-aos="zoom-in" data-aos-delay="300">
          <div class="inline-block mb-3 p-3 rounded-full bg-orange-100">
            <svg class="w-8 h-8 text-[#fd883d]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
            </svg>
          </div>
          <p class="text-gray-600 font-medium">"Quiero un equipo más comprometido."</p>
        </div>
      </div>
      <div class="text-center mt-12" data-aos="fade-up">
        <a href="#contacto" class="bg-[#fd883d] text-white px-6 py-3 rounded-md text-lg font-semibold hover:bg-white hover:text-[#162858] transition">Hablemos de Soluciones</a>
      </div>
    </div>
  </section>

  <!-- Partners Section (Replaces Testimonials) -->
  <section id="socios" class="py-16 bg-white section-padding">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <h2 class="text-3xl font-extrabold text-[#162858] text-center mb-12 mobile-text-center" data-aos="fade-up">Trabajamos Codo a Codo</h2>
      <div class="text-center" data-aos="fade-up" data-aos-delay="100">
        <p class="text-lg text-gray-600 mb-6">Colaboramos con emprendedores, pequeños negocios, pymes y productores para transformar su logística.</p>
        <p class="text-lg text-gray-600">Como socios estratégicos, co-creamos soluciones a medida que impulsan el desarrollo integral de sus negocios, optimizando procesos y aumentando la rentabilidad.</p>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section id="contacto" class="py-16 bg-[#162858] text-white section-padding">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <h2 class="text-3xl font-bold text-center mb-12 mobile-text-center" data-aos="fade-up">Contáctanos</h2>
      <div class="grid md:grid-cols-2 gap-12 mobile-single-column">
        <div data-aos="fade-right" class="mobile-text-center md:text-left">
          <p class="mb-4">Escríbenos para transformar tu logística.</p>
          <p class="mb-2"><strong>Email:</strong> zimmplelogistica@gmail.com</p>
          <p class="mb-2"><strong>Teléfono:</strong> +54 3576 466064</p>
          <p><strong>Web:</strong> <a href="http://www.zimmpleconsultoralogistica.com" class="underline hover:text-[#fd883d]">zimmpleconsultoralogistica.com</a></p>
        </div>
        <div data-aos="fade-left">
          <div class="space-y-4">
            <input type="text" placeholder="Nombre" class="w-full p-3 rounded-md bg-gray-100 text-gray-700 border border-gray-200 focus:outline-none focus:border-[#fd883d]">
            <input type="email" placeholder="Email" class="w-full p-3 rounded-md bg-gray-100 text-gray-700 border border-gray-200 focus:outline-none focus:border-[#fd883d]">
            <textarea placeholder="Mensaje" rows="4" class="w-full p-3 rounded-md bg-gray-100 text-gray-700 border border-gray-200 focus:outline-none focus:border-[#fd883d]"></textarea>
            <button class="bg-[#fd883d] text-white px-6 py-3 rounded-md font-semibold hover:bg-white hover:text-[#162858] transition w-full md:w-auto">Enviar</button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- WhatsApp Button -->
  <a aria-label="Chatea con Nosotros"
    href="https://wa.me/3564200809?text=Hola,%20quiero%20asociarme%20a%20La%20Gran%20Promocion" target="_blank"
    rel="noopener noreferrer" class="fixed right-6 bottom-6 z-50 flex">
    <img loading="lazy"
      src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6b/WhatsApp.svg/598px-WhatsApp.svg.webp"
      alt="WhatsApp" class="w-16 h-16 md:w-20 md:h-20 rounded-full bg-green-500 hover:bg-green-600 p-2 cursor-pointer relative" />
    <span
      class="absolute top-0 right-0 w-6 h-6 bg-red-500 text-white text-center font-bold rounded-full flex items-center justify-center">1</span>
  </a>

  <!-- Footer -->
  <footer class="bg-white py-8 section-padding">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
      <div class="grid md:grid-cols-3 gap-8 mobile-single-column">
        <div class="flex flex-col items-center">
          <img class="h-12 w-auto mb-4" src="./logo.png" alt="Zimmple Logo">
          <p class="text-gray-600">Consultora Integral en Logística</p>
        </div>
        <div class="flex flex-col items-center">
          <h3 class="text-lg font-semibold text-[#162858] mb-4">Enlaces Rápidos</h3>
          <ul class="space-y-2">
            <li><a href="#inicio" class="text-gray-600 hover:text-[#fd883d]">Inicio</a></li>
            <li><a href="#porque" class="text-gray-600 hover:text-[#fd883d]">Por qué Zimmple</a></li>
            <li><a href="#soluciones" class="text-gray-600 hover:text-[#fd883d]">Soluciones</a></li>
            <li><a href="#contacto" class="text-gray-600 hover:text-[#fd883d]">Contacto</a></li>
          </ul>
        </div>
        <div class="flex flex-col items-center">
          <h3 class="text-lg font-semibold text-[#162858] mb-4">Síguenos</h3>
          <div class="flex space-x-4 justify-center">
            <a href="#" class="text-gray-600 hover:text-[#fd883d]">
              <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm5 11h-4v4h-2v-4H7v-2h4V7h2v4h4v2z" />
              </svg>
            </a>
            <a href="#" class="text-gray-600 hover:text-[#fd883d]">
              <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="M22 12c0-5.52-4.48-10-10-10S2 6.48 2 12c0 4.84 3.44 8.87 8 9.8v-6.98H7v-2.82h3V9.34c0-2.98 1.78-4.62 4.5-4.62 1.3 0 2.66.24 2.66.24v2.92h-1.5c-1.48 0-1.94.92-1.94 1.87v2.25h3.3l-.53 2.82H14v6.98c4.56-.93 8-4.96 8-9.8z" />
              </svg>
            </a>
          </div>
        </div>
      </div>
      <p class="text-gray-600 mt-8">© 2025 Zimmple Logística. Todos los derechos reservados.</p>
    </div>
  </footer>

  <!-- Scripts -->
  <script>
    // Initialize AOS
    AOS.init({
      duration: 1000,
      once: true,
    });

    function toggleMenu() {
      document.getElementById('mobile-menu').classList.toggle('hidden');
    }

    // Smooth scroll fallback
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function(e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
          target.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
          });
        }
      });
    });

    // Typewriter effect for title only
    const titleElement = document.getElementById('typewriter-title');
    const titleText = 'Zimmple';

    function typeWriter(text, element, speed, callback) {
      let i = 0;
      element.innerHTML = '';
      element.classList.remove('hidden');
      element.classList.add('typewriter-cursor');

      function type() {
        if (i < text.length) {
          element.innerHTML = text.substring(0, i + 1);
          i++;
          setTimeout(type, speed);
        } else {
          element.classList.remove('typewriter-cursor');
          callback();
        }
      }
      type();
    }

    // Start typewriter and show other elements
    typeWriter(titleText, titleElement, 180, () => {
      // Show subtitle, paragraph, and button with AOS
      document.querySelector('.hero-content h2').classList.remove('hidden');
      document.querySelector('.hero-content p').classList.remove('hidden');
    });

    // Carousel Slider
    const carousel = document.querySelector('.carousel');
    const images = carousel.querySelectorAll('img');
    let currentIndex = 0;

    function showNextImage() {
      currentIndex = (currentIndex + 1) % images.length;
      carousel.style.transform = `translateX(-${currentIndex * 100}%)`;
    }

    // Initialize first image
    carousel.style.transform = 'translateX(0%)';
    setInterval(showNextImage, 3000);
  </script>
</body>

</html>