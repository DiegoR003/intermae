// Espera a que todo el documento esté listo
$(document).ready(function(){

    // Activa el carrusel de servicios (el de las 3 tarjetas)
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 30, // El espacio entre tarjetas
        nav: false, // Oculta las flechas de navegación
        dots: true, // Muestra los puntos de navegación
        autoplay: true,
        autoplayTimeout: 5000,
        responsive:{
            0:{ // En pantallas pequeñas
                items: 1 // Muestra 1 tarjeta
            },
            768:{ // En pantallas medianas (tablets)
                items: 2 // Muestra 2 tarjetas
            },
            992:{ // En pantallas grandes (desktop)
                items: 3 // Muestra 3 tarjetas
            }
        }
    });

    // Activa el carrusel de logos (el de abajo)
    $('#logos-carousel').owlCarousel({
        loop: true,
        margin: 40,
        nav: false,
        dots: false,
        autoplay: true,
        autoplayTimeout: 3000,
        responsive:{
            0:{
                items: 2
            },
            576:{
                items: 3
            },
            768:{
                items: 4
            },
            992:{
                items: 6 // Muestra 6 logos en desktop
            }
        }
    });

});