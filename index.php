<include conexion.php>
    <!doctype html>
    <html lang="en">

    <head>
    <!-- Basic Page Needs
        ================================================== -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Specific Meta
        ================================================== -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="description" content="Texicab is a modern presentation HTML5 Car Rent template.">
        <meta name="keywords" content="HTML5, Template, Design, Development, Car Rent" />
        <meta name="author" content="">

    <!-- Titles
        ================================================== -->
        <title>Radio Taxis Malibú</title>

    <!-- Favicons
        ================================================== -->
        <link rel="shortcut icon" href="https://htmlguru.net/carrent-html/assets/images/favicon.ico">
        <link rel="apple-touch-icon" href="https://htmlguru.net/carrent-html/assets/images/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="https://htmlguru.net/carrent-html/images/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="114x114" href="https://htmlguru.net/carrent-html/images/apple-touch-icon-114x114.png">

    <!-- Custom Font
        ================================================== -->
        <!-- <link href="https://fonts.googleapis.com/css?family=Exo:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i%7cRoboto:400,400i,500,500i,700,700i,900,900i" rel="stylesheet"> -->
        <link href="https://fonts.googleapis.com/css?family=Exo:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i%7cRoboto+Slab:400,700" rel="stylesheet">

    <!-- CSS
        ================================================== -->
        <link rel="stylesheet" href="https://htmlguru.net/carrent-html/assets/css/plugins.min.css">
        <link rel="stylesheet" href="https://htmlguru.net/carrent-html/assets/css/icons.min.css">
        <link rel="stylesheet" href="assets/css/nuevoEstilo2.css">
        <link rel="stylesheet" href="assets/css/estiloNuevo.css">

        <!-- RS5.4 Main Stylesheet -->
        <link rel="stylesheet" type="text/css" href="https://htmlguru.net/carrent-html/assets/revolution/css/settings.css">
        <!-- RS5.4 Layers and Navigation Styles -->
        <link rel="stylesheet" type="text/css" href="https://htmlguru.net/carrent-html/assets/revolution/css/layers.css">
        <link rel="stylesheet" type="text/css" href="https://htmlguru.net/carrent-html/assets/revolution/css/navigation.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC5rTAKFqIj-htRhtz6VXm0KmEjifIzqm4&libraries=places"></script>
        <style>
  /* Always set the map height explicitly to define the size of the div
  * element that contains the map. */
  #map-canvas {
    height: 80%;
    width: 100%;
}
</style>
<script src="https://www.paypal.com/sdk/js?client-id=AQ7iD8xBJADvWSRJ3JE9yYM4UjJEgw-Yb7V5jCBKPD30kQBd57ZI44N3iPD5kLqof5VLRg-58jwvLRdA&currency=MXN"></script>
</head>

