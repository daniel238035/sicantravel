    <footer class="row page-footer bg-negro hide ">
        <div class="container">
            <div class="row">
                <div class="col l4 s12">
                    <h5 class="white-text">CONTACTATE CON NOSOTROS</h5>
                    <p class="color-oscuro titulo-item ">Direccíón: Calle 8 de octubre #265 Lambayeque</p>
                    <p class="color-oscuro titulo-item ">Teléfono: 0051-74-420737 </p>
                    <p class="color-oscuro titulo-item ">RPM. #994777030</p>
                    <p class="color-oscuro titulo-item ">Correo: sicantravelperu@gmail.com</p>
                </div>
                <div class="col l4 s12 center hide-on-med-and-down ">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.5075712598714!2d-79.90641178552958!3d-6.707735367445322!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x904ced9307db00dd%3A0xd82bb63ce69b1c52!2sUniversidad+Nacional+Pedro+Ru%C3%ADz+Gallo!5e0!3m2!1ses!2spe!4v1513137581810"
                        width="100%" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <div class="col l4 s12">
                    <h5 class="white-text">HOJA INFORMATIVA</h5>
                    <div class="row lista-redes-footer">
                        <p class="color-oscuro  titulo-item">Ingrese su correo electrónico y le enviaremos más información</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright sub-footer">
            <div class="container">
                © 2017 Copyright Text
                <a class="grey-text text-lighten-4 right" href="#">Inicio</a>
            </div>
        </div>
    </footer>

    <footer class="row page-footer bg-negro white-text">
        <div class="container">
            <div class="row">
                <div class="col s12 l3">
                    <img class="responsive-img" src="images/logo2.png" alt="" style="margin: 10px; width: 80%;">
                </div>
                <div class="col s12 l4">
                    <h6 class="" style="font-weight: 200;"><span class="icon-phone"></span> Central: (076) 368464 / (076) 343339</h6>
                    <h6 class="" style="font-weight: 200;"><span class="icon-whatsapp"></span> 99880 5440</h6>
                    <h6 class="" style="font-weight: 200;"><span class="icon-mobile2"></span> RPM # 530581</h6>
                    <h6 class="" style="font-weight: 200;"><span class="icon-mobile2"></span> RPC:  95977 9998</h6>
                    <h6 class="" style="font-weight: 200;"><span class="icon-mail"></span> reservas@portaldelmarques.com</h6>
                    <h6 class="" style="font-weight: 200;"><span class="icon-home"></span> Jr. Del Comercio 644 - Cajamarca - Perú</h6>
                </div>
                <div class="col s12 l2">
                    <h5>Hoy en Chiclayo</h5>
                    <div id="weather"></div>
                </div>
                <div class="col s12 l3">
                    <h6>Politicas de Reserva</h6>
                </div>
            </div>
        </div>
        <div class="footer-copyright sub-footer">
            <div class="container">
                © 2017 Copyright Text
                <a class="grey-text text-lighten-4 right" href="#">Inicio</a>
            </div>
        </div>

        <div class="hide">
            <div class="col l4 s12">
                    <h5 class="white-text">CONTACTATE CON NOSOTROS</h5>
                    <p class="color-oscuro titulo-item ">Direccíón: Calle 8 de octubre #265 Lambayeque</p>
                    <p class="color-oscuro titulo-item ">Teléfono: 0051-74-420737 </p>
                    <p class="color-oscuro titulo-item ">RPM. #994777030</p>
                    <p class="color-oscuro titulo-item ">Correo: sicantravelperu@gmail.com</p>
                </div>
                <div class="col l4 s12 center hide-on-med-and-down ">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.5075712598714!2d-79.90641178552958!3d-6.707735367445322!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x904ced9307db00dd%3A0xd82bb63ce69b1c52!2sUniversidad+Nacional+Pedro+Ru%C3%ADz+Gallo!5e0!3m2!1ses!2spe!4v1513137581810"
                        width="100%" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <div class="col l4 s12">
                    <h5 class="white-text">HOJA INFORMATIVA</h5>
                    <div class="row lista-redes-footer">
                        <p class="color-oscuro  titulo-item">Ingrese su correo electrónico y le enviaremos más información</p>
                    </div>
                </div>
        </div>
    </footer>

    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/scrip.js"></script>

    <!--Import Swiper JV -->
    <script src="js/swiper.min.js"></script>
    
    <script>
      function load() {
        $('#page-loader').fadeOut(500);
      }
      window.onload = load;
    </script>

    <!-- Importar SMOOVE -->
    <script src="js/jquery.smoove.js"></script>
    <script>$('.block').smoove({offset:'40%'});</script>
    

    <!-- Importar Clima -->
    <script src="js/jquery.simpleWeather.js"></script>
    <script>
        $(document).ready(function () {
        $.simpleWeather({
            location: "Chiclayo, PE",
            woeid: '',
            unit: 'c',
            success: function (weather) {
                html = '<h3>' + weather.temp + '&deg;' + weather.units.temp + '</h3>';


                $("#weather").html(html);
            },
            error: function (error) {
                $("#weather").html('<p>' + error + '</p>');
            }
        });
    });
    </script>

</body>

</html>