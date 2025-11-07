<?php 
    $tituloPagina = "PATIO & ALMACÉN";
    include 'includes/header.php'; 
?>

<!-- Hero Section -->
<section class="hero-servicios bg-patio">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <div class="hero-content show">
          <h1 class="hero-title-main">PATIO & ALMACÉN</h1>
          <p class="hero-subtitle">
            Resguardo seguro de mercancía y contenedores, maniobras operativas, inventario con evidencias en tiempo real
            y control 24/7. Centro con CCTV, accesos controlados y procesos estandarizados.
          </p>
        </div>
      </div>
    </div>
  </div>

 <!-- Círculo con el logo al centro -->
  <div class="circular-text-decoration d-none d-lg-block">
    <svg viewBox="0 0 200 200" aria-hidden="true">
      <defs>
        <path id="circle" d="M 100, 100 m -75, 0 a 75,75 0 1,1 150,0 a 75,75 0 1,1 -150,0"/>
      </defs>
      <text fill="#d4af37" font-size="16" font-weight="bold">
        <textPath href="#circle">
          INTERMAE TRANSLOGISTICS GROUP S.A. DE C.V.
        </textPath>
      </text>
    </svg>

    <!-- LOGO centrado -->
    <img src="assets/img/logos/logo-sinletras.png" alt="Intermae" class="logo-circular">
  </div>
</section>

