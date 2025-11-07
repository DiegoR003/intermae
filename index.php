<?php 
    $tituloPagina = "INICIO";
    include 'includes/header.php'; 
?>


<!-- Hero Section: Carousel -->
<section id="hero" class="hero-carousel">
  <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="6000" data-bs-pause="false" data-bs-touch="true">
    
   <div class="carousel-inner">

  <!-- Slide 1 -->
  <div class="carousel-item active">
    <div class="hero-slide" style="background-image:url('assets/img/fletes/1.jpg');">
      <div class="hero-overlay-gradient"></div>
      <div class="container position-relative">
        <div class="row">
          <div class="col-lg-7 col-xl-6">

            <!-- CONTENIDO animado -->
            <div class="hero-content">
              <h1 class="hero-main-title">INTERMAE TRANSLOGISTICS GROUP S.A. DE C.V.</h1>
              <p class="hero-main-subtitle">Tu socio en Logística, Almacenaje y Transporte.</p>
            </div>

            <!-- BOTONES animados -->
            <div class="hero-buttons hero-action-buttons">
              <a class="btn btn-hero-red me-3" href="#servicios">Nuestros Servicios</a>
              <a class="btn btn-hero-red-outline" href="contacto.php">Cotizar Ahora</a>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Slide 2 -->
  <div class="carousel-item">
    <div class="hero-slide" style="background-image:url('assets/img/patio-contenedor/105.jpg');">
      <div class="hero-overlay-gradient"></div>
      <div class="container position-relative">
        <div class="row">
          <div class="col-lg-7 col-xl-6">

            <!-- CONTENIDO animado -->
            <div class="hero-content">
              <h1 class="hero-main-title">Patio de Contenedores y Almacén</h1>
              <p class="hero-main-subtitle">Resguardo seguro, maniobras y evidencias en tiempo real.</p>
            </div>

            <!-- BOTONES animados -->
            <div class="hero-buttons hero-action-buttons">
              <a class="btn btn-hero-red me-3" href="patio-almacen.php">Ver Patio &amp; Almacén</a>
              <a class="btn btn-hero-red-outline" href="contacto.php">Cotizar Ahora</a>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Slide 3 -->
  <div class="carousel-item">
    <div class="hero-slide" style="background-image:url('assets/img/custodia-monitoreo/monitoreo.jpg');">
      <div class="hero-overlay-gradient"></div>
      <div class="container position-relative">
        <div class="row">
          <div class="col-lg-7 col-xl-6">

            <!-- CONTENIDO animado -->
            <div class="hero-content">
              <h1 class="hero-main-title">Custodias & Monitoreo 24/7</h1>
              <p class="hero-main-subtitle">GPS, protocolos de reacción y reportes al cliente.</p>
            </div>

            <!-- BOTONES animados -->
            <div class="hero-buttons hero-action-buttons">
              <a class="btn btn-hero-red me-3" href="seguridad.php">Ver Más</a>
              <a class="btn btn-hero-red-outline" href="contacto.php">Cotizar Ahora</a>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Controles 
<button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev" aria-label="Anterior">
  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next" aria-label="Siguiente">
  <span class="carousel-control-next-icon" aria-hidden="true"></span>
</button> -->

<!-- Indicadores -->
<div class="carousel-indicators">
  <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-label="Slide 1"></button>
  <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
  <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
</div>

  </div>
</section>


<!-- Sección de Servicios Cards (Superpuestas) -->
<section class="services-overlap-section" id="servicios">
    <div class="container">
        <div class="row g-4">
            <!-- Card 1: Logistic Trucking Services -->
            <div class="col-lg-4 col-md-6">
                <div class="service-overlap-card">
                    <div class="service-image-container">
                        <img src="assets/img/fletes/104.jpg" alt="Transporte Terrestre">
                        <div class="service-hover-overlay">
                            <a href="transporte.php" class="read-more-btn"> LEER MÁS</a>
                        </div>
                    </div>
                    <div class="service-content-box">
                        <div class="service-title-line"></div>
                        <h3 class="service-title-text">Transporte de Carga Local y Foránea</h3>
                        <p class="service-description">Contamos con flotilla propia para traslados seguros en todo México. Servicio especializado con monitoreo continuo.</p>
                    </div>
                </div>
            </div>

            <!-- Card 2: Sea Freight Forwarding -->
            <div class="col-lg-4 col-md-6">
                <div class="service-overlap-card">
                    <div class="service-image-container">
                        <img src="assets/img/patio-contenedor/118.jpg" alt="Transporte Marítimo">
                        <div class="service-hover-overlay">
                            <a href="patio-almacen.php" class="read-more-btn">LEER MÁS</a>
                        </div>
                    </div>
                    <div class="service-content-box">
                        <div class="service-title-line"></div>
                        <h3 class="service-title-text">Manejo de Contenedores y Patios</h3>
                        <p class="service-description">Servicio desde/hacia puerto, con patios certificados y almacenamiento. Soluciones logísticas integrales para importación y exportación.</p>
                    </div>
                </div>
            </div>

            <!-- Card 3: Air Freight Forwarding -->
            <div class="col-lg-4 col-md-6">
                <div class="service-overlap-card">
                    <div class="service-image-container">
                        <img src="assets/img/custodia-monitoreo/1.png" alt="Transporte Aéreo">
                        <div class="service-hover-overlay">
                            <a href="seguridad.php" class="read-more-btn">LEER MÁS</a>
                        </div>
                    </div>
                    <div class="service-content-box">
                        <div class="service-title-line"></div>
                        <h3 class="service-title-text">Custodia y Monitoreo GPS 24/7</h3>
                        <p class="service-description">Seguridad total en el traslado de mercancías con reportes en tiempo real. Centro de monitoreo operando las 24 horas.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sección de Estadísticas -->
