<?php
require 'services/class.functions.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Ofertas Bolivia</title>

    <!-- Favicon  -->
    <link rel="shortcut icon" href="img/page/e.png">

    <!-- jQuery (necessary for all JavaScript plugins) -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>

    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="revolution/css/settings.css">
    <link rel="stylesheet" type="text/css" href="revolution/css/layers.css">
    <link rel="stylesheet" type="text/css" href="revolution/css/navigation.css">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="css/core-style.css">
    <link rel="stylesheet" href="style.css">

    <!-- Slidea Slider CSS -->
    <link href="slidea-assets/css/slidea/slidea.css" rel="stylesheet">
    <link href="slidea-assets/css/slidea/themes/default.css" rel="stylesheet">
    <link href="slidea-assets/css/slidea/ui/default.css" rel="stylesheet">

    <!-- Responsive css -->
    <link href="css/responsive/responsive.css" rel="stylesheet">

    <!-- Switch Fonts -->
    <link href="css/fonts/opensans.css" rel="stylesheet">

    <!-- REVOLUTION JS FILES -->
    <script type="text/javascript" src="revolution/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="revolution/js/jquery.themepunch.revolution.min.js"></script>
    <style>
        .hosting_version.domain_search_area {
            position: relative;
            z-index: 1;
            background-color: #000;
        }
        .hosting_version.domain_search_area .btn.btn-default.submit_btn {
            background-color: #FFBB00;
            border: medium none;
            color: #000;
            display: inline-block;
            height: 50px;
            -webkit-transition-duration: 500ms;
            transition-duration: 500ms;
            width: 20%;
        }
        .hosting_version.domain_search_area .btn.btn-default.submit_btn:hover, .hosting_version.domain_search_area .btn.btn-default.submit_btn:focus {
            background-color: #FFBB00;
            color: #fff;
            box-shadow: 0 0 8px 0 rgba(255, 255, 255, 0.2);
        }

        .img-responsive{
            max-width: 100%;
            height: auto;
            display:block;
        }
        

    </style>
</head>

