<!DOCTYPE html>
<html lang="es" class="no-js">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <title>Agencia de Viajes para conocer Perú 2022 ✅ --> "Andean Exclusive Tours - Exclusiva Agencia de Viajes"</title>
    <meta name="keywords"
        content="Cusco tours, Cusco de Lujo, Agencia de Viajes Perú, Peru viajes, Tours en Perú, Tours en Cusco, Agencia de Viajes Cusco, Agencia de lujo, Tours exclusivos." />
    <meta name="Description"
        content="Una agencia de viajes de lujo en Cusco - Perú. ✅ Disfrute de la magia de de esta increible tierra.">
    <meta property="og:url" content="https://andeanexclusive.com/es/index-español.php" />
    <meta property="og:title" content="Tours en Perú - Cusco - Lima - Puerto Maldonado">
    <meta property="og:type" content="webside">
    <meta property="og:description"
        content="Una agencia de viajes de lujo en Cusco - Perú. ✅ Disfrute de la magia de de esta increible tierra." />
    <meta property="og:image" content="https://andeanexclusive.com/img/machupicchu.png" />
    <meta name="author" content="Web Masters DJM2" />
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <link rel='stylesheet' href="../styles/bootstrap.minbb49.css" type='text/css' media='all' />
    <link rel='stylesheet' href='../styles/js_composer.min5243.css' type='text/css' media='all' />
    <link rel="stylesheet" href="../css/wasa.css" type="text/css">
    <link rel="icon" type="image/png" href="../img/logoico.png">
    <link rel="stylesheet" type="text/css" href="../styles/estilo.css">
    <link rel="stylesheet" type="text/css" href="../font-awesome/css/font-awesome.css">
    <script type='text/javascript' src='../js/jquery4a5f.js'></script>
    <script type='text/javascript' src='../js/mediaelement-and-player.min45a0.js'></script>
</head>

