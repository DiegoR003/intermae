<?php 
    $tituloPagina = "Inicio";
    include 'includes/header.php'; 
?>

<section class="hero-intermae">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <h1 class="titulo-principal">INTERMAE TRANSLOGISTICS</h1>
                <h4 class="subtitulo-principal">Tu socio en Logística, Almacenaje y Transporte.</h4>
                <a class="btn btn-dorado me-2 mt-3" href="servicios.php">Nuestros Servicios</a>
                <a class="btn btn-dorado" href="contacto.php">Cotizar Ahora</a>
            </div>
        </div>
    </div>
</section>

<section class="seccion-oscura">
    <div class="container">
        
        <div class="row">
            <div class="col-12">
                <div class="owl-carousel owl-theme" id="servicios-carousel">
                    
                    <div class="item">
                        <div class="tarjeta-servicio">
                            <img src="assets/img/104.jpg" class="img-fluid" alt="Transporte de Carga"> <div class="tarjeta-contenido"> <h4><a href="servicios.php#transporte">Transporte de Carga Local y Foránea</a></h4>
                                <p>Contamos con flotilla propia para traslados seguros en todo México.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="item">
                        <div class="tarjeta-servicio">
                            <img src="assets/img/servicio-contenedores.jpg" class="img-fluid" alt="Manejo de Contenedores">
                            <div class="tarjeta-contenido">
                                <h4><a href="servicios.php#contenedores">Manejo de Contenedores y Patios</a></h4>
                                <p>Servicio desde/hacia puerto, con patios certificados y almacenamiento.</p>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="tarjeta-servicio">
                            <img src="assets/img/servicio-custodia.jpg" class="img-fluid" alt="Custodia y Monitoreo">
                            <div class="tarjeta-contenido">
                                <h4><a href="servicios.php#custodia">Custodia y Monitoreo GPS 24/7</a></h4>
                                <p>Seguridad total en el traslado de mercancías con reportes en tiempo real.</p>
                            </div>
                        </div>
                    </div>

                </div> </div>
        </div> <div class="row">
            <div class="col-md-3 col-6">
                <div class="stats-block">
                    <div class="stats-number" data-count="10">+10</div>
                    <div class="stats-text">Años de Experiencia</div>
                </div>
            </div>
            </div> 

    </div>
</section>

<section class="seccion-blanca">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <h2 class="titulo-seccion">CARACTERÍSTICAS DE INTERMAE TRANSLOGISTICS</h2>
                <div class="separador-dorado"></div>
                <p class="mt-4"><strong>Somos una empresa mexicana especializada en transporte local y foráneo, manejo de contenedores, patios, almacenes, custodia de mercancías y soluciones logísticas integrales.</strong></p>
                <p>Nuestra empresa ofrece una amplia gama de servicios de transporte. Contamos con flotilla propia, patios certificados, bodegas techadas y centro de monitoreo 24/7 para garantizar la seguridad y eficiencia en cada traslado.</p>
                <div class="row mt-4 lista-iconos">
                    <div class="col-md-6"><i class="fas fa-check-circle check-verde me-2"></i>Transporte Local y Foráneo</div>
                    <div class="col-md-6"><i class="fas fa-check-circle check-verde me-2"></i>Manejo de Contenedores</div>
                    <div class="col-md-6"><i class="fas fa-check-circle check-verde me-2"></i>Custodia de Mercancía</div>
                    <div class="col-md-6"><i class="fas fa-check-circle check-verde me-2"></i>Monitoreo GPS 24/7</div>
                </div>
            </div>
            <div class="col-lg-5 text-center">
                <img src="assets/img/intermae-servicios.jpg" class="img-fluid rounded" alt="Servicios de Logística">
            </div>
        </div>
    </div>
</section>

<section class="seccion-gris">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <div class="imagen-con-gradiente">
                    <img src="assets/img/intermae-cobertura.jpg" class="img-fluid" alt="Cobertura de Sectores">
                    <div class="texto-superpuesto">
                        <h5 class="fw-bold">Book your Cargo</h5>
                        <p>now & Your job just got a lot easier</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 ps-lg-5 mt-4 mt-lg-0">
                <h2 class="titulo-seccion">COBERTURA DE SECTORES INDUSTRIALES</h2>
                <div class="separador-dorado"></div>
                <p class="mt-4">Cubrimos los principales sectores industriales, desde alimentos y bebidas, químicos, retail, bienes duraderos y más.</p>
                <p>Nuestra misión es proveer a nuestros clientes servicios calificados de acuerdo a los estándares internacionales, planeando rutas eficientes y seguras.</p>
            </div>
        </div>
    </div>
</section>

<section class="seccion-verde-principal">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <h2 class="titulo-seccion" style="color: var(--blanco); font-size: 2.5rem;">Solicita un presupuesto gratuito para su carga.</h2>
                <div class="separador-dorado"></div>
                <h4 class="subtitulo-principal mt-4" style="font-size: 1.3rem; line-height: 1.6;">
                    "Garantizamos un servicio calificado, seguro y a tiempo, con reportes y evidencias en tiempo real."
                </h4>
            </div>
            <div class="col-lg-7 ps-lg-5 mt-4 mt-lg-0">
                <form action="php/enviarCorreo.php" method="post" class="formulario-cotizacion">
                    <div class="row">
                        <div class="col-lg-6 mb-3">
                            <input type="text" class="form-control" name="your-name" placeholder="Su Nombre*" required>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <input type="text" class="form-control" name="your-email" placeholder="Tu Email o Teléfono*" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 mb-3">
                            <input type="text" class="form-control" name="departure" placeholder="Origen" required>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <input type="text" class="form-control" name="arrival" placeholder="Destino" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control" name="your-message" rows="4" placeholder="Descripción de la Carga *"></textarea>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-dorado">Solicitar Presupuesto</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="seccion-logos">
    <div class="container">
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

<?php 
    include 'includes/footer.php'; 
?>