<?php
$helper = new Helper();
$page = $helper->getPage();
$class = '';
$classNoticia = '';
$classRRHH = '';
$classPromocion = '';
$classVariedad = '';
$classClipping = '';
$megaMenu = $helper->getHeaderMenuNews();
switch ($page[0]) {
    case 'noticia':
        $classNoticia = 'active';
        break;
    case 'rrhh':
        $classRRHH = 'class="active"';
        break;
    case 'promocion':
        $classPromocion = 'class="active"';
        break;
    case 'variedad':
        $classVariedad = 'class="active"';
        break;
    case 'clipping':
        $classClipping = 'class="active"';
        break;
    default :
        $class = 'class="active"';
}
?>
<!DOCTYPE html> 
<html lang="es"> 
    <head> 
        <meta charset="UTF-8"> 
        <meta name="description" content="<?= $this->description; ?>"> 
        <meta name="author" content="Desarrollo MKT"> 
        <!-- Mobile Metas -->         
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <!-- Site Title  -->         
        <title><?= $this->title; ?></title>         
        <!-- Favicon -->         
        <link rel="shortcut icon" href="<?= URL; ?>public/<?= URL; ?>public/img/favicon.png" type="image/x-icon" /> 
        <!-- Web Fonts  -->         
        <!--<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed%7CRoboto+Slab:300,400,700%7CRoboto:300,400,500,700" rel="stylesheet">--> 
        <!-- Stylesheets -->         
        <link rel="stylesheet" href="<?= URL; ?>public/css/bootstrap.min.css"> 
        <link rel="stylesheet" href="<?= URL; ?>public/css/main.css"> 
        <link rel="stylesheet" href="<?= URL; ?>public/css/custom.css"> 
        <link rel="stylesheet" href="<?= URL; ?>public/css/style.css">
        <link rel="stylesheet" href="<?= URL; ?>public/css/colors.css"> 
        <link rel="stylesheet" href="<?= URL; ?>public/css/responsive.css"> 
        <link rel="stylesheet" href="<?= URL; ?>public/css/jquery-ui.min.css"> 
        <link rel="stylesheet" href="<?= URL; ?>public/css/weather-icons.min.css"> 
        <link rel="stylesheet" href="<?= URL; ?>public/css/lightbox.css"> 
        <!-- bootstrap datepicker -->
        <link rel="stylesheet" href="<?= URL; ?>public/css/datepicker3.css">
        <!--[if lt IE 9]>
      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
      <![endif]-->         
        <link rel="stylesheet" href="<?= URL; ?>public/font-awesome/css/font-awesome.min.css">
        <script src="<?= URL; ?>public/js/jquery-3.1.1.min.js"></script> 
    </head>     
    <body> 
        <div id="pageloader"> 
            <div class="loader-item"> 
                <img src="<?= URL; ?>public/img/load.gif" alt='loader' /> 
            </div>             
        </div>         
        <!--========== BEGIN #WRAPPER ==========-->         
        <div id="wrapper" data-color="red"> 
            <!--========== BEGIN #HEADER ==========-->             
            <header id="header"> 
                <!-- Begin .top-menu -->                 
                <div class="top-menu" wp-site-content> 
                    <!-- Begin .container -->                     
                    <div class="container"> 
                        <!-- Begin .right-top-menu -->                         
                        <ul class="right-top-menu pull-right"> 
                            <li> 
                                <div class="search-container"> 
                                    <div class="search-icon-btn"> 
                                        <span style="cursor:pointer" class="btnBusqueda"><i class="fa fa-search"></i></span> 
                                    </div>                                     
                                    <div class="search-input"> 
                                        <input type="search" class="search-bar inputBusqueda" placeholder="Buscar..." title="Buscar" /> 
                                    </div>                                     
                                </div>                                 
                            </li>                             
                        </ul>                         
                        <!-- End .right-top-menu -->                         
                    </div>                     
                    <!-- End .container -->                     
                </div>                 
                <!-- End .top-menu -->                 
                <!-- Begin .container -->                 
                <div class="container"> 
                    <!-- Begin .header-logo -->                     
                    <div class="header-logo">
                        <a href="<?= URL; ?>">
                            <img src="<?= URL; ?>public/img/Garden_Grupo_sin fondo.png" alt="Info-News" style="width: 65px;" /> 
                            <h1>Info <span>News</span></h1> 
                            <h4>Portal Interno del Grupo Garden</h4>
                        </a>
                    </div>                     
                    <!-- End .header-logo -->                     
                    <!--========== BEGIN .NAVBAR #MOBILE-NAV ==========-->                     
                    <nav class="navbar navbar-default" id="mobile-nav" style="z-index: 9999;"> 
                        <div class="navbar-header"> 
                            <button type="button" class="navbar-toggle" data-toggle="collapse" id="sidenav-toggle"> 
                                <span class="icon-bar"></span> 
                                <span class="icon-bar"></span> 
                                <span class="icon-bar"></span> 
                            </button>                             
                            <div class="sidenav-header-logo">
                                <a href="<?= URL; ?>">
                                    <img src="<?= URL; ?>public/img/logo.png" alt="Info News" /> 
                                    <h2>Info <span>News</span></h2> 
                                    <h5>Portal del Grupo Garden</h5> 
                                </a>
                            </div>                             
                        </div>                         
                        <div class="sidenav" data-sidenav data-sidenav-toggle="#sidenav-toggle"> 
                            <button type="button" class="navbar-toggle active" data-toggle="collapse"> 
                                <span class="icon-bar"></span> 
                                <span class="icon-bar"></span> 
                                <span class="icon-bar"></span> 
                            </button>                             
                            <div class="sidenav-brand"> 
                                <div class="sidenav-header-logo">
                                    <a href="<?= URL; ?>">
                                        <img src="<?= URL; ?>public/img/logo.png" alt="Info News" /> 
                                        <h2>Info <span>News</span></h2> 
                                        <h5>Portal del Grupo Garden</h5> 
                                    </a>
                                </div>                                 
                            </div>                             
                            <ul class="sidenav-menu"> 
                                <li <?= $class ?>>
                                    <a href="<?= URL; ?>">Inicio</a>
                                </li>   
                                <li class="<?= $classNoticia ?>">
                                    <a href="<?= URL; ?>noticia/listado">Noticias</a> 
                                </li>   
                                <li <?= $classPromocion; ?>>
                                    <a href="<?= URL; ?>promocion/listado">Clasificados</a> 
                                </li>
                                <li <?= $classClipping; ?>>
                                    <a href="<?= URL; ?>clipping/listado">Clipping</a>
                                </li>    
                                <li <?= $classVariedad; ?>>
                                    <a href="<?= URL; ?>variedad/listado">Proximamente</a> 
                                </li> 
                                <li <?= $classRRHH; ?>>
                                    <a href="<?= URL; ?>rrhh/listado">Recursos Humanos</a> 
                                </li>                            
                            </ul>                             
                        </div>                         
                    </nav>                     
                    <!--========== END .NAVBAR #MOBILE-NAV ==========-->                     
                </div>                 
                <!-- End .container -->                 
                <!--========== BEGIN .NAVBAR #FIXED-NAVBAR ==========-->                 
                <div class="navbar" id="fixed-navbar" style="z-index: 9999;"> 
                    <!--========== BEGIN MAIN-MENU .NAVBAR-COLLAPSE COLLAPSE #FIXED-NAVBAR-TOOGLE ==========-->                     
                    <div class="main-menu nav navbar-collapse collapse" id="fixed-navbar-toggle"> 
                        <!--========== BEGIN .CONTAINER ==========-->                         
                        <div class="container"> 
                            <!-- Begin .nav navbar-nav -->                             
                            <ul class="nav navbar-nav"> 
                                <li <?= $class ?>>
                                    <a href="<?= URL; ?>">Inicio</a>
                                </li>   
                                <li class="dropdown mega-dropdown <?= $classNoticia ?>">
                                    <a href="<?= URL; ?>noticia/listado" class="dropdown-toggle" data-toggle="dropdown">Noticias</a> 
                                    <ul class="dropdown-menu mega-dropdown-menu"> 
                                        <!-- Begin col-sm-4-->                                         
                                        <li class="col-sm-4" style="overflow: hidden"> 
                                            <a href="<?= URL; ?>noticia/publicacion/<?= $megaMenu['principal']['id'] ?>/<?= $helper->cleanUrl($megaMenu['principal']['titulo']) ?>">
                                                <h3 class="title"><?= $megaMenu['principal']['titulo'] ?></h3>
                                            </a>
                                            <!-- Begin carousel-1-->                                             
                                            <div id="carousel-1" class="nav-slider carousel slide slide-carousel" data-ride="carousel"> 
                                                <!-- Begin carousel-inner-->                                                 
                                                <div class="carousel-inner"> 
                                                    <div class="item active"> 
                                                        <a href="<?= URL; ?>noticia/publicacion/<?= $megaMenu['principal']['id'] ?>/<?= $helper->cleanUrl($megaMenu['principal']['titulo']) ?>">
                                                            <img src="<?= URL; ?>public/img/slider/<?= $megaMenu['principal']['img'] ?>" alt="<?= $megaMenu['principal']['img'] ?>" style=" width: 373px;">
                                                        </a>                                                         
                                                    </div>                                                     
                                                </div>                                                 
                                                <!-- End carousel-inner-->                                                 
                                            </div>                                             
                                            <!-- End carousel-1-->                                             
                                        </li>                                         
                                        <!-- End col-sm-4 -->                                         
                                        <!-- Begin col-sm-4 -->                                         
                                        <li class="col-sm-4"> 
                                            <h3>Últimas noticias</h3> 
                                            <ul class="media-list">
                                                <?php foreach ($megaMenu['noticias'] as $item): ?>
                                                    <li class="media"> 
                                                        <a class="pull-right" href="<?= URL; ?>noticia/publicacion/<?= $item['id'] ?>/<?= $helper->cleanUrl($item['titulo']) ?>">
                                                            <img class="img-responsive" alt="<?= $item['img'] ?>" src="<?= URL; ?>public/img/marcas/<?= $item['img'] ?>" style=" width: 76px;">
                                                        </a>                                                     
                                                        <div class="media-body"> 
                                                            <p>
                                                                <a href="<?= URL; ?>noticia/publicacion/<?= $item['id'] ?>/<?= $helper->cleanUrl($item['titulo']) ?>" target="_blank"><span class="bg-1"><?= utf8_encode($item['marca']) ?></span></a>
                                                                <a href="<?= URL; ?>noticia/publicacion/<?= $item['id'] ?>/<?= $helper->cleanUrl($item['titulo']) ?>" target="_blank"><?= utf8_encode($item['titulo']) ?></a>
                                                            </p> 
                                                        </div>                                                     
                                                    </li>
                                                <?php endforeach; ?>
                                            </ul>                                             
                                        </li>                                         
                                        <!-- End col-sm-4 -->                                         
                                        <!-- Begin col-sm-8 -->                                         
                                        <li class="col-sm-10"> 
                                            <a href="<?= URL; ?>noticia/listado"><h3>Ver todas las noticias</h3></a>
                                        </li>                                         
                                        <!-- End col-sm-8 -->                                         
                                    </ul>   
                                </li> 
                                <li <?= $classPromocion; ?>>
                                    <a href="<?= URL; ?>promocion/listado">Clasificados</a> 
                                </li>
                                <li <?= $classClipping; ?>>
                                    <a href="<?= URL; ?>clipping/listado">Clipping</a>
                                </li>    
                                <li <?= $classVariedad; ?>>
                                    <a href="<?= URL; ?>variedad/listado">Proximamente</a> 
                                </li> 
                                <li <?= $classRRHH; ?>>
                                    <a href="<?= URL; ?>rrhh/listado">Recursos Humanos</a> 
                                </li>
                            </ul>                             
                            <!--========== END .NAV NAVBAR-NAV ==========-->                             
                        </div>                         
                        <!--========== END .CONTAINER ==========-->                         
                    </div>                     
                    <!--========== END MAIN-MENU .NAVBAR-COLLAPSE COLLAPSE #FIXED-NAVBAR-TOOGLE ==========-->                     
                </div>                 
            </header> 