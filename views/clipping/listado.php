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
            <div class="row no-gutter"> 
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
    </section>
</section>
<script type="text/javascript">
    $(function () {
        $('#datepicker').datepicker({
            autoclose: true,
            format: "dd-mm-yyyy"
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
    });
</script>