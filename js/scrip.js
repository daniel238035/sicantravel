

$( document ).ready(function(){
  $(".loading").hide();
  $(".button-collapse").sideNav();
  $('.slider').slider({
    indicators:false,
    height: 600,
  });
  $('.scrollspy').scrollSpy();
  $('.dropdown-button').dropdown({
      inDuration: 300,
      outDuration: 225,
      constrain_width: false, // Does not change width of dropdown to that of the activator
      hover: true, // Activate on hover
      gutter: 0, // Spacing from edge
      belowOrigin: true, // Displays dropdown below the button
      alignment: 'left' // Displays dropdown with edge aligned to the left of button
    }
    );
  $('.collapsible').collapsible({
      accordion : false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
    });

  //MENU FIJO LUEGO DE SCROLL
  posicionarMenu();

  $(window).scroll(function() {
      posicionarMenu();
  });

  function posicionarMenu() {
    var altura_del_header = $('.header').outerHeight(true);
    var altura_del_menu = $('.menu-fijo').outerHeight(true);

    if ($(window).scrollTop() >= altura_del_header){
        $('.menu-fijo').addClass('fixed');
    } else {
        $('.menu-fijo').removeClass('fixed');
    }
  }


  //ANIMACION
  var options = [
     {selector: '.paquetes-slider', offset: 200, callback: function(el) { Materialize.fadeInImage($(el)); } },
      {selector: '.lista-medios-pago', offset: 200, callback: function(el) { Materialize.fadeInImage($(el)); } },
      {selector: '.playas-evento-slider', offset: 250, callback: function(el) { Materialize.fadeInImage($(el)); } },
      {selector: '.playas-destino-slider', offset: 300, callback: function(el) { Materialize.fadeInImage($(el)); } },
      {selector: '.costa-evento-slider', offset: 500, callback: function(el) { Materialize.fadeInImage($(el)); } },
      {selector: '.sierra-evento-slider', offset: 500, callback: function(el) { Materialize.fadeInImage($(el)); } },
      {selector: '.selva-evento-slider', offset: 500, callback: function(el) { Materialize.fadeInImage($(el)); } },

    ];

      Materialize.scrollFire(options);

  //PARALLAX
   $('.parallax').parallax();

   //ALTURA
    $(".height-total").css({"height":$(window).height()+"px"});




    //SCROOL LENTO
  /*Select all links with hashes
  $('a[href*="#"]')
    // Remove links that don't actually link to anything
    .not('[href="#"]')
    .not('[href="#0"]')
    .click(function(event) {
      // On-page links
      if (
        location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
        &&
        location.hostname == this.hostname
      ) {
        // Figure out element to scroll to
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        // Does a scroll target exist?
        if (target.length) {
          // Only prevent default if animation is actually gonna happen
          event.preventDefault();
          $('html, body').animate({
            scrollTop: target.offset().top
          }, 1000, function() {
            // Callback after animation
            // Must change focus!
            var $target = $(target);
            $target.focus();
            if ($target.is(":focus")) { // Checking if the target was focused
              return false;
            } else {
              $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
              $target.focus(); // Set focus again
            };
          });
        }
      }
    });*/

    //MISMA ALTURA
    function equalHeight(group) {
    tallest = 0;
    group.each(function() {
    thisHeight = $(this).height();
    if(thisHeight > tallest) {
    tallest = thisHeight;
    }
    });
    group.height(tallest);
    }

    $(document).ready(function() {
    equalHeight($(".altura-igual-1"));
    });

    $(document).ready(function () {
      equalHeight($(".altura-igual-2"));
    });

    $(document).ready(function () {
      equalHeight($(".altura-igual-3"));
    });

    $(document).ready(function () {
      equalHeight($(".altura-igual-4"));
    });

    $(document).ready(function () {
      equalHeight($(".altura-igual-row"));
    });

    $(document).ready(function () {
      equalHeight($(".altura-igual-titulo"));
    });

    $(document).ready(function () {
      equalHeight($(".altura-igual-contenido"));
    });
    
    $(document).ready(function () {
      equalHeight($(".altura-igual-contenido-1"));
    });

    $(document).ready(function () {
      equalHeight($(".altura-igual-contenido-2"));
    });

    $(document).ready(function () {
      equalHeight($(".altura-igual-contenido-3"));
    });

    $(document).ready(function () {
      equalHeight($(".altura-igual-publicidad-1"));
    });
    


    //Swiper efects
    var swiper1 = new Swiper('.swp1', {
      slidesPerView: 3,
      breakpoints: {
        // when window width is <= 320px
        320: {
          slidesPerView: 1,
          spaceBetween: 10
        },
        // when window width is <= 480px
        480: {
          slidesPerView: 1,
          spaceBetween: 20
        },
        // when window width is <= 640px
        640: {
          slidesPerView: 3,
          spaceBetween: 30
        }
      },
      spaceBetween: 30,
      freeMode: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      loop: true,
      autoplay: {
        delay: 3500,
        disableOnInteraction: false,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });

    var swiper2 = new Swiper('.swp-img-paquete', {
      spaceBetween: 30,
      effect: 'fade',
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
    });

    /* PARA MOSTRAR Y OCULTAR */
    $(document).ready(function () {
      $("#mostrar-hotel").on("click", function () {
        $('#publicidad-hotel').show(); //muestro mediante id
      });
      $("#ocultar-hotel").on("click", function () {
        $('#publicidad-hotel').hide(); //oculto mediante id
      });
    });

    $(document).ready(function () {
      $("#mostrar-restaurante").on("click", function () {
        $('#publicidad-restaurante').show(); //muestro mediante id
      });
      $("#ocultar-restaurante").on("click", function () {
        $('#publicidad-restaurante').hide(); //oculto mediante id
      });
    });

    $(document).ready(function () {
      $('.zoom').hover(function () {
        $(this).addClass('transition');
      }, function () {
        $(this).removeClass('transition');
      });
    });

    

    
    


})
