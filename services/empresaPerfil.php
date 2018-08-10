<?php
session_start();
require 'class.functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<?php 
$proveedoresClass  = new proveedoresClass();
$arrayProveedores = array();
$arrayProveedores = $proveedoresClass->getProveedores($_SESSION['proUid']);
    //var_dump($_SESSION);
?>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title><?php echo $arrayProveedores[0]['PRO_NOMBRE'] ?></title>

    <!-- Favicon  -->
    <link rel="shortcut icon" href="../img/page/e.png">

    <!-- ***** All CSS Files ***** -->

    <!-- Slidea Slider CSS -->
    <link href="../slidea-assets/css/slidea/slidea.css" rel="stylesheet">
    <link href="../slidea-assets/css/slidea/themes/default.css" rel="stylesheet">
    <link href="../slidea-assets/css/slidea/ui/default.css" rel="stylesheet">

    <!-- Style CSS -->
    <link rel="stylesheet" href="../css/core-style.css">
    <link rel="stylesheet" href="../style.css">

    <!-- Responsive css -->
    <link rel="stylesheet" href="../css/responsive/responsive.css">

    <!-- Switch Fonts via CSS Import system -->
    <link href="../css/fonts/opensans-greatvibes.css" rel="stylesheet">

    <link href="../css/fonts/poppins.css" rel="stylesheet">
    <link href="../css/fonts/poiret-one.css" rel="stylesheet">
    <style>

    .sticky-container{
        padding:0px;
        margin:0px;
        position:fixed;
        right:-170px;
        top:230px;
        width:210px;
        z-index: 1100;
    }
    .sticky li{
        list-style-type:none;
        /*background-color:#fff;*/
        color:#efefef;
        height:43px;
        padding:0px;
        margin:0px 0px 1px 0px;
        -webkit-transition:all 0.25s ease-in-out;
        -moz-transition:all 0.25s ease-in-out;
        -o-transition:all 0.25s ease-in-out;
        transition:all 0.25s ease-in-out;
        cursor:pointer;
    }
    .sticky li:hover{
        margin-left:-15px;
    }
    .sticky li img{
        float:left;
        margin:5px 4px;
        margin-right:5px;
    }       
    .fitness_version .advisor_thumb:after {
        background-color: orange;
        border-bottom: 1px solid #222;
        bottom: 0;
        content: "";
        height: 50px;
        left: 25%;
        position: absolute;
        -webkit-transform: skewX(-45deg);
        transform: skewX(-45deg);
        width: 100%;

    }
    .spa_version .gallery_info p, .spa_version .gallery_info h5, .gallery_area.spa_version .spa_section_heading p, .gallery_area.spa_version .spa_section_heading h2, .spa_version .footer_bottom p > i, .spa_version .footer_bottom p > a:hover {
        color:#000 !important;
    }


    .spa_version .nav-menu li a {
        color: #ffeb3b;
        font-weight: 600;
    }
    .main_header_area.sticky {
        width: 100%;
        position: fixed;
        top: 0;
        left: 0;
        z-index: 9999;
        box-shadow: 0 5px 30px rgba(0, 0, 0, 0.1);
        background-color: #000;
    }
    .spa_version .spa_service_icon {
        border-radius: 50%;
        height: 70px;
        position: relative;
        right: 0;
        text-align: center;
        top: 2px;
        width: 70px;
        -webkit-transition-duration: 500ms;
        transition-duration: 500ms;
    }   
</style>   
</head>

