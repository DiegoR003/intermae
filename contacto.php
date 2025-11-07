<?php 
    $tituloPagina = "CONTACTO";
    include 'includes/header.php'; 
?>

<section class="page-header-nosotros" style="background-image: url('assets/img/fletes/101.jpg');">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center" data-aos="fade-up">
        <h1>CONTACTO</h1>
        <p class="lead mt-3" style="max-width:900px;margin:0 auto;">
          Estamos listos para ayudarte. Envíanos un mensaje y te responderemos a la brevedad.
        </p>
      </div>
    </div>
  </div>
</section>



<section class="seccion-gris py-5">
    <div class="container">
        <div class="row">

            <div class="col-lg-5 mb-5 mb-lg-0">
                <h2 class="titulo-seccion">Ponte en contacto con nosotros</h2>
                <div class="separador-dorado"></div>
                <p class="mt-4 text-muted">Póngase en contacto con nosotros si tiene alguna pregunta. Estamos aquí para ayudar.</p>
                
                <!--<div class="contact-info-item">
                    <i class="fas fa-map-marker-alt contact-icon"></i>
                    <div>
                        <h5 class="contact-title">Dirección</h5>
                        <p class="contact-text">Tu Dirección, Ciudad, Estado, C.P.</p>
                    </div>
                </div> -->
                
                <div class="contact-info-item">
                    <i class="fas fa-phone-alt contact-icon"></i>
                    <div>
                        <h5 class="contact-title">Teléfono</h5>
                        <p class="contact-text">+52 314 100 3333</p>
                    </div>
                </div>
                
                <div class="contact-info-item">
                    <i class="fas fa-envelope contact-icon"></i>
                    <div>
                        <h5 class="contact-title">Correo Electrónico</h5>
                        <p class="contact-text">comercial@grupointermae.com</p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-7">
    <div class="contact-form-wrapper"> 
        <form action="php/enviarCorreo.php" method="post" class="formulario-cotizacion-modern">
            
            <div class="mb-3 input-icon-wrapper">
                <i class="fas fa-user form-icon"></i>
                <input type="text" class="form-control form-control-custom" name="your-name" placeholder="Su nombre*" required>
            </div>
            
            <div class="mb-3 input-icon-wrapper">
                <i class="fas fa-envelope form-icon"></i>
                <input type="text" class="form-control form-control-custom" name="your-email" placeholder="Correo electrónico/Móvil*" required>
            </div>
            
            <div class="mb-3 input-icon-wrapper">
                <i class="fas fa-comment-dots form-icon icon-textarea"></i>
                <textarea class="form-control form-control-custom" name="your-message" rows="6" placeholder="Tu mensaje*" required></textarea>
            </div>
            
            <div>
                <button type="submit" class="btn btn-dorado-form w-100">Enviar Mensaje</button>
            </div>
        </form>
    </div>
</div>
        </div>
    </div>
</section>

<section class="section-mapa">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3763.090680190566!2d-104.3188586850937!3d19.40871198689849!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8424d5b2443a59d9%3A0xb3c3b0042f9e4362!2sManzanillo%2C%20Col.!5e0!3m2!1ses!2smx!4v1678888888888!5m2!1ses!2smx" 
        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>

<?php include 'includes/footer.php'; ?>