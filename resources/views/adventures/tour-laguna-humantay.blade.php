<!DOCTYPE html>
<html lang="es" class="no-js">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="UTF-8">
    <title>TOUR LAGUNA HUMANTAY</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta name="keywords" content="TOUR LAGUNA HUMANTAY" />
    <meta property="og:description"
        content="laguna Humantay es un atractivo natural ubicado en el poblado de Soraypampa, antiguamente solo lo visitaban aquellos que se aventuraban a realizar la caminata al nevado Salkantay." />
    <meta property="og:url" content="https://andeanexclusive.com/adventures/tour-laguna-humantay">
    <meta property="og:title" content="TOUR LAGUNA HUMANTAY">
    <meta property="og:type" content="article">
    <meta property="og:image" content="https://www.andeanexclusive.com/img/llama2.jpg" />
    <meta name="author" content="Web Masters DJM2" />
    <link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel='stylesheet' href="{{ asset('styles/js_composer.min5243.css') }}" type='text/css' media='all' />
    <link rel="icon" type="image/png" href="{{ asset('img/logoico.png') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/estilo.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('font-awesome/css/font-awesome.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script type='text/javascript' src="{{ asset('js/jquery4a5f.js') }}"></script>
    <script type='text/javascript' src="{{ asset('js/mediaelement-and-player.min45a0.js') }}"></script>
</head>

