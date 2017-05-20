<!DOCTYPE html>
<html ng-app="maderoApp">

    <head>
        <title>Madero CL</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Responsive Website Template">
        <meta name="author" content="The Develovers">
        <script src="assets/js/jquery-3.1.0.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/plugins/easing/jquery.easing.min.js"></script>
        <script src="assets/js/plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="assets/js/plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
        <script src="assets/js/plugins/owl-carousel/owl.carousel.min.js"></script>
        <script src="assets/js/plugins/countto/jquery.countTo.js"></script>
        <script src="assets/js/plugins/jquery-waypoints/jquery.waypoints.min.js"></script>
        <script src="assets/js/plugins/parsley-validation/parsley.min.js"></script>
        <script src="assets/js/bravana.js"></script>
        <script src="assets/js/angular.min.js"></script>
        <script src="assets/js/angular-locale_es-cl.js"></script>
        <script src="assets/js/lodash.min.js"></script>
        <script src="assets/js/ng-map.min.js" type="text/javascript" ></script>
        <script src="http://maps.google.com/maps/api/js?key=AIzaSyB6XuB5BelkEh0BtiDvWJZt6GHo9nXGsR0" type="text/javascript"></script>
        <script src="assets/js/angular-simple-logger.min.js" type="text/javascript" ></script>
        <script src="controller.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular-touch.js"></script>        
        <!-- CORE CSS -->
        <link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/elegant-icons.css" rel="stylesheet" type="text/css">
        <!-- SLIDER REVOLUTION CSS -->
        <link href="assets/js/plugins/revolution/css/settings.css" rel="stylesheet" type="text/css">
        <link href="assets/js/plugins/revolution/css/layers.css" rel="stylesheet" type="text/css">
        <link href="assets/js/plugins/revolution/css/navigation.css" rel="stylesheet" type="text/css">
        <!-- THEME CSS -->
        <link href="assets/css/main.css" rel="stylesheet" type="text/css">
        <link href="assets/css/my-custom-styles.css" rel="stylesheet" type="text/css">

        <!-- GOOGLE FONTS -->
        <link href='https://fonts.googleapis.com/css?family=Raleway:700,400,400italic,500' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Lato:400,400italic,700,300,300italic' rel='stylesheet' type='text/css'>
        <!-- FAVICONS -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/bravana144.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/bravana114.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/bravana72.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/bravana57.png">
        <link rel="shortcut icon" href="assets/ico/favicon.ico">       
        <link rel='stylesheet' type="text/css" href="assets/dzsparallaxer/dzsparallaxer.css"/>
        <script src="assets/dzsparallaxer/dzsparallaxer.js" type="text/javascript"></script>        
    </head>

    <body ng-cloak ng-controller="mainController as vm" class="fixed-bg">
         <div id="wrapper">
            <!-- NAVBAR -->
            <nav class="navbar navbar-default navbar-fixed-top ">
                <!-- TOP BAR -->
                <div class="nav-topbar clearfix ">
                    <div class="container">
                        <div class="left">
                            <ul class="list-inline social-icons social-icons-small social-icons-fullrounded">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                        <div class="right">
                            <form class="navbar-form navbar-left search-form" method="post" role="search">
                                <div class="input-group input-group-sm">
                                    <input type="text" class="form-control">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- END TOP BAR -->
                <div class="container">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav-collapse">
                        <span class="sr-only">Menú</span>
                        <i class="fa fa-bars"></i>
                    </button>
                    <a href="index.html" class="navbar-brand">
                        <img src="assets/img/logo/logo-madero.png" alt="Bravana Logo">
                    </a>
                    <div id="main-nav-collapse" class="collapse navbar-collapse">
                        <ul class="nav navbar-nav main-navbar-nav">
                            <li class="dropdown active">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">INICIO</a>
                            </li>
                            <li class="dropdown ">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">CALLE <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li class="dropdown ">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">VÍA PÚBLICA </a>
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">PANTALLAS LED </a>
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">VEHÍCULOS LED </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown dropdown ">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">DIGITAL <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li class="dropdown ">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">WEBSITES </a>
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">REDES SOCIALES </a>
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">OTROS </a>
                                    </li>
                                </ul>                                                        
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">RADIO <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li class="dropdown ">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">PUBLICIDAD EN RADIO</a>
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">PROGRAMAS </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">AUDIOVISUAL <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li class="dropdown ">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">PRODUCCIONES</a>
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">IMPRESIÓN GRÁFICA </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown dropdown ">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">HOLDING <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li class="dropdown ">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">FUNDA </a>
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">INMOBILIARIA </a>
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">RENT A CAR </a>
                                    </li>
                                </ul>
                            </li>                                                
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">CONTÁCTENOS</a>
                            </li>
                        </ul>
                    </div>
                    <!-- END MAIN NAVIGATION -->
                </div>
            </nav>
            <!-- END NAVBAR -->
            <!-- SLIDER -->
            <section id="slider-fullwidth" class="rev_slider no-padding">
                <ul>
                    <li data-transition="fadethroughlight">
                        <img src="assets/img/main-slider/slide08.jpg" data-bgfit="cover" data-bgposition="0 75%" data-bgrepeat="no-repeat" alt="Slide">
                        <div class="tp-caption" data-x="left" data-y="center" data-hoffset="0" data-voffset="0" data-transform_in="o:0;y:50;s:1500;" data-transform_idle="o:1;" data-transform_out="o:0;y:-600;s:1500;e:Power3.easeInOut;" data-start="1000">
                            <img src="assets/img/logo/logo-madero.png"  alt="">
                        </div>
                        <div class="tp-caption tp-resizeme big-text" data-x="left" data-y="top" data-hoffset="250" data-voffset="0" data-transform_in="o:0;x:-80;s:1500;" data-transform_idle="o:1" data-transform_out="o:0;x:80;s:1500;e:Power3.easeInOut;" data-start="2000">
                            <h2 class="heading texto-slider-claro">Bienvenido a <strong>Madero</strong></h2>
                        </div>
                        <div class="tp-caption tp-resizeme lead-text" data-x="left" data-y="top" data-hoffset="250" data-voffset="150" data-width="700" data-height="auto" data-whitespace="normal" data-transform_in="o:0;x:-40;s:1500;" data-transform_idle="o:1;" data-transform_out="o:0;x:40;s:1500;e:Power3.easeInOut;" data-start="2500">
                            <p class="texto-slider-claro">Ubicaciones estratégicas según target de cliente.</p>
                        </div>
                    </li>
                    <li data-transition="fadethroughlight">
                        <img src="assets/img/main-slider/Foto 2.jpg" data-bgfit="cover" data-bgposition="center 55%" data-bgrepeat="no-repeat" alt="Slide">
                        <div class="tp-caption tp-resizeme big-text" data-x="left" data-y="top" data-hoffset="250" data-voffset="0" data-transform_in="o:0;x:-80;s:1500;" data-transform_idle="o:1" data-transform_out="o:0;x:80;s:1500;e:Power3.easeInOut;" data-start="2000">
                            <h2 class="heading texto-slider-claro">Haremos que te vean</h2>
                        </div>      
                        <div class="tp-caption tp-resizeme lead-text" data-x="left" data-y="top" data-hoffset="250" data-voffset="150" data-width="700" data-height="auto" data-whitespace="normal" data-transform_in="o:0;x:-40;s:1500;" data-transform_idle="o:1;" data-transform_out="o:0;x:40;s:1500;e:Power3.easeInOut;" data-start="2500">
                            <p class="texto-slider-claro">Multiplataformas publicitarias</p>
                        </div>                        

                    </li>
                    <li data-transition='parallaxtoleft'>
                        <img src="assets/img/main-slider/slide11.jpg" data-bgfit="cover" data-bgposition="center 55%" data-bgrepeat="no-repeat" alt="Slide">
                        <div class="tp-caption tp-resizeme big-text" data-x="left" data-y="top" data-hoffset="250" data-voffset="0" data-transform_in="o:0;x:-80;s:1500;" data-transform_idle="o:1" data-transform_out="o:0;x:80;s:1500;e:Power3.easeInOut;" data-start="2000">
                            <h2 class="heading texto-slider-claro">Desde Arica a Santiago</h2>
                        </div>      
                        <div class="tp-caption tp-resizeme lead-text" data-x="left" data-y="top" data-hoffset="250" data-voffset="150" data-width="700" data-height="auto" data-whitespace="normal" data-transform_in="o:0;x:-40;s:1500;" data-transform_idle="o:1;" data-transform_out="o:0;x:40;s:1500;e:Power3.easeInOut;" data-start="2500">
                            <p class="texto-slider-claro">Somos la fuerza del norte</p>
                        </div>                          
                    </li>     
                    <li data-transition='parallaxtoleft'>
                        <img src="assets/img/main-slider/portada4.jpeg" data-bgfit="cover" data-bgposition="center 55%" data-bgrepeat="no-repeat" alt="Slide">
                        <div class="tp-caption tp-resizeme" data-x="left" data-y="top" data-hoffset="250" data-voffset="0" data-transform_in="o:0;x:-80;s:1500;" data-transform_idle="o:1" data-transform_out="o:0;x:80;s:1500;e:Power3.easeInOut;" data-start="2000">
                            <h3 class="heading texto-slider-claro">Combinamos lo potente de lo vial</h3>
                        </div>      
                        <div class="tp-caption tp-resizeme lead-text" data-x="left" data-y="top" data-hoffset="250" data-voffset="150" data-width="700" data-height="auto" data-whitespace="normal" data-transform_in="o:0;x:-40;s:1500;" data-transform_idle="o:1;" data-transform_out="o:0;x:40;s:1500;e:Power3.easeInOut;" data-start="2500">
                            <p class="texto-slider-claro">pantallas, camiones, publicidad vial</p>
                        </div>                          
                    </li>                      
                    <li data-transition="3dcurtain-horizontal">
                        <img src="assets/img/main-slider/foto 5.jpeg" data-bgfit="cover" data-bgposition="center 45%" data-bgrepeat="no-repeat" alt="Slide">
                        <div class="tp-caption tp-resizeme" data-x="left" data-y="top" data-hoffset="250" data-voffset="0" data-transform_in="o:0;x:-80;s:1500;" data-transform_idle="o:1" data-transform_out="o:0;x:80;s:1500;e:Power3.easeInOut;" data-start="2000">
                            <h3 class="heading texto-slider-claro">Con la rapidez de los medios de hoy</h3>
                        </div>      
                        <div class="tp-caption tp-resizeme lead-text" data-x="left" data-y="top" data-hoffset="250" data-voffset="150" data-width="700" data-height="auto" data-whitespace="normal" data-transform_in="o:0;x:-40;s:1500;" data-transform_idle="o:1;" data-transform_out="o:0;x:40;s:1500;e:Power3.easeInOut;" data-start="2500">
                            <p class="texto-slider-claro">Marketing digital</p>
                        </div>  
                    </li>

                    <li data-transition='3dcurtain-horizontal'>
                        <img src="assets/img/main-slider/foto 6.jpg" data-bgfit="cover" data-bgposition="center 55%" data-bgrepeat="no-repeat" alt="Slide">
                        <div class="tp-caption tp-resizeme big-text" data-x="left" data-y="top" data-hoffset="250" data-voffset="0" data-transform_in="o:0;x:-80;s:1500;" data-transform_idle="o:1" data-transform_out="o:0;x:80;s:1500;e:Power3.easeInOut;" data-start="2000">
                            <h2 class="heading texto-slider-claro">Materializamos tus ideas</h2>
                        </div>      
                        <div class="tp-caption tp-resizeme lead-text" data-x="left" data-y="top" data-hoffset="250" data-voffset="150" data-width="700" data-height="auto" data-whitespace="normal" data-transform_in="o:0;x:-40;s:1500;" data-transform_idle="o:1;" data-transform_out="o:0;x:40;s:1500;e:Power3.easeInOut;" data-start="2500">
                            <p class="texto-slider-claro">Diseño, luminarias, Plotter, señaléticas y más</p>
                        </div>                         
                    </li>
                    <li data-transition='parallaxtoleft'>
                        <img src="assets/img/main-slider/foto 7.jpg" data-bgfit="cover" data-bgposition="center 45%" data-bgrepeat="no-repeat" alt="Slide">
                        <div class="tp-caption tp-resizeme lead-text" data-x="left" data-y="top" data-hoffset="250" data-voffset="150" data-width="700" data-height="auto" data-whitespace="normal" data-transform_in="o:0;x:-40;s:1500;" data-transform_idle="o:1;" data-transform_out="o:0;x:40;s:1500;e:Power3.easeInOut;" data-start="2500">
                            <p class="texto-slider-claro">En una estrategia única a nuestros clientes</p>
                        </div>                         

                    </li>

                </ul>
            </section>

            <section class="dzsparallaxer auto-init out-of-bootstrap" data-options='{ direction: "normal"}' style="height: 300px;">
                <div class="container divimage dzsparallaxer--target" style="width: 100%; height: 500px; background-image: url(assets/img/fondos/fondo2.png)">
                    <div class="row">
                        <div class="col-md-6">
                            <h2 class="section-heading">Plataforma Integrada de Medios</h2>
                            <p class="lead">Empresas Madero, con cobertura de Arica a Santiago ofrece servicios de difusión publicitaria a través de sus redes de vía pública, radios y pantallas digitales.</p>
                            <p>Con más de 17 años de experiencia en el mercado nos adaptamos y aportamos ideas a las necesidades comunicacionales actuales  del cliente según el objetivo y estrategia que este defina.</p>
                        </div>
                        <div class="col-md-6">
                            <div class="icon-info icon-info-left icon-info-big">
                                <i class="icon icon_globe-2 ico-styled-lg text-primary"></i>
                                <div class="text">
                                    <h2 class="title">Ubicaciones</h2>
                                    <p>En todo el norte de chile,  conoce nuestras Gigantografias y carteles disponibles</p>
                                </div>
                            </div>
                            <div class="icon-info icon-info-left icon-info-big">
                                <i class="icon icon_laptop ico-styled-lg  text-primary"></i>
                                <div class="text">
                                    <h2 class="title">Multiplataforma</h2>
                                    <p>radio -  digital – vial – led. Todo en una estrategia 360 inteligente de comunicación, mezcla la rápidez de lo digital con lo masivo de los medios convencionales.</p>
                                </div>
                            </div>
                            <div class="icon-info icon-info-left icon-info-big no-margin-bottom">
                                <i class="icon icon_like ico-styled-lg  text-primary"></i>
                                <div class="text">
                                    <h2 class="title">Confianza</h2>
                                    <p>Llevamos 20 años reinventándonos.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END ABOUT -->
            <!-- COUNT INFO -->
            <section>
                <div class="container">
                    <div class="row waypoint">
                        <div class="col-md-3">
                            <div class="count-info">
                                <span class="number countto">2382</span> <span class="text">Plataformas</span>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="count-info">
                                <span class="number countto">195</span> <span class="text">Proyectos</span>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="count-info">
                                <span class="number countto">2758</span> <span class="text">Alcance</span>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="count-info">
                                <span class="number countto">455</span> <span class="text">Clientes</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END COUNT INFO -->
            <!-- SERVICES -->
            <section>
                <div class="container">
                    <h2 class="section-heading">Productos</h2>
                    <div class="row icon-info-group margin-bottom-30">
                        <div class="col-md-3">
                            <div class="icon-info icon-info-left">
                                <i class="icon icon_map ico-styled-md text-primary"></i>
                                <div class="text">
                                    <h2 class="title"><a href="#calle">Calle</a></h2>
                                    <p>MADERO PUBLICIDAD EXTERIOR posee la red más extensa de Publicidad Exterior urbana en el norte del país, con circuitos publicitarios en cerca de veinte ciudades.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="icon-info icon-info-left">
                                <i class="icon icon_music text-primary"></i>
                                <div class="text">
                                    <h2 class="title"><a href="#radio">Radio</a></h2>
                                    <p>Nuestra radio y portal de noticias maderofm.com se integran con spot radiales, patrocino de programas, banners en sitios de alto tráfico y  auspicios entre otros.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="icon-info icon-info-left">
                                <i class="icon icon_globe ico-styled-md text-primary"></i>
                                <div class="text">
                                    <h2 class="title"><a href="#canalesdigitales">Canales Digitales</a></h2>
                                    <p>Analizamos, construimos y monitoreamos websites, mailing, administración de redes sociales.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="icon-info icon-info-left">
                                <i class="icon icon_film ico-styled-md text-primary"></i>
                                <div class="text">
                                    <h2 class="title"><a href="#grafica">Gráfica y Audiovisual</a></h2>
                                    <p>Trabajamos generando ideas, desarrollando el contenido y poniendo en marcha tus diseños en nuestros canales publicitarios.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END SERVICES -->
            <!-- PORTFOLIO -->
            <section id="calle">
                <div class="container">
                    <h2 class="section-heading">CALLE</h2>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" class="collapsed"><i class="fa fa-road"></i> VÍA PÚBLICA <i class="fa fa-angle-down right icon-collapsed"></i><i class="fa fa-angle-up right icon-expanded"></i></a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <a href="http://www.madero.cl/wp-content/uploads/2014/04/ELEMENTOS.pdf" target="_blank"><i class="fa fa-file-pdf-o"></i> Descripción de Elementos</a><br />
                                            <a href="https://issuu.com/empresasmadero/docs/cat__logo_topsites_m__viles_-_mader" target="_blank"><i class="fa fa-file-pdf-o"></i> Catálogo Top Sites Móviles</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="collapsed"><i class="fa fa-tv"></i> PANTALLAS LED <i class="fa fa-angle-down right icon-collapsed"></i><i class="fa fa-angle-up right icon-expanded"></i></a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <a href="https://issuu.com/empresasmadero/docs/brochure_pantallas_led_-_empresas_m" target="_blank"><i class="fa fa-file-pdf-o"></i> Broschure Pantallas LED</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class=""><i class="fa fa-car"></i> VEHÍCULOS LED <i class="fa fa-angle-down right icon-collapsed"></i><i class="fa fa-angle-up right icon-expanded"></i></a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <a href="https://issuu.com/empresasmadero/docs/brochure_camion_led" target="_blank"><i class="fa fa-file-pdf-o"></i> Broschure Camiones LED</a>
                                        </div>
                                    </div>
                                </div>
                            </div>                            
                        </div>
                        <div class="col-md-8">
                            <ng-map center="[-35.655156,-71.690210]" zoom="3">
                                <marker id='{{pos.id}}' icon="{{pos.icon}}"  ng-repeat="pos in vm.positions" position="{{pos.lat}},{{pos.lng}}">
                                </marker>

                            </ng-map>
                            Filtrar por: &nbsp;
                            <button ng-click="filtrarMapa('VIA PUBLICA')" type="button" class="btn btn-primary btn-sm"><i class="fa fa-road"></i> VÍA PÚBLICA</button>
                            <button ng-click="filtrarMapa('PANTALLA LED')" type="button" class="btn btn-primary btn-sm"><i class="fa fa-tv"></i> PANTALLAS LED</button>
                            <button ng-click="filtrarMapa('VEHICULO LED')" type="button" class="btn btn-primary btn-sm"><i class="fa fa-car"></i> VEHÍCULOS LED</button>
                            <button ng-click="filtrarMapa('TODO')" type="button" class="btn btn-primary btn-sm"><i class="fa fa-globe"></i> MOSTRAR TODO</button>
                        </div>   
                    </div>
                    <div class="row margin-top-50">

                        <div class="col-md-12">
                            <h4>Catálogos de elementos publicitarios</h4>
                            <ul class="nav nav-pills tabs-iconized" role="tablist">
                                <li class="active"><a href="#antofagastaTab" role="tab" data-toggle="tab"> Región de Antofagasta</a></li>
                                <li><a href="#aricaTab" role="tab" data-toggle="tab"> Región de Arica y Parinacota</a></li>
                                <li><a href="#atacamaTab" role="tab" data-toggle="tab"> Región de Atacama</a></li>
                                <li><a href="#coquimboTab" role="tab" data-toggle="tab"> Región de Coquimbo</a></li>
                                <li><a href="#santiagoTab" role="tab" data-toggle="tab"> Región Metropolitana</a></li>
                                <li><a href="#valparaisoTab" role="tab" data-toggle="tab"> Región de Valparaíso</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="antofagastaTab">
                                    <ul>
                                        <li><a href="assets/pdf/antofagasta/catalogo+led+antofagasta.pdf" target="_blank" ><i class="fa fa-file-pdf-o"></i> Pantalla Led Antofagsta</a></li>
                                        <li><a href="assets/pdf/antofagasta/Catálogo Soportes Publicitarios Taltal.pdf" target="_blank" ><i class="fa fa-file-pdf-o"></i> Catálogo Elementos Publicitarios - Taltal</a></li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="aricaTab">
                                    <ul>
                                        <li><a href="assets/pdf/arica/catalogo+led+ARICA.pdf" target="_blank" ><i class="fa fa-file-pdf-o"></i> Pantalla Led Arica</a></li>
                                        <li><a href="assets/pdf/arica/Catálogo Paletas Publicitarias Arica.pdf" target="_blank" ><i class="fa fa-file-pdf-o"></i> Catálogo Paletas Publicitarias - Arica</a></li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="atacamaTab">
                                    <ul>
                                        <li><a href="assets/pdf/atacama/catalogo+led+copiapo.pdf" target="_blank" ><i class="fa fa-file-pdf-o"></i> Pantalla Led Copiapó</a></li>
                                        <li><a href="assets/pdf/atacama/Catalogo BHI.pdf" target="_blank" ><i class="fa fa-file-pdf-o"></i> Catálogo Elementos Publicitarios - Bahía Inglesa</a></li>
                                        <li><a href="assets/pdf/atacama/Catálogo Soportes Publicitarios Vallenar.pdf" target="_blank" ><i class="fa fa-file-pdf-o"></i> Catálogo Elementos Publicitarios - Vallenar</a></li>
                                        <li><a href="assets/pdf/atacama/catalogo+led+copiapo.pdf" target="_blank" ><i class="fa fa-file-pdf-o"></i> Catálogo Elementos Publicitarios - Copiapó</a></li>
                                        <li><a href="assets/pdf/atacama/Catálogo Soportes Publicitarios Caldera.pdf" target="_blank" ><i class="fa fa-file-pdf-o"></i> Catálogo Elementos Publicitarios - Caldera</a></li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="coquimboTab">
                                    <ul>
                                        <li><a href="assets/pdf/coquimbo/Catálogo Soportes Publicitarios Vicuña sin precio.pdf" target="_blank" ><i class="fa fa-file-pdf-o"></i> Catálogo Elementos Publicitarios - Vicuña</a></li>
                                        <li><a href="assets/pdf/coquimbo/catalogo+led+la+serena.pdf" target="_blank" ><i class="fa fa-file-pdf-o"></i> Pantalla Led La Serena</a></li>
                                        <li><a href="assets/pdf/coquimbo/Catálogo Soportes Ovalle.pdf" target="_blank" ><i class="fa fa-file-pdf-o"></i> Catálogo Elementos Publicitarios - Ovalle</a></li>
                                        <li><a href="assets/pdf/coquimbo/Catálogo Soportes Coquimbo.pdf" target="_blank" ><i class="fa fa-file-pdf-o"></i> Catálogo Elementos Publicitarios - Coquimbo</a></li>
                                        <li><a href="assets/pdf/coquimbo/Catálogo Soportes Publicitarios La Serena.pdf" target="_blank" ><i class="fa fa-file-pdf-o"></i> Catálogo Elementos Publicitarios - La Serena</a></li>
                                        <li><a href="assets/pdf/coquimbo/Catálogo Paletas Coquimbo.pdf" target="_blank" ><i class="fa fa-file-pdf-o"></i> Catálogo Paletas Publicitarias - Coquimbo</a></li>
                                    </ul>                                
                                </div>
                                <div class="tab-pane fade" id="santiagoTab">
                                    <a href="assets/pdf/santiago/Catalogo STG.pdf" target="_blank" ><i class="fa fa-file-pdf-o"></i> Catálogo Elementos Publicitarios - Santiago</a>
                                </div>
                                <div class="tab-pane fade" id="valparaisoTab">
                                    <ul>
                                        <li><a href="assets/pdf/valparaiso/catalogo+led+valparaiso.pdf" target="_blank" ><i class="fa fa-file-pdf-o"></i> Pantalla Led Valparaíso</a></li>
                                        <li><a href="assets/pdf/valparaiso/Catálogo Soportes Publicitarios San Felipe.pdf" target="_blank" ><i class="fa fa-file-pdf-o"></i> Catálogo Elementos Publicitarios - San Felipe</a></li>
                                        <li><a href="assets/pdf/valparaiso/Catalogo QLL.pdf" target="_blank" ><i class="fa fa-file-pdf-o"></i> Catálogo Elementos Publicitarios - Quillota</a></li>
                                        <li><a href="assets/pdf/valparaiso/Catálogo Soportes Publicitarios Quilpué.pdf" target="_blank" ><i class="fa fa-file-pdf-o"></i> Catálogo Elementos Publicitarios - Quilpué</a></li>
                                        <li><a href="assets/pdf/valparaiso/Catálogo Soportes Valparaíso.pdf" target="_blank" ><i class="fa fa-file-pdf-o"></i> Catálogo Elementos Publicitarios - Valparaíso</a></li>
                                        <li><a href="assets/pdf/valparaiso/Catálogo Soportes Publicitarios La Calera.pdf" target="_blank" ><i class="fa fa-file-pdf-o"></i> Catálogo Elementos Publicitarios - La Calera</a></li>
                                        <li><a href="assets/pdf/valparaiso/Catálogo CityCovers Viña del Mar_2.pdf" target="_blank" ><i class="fa fa-file-pdf-o"></i> Catálogo Elementos Publicitarios - Viña del Mar</a></li>
                                        <li><a href="assets/pdf/valparaiso/Catálogo CityCovers Viña del Mar_2.pdf" target="_blank" ><i class="fa fa-file-pdf-o"></i> Catálogo City Covers - Viña del Mar</a></li>
                                    </ul>                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>                
            <section id="radio">
                <div class="container">
                    <h2 class="section-heading">Radio Madero</h2>
                    <h4>Somos la fuerza del norte, 10 emisoras entre santiago y Arica, 20 programas  un portal de noticias de alto tráfico</h4>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="row margin-top-50 margin-bottom-30">
                                <button type="button" class="btn btn-primary">ESCUCHALA ONLINE</button>
                            </div>
                            <div class="row margin-bottom-30">
                                <button type="button" class="btn btn-primary">PORTAL MADEROFM.COM</button>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div id="content-slider" class="owl-carousel carousel-content carousel-has-navigation">
                                <div class="text-center">
                                    <img src="assets/img/radiomadero/madero-11.jpg" class="img-responsive center-block margin-bottom-30" alt="Multipurpose">
                                    <h2>AUSPICIOS</h2>
                                    <p class="lead">Noticias – Boletines Informativos – Programas Franjeados – Señales Horarias o de la Temperatura</p>
                                </div>
                                <div class="text-center">
                                    <img src="assets/img/radiomadero/madero-21.jpg" class="img-responsive center-block margin-bottom-30" alt="Homepages">
                                    <h2>MICROESPACIOS</h2>
                                    <p class="lead">Deportivo – Actualidad</p>
                                </div>
                                <div class="text-center">
                                    <img src="assets/img/radiomadero/madero-31.jpg" class="img-responsive center-block margin-bottom-30" alt="Revolution Slider">
                                    <h2>PROYECTOS ESPECIALES</h2>
                                    <p class="lead">Creación de Programas – Enlaces en Directo – Interacción con Clientes</p>
                                </div>
                                <div class="text-center">
                                    <img src="assets/img/radiomadero/madero-41.jpg" class="img-responsive center-block margin-bottom-30" alt="Revolution Slider">
                                </div>
                                <div class="text-center">
                                    <img src="assets/img/radiomadero/plataforma.jpg" class="img-responsive center-block margin-bottom-30" alt="Revolution Slider">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row margin-top-50">
                        <div class="col-md-4">
                            <img ng-click="mostrarTexto('auspicio');" class="img-responsive img-circle center-block img-servicio" src="assets/img/radiocirculos/auspicios1.PNG" />
                        </div>
                        <div class="col-md-4">
                            <img ng-click="mostrarTexto('microespacio');" class="img-responsive img-circle center-block img-servicio" src="assets/img/radiocirculos/microespacios1.jpeg" />
                        </div>
                        <div class="col-md-4">
                            <img ng-click="mostrarTexto('especial');" class="img-responsive img-circle center-block img-servicio" src="assets/img/radiocirculos/proyectos especiales.jpeg" />
                        </div>
                    </div>
                    <div class="row margin-top-30 animate-show-hide" ng-show="textoServicio">
                        <div class="col-md-12 jumbotron text-center">
                            {{textoServicio}}
                        </div>
                    </div>
                </div>
            </section>


            <section id="canales-digitales">
                <div class="container">
                    <h2 class="section-heading">Canales Digitales</h2>
                    <div class="row icon-info-group margin-bottom-30">
                        <div class="col-md-3">
                            <div class="row">
                                <img src="assets/img/canales-digitales/desarrollo.png" class="img-responsive center-block img-icon img-circle"/>
                            </div>
                            <div class="row">
                                <div class="text">
                                    <h4 class="title text-center">Desarrollo</h4>
                                    <ul>
                                        <li>Web / Mobile</li>
                                        <li>Intranet</li>
                                        <li>E-learning</li>
                                        <li>E-commerce</li>
                                        <li>Medios de pago</li>
                                        <li>Aplicaciones</li>
                                        <li>Mailing</li>
                                        <li>Seo</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="row">
                                <img src="assets/img/canales-digitales/socialmedia.png" class="img-responsive center-block img-icon img-circle"/>
                            </div>
                            <div class="row">
                                <div class="text">
                                    <h4 class="title text-center">Social Media</h4>
                                    <ul>
                                        <li>Community management</li>
                                        <li>Aplicaciones</li>
                                        <li>Reportería</li>
                                        <li>Redacción</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="row">
                                <img src="assets/img/canales-digitales/diseno.png" class="img-responsive center-block img-icon img-circle"/>
                            </div>
                            <div class="row">
                                <div class="text">
                                    <h4 class="title text-center">Diseño</h4>
                                    <ul>
                                        <li>Banners</li>
                                        <li>Catálogos</li>
                                        <li>Folletería</li>
                                        <li>Diseño</li>
                                    </ul>
                                </div>
                            </div>
                        </div>                        
                        <div class="col-md-3">
                            <div class="row">
                                <img src="assets/img/canales-digitales/publicidad.png" class="img-responsive center-block img-icon img-circle"/>
                            </div>
                            <div class="row">
                                <div class="text">
                                    <h4 class="title text-center">Publicidad</h4>
                                    <ul>
                                        <li>Google</li>
                                        <li>Facebook</li>
                                        <li>Red de sitios</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>            
            <!-- END CLIENTS -->
            <!--
            <div id="contact-widget-bottom" class="panel panel-primary contact-widget">
                    <div class="panel-heading">
                            <h5 class="panel-title">Envíanos un mensaje</h5>
                            <i class="fa fa-caret-down icon-down hide"></i><i class="fa fa-caret-up icon-up"></i>
                    </div>
                    <div class="panel-body">
                            <form method="post" id="contact-form" novalidate>
                                    <p>Envíanos un mensaje o consulta ingresando tus datos en el siguiente formulario:
                                    <div class="form-group">
                                            <label for="contact-name" class="control-label sr-only">Nombre</label>
                                            <input type="text" class="form-control" id="contact-name" name="name" placeholder="Nombre (requerido)" required>
                                    </div>
                                    <div class="form-group">
                                            <label for="contact-email" class="control-label sr-only">Email</label>
                                            <input type="email" class="form-control" id="contact-email" name="email" placeholder="Email (requerido)" required>
                                    </div>
                                    <div class="form-group">
                                            <label for="contact-subject" class="control-label sr-only">Asunto</label>
                                            <input type="text" class="form-control" id="contact-subject" name="subject" placeholder="Asunto">
                                    </div>
                                    <div class="form-group">
                                            <label for="contact-message" class="control-label sr-only">*Mensaje</label>
                                            <textarea class="form-control" id="contact-message" name="message" rows="5" cols="30" placeholder="Mensaje (requerido)" required></textarea>
                                    </div>
                                    <button id="submit-button" type="submit" class="btn btn-primary"><i class="fa loading-icon"></i> <span>Enviar</span></button>
                                    <input type="hidden" name="msg-submitted" id="msg-submitted" value="true">
                            </form>
                    </div>
            </div> -->

            <section id="impresion-grafica">
                <div class="container">
                    <div class="section-heading-center section-heading-linethrough no-margin-top">
                        <h2 class="heading">Impresión Gráfica</h2>
                    </div>
                    <div class="row process-steps">
                        <div class="col-md-3">
                            <div class="icon-info icon-info-inheading">
                                <h3 class="title"><i class="fa fa-print"></i> Impresión Digital</h3>
                                <p>Nuestro departamento de producción se encarga de la impresión de todas las telas de nuestros soportes publicitarios, así como gigantografías, pendones, lienzos, afiches, folletería, etc. Además tenemos la mejor calidad de impresión y la capacidad suficiente para producir en forma simultanea diferentes campañas.</p>
                            </div>
                            <img src="assets/img/thin-arrow-right.svg" class="arrow-right" alt="Arrow Right">
                        </div>
                        <div class="col-md-3">
                            <div class="icon-info icon-info-inheading">
                                <h3 class="title"><i class="fa fa-lightbulb-o"></i> Luminosos</h3>
                                <p>Cuenta con su propia fábrica de letreros y carteles back light, ideales para fachadas de edificios y cajas de luz interiores.</p>
                            </div>
                            <img src="assets/img/thin-arrow-right.svg" class="arrow-right" alt="Arrow Right">
                        </div>
                        <div class="col-md-3">
                            <div class="icon-info icon-info-inheading">
                                <h3 class="title"><i class="fa fa-paper-plane"></i> Plotter de corte</h3>
                                <p>Letras y logotipos autoadhesivos son realizados digitalmente según la necesidad del cliente. De fácil aplicación, proponemos variedad de colores y materiales. Siendo sus aplicaciones en logos corporativos para vehículos, letreros, accesos, señaléticas etc.</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="icon-info icon-info-inheading">
                                <h3 class="title"><i class="fa fa-arrow-circle-left"></i> Señalética</h3>
                                <p>Realización de todo tipo de proyectos relacionados con señalización , prevención , y otros.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>   

            <section>
                <div class="container">
                    <div class="section-heading-center section-heading-linethrough no-margin-top">
                        <h2 class="heading">Producción Audiovisual</h2>
                    </div>
                    <div id="carousel-portfolio-simple" class="owl-carousel carousel-portfolio-simple carousel-nav-hidefirst">
                        <div>
                            <div class="portfolio-simple">
                                <img src="assets/img/portfolio/portfolio-sm1.jpg" class="img-responsive" alt="Portfolio">
                                <div class="info">
                                    <h3 class="title">Catálogos Audiovisuales</h3>
                                    <span></span>
                                    <a type="button" ng-click="abrirModal('CATALOGOS')" class="btn btn-primary btn-sm">Ver Más</a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="portfolio-simple">
                                <img src="assets/img/portfolio/portfolio-sm2.jpg" class="img-responsive" alt="Portfolio">
                                <div class="info">
                                    <h3 class="title">Registro</h3>
                                    <span></span>
                                    <a type="button" ng-click="abrirModal('REGISTRO')" class="btn btn-primary btn-sm">Ver Más</a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="portfolio-simple">
                                <img src="assets/img/portfolio/portfolio-sm3.jpg" class="img-responsive" alt="Portfolio">
                                <div class="info">
                                    <h3 class="title">Fotografía</h3>
                                    <span></span>
                                    <a type="button" ng-click="abrirModal('FOTOGRAFIA')" class="btn btn-primary btn-sm">Ver Más</a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="portfolio-simple">
                                <img src="assets/img/portfolio/portfolio-sm4.jpg" class="img-responsive" alt="Portfolio">
                                <div class="info">
                                    <h3 class="title">Campaña Publicitaria</h3>
                                    <span></span>
                                    <a type="button" ng-click="abrirModal('CAMPANA')" class="btn btn-primary btn-sm">Ver Más</a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="portfolio-simple">
                                <img src="assets/img/prodaudiovisual/prodaudiovisual-videos.jpeg" class="img-responsive" alt="Portfolio">
                                <div class="info">
                                    <h3 class="title">Videos</h3>
                                    <span></span>
                                    <a type="button" ng-click="abrirModal('VIDEOS')" class="btn btn-primary btn-sm">Ver Más</a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="portfolio-simple">
                                <img src="assets/img/prodaudiovisual/prodaudiovisual-pantallasrental.jpeg" class="img-responsive" alt="Portfolio">
                                <div class="info">
                                    <h3 class="title">Pantallas rental</h3>
                                    <span></span>
                                    <a type="button" ng-click="abrirModal('PANTALLA')" class="btn btn-primary btn-sm">Ver Más</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>            

            <div class="section margin-bottom-50">
                <div class="container">
                    <h2 class="section-heading">Contacto</h2>
                    <div class="row">
                        <div class="col-md-12">
                            <br>
                            <form method="post" id="contact-form" class="form-horizontal" novalidate>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="contact-name" class="control-label sr-only">Nombre</label>
                                            <input type="text" class="form-control" id="contact-name" name="name" placeholder="Nombre*" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="contact-email" class="control-label sr-only">Email</label>
                                            <input type="email" class="form-control" id="contact-email" name="email" placeholder="Email*" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="contact-subject" class="control-label sr-only">Asunto</label>
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control" id="contact-subject" name="subject" placeholder="Asunto">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="contact-message" class="control-label sr-only">Mensaje</label>
                                    <div class="col-sm-12">
                                        <textarea class="form-control" id="contact-message" name="message" rows="5" cols="30" placeholder="Mensaje" required></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button id="submit-button" type="submit" class="btn btn-primary"><i class="fa loading-icon"></i> <span>Enviar</span></button>
                                    </div>
                                </div>
                                <input type="hidden" name="msg-submitted" id="msg-submitted" value="true">
                            </form>
                        </div>    
                    </div>
                </div>
            </div>
            <!-- FOOTER -->
            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="assets/img/logo/logo-madero.png" alt="Bravana logo" class="logo-footer">
                            <br>
                            <br>
                            <p>Empresas Madero, con cobertura de Arica a Santiago ofrece servicios de difusión publicitaria a través de sus redes de vía pública, radios y pantallas digitales.</p>
                        </div>
                        <div class="col-md-4">
                            <h4 class="footer-heading">Redes Sociales</h4>
                            <ul class="list-inline social-icons social-icons-small">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>                                    
                        <div class="col-md-4">
                            <h4 class="footer-heading">Contacto</h4>
                            <address class="contact-info">
                                <p><i class="icon icon_pin_alt ico-styled text-primary"></i> Casa Matriz: Chañarcillo 528, Copiapó – Región de Atacama</p>
                                <p><i class="icon icon_phone ico-styled text-primary"></i> Fono Fax: (56 52) 2219120 – (56 52) 2238378 – (56 52) 2238379</p>
                                <p><i class="icon icon_mail_alt ico-styled text-primary"></i> <a href="mailto:email@yourdomain.com">correo@madero.com</a></p>
                            </address>
                        </div>

                    </div>
                    <div class="footer-bottom">
                        <p class="copyright-text left">&copy;2017 Indice Apps.</p>
                    </div>
                </div>
            </footer>
            <!-- END FOOTER -->

            <!-- Modales -->

            <div id="small-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title" id="myModalLabel2">{{tituloModal}}</h4>
                        </div>
                        <div class="modal-body">
                            <p>{{contenidoModal}}</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times-circle"></i> Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- fin modales -->            

            <div class="back-to-top">
                <a href="#top"><i class="fa fa-chevron-up"></i></a>
            </div>
            <style>
                #map {
                    height: 442px;
                    width: 100%;
                }
            </style>            
        </div>
        <!-- END WRAPPER -->
        <!-- JAVASCRIPT -->


</html>
