<?php
$helper = new Helper();
$listado = $this->listado;
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
                        <h3 class="title"><span class="bg-1">Busqueda</span></h3>
                        <h3 class="subtitle">Resultado de la Busqueda</h3>
                    </div>
                    <!--========== BEGIN .ARTICLE ==========-->
                    <div class="article">
                        <?php
                        foreach ($listado['listado'] as $item):
                            switch ($item['categoria']) {
                                case 'Marca':
                                    $controller = 'noticia';
                                    $carpeta = 'marcas';
                                    break;
                                case 'Varios':
                                    $controller = 'variedad';
                                    $carpeta = 'variedad';
                                    break;
                                case 'Recursos Humanos':
                                    $controller = 'rrhh';
                                    $carpeta = 'rrhh';
                                    break;
                            }
                            ?>
                            <div class="entry-block-small">
                                <div class="entry-image"><a class="img-link" href="<?= URL . $controller; ?>/publicacion/<?= $item['id']; ?>/<?= $helper->cleanUrl(utf8_encode($item['titulo'])); ?>"><img class="img-responsive img-full" src="<?= URL; ?>public/img/<?= $carpeta; ?>/<?= utf8_encode($item['img']); ?>" alt="<?= utf8_encode($item['img']); ?>"></a> </div>
                                <div class="entry-content">
                                    <div class="title-left title-style04 underline04">
                                        <h3><a href="<?= URL . $controller; ?>/publicacion/<?= $item['id']; ?>/<?= $helper->cleanUrl(utf8_encode($item['titulo'])); ?>"><strong><?= utf8_encode($item['titulo']); ?></strong></a></h3>
                                    </div>
                                    <p><?= strip_tags(utf8_encode($item['contenido'])); ?></p>
                                    <div><a href="<?= URL . $controller; ?>/publicacion/<?= $item['id']; ?>/<?= $helper->cleanUrl(utf8_encode($item['titulo'])); ?>"><span class="read-more">Continuar leyendo</span></a></div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <!--========== END .ARTICLE ==========--> 
                </div>
                <div class="col-md-12">
                    <?= $listado['paginador']; ?>
                </div>
            </div>
        </div>
    </section>
    <!--========== END .MODULE ==========--> 
</section>