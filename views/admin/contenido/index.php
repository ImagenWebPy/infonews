<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Contenidos
            <small>Listado</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?= URL; ?>admin/"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li class="active">Contenidos</li>
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
                        <h3 class="box-title">Listado de Vehículos</h3>
                        <div class="col-xs-6 pull-right">
                            <button type="button" class="btn btn-block btn-primary btnAgregarMarca">Agregar Contenido</button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table class="table table-bordered table-striped" id="tblContenidos">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Título</th>
                                    <th>Categoría</th>
                                    <th>Destacado</th>
                                    <th>Orden</th>
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
                                    <th>Título</th>
                                    <th>Categoría</th>
                                    <th>Destacado</th>
                                    <th>Orden</th>
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
        $("#tblContenidos").DataTable({
            "aaSorting": [[0, "desc"]],
            "paging": true,
            "orderCellsTop": true,
            //"scrollX": true,
            //"scrollCollapse": true,
            "fixedColumns": true,
            "iDisplayLength": 25,
            "ajax": {
                "url": "<?= URL ?>admin/listadoDTContenidos/",
                "type": "post"
            },
            "columns": [
                {"data": "id"},
                {"data": "titulo"},
                {"data": "categoria"},
                {"data": "destacado"},
                {"data": "orden"},
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
                    url: "<?= URL; ?>admin/cambiarEstadoNoticias",
                    type: "post",
                    dataType: "json",
                    data: {
                        id: id,
                        estado: estadoActual
                    },
                    success: function (data) {
                        $('#contenido_' + data.id).html(data.content);
                    }
                }); //END AJAX
            }
            e.handled = true;
        });
        $(document).on("click", ".editDTContenido", function (e) {
            if (e.handled !== true) // This will prevent event triggering more then once
            {
                var id = $(this).attr("data-id");
                $.ajax({
                    url: "<?= URL; ?>admin/editarDTContenido",
                    type: "POST",
                    data: {id: id},
                    dataType: "json"
                }).done(function (data) {
                    $(".genericModal .modal-header").removeClass("modal-header").addClass("modal-header bg-primary");
                    $(".genericModal .modal-title").html(data['titulo']);
                    $(".genericModal .modal-body").html(data['contenido']);
                    $(".genericModal").modal("toggle");
                });
            }
            e.handled = true;
        });
        $(document).on("submit", "#frmEditarContenido", function (e) {
            var url = "<?= URL ?>admin/editarContenido"; // the script where you handle the form input.
            $.ajax({
                type: "POST",
                url: url,
                data: $("#frmEditarContenido").serialize(), // serializes the form's elements.
                success: function (data)
                {
                    $("#contenido_" + data.id).html(data.content);
                    $(".genericModal").modal("toggle");
                }
            });
            e.preventDefault(); // avoid to execute the actual submit of the form.
        });
    });
</script>