<body>

    <!-- ====== Header Top Area ====== --> 
    <header class="header-top-area" style="background-color: #59B8CE">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-7 hidden-xs">
                    <div class="header-content-left">
                        <ul class="header-top-menu">
                            <li>
                                <a href="#" class="top-left-menu">
                                    <i class="fa fa-phone"></i>
                                    <span>Llámanos - 229 981 9980</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="top-left-menu">
                                    <i class="fa fa-envelope"></i>
                                    <span>radiotaximalibu@gmail.com</span>
                                </a>                                 
                            </li>
                        </ul><!-- /.header-top-menu -->
                    </div><!-- /.header-content-left -->
                </div><!-- /.col-md-9 -->

                <div class="col-md-6 col-sm-5">
                    <div class="header-content-right">

                        <ul class="header-top-menu">
                            <li>
                                <a href="#" class="search-open">
                                    <i class="fa fa-search"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="trigger-overlay">
                                    <i class="fa fa-bars"></i>
                                </a>
                            </li>
                        </ul>
                    </div><!-- /.left-content -->
                </div><!-- /.col-md-3 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </header><!-- /.head-area -->

    <!-- ======= Header Modal Area =======-->
    <div class="header-modal-area">
        <!-- Modal Search -->
        <div class="overlay overlay-scale">
            <button type="button" class="overlay-close">&#x2716;</button>
            <div class="overlay__content">
                <form id="search-form" class="search-form outer" action="#" method="post">
                    <div class="input-group">
                        <input type="text" class=" input--full" placeholder="search text here ..."> 
                    </div>
                    <button class="btn text-uppercase search-button">Search</button>
                </form>
            </div>
        </div>

        <div class="overlay-sidebar">
            <div class="author-area">
                <a href="#" class="closebtn">&times;</a>
                <div class="author-area-content">                
                    <div class="login-author">   
                        <div class="author-info">                    
                            <div class="author-image yellow-border">
                                <img src="https://htmlguru.net/carrent-html/assets/images/driver/driver-03.png" alt="author-image" />
                            </div><!-- /.author-image -->
                            <div class="author-des">
                                <h4 class="author-name">Mr. Johan Smith</h4>
                                <p class="author-description">Programmer</p>
                            </div><!-- /.author-des -->
                        </div><!-- /.author-info -->             
                        <div class="author-menu">
                            <ul class="yellow-color">
                                <li><a href=""><i class="fa fa-user-circle-o"></i>Author Dashboard</a></li>
                                <li><a href=""><i class="fa fa-envelope-open"></i>Your Inbox</a></li>
                                <li><a href=""><i class="fa fa-location-arrow"></i>Track your texi</a></li>
                                <li><a href=""><i class="fa fa-area-chart"></i>Your Bookings Status</a></li>
                                <li><a href=""><i class="fa fa-automobile"></i>New Bookings</a></li>
                                <li><a href=""><i class="fa fa-archive"></i>Your Bookings</a></li>
                                <li><a href=""><i class="fa fa-money"></i>Your Deposit - $150.00</a></li>
                                <li><a href=""><i class="fa fa-sign-out"></i>Sign Out</a></li>
                            </ul>
                        </div><!-- /.author-menu -->
                    </div><!-- /.login-author -->
                </div><!-- /.author-area-content -->
            </div><!-- /.author-area -->
        </div><!-- /.overlay-sidebar -->
    </div><!-- /.header-modal-area -->

    <!-- ====== Header Nav Area ====== --> 
    <header class="header-nav-area">
        <div class="container">        
            <div class="row">
                <div class="col-md-3 col-sm-10 col-xs-10">
                    <div class="site-logo" >
                        <a href="index.html"><img src="assets/images/rtm-logo.jpg" alt="" width="40%"/></a>
                    </div><!-- /.logo -->
                </div><!-- /.col-md-3 -->
                <div class="col-md-9 col-sm-2 col-xs-2 pd-right-0 ">
                    <nav class="site-navigation top-navigation nav-style-one">
                        <div class="menu-wrapper">
                            <div class="menu-content">
                                <ul class="menu-list">
                                    <li>
                                        <a href="#">Inicio</a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="index.html">Home Layout One</a>
                                            </li>
                                            <li>
                                                <a href="index02.html">Home Layout Two</a>
                                            </li>                                            
                                            <li>
                                                <a href="index03.html">Home Layout Three</a>
                                            </li>                                            
                                            <li>
                                                <a href="index04.html">Home Layout Four</a>
                                            </li>                                            
                                            <li>
                                                <a href="index05.html">Home Layout Five</a>
                                            </li>                                            
                                            <li>
                                                <a href="index06.html">Home Layout Six</a>
                                            </li>                                            
                                            <li>
                                                <a href="index07.html">Home Layout Seven</a>
                                            </li>                                            
                                            <li>
                                                <a href="index08.html">Home Layout Eight</a>
                                            </li>
                                            <li>
                                                <a href="index09.html">Home Layout Nine</a>
                                            </li>                   
                                            <li>
                                                <a href="index10.html">Home Layout Ten</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="car-single-page.html">Reservación</a>
                                    </li>
                                    <li>
                                        <a href="about.html">Sobre Nosotros</a>
                                    </li>
                                    <li>
                                        <a href="contact.html">Contacto</a>
                                    </li>
                                </ul> <!-- /.menu-list -->
                            </div> <!-- /.menu-content-->
                        </div> <!-- /.menu-wrapper --> 
                    </nav><!-- /.site-navigation -->
                    <!--Mobile Main Menu-->
                    <div class="mobile-menu-main hidden-md hidden-lg">
                        <div class="menucontent overlaybg"> </div>
                        <div class="menuexpandermain slideRight">
                            <a id="navtoggole-main" class="animated-arrow slideLeft menuclose">
                                <span></span>
                            </a>
                        </div><!--/.menuexpandermain-->

                        <div id="mobile-main-nav" class="mb-navigation slideLeft">
                            <div class="menu-wrapper">
                                <div id="main-mobile-container" class="menu-content clearfix"></div>
                            </div>
                        </div><!--/#mobile-main-nav-->
                    </div><!--/.mobile-menu-main-->
                </div><!-- /.col-md-9 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </header><!-- /.header-bottom-area -->


    <!-- ======= Main Slider Area =======-->
    <div class="slider-block">   
        <div class="rev_slider_wrapper">
            <div class="rev_slider carrent-slider">
                <ul>
                    <!-- slide 1 --> 
                    <li data-transition="fade" data-slotamount="default" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000" data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off" data-title="materialize Material" data-description="">

                        <!-- main image -->
                        <img src="https://htmlguru.net/carrent-html/assepts/images/slider-car/slider-bg.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                        p
                        <!-- layer no 1 -->
                        <div class="tp-caption tp-resizeme rev-subheading"
                        data-type="text" 
                        data-x="['left','left','left','center']" data-hoffset="['105','105','75','-85']" 
                        data-y="['middle']" data-voffset="['-163','-163','-130','-130']"
                        data-fontsize="['22','22','22','22']"
                        data-lineheight="['30','30','30','30']"
                        data-width="none"
                        data-height="none"
                        data-whitespace="nowrap"
                        data-transform_idle="o:1;"
                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power4.easeInOut;" 
                        data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                        data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                        data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                        data-start="800" 
                        data-splitin="none" 
                        data-splitout="none" 
                        data-responsive_offset="on"
                        style="z-index: 5; color: #464646; font-weight: 600; font-family: inherit;">El descuento es para ti
                    </div>

                    <!-- layer no 2 -->
                    <div class="tp-caption tp-resizeme rev-subheading"
                    data-type="text" 
                    data-x="['left','left','left','center']" data-hoffset="['102','102','75','-75']" 
                    data-y="['middle']" data-voffset="['-110','-110','-90','-90']"
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;"
                    data-fontsize="['50','50','35','35']"
                    data-lineheight="['60','60','60','60']"
                    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power4.easeInOut;" 
                    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                    data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                    data-start="1000" 
                    data-splitin="none" 
                    data-splitout="none" 
                    data-responsive_offset="on"
                    style="z-index: 6; color: #e91e22; font-family: 'Exo', sans-serif; font-weight: 800;">Necesitas un aventón?
                </div>

                <!-- layer no 3 -->
                <div class="tp-caption tp-resizeme NotGeneric-Title"
                data-type="text" 
                data-x="['left','left','left','center']" data-hoffset="['103','103','75','0']" 
                data-y="['middle']" data-voffset="['0']"
                data-whitespace="nowrap"
                data-transform_idle="o:1;"
                data-fontsize="['50','50','35','35']"
                data-lineheight="['75','75','60','60']"
                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power4.easeInOut;" 
                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
                data-start="1000" 
                data-splitin="none" 
                data-splitout="none" 
                data-responsive_offset="on"
                style="z-index: 7; color: #000000; font-family: 'Exo', sans-serif; font-weight: 900; text-transform: uppercase;">Escoge<br> El taxi mas cómodo
            </div>

            <!-- layer no 4 -->
            <div class="tp-caption rev-subheading tp-resizeme"
            data-type="text" 
            data-x="['left','left','left','center']" data-hoffset="['105','105','75','-28']" 
            data-y="['middle']" data-voffset="['95','95','75','75']"
            data-fontsize="['24']"
            data-lineheight="['20']"
            data-width="none"
            data-height="none"
            data-whitespace="nowrap"
            data-transform_idle="o:1;"
            data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power4.easeInOut;" 
            data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
            data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
            data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
            data-start="800" 
            data-splitin="none" 
            data-splitout="none" 
            data-responsive_offset="on"
            style="z-index: 5; color: #464646; font-weight: 600; font-family: inherit;">El mejor método de viajar seguro
        </div>

        <!-- layer no 5 -->
        <div class="tp-caption tp-resizeme"
        data-x="['left','left','left','center']" data-hoffset="['105','105','75','-105']" 
        data-y="['middle']" data-voffset="['150','150','135','120']"
        data-fontsize="['22']"
        data-lineheight="['45']"
        data-width="none"
        data-height="none"
        data-whitespace="nowrap"
        data-transform_idle="o:1;"
        data-style_hover="cursor:default;"
        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power4.easeInOut;" 
        data-transform_out="y:[100%];s:600;e:Power2.easeInOut;s:600;e:Power2.easeInOut;" 
        data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
        data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
        data-start="1200" 
        data-splitin="none" 
        data-splitout="none" 
        data-responsive_offset="on"
        style="z-index: 7; font-weight: bold; font-family: 'Exo', sans-serif;">
        <a href="#" class="button black-button slider-button" data-fontsize="['22','22','22','22']">Contacta ahora</a>
    </div>

    <!-- layer no 6 -->
    <div class="tp-caption tp-resizeme"
    data-x="['right','right','right','center']" data-hoffset="['0','-15','30','-10']"
    data-y="['middle','middle','middle','bottom']" data-voffset="['15','15','0','0']"
    data-transform_idle="o:1;" 
    data-visibility="['on','on','on','off']"
    data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:300;e:Power3.easeInOut;" data-transform_out="auto:auto;s:600;" 
    data-splitin="none"
    data-start="1500"
    data-type="image"
    data-responsive_offset="on"
    data-width="none"
    data-height="none" data-no-retina>
    <img src="https://htmlguru.net/carrent-html/assets/images/dummy.png" alt="" data-lazyload="https://htmlguru.net/carrent-html/assets/images/slider-car/slider-car-01.png" data-ww="['805','805','500','350']" data-hh="['auto']" >