<body class="home page-template-default page page-id-44 wpb-js-composer js-comp-ver-5.4.5 vc_responsive">
    <!--Boton chat de wasa-->
    @include('layouts.wasa')
    <!--End Boton wasa-->
    <div class="wrapper">
        <header id="header">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="header-wrapper">
                            <div class="site-branding">
                                <a href="index.html" rel="home" class="logo-text-link">
                                    <div class="logo2"></div>
                                </a>
                            </div>
                            <nav class="main-nav">
                                <ul class="one-page-menu">
                                    @include('layouts.menu-castellano')
                                    <li id="display" class="menu-has-children">
                                        <a>
                                            <button type="button" class="btn botondjm">Idioma <i
                                                    class="fa fa-chevron-down"></i></button>
                                        </a>
                                        <ul>
                                            <li><a>Español</a></li>
                                            <li><a href="/">Ingles</a></li>
                                        </ul>
                                    </li>
                                    <li id="wasanum" class='menu-item'><a href='https://bit.ly/3kYXpXr'
                                            target="_blank">+51 979 721 194</a></li>
                                    <li id="display2" class="menu-has-children">
                                        <a href="">ES</a>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <a href="/">EN</a>
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
        <section class="section-content no-padding">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <article class="blog-item blog-single">
                            <div class="entry-excerpt">
                                <div data-vc-full-width="true" data-vc-full-width-init="false" data-onepage-title="Home"
                                    data-onepage-slug="home"
                                    class="vc_row wpb_row vc_row-fluid fondoindex vc_row-has-fill vc_row-o-full-height vc_row-o-columns-middle vc_row-o-content-middle vc_row-flex">
                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner vc_custom_1461317698190">
                                            <div class="wpb_wrapper">
                                                <div class='carousel-headings '>
                                                    <h2 class="text-center" style="color: #fff">¡Reserva ahora!</h2>

                                                    <p class="text-center" style="color: #fff; font-weight: 800">
                                                        Encuentre disponibilidad para su viaje.</p>
                                                    @if (session()->has('flash'))
                                                        <center>
                                                            <div class="alert alert-success" id="alerta"
                                                                style="width: 60%;">
                                                                {{ session()->get('flash') }}<button type="button"
                                                                    onclick="bye()" style="float: right;">X</button>
                                                            </div>
                                                        </center>
                                                    @endif

                                                    <form class="form" action="{{ route('book-castellano') }}"
                                                        method="post">
                                                        @csrf
                                                        <div class="col-lg-12">
                                                            <div class="col-lg-2">
                                                                <input class="input100" type="text" name="da"
                                                                    placeholder="Fecha de Llegada"
                                                                    onclick="ocultarError();"
                                                                    onfocus="(this.type='date')"
                                                                    onblur="(this.type='text')">

                                                            </div>
                                                            <div class="col-lg-2">
                                                                <input class="input100" type="text" name="do"
                                                                    placeholder="Fecha de Salida"
                                                                    onclick="ocultarError();"
                                                                    onfocus="(this.type='date')"
                                                                    onblur="(this.type='text')">
                                                            </div>
                                                            <div class="col-lg-2">
                                                                <input type="number" class="form-control" id="adults"
                                                                    placeholder="Adultos" required name="adultos">
                                                            </div>
                                                            <div class="col-lg-2">
                                                                <input type="number" class="form-control"
                                                                    id="children" placeholder="niños" name="child">
                                                            </div>
                                                            <div class="col-lg-2">
                                                                <input type="email" class="form-control" id="email"
                                                                    placeholder="email@peru.com" required name="email">
                                                            </div>
                                                            <div class="col-lg-2">
                                                                <input type="text" class="form-control" id="text"
                                                                    name="mensaje" placeholder="Mensaje">
                                                            </div><br>
                                                        </div>

                                                        <div class="col-lg-12" style="padding-top: 10px">

                                                            <div class="col-lg-4"></div>

                                                            <div class="col-lg-4">
                                                                <input id="botonindex2" type="submit" name="submit"
                                                                    value="Enviar" />
                                                            </div>
                                                            <div class="col-lg-4"></div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vc_row-full-width vc_clearfix"></div>
                                <div id="separador"></div>
                                <div data-onepage-title="Services" data-onepage-slug="services"
                                    class="vc_row wpb_row vc_row-fluid vc_custom_1461248392126">
                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner vc_custom_1461227943574">
                                            <div class="wpb_wrapper">
                                                <div class='heading  text-center '>
                                                    <h3>Our services</h3>
                                                    <div class='seperator'></div>
                                                    <div class='desc'>
                                                        <p>From Day Experiences to Tailor Made Packages, exceed all your
                                                            expectations.</p>
                                                    </div>
                                                </div><br>

                                                <div
                                                    class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1461228476759">
                                                    <center>
                                                        <div class="col-lg-12">
                                                            <div class="row text-center">
                                                                <div class="vc_col-lg-4 text-center tt-el-service">
                                                                    <img src="../img/ticket.png"
                                                                        style="width: 75px; padding-bottom: 20px">
                                                                    <h3>Ticket ordering</h3>
                                                                    <div class='desc'>
                                                                        <p>We will have each entrance fee and tickets
                                                                            covered for your experience.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="vc_col-lg-4 text-center tt-el-service">
                                                                    <img src="../img/Extreme.tours-andean-exclusive.png"
                                                                        style="width: 70px">
                                                                    <h3>Extreme Tours</h3>
                                                                    <div class='desc'>
                                                                        <p>Climbing, zip-line, kayak, biking and more!
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="vc_col-lg-4 text-center tt-el-service">
                                                                    <img src="../img/service3.png" style="width: 70px">
                                                                    <h3>HoneyMoon</h3>
                                                                    <div class='desc'>
                                                                        <p>Romantic restaurant with a nice view?
                                                                            Charming and unique sceneries. We have
                                                                            perfect setting for your romantic vacation.
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row text-center">
                                                                <div class="vc_col-lg-4 text-center tt-el-service">
                                                                    <img src="../img/alojamiento-hotel.png"
                                                                        style="width: 75px">
                                                                    <h3>Lodging</h3>
                                                                    <div class='desc'>
                                                                        <p>Find the best accommodation for your stay.
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="vc_col-lg-4 text-center tt-el-service">

                                                                    <img src="../img/tour-guide-peru-tours.png"
                                                                        style="width: 80px">

                                                                    <h3>Tour Guide</h3>

                                                                    <div class='desc'>

                                                                        <p>CWe have the best and most experienced tour
                                                                            guides.</p>

                                                                    </div>

                                                                </div>

                                                                <div class="vc_col-lg-4 text-center tt-el-service">

                                                                    <img src="../img/Transporte-andean-exclusive.png"
                                                                        style="width: 80px">

                                                                    <h3>transport</h3>

                                                                    <div class='desc'>

                                                                        <p>Transportation service for all the places you
                                                                            require.</p>

                                                                    </div>

                                                                </div>

                                                            </div>

                                                            <img src="../img/logos/sello-safe-travels-peru.png"
                                                                alt="Trip Advisor">

                                                        </div>
                                                    </center>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-vc-full-width="true" data-vc-full-width-init="false"
                                    data-onepage-title="Hot Tours" data-onepage-slug="hot-tours"
                                    class="vc_row wpb_row vc_row-fluid vc_custom_1523936007189 vc_row-has-fill">
                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class='heading  text-center '>
                                                    <h3>Destinos Populares</h3>
                                                    <div class='seperator'></div>
                                                    <div class='desc'>
                                                        <p>Disfruta de los mejores tours, viajes y paquetes de
                                                            vacaciones en Perú<br /> ¡Tenemos los tours más lujosos y
                                                            exclusivos para usted!</p>
                                                    </div>
                                                </div>
                                                <div class='carousel-travel mv12 mvb0' data-columns='4' data-space='30'>
                                                    <div class='swiper-container'>
                                                        <div class='swiper-wrapper'>
                                                            <div class='swiper-slide'>
                                                                <div class='travel-item'>
                                                                    <div class='entry-img'>
                                                                        <a href='cusco-6-dias-5-noches'
                                                                            class='entry-link'><img width="400"
                                                                                height="400"
                                                                                src="../img/thumbnail/cusco-01.JPG"
                                                                                class="attachment-post-grid-s size-post-grid-s"
                                                                                alt="Tours en Peru - Cusco"
                                                                                srcset="../img/thumbnail/cusco-01.JPG"
                                                                                sizes="(max-width: 400px) 100vw, 400px" /></a>
                                                                    </div>
                                                                    <div class='entry-info'>
                                                                        <h3>Cusco por 6 días</h3>
                                                                        <div class='readmore'>
                                                                            <a href="cusco-6-dias-5-noches"
                                                                                class='button'>Más Info</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class='swiper-slide'>
                                                                <div class='travel-item'>
                                                                    <div class='entry-img'>
                                                                        <a href='machupicchu-acelerado'
                                                                            class='entry-link'><img width="400"
                                                                                height="400"
                                                                                src="../img/thumbnail/Machupicchu_AET.jpg"
                                                                                class="attachment-post-grid-s size-post-grid-s"
                                                                                alt="Cusco Tours tours de lujo"
                                                                                srcset="../img/thumbnail/Machupicchu_AET.jpg 150w"
                                                                                sizes="(max-width: 400px) 100vw, 400px" /></a>
                                                                    </div>
                                                                    <div class='entry-info'>
                                                                        <h3>Machu Picchu Todo el día</h3>
                                                                        <div class='readmore'>
                                                                            <a href='machupicchu-acelerado'
                                                                                class='button'>Más Info</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class='swiper-slide'>
                                                                <div class='travel-item'>
                                                                    <div class='entry-img'>
                                                                        <a href='huacachina-ica-peru-castellano'
                                                                            class='entry-link'><img width="400"
                                                                                height="400"
                                                                                src="../img/thumbnail/Peru-Arenero-y-Sandboarding-en-Huacachina.JPG"
                                                                                class="attachment-post-grid-s size-post-grid-s"
                                                                                alt="Huacachina desierto en Perú Oasis"
                                                                                srcset="../img/thumbnail/Peru-Arenero-y-Sandboarding-en-Huacachina.JPG 150w"
                                                                                sizes="(max-width: 400px) 100vw, 400px" /></a>
                                                                    </div>
                                                                    <div class='entry-info'>
                                                                        <h3>Huacachina</h3>
                                                                        <p>Un Oasis en el desierto</p>
                                                                        <div class='readmore'>
                                                                            <a href='huacachina-ica-peru-castellano'
                                                                                class='button'>Más Info</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class='swiper-slide'>
                                                                <div class='travel-item'>
                                                                    <div class='entry-img'>
                                                                        <a href='arequipa-3-dias'
                                                                            class='entry-link'><img width="400"
                                                                                height="400"
                                                                                src="img/thumbnail/arequipa-peru.JPG"
                                                                                class="attachment-post-grid-s size-post-grid-s"
                                                                                alt="Arequipa agencia de viajes"
                                                                                srcset="img/thumbnail/arequipa-peru.JPG 150w"
                                                                                sizes="(max-width: 400px) 100vw, 400px" /></a>
                                                                    </div>
                                                                    <div class='entry-info'>
                                                                        <h3>Arequipa</h3>
                                                                        <p>La ciudad Blanca</p>
                                                                        <div class='readmore'>
                                                                            <a href='arequipa-3-dias'
                                                                                class='button'>Más Info</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class='swiper-slide'>
                                                                <div class='travel-item'>
                                                                    <div class='entry-img'>
                                                                        <a href='peru-5-dias-4-noches'
                                                                            class='entry-link'><img
                                                                                src=".img/thumbnail/llamas.jpg"
                                                                                class="attachment-post-grid-s size-post-grid-s"
                                                                                alt="Cusco Tours Exclusive"
                                                                                srcset="img/thumbnail/llamas.jpg 150w"
                                                                                sizes="(max-width: 400px) 100vw, 400px" /></a>

                                                                    </div>
                                                                    <div class='entry-info'>

                                                                        <h3>Perú por 5 Días</h3>
                                                                        <div class='readmore'>
                                                                            <a href='peru-5-dias-4-noches
                                                                                class='button'>Más Info</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class='swiper-slide'>

                                                                <div class='travel-item'>

                                                                    <div class='entry-img'>

                                                                        <a href='valle-sagrado'
                                                                            class='entry-link'><img
                                                                                src="img/thumbnail/chincheros.jpg"
                                                                                class="attachment-post-grid-s size-post-grid-s"
                                                                                alt="Cusco Tours Exclusive"
                                                                                srcset="img/thumbnail/chincheros.jpg 150w"
                                                                                sizes="(max-width: 400px) 100vw, 400px" /></a>

                                                                    </div>

                                                                    <div class='entry-info'>

                                                                        <h3>Valle Sagrado de los Incas (Todo el día)</h3>
                                                                        <div class='readmore'>

                                                                            <a href='valle-sagrado'
                                                                                class='button'>Más Info</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class='swiper-button-prev'></div>
                                                    <div class='swiper-button-next'></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="vc_row-full-width vc_clearfix"></div>
                                <div data-vc-full-width="true" data-vc-full-width-init="false"
                                    data-vc-stretch-content="true" data-onepage-title="Gallery"
                                    data-onepage-slug="our-gallery"
                                    class="vc_row wpb_row vc_row-fluid vc_custom_1461248454146 vc_row-no-padding">
                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner ">
                                            <div class="wpb_wrapper">
                                                <div class='heading  text-center '>
                                                    <h3>Hoteles</h3>
                                                    <div id="separadordjm"></div>
                                                    <div id="separador"></div>
                                                </div>
                                                <div class='travel-grid ' data-columns='3' data-col-class='.col-sm-4'>
                                                    <div class='grid-container'>
                                                        <div class='masonry-item col-xs-12 col-sm-4 ftr-europe ftr-our-gallery'
                                                            style='padding: 0px;'>
                                                            <div class='travel-grid-item'>
                                                                <img width="640" height="420"
                                                                    src="../img/index/Belmond-hotel-Nazarenas.jpg"
                                                                    class="attachment-post-grid-m size-post-grid-m"
                                                                    alt="Hotel Belmond Nazarenas" />
                                                                <div class='entry-hover'>
                                                                    <div class='info'>
                                                                        <h3><a>Cusco</a></h3>
                                                                        <div class='entry-cat'><a>Belmond Hotel
                                                                                Nazarenas</a></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class='masonry-item col-xs-12 col-sm-4 ftr-europe ftr-our-gallery'
                                                            style='padding: 0px;'>
                                                            <div class='travel-grid-item'>
                                                                <img width="640" height="420"
                                                                    src="../img/index/Belmond-Hotel-Sol-y-Luna.jpg"
                                                                    class="attachment-post-grid-m size-post-grid-m"
                                                                    alt="Hotel Sol y Luna" />
                                                                <div class='entry-hover'>
                                                                    <div class='info'>
                                                                        <h3><a>Valle Sagrado</a></h3>
                                                                        <div class='entry-cat'><a>Hotel Sol y Luna</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class='masonry-item col-xs-12 col-sm-4 ftr-our-gallery ftr-south-africa'
                                                            style='padding: 0px;'>
                                                            <div class='travel-grid-item'>
                                                                <img width="640" height="420"
                                                                    src="../img/index/Belmond-sanctuary-lodge-peru.jpg"
                                                                    class="attachment-post-grid-m size-post-grid-m"
                                                                    alt="Belmond Santuary Lodge" />
                                                                <div class='entry-hover'>
                                                                    <div class='info'>
                                                                        <h3><a>Machu Picchu</a></h3>
                                                                        <div class='entry-cat'><a>Santuary Lodge
                                                                                Hotel</a></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class='masonry-item col-xs-12 col-sm-4 ftr-our-gallery ftr-south-america '
                                                            style='padding: 0px;'>
                                                            <div class='travel-grid-item'>
                                                                <img width="640" height="420"
                                                                    src="../img/index/Miraflores-park-hotel-peru.jpg"
                                                                    class="attachment-post-grid-m size-post-grid-m"
                                                                    alt="Miraflores Park Hotel" />
                                                                <div class='entry-hover'>
                                                                    <div class='info'>
                                                                        <h3><a>Lima</a></h3>
                                                                        <div class='entry-cat'><a>Miraflores Park
                                                                                Hotel</a></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class='masonry-item col-xs-12 col-sm-4 ftr-north-america ftr-our-gallery '
                                                            style='padding: 0px;'>
                                                            <div class='travel-grid-item'>
                                                                <img width="640" height="420"
                                                                    src="../img/index/Hotel-titilaka-puno.jpg"
                                                                    alt="Hotel Titilaka Puno" />
                                                                <div class='entry-hover'>
                                                                    <div class='info'>
                                                                        <h3><a>Puno</a></h3>
                                                                        <div class='entry-cat'><a>Titilaka Hotel</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class='masonry-item col-xs-12 col-sm-4 ftr-asia ftr-our-gallery '
                                                            style='padding: 0px;'>
                                                            <div class='travel-grid-item'>
                                                                <img width="640" height="420"
                                                                    src="../img/index/inkaterra-reserva-amazonica.jpg"
                                                                    class="attachment-post-grid-m size-post-grid-m"
                                                                    alt="Reserva Amazonica" />
                                                                <div class='entry-hover'>
                                                                    <div class='info'>
                                                                        <h3><a>Puerto Maldonado</a></h3>
                                                                        <div class='entry-cat'><a>Reserva Amazonas</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class='masonry-item col-xs-12 col-sm-4 ftr-asia ftr-our-gallery '
                                                            style='padding: 0px;'>
                                                            <div class='travel-grid-item'>
                                                                <img width="640" height="420"
                                                                    src="../img/index/junior-suite-hotel-b-lima.jpg"
                                                                    class="attachment-post-grid-m size-post-grid-m"
                                                                    alt="Reserva Amazonica" />
                                                                <div class='entry-hover'>
                                                                    <div class='info'>
                                                                        <h3><a>Lima</a></h3>
                                                                        <div class='entry-cat'><a>Hotel B</a></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class='masonry-item col-xs-12 col-sm-4 ftr-asia ftr-our-gallery '
                                                            style='padding: 0px;'>
                                                            <div class='travel-grid-item'>
                                                                <img width="640" height="420"
                                                                    src="../img/index/per_cusco-casa-cartagena.jpg"
                                                                    class="attachment-post-grid-m size-post-grid-m"
                                                                    alt="Reserva Amazonica" />
                                                                <div class='entry-hover'>
                                                                    <div class='info'>
                                                                        <h3><a>Cusco</a></h3>
                                                                        <div class='entry-cat'><a>Casa Cartagena</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class='masonry-item col-xs-12 col-sm-4 ftr-asia ftr-our-gallery '
                                                            style='padding: 0px;'>
                                                            <div class='travel-grid-item'>
                                                                <img width="640" height="420"
                                                                    src="../img/index/hotelsdotcom-hacienda-inkaterra.jpg"
                                                                    class="attachment-post-grid-m size-post-grid-m"
                                                                    alt="Reserva Amazonica" />
                                                                <div class='entry-hover'>
                                                                    <div class='info'>
                                                                        <h3><a>Sacred Valley</a></h3>
                                                                        <div class='entry-cat'><a>Casona Inkaterra</a>
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
                                </div>
                                <div style="height: 100px"></div>
                                <section class="pt-5 pb-5">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class='heading  text-center '>
                                                    <h3>Destinos Populares</h3>
                                                    <div class='seperator'></div>
                                                </div>
                                            </div>
                                            <div class="row espacio">
                                                <div class="col-md-4 mb-3">
                                                    <div class="card" style="padding-bottom: 35px">
                                                        <a href='peru-5-dias-4-noches'>
                                                            <img class="img-fluid" alt="Destino Perú"
                                                                src="img/thumbnail/Thumbnail-2/vacaciones-familiares-peru.jpg">
                                                        </a>
                                                        <div class="card-body">
                                                            <div class='entry-info'>
                                                                <h4>Perú por 5 días</h4>
                                                                <p>Cusco, Machu Picchu, Valle Sagrado, Maras Moray</p>
                                                                <a href='peru-5-dias-4-noches'
                                                                    id='botonnuevo'>Leer más</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <div class="card" style="padding-bottom: 35px">
                                                        <a href="ciclismo">
                                                            <img class="img-fluid"
                                                                src="img/thumbnail/Thumbnail-2/biking-cusco.jpg"
                                                                alt="Card image cap">
                                                        </a>
                                                        <div class="card-body">
                                                            <h4>Turismo de aventura</h4>
                                                            <p class="card-text">Biking, parapente, motocross,
                                                                caminatas</p>
                                                            <a href="caminatas-peru" id="botonnuevo">Leer más</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <div class="card" style="padding-bottom: 35px">
                                                        <a href="valle-sagrado"><img class="img-fluid"
                                                                src="img/thumbnail/Thumbnail-2/chincheros.jpg"
                                                                alt="Card image cap">
                                                        </a>
                                                        <div class="card-body">
                                                            <h4>Valle Sagrado de los incas</h4>
                                                            <p class="card-text">Disfruta de la experiencia que
                                                                tra conocer el valle Sagrado de los Inkas</p>
                                                            <a href="valle-sagrado" id="botonnuevo">Leer más</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row espacio">
                                                <div class="col-md-4 mb-3">
                                                    <div class="card" style="padding-bottom: 35px">
                                                        <a href='peru-8-dias-7-noches'>
                                                            <img class="img-fluid" alt="Destino Perú"
                                                                src="img/thumbnail/Thumbnail-2/arequipa-peru.JPG">
                                                        </a>
                                                        <div class="card-body">
                                                            <div class='entry-info'>
                                                                <h4>Perú por 8 días</h4>
                                                                <p>Lima, Cusco, Machu Picchu, Valle Sagrado, Maras
                                                                    Moray, Puno</p>
                                                                <a href='peru-8-dias-7-noches'
                                                                    id='botonnuevo'>Leer más</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <div class="card" style="padding-bottom: 35px">
                                                        <a href="puerto-maldonado-español">
                                                            <img class="img-fluid"
                                                                src="img/thumbnail/Thumbnail-2/mono-amazonas.jpg"
                                                                alt="Card image cap">
                                                        </a>
                                                        <div class="card-body">
                                                            <h4>Puerto maldonado</h4>
                                                            <p class="card-text">Aventura en la selva peruana.</p>
                                                            <a href="puerto-maldonado-español"
                                                                id="botonnuevo">Leer más</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <div class="card" style="padding-bottom: 35px">
                                                        <a href="huacachina-ica-peru-castellano"><img
                                                                class="img-fluid"
                                                                src="img/thumbnail/Thumbnail-2/Peru-Arenero-y-Sandboarding-en-Huacachina.JPG"
                                                                alt="Card image cap">
                                                        </a>
                                                        <div class="card-body">
                                                            <h4>Huacachina</h4>
                                                            <p class="card-text">Nuestro Oasis en Perú, un lugar
                                                                sacado de otro mundo</p>
                                                            <a href="huacachina-ica-peru-castellano"
                                                                id="botonnuevo">Más info</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row espacio">
                                                <div class="col-md-4 mb-3">
                                                    <div class="card" style="padding-bottom: 35px">
                                                        <a href='peru-7-dias-6-noches'>
                                                            <img class="img-fluid" alt="Destino Perú"
                                                                src="img/thumbnail/Thumbnail-2/llamas.jpg">

                                                        </a>
                                                        <div class="card-body">
                                                            <div class='entry-info'>
                                                                <h4>Peru por 7 días</h4>
                                                                <p>Lima, Arequipa, Cusco, Puno</p>
                                                                <a href='peru-7-dias-6-noches'
                                                                    id='botonnuevo'>Leer más</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4 mb-3">
                                                    <div class="card" style="padding-bottom: 35px">
                                                        <a href="puno-3-dias-tour">
                                                            <img class="img-fluid"
                                                                src="img/thumbnail/Thumbnail-2/puno-peru.JPG"
                                                                alt="Card image cap">
                                                        </a>
                                                        <div class="card-body">
                                                            <h4>Puno</h4>
                                                            <p class="card-text">Duración: 3 días</p>
                                                            <a href="puno-3-dias-tour" id="botonnuevo">Más
                                                                info</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <div class="card" style="padding-bottom: 35px">
                                                        <a href="hiram-bingham"><img class="img-fluid"
                                                                src="../img/thumbnail/Thumbnail-2/Machupicchu.jpg"
                                                                alt="Card image cap">
                                                        </a>
                                                        <div class="card-body">
                                                            <h4>Hiram Bingham</h4>
                                                            <p class="card-text">El exclusivo tren de lujo hacia
                                                                Machu Picchu</p>
                                                            <a href="hiram-bingham" id="botonnuevo">Más Info</a>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div style="height: 30px"></div>

                                            </div>

                                        </div>

                                    </div>

                                </section>
                            </div>
                            <div class="vc_row-full-width vc_clearfix"></div>
                            <div id="separador"></div>
                            <div id="separador"></div>
                            <div class="row text-center">
                                <div class='heading  text-center'>
                                    <h3>NUESTROS COMPAÑEROS</h3>
                                    <div id="separadordjm"></div>
                                </div <div id="separadordjm">
                            </div>
                            <div id="divdjm">
                                <div class="col-lg-3 text-center">
                                    <img src="../img/logos/aatc.png" id="filtro" alt="aatc cusco">
                                </div>
                                <div class="col-lg-3 text-center">
                                    <img src="../img/logos/marca_peru.PNG" id="filtro" alt="Marca Perú ">
                                </div>
                                <div class="col-lg-3 text-center">
                                    <img src="../img/logos/regenera2.png" id="filtro" alt="Regenera Cusco Perú">
                                </div>
                                <div class="col-lg-3 text-center">
                                    <img src="../img/logos/tripadvisor.png" id="filtro" alt="Trip Advisor">
                                </div>
                            </div>
                    </div>
                    <div data-onepage-title="Testimonials" data-onepage-slug="testimonials"
                        class="vc_row wpb_row vc_row-fluid vc_custom_1461248522309">
                        <div class="wpb_column vc_column_container vc_col-sm-12">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                    <div class='heading  text-center '>
                                        <h3>comentarios de clientes</h3>
                                        <div class='seperator' style='background-color:#9499bb;'></div>
                                        <div class='desc'>
                                            <p>We are really responsible for what your are thought and what your feeling
                                                now. We do what you
                                                <br /> need and what you accomplish for good service.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-vc-full-width="true" data-vc-full-width-init="false"
                        class="vc_row wpb_row vc_row-fluid vc_custom_1461246190555 vc_row-has-fill">
                        <div class="wpb_column vc_column_container vc_col-sm-1">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper"></div>
                            </div>
                        </div>
                        <div class="wpb_column vc_column_container vc_col-sm-10">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                    <div class='carousel-testimonials text-light'>
                                        <div class='swiper-container'>
                                            <div class='swiper-wrapper'>
                                                <div class='swiper-slide'>
                                                    <div class='testimonial'>
                                                        <div class='stars'><i class='fa fa-star'></i><i
                                                                class='fa fa-star'></i><i class='fa fa-star'></i><i
                                                                class='fa fa-star'></i><i class='fa fa-star'></i></div>
                                                        <div class='tcontent'>“On behalf of all Blue Parallel team, I
                                                            would like to thank you a million for all the hard and
                                                            excellent work over the past 12 years . It has been a real
                                                            pleasure to work with you and we always felt that we could
                                                            count on you regardless of the day / time and regardless of
                                                            how challenging the request was. We will miss you a lot as
                                                            we almost felt you were part of our day -to day team. We
                                                            wish you the best of luck, and we hope that our paths will
                                                            again cross in the future. ”</div>
                                                        <br>
                                                        <strong>Emmanuel Burgio - President Blue Parallel. Inc.</strong>
                                                    </div>
                                                </div>
                                                <div class='swiper-slide'>
                                                    <div class='testimonial'>
                                                        <div class='stars'><i class='fa fa-star'></i><i
                                                                class='fa fa-star'></i><i class='fa fa-star'></i><i
                                                                class='fa fa-star'></i><i class='fa fa-star'></i></div>
                                                        <div class='tcontent'>“Hello Carmen:
                                                            <br> Thank you for our delicious lunch with you. We enjoyed
                                                            it very much and also our weaving visit and guinea pig !!
                                                            You and your mother are twins!! I just wanted to confirm we
                                                            leave lake titilaka hotel with octavio tomorrow at 07.00am.
                                                            Thank you and until next time”
                                                        </div>
                                                        <br>
                                                        <strong>The Anderson Family</strong>

                                                    </div>
                                                </div>
                                                <div class='swiper-slide'>
                                                    <div class='testimonial'>
                                                        <div class='stars'><i class='fa fa-star'></i><i
                                                                class='fa fa-star'></i><i class='fa fa-star'></i><i
                                                                class='fa fa-star'></i><i class='fa fa-star'></i></div>
                                                        <div class='tcontent'>“Dear Carmen, Marleny, Luisa and Raquel:
                                                            <br> I hope you are good I just wanted to tell you from the
                                                            date my load left as a Travel Planner in Aracari. Keep in
                                                            touch with the company and I hope we can find again in the
                                                            future It has been a pleasure working together with Andean
                                                            Exclusive team and I thank you very much for your
                                                            professionalism, patience, support and dedication. I leave
                                                            my contact information”
                                                        </div>
                                                        <br>
                                                        <strong>Travel Planner in Aracari</strong>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class='swiper-pagination'></div>
                                        <div class='swiper-button-prev'></div>
                                        <div class='swiper-button-next'></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wpb_column vc_column_container vc_col-sm-1">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper"></div>
                            </div>
                        </div>
                    </div>
                    <div class="vc_row-full-width vc_clearfix"></div>
                </div>
                </article>
            </div>
    </div>
    </div>
    <div class="row" id="bookindex">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
            <div id="separador"></div>
            <div id="separador"></div>
            <div class='heading  text-center '>
                <h3>Como encontrarnos</h3>
                <div class='seperator'></div>
                <div class='desc'>
                    <p>Envíenos un mensaje para contactarnos</p>
                </div>
            </div>
            <div id="separador"></div>
            <!-----Booking---------->
            <div class="form text-center">
                <h4 style="padding-top: 13px">Solicitar reserva</h4>
                <form action="form1.php" method="post" role="form" class="book1">
                    <div class="form-row">
                        <br>
                        <div class="form-group col-lg-12">
                            <span class="form-label">Nombre:</span>
                            <input type="text" name="nombre" required class="form-control" placeholder="Requerido*"
                                data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                        </div>
                        <div class="form-group col-lg-12">
                            <span class="form-label">E-Mail:</span>
                            <input type="email" class="form-control" required name="email" id="email"
                                placeholder="Requerido*" data-rule="email" data-msg="Please enter a valid email" />
                            <div class="validation"></div>
                        </div>
                    </div>
                    <div class="form-group col-lg-12">
                        <span class="form-label">Envíenos un mensaje:</span>
                        <textarea class="form-control" name="mensaje" id="mensaje" rows="5" data-rule="required"
                            data-msg="Please write something for us" placeholder="Mensaje"></textarea>
                        <div class="validation"></div>
                    </div>
                    <input id="botondjm2" type="submit" name="submit" value="Enviar" />
                    <br>
                    <br>
                </form>
            </div>
        </div>
        <div class="col-lg-2"></div>
    </div>
    </section>
    @extends('layouts.foot-castellano')
    <script type='text/javascript' src='../js/swiper.minbb49.js?ver=5.2.2'></script>
    <script type='text/javascript' src='../js/isotope.pkgd.min5243.js?ver=5.4.5'></script>
    <script type='text/javascript' src='../js/scripts.js'></script>
</body>

</html>
