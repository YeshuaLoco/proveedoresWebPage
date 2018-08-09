<!-- ***** Header Area Start ***** -->
<header class="header_area">
        <div class="main_header_area animated">
            <div class="container" width="100%">
                <nav id="navigation1" class="navigation" width="92%">
                    <!-- Logo Area Start -->
                    <div class="nav-header">
                    <a class="nav-brand" href="index.php"><img src="img/page/ofertas_white.png" style="height: 70px; width:190px"/></a>
                        <div class="nav-toggle"></div>
                    </div>                   
                    <!-- Main Menus Wrapper -->
                    <div class="nav-menus-wrapper">
                        <ul class="nav-menu align-to-right">
                            <li><a href="index.php" target="_self">Inicio</a></li>
                            <li><a href="#">Categorias</a>
                                <ul class="nav-dropdown">
                                <?php
                                $proveedoresClass  = new proveedoresClass();
                                $arrayCategories = array();
                                $arrayCategories = $proveedoresClass->getCategories();
                                for ($i=0;$i<count($arrayCategories);$i++) {                                
                                ?>
                                    <li><a href="#"><?php echo utf8_encode($arrayCategories[$i]['CAT_NOMBRE']);  ?></a>
                                        <ul class="nav-dropdown">
                                            <?php 
                                                $catUid = $arrayCategories[$i]['CAT_UID'];
                                                $aProveedorCat = $proveedoresClass->getProveedoresPorCategoria($catUid);
                                                
                                                for ($j=0;$j<count($aProveedorCat);$j++) {  ?>
                                                    <li><a href="services/puente.php?proUid=<?php echo $aProveedorCat[$j]['PRO_UID']; ?>&proNombreCarpeta=<?php echo $aProveedorCat[$j]['PRO_NOMBRE']; ?>" target="_blank"><?php echo $aProveedorCat[$j]['PRO_NOMBRE']; ?></a></li>
                                            <?php } ?>
                                        </ul>
                                    </li>
                                <?php
                                }
                                ?>
                                |   <!--
                                    <li><a href="#">Servicios</a>
                                        <ul class="nav-dropdown">
                                            <li><a href="index-spa.php" target="_self">Reparaciones Aguilar</a></li>
                                            <li><a href="index-spa.php" target="_self">Catering World</a></li>
                                            <li><a href="index-spa.php" target="_self">Motoquero Veloz</a></li>
                                            <li><a href="index-spa.php" target="_self">Transporte Copacabana</a></li>
                                            <li><a href="index-spa.php" target="_self">Sonido y &amp; Amplificación </a></li>
                                            <li><a href="index-spa.php" target="_self">Imprenta</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Entretenimiento</a>
                                        <ul class="nav-dropdown">
                                            <li><a href="index-spa.php" target="_self">Animadores de Fiestas Illampu</a></li>
                                            <li><a href="index-spa.php" target="_self">Eventos Luz</a></li>
                                            <li><a href="index-spa.php" target="_self">Ganja Music</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Marketing y Publicidad</a>
                                        <ul class="nav-dropdown">
                                            <li><a href="coming-soon.php" target="_self">Imprenta Sagitario</a></li>
                                            <li><a href="coming-soon.php" target="_self">Flame</a></li>
                                        </ul>
                                    </li>    
                                    -->                                
                                </ul>
                            </li>                                                    
                            <li><a href="searchOferta.php" target="_target">Productos</a></li>
                            <li><a href="#contact" target="_self">Contacto</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->