<body>
    <!-- Preloader Start -->
    <div id="preloader">
        <div class="classy-load"></div>
    </div>

    <!-- ***** Header Area Start ***** -->
    <header class="header_area spa_version transparent-menu">
        <div class="main_header_area animated">
            <div class="container">
                <nav id="navigation1" class="navigation bg-transparent">
                    <!-- Logo Area -->
                    <div class="nav-header">
                        <a class="nav-brand" href="#"><?php echo strtoupper(utf8_encode($arrayProveedores[0]['PRO_NOMBRE'])) ?>.</a>
                        <div class="nav-toggle"></div>
                    </div>
                    <!-- Main Menus Wrapper -->
                    <div class="nav-menus-wrapper">
                        <ul class="nav-menu align-to-right" id="nav">
                            <li class="active"><a href="#home">Inicio</a></li>
                            <li><a href="#about">Acerca de nosotros</a></li>
                            <li><a href="#service">Servicios</a></li>
                            <li><a href="#offers">Ofertas</a></li>                            
                            <li><a href="#gallery">Galeria</a></li>                 
                            <li><a href="#contact">Contacto</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Welcome Area Start ***** -->   
    <section class="welcome_area height-800 clearfix background-overlay jarallax" style="background-image: url(../system/<?php echo $arrayProveedores[0]['PRO_IMAGEN_PORTADA']; ?>);" data-jarallax-image="../system/<?php echo $arrayProveedores[0]['PRO_IMAGEN_PORTADA']; ?>" id="home">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="col-12">
                    <div class="welcome_text text-center">
                        <h2 class="display-3 text-white">Classy Corporate Agency</h2>
                        <p class="text-white">Classy is completely creative, clean &amp; 100% responsive website. Put your business into next level with classy.</p>
                        <a href="#" class="btn default-button" style= "background-color: yellow; color:black;" role="button">Ofertas</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Welcome Area End ***** -->
    
    <!-- ***** About us Area Start ***** -->
    <section class="spa_about_us_area spa_version section_padding_100_0" id="about">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div>
                        <b><h2 style="font-family: Impact">Acerca de Nosotros</h2></b>
                        <p>Maprial, líder en Cochabamba.</p>
                    </div>
                    <?php echo utf8_encode($arrayProveedores[0]['PRO_DESCRIPCION']);?>
                <div class="col-sm-12">
                    <div class="col-sm-3">
                        <div class="spa_service_icon" style="color: rgb(0, 0, 0); background-color: rgb(255, 235, 59);">
                                <i class="fa fa-leaf" aria-hidden="true"></i>
                            </div>    
                    </div>
                    <div class="col-sm-3">
                        <div class="spa_service_icon" style="color: rgb(0, 0, 0); background-color: rgb(255, 235, 59);">
                                <i class="fa fa-leaf" aria-hidden="true"></i>
                            </div>    
                    </div>
                    <div class="col-sm-3">
                        <div class="spa_service_icon" style="color: rgb(0, 0, 0); background-color: rgb(255, 235, 59);">
                                <i class="fa fa-leaf" aria-hidden="true"></i>
                            </div>    
                    </div>
                    <div class="col-sm-3">
                        <div class="spa_service_icon" style="color: rgb(0, 0, 0); background-color: rgb(255, 235, 59);">
                                <i class="fa fa-leaf" aria-hidden="true"></i>
                            </div>    
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** About Us Area End ***** -->

    <!-- ***** Spa Service Area Start ***** -->
    <section class="spa_version spa_services_area section_padding_100" id="service">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-center">
                        <h2 style="font-family: Impact">Best Services</h2>
                        <p>Classy is completely creative, clean &amp; 100% responsive website. Put your business into next level with classy.</p>
                    </div>
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-md-6 col-lg-5">
                    <!--  Why Choose Text Area Start  -->
                    <div class="spa_services_text_area">
                        <div class="spa_single_service">
                            <h4>Stone Massage</h4>
                            <p>Classy is completely creative, clean &amp; 100% responsive website. Put your business into next level with classy.</p>
                            <div class="spa_service_icon">
                                <i class="fa fa-leaf" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="spa_single_service">
                            <h4>Aroma Therapy</h4>
                            <p>Classy is completely creative, clean &amp; 100% responsive website. Put your business into next level with classy.</p>
                            <div class="spa_service_icon">
                                <i class="fa fa-bed" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="spa_single_service">
                            <h4>Reflexology</h4>
                            <p>Classy is completely creative, clean &amp; 100% responsive website. Put your business into next level with classy.</p>
                            <div class="spa_service_icon">
                                <i class="fa fa-heartbeat" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  Why Choose Image Area Start  -->
                <div class="col-md-6 col-lg-5 ml-lg-auto">
                    <div class="spa_services_text_area second_area">
                        <div class="spa_single_service">
                            <h4>Oil Massage</h4>
                            <p>Classy is completely creative, clean &amp; 100% responsive website. Put your business into next level with classy.</p>
                            <div class="spa_service_icon">
                                <i class="fa fa-umbrella" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="spa_single_service">
                            <h4>Facial Treatment</h4>
                            <p>Classy is completely creative, clean &amp; 100% responsive website. Put your business into next level with classy.</p>
                            <div class="spa_service_icon">
                                <i class="fa fa-smile-o" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="spa_single_service">
                            <h4>Health Coaching</h4>
                            <p>Classy is completely creative, clean &amp; 100% responsive website. Put your business into next level with classy.</p>
                            <div class="spa_service_icon">
                                <i class="fa fa-heart-o" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Spa Service Area End ***** -->

    <!-- ***** Our Classes Area Start ***** -->
    <section class="our_classes_area fitness_version section_padding_100" id="offers">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_heading">
                        <h3>OFERTAS <?php echo strtoupper(utf8_encode($arrayProveedores[0]['PRO_NOMBRE'])) ?></h3>
                    </div>
                </div>
            </div>
            <?php
            $arrayOfertas = array();
            $arrayOfertas = $proveedoresClass->getPromociones(2);
            for ($j=0; $j < count($arrayOfertas); $j++) { 
                ?>
                <div class="row">
                    <div class="col-12">
                        <div class="fitness_class_slides">
                            <!-- Single Class Slide -->
                            <div class="single_class_slide">
                                <img src="../system/<?php echo $arrayOfertas[$j]['PP_IMAGEN']; ?>" alt="">
                                <div class="time">
                                    <p>2x1</p>
                                </div>
                                <div class="title">
                                    <h4><?php echo utf8_encode($arrayOfertas[$j]['PP_TITULO']); ?></h4>
                                </div>
                                <div class="trainer">
                                </div>
                                <div class="description">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, at.</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </section>
    <!-- ***** Our Classes Area End ***** -->

    <!-- ***** Trainer 1 Details Area Start ***** -->
    <div role="dialog" tabindex="-1" id="advisor_details1" class="modal fade in animated slideInDown">
        <div role="document" class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Head Start -->
                <div class="modal-header">
                    <h5 class="modal-title" id="teammodelhead"><?php echo utf8_encode($arrayOfertas[0]['PP_TITULO']); ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <!-- Modal Body Start -->
                <div class="modal_body">
                    <!-- single gallery description start -->
                    <div class="single_gallery_area text-center p-30">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12">
                                    <div class="team_advisor_thumb">
                                        <img src="../system/<?php echo $arrayOfertas[0]['PP_IMAGEN']; ?>" alt="">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <!--  Gallery Details Info -->
                                    <div class="single_team_advisor_info">

                                        <!-- Description -->
                                        <div class="description">
                                            <p><?php echo utf8_encode($arrayOfertas[0]['PP_DESCRIPCION']); ?></p>
                                        </div>
                                        <!-- live preview button -->
                                        <div class="live_preview">
                                            <a class="btn btn-pill btn-flat-pumpkin" href="#">Contactate</a>
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
    <!-- ***** Trainer Details Area End ***** -->



    <section class="gallery_area clearfix" id="gallery">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading Start -->
                    <div class="section_heading">
                        <h2 style="font-family: Impact">Galeria</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="gallery_menu text-center">
            <div class="portfolio-menu">
                <button class="active btn" type="button" data-filter="*">All</button>
                <button class="btn" type="button" data-filter=".web">Design</button>
                <button class="btn" type="button" data-filter=".art">Art</button>
                <button class="btn" type="button" data-filter=".bra">Branding</button>
                <button class="btn" type="button" data-filter=".app">App</button>
            </div>
        </div>

        <div class="gallery_full_width_images_area clearfix">

            <?php
            $idProveedor = 2;
            $arrayProveedoresGaleria = array();
            $arrayProveedoresGaleria = $proveedoresClass->getProveedoresGaleria($idProveedor);
            for ($j=0; $j < count($arrayProveedoresGaleria); $j++) {                                             
                ?>
                <!-- Single gallery Item Start -->
                <div class="single_gallery_item app wow fadeInUp">
                    <img src="../system/<?php echo $arrayProveedoresGaleria[$j]['PG_IMAGEN']; ?>" alt="">
                    <!-- Hover Effect -->
                    <div class="hover_overlay">
                        <div class="classy-table">
                            <div class="classy-table-cell">
                                <div class="gallery_info">
                                    <h6>Creative Work</h6>
                                    <p>Popup View</p>
                                </div>
                                <div class="more_details text-center">
                                    <a class="gallery_img" href="../system/<?php echo $arrayProveedoresGaleria[$j]['PG_IMAGEN']; ?>"><i class="pe-7s-search"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>            
    </section>
    <!-- >>>>>>>>>>>>>>>> Project area end <<<<<<<<<<<<<<<< -->


    <!-- Classy Rating -->
    <div class="classy-star-three">
        <fieldset>
            <input type="radio" id="c-star5" name="rating" value="5"><label for="star5" title="Outstanding">5 stars</label>
            <input type="radio" id="c-star4" name="rating" value="4"><label for="star4" title="Very Good">4 stars</label>
            <input type="radio" id="c-star3" name="rating" valuSe="3"><label for="star3" title="Good">3 stars</label>
            <input type="radio" id="c-star2" name="rating" value="2"><label for="star2" title="Poor">2 stars</label>
            <input type="radio" id="c-star1" name="rating" value="1"><label for="star1" title="Very Poor">1 star</label>
        </fieldset>
    </div>

    <div class="map_contact_address_area">
        <!-- Map Area Start -->
        <div class="map_area" id="googleMap"></div>
    </div>
    <!-- ***** Message Now Area Start ***** -->   

    <div class="sticky-container">
        <ul class="sticky" style="background-color:black;">
            <li style="background-color: #45619D; border-radius: 0px;">
                <a style = "background-color: black !important;" href="http://www.facebook.com/<?php echo $arrayProveedores[0]['PRO_MESSENGER']; ?>" target="_blank">
                    <img src="../img/social-icons/if_facebook.png" width="32" height="32">
                </a>
            </li>
            <li style="background-color: #427AB6;border-radius: 0px;">
                <a style = "background-color: black !important;" href="http://m.me/<?php echo $arrayProveedores[0]['PRO_MESSENGER']; ?>" target="_blank">
                    <img src="../img/social-icons/if_messenger.png" width="32" height="32">                
                </a>
            </li>
            <li style="background-color: #57BB63; border-radius: 0px;">
                <a style = "background-color: black !important;" href="https://api.whatsapp.com/send?phone=<?php echo $arrayProveedores[0]['PRO_WHATSAPP']; ?>&text=Hola, quiero contactarme con ustedes!" target="_blank">
                    <img src="../img/social-icons/if_whatsapp.png" width="32" height="32">
                </a>
            </li>
        </ul>
    </div>

    <!-- ***** All jQuery Plugins ***** -->

    <!-- jQuery (necessary for all JavaScript plugins) -->
    <script src="../js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="../js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="../js/bootstrap/bootstrap.min.js"></script>
    <!-- Slidea Slider JS -->
    <script src="../slidea-assets/js/gsap/tweenlite.js" type="text/javascript"></script>
    <script src="../slidea-assets/js/gsap/plugins/css.js" type="text/javascript"></script>
    <script src="../slidea-assets/js/gsap/easing/easepack.js" type="text/javascript"></script>
    <script src="../slidea-assets/js/animus/animus.js" type="text/javascript"></script>
    <script src="../slidea-assets/js/animus/presets/default.js" type="text/javascript"></script>
    <script src="../slidea-assets/js/hammer/hammer.js" type="text/javascript"></script>
    <script src="../slidea-assets/js/mousewheel/mousewheel.js" type="text/javascript"></script>
    <script src="../slidea-assets/js/vimeo/vimeo.js" type="text/javascript"></script>
    <script src="../slidea-assets/js/youtube/youtube.js" type="text/javascript"></script>
    <script src="../slidea-assets/js/slidea/slidea.js" type="text/javascript"></script>
    <!-- Slider Active JS  -->
    <script src="../slidea-assets/js/templates/fitness-slider-active.js" type="text/javascript"></script>
    <!-- Plugins js -->
    <script src="../js/include-all-plugins.js"></script>
    <!-- Active js -->
    <script src="../js/active.js"></script>
    <!-- Slider Active JS  -->
    <script src="../slidea-assets/js/templates/spa-slider-active.js" type="text/javascript"></script>
    <!-- Google Maps js -->
    <script src="../https://maps.googleapis.com/maps/api/js?key=AIzaSyDk9KNSL1jTv4MY9Pza6w8DJkpI_nHyCnk" type="text/javascript"></script>
    <!-- Google Maps Active js -->
    <script src="../js/google-map/map-active.js"></script>
    <script>
        $('.main_header_area.sticky').css('background-color', '<?php echo $arrayProveedores[0]['PRO_COLOR_FONDO'] ?>');
        $('.spa_version .spa_service_icon').css('color', '#000');
        $('.spa_version .spa_service_icon').css('background-color', '#ffeb3b');
        $('.gallery_area.spa_version').css('background-color', '#ffeb3b');    
        $('.single_advisor').css('background-color', '#ffeb3b');             
        $('.spa_version .single_advisor_details_info > h4, .spa_version .single_advisor_details_info > p').css('color', '#000'); 
    </script>
</body>

</html>