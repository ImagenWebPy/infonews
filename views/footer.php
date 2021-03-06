<?php
$helper = new Helper();
$page = $helper->getPage();
?>
<footer id="footer"> 
    <!-- Begin .parallax -->                 
    <div id="parallax-section2"> 
        <div class="bg parallax2 overlay img-overlay2"> 
            <div class="container"> 
                <div class="row no-gutter"> 
                    <div class="col-sm-6 col-md-3"> 
                        <h3 class="title-left title-style03 underline03">Noticias</h3> 
                        <div class="footer-post"> 
                            <ul> 
                                <?php foreach ($helper->getFooterNoticias() as $item): ?>
                                    <li> 
                                        <div class="item"> 
                                            <div class="item-image">
                                                <a class="img-link" href="<?= URL; ?>noticia/publicacion/<?= $item['id']; ?>/<?= $helper->cleanUrl(utf8_encode($item['titulo'])); ?>">
                                                    <img class="img-responsive img-full" src="<?= URL; ?>public/img/marcas/<?= utf8_encode($item['img']); ?>" alt="<?= utf8_encode($item['img']); ?>">
                                                </a>
                                            </div>                                                     
                                            <div class="item-content"> 
                                                <p class="ellipsis"><a href="<?= URL; ?>noticia/publicacion/<?= $item['id']; ?>/<?= $helper->cleanUrl(utf8_encode($item['titulo'])); ?>"><?= utf8_encode($item['titulo']); ?></a></p> 
                                            </div>                                                     
                                        </div>                                                 
                                    </li>
                                <?php endforeach; ?>
                            </ul>                                         
                        </div>                                     
                    </div>                                 
                    <!--                    <div class="col-sm-6 col-md-3"> 
                                            <h3 class="title-left title-style03 underline03">Promociones</h3> 
                                            <div class="footer-post"> 
                                                <ul>
                    <?php foreach ($helper->getFooterPromociones() as $item): ?>
                                                                <li> 
                                                                    <div class="item"> 
                                                                        <div class="item-image">
                                                                            <a class="img-link" href="<?= URL; ?>promocion/publicacion/<?= $item['id']; ?>/<?= $helper->cleanUrl(utf8_encode($item['titulo'])); ?>">
                                                                                <img class="img-responsive img-full" src="<?= URL; ?>public/img/promociones/<?= utf8_encode($item['img']); ?>" alt="<?= utf8_encode($item['img']); ?>">
                                                                            </a>
                                                                        </div>                                                     
                                                                        <div class="item-content"> 
                                                                            <p class="ellipsis"><a href="<?= URL; ?>promocion/publicacion/<?= $item['id']; ?>/<?= $helper->cleanUrl(utf8_encode($item['titulo'])); ?>"><?= utf8_encode($item['titulo']); ?></a></p> 
                                                                        </div>                                                     
                                                                    </div>                                                 
                                                                </li>                                             
                    <?php endforeach; ?>
                                                </ul>                                         
                                            </div>                                     
                                        </div>                                 -->
                    <div class="col-sm-6 col-md-3"> 
                        <h3 class="title-left title-style03 underline03">Recursos Humanos</h3> 
                        <div class="footer-post"> 
                            <ul>
                                <?php foreach ($helper->getFooterRRHH() as $item): ?> 
                                    <li> 
                                        <div class="item"> 
                                            <div class="item-image">
                                                <a class="img-link" href="<?= URL; ?>rrhh/publicacion/<?= $item['id']; ?>/<?= $helper->cleanUrl(utf8_encode($item['titulo'])); ?>">
                                                    <img class="img-responsive img-full" src="<?= URL; ?>public/img/rrhh/<?= utf8_encode($item['img']); ?>" alt="<?= utf8_encode($item['img']); ?>">
                                                </a>
                                            </div>                                                     
                                            <div class="item-content"> 
                                                <p class="ellipsis"><a href="<?= URL; ?>rrhh/publicacion/<?= $item['id']; ?>/<?= $helper->cleanUrl(utf8_encode($item['titulo'])); ?>"><?= utf8_encode($item['titulo']); ?></a></p> 
                                            </div>                                                     
                                        </div>                                                 
                                    </li>                                             
                                <?php endforeach; ?>
                            </ul>                                         
                        </div>                                     
                    </div>                                 
                    <div class="col-sm-6 col-md-6"> 
                        <h3 class="title-left title-style03 underline03">Tags</h3> 
                        <div class="tagcloud">
                            <?php foreach ($helper->getFooterTags() as $item): ?>
                                <a href="#"><?= utf8_encode($item); ?></a>
                            <?php endforeach; ?>
                        </div>                                     
                    </div>                                 
                </div>                             
            </div>                         
        </div>                     
    </div>                 
    <!-- End .parallax -->                 
</footer>             
<!--========== END #FOOTER==========-->             
<!--========== BEGIN #COPYRIGHTS==========-->             
<div id="copyrights"> 
    <!-- Begin .container -->                 
    <div class="container"> 
        <!-- Begin .copyright -->                     
        <div class="copyright"> Desarrollado por <a href="mailto:raul.ramirez@garden.com.py">GardenMKT</a></div>                     
        <!-- End .copyright -->                     
    </div>                 
    <!-- End .container -->                 
</div>             
<!--========== END #COPYRIGHTS==========-->             
</div>         
<!--========== END #WRAPPER ==========-->
<!-- Modal -->
<div class="modal fade genericModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<!-- /Modal -->
<!-- External JavaScripts -->         
<script src="<?= URL; ?>public/js/bootstrap.min.js"></script>         
<script src="<?= URL; ?>public/js/jquery-ui.min.js"></script>         
<script src="<?= URL; ?>public/js/plugins.js"></script>         
<!-- JavaScripts -->         
<script src="<?= URL; ?>public/js/functions.js"></script>         
<script src="<?= URL; ?>public/js/lightbox.js"></script>  
<!-- bootstrap datepicker -->
<script src="<?= URL; ?>public/js/bootstrap-datepicker.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $(".btnBusqueda").click(function () {
            busqueda();
        });
        $(".inputBusqueda").keypress(function (e) {
            if (e.which == 13) {
                busqueda();
            }
        });
        function busqueda() {
            var texto = $(".inputBusqueda");
            if (texto.val().trim().length > 0) {
                $.ajax({
                    url: "<?= URL; ?>busqueda/listado",
                    type: "POST",
                    data: {texto: texto.val()}
                }).done(function (data) {
                    $('body').html(data);
                });
            }
        }
    });
</script>
</body>     
</html>