<?php 
    $tituloPagina = "NOSOTROS";
    include 'includes/header.php'; 
?>


<section class="page-header-nosotros" style="background-image: url('assets/img/fletes/101.jpg');">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center" data-aos="fade-up">
        <h1>NOSOTROS</h1>
        <p class="lead mt-3" style="max-width:900px;margin:0 auto;">
          Más que tu aliado comercial
        </p>
      </div>
    </div>
  </div>
</section>

<section class="section section-mvv" style="background: var(--pzm-light, #f6f8f7);">
 <div class="container">
  <div class="row g-4">

    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="0">
      <article class="mvv-card">
        <h2 class="section-title">MISIÓN</h2>
        <p>
          Ofrecer servicios de alta calidad logrando establecer fuertes alianzas con nuestros clientes que permitan la unificación de necesidades con un alto sentido de urgencia y valor agregado a sus operaciones.
        </p>
      </article>
    </div>

    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
      <article class="mvv-card">
        <h2 class="section-title">VISIÓN</h2>
        <p>
          Ser una empresa líder en el sector al ofrecer servicios integrales de Logística, colaborando con el crecimiento contínuo del mercado.
        </p>
      </article>
    </div>

    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
      <article class="mvv-card">
        <h2 class="section-title">VALORES</h2>
        <div class="row lista-valores">
            <div class="col-6">
                <ul>
                    <li>HONESTIDAD</li>
                    <li>LEALTAD</li>
                    <li>CALIDAD</li>
                    <li>RESPONSABILIDAD</li>
                </ul>
            </div>
            <div class="col-6">
                <ul>
                    <li>EQUIPO</li>
                    <li>TRABAJO</li>
                    <li>PASIÓN</li>
                    <li>RESPETO</li>
                </ul>
            </div>
        </div>
      </article>
    </div>

  </div>
 </div>
</section>

<style>
.lista-valores ul {
    list-style: none;
    padding-left: 0;
    margin-bottom: 0;
}
.lista-valores li {
    position: relative;
    padding-left: 25px; /* Espacio para el punto */
    margin-bottom: 12px;
    font-weight: 600;
    color: var(--verde-militar, #1F4624); /* Re-usando tu color de marca */
    font-family: 'Poppins', sans-serif; /* Asegurando consistencia */
}
.lista-valores li::before {
    content: '';
    position: absolute;
    left: 0;
    top: 50%;
    transform: translateY(-50%);
    width: 12px;
    height: 12px;
    background-color: var(--verde-oliva, #5E7C41); /* Re-usando tu color de marca */
    border-radius: 50%;
}
</style>

<section id="historia-metricas" class="section-metrics-solmex" style="background-color: var(--pzm-primary, #1F4624);">
  <div class="container">
    <div class="row align-items-center pt-5 pb-4">
      <div class="col-lg-7" data-aos="fade-right">
        <h2 class="section-title" style="color:#fff;font-family:'Abel',sans-serif;font-size:2.8rem;margin-bottom:1.5rem;">
          NOSOTROS
        </h2>
        <div class="metrics-text-block" style="color:#eaf0ec;">
          <p>
            Somos una empresa 100% Mexicana jóven, con 10 años de experiencia en el Puerto de Manzanillo, Altamira y Veracruz, comprometida a innovar y eficientar el comercio exterior a fin de brindar a nuestros clientes, proveedores y socios comerciales, las MEJORES soluciones en cada proyecto integral y personalizado.
          </p>
          </div>
      </div>
      <div class="col-lg-5" data-aos="fade-left" data-aos-delay="100">
        <img src="assets/img/banners/equipo.png" alt="Operación INTERMAE" class="img-fluid shadow rounded-3" style="height:460px;width: 460px;;object-fit:contain;">
      </div>
    </div>

    <div class="row text-center pt-5 pb-4">
      <div class="col-6 col-md-3 mb-4 mb-md-0" data-aos="fade-up" data-aos-delay="0">
        <div class="metric">
          <h3 class="display-4 metric-number">
            <span class="contador" data-target="10">0</span>+
          </h3>
          <p class="metric-label" style="color:#eaf0ec;">Años operando</p>
        </div>
      </div>

      <div class="col-6 col-md-3 mb-4 mb-md-0" data-aos="fade-up" data-aos-delay="100">
        <div class="metric">
          <h3 class="display-4 metric-number">
            <span class="contador" data-target="8000">0</span>+
          </h3>
          <p class="metric-label" style="color:#eaf0ec;">m² patio &amp; almacén</p>
        </div>
      </div>

      <div class="col-6 col-md-3 mb-4 mb-md-0" data-aos="fade-up" data-aos-delay="200">
        <div class="metric">
          <h3 class="display-4 metric-number">
            <span class="contador" data-target="25000">0</span>+
          </h3>
          <p class="metric-label" style="color:#eaf0ec;">maniobras/año*</p>
        </div>
      </div>

      <div class="col-6 col-md-3" data-aos="fade-up" data-aos-delay="300">
        <div class="metric">
          <h3 class="display-4 metric-number">
            <span class="contador" data-target="32">0</span>
          </h3>
          <p class="metric-label" style="color:#eaf0ec;">Estados con cobertura</p>
        </div>
      </div>
      
    </div>
  </div>
</section>



<section class="section-cta-banner" style="background-image: url('assets/img/hero/cta-trucks.jpg');">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-8 text-center text-lg-start" data-aos="fade-right">
        <h2 class="section-title">CONTÁCTANOS</h2>
        <p class="lead">Conoce cómo optimizamos tu logística con monitoreo y evidencias en tiempo real.</p>
      </div>
      <div class="col-lg-4 text-center text-lg-end" data-aos="fade-left" data-aos-delay="100">
        <a href="contacto.php" class="btn btn-accent btn-lg">Contactar</a>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/scripts.php'; ?>

<script>
  (function(){
    const counters = document.querySelectorAll('.contador');
    if (!('IntersectionObserver' in window) || counters.length===0) return;
    const ease = (t)=>t<.5?2*t*t:-1+(4-2*t)*t;
    const animate = (el, target, dur=1600)=>{
      let start=null;
      const from = 0;
      const step=(ts)=>{
        if(!start) start=ts;
        const p = Math.min((ts-start)/dur,1);
        el.textContent = Math.floor(from + (target-from)*ease(p));
        if (p<1) requestAnimationFrame(step);
        else el.textContent = target;
      };
      requestAnimationFrame(step);
    };
    const io = new IntersectionObserver((entries,obs)=>{
      entries.forEach(e=>{
        if(e.isIntersecting){
          const el = e.target;
          const target = parseInt(el.dataset.target,10)||0;
          animate(el, target);
          obs.unobserve(el);
        }
      });
    },{threshold:.3});
    counters.forEach(c=>io.observe(c));
  })();
</script>

<?php include 'includes/footer.php'; ?>
