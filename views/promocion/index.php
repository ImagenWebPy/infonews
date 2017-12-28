<?php
$helper = new Helper();
?>
<section id="main-section"> 
    <!--========== BEGIN .CONTAINER ==========-->
    <div class="container"> 
        <!-- Begin .breadcrumb-line -->
        <div class="breadcrumb-line">
            <p>&nbsp;</p>
        </div>
        <!-- End .breadcrumb-line --> 
    </div>
    <!--========== BEGIN .MODULE ==========-->
    <section class="module highlight">
        <div class="container">
            <div class="row no-gutter"> 
                <!--========== BEGIN .COL-MD-12 ==========-->
                <div class="col-md-12">
                    <div class="module-title">
                        <h3 class="title"><span class="bg-1">Clasificados</span></h3>
                        <h3 class="subtitle">Últimos clasificados</h3>
                    </div>
                    <!--========== BEGIN .ARTICLE ==========-->
                    <div class="article">
                        <?php foreach ($this->listado as $item): ?>
                            <div class="entry-block-small">
                                <div class="entry-image">
                                    <a class="img-link" href="<?= URL; ?>promocion/publicacion/<?= $item['id']; ?>/<?= $helper->cleanUrl(utf8_encode($item['descripcion'])); ?>">
                                        <img class="img-responsive img-full" src="<?= URL; ?>public/img/logos_marcas/<?= utf8_encode($item['img']); ?>" alt="<?= utf8_encode($item['img']); ?>">
                                    </a> 
                                </div>
                                <div class="entry-content">
                                    <div class="title-left title-style04 underline04">
                                        <h3>
                                            <a href="<?= URL; ?>promocion/publicacion/<?= $item['id']; ?>/<?= $helper->cleanUrl(utf8_encode($item['descripcion'])); ?>"><strong><?= utf8_encode($item['descripcion']); ?></strong></a>
                                        </h3>
                                    </div>
                                    <div><a href="<?= URL; ?>promocion/publicacion/<?= $item['id']; ?>/<?= $helper->cleanUrl(utf8_encode($item['descripcion'])); ?>"><span class="read-more">Ver Clasificados</span></a></div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <!--========== END .ARTICLE ==========--> 
                </div>
            </div>
        </div>
    </section>
    <!--========== END .MODULE ==========--> 
</section>