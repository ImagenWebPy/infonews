<?php
$helper = new Helper();
$contenido = $this->contenido;
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
                <div class="col-md-8"> 
                    <!--========== BEGIN .POST ==========-->
                    <div class="post post-full clearfix">
                        <div class="entry-media"> <a href="#"><img src="<?= URL; ?>public/img/rrhh/<?= utf8_encode($contenido['img']); ?>" alt="<?= utf8_encode($contenido['img']); ?>" class="img-responsive"></a></div>
                        <div class="entry-main">
                            <div class="entry-title">
                                <h4 class="entry-title"><a href="#"><?= utf8_encode($contenido['titulo']); ?></a></h4>
                            </div>
                            <div class="post-meta-elements">
                                <div class="post-meta-date"> <i class="fa fa-calendar"></i><?= date('d', strtotime($contenido['fecha_visible'])) . '-' . $helper->shortMonthDate(date('M', strtotime($contenido['fecha_visible']))) . '-' . date('Y', strtotime($contenido['fecha_visible'])) ?></div>
                            </div>
                            <div class="entry-content">
                                <?= $contenido['contenido']; ?>
                            </div>
                        </div>
                    </div>
                    <!--  End .post --> 
                </div>
                <!--========== END .COL-MD-8 ==========--> 
                <!--========== BEGIN .COL-MD-4==========-->
                <div class="col-md-4"> 
                    <!--========== BEGIN #SIDEBAR-NEWSFEED ==========--> 
                    <!-- Begin .block-title-2 -->
                    <div class="block-title-2">
                        <h3>Últimas publicaciones</h3>
                    </div>
                    <!-- End .block-title-2 -->
                    <div class="sidebar-newsfeed"> 
                        <!-- Begin .newsfeed -->
                        <div class="newsfeed-1">
                            <ul>
                                <?php foreach ($this->ultimasNoticias as $item): ?>
                                    <li>
                                        <div class="item">
                                            <div class="item-image"><a class="img-link" href="<?= URL; ?>noticia/publicacion/<?= $item['id']; ?>/<?= $helper->cleanUrl(utf8_encode($item['titulo'])); ?>"><img class="img-responsive img-full" src="<?= URL; ?>public/img/rrhh/<?= utf8_encode($item['img']); ?>" alt=""></a></div>
                                            <div class="item-content">
                                                <h4 class="ellipsis"><a href="<?= URL; ?>noticia/publicacion/<?= $item['id']; ?>/<?= $helper->cleanUrl(utf8_encode($item['titulo'])); ?>"><?= utf8_encode($item['titulo']); ?></a></h4>
                                                <p class="ellipsis"><a href="<?= URL; ?>noticia/publicacion/<?= $item['id']; ?>/<?= $helper->cleanUrl(utf8_encode($item['titulo'])); ?>"><?= strip_tags(utf8_encode($item['contenido'])); ?></a></p>
                                            </div>
                                        </div>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <!-- End .newsfeed --> 
                    </div>
                    <!--========== END #SIDEBAR-NEWSFEED ==========-->
                </div>
                <!--========== END .COL-MD-4 ==========--> 
            </div>
            <!-- End .title-style05-bg --> 
        </div>
        <!--========== END .CONTAINER ==========-->
    </section>
    <!--========== END .MODULE ==========--> 
    <?php
    echo $helper->getPostGallery($contenido['id']);
    echo $helper->getPostVideo($contenido['id']);
    ?>
</div>