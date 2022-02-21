<!DOCTYPE html>
<html lang="en-US" class="no-js">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="UTF-8">
    <title>Palomino Islands Tour</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta name="keywords"
        content="Enjoy a 4 hour tour by boat in Lima, You will be able to witness the marine life that inhabits the islands of Lima, including birds and sea lions. This tour is a great addition to your trip to Lima." />
    <meta property="og:description"
        content="Enjoy a 4 hour tour by boat in Lima. You will be able to witness the marine life that inhabits the islands of Lima, including birds and sea lions. This tour is a great addition to your trip to Lima." />
    <meta property="og:url" content="https://andeanexclusive.com/adventures/palomino-islands-tour">
    <meta property="og:title" content="Palomino Islands Tour">
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
                                    @include('layouts.menu-blog')
                                    <li id="display" class="menu-has-children">
                                        <a>
                                            <button type="button" class="botondjm">Language
                                                <i class="fa fa-chevron-down"></i>
                                            </button>
                                        </a>
                                        <ul>
                                            <li><a href="tour-islas-palomino">ES</a></li>
                                            <li><a>EN</a></li>
                                        </ul>
                                    </li>
                                    <li id="wasanum" class='menu-item'><a href='https://bit.ly/3kYXpXr'
                                            target="_blank">+51 979 721 194</a></li>
                                    <li id="display2" class="menu-has-children">
                                        <a href="tour-islas-palomino">ES</a>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <a>EN</a>
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
                                class="vc_row wpb_row palomino-islands vc_row-has-fill vc_row-o-full-height vc_row-o-content-middle vc_row-flex">
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
                                                                <h1>Palomino Islands Tour</h1>
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
                                    Similar Tours
                                </h1>
                                <div id="similares">
                                    <div id="separador"></div>
                                    <a href="../biking" class="button">Biking in the mountains</a>
                                </div>
                                <div id="similares">
                                    <div id="separador"></div>
                                    <a href="rafting-tour" class="button">Rafting</a>
                                </div>
                                <div id="similares">
                                    <div id="separador"></div>
                                    <a href="atv-tour" class="button">ATV</a>
                                </div>
                                <div id="similares">
                                    <div id="separador"></div>
                                    <a href="../huacachina-ica-peru" class="button">Sandboarding Perú</a>
                                </div>
                                <div id="similares">
                                    <div id="separador"></div>
                                    <a href="peru-12-days" class="button">Tour in Perú for 12 days</a>
                                </div>
                                <div id="similares">
                                    <div id="separador"></div>
                                    <a href="peru-20-days-tour" class="button">Tour in Perú for 20 days</a>
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
                        <h1 id="titulo1">Palomino Islands Tour</h1>
                        <div id="separadordjm2"></div>
                        <p style="color: #0c8178"><i class="fa fa-map-marker">Lima - Callao</i>
                        <div class='readmore'>
                            <a href="mailto:reservas@andeanexclusive.com" id="botondjm3" type="submit" name="submit"
                                value="Send"><i class="fa fa-envelope-o"></i> Contact Us</a>
                        </div>
                        </p>
                    </center>
                    <div id="separador"></div>
                    <h5 style="padding: 0px 1px 0px 20px;">Overview</h5>
                    <p style="padding: 0px 1px 0px 20px;">
                        Enjoy a 4 hour tour by boat in Lima. You will be able to witness the marine life that inhabits
                        the islands of Lima, including birds and sea lions. This tour is a great addition to your trip
                        to Lima.
                    </p>
                    <div id="separador"></div>
                    <h5>ITINERARY:</h5>
                    <p>
                        Our staff will pick you up at the meeting point (Miguel Grau Square – Callao). We will do the
                        check in and provide you with lifejackets to then go to the dock to board the ship. Our Palomino
                        Islands tour will start once the address Captaincy and Coastguard give us the signal. During the
                        tour we will see the following attractions:<br>

                        <strong>The Camotal:</strong> Part of Callao that was submerged underwater following the
                        earthquake in 1746. In
                        low-tide days you can see some remnants of this place.<br>

                        <strong>San Lorenzo Island:</strong> Located about 4 km across the bay of Callao; the island has
                        an area of 8 km
                        long by 2.5 km wide. It was a religious center in pre-Columbian times, a cemetery for sailors
                        and pirates in colonial times, and later became the site of important studies, having been
                        visited by many scientists including Charles Darwin. Today, San Lorenzo Island is a military
                        zone. During our tour we will have a great panoramic view of this historic island of San
                        Lorenzo.<br>

                        <strong>El Fronton Island: </strong> km out from the coast, El Fronton Island emerges as a huge
                        rock in the sea.
                        The island houses the remains of a prison of the same name.<br>

                        <strong>Cavinzas Islands: </strong> are a group of islands and rocky islets, caves and caverns
                        which were
                        formed naturally. The islands are home to seabirds such as pelicans, guanay, chuitas, gulls of
                        several varieties, etc. The Cavinzas islands are also inhabited by the Humboldt penguins, which
                        can occasionally be seen during the tour.<br>

                        <strong>Palomino Islands:</strong> This important group of islands has become a habitat and
                        refuge for sea lions;
                        these huge, playful and friendly mammals live on these rocky islands which are full of beautiful
                        natural caves and caverns. If you are prepared, feel free to have a swim with the sea lions and
                        take a picture postcard with them.<br>

                        The tour lasts about 4 hours and ends at Miguel Grau Square in Callao. If you ask in advance, we
                        can provide you with transfer back to your hotel in Lima.


                    </p>



                    <div id="separador"></div>
                    <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist"
                        style="text-transform: uppercase; font-size: 12px; font-weight: 700">
                        <li class="nav-item">
                            <a class="nav-link active" id="drop" data-toggle="pill" href="#pills-home" role="tab"
                                aria-controls="pills-home" aria-selected="true">Include</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile"
                                role="tab" aria-controls="pills-profile" aria-selected="false">No Include</a>
                        </li>

                    </ul>
                    <div class="tab-content pb-5" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab">
                            <i class="fa fa-check" aria-hidden="true"></i> Professional English speaking Tour Guide.<br>
                            <i class="fa fa-check" aria-hidden="true"></i> Entrance tickets and yacht transport to all islands of visit.<br>
                            <i class="fa fa-check" aria-hidden="true"></i> Life jacket and first aid kit.<br>
                            <i class="fa fa-check" aria-hidden="true"></i> Hot and cold nonalcoholic drinks.<br>
                            <i class="fa fa-check" aria-hidden="true"></i> Light snacks (chips, banana chips, cookies, etc).
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                            aria-labelledby="pills-profile-tab">
                            <i class="fa fa-minus" aria-hidden="true"></i> Meals.<br>
                            <i class="fa fa-minus" aria-hidden="true"></i> Tips or extra expenses. <br> 
                            <i class="fa fa-minus" aria-hidden="true"></i> Hotel-Dock-Hotel Transfers.
                        </div>

                    </div>
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
                            @include('layouts.booking')
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
                        <h3>Similar Tours</h3>
                        <div id="separadordjm"></div>
                    </div>
                </div>
                <div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1461228476759">
                    <div class="wpb_column vc_column_container vc_col-sm-3">
                        <div class="vc_column-inner vc_custom_1461228417147">
                            <div class="wpb_wrapper">
                                <div class='travel-item'>
                                    <div class='entry-img'>
                                        <a class='entry-link text-center' href="atv-tour">
                                            <img src="../img/thumbnail/rafting-cusco-Peru.jpg"
                                                alt="Rafting tour Cusco Peru" />
                                        </a>
                                    </div>
                                    <div class='entry-info'>
                                        <h3>ATV Cusco</h3>
                                        <div class='readmore'>
                                            <a href='atv-tour' class='button'>More info</a>
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
                                        <a class='entry-link text-center' href="../biking">
                                            <img width="400" height="400" src='../img/thumbnail/biking-cusco.jpg'
                                                class="attachment-post-grid-s size-post-grid-s"
                                                alt="Cusco tours de 6 días" />
                                        </a>
                                    </div>
                                    <div class='entry-info'>
                                        <h3>Biking in the Andes</h3>
                                        <div class='readmore'>
                                            <a href="../biking" class='button'>More Info</a>
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
                                        <a class='entry-link text-center' href="sandboarding-tour">
                                            <img width="400" height="400" src="../img/thumbnail/sandboarding-ica-peru.jpg"
                                                class="attachment-post-grid-s size-post-grid-s"
                                                alt="Tour for Choquequirao"
                                                srcset="../img/thumbnail/sandboarding-ica-peru.jpg 400w"
                                                sizes="(max-width: 400px) 100vw, 400px" />
                                        </a>
                                    </div>
                                    <div class='entry-info'>
                                        <h3>Sandboarding</h3>
                                        <div class='readmore'>
                                            <a class='button' href="sandboarding-tour">More Info</a>
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
    @include('layouts.foot')
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