</div>
</li><!-- /.slide 1 -->
<!-- slide 1 --> 
<li data-transition="fade" data-slotamount="default" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000" data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off" data-title="materialize Material" data-description="">

    <!-- main image -->
    <img src="https://htmlguru.net/carrent-html/assets/images/slider-car/slider-bg.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>

    <!-- layer no 1 -->
    <div class="tp-caption tp-resizeme rev-subheading"
    data-type="text" 
    data-x="['left','left','left','center']" data-hoffset="['105','105','75','-85']" 
    data-y="['middle']" data-voffset="['-163','-163','-130','-130']"
    data-fontsize="['22','22','22','22']"
    data-lineheight="['30','30','30','30']"
    data-width="none"
    data-height="none"
    data-whitespace="nowrap"
    data-transform_idle="o:1;"
    data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power4.easeInOut;" 
    data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
    data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
    data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
    data-start="800" 
    data-splitin="none" 
    data-splitout="none" 
    data-responsive_offset="on"
    style="z-index: 5; color: #464646; font-weight: 600; font-family: inherit;">El descuento es para ti
</div>

<!-- layer no 2 -->
<div class="tp-caption tp-resizeme rev-subheading"
data-type="text" 
data-x="['left','left','left','center']" data-hoffset="['102','102','75','-75']" 
data-y="['middle']" data-voffset="['-110','-110','-90','-90']"
data-whitespace="nowrap"
data-transform_idle="o:1;"
data-fontsize="['40','40','30','30']"
data-lineheight="['60','60','60','60']"
data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power4.easeInOut;" 
data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
data-start="1000" 
data-splitin="none" 
data-splitout="none" 
data-responsive_offset="on"
style="z-index: 6; color: #e91e22; font-family: 'Exo', sans-serif; font-weight: 800;">Necesitas un aventón?
</div>