<!-- Sección Servicios Detallados -->
<section class="servicios-detallados-section">
  <div class="container">

    <!-- Encabezado de Sección -->
    <div class="section-header">
      <div class="section-pretitle">Servicios de Patio & Almacén</div>
      <h2 class="section-title">Operaciones Especializadas</h2>
      <div class="section-divider"></div>
      <p class="section-description">
        Soluciones integrales para el manejo, resguardo y control de su mercancía dentro y fuera de contenedor.
      </p>
    </div>

    <!-- Grid de Servicios -->
    <div class="row g-4">
      <!-- 01 Resguardo e Inventario -->
      <div class="col-lg-4 col-md-6">
        <div class="servicio-card-premium">
          <div class="servicio-icon-box">
            <i class="fas fa-warehouse servicio-icon"></i>
            <div class="servicio-numero">SERVICIO 01</div>
          </div>
          <div class="servicio-content-box">
            <h3 class="servicio-titulo">Resguardo & Inventario</h3>
            <ul class="servicio-lista">
              <li><i class="fas fa-check-circle"></i> Control de entradas y salidas (FIFO/FEFO)</li>
              <li><i class="fas fa-check-circle"></i> Conteos cíclicos y kardex digital</li>
              <li><i class="fas fa-check-circle"></i> Evidencias fotográficas por lote</li>
              <li><i class="fas fa-check-circle"></i> Reportes en tiempo real a cliente</li>
            </ul>
            <a href="#contacto" class="btn-servicio-detalle">Solicitar Cotización</a>
          </div>
        </div>
      </div>

      <!-- 02 Maniobras Patio/Almacén -->
      <div class="col-lg-4 col-md-6">
        <div class="servicio-card-premium">
          <div class="servicio-icon-box">
            <i class="fas fa-dolly servicio-icon"></i>
            <div class="servicio-numero">SERVICIO 02</div>
          </div>
          <div class="servicio-content-box">
            <h3 class="servicio-titulo">Maniobras Patio & Almacén</h3>
            <ul class="servicio-lista">
              <li><i class="fas fa-check-circle"></i> Carga/descarga de contenedor y plataforma</li>
              <li><i class="fas fa-check-circle"></i> Estiba, reacomodo y trasiego seguro</li>
              <li><i class="fas fa-check-circle"></i> Equipo y personal certificado</li>
              <li><i class="fas fa-check-circle"></i> Check list y evidencias por maniobra</li>
            </ul>
            <a href="#contacto" class="btn-servicio-detalle">Solicitar Cotización</a>
          </div>
        </div>
      </div>

      <!-- 03 Consolidación/Desconsolidación -->
      <div class="col-lg-4 col-md-6">
        <div class="servicio-card-premium">
          <div class="servicio-icon-box">
            <i class="fas fa-boxes servicio-icon"></i>
            <div class="servicio-numero">SERVICIO 03</div>
          </div>
          <div class="servicio-content-box">
            <h3 class="servicio-titulo">Consolidación & Desconsolidación</h3>
            <ul class="servicio-lista">
              <li><i class="fas fa-check-circle"></i> Llenado y vaciado de contenedores</li>
              <li><i class="fas fa-check-circle"></i> Paletizado, etiquetado y reempaque</li>
              <li><i class="fas fa-check-circle"></i> Cross-docking y transbordos</li>
              <li><i class="fas fa-check-circle"></i> Control de daños y mermas documentado</li>
            </ul>
            <a href="#contacto" class="btn-servicio-detalle">Solicitar Cotización</a>
          </div>
        </div>
      </div>

      <!-- 04 Lavado de Contenedores -->
      <div class="col-lg-4 col-md-6">
        <div class="servicio-card-premium">
          <div class="servicio-icon-box">
            <i class="fas fa-soap servicio-icon"></i>
            <div class="servicio-numero">SERVICIO 04</div>
          </div>
          <div class="servicio-content-box">
            <h3 class="servicio-titulo">Lavado de Contenedores</h3>
            <ul class="servicio-lista">
              <li><i class="fas fa-check-circle"></i> Lavado interior/exterior y desinfección</li>
              <li><i class="fas fa-check-circle"></i> Cumplimiento de estándares sanitarios</li>
              <li><i class="fas fa-check-circle"></i> Registro fotográfico “antes/después”</li>
              <li><i class="fas fa-check-circle"></i> Entrega con checklist firmado</li>
            </ul>
            <a href="#contacto" class="btn-servicio-detalle">Solicitar Cotización</a>
          </div>
        </div>
      </div>

      <!-- 05 Pesaje de Contenedores -->
      <div class="col-lg-4 col-md-6">
        <div class="servicio-card-premium">
          <div class="servicio-icon-box">
            <i class="fas fa-weight-hanging servicio-icon"></i>
            <div class="servicio-numero">SERVICIO 05</div>
          </div>
          <div class="servicio-content-box">
            <h3 class="servicio-titulo">Pesaje de Contenedores</h3>
            <ul class="servicio-lista">
              <li><i class="fas fa-check-circle"></i> Registro de peso (VGM/SOLAS cuando aplique)</li>
              <li><i class="fas fa-check-circle"></i> Constancia y folio de pesaje</li>
              <li><i class="fas fa-check-circle"></i> Auditoría de sobrepeso</li>
              <li><i class="fas fa-check-circle"></i> Integración al expediente de embarque</li>
            </ul>
            <a href="#contacto" class="btn-servicio-detalle">Solicitar Cotización</a>
          </div>
        </div>
      </div>

      <!-- 06 Seguridad & Monitoreo -->
      <div class="col-lg-4 col-md-6">
        <div class="servicio-card-premium">
          <div class="servicio-icon-box">
            <i class="fas fa-shield-alt servicio-icon"></i>
            <div class="servicio-numero">SERVICIO 06</div>
          </div>
          <div class="servicio-content-box">
            <h3 class="servicio-titulo">Seguridad & Monitoreo 24/7</h3>
            <ul class="servicio-lista">
              <li><i class="fas fa-check-circle"></i> CCTV 24/7, control de accesos y bitácoras</li>
              <li><i class="fas fa-check-circle"></i> Geocercas, alertas y trazabilidad</li>
              <li><i class="fas fa-check-circle"></i> Respaldo en nube de evidencias</li>
              <li><i class="fas fa-check-circle"></i> Protocolos de reacción y custodia</li>
            </ul>
            <a href="#contacto" class="btn-servicio-detalle">Solicitar Cotización</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Sección Galería Patio & Almacén -->
