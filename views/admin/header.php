<?php
$helper = new Helper();
$page = $helper->getPage();
$classContenido = $classPromocion = $classClipping = $classDashboard = $classClippingRevista = '';
$classDashboard = 'class="active"';
if (!empty($page[1])) {
    switch ($page[1]) {
        case 'contenido':
            $classContenido = 'class="active"';
            $classDashboard = '';
            break;
        case 'promocion':
            $classPromocion = 'class="active"';
            $classDashboard = '';
            break;
        case 'clipping':
            $classClipping = 'class="active"';
            $classDashboard = '';
            break;
        case 'clipping_revista':
            $classClippingRevista = 'class="active"';
            $classDashboard = '';
            break;
        default :
            $classDashboard = 'class="active"';
            break;
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?= ADMIN_TITLE . $this->title ?></title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="<?= URL; ?>public/admin/bootstrap/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?= URL; ?>public/admin/plugins/font-awesome/css/font-awesome.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?= URL; ?>public/admin/dist/css/AdminLTE.min.css">
        <!-- LTE Skin BLUE-->
        <link rel="stylesheet" href="<?= URL; ?>public/admin/dist/css/skins/skin-blue.min.css">
        <!--Custom-->
        <link rel="stylesheet" href="<?= URL; ?>public/admin/dist/css/custom.css">
        <?php
        #cargamos los css de las vistas
        if (isset($this->css)) {
            foreach ($this->css as $css) {
                echo '<link rel="stylesheet" href="' . URL . 'views/' . $css . '" type="text/css">';
            }
        }
        if (isset($this->public_css)) {
            foreach ($this->public_css as $public_css) {
                echo '<link rel="stylesheet" href="' . URL . 'public/' . $public_css . '" type="text/css">';
            }
        }
        ?>
        <!-- jQuery 2.2.3 -->
        <script src="<?= URL; ?>public/admin/plugins/jQuery/jquery-2.2.3.min.js"></script>
        <?php
        if (isset($this->publicHeader_js)) {
            foreach ($this->publicHeader_js as $public_js) {
                echo '<script type="text/javascript" src="' . URL . 'public/' . $public_js . '"></script>';
            }
        }
        ?>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">

            <header class="main-header">
                <!-- Logo -->
                <a href="<?= URL; ?>admin/" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><b>Admin</b></span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><b>Admin</b>istrador</span>
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <!-- Tasks: style can be found in dropdown.less -->
                            <!-- User Account: style can be found in dropdown.less -->
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="<?= URL; ?>public/admin/img/user-image.png" class="user-image" alt="User Image">
                                    <span class="hidden-xs"><?= $_SESSION['usuario']['nombre']; ?></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <li class="user-header">
                                        <img src="<?= URL; ?>public/admin/img/user-image.png" class="img-circle" alt="User Image">
                                        <p><?= $_SESSION['usuario']['nombre']; ?></p>
                                    </li>
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-right">
                                            <a href="<?= URL; ?>login/salir/" class="btn btn-danger btn-flat"><i class="fa fa-sign-out" aria-hidden="true"></i> Salir</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <!-- Control Sidebar Toggle Button -->
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <ul class="sidebar-menu">
                        <li class="header">MENU PRINCIPAL</li>
                        <li <?= $classDashboard; ?>><a href="<?= URL; ?>admin/"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
                        <li <?= $classContenido; ?>><a href="<?= URL; ?>admin/contenido"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> <span>Contenidos</span></a></li>
                        <li <?= $classPromocion; ?>><a href="<?= URL; ?>admin/promocion"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> <span>Promociones</span></a></li>
                        <li <?= $classClipping; ?>><a href="<?= URL; ?>admin/clipping"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> <span>Clipping</span></a></li>
                        <li <?= $classClippingRevista; ?>><a href="<?= URL; ?>admin/clipping_revista"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> <span>Clipping Revistas</span></a></li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>