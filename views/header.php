<?php
$helper = new Helper();
$page = $helper->getPage();
$class = '';
$classNoticia = '';
$classRRHH = '';
$classPromocion = '';
switch ($page[0]) {
    case 'noticia':
        $classNoticia = 'class="active"';
        break;
    case 'rrhh':
        $classRRHH = 'class="active"';
        break;
    case 'promocion':
        $classPromocion = 'class="active"';
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
        <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed%7CRoboto+Slab:300,400,700%7CRoboto:300,400,500,700" rel="stylesheet"> 
        <!-- Stylesheets -->         
        <link rel="stylesheet" href="<?= URL; ?>public/css/bootstrap.min.css"> 
        <link rel="stylesheet" href="<?= URL; ?>public/css/main.css"> 
        <link rel="stylesheet" href="<?= URL; ?>public/css/style.css">
        <link rel="stylesheet" href="<?= URL; ?>public/css/colors.css"> 
        <link rel="stylesheet" href="<?= URL; ?>public/css/responsive.css"> 
        <link rel="stylesheet" href="<?= URL; ?>public/css/jquery-ui.min.css"> 
        <link rel="stylesheet" href="<?= URL; ?>public/css/weather-icons.min.css"> 
        <!--[if lt IE 9]>
      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
      <![endif]-->         
        <link rel="stylesheet" href="<?= URL; ?>public/font-awesome/css/font-awesome.min.css">
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
                                        <span style="cursor:pointer"><i class="fa fa-search"></i></span> 
                                    </div>                                     
                                    <div class="search-input"> 
                                        <input type="search" class="search-bar" placeholder="Buscar..." title="Buscar" /> 
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
                            <img src="<?= URL; ?>public/img/logo.png" alt="Info-News" /> 
                            <h1>Info <span>News</span></h1> 
                            <h4>Portal del Grupo Garden</h4>
                        </a>
                    </div>                     
                    <!-- End .header-logo -->                     
                    <!--========== BEGIN .NAVBAR #MOBILE-NAV ==========-->                     
                    <nav class="navbar navbar-default" id="mobile-nav"> 
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
                                <li <?= $classNoticia ?>>
                                    <a href="<?= URL; ?>noticia/listado">Noticias</a> 
                                </li>  
                                <li <?= $classRRHH; ?>>
                                    <a href="<?= URL; ?>rrhh/listado">Recursos Humanos</a> 
                                </li> 
                                <li>
                                    <a href="<?= URL; ?>promocion/listado">Promociones</a> 
                                </li>                                 
                                <li>
                                    <a href="<?= URL; ?>clipping/listado">Clipping</a>
                                </li>                                 
                            </ul>                             
                        </div>                         
                    </nav>                     
                    <!--========== END .NAVBAR #MOBILE-NAV ==========-->                     
                </div>                 
                <!-- End .container -->                 
                <!--========== BEGIN .NAVBAR #FIXED-NAVBAR ==========-->                 
                <div class="navbar" id="fixed-navbar"> 
                    <!--========== BEGIN MAIN-MENU .NAVBAR-COLLAPSE COLLAPSE #FIXED-NAVBAR-TOOGLE ==========-->                     
                    <div class="main-menu nav navbar-collapse collapse" id="fixed-navbar-toggle"> 
                        <!--========== BEGIN .CONTAINER ==========-->                         
                        <div class="container"> 
                            <!-- Begin .nav navbar-nav -->                             
                            <ul class="nav navbar-nav"> 
                                <li <?= $class ?>>
                                    <a href="<?= URL; ?>">Inicio</a>
                                </li>                                 
                                <li <?= $classNoticia ?>>
                                    <a href="<?= URL; ?>noticia/listado">Noticias</a> 
                                </li>   
                                <li <?= $classRRHH; ?>>
                                    <a href="<?= URL; ?>rrhh/listado">Recursos Humanos</a> 
                                </li>
                                <li>
                                    <a href="<?= URL; ?>promocion/listado">Promociones</a> 
                                </li>                                 
                                <li>
                                    <a href="<?= URL; ?>clipping/listado">Clipping</a>
                                </li>                                 
                            </ul>                             
                            <!--========== END .NAV NAVBAR-NAV ==========-->                             
                        </div>                         
                        <!--========== END .CONTAINER ==========-->                         
                    </div>                     
                    <!--========== END MAIN-MENU .NAVBAR-COLLAPSE COLLAPSE #FIXED-NAVBAR-TOOGLE ==========-->                     
                </div>                 
            </header> 