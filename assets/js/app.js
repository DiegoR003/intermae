

// Animación de contadores
document.addEventListener('DOMContentLoaded', function() {
    const statNumbers = document.querySelectorAll('.stat-big-number');
    
    const animateCounter = (element) => {
        const target = parseInt(element.getAttribute('data-count'));
        const duration = 2000;
        const step = target / (duration / 16);
        let current = 0;
        
        const timer = setInterval(() => {
            current += step;
            if (current >= target) {
                element.textContent = target.toLocaleString();
                clearInterval(timer);
            } else {
                element.textContent = Math.floor(current).toLocaleString();
            }
        }, 16);
    };
    
    // Intersection Observer para iniciar animación cuando sea visible
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateCounter(entry.target);
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.5 });
    
    statNumbers.forEach(stat => observer.observe(stat));
    
    // Inicializar carruseles si Owl Carousel está disponible
    if (typeof $.fn.owlCarousel !== 'undefined') {
        $('#logos-carousel').owlCarousel({
            loop: true,
            margin: 30,
            nav: false,
            dots: false,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            responsive: {
                0: { items: 2 },
                600: { items: 3 },
                1000: { items: 5 }
            }
        });
    }



    const heroCarousel = document.getElementById('heroCarousel');

  function animateSlide(slide) {
    const text = slide.querySelector('.hero-content');
    const buttons = slide.querySelector('.hero-buttons');

    // Reiniciar estado
    text && text.classList.remove('show');
    buttons && buttons.classList.remove('show');

    // Mostrar texto después de 2s
    setTimeout(() => {
      text && text.classList.add('show');
    }, 1000);

    // Mostrar botones después de 3s
    setTimeout(() => {
      buttons && buttons.classList.add('show');
    }, 2000);
  }

  // Animar primer slide al cargar
  const firstSlide = heroCarousel.querySelector('.carousel-item.active');
  animateSlide(firstSlide);

  // Animar cada vez que el carrusel cambia de slide
  heroCarousel.addEventListener('slide.bs.carousel', function (e) {
    const nextSlide = e.relatedTarget;
    animateSlide(nextSlide);
  });

  
    const text = `"Garantizamos un servicio calificado, seguro y a tiempo, con reportes y evidencias en tiempo real."`;
  const typingText = document.getElementById("typing-text");
  let index = 0;
  let started = false;

  function typeEffect() {
    if (index < text.length) {
      typingText.textContent += text.charAt(index);
      index++;
      setTimeout(typeEffect, 50);
    }
  }

  // Observador para detectar cuando aparece en pantalla
  const typingObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting && !started) {
        started = true;
        typeEffect();
        typingObserver.unobserve(entry.target); // Evita que se repita
      }
    });
  }, { threshold: 0.3 }); // Se activa cuando el 30% de la sección es visible

  typingObserver.observe(typingText);




  // Activa hover solo en desktop
  if (window.matchMedia('(min-width: 992px)').matches) {
    const dropdowns = document.querySelectorAll('.navbar .dropdown');
    dropdowns.forEach((dd) => {
      const toggle = dd.querySelector('[data-bs-toggle="dropdown"]');
      const menu   = dd.querySelector('.dropdown-menu');
      if (!toggle || !menu) return;

      let showTimeout, hideTimeout;
      const instance = bootstrap.Dropdown.getOrCreateInstance(toggle);

      dd.addEventListener('mouseenter', () => {
        clearTimeout(hideTimeout);
        showTimeout = setTimeout(() => instance.show(), 100);
      });

      dd.addEventListener('mouseleave', () => {
        clearTimeout(showTimeout);
        hideTimeout = setTimeout(() => instance.hide(), 150);
      });
    });
  }
 

});

