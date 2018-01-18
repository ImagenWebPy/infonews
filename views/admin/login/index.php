<div class="login-box">
    <div class="login-logo">
        <a href="#"><img src="<?= URL; ?>public/img/Garden_Grupo_sin fondo.png" style="width: 30%;"></a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Inicie Sesión para Ingresar</p>
        <?php if (isset($_SESSION['loggedInError'])): ?>
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> Error!</h4>
                Lo sentimos, el usuario o la contraseña ingresada no coinciden.
            </div>
        <?php endif; ?>
        <form action="<?= URL; ?>login/iniciar" method="post">
            <div class="form-group has-feedback">
                <input type="email" class="form-control" name="login[email]" placeholder="Email">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" name="login[password]" placeholder="Password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
                <!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Iniciar</button>
                </div>
                <!-- /.col -->
            </div>
        </form>
    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
<?php
$_SESSION['loggedInError'] = NULL;
?>