<?php
$helper = new Helper();
?>
<div id="main-section"> 
    <!--========== BEGIN .CONTAINER ==========-->
    <div class="container"> </div>
    <!--========== END .CONTAINER ==========--> 
    <!--========== BEGIN .MODULE ==========-->
    <section class="module">
        <div class="container"> 
            <!--========== BEGIN .ROW ==========-->
            <div class="row no-gutter"> 
                <!--========== BEGIN .COL-MD-8 ==========-->
                <div class="col-md-12"> 
                    <!--========== BEGIN .POST ==========-->
                    <div class="post post-full clearfix">
                        <div class="entry-media"> 
                            <?php if (!empty($this->contenido)): ?>
                                <?php foreach ($this->contenido as $contenido): ?>
                                    <a href="#" style="padding: 10px;">
                                        <img src="<?= URL; ?>public/img/promociones/<?= utf8_encode($contenido['img']); ?>" alt="<?= utf8_encode($contenido['img']); ?>" class="img-responsive">
                                    </a>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <h3>Aún no se han cargado clasificados para esta Marca...</h3>
                            <?php endif; ?>
                        </div>
                    </div>
                    <!--  End .post --> 
                </div>
                <!--========== END .COL-MD-8 ==========--> 
            </div>
            <!-- End .title-style05-bg --> 
        </div>
        <!--========== END .CONTAINER ==========-->
    </section>
    <!--========== END .MODULE ==========--> 
</div>