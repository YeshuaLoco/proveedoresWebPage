<?php
require 'services/class.functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<?php 
    $proveedoresClass  = new proveedoresClass();
    $arrayProveedores = array();
    $arrayProveedores = $proveedoresClass->getProveedores(2);
    //var_dump($arrayProveedores[0]['PRO_NOMBRE']);
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
    <link rel="shortcut icon" href="img/page/e.png">

    <!-- ***** All CSS Files ***** -->

    <!-- Slidea Slider CSS -->
    <link href="slidea-assets/css/slidea/slidea.css" rel="stylesheet">
    <link href="slidea-assets/css/slidea/themes/default.css" rel="stylesheet">
    <link href="slidea-assets/css/slidea/ui/default.css" rel="stylesheet">

    <!-- Style CSS -->
    <link rel="stylesheet" href="css/core-style.css">
    <link rel="stylesheet" href="style.css">

    <!-- Responsive css -->
    <link rel="stylesheet" href="css/responsive/responsive.css">

    <!-- Switch Fonts via CSS Import system -->
    <link href="css/fonts/opensans-greatvibes.css" rel="stylesheet">

    <link href="css/fonts/poppins.css" rel="stylesheet">
    <link href="css/fonts/poiret-one.css" rel="stylesheet">
    <style>
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
            position: absolute;
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
                        <a class="nav-brand text-mat-yellow" href="#"><?php echo strtoupper(utf8_encode($arrayProveedores[0]['PRO_NOMBRE'])) ?>.</a>
                        <div class="nav-toggle"></div>
                    </div>
                    <!-- Main Menus Wrapper -->
                    <div class="nav-menus-wrapper">
                        <ul class="nav-menu align-to-right" id="nav">
                            <li class="active"><a href="#home">Inicio</a></li>
                            <li><a href="#about">Acerca de nosotros</a></li>
                            <li><a href="#offers">Ofertas</a></li>
                            <li><a href="#service">Servicios</a></li>
                            <li><a href="#gallery">Galeria</a></li>
                            <li><a href="#package">Especialidad</a></li>                      
                            <li><a href="#contact">Contacto</a></li>
                            <li>
                                <a href="http://m.me/<?php echo $arrayProveedores[0]['PRO_MESSENGER']; ?>"><i class="fa fa-facebook-square"></i></a>
                                <a href="https://api.whatsapp.com/send?phone=<?php echo $arrayProveedores[0]['PRO_WHATSAPP']; ?>&text=Hola, quiero contactarme con ustedes!"><i class="fa fa-whatsapp"></i></a>
                                <a href="<?php echo $arrayProveedores[0]['PRO_TELEFONOS']; ?>"><i class="fa fa-phone"></i></a>                                
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Welcome Area Start ***** -->
    <section class="welcome_area spa_version" id="home">
        <div class="slidea" id="slidea">

            <!-- Slidea Slide -->
            <div class="slidea-slide" id="imgen">
                <div class="slidea-overlay s-obj" ></div>
                <div class="slidea-content slidea-content-center">
                    <div class="slidea-content-container">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-lg-6 ml-lg-auto text-center">
                                    <div class="s-obj default-title" id="sub-title-one">
                                        <h3 class="font-greatvibes text-white">Maprial</h3>
                                    </div>
                                    <div class="s-obj default-title" id="title-one">
                                        <h2 class=" text-white">Lamejor productora</h2>
                                    </div>
                                    
                                    <div class="s-obj" id="btn-one">
                                        <a href="#offers" class="video_btn btn btn-lg btn-mat-yellow btn-pill" style="color:#000"></i>Ofertas</a>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-3"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Background Image -->
                <img class="slidea-background" src="system/<?php echo $arrayProveedores[0]['PRO_IMAGEN_PORTADA']; ?>" alt="">
            </div>
        </div>
    </section>
    <!-- ***** Welcome Area End ***** -->

    <!-- ***** About us Area Start ***** -->
    <section class="spa_about_us_area spa_version section_padding_100_0" id="about">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="spa_section_heading">
                            <h2>Acrca de Nosotros</h2>
                            <p>Maprial, líder en Cochabamba.</p>
                    </div>
                    <?php echo utf8_encode($arrayProveedores[0]['PRO_DESCRIPCION']);?>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** About Us Area End ***** -->

     <!-- ***** Our Classes Area Start ***** -->
     <section class="our_classes_area fitness_version section_padding_100" id="classes">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_heading">
                        <h3>Ultimas ofertas</h3>
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
                            <img src="system/<?php echo $arrayOfertas[$j]['PP_IMAGEN']; ?>" alt="">
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

   <!-- ***** Trainer Area Start ***** -->
   <section class="our_advisor_area fitness_version clearfix section_padding_100_70" id="offers">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading Start -->
                    <div class="section_heading">
                        <h3>Ofertas</h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="fitness_advisor_slides">
                        <?php
                            $arrayOfertas = array();
                            $arrayOfertas = $proveedoresClass->getPromociones(2);
                            for ($j=0; $j < count($arrayOfertas); $j++) { 
                        ?>
                        <div class="single_advisor">
                            <!-- Single advisor profile thumb -->
                            <div class="advisor_thumb">
                                <img src="system/<?php echo $arrayOfertas[$j]['PP_IMAGEN']; ?>" alt="">
                                <div class="advisor_social_info" style="background-color: orange;">
                                    <div class="social_icon">
                                        <a><i ><b>2x1</b></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Single advisor profile details -->
                            <div class="single_advisor_details_info">
                            <h3>- 50%</h3>
                                <h4><?php echo utf8_encode($arrayOfertas[$j]['PP_TITULO']); ?></h4>
                                <!-- View More -->
                                <div class="view_more">
                                    <a data-target="#advisor_details1" data-toggle="modal" href="#"><i class="fa fa-plus" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                        ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Trainer Area End ***** -->

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
                                        <img src="system/<?php echo $arrayOfertas[0]['PP_IMAGEN']; ?>" alt="">
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

    <!-- >>>>>>>>>>>>>>>> Project area start <<<<<<<<<<<<<<<< -->
    <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="spa_section_heading text-center" style="color:black !important">
                        <h2>Gallery</h2>
                        <p>Classy is completely creative, clean &amp; 100% responsive website. Put your business into next level with classy.</p>
                    </div>
                </div>
            </div>
        </div>
    <section class="creative_version gallery_area creative_gallery_slider dark clearfix" id="gallery">
        
        <?php
            $idProveedor = 2;
            $arrayProveedoresGaleria = array();
            $arrayProveedoresGaleria = $proveedoresClass->getProveedoresGaleria($idProveedor);
            for ($j=0; $j < count($arrayProveedoresGaleria); $j++) {                                             
        ?>
        <!-- Single gallery Item Start -->
        <div class="single_gallery_item app">
            <img src="system/<?php echo $arrayProveedoresGaleria[$j]['PG_IMAGEN']; ?>" alt="">
            <!-- Single gallery Item hover caption -->
            <div class="hover_overlay">
                <div class="classy-table">
                    <div class="classy-table-cell">
                        <div class="more_details text-center">
                            <a class="gallery_img text-white" href="system/<?php echo $arrayProveedoresGaleria[$j]['PG_IMAGEN']; ?>"><i class="pe-7s-search"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </section>
    <!-- >>>>>>>>>>>>>>>> Project area end <<<<<<<<<<<<<<<< -->
   
    <!-- ***** Spa Service Area Start ***** -->
    <section class="spa_version spa_services_area section_padding_100" id="service">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="spa_section_heading text-center">
                        <h2>Best Services</h2>
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
    
    
    <!-- ***** Package Area Start ***** -->
    <div class="price_plan_area spa_version section_padding_100_70" id="package">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="spa_section_heading text-center">
                        <h2>Best Package</h2>
                        <p>Classy is completely creative, clean &amp; 100% responsive website. Put your business into next level with classy.</p>
                    </div>
                </div>
            </div>

            <div class="row">

                <!-- Single Package Area Start -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single_price_plan">
                        <div class="single_price_img">
                            <img src="img/bg-img/spa-price-1.jpg" alt="">
                        </div>
                        <div class="spa_package_title text-center">
                            <h3 class="greatvibes-fonts">Everything Chocolate</h3>
                        </div>
                        <div class="spa_price_description">
                            <div class="single_price_description">
                                <h5 class="spa_title">Cocoa Bath <span class="label label-success">Special</span></h5>
                                <div class="spa_duration_price">
                                    <p class="duration">10 Min Session</p>
                                    <p class="price">$19.25</p>
                                </div>
                            </div>
                            <div class="single_price_description">
                                <h5 class="spa_title">Chocolate Sugar Scrub</h5>
                                <div class="spa_duration_price">
                                    <p class="duration">35 min Session</p>
                                    <p class="price">$9.10</p>
                                </div>
                            </div>
                            <div class="single_price_description">
                                <h5 class="spa_title">Chocolate Fondue Wrap <span class="label label-danger">Hot</span></h5>
                                <div class="spa_duration_price">
                                    <p class="duration">45 Min Session</p>
                                    <p class="price">$3.99</p>
                                </div>
                            </div>
                            <div class="single_price_description">
                                <h5 class="spa_title">Cocoa Massage</h5>
                                <div class="spa_duration_price">
                                    <p class="duration">30 Min Session</p>
                                    <p class="price">$102.21</p>
                                </div>
                            </div>
                            <div class="single_price_description">
                                <h5 class="spa_title">Lunch in The Oasis</h5>
                                <div class="spa_duration_price">
                                    <p class="duration">60 Min Session</p>
                                    <p class="price">$47.15</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Package Area Start -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single_price_plan">
                        <div class="single_price_img">
                            <img src="img/bg-img/spa-price-2.jpg" alt="">
                        </div>
                        <div class="spa_package_title text-center">
                            <h3 class="greatvibes-fonts">Rose Garden</h3>
                        </div>
                        <div class="spa_price_description">
                            <div class="single_price_description">
                                <h5 class="spa_title">Hydrating Body Wrap <span class="label label-success">Special</span></h5>
                                <div class="spa_duration_price">
                                    <p class="duration">15 Min Session</p>
                                    <p class="price">$19.25</p>
                                </div>
                            </div>
                            <div class="single_price_description">
                                <h5 class="spa_title">Renewal Facial <span class="label label-primary">New</span></h5>
                                <div class="spa_duration_price">
                                    <p class="duration">30 min Session</p>
                                    <p class="price">$9.10</p>
                                </div>
                            </div>
                            <div class="single_price_description">
                                <h5 class="spa_title">Hand Treatment</h5>
                                <div class="spa_duration_price">
                                    <p class="duration">20 Min Session</p>
                                    <p class="price">$3.99</p>
                                </div>
                            </div>
                            <div class="single_price_description">
                                <h5 class="spa_title">Anti Acne Facial</h5>
                                <div class="spa_duration_price">
                                    <p class="duration">15-20 Min Session</p>
                                    <p class="price">$102.21</p>
                                </div>
                            </div>
                            <div class="single_price_description">
                                <h5 class="spa_title">Full Manicure</h5>
                                <div class="spa_duration_price">
                                    <p class="duration">15-20 Min Session</p>
                                    <p class="price">$47.15</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Package Area Start -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single_price_plan">
                        <div class="single_price_img">
                            <img src="img/bg-img/spa-price-3.jpg" alt="">
                        </div>
                        <div class="spa_package_title text-center">
                            <h3 class="greatvibes-fonts">Abundance Day</h3>
                        </div>
                        <div class="spa_price_description">
                            <div class="single_price_description">
                                <h5 class="spa_title">Rose Petal Soak</h5>
                                <div class="spa_duration_price">
                                    <p class="duration">25 Min Session</p>
                                    <p class="price">$19.25</p>
                                </div>
                            </div>
                            <div class="single_price_description">
                                <h5 class="spa_title">Sea Salt Scrub <span class="label label-primary">New</span></h5>
                                <div class="spa_duration_price">
                                    <p class="duration">60 min Session</p>
                                    <p class="price">$9.10</p>
                                </div>
                            </div>
                            <div class="single_price_description">
                                <h5 class="spa_title">Milk &amp; Honey Wrap</h5>
                                <div class="spa_duration_price">
                                    <p class="duration">15 Min Session</p>
                                    <p class="price">$3.99</p>
                                </div>
                            </div>
                            <div class="single_price_description">
                                <h5 class="spa_title">Traditional Massage</h5>
                                <div class="spa_duration_price">
                                    <p class="duration">45 Min Session</p>
                                    <p class="price">$102.21</p>
                                </div>
                            </div>
                            <div class="single_price_description">
                                <h5 class="spa_title">Lunch in The Oasis</h5>
                                <div class="spa_duration_price">
                                    <p class="duration">45 Min Session</p>
                                    <p class="price">$47.15</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- ***** Package Area End ***** -->
   
    <div class="map_contact_address_area">
        <!-- Map Area Start -->
        <div class="map_area" id="googleMap"></div>
    </div>
    <!-- ***** Message Now Area Start ***** -->   

    

    <!-- ***** All jQuery Plugins ***** -->

    <!-- jQuery (necessary for all JavaScript plugins) -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- Slidea Slider JS -->
    <script src="slidea-assets/js/gsap/tweenlite.js" type="text/javascript"></script>
    <script src="slidea-assets/js/gsap/plugins/css.js" type="text/javascript"></script>
    <script src="slidea-assets/js/gsap/easing/easepack.js" type="text/javascript"></script>
    <script src="slidea-assets/js/animus/animus.js" type="text/javascript"></script>
    <script src="slidea-assets/js/animus/presets/default.js" type="text/javascript"></script>
    <script src="slidea-assets/js/hammer/hammer.js" type="text/javascript"></script>
    <script src="slidea-assets/js/mousewheel/mousewheel.js" type="text/javascript"></script>
    <script src="slidea-assets/js/vimeo/vimeo.js" type="text/javascript"></script>
    <script src="slidea-assets/js/youtube/youtube.js" type="text/javascript"></script>
    <script src="slidea-assets/js/slidea/slidea.js" type="text/javascript"></script>
     <!-- Slider Active JS  -->
     <script src="slidea-assets/js/templates/fitness-slider-active.js" type="text/javascript"></script>
    <!-- Plugins js -->
    <script src="js/include-all-plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
    <!-- Slider Active JS  -->
    <script src="slidea-assets/js/templates/spa-slider-active.js" type="text/javascript"></script>
    <!-- Google Maps js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDk9KNSL1jTv4MY9Pza6w8DJkpI_nHyCnk" type="text/javascript"></script>
    <!-- Google Maps Active js -->
    <script src="js/google-map/map-active.js"></script>
    <script>
        $('.main_header_area.sticky').css('background-color', '#000');
        $('.spa_version .spa_service_icon').css('color', '#000');
        $('.spa_version .spa_service_icon').css('background-color', '#ffeb3b');
        $('.gallery_area.spa_version').css('background-color', '#ffeb3b');    
        $('.single_advisor').css('background-color', '#ffeb3b');             
        $('.spa_version .single_advisor_details_info > h4, .spa_version .single_advisor_details_info > p').css('color', '#000'); 
    </script>
</body>

</html>