<!-- layer no 3 -->
<div class="tp-caption tp-resizeme NotGeneric-Title"
data-type="text" 
data-x="['left','left','left','center']" data-hoffset="['103','103','75','0']" 
data-y="['middle']" data-voffset="['0']"
data-whitespace="nowrap"
data-transform_idle="o:1;"
data-fontsize="['40','40','30','30']"
data-lineheight="['75','75','60','60']"
data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power4.easeInOut;" 
data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
data-start="1000" 
data-splitin="none" 
data-splitout="none" 
data-responsive_offset="on"
style="z-index: 7; color: #000000; font-family: 'Exo', sans-serif; font-weight: 900; text-transform: uppercase;">Escoge<br> El Taxi más cómodo
</div>

<!-- layer no 4 -->
<div class="tp-caption rev-subheading tp-resizeme"
data-type="text" 
data-x="['left','left','left','center']" data-hoffset="['105','105','75','-28']" 
data-y="['middle']" data-voffset="['95','95','75','75']"
data-fontsize="['24']"
data-lineheight="['20']"
data-width="none"
data-height="none"
data-whitespace="nowrap"
data-transform_idle="o:1;"
data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power4.easeInOut;" 
data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
data-start="800" 
data-splitin="none" 
data-splitout="none" 
data-responsive_offset="on"
style="z-index: 5; color: #464646; font-weight: 600; font-family: inherit;">Puedes compartir tus viajes!!!
</div>