<body class="home page-template-default page page-id-44 wpb-js-composer js-comp-ver-5.4.5 vc_responsive"
    style="font-size: 14px; font-weight: 400; color:#131313">
    @include('layouts.wasa-blog')
    <div class="wrapper">
        <header id="header">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="header-wrapper">
                            <div class="site-branding">
                                <a href="/" rel="home" class="logo-text-link"><img
                                        src="{{ asset('img/andean-exclusive-logo.png') }}" id="logo"></a>
                            </div>
                            <nav class="main-nav">
                                <ul class="one-page-menu">
                                    @include('layouts.menu-blog-castellano')
                                    <li id="display" class="menu-has-children">
                                        <a>
                                            <button type="button" class="botondjm">Idioma
                                                <i class="fa fa-chevron-down"></i>
                                            </button>
                                        </a>
                                        <ul>
                                            <li><a>ES</a></li>
                                            <li><a href="humantay-lake">EN</a></li>
                                        </ul>
                                    </li>
                                    <li id="wasanum" class='menu-item'><a href='https://bit.ly/3kYXpXr'
                                            target="_blank">+51 979 721 194</a></li>
                                    <li id="display2" class="menu-has-children">
                                        <a>ES</a>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <a href="humantay-lake">EN</a>
                                    </li>
                                </ul>
                                <a href="javascript:;" id="mobile-menu"><span></span></a>
                                <a href="javascript:;" id="close-menu"></a>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <article class="blog-item blog-single">
                        <div class="entry-excerpt">
                            <div data-vc-full-width="true" data-vc-full-width-init="false" data-onepage-title="Home"
                                data-onepage-slug="home"
                                class="vc_row wpb_row humantay vc_row-has-fill vc_row-o-full-height vc_row-o-content-middle vc_row-flex">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner vc_custom_1461317698190">
                                        <div class="wpb_wrapper">
                                            <div class='carousel-headings '>
                                                <div class='swiper-container'>
                                                    <div class='swiper-wrapper'>
                                                        <div class='swiper-slide'>
                                                            <div class='cover-text ph5 text-light text-center pv8 pvb0'>
                                                                @if (session()->has('flash'))
                                                                    <center>
                                                                        <div class="alert alert-success" id="alerta"
                                                                            style="width: 60%;">
                                                                            {{ session()->get('flash') }}<button
                                                                                type="button" onclick="bye()"
                                                                                style="float: right;">X</button>
                                                                        </div>
                                                                    </center>
                                                                @endif
                                                                <h1>LAGUNA HUMANTAY</h1>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="vc_row-full-width vc_clearfix"></div>
                        </div>
                    </article>
                </div>
            </div>
        </div>

    </div>
    <div id="separador"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3" id="display2">
                <div class="sticky-top" style="padding-top: 75px; z-index: 40">
                    <div>
                        <div class="card-body">
                            <div data-onepage-title="Services" data-onepage-slug="services"
                                class="vc_row wpb_row vc_row-fluid vc_custom_1461248392126">
                                <h1 class="text-center" style="font-size:22px; font-weight:500; margin-top:30px">
                                    Tours Similares
                                </h1>
                                <div id="similares">
                                    <div id="separador"></div>
                                    <a href="../ciclismo" class="button">Ciclismo en las momntañas</a>
                                </div>
                                <div id="similares">
                                    <div id="separador"></div>
                                    <a href="tour-de-rafting" class="button">Rafting</a>
                                </div>
                                <div id="similares">
                                    <div id="separador"></div>
                                    <a href="../huacachina-ica-peru" class="button">Sandboarding</a>
                                </div>
                                <div id="similares">
                                    <div id="separador"></div>
                                    <a href="tour-islas-palomino" class="button">Nadando con lobos marinos</a>
                                </div>
                                <div id="similares">
                                    <div id="separador"></div>
                                    <a href="peru-12-dias" class="button">Tour en Perú por 12 días</a>
                                </div>
                                <div id="similares">
                                    <div id="separador"></div>
                                    <a href="peru-20-días-tour" class="button">Tour en Perú por 20 days</a>
                                </div>
                                <div id="separador"></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-lg-6">
                <div data-onepage-title="Services" style="text-align:justify" data-onepage-slug="services"
                    class="vc_row-fluid vc_custom_1461248392126">
                    <center>
                        <h1 id="titulo1">TOUR EN LAGUNA HUMANTAY</h1>
                        <div id="separadordjm2"></div>
                        <p style="color: #0c8178"><i class="fa fa-map-marker">Cusco - Soraypampa - Salkantay</i>
                        <div class='readmore'>
                            <a href="mailto:reservas@andeanexclusive.com" id="botondjm3" type="submit" name="submit"
                                value="Send"><i class="fa fa-envelope-o"></i> Contáctanos</a>
                        </div>
                        </p>
                    </center>
                    <div id="separador"></div>
                    <h5 style="padding: 0px 1px 0px 20px;">Overview:</h5>
                    <p style="padding: 0px 1px 0px 20px;">
                        En este programa visitaremos uno de los nuevos circuitos turísticos del Cusco. La "laguna
                        Humantay" es un atractivo natural ubicado en el poblado de Soraypampa, antiguamente solo lo
                        visitaban aquellos que se aventuraban a realizar la caminata al nevado Salkantay, pero ahora se
                        ha convertido en una de los lugares más visitados por los viajeros, visitar la laguna Humantay
                        no te tomará más de 1 día, la caminata es fácil si ya te aclimataste previamente en Cusco y la
                        recompensa a este esfuerzo será el maravilloso paisaje que se observa en esta laguna de aguas
                        color turquesa.
                    </p>
                    <h5>Itinerario:</h5>
                    <p>
                        El viaje empieza en su hotel en Cusco, nuestro transfer lo visitara entre las 04:00 y 05:00 de
                        la mañana, realizaremos un viaje de dos horas y media en carro hacia el pueblo de Mollepata,
                        donde podremos desayunar y abastecernos con las últimas provisiones. Terminado el desayuno
                        continuaremos nuestro viaje por una hora y media en carro, el camino que tomaremos es de tierra
                        (trocha) hasta llegar a la comunidad de<strong> Soraypampa</strong> que se encuentra ubicada a
                        una altitud de
                        3900 msnm. Durante el viaje veremos hermosos paisajes y el impresionante nevado<strong>
                            "Salkantay".</strong>
                        Desde Soraypampa emprenderemos una caminata de 2 km. El camino es ascendente y nos tomará
                        alrededor de una hora y media a dos, mientras hacemos la caminata veremos un panorama de
                        montañas cubiertas de nieve, paisajes naturales impresionantes y una gran diversidad de flora y
                        fauna hasta llegar a la "Laguna de Humantay" que se encuentra a una altitud de 4200 msnm.<br>
                        La<strong> "Laguna Humantay"</strong> es de color turquesa debido al mineral que se encuentra en
                        el fondo, la
                        laguna es alimentada por los glaciares de la montaña y es considerada una joya de la naturaleza,
                        además de deleitarnos con la laguna Humantay podremos disfrutar de las impresionantes vistas de
                        las montañas que la rodean. Descenderemos caminando hasta llegar a la comunidad de Soraypampa
                        donde podremos disfrutar de un almuerzo. Terminado el almuerzo iniciaremos el viaje de retorno a
                        la ciudad del Cusco. Nuestro tour finaliza a las 6:30 de la tarde aproximadamente, terminando de
                        esta forma nuestra caminata a la laguna Humantay de 1 día.
                    </p>
                    <div class="row">
                        <div class="col-lg-6">
                            <h5>Incluye:</h5>
                            <p>
                                <i class="fa fa-check" aria-hidden="true"></i> Información previa a la salida del
                                tour.<br>
                                <i class="fa fa-check" aria-hidden="true"></i> Recojo de su hotel por la mañana y
                                traslado en transporte Cusco - Mollepata - Soraypampa
                                - Cusco<br>
                                <i class="fa fa-check" aria-hidden="true"></i> Desayuno y almuerzo.<br>
                                <i class="fa fa-check" aria-hidden="true"></i> Guía profesional Inglés – Español.<br>
                                <i class="fa fa-check" aria-hidden="true"></i> Botiquín de primeros auxilios
                                incluyendo botella de oxígeno de emergencia (en el carro).
                            </p>
                        </div>
                        <div class="col-lg-6">
                            <h5>No incluye:</h5>
                            <p>
                                <i class="fa fa-minus" aria-hidden="true"></i> Alquiler de Caballo<br>
                                <i class="fa fa-minus" aria-hidden="true"></i> Otros servicios no mencionados.<br>
                                <i class="fa fa-minus" aria-hidden="true"></i> Propinas.
                            </p>
                        </div>
                    </div>
                    <div id="separador"></div>
                    @include('layouts.payments')
                    <!-----Booking---------->
                    <div class="form text-center">
                        <!---------redes sociales------------------------>
                        <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button"
                            data-show-count="false">Tweet</a>
                        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

                        <div id="fb-root"></div>
                        <script async defer crossorigin="anonymous"
                                                src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v5.0&appId=366341694202025&autoLogAppEvents=1">
                        </script>
                        <div class="fb-like" data-href="https://andeanexclusive.com/cusco-5-days-4-nights.php"
                            data-width="" data-layout="button_count" data-action="like" data-size="small"
                            data-show-faces="false" data-share="true"></div>

                        <div id="fb-root"></div>
                        <script async defer crossorigin="anonymous"
                                                src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v5.0&appId=366341694202025&autoLogAppEvents=1">
                        </script>
                        <div class="fb-comments" data-href="https://andeanexclusive.com/cusco-5-days-4-nights.php"
                            data-width="" data-numposts="5"></div>

                        <!---------Fin redes sociales------------------------>
                    </div><br><br>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="sticky-top" style="padding-top: 75px; z-index: 40">
                    <div>
                        <div class="card-body">
                            @include('layouts.booking-castellano')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div data-onepage-title="Services" data-onepage-slug="services" id="display"
        class="vc_row wpb_row vc_row-fluid vc_custom_1461248392126">
        <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner vc_custom_1461227943574">
                <div class="wpb_wrapper">
                    <div class='heading  text-center'>
                        <div id="separador"></div>
                        <h3>Tours Similares</h3>
                        <div id="separadordjm"></div>
                    </div>
                </div>
                <div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1461228476759">
                    <div class="wpb_column vc_column_container vc_col-sm-3">
                        <div class="vc_column-inner vc_custom_1461228417147">
                            <div class="wpb_wrapper">
                                <div class='travel-item'>
                                    <div class='entry-img'>
                                        <a class='entry-link text-center' href="../cusco-5-dias-4-noches">
                                            <img src='../img/thumbnail/llama-peru.JPG' alt=" cusco en los andes" />
                                        </a>
                                    </div>
                                    <div class='entry-info'>
                                        <div class='readmore'>
                                            <a href='../cusco-5-days-4-nights' class='button'>Cusco 5 días</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wpb_column vc_column_container vc_col-sm-3">
                        <div class="vc_column-inner vc_custom_1461228442150">
                            <div class="wpb_wrapper">
                                <div class='travel-item'>
                                    <div class='entry-img'>
                                        <a class='entry-link text-center' href="tour-atv">
                                            <img width="400" height="400" src='../img/thumbnail/motocros-atv-peru.jpg'
                                                class="attachment-post-grid-s size-post-grid-s"
                                                alt="Tour de motocros en Cusco" />
                                        </a>
                                    </div>
                                    <div class='entry-info'>
                                        <div class='readmore'>
                                            <a href="tour-atv" class='button'>Motocros</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wpb_column vc_column_container vc_col-sm-3">
                        <div class="vc_column-inner vc_custom_1461228449756">
                            <div class="wpb_wrapper">
                                <div class='travel-item'>
                                    <div class='entry-img'>
                                        <a class='entry-link text-center' href="peru-9-dias-8-noches">
                                            <img width="400" height="400"
                                                src="../img/thumbnail/sandboarding-ica-peru.jpg"
                                                class="attachment-post-grid-s size-post-grid-s"
                                                alt="Tour en el Valle sagrado de los incas"
                                                srcset="../img/thumbnail/sandboarding-ica-peru.jpg 400w"
                                                sizes="(max-width: 400px) 100vw, 400px" />
                                        </a>
                                    </div>
                                    <div class='entry-info'>
                                        <div class='readmore'>
                                            <a class='button' href="peru-9-dias-8-noches">Sandboarding</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.foot-castellano')
    <script type='text/javascript' src="{{ asset('js/swiper.minbb49.js?ver=5.2.2') }}"></script>
    <script type='text/javascript' src="{{ asset('js/isotope.pkgd.min5243.js?ver=5.4.5') }}"></script>
    <script type='text/javascript' src="{{ asset('js/scripts.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

</body>

</html>