<section class="metricas-intermae wow fadeInUp" data-wow-delay="0.2s">
  <div class="container">
    <div class="row text-center">

      <!-- Métrica 1 -->
      <div class="col-6 col-md-3 mb-4">
        <div class="metric-box">
          <h3 class="metric-number"><span class="contador" data-target="10">0</span>+</h3>
          <p class="metric-text">Años operando</p>
        </div>
      </div>

      <!-- Métrica 2 -->
      <div class="col-6 col-md-3 mb-4">
        <div class="metric-box">
          <h3 class="metric-number"><span class="contador" data-target="8000">0</span>+</h3>
          <p class="metric-text">m² patio & almacén</p>
        </div>
      </div>

      <!-- Métrica 3 -->
      <div class="col-6 col-md-3 mb-4">
        <div class="metric-box">
          <h3 class="metric-number"><span class="contador" data-target="25000">0</span>+</h3>
          <p class="metric-text">maniobras/año*</p>
        </div>
      </div>

      <!-- Métrica 4 -->
      <div class="col-6 col-md-3 mb-4">
        <div class="metric-box">
          <h3 class="metric-number"><span class="contador" data-target="32">0</span></h3>
          <p class="metric-text">Estados con cobertura</p>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- Sección Características -->
<section class="seccion-blanca py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 mb-4 mb-lg-0">
                <h2 class="titulo-seccion">CARACTERÍSTICAS DE INTERMAE TRANSLOGISTICS</h2>
                <div class="separador-dorado"></div>
                <p class="mt-4"><strong>Somos una empresa mexicana especializada en transporte local y foráneo, manejo de contenedores, patios, almacenes, custodia de mercancías y soluciones logísticas integrales.</strong></p>
                <p>Nuestra empresa ofrece una amplia gama de servicios de transporte. Contamos con flotilla propia, patios certificados, bodegas techadas y centro de monitoreo 24/7 para garantizar la seguridad y eficiencia en cada traslado.</p>
                <div class="row mt-4 lista-iconos">
                    <div class="col-md-6 mb-3"><i class="fas fa-check-circle check-verde me-2"></i>Transporte Local y Foráneo</div>
                    <div class="col-md-6 mb-3"><i class="fas fa-check-circle check-verde me-2"></i>Manejo de Contenedores</div>
                    <div class="col-md-6 mb-3"><i class="fas fa-check-circle check-verde me-2"></i>Custodia de Mercancía</div>
                    <div class="col-md-6 mb-3"><i class="fas fa-check-circle check-verde me-2"></i>Monitoreo GPS 24/7</div>
                    <div class="col-md-6 mb-3"><i class="fas fa-check-circle check-verde me-2"></i>Patios Certificados</div>
                    <div class="col-md-6 mb-3"><i class="fas fa-check-circle check-verde me-2"></i>Almacenes Seguros</div>
                </div>
            </div>
            <div class="col-lg-5 text-center">
                <img src="assets/img/fletes/102.jpg" class="img-fluid  shadow-lg" alt="Servicios de Logística">
            </div>
        </div>
    </div>
</section>

