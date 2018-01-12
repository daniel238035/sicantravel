<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content=="IE=edge" />
    <meta name="google" value="notranslate" />
    <title>Sican Travel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.css" media="screen,projection" />
    <!--Import stylos.css-->
    <link type="text/css" rel="stylesheet" href="css/stylos.css" media="screen,projection" />
    <!--Import Swiper -->
    <link rel="stylesheet" href="css/swiper.min.css">
    <!--FONTS IMPORTADOS-->
    <link href="https://fonts.googleapis.com/css?family=Hammersmith+One|Poppins|Reem+Kufi" rel="stylesheet">


    <!-- Demo styles -->
    <style>
        html,
        body {
            position: relative;
            height: 100%;
        }

        body {
            background: #eee;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-size: 14px;
            color: #000;
            margin: 0;
            padding: 0;
        }

        .swiper-container {
            width: 100%;
            height: 100%;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            /* Center slide text vertically */
            display: -webkit-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            align-items: center;
        }

        .menu {
            min-width: 100px;
            width: 70%;
            max-width: 320px;
            background-color: #2C8DFB;
            color: #fff;
        }

        .content {
            width: 100%;
        }

        .menu-button {
            position: absolute;
            top: 0px;
            left: 0px;
            padding: 15px;
            cursor: pointer;
            -webkit-transition: .3s;
            transition: .3s;
            background-color: #2C8DFB;
            /*margin: 14px;
                border-radius: 5px;*/
        }

        .menu-button .bar:nth-of-type(1) {
            margin-top: 0px;
        }

        .menu-button .bar:nth-of-type(3) {
            margin-bottom: 0px;
        }

        .bar {
            position: relative;
            display: block;
            width: 50px;
            height: 5px;
            margin: 10px auto;
            background-color: #fff;
            border-radius: 10px;
            -webkit-transition: .3s;
            transition: .3s;
        }

        .menu-button:hover .bar:nth-of-type(1) {
            -webkit-transform: translateY(1.5px) rotate(-4.5deg);
            -ms-transform: translateY(1.5px) rotate(-4.5deg);
            transform: translateY(1.5px) rotate(-4.5deg);
        }

        .menu-button:hover .bar:nth-of-type(2) {
            opacity: .9;
        }

        .menu-button:hover .bar:nth-of-type(3) {
            -webkit-transform: translateY(-1.5px) rotate(4.5deg);
            -ms-transform: translateY(-1.5px) rotate(4.5deg);
            transform: translateY(-1.5px) rotate(4.5deg);
        }

        .cross .bar:nth-of-type(1) {
            -webkit-transform: translateY(15px) rotate(-45deg);
            -ms-transform: translateY(15px) rotate(-45deg);
            transform: translateY(15px) rotate(-45deg);
        }

        .cross .bar:nth-of-type(2) {
            opacity: 0;
        }

        .cross .bar:nth-of-type(3) {
            -webkit-transform: translateY(-15px) rotate(45deg);
            -ms-transform: translateY(-15px) rotate(45deg);
            transform: translateY(-15px) rotate(45deg);
        }

        .cross:hover .bar:nth-of-type(1) {
            -webkit-transform: translateY(13.5px) rotate(-40.5deg);
            -ms-transform: translateY(13.5px) rotate(-40.5deg);
            transform: translateY(13.5px) rotate(-40.5deg);
        }

        .cross:hover .bar:nth-of-type(2) {
            opacity: .1;
        }

        .cross:hover .bar:nth-of-type(3) {
            -webkit-transform: translateY(-13.5px) rotate(40.5deg);
            -ms-transform: translateY(-13.5px) rotate(40.5deg);
            transform: translateY(-13.5px) rotate(40.5deg);
        }
    </style>
</head>
<body>

    <header>

    </header>

    <div class="cuerpo">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide menu">Menu slide</div>
                <div class="swiper-slide content">
                    <div class="menu-button">
                        <div class="bar"></div>
                        <div class="bar"></div>
                        <div class="bar"></div>
                    </div>
                    Content slide
                </div>
            </div>
        </div>
    </div>
    

    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/scrip.js"></script>

    <!--Import Swiper JV -->
    <script src="js/swiper.min.js"></script>

</body>
</html>