<section class="galeria-transporte-section">
  <div class="container">
    <div class="section-header">
      <div class="section-pretitle">Galería</div>
      <h2 class="section-title">Operación en Sitio</h2>
      <div class="section-divider"></div>
      <p class="section-description">
        Vistazo a maniobras, resguardo e infraestructura del patio y almacén.
      </p>
    </div>

    <div class="owl-carousel owl-theme" id="galeria-carousel">
      <div class="galeria-item">
        <img src="assets/img/banners/patio1.png" alt="Maniobra de descarga">
        <div class="galeria-overlay">
          
        </div>
      </div>

      <div class="galeria-item">
        <img src="assets/img/banners/patio2.png" alt="Almacenaje y estiba">
        <div class="galeria-overlay">
          
        </div>
      </div>

      <div class="galeria-item">
        <img src="assets/img/banners/patio3.png" alt="Consolidación">
        <div class="galeria-overlay">
          
        </div>
      </div>

      <div class="galeria-item">
        <img src="assets/img/banners/patio4.png" alt="Lavado de contenedor">
        <div class="galeria-overlay">
          
        </div>
      </div>

      
    </div>
  </div>
</section>

<!-- Características Operativas -->
<section class="caracteristicas-extras">
  <div class="container">
    <div class="section-header">
      <div class="section-pretitle">Estándares Operativos</div>
      <h2 class="section-title">Compromiso INTERMAE</h2>
      <div class="section-divider"></div>
    </div>

    <div class="row">
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="caracteristica-item">
          <div class="caracteristica-icon"><i class="fas fa-camera"></i></div>
          <h4 class="caracteristica-title">Evidencias 24/7</h4>
          <p class="caracteristica-text">Fotos y documentos disponibles en la nube.</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="caracteristica-item">
          <div class="caracteristica-icon"><i class="fas fa-user-shield"></i></div>
          <h4 class="caracteristica-title">Accesos Controlados</h4>
          <p class="caracteristica-text">Registro de unidades, placas y operadores.</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="caracteristica-item">
          <div class="caracteristica-icon"><i class="fas fa-file-signature"></i></div>
          <h4 class="caracteristica-title">Checklists & KPIs</h4>
          <p class="caracteristica-text">Documentación de cada maniobra y SLA.</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="caracteristica-item">
          <div class="caracteristica-icon"><i class="fas fa-cloud"></i></div>
          <h4 class="caracteristica-title">Reportes en la Nube</h4>
          <p class="caracteristica-text">Seguimiento centralizado y trazable.</p>
        </div>
      </div>
    </div>
  </div>
</section>



<!-- CTA Section -->
<section class="cta-contacto-section" id="contacto">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-8">
        <div class="cta-content">
          <h2 class="cta-title">¿Necesitas patio o almacén para tu operación?</h2>
          <p class="cta-text">
            Citas de maniobra, resguardo temporal o de largo plazo, consolidaciones y evidencias en tiempo real.
            Solicita tu propuesta sin compromiso.
          </p>
          <a href="contacto.php" class="btn-cta-dorado">Cotizar Patio & Almacén</a>
        </div>
      </div>
      <div class="col-lg-4 text-center d-none d-lg-block">
        <i class="fas fa-warehouse cta-icon-large"></i>
      </div>
    </div>
  </div>
</section>

<script>
  // Carrusel de galería (mismo JS que ya usas)
  $(document).ready(function(){
    $("#galeria-carousel").owlCarousel({
      items: 1,
      loop: true,
      margin: 0,
      nav: true,
      dots: true,
      autoplay: true,
      autoplayTimeout: 5000,
      autoplayHoverPause: true,
      navText: ["<i class='fas fa-chevron-left'></i>", "<i class='fas fa-chevron-right'></i>"],
      responsive: { 0:{items:1}, 768:{items:1}, 992:{items:1} }
    });

    // Smooth scroll
    $('a[href^="#"]').on('click', function(event) {
      const target = $(this.getAttribute('href'));
      if(target.length) {
        event.preventDefault();
        $('html, body').stop().animate({ scrollTop: target.offset().top - 100 }, 1000);
      }
    });
  });

  // Mostrar texto del hero (si tu CSS usa .show para animar)
  document.addEventListener('DOMContentLoaded', () => {
    const hc = document.querySelector('.hero-servicios .hero-content');
    if (hc) hc.classList.add('show');
  });
</script>

<?php include 'includes/footer.php' ?>