<!-- layer no 5 -->
<div class="tp-caption tp-resizeme"
data-x="['left','left','left','center']" data-hoffset="['105','105','75','-105']" 
data-y="['middle']" data-voffset="['150','150','135','120']"
data-fontsize="['22']"
data-lineheight="['45']"
data-width="none"
data-height="none"
data-whitespace="nowrap"
data-transform_idle="o:1;"
data-style_hover="cursor:default;"
data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power4.easeInOut;" 
data-transform_out="y:[100%];s:600;e:Power2.easeInOut;s:600;e:Power2.easeInOut;" 
data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
data-start="1200" 
data-splitin="none" 
data-splitout="none" 
data-responsive_offset="on"
style="z-index: 7; font-weight: bold; font-family: 'Exo', sans-serif;">
<a href="#" class="button black-button slider-button" data-fontsize="['22','22','22','22']">Contacta ahora</a>
</div>

<!-- layer no 6 -->
<div class="tp-caption tp-resizeme"
data-x="['right','right','right','center']" data-hoffset="['0','-15','30','-10']"
data-y="['middle','middle','middle','bottom']" data-voffset="['15','15','0','0']"
data-transform_idle="o:1;" 
data-visibility="['on','on','on','off']"
data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:300;e:Power3.easeInOut;" data-transform_out="auto:auto;s:600;" 
data-splitin="none"
data-start="1500"
data-type="image"
data-responsive_offset="on"
data-width="none"
data-height="none" data-no-retina>
<img src="assets/images/usingapp.jpg" alt="" data-lazyload="assets/images/slider-car/" data-ww="['805','805','500','350']" data-hh="['auto']" >
</div>
</li><!-- /.slide 1 -->
</ul>             
</div><!-- /.revolution slider -->
</div><!-- /.slider wrapper -->
</div><!-- /.slider-block -->
<!-- ====== Section divider ====== --> 
<div class="vehicle-section-divider night-rider">
    <div class="contoiner-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="section-divider-content">
                    <div class="vehicle-border">
                        <img src="https://htmlguru.net/carrent-html/assets/images/block-car01.png" alt="car-item" />
                    </div><!-- /.car-border -->
                </div><!-- /.section-divider-content -->
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div><!-- /.section-divider -->

<!-- ====== Check Vehicle Area ======  class="time-selector form-controller --> 
<div style="background-color: #FFC012">
    <input type="text" id="origen" placeholder="Ingresa el origen">
    <input type="text" id="destino" placeholder="Ingresa el destino">
    <br>
    <div class="col-md-4">
        <input class="date-start date-selector form-controller" id="fecha">
    </div>

    <br>
    <div class="input" style=" width: 200px" >
        <input type="text" class="time-selector form-controller" id="horaLlegada">
        <input type="text" placeholder="Ingresa tu nombre" id="nombre">
        <input type="text" placeholder="Ingresa tu numero de telefono" id="telefono">
    </div>
    <button style="color: black" id="calc">Obtener ruta</button>
    <button style="color: black" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" id="reservar">Reservar</button>
    <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Confirmar reserva</h4>
        </div>
        <div class="modal-body">
            <div id="write">
                <p>Origen: <span id='origenTexto'></span></p>
                <p>Destino: <span id="destinoTexto"></span></p>
                <p>Fecha: <span id="fechaTexto"></span></p>
                <p>Hora de Solicitud: <span id="solicitudTexto"></span></p>
                <p>Hora Aprox. de llegada: <span id="llegadaTexto"></span></p>
                <p>Nombre: <span id="nombreTexto"></span></p>
                <p>Telefono: <span id="telefonoTexto"></span></p>
                <p>Costo: <span id="costoTexto"></span></p>
                <div id="paypal-button-container"></div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
    </div>

</div>
</div>
<br>
<div id="output">
    <div id="resultado"> 
        Distancia: <label id="dstnc"></label>
        <br>
        Costo: <span id="cst"></span>
        <input type="hidden" name="amount" id="paypalPrice" value="">
    </div>