<!-- Sección Cobertura -->
<section class="seccion-gris py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 mb-4 mb-lg-0">
                <div class="imagen-con-gradiente-box">
                    <img src="assets/img/banners/mapa.png" class="img-fluid " alt="Cobertura de Sectores">
                    <div class="texto-superpuesto-box">
                        <h5 class="fw-bold mb-2">Reserva tu carga ahora</h5>
                        <p class="mb-0">Más que tu aliado comercial</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 ps-lg-5">
                <h2 class="titulo-seccion">COBERTURA DE SECTORES INDUSTRIALES</h2>
                <div class="separador-dorado"></div>
                <p class="mt-4">Cubrimos los principales sectores industriales, desde alimentos y bebidas, químicos, retail, bienes duraderos y más.</p>
                <p>Nuestra misión es proveer a nuestros clientes servicios calificados de acuerdo a los estándares internacionales, planeando rutas eficientes y seguras.</p>
                <ul class="lista-sectores mt-4">
                    <li><i class="fas fa-industry me-2"></i>Industria Alimenticia</li>
                    <li><i class="fas fa-flask me-2"></i>Sector Químico</li>
                    <li><i class="fas fa-store me-2"></i>Retail y Distribución</li>
                    <li><i class="fas fa-box me-2"></i>Bienes Duraderos</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Sección Cotización -->
<section class="seccion-verde-principal py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 mb-4 mb-lg-0">
                <h2 class="titulo-blanco">Solicita un presupuesto gratuito para su carga.</h2>
                <div class="separador-dorado"></div>
                <h4 class="subtitulo-blanco mt-4">
                    <span class="typing-text" id="typing-text"></span>
                    
                </h4>
            </div>
            <div class="col-lg-7 ps-lg-5">
                <form action="php/enviarCorreo.php" method="post" class="formulario-cotizacion-modern">
  <div class="row">
    <div class="col-lg-6 mb-3">
      <div class="input-wrap">
        <i class="bi bi-person form-icon"></i>
        <input type="text" class="form-control form-control-custom" name="your-name" placeholder="Su nombre*" required>
      </div>
    </div>

    <div class="col-lg-6 mb-3">
      <div class="input-wrap">
        <i class="bi bi-telephone form-icon"></i>
        <input type="text" class="form-control form-control-custom" name="your-email" placeholder="Tu correo electrónico o teléfono*" required>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-6 mb-3">
      <div class="input-wrap">
        <i class="bi bi-airplane form-icon"></i>
        <input type="text" class="form-control form-control-custom" name="departure" placeholder="Partida" required>
      </div>
    </div>

    <div class="col-lg-6 mb-3">
      <div class="input-wrap">
        <i class="bi bi-geo-alt form-icon"></i>
        <input type="text" class="form-control form-control-custom" name="arrival" placeholder="Llegada" required>
      </div>
    </div>
  </div>

  <div class="mb-3">
    <div class="input-wrap textarea">
      <i class="bi bi-chat-dots form-icon"></i>
      <textarea class="form-control form-control-custom" name="your-message" rows="5" placeholder="Descripción de la carga *" required></textarea>
    </div>
  </div>

  <button type="submit" class="btn btn-dorado-form">Solicitar Presupuesto</button>
</form>

            </div>
        </div>
    </div>
</section>

<!-- Sección Logos Clientes -->
<section class="seccion-logos py-5">
    <div class="container">
        <h3 class="text-center mb-5" style="color: #2c5f4f; font-weight: 700;">Nuestros Clientes</h3>
        <div class="row">
            <div class="col-12">
                <div class="owl-carousel owl-theme" id="logos-carousel">
                    <div class="item"><img src="assets/img/logos-clientes/almer.png" alt="Almer"></div>
                    <div class="item"><img src="assets/img/logos-clientes/ultralam.png" alt="Ultralam"></div>
                    <div class="item"><img src="assets/img/logos-clientes/3m.png" alt="3M"></div>
                    <div class="item"><img src="assets/img/logos-clientes/barcel.png" alt="Barcel"></div>
                    <div class="item"><img src="assets/img/logos-clientes/berel.png" alt="Berel"></div>
                    <div class="item"><img src="assets/img/logos-clientes/coca-cola.png" alt="Coca-Cola"></div>
                    <div class="item"><img src="assets/img/logos-clientes/cuprum.webp" alt="Cuprum"></div>
                    <div class="item"><img src="assets/img/logos-clientes/pemex.svg" alt="Pemex"></div>
                    <div class="item"><img src="assets/img/logos-clientes/telmex.png" alt="Telmex"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
  const counters = document.querySelectorAll('.contador');

  const animateCounters = () => {
    counters.forEach(counter => {
      const updateCount = () => {
        const target = +counter.getAttribute('data-target');
        const count = +counter.innerText;
        const increment = target / 200;

        if (count < target) {
          counter.innerText = Math.ceil(count + increment);
          setTimeout(updateCount, 10);
        } else {
          counter.innerText = target;
        }
      };
      updateCount();
    });
  };

  const section = document.querySelector('.metricas-intermae');
  let started = false;

  window.addEventListener('scroll', () => {
    const top = section.getBoundingClientRect().top;
    if (top < window.innerHeight - 100 && !started) {
      started = true;
      animateCounters();
    }
  });
</script>




<?php 
    include 'includes/footer.php'; 
?>