<body>
    <!-- Preloader Start -->
    <div id="preloader">
        <div class="classy-load"></div>
    </div>
    <?php
        include('includes/header.php');
    ?>
     <!-- Hero Block Area Start -->
    <div class="domain_search_area hosting_version section_padding_100 classy-hero-blocks hero-blocks-2 height-700 background-overlay" style="background-image: url(img/business2.jpg);">
    <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Search Form Start -->
                    <form action="#" class="domain_form">
                        <div class="form-group">
                            <input type="search" name="search" class="form-control search_box" placeholder="Encuentra lo todo lo que buscas">
                        </div>
                        <button type="submit" class="btn btn-default submit_btn">Buscar</button>                       
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- ********* Special Dishes Area Start ********* -->
    <section class="special_dishes_area restaurant_version background-overlay jarallax section_padding_100" style="background-color: black">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row justify-content-center">
                        <div class="restaurant section_heading m-right-30">
                            <h2>Empresas destacadas</h2>
                            <img src="img/core-img/divider.png" alt="">
                        </div>        
                    </div>
                    <div class="special_dishes_slider">
                    <?php 
                    $proveedoresClass  = new proveedoresClass();
                    $arrayProveedores = array();
                    $arrayProveedores = $proveedoresClass->getProveedores();
                    for ($j=0; $j < count($arrayProveedores); $j++) { 
                    ?>

                        <!-- Single Item Start -->
                        <div class="single_special_dishe_slide">
                            <div class="row align-items-center">
                                <div class="col-12 col-md-6">
                                    <div class="single_special_dishe_img">
                                        <img src="system/<?php echo $arrayProveedores[$j]['PRO_IMAGEN_PORTADA'];?>" alt="">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="single_special_dishe_text m-xs-top-30">
                                        <!-- Heading Start -->
                                        <h2 class="cookie-fonts"><?php echo $arrayProveedores[$j]['PRO_NOMBRE']; ?></h2>
                                        <!-- Single Dishes Start -->
                                        <h3>&nbsp;</h3>
                                        <p><?php echo utf8_encode($arrayProveedores[$j]['PRO_DESCRIPCION']); ?></p>
                                        <!-- Book Now Btn -->
                                        <a href="#" class="btn btn-pill btn-flat-pumpkin"><?php echo utf8_encode($arrayProveedores[$j]['PRO_TELEFONOS']); ?></a>
                                        <a class="btn btn-pill btn-flat-pumpkin" href="http://m.me/<?php echo utf8_encode($arrayProveedores[$j]['PRO_MESSENGER']); ?>"><i class="fa fa-facebook-square"></i></a>
                                        <a class="btn btn-pill btn-flat-pumpkin" href="https://api.whatsapp.com/send?phone=<?php echo utf8_encode($arrayProveedores[$j]['PRO_WHATSAPP']); ?>&amp;text=Hola, quiero contactarme con ustedes!"><i class="fa fa-whatsapp"></i></a>
                                    </div>
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
    <!-- ********* Special Dishes Area End ********* -->

        <!-- ***** Our Speciality Area Start ***** -->
    <section style="background-color: #2c3e50">
        <div class="classy-featured-area featured-2 section_padding_100_70 ">
            <div class="container">
            <div class="row justify-content-center">
                        <div class="restaurant section_heading m-right-30">
                            <h2>Empresas</h2>
                            <img src="img/core-img/divider.png" alt="">
                        </div>        
                    </div>
                <div class="row">
                    
                    <?php 
                    $proveedoresClass  = new proveedoresClass();
                    $arrayProveedores = array();
                    $arrayProveedores = $proveedoresClass->getProveedores();
                    for ($j=0; $j < count($arrayProveedores); $j++) { 
                    ?>
                    <!-- Single Feature Area -->
                    <div class="col-12 col-md-6 col-lg-4" >
                        <div class="classy-single-feature m-bottom-30 p-15 bg-gray">
                            <div class="featured-image">
                                <img class="img-responsive" src="system/<?php echo $arrayProveedores[$j]['PRO_IMAGEN_LOGO']; ?>" alt="">
                            </div>
                            <h5 class="m-top-15"><?php echo utf8_encode($arrayProveedores[$j]['PRO_NOMBRE']); ?></h5>
                            <!--<p><?php echo utf8_encode($arrayProveedores[$j]['PRO_DESCRIPCION']); ?></p>-->
                            <a target="_blank" href="foro.php" class="btn btn-pill btn-sm btn-warning">Ver más ...</a>
                            <a href="services/puente.php?proUid=<?php echo $arrayProveedores[$j]['PRO_UID']; ?>&proNombreCarpeta=<?php echo $arrayProveedores[$j]['PRO_NOMBRE_CARPETA']; ?>" class="btn btn-pill btn-sm btn-warning float-right">-50%</a>
                        </div>
                    </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Our Speciality Area End ***** -->



    <!-- ***** Our Speciality Area Start ***** -->
    <section style="background-color: #2c3e50">
        <div class="classy-featured-area featured-2 section_padding_100_70 ">
            <div class="container">
            <div class="row justify-content-center">
                        <div class="restaurant section_heading m-right-30">
                            <h2>Ofertas de la semana</h2>
                            <img src="img/core-img/divider.png" alt="">
                        </div>        
                    </div>
                <div class="row">
                    
                    <?php $arrayOfertas = array();
                    $arrayOfertas = $proveedoresClass->getPromociones(2);
                    for ($j=0; $j < count($arrayOfertas); $j++) { 
                    ?>
                    <!-- Single Feature Area -->
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="classy-single-feature m-bottom-30 p-15 bg-gray">
                            <div class="featured-image">
                                <img src="system/<?php echo $arrayOfertas[$j]['PP_IMAGEN']; ?>" alt="">
                            </div>
                            <h5 class="m-top-15"><?php echo utf8_encode($arrayOfertas[$j]['PP_TITULO']); ?></h5>
                            <p><?php echo utf8_encode($arrayOfertas[$j]['PP_DESCRIPCION']); ?></p>
                            <a target="_blank" href="foro.php" class="btn btn-pill btn-sm btn-warning">Ver más ...</a>
                            <a href="#" class="btn btn-pill btn-sm btn-warning float-right">-50%</a>
                        </div>
                    </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Our Speciality Area End ***** -->
   
    <!-- Footer Area Start -->
    <footer class="footer_area" id="contact">
        <!-- Top Footer Area Start -->
        <div class="foo_top_header_two section_padding_100_70">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="single_foo_part">
                            <h5>About Classy.</h5>
                            <p>It includes rich features &amp; contents. It's designed &amp; developed based on One Page/ Multi-page Layout. You can use any layout from any demo anywhere.</p>
                            <p>Classy is completely creative, clean &amp; 100% responsive website.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="single_foo_part">
                            <h5>Important Links</h5>
                            <ul class="imp_links">
                                <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Terms &amp; Conditions</a></li>
                                <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>About Licences</a></li>
                                <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Help &amp; Support</a></li>
                                <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Careers</a></li>
                                <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Privacy Policy</a></li>
                                <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Community &amp; Forum</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="single_foo_part">
                            <h5>Latest News</h5>
                            <div class="foo_single_blog_area">
                                <div class="foo_blog_thumb">
                                    <img src="img/news-img/blog-2.jpg" alt="">
                                </div>
                                <a href="#">
                                    <h5>Your Blog Title Goes Here</h5>
                                </a>
                                <p>Lorem ipsum dolor sit amet, consectetur</p>
                            </div>
                            <div class="foo_single_blog_area">
                                <div class="foo_blog_thumb">
                                    <img src="img/news-img/blog-8.jpg" alt="">
                                </div>
                                <a href="#">
                                    <h5>Your Blog Title Goes Here</h5>
                                </a>
                                <p>Lorem ipsum dolor sit amet, consectetur</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="single_foo_part">
                            <h5>Latest Works</h5>
                            <div class="latest_works">
                                <a class="foo_latest_works_img" href="img/gallery/1.jpg"><img src="img/gallery/1.jpg" alt=""></a>
                                <a class="foo_latest_works_img" href="img/gallery/4.jpg"><img src="img/gallery/4.jpg" alt=""></a>
                                <a class="foo_latest_works_img" href="img/gallery/5.jpg"><img src="img/gallery/5.jpg" alt=""></a>
                                <a class="foo_latest_works_img" href="img/gallery/7.jpg"><img src="img/gallery/7.jpg" alt=""></a>
                                <a class="foo_latest_works_img" href="img/gallery/10.jpg"><img src="img/gallery/10.jpg" alt=""></a>
                                <a class="foo_latest_works_img" href="img/gallery/11.jpg"><img src="img/gallery/11.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom Area Start -->
        <div class="foo_bottom_header_two section_padding_50">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="foo_btm_social_area_two text-right">
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-github" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- ***** All jQuery Plugins ***** -->

    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/include-all-plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
    <!-- Active js -->
    <script src="js/revolution-slider-active/creative-slider-active.js"></script>
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
    <script src="slidea-assets/js/templates/default-slider-active.js" type="text/javascript"></script>
    <!-- Plugins js -->
    <script src="js/include-all-plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
    <!-- Slider Active JS  -->
    <script src="slidea-assets/js/templates/spa-slider-active.js" type="text/javascript"></script>
    
</body>

</html>