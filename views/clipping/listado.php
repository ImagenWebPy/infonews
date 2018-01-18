<section id="main-section"> 
    <div class="container"> 
        <!-- Begin .breadcrumb-line -->
        <div class="breadcrumb-line">
            <p>&nbsp;</p>
        </div>
        <!-- End .breadcrumb-line --> 
    </div>
    <section class="module highlight">
        <div class="container">
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#diario" aria-controls="home" role="tab" data-toggle="tab">Diarios</a></li>
                <li role="presentation"><a href="#revista" aria-controls="profile" role="tab" data-toggle="tab">Revistas</a></li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="diario">
                    <div class="row no-gutter" style="margin-top: 15px;">
                        <!--========== BEGIN .COL-MD-12 ==========-->
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Seleccione una Fecha:</label>
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" class="form-control pull-right" id="datepicker">
                                </div>
                                <!-- /.input group -->
                            </div>
                        </div>
                        <div class="col-md-12" id="contenidoClipping">

                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="revista">
                    <div class="row no-gutter" style="margin-top: 15px;">
                        <!--========== BEGIN .COL-MD-12 ==========-->
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Seleccione un Mes:</label>
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" class="form-control pull-right" id="datepickerRevista">
                                </div>
                                <!-- /.input group -->
                            </div>
                        </div>
                        <div class="col-md-12" id="contenidoClippingRevista">

                        </div>
                    </div>
                </div>
            </div><!--/TAB-CONTENT-->
        </div>
    </section>
</section>
<script type="text/javascript">
    $(function () {
        $('#datepicker').datepicker({
            autoclose: true,
            format: "dd-mm-yyyy"
        });
        $('#datepickerRevista').datepicker({
            autoclose: true,
            format: "mm-yyyy",
            viewMode: "months",
            minViewMode: "months",
            language: "es"
        });
        $('#datepicker').on("changeDate", function (e) {
            if (e.handled !== true) // This will prevent event triggering more then once
            {
                var fecha = $(this).val();
                $.ajax({
                    url: "<?= URL; ?>clipping/filtrarClipping",
                    type: "post",
                    dataType: "json",
                    data: {
                        fecha: fecha
                    },
                    success: function (data) {
                        $("#contenidoClipping").html(data);
                    }
                }); //END AJAX
            }
            e.handled = true;
        });
        $('#datepickerRevista').on("changeDate", function (e) {
            if (e.handled !== true) // This will prevent event triggering more then once
            {
                var fecha = $(this).val();
                $.ajax({
                    url: "<?= URL; ?>clipping/filtrarClippingRevista",
                    type: "post",
                    dataType: "json",
                    data: {
                        fecha: fecha
                    },
                    success: function (data) {
                        $("#contenidoClippingRevista").html(data);
                    }
                }); //END AJAX
            }
            e.handled = true;
        });
    });
</script>