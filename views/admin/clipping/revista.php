<?php
$helper = new Helper();
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Clipping Revistas
            <small>Listado</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?= URL; ?>admin/"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li class="active">Clipping Revistas</li>
        </ol>
    </section>
    <section class="content">
        <?php
        if (isset($_SESSION['message'])) {
            echo $helper->messageAlert($_SESSION['message']['type'], $_SESSION['message']['mensaje']);
        }
        ?>
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Listado de Graficas</h3>
                        <div class="col-xs-6 pull-right">
                            <button type="button" class="btn btn-block btn-primary btnAgregarClippingRevista">Agregar Contenido</button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table class="table table-bordered table-striped" id="tblClippingRevista">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Imagen Tapa</th>
                                    <th>Imagen</th>
                                    <th>Revista</th>
                                    <th>Marca</th>
                                    <th>Fecha</th>
                                    <th>Estado</th>
                                    <th>Acción</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Imagen Tapa</th>
                                    <th>Imagen</th>
                                    <th>Revista</th>
                                    <th>Marca</th>
                                    <th>Fecha</th>
                                    <th>Estado</th>
                                    <th>Acción</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
        </div>
    </section>
</div>
<script type="text/javascript">
    $(function () {
        $("#tblClippingRevista").DataTable({
            "aaSorting": [[0, "desc"]],
            "paging": true,
            "orderCellsTop": true,
            //"scrollX": true,
            //"scrollCollapse": true,
            "fixedColumns": true,
            "iDisplayLength": 25,
            "ajax": {
                "url": "<?= URL ?>admin/listadoDTClippingRevista/",
                "type": "post"
            },
            "columns": [
                {"data": "id"},
                {"data": "imagen_tapa"},
                {"data": "imagen"},
                {"data": "revista"},
                {"data": "marca"},
                {"data": "fecha"},
                {"data": "estado"},
                {"data": "accion"}
            ],
            "language": {
                "url": "<?= URL ?>public/language/Spanish.json"
            }
        });
        $(document).on("click", ".btnCambiarEstado", function (e) {
            if (e.handled !== true) // This will prevent event triggering more then once
            {
                var id = $(this).attr("data-id");
                var estadoActual = $(this).attr("data-estado");
                $.ajax({
                    url: "<?= URL; ?>admin/cambiarEstadoClippingRevista",
                    type: "post",
                    dataType: "json",
                    data: {
                        id: id,
                        estado: estadoActual
                    },
                    success: function (data) {
                        $('#clippingRevista_' + data.id).html(data.content);
                    }
                }); //END AJAX
            }
            e.handled = true;
        });
        $(document).on("click", ".editDTClippingRevista", function (e) {
            if (e.handled !== true) // This will prevent event triggering more then once
            {
                var id = $(this).attr("data-id");
                $.ajax({
                    url: "<?= URL; ?>admin/editarDTClippingRevista",
                    type: "POST",
                    data: {id: id},
                    dataType: "json"
                }).done(function (data) {
                    $(".genericModal .modal-header").removeClass("modal-header").addClass("modal-header bg-primary");
                    $(".genericModal .modal-title").html(data.titulo);
                    $(".genericModal .modal-body").html(data.contenido);
                    $(".genericModal").modal("toggle");
                });
            }
            e.handled = true;
        });
        $(document).on("submit", "#frmEditarClippingRevista", function (e) {
            var url = "<?= URL ?>admin/editarClippingRevista"; // the script where you handle the form input.
            $.ajax({
                type: "POST",
                url: url,
                data: $("#frmEditarClippingRevista").serialize(), // serializes the form's elements.
                success: function (data)
                {
                    $("#clippingRevista_" + data.id).html(data.content);
                    $(".genericModal").modal("toggle");
                }
            });
            e.preventDefault(); // avoid to execute the actual submit of the form.
        });
        $(document).on("click", ".btnAgregarClippingRevista", function (e) {
            if (e.handled !== true) // This will prevent event triggering more then once
            {
                $.ajax({
                    url: "<?= URL; ?>admin/modalAgregarClippingRevista",
                    type: "POST",
                    dataType: "json"
                }).done(function (data) {
                    $(".genericModal .modal-header").removeClass("modal-header").addClass("modal-header bg-primary");
                    $(".genericModal .modal-title").html(data.titulo);
                    $(".genericModal .modal-body").html(data.contenido);
                    $(".genericModal").modal("toggle");
                });
            }
            e.handled = true;
        });
    });
</script>