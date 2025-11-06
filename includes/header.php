<?php
    // Lógica para el título de la página
    if (!isset($tituloPagina)) {
        $tituloPagina = "INTERMAE TRANSLOGISTICS";
    } else {
        $tituloPagina = $tituloPagina . " - INTERMAE TRANSLOGISTICS";
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $tituloPagina; ?></title>
    
  

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@700;800&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    

    <link rel="stylesheet" href="assets/css/styles.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">


</head>
<body class="home">

    <div class="header-top-bar" style="background-color: #1F4624; color: #ffffff;">
        <div class="container d-flex justify-content-between">
            <div>
                <span class="me-3"><i class="fas fa-phone  me-2"></i>+52 314 100 3333</span>
                <span><i class="fas fa-envelope me-2"></i> comercial@grupointermae.com</span>
            </div>
            <div>
                </div>
        </div>
    </div>

    <header class="header-main">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    <img src="assets/img/logos/intermae-logo.png" alt="INTERMAE Logo" style="width: 80px; height: 60px;">
                </a>
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuPrincipal" aria-controls="menuPrincipal" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="menuPrincipal">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0"> <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">INICIO</a>
                        </li>
                        <li class="nav-item dropdown">
                       <a class="nav-link dropdown-toggle" href="servicios.php" id="navbarServicios"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        SERVICIOS
                       </a>
                       <ul class="dropdown-menu" aria-labelledby="navbarServicios">
                       <li><a class="dropdown-item" href="servicios.php#transporte">TRANSPORTE</a></li>
                       <li><a class="dropdown-item" href="servicios.php#patio-almacen">PATIO & ALMACÉN</a></li>
                       <li><a class="dropdown-item" href="servicios.php#seguridad">SEGURIDAD & MONITOREO</a></li>
                       </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="nosotros.php">NOSOTROS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contacto.php">CONTACTO</a>
                        </li>
                    </ul>
                    <!--<span class="header-search"><i class="fas fa-search"></i></span>-->
                </div>
            </div>
        </nav>
    </header>

    <main>