</div>
<div id="map-canvas">
    <script>
        var paypalPriceElement;

        var myLatLng = { lat: 19.4978, lng: -99.1269 };
        var mapOptions = {
            center: myLatLng,
            zoom: 15,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map =  new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
        var marker = new google.maps.Marker({
           map:map,
           draggable: true
       });
        var marker2 = new google.maps.Marker({
           map:map,
           draggable: true
       });

        var searchBox = new google.maps.places.SearchBox(document.getElementById('origen'));
        var searchBox2 = new google.maps.places.SearchBox(document.getElementById('destino'));

        google.maps.event.addListener(searchBox, 'places_changed',function(){

         var places = searchBox.getPlaces();

         var bounds = new google.maps.LatLngBounds();
         var i, place;
         for(i=0; place=places[i];i++){
          bounds.extend(place.geometry.location);
          marker.setPosition(place.geometry.location);
      }
      map.fitBounds(bounds);
      map.setZoom(15);
  })
        google.maps.event.addListener(searchBox2, 'places_changed',function(){

         var places = searchBox2.getPlaces();

         var bounds = new google.maps.LatLngBounds();
         var i, place;

         for(i=0; place=places[i];i++){
          bounds.extend(place.geometry.location);
          marker2.setPosition(place.geometry.location);
      }
      map.fitBounds(bounds);
      map.setZoom(15);
  })

        var directionsService = new google.maps.DirectionsService();
        var directionsDisplay = new google.maps.DirectionsRenderer();

        function calcularRuta(){
            var request = {
                origin: document.getElementById('origen').value,
                destination: document.getElementById('destino').value,
                travelMode: 'DRIVING'
            };
            directionsService.route(request, function(result, Status){
                var TotalDistancia = result.routes[0].legs[0].distance.text;
                var DistanciaNum = parseFloat(TotalDistancia);
                if (DistanciaNum <= 3.5) {
                    costo = 40;
                }else if(DistanciaNum >=6 && DistanciaNum <= 8 ) {
                    var costo = DistanciaNum * 9;
                }else if (DistanciaNum >=9 && DistanciaNum <= 10){
                    var costo = DistanciaNum * 8;
                }else if(DistanciaNum >= 10){
                    var costo = DistanciaNum * 8;
                }else{
                    var costo =  DistanciaNum * 10;
                }
                document.getElementById('cst').innerHTML = costo;
                document.getElementById('dstnc').innerHTML = DistanciaNum;
                paypalPriceElement = document.getElementById('paypalPrice');
                paypalPriceElement.value = costo;
                if (Status == "OK") {
                    directionsDisplay.setDirections(result);
                    directionsDisplay.setMap(map);
                }
            });
        }
        document.getElementById('calc').onclick= function(){
            calcularRuta();
        };


        document.getElementById('reservar').onclick=function(){
            show();
        };

        function agendarViaje(){
            var costo;
            var request = {
                origin: document.getElementById('origen').value,
                destination: document.getElementById('destino').value,
                travelMode: 'DRIVING'
            };
            directionsService.route(request, function(result, Status){
                var TotalDistancia = result.routes[0].legs[0].distance.text;
                var DistanciaNum = parseFloat(TotalDistancia);
                if (DistanciaNum <= 3.5) {
                    costo = 40;
                }else if(DistanciaNum >=6 && DistanciaNum <= 8 ) {
                    costo = DistanciaNum * 9;
                }else if (DistanciaNum >=9 && DistanciaNum <= 10){
                    costo = DistanciaNum * 8;
                }else if(DistanciaNum >= 10){
                    costo = DistanciaNum * 8;
                }else{
                    costo =  DistanciaNum * 10;
                }
                var xmlhttp;
                if(window.XMLHttpRequest){
                    xmlhttp = new XMLHttpRequest();
                }else{
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                var d = new Date();
                var año = d.getFullYear();
                var mes = d.getMonth();
                var dia = d.getDate();
                var fch = año + "/" + mes + "/" + dia;
                var orgn = document.getElementById('origen').value;
                var dstn = document.getElementById('destino').value;
                var hora = d.getHours();
                var min = d.getMinutes();
                var hrS= hora + ":" +  min;
                var hrL= document.getElementById('horaLlegada').value;
                var nmbr= document.getElementById('nombre').value;
                var tlfn= document.getElementById('telefono').value;
                xmlhttp.onreadystatechange = function(){
                    if(xmlhttp.readyState === 4 && xmlhttp.status ===200){
                        var mensaje = xmlhttp.response.Text;
                    }
                } 
                xmlhttp.open("GET", "dataUpload.php?origen=" + orgn + "&destino=" + dstn + "&fecha="+ fch +"&horaSolicitud="+ hrS +"&horaLlegada="+ hrL +"&nombre="+ nmbr + "&telefono=" + tlfn + "&costo=" + costo, true);
                xmlhttp.send();
                alert("Viaje programado exitosamente");
            });
        }

        if (navigator.geolocation) {
         navigator.geolocation.getCurrentPosition(function (position) {
             initialLocation = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
             map.setCenter(initialLocation);
             marker.setPosition(initialLocation); 
         });
     }



     function calcularCosto(){
        var costo = document.getElementById('cst').innerHTML;
        return costo;
    }

    var monto;
    function show() {
     document.getElementById('origenTexto').innerHTML = document.getElementById('origen').value;   
     document.getElementById('destinoTexto').innerHTML = document.getElementById('destino').value;   
     document.getElementById('fechaTexto').innerHTML = document.getElementById('fecha').value;
     document.getElementById('llegadaTexto').innerHTML = document.getElementById('horaLlegada').value;
     document.getElementById('nombreTexto').innerHTML = document.getElementById('nombre').value;
     document.getElementById('telefonoTexto').innerHTML = document.getElementById('telefono').value;
     document.getElementById('costoTexto').innerHTML = document.getElementById('cst').value;
     document.getElementById('costoTexto').innerHTML = document.getElementById('paypalPrice').value;
     monto = calcularCosto();
     console.log(monto);
 }

 paypal.Buttons({
    createOrder: function(data, actions) {
      return actions.order.create({
        purchase_units: [{
          amount: {
            currency_code: 'MXN',
            value: monto
        }
    }]
});
  },
  onApprove: function(data, actions) {
      return actions.order.capture().then(function(details) {
        alert('Transaction completed by ' + details.payer.name.given_name);
        // Call your server to save the transaction
        return fetch('/paypal-transaction-complete', {
          method: 'post',
          headers: {
            'content-type': 'application/json'
        },
        body: JSON.stringify({
            orderID: data.orderID
        })
    });
    });
  }
}).render('#paypal-button-container');

</script>
</div>
</div>


<!-- ======footer area======= -->
<div class="container footer-top-border">
  <div class="vehicle-multi-border yellow-black"></div><!-- /.vehicle-multi-border -->
</div><!-- /.container -->

<footer class="footer-block bg-black" style="background-color: #59B8CE">
  <div class="container">
      <!-- footer-top-block -->
      <div class="footer-top-block yellow-theme">            
          <div class="row">
              <div class="col-md-5 col-sm-6">
                  <div class="widget widget_about">    
                      <h3 class="widget-title">
                          Sobre nosotros 
                      </h3><!-- /.widget-title -->
                      <div class="widget-about-content">
                          <img src="assets/images/RTM logo fb.png" alt="logo" height="40" /></p>
                          <a href="#" class="button" style="color: black">Más</a>
                      </div><!-- /.widget-content -->
                  </div><!-- /.widget widget_about -->
              </div><!-- /.col-md-3 -->
              <div class="col-md-4 col-sm-6">
                  <div class="widget widget_menu">
                      <h3 class="widget-title">
                          Links útiles
                      </h3><!-- /.widget-title -->
                      <ul>
                          <li><a href="#" style="color: black">Inicio</a></li>
                          <li><a href="#" style="color: black">Reservación</a></li>
                          <li><a href="#" style="color: black">Sobre nosotros</a></li>
                          <li><a href="#" style="color: black">Contacto</a></li>
                      </ul> 
                  </div><!-- /.widget -->
              </div><!-- /.col-md-3 -->

              <div class="col-md-3 col-sm-4">
                  <div class="widget widget_hot_contact">
                      <h3 class="widget-title">
                          Contacto 
                      </h3><!-- /.widget-title -->
                      <ul>
                          <li><a href="#" style="color: black"><i class="fa fa-envelope"></i>radiotaximalibu@gmail.com</a></li>
                          <li><a href="# "style="color: black"><i class="fa fa-phone"></i>229 981 9980</a></li>
                          <li><a href="#" style="color: black"><i class="fa fa-map-marker"></i>AV. DE LOS NORTES 33 ALTOS.Veracruz</a></li>
                      </ul> 
                  </div><!-- /.widget -->
                  <div class="widget widget_newsletter">
                      <h3 class="widget-title">Subscribete</h3>
                      <form action="#" class="subscribes-newsletter" method="get">
                          <label style="color: black">Subscribete y recibe las noticias</label>
                          <div class="input-group">
                              <input type="search" name="s" placeholder="Tu correo" class="form-controller">
                              <span class="input-group-btn">
                                  <button type="submit" class="btn btn-primary">
                                      <span class="fa fa-paper-plane"></span>
                                  </button>
                              </span>
                          </div><!-- /. input-group -->
                      </form><!-- /.subscribes-newsletter -->
                  </div><!-- /.widget -->
              </div><!-- /.col-md-3 -->

          </div><!-- /.row -->
      </div><!-- /.footer-top-block -->

      <!-- footer-bottom-block -->
      <div class="footer-bottom-block">            
          <div class="row">
              <div class="col-md-9">
                  <div class="bottom-content-left">
                      <p class="copyright">Copyright &copy; Radio Taxi Malibú  -  Todos los derechos reservados <a href="#"></a></p>
                  </div><!-- /.bottom-top-content -->
              </div><!-- /.col-md-9 -->
              <div class="col-md-3">
                  <div class="bottom-content-right">
                      <div class="social-profile">
                          <span class="social-profole-title">Síguenos:</span>
                          <a href="https://www.facebook.com/RadioTaxiMalibu/"><i class="fa fa-facebook"></i></a>
                          <a href="#"><i class="fa fa-twitter"></i></a>
                      </div><!-- /.social-profile -->
                  </div><!-- /.bottom-content-right -->
              </div><!-- /.col-md-3 -->
          </div><!-- /.row -->
      </div><!-- /.footer-bottom-block -->
  </div><!-- /.container -->
</footer><!-- /.footer-block -->

                                                  <!-- All The JS Files
                                                      ================================================== --> 
                                                      <script src="https://htmlguru.net/carrent-html/assets/js/plugins.min.js"></script>
                                                      <script src="https://htmlguru.net/carrent-html/assets/js/carrent.min.js"></script> <!-- main-js -->

                                                      <!-- RS5.4 Core JS Files -->
                                                      <script src="https://htmlguru.net/carrent-html/assets/revolution/js/jquery.themepunch.tools.min.js"></script>
                                                      <script src="https://htmlguru.net/carrent-html/assets/revolution/js/jquery.themepunch.revolution.min.js"></script>

                                                      <script>
                                                        jQuery(document).ready(function() {
                                                            var $sliderSelector = jQuery(".carrent-slider");
                                                            $sliderSelector.revolution({
                                                                sliderType: "standard",
                                                                sliderLayout: "fullwidth",
                                                                delay: 9000,
                                                                navigation: {
                                                                    keyboardNavigation: "on",
                                                                    keyboard_direction: "horizontal",
                                                                    mouseScrollNavigation: "off",
                                                                    onHoverStop: "on",
                                                                    touch: {
                                                                        touchenabled: "on",
                                                                        swipe_threshold: 75,
                                                                        swipe_min_touches: 1,
                                                                        swipe_direction: "horizontal",
                                                                        drag_block_vertical: false
                                                                    },
                                                                    arrows: {
                                                                        style: "gyges",
                                                                        enable: true,
                                                                        hide_onmobile: false,
                                                                        hide_onleave: true,
                                                                        tmp: '',
                                                                        left: {
                                                                            h_align: "left",
                                                                            v_align: "center",
                                                                            h_offset: 10,
                                                                            v_offset: 0
                                                                        },
                                                                        right: {
                                                                            h_align: "right",
                                                                            v_align: "center",
                                                                            h_offset: 10,
                                                                            v_offset: 0
                                                                        }
                                                                    }
                                                                },
                                                                responsiveLevels:[1400,1368,992,480],
                                                                visibilityLevels:[1400,1368,992,480],
                                                                gridwidth:[1400,1368,992,480],
                                                                gridheight:[600,600,500,380],
                                                                disableProgressBar:"on"
                                                            });
                                                        });
                                                    </script>

                                                    <!-- SLIDER REVOLUTION 5.4 EXTENSIONS  (Load Extensions only on Local File Systems! The following part can be removed on Server for On Demand Loading) -->
                                                    <script src="https://htmlguru.net/carrent-html/assets/revolution/js/extensions/revolution.extension.video.min.js"></script>
                                                    <script src="https://htmlguru.net/carrent-html/assets/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
                                                    <script src="https://htmlguru.net/carrent-html/assets/revolution/js/extensions/revolution.extension.actions.min.js"></script>
                                                    <script src="https://htmlguru.net/carrent-html/assets/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
                                                    <script src="https://htmlguru.net/carrent-html/assets/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
                                                    <script src="https://htmlguru.net/carrent-html/assets/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
                                                    <script src="https://htmlguru.net/carrent-html/assets/revolution/js/extensions/revolution.extension.migration.min.js"></script>
                                                    <script src="https://htmlguru.net/carrent-html/assets/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
                                                </body>
                                                </html>