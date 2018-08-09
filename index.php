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
    <link rel="stylesheet" href="css/awesomplete-gh-pages/awesomplete.css" />

    <!-- Slidea Slider CSS -->
    <link href="slidea-assets/css/slidea/slidea.css" rel="stylesheet">
    <link href="slidea-assets/css/slidea/themes/default.css" rel="stylesheet">
    <link href="slidea-assets/css/slidea/ui/default.css" rel="stylesheet">

    <!-- Responsive css -->
    <link href="css/responsive/responsive.css" rel="stylesheet">

    <!-- Switch Fonts -->
    <link href="css/fonts/opensans.css" rel="stylesheet">

    <link href="css/ofertas.css" rel="stylesheet">

    <!-- REVOLUTION JS FILES -->
    <script type="text/javascript" src="revolution/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script src="css/awesomplete-gh-pages/awesomplete.js" async></script>
    <style>

    .form-control {
        display: block;
        width: 100%;
        padding: .5rem .75rem;
        font-size: 1rem;
        line-height: 1.25;
        color: #495057;
        background-color: #fff;
        background-image: none;
        background-clip: padding-box;
        border: 1px solid rgba(0,0,0,.15);
        border-radius: 0px;
        transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    }
    .hosting_version.domain_search_area .btn.btn-default.submit_btn {
        background-color: black;
        border: medium none;
        color: #fff;
        display: inline-block;
        height: 50px;
        -webkit-transition-duration: 500ms;
        transition-duration: 500ms;
        width: 20%;
        border-radius: 0px;
    }
    .fitness_version .advisor_social_info .social_icon > a:hover {
        color: #fff;
        background-color: #27ae60;
    }
    
    .fitness_version .view_more > a {
        background-color: #ff5722;
        border-radius: 50%;
        color: #fff;
        height: 50px;
        left: 50%;
        /* margin-left: 10px; */
        position: absolute;
        text-align: center;
        top: 40%;
        width: 50px;
        z-index: 999;
    }

    body {
        font-family: "Open Sans",sans-serif;
        font-size: 14px;
        line-height: 1em;
        background: #fff; 
    }
    
    .hosting_version.domain_search_area {
        position: relative;
        z-index: 1;
        background-color: #000;
    }                

    .img-responsive{
        max-width: 100%;
        height: auto;
        display:block;
    }
    .advisor_social_info .social_icon > a {
        background-color: #fff;
        border-radius: 50%;
        color: #2c3e50;
        display: inline-block;
        height: 38px;
        line-height: 36px;
        font-size: 27px;
        margin: 0;
        text-align: center;
        width: 38px;
    }
    .awesomplete {
        display: block;
        /*position: relative; */
    }
    .awesomplete > ul {
        border-radius: .3em;
        margin: 3.5em 0 0;
        background: hsla(0,0%,100%,.9);
        background: linear-gradient(to bottom right, white, hsla(0,0%,100%,.8));
        border: 1px solid rgba(0,0,0,.3);
        box-shadow: 0.05em 0.2em 0.6em rgba(0,0,0,.2);
        text-shadow: none;
    }
    .de-popular-place:hover {
        box-shadow: 0 3px 40px 0 #000;
        border: 1px solid rgba(83,166,233,0.15);
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
                    <form action="#" class="domain_form" style = 'margin-top:180px;'>                        
                        <div class="form-group">
                            <input type="text" list="mylist" name="search" class="form-control search_box awesomplete" style = "width:53%" placeholder="Encuentra lo todo lo que buscas" />
                            <datalist id="mylist">
                                <option>Ada</option>
                                <option>Java</option>
                                <option>JavaScript</option>
                                <option>Brainfuck</option>
                                <option>LOLCODE</option>
                                <option>Node.js</option>
                                <option>Ruby on Rails</option>
                            </datalist>
                            <select class="form-control search_box" style = "width:25%" id="sel1">
                                <option value=''>Elige Ubicación</option>
                                <option value='LPZ'>La Paz</option>
                                <option value='CBBA'>Cochabamba</option>
                                <option value='SCZ'>Santa Cruz</option>
                                <option value='BNI'>Beni</option>
                                <option value='PND'>Pando</option>
                                <option value='PSI'>Potosí</option>
                                <option value='CHQ'>Chuquisaca</option>
                                <option value='ORU'>Oruro</option>
                                <option value='TJA'>Tarija</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-default submit_btn">Buscar</button>                       
                    </form>
                </div>
            </div>
        </div>
    </div>

    
    <!-- ***** Blog Area Start ***** -->
    <div class="blog_area section_padding_100_70" style = "background-color: #d6dfed!important">
        <div class="container">
            <h3 style="border-left-color: #9eb0ca ; border-left-style: solid;">&nbsp; Ofertas</h3>
            <hr>
            <div class="row">
                <!-- Single News Area Start -->
                <?php $arrayOfertas = array();
                $arrayOfertas = $proveedoresClass->getPromocionPorID(1);
                for ($j=0; $j < count($arrayOfertas); $j++) {   
                    ?>
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="single_latest_news_area m-bottom-15">
                            <div class="single_latest_news_img_area">
                                <a href="services/puente.php?proUid=<?php echo $arrayOfertas[$j]['PRO_UID']; ?>&proNombreCarpeta=<?php echo $arrayOfertas[$j]['PRO_NOMBRE']; ?>"><img style ="width:100%;" src="system/<?php echo $arrayOfertas[$j]['PROMOCION_IMAGEN']; ?>" alt=""></a>
                                <!-- Catagory -->
                                <a href="#" class="news-catagory bg-primary" style="font-size:20px"><?php echo utf8_encode($arrayOfertas[$j]['PROMOCION_VALOR_DESCUENTO']); ?></a>
                            </div>
                            <div class="single_latest_news_text_area p-15" style ="font-size:18px; background-color: #fff!important">
                                <a class="news-headline" href="services/puente.php?proUid=<?php echo $aProveedorCat[$j]['PRO_UID']; ?>&proNombreCarpeta=<?php echo $aProveedorCat[$j]['PRO_NOMBRE']; ?>"><?php echo utf8_encode($arrayOfertas[$j]['PRO_NOMBRE']); ?></a>
                                <div class="post-meta">
                                    <a style="text-decoration: line-through;" href="#"><i class="fa fa-times" aria-hidden="true"></i> <?php echo utf8_encode($arrayOfertas[$j]['PROMOCION_PRECIO_ANTIGUO']); ?> Bs</a>
                                    <a><i class="fa fa-check" aria-hidden="true"></i> <?php echo utf8_encode($arrayOfertas[$j]['PROMOCION_PRECIO_NUEVO']); ?> Bs</a>
                                    <a><i class="fa fa-clock-o" aria-hidden="true"></i> Valido hasta el <?php echo utf8_encode($arrayOfertas[$j]['PROMOCION_FECHA_VENCIMIENTO_FORMATO']); ?></a>
                                </div>
                                <p style="font-weight: 100; font-size:16px"><?php echo utf8_encode($arrayOfertas[$j]['PROMOCION_DESCRIPCION']); ?></p>
                                <p style="font-weight: 100; font-size:16px">Dejanos un mensaje con tus dudas: 
                                    <a target = "_blank" href='https://api.whatsapp.com/send?phone=<?php echo $arrayOfertas[0]['PRO_WHATSAPP']; ?>&text=Hola, deseo saber más sobre la promoción "<?php echo utf8_encode($arrayOfertas[$j]['PROMOCION_DESCRIPCION']); ?>"'>&nbsp;<i style = "font-size: 25px;" class="fa fa-whatsapp" aria-hidden="true"></i></a></p>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>                
                </div>
            </div>
        </div>
        <!-- ***** Blog Area End ***** -->
        

        <div role="dialog" tabindex="-1" id="advisor_details1" class="modal fade in animated slideInDown">
            <div role="document" class="modal-dialog">
                <div class="modal-content">
                    <!-- Modal Head Start -->
                    <div class="modal-header">
                        <h5 class="modal-title" id="teammodelhead">Riya Islam</h5>
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
                                            <img src="system/<?php echo $arrayOfertas[$j]['PROMOCION_IMAGEN']; ?>" alt="">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <!--  Gallery Details Info -->
                                        <div class="single_team_advisor_info">
                                            <!-- Headline -->
                                            <div class="team_name">
                                                <h5>Full Name: Riya Islam</h5>
                                                <h5>Nick Name: Riya</h5>
                                                <h6>Designation: Trainer</h6>
                                            </div>
                                            <!-- Description -->
                                            <div class="description">
                                                <p>Classy is completely creative, clean &amp; 100% responsive website. Put your business into next level with classy.</p>
                                            </div>
                                            <!-- live preview button -->
                                            <div class="live_preview">
                                                <a class="btn btn-pill btn-flat-pumpkin" href="#">Contact with Riya Islam</a>
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
        

        <!-- Empresas Section -->
        <section>
            <div class="de-popular-wrapper" style = "background-color: #d6dfed!important">
                <div class="container">
                    <h3 style="border-left-color: #9eb0ca ; border-left-style: solid;">&nbsp; Empresas</h3>
                    <hr>
                    <div class="de-popular-wrap">
                        <div class="row">                    
                            <?php 
                            $proveedoresClass  = new proveedoresClass();
                            $arrayProveedores = array();
                            $arrayProveedores = $proveedoresClass->getProveedores();
                            for ($j=0; $j < count($arrayProveedores); $j++) { 
                                ?>
                                <div class="col-md-6">
                                    <div class="de-popular-place" style="background-color: #fff!important">
                                        <div class="popular-img">
                                            <a href="services/puente.php?proUid=<?php echo $arrayProveedores[$j]['PRO_UID']; ?>&proNombreCarpeta=<?php echo $arrayProveedores[$j]['PRO_NOMBRE_CARPETA']; ?>" class="img-place" title="BIGWork">
                                                <img src="system/<?php echo $arrayProveedores[$j]['PRO_IMAGEN_LOGO']; ?>" alt="BIGWork" title="BIGWork">
                                            </a>
                                        </div>
                                        <div class="popular-info" style="background-color: #fff!important">
                                            <div class="popular-title">
                                                <h2>
                                                    <a href="services/puente.php?proUid=<?php echo $arrayProveedores[$j]['PRO_UID']; ?>&proNombreCarpeta=<?php echo $arrayProveedores[$j]['PRO_NOMBRE_CARPETA']; ?>"><?php echo utf8_encode($arrayProveedores[$j]['PRO_NOMBRE']); ?></a>
                                                </h2>
                                                <div style = 'color:#F1C40F;' class="rate-it" data-score="3" title="gorgeous"><i data-alt="1" class="fa fa-star star-on-png" title="gorgeous"></i>&nbsp;<i data-alt="2" class="fa fa-star star-on-png" title="gorgeous"></i>&nbsp;<i data-alt="3" class="fa fa-star star-on-png" title="gorgeous"></i>&nbsp;<i data-alt="4" class="fa fa-star star-on-png" title="gorgeous"></i>&nbsp;<i data-alt="5" class="fa fa-star star-on-png" title="gorgeous"></i><input name="score" type="hidden" value="2" readonly=""></div>
                                            </div>
                                            <div class="popular-address">
                                                <p><i class="fa fa-phone"></i><?php echo utf8_encode($arrayProveedores[$j]['PRO_TELEFONOS']); ?></p>
                                                <p><i class="fa fa-map-marker"></i><?php echo utf8_encode($arrayProveedores[$j]['PRO_DIRECCION']); ?></p>
                                                <p><i class="fa fa-envelope"></i><?php echo utf8_encode($arrayProveedores[$j]['PRO_EMAIL']); ?></p>         
                                            </div>
                                            <div style="margin-top: 20px; float:right;">
                                                <a style="padding-left: 20px;" class="float-left" href="http://www.facebook.com/<?php echo $arrayProveedores[$j]['PRO_MESSENGER']; ?>" target="_blank"><img src="img/fb.png" width="20" height="20"></a>
                                                <a style="padding-left: 20px;" href="http://m.me/<?php echo $arrayProveedores[$j]['PRO_MESSENGER']; ?>" target="_blank"><img src="img/msg.png" width="20" height="20"></a>
                                                <a style="padding-left: 20px;" class = "float-left" href="https://api.whatsapp.com/send?phone=<?php echo $arrayProveedores[$j]['PRO_WHATSAPP']; ?>&text=Hola, quiero contactarme con ustedes!" target="_blank"><img src="img/wpp.png" width="20" height="20"></a>           
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
        <!-- En Empresas Section -- >

            <!-- Footer Area Start -->
            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <aside id="nav_menu-2" class="widget widget_nav_menu"><h2 class="widgettitle">OUR COMPANY</h2><div class="menu-footer-1-container"><ul id="menu-footer-1" class="menu"><li id="menu-item-73" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-73"><a href="https://directoryengine.enginethemes.com/about-us/">About Us</a></li>
                                <li id="menu-item-72" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-72"><a href="https://directoryengine.enginethemes.com/private-policy/">Private &amp; Policy</a></li>
                                <li id="menu-item-71" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-71"><a href="https://directoryengine.enginethemes.com/terms-of-service/">Terms of Service</a></li>
                                <li id="menu-item-74" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-74"><a href="https://directoryengine.enginethemes.com/blog/">Blog</a></li>
                            </ul></div></aside>                </div>
                            <div class="col-md-3 col-sm-6">
                                <aside id="text-2" class="widget widget_text"><h2 class="widgettitle">CONTACT US</h2>           <div class="textwidget"><strong>EngineThemes</strong>


                                    <a href="mailto:contact@enginethemes.com" target="_top">contact@enginethemes.com</a>

                                    <a href="https://www.enginethemes.com/" target="_blank" data-saferedirecturl="https://www.google.com/url?hl=en&amp;q=https://www.enginethemes.com/&amp;source=gmail&amp;ust=1486104326989000&amp;usg=AFQjCNFfnV4yaZN-5T1fZOndLr9kh8KskA">https://www.enginethemes.com</a></div>
                                </aside>                </div>
                                <div class="col-md-3 col-sm-6">
                                    <aside id="de-social-2" class="widget de-social"><h2 class="widgettitle">KEEP IN TOUCH</h2>         <ul class="social-list-footer">
                                        <li><a href="https://www.facebook.com/EngineThemes/?fref=ts" class="facebook-icon"><i class="fa fa-facebook" aria-hidden="true"></i><span>FaceBook</span></a></li> 
                                        <li><a href="https://twitter.com/enginewpthemes" class="twitter-icon"><i class="fa fa-twitter" aria-hidden="true"></i>Twitter</a></li>
                                        <li><a href="https://plus.google.com/+EngineThemes" class="google-plus-icon"><i class="fa fa-google-plus" aria-hidden="true"></i>Google plus</a></li>
                                    </ul>
                                </aside>                </div>
                                <div class="col-md-3 col-sm-6">
                                    <aside id="meta-3" class="widget widget_meta"><h2 class="widgettitle">Link</h2>         <ul>
                                        <li><a href="https://directoryengine.enginethemes.com/wp-login.php?action=register">Register</a></li>           <li><a href="https://directoryengine.enginethemes.com/wp-login.php">Log in</a></li>
                                        <li><a href="https://directoryengine.enginethemes.com/feed/">Entries <abbr title="Really Simple Syndication">RSS</abbr></a></li>
                                        <li><a href="https://directoryengine.enginethemes.com/comments/feed/">Comments <abbr title="Really Simple Syndication">RSS</abbr></a></li>
                                        <li><a href="https://wordpress.org/" title="Powered by WordPress, state-of-the-art semantic personal publishing platform.">WordPress.org</a></li>           </ul>
                                    </aside>                </div>
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