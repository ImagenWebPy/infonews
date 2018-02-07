<?php
$helper = new Helper();
?>
<section id="main-section"> 
    <!--========== BEGIN .MODULE ==========-->                 
    <section class="module"> 
        <!--========== BEGIN .CONTAINER ==========-->                     
        <div class="container"> 
            <!--========== BEGIN #NEWS-SLIDER ==========-->                         
            <div id="slider"> 
                <div class="slides">
                    <?php foreach ($this->slider as $key => $val): ?>
                        <div class="slider">
                            <div class="legend"></div> 
                            <div class="content"> 
                                <div class="content-txt"> 
                                    <a href="<?= URL; ?>noticia/publicacion/<?= $val['id']; ?>/<?= $helper->cleanUrl(utf8_encode($val['titulo'])); ?>"><h1><?= utf8_encode($val['titulo']); ?></h1></a>
                                    <h2><?= substr(strip_tags(utf8_encode($val['contenido'])), 0, 180); ?>...</h2> 
                                </div> 
                            </div> 
                            <div class="images"> 
                                <img src="<?= URL; ?>/public/img/marcas/<?= $val['img']; ?>" style="width: 100%;"> 
                            </div> 
                        </div>
                    <?php endforeach; ?>
                </div> 
            </div>
            <!--========== END .NEWS-SLIDER ==========-->                         
        </div>                     
    </section>                 
    <!--========== END .MODULE ==========-->                 
    <!--========== BEGIN .MODULE ==========-->                 
    <section class="module highlight" wp-site-content wp-body-class wp-site-name wp-title wp-site-desc wp-header-image> 
        <div class="container"> 
            <div class="module-title"> 
                <h3 class="title"><span class="bg-1">Clasificados</span></h3> 
                <h3 class="subtitle">Ve los últimos clasificados de las marcas</h3> 
            </div>                         
            <!--========== BEGIN .ROW ==========-->                         
            <div class="row no-gutter"> 
                <!--========== BEGIN .COL-MD-6 ==========-->                             
                <div class="col-sm-6 col-md-6"> 
                    <!--========== BEGIN .NEWS ==========-->                                 
                    <div class="news"> 
                        <?php
                        foreach ($this->promocion as $key => $val):
                            if (($key >= 0) && ($key <= 1)):
                                ?>
                                <!-- Begin .item -->                                     
                                <div class="item"> 
                                    <div class="item-image-1">
                                        <a class="img-link" href="<?= URL; ?>promocion/publicacion/<?= $val['id']; ?>/<?= $helper->cleanUrl(utf8_encode($val['descripcion'])); ?>">
                                            <img class="img-responsive img-full" src="<?= URL; ?>public/img/logos_marcas/<?= utf8_encode($val['img']) ?>" alt="">
                                        </a>
                                    </div>                                         
                                    <div class="item-content"> 
                                        <div class="title-left title-style04 underline04"> 
                                            <h3><a href="<?= URL; ?>promocion/publicacion/<?= $val['id']; ?>/<?= $helper->cleanUrl(utf8_encode($val['descripcion'])); ?>"><strong><?= utf8_encode($val['descripcion']) ?></strong></a></h3> 
                                        </div>                                             
                                        <p>Ver clasificados de la marca.</p>
                                    </div>                                         
                                </div>                                     
                                <!-- End .item -->
                                <?php
                            endif;
                        endforeach;
                        ?>
                    </div>                                 
                    <!--========== END .NEWS ==========-->                                 
                </div>                             
                <!--========== END .COL-MD-6 ==========-->                             
                <!--========== BEGIN .COL-MD-6 ==========-->                             
                <div class="col-sm-6 col-md-6"> 
                    <!--========== BEGIN .NEWS==========-->                                 
                    <div class="news"> 
                        <?php
                        foreach ($this->promocion as $key => $val):
                            if (($key > 1) && ($key <= 3)):
                                ?>
                                <!-- Begin .item-->                                     
                                <div class="item"> 
                                    <div class="item-image-1">
                                        <a class="img-link" href="<?= URL; ?>promocion/publicacion/<?= $val['id']; ?>/<?= $helper->cleanUrl(utf8_encode($val['descripcion'])); ?>">
                                            <img class="img-responsive img-full" src="<?= URL; ?>public/img/logos_marcas/<?= utf8_encode($val['img']) ?>" alt="">
                                        </a>
                                    </div>                                         
                                    <div class="item-content"> 
                                        <div class="title-left title-style04 underline04"> 
                                            <h3><a href="<?= URL; ?>promocion/publicacion/<?= $val['id']; ?>/<?= $helper->cleanUrl(utf8_encode($val['descripcion'])); ?>"><strong><?= utf8_encode($val['descripcion']) ?></strong></a></h3> 
                                        </div>                                             
                                        <p>Ver clasificados de la marca.</p>
                                    </div>                                         
                                </div>                                      
                                <!-- End .item-->                                     
                                <?php
                            endif;
                        endforeach;
                        ?>
                    </div>                                 
                    <!--========== END .NEWS ==========-->                                 
                </div>                             
                <!--========== END .COL-MD-6 ==========-->                             
            </div>                         
        </div>                     
    </section>                 
    <!--========== END .MODULE ==========-->                 
    <!--========== BEGIN .MODULE ==========-->                 
    <section class="module"> 
        <div class="container"> 
            <div class="row no-gutter"> 
                <!--========== BEGIN .COL-MD-8 ==========-->                             
                <div class="col-md-8"> 
                    <!--========== BEGIN .NEWS ==========-->                                 
                    <div class="news"> 
                        <div class="module-title"> 
                            <h3 class="title"><span class="bg-11">Recursos Humanos</span></h3> 
                            <h3 class="subtitle">Últimas novedades</h3> 
                        </div>
                        <?php foreach ($this->rrhh as $item): ?>
                            <!-- Begin .item-->                                     
                            <div class="item"> 
                                <div class="item-image-2">
                                    <a class="img-link" href="<?= URL; ?>rrhh/publicacion/<?= $item['id']; ?>/<?= $helper->cleanUrl(utf8_encode($item['titulo'])); ?>">
                                        <img class="img-responsive img-full" src="<?= URL; ?>public/img/rrhh/<?= utf8_encode($item['img']) ?>" alt="" style="width: 372px; height: 186px;">
                                    </a>
                                </div>                                         
                                <div class="item-content"> 
                                    <div class="title-left title-style04 underline04"> 
                                        <h3><a href="<?= URL; ?>rrhh/publicacion/<?= $item['id']; ?>/<?= $helper->cleanUrl(utf8_encode($item['titulo'])); ?>"><strong><?= utf8_encode($item['titulo']) ?></a></h3> 
                                    </div>                                             
                                    <p><?= substr(strip_tags(utf8_encode($item['contenido'])), 0, 180) ?></p> 
                                </div>                                         
                            </div>                                     
                            <!-- End .item-->  
                        <?php endforeach; ?>
                    </div>                                 
                    <!--========== End .NEWS ==========-->                                 
                </div>                             
                <!--========== End .COL-MD-8 ==========-->                             
                <!--========== BEGIN .COL-MD-4 ==========-->                             
                <div class="col-md-4"> 
                    <!-- Begin .block-title-1 -->                                 
                    <div class="block-title-1"> 
                        <h3><a href="#"><strong>Novedades de las</strong> Marcas</a></h3> 
                    </div>                                 
                    <!-- End .block-title-1 -->                                 
                    <!--========== BEGIN .SIDEBAR-NEWSFEED ==========-->                                 
                    <div class="sidebar-newsfeed"> 
                        <!-- Begin .newsfeed -->                                     
                        <div class="newsfeed-3"> 
                            <ul>
                                <?php foreach ($this->marcas as $item): ?>
                                    <li> 
                                        <div class="item"> 
                                            <div class="item-image">
                                                <a class="img-link" href="<?= URL; ?>noticia/publicacion/<?= $item['id']; ?>/<?= $helper->cleanUrl(utf8_encode($item['titulo'])); ?>">
                                                    <img class="img-responsive img-full" src="<?= URL; ?>public/img/marcas/<?= utf8_encode($item['img']); ?>" alt="">
                                                </a>
                                            </div>                                                     
                                            <div class="item-content"> 
                                                <h4 class="ellipsis"><a href="<?= URL; ?>noticia/publicacion/<?= $item['id']; ?>/<?= $helper->cleanUrl(utf8_encode($item['titulo'])); ?>"><?= utf8_encode($item['titulo']); ?></a></h4> 
                                                <p class="ellipsis"><a href="<?= URL; ?>noticia/publicacion/<?= $item['id']; ?>/<?= $helper->cleanUrl(utf8_encode($item['titulo'])); ?>"><?= substr(utf8_encode(strip_tags($item['contenido'])), 0, 100); ?>...</a></p> 
                                            </div>                                                     
                                        </div>                                                 
                                    </li>
                                <?php endforeach; ?>
                            </ul>                                         
                        </div>                                     
                        <!-- End .newsfeed -->                                     
                    </div>                                 
                    <!--========== END .SIDEBAR-NEWSFEED ==========-->                                 
                </div>                             
                <!--========== END .COL-MD-4 ==========-->                             
            </div>                         
        </div>                     
    </section>                 
    <!--========== END .MODULE ==========-->                 
    <!-- Begin #parallax-section1 -->                 
    <div id="parallax-section1"> 
        <div class="image3 img-overlay1"> 
            <div class="container"> 
                <div class="caption text-center"> 
                    <h2 class="color-white weight-300 small-caption">Visitá el <strong>Portal Institucional</strong> para informarte de los últimos eventos del grupo!</h2> 
                    <a href="http://www.garden.com.py/institucional/" target="_blank" class="btn btn-default">Ir al Portal</a> 
                </div>                             
            </div>                         
        </div>                     
    </div>                 
    <!-- End #parallax-section1 -->                 
    <!--========== BEGIN .MODULE ==========-->                 
<!--    <section class="module"> 
         Begin .title-style05-bg                      
        <div class="center-title"> 
            <span class="title-line-left"></span> 
            <h4 class="title-style05 style-01">Últimos contenidos en Video</h4> 
            <span class="title-line-right"></span> 
        </div>                     
         End .title-style05-bg                      
    </section>                 -->
    <!--========== END .MODULE ==========-->                 
    <!--========== BEGIN .MODULE ==========-->                 
<!--    <section class="module dark"> 
        ========== BEGIN VIDEO ==========
         Begin .container                     
        <div class="container"> 
            <div class="row no-gutter"> 
                 Begin .col-md-9                              
                <div class="col-sm-9 col-md-9"> 
                    <div class="video-full"> 
                        <div class="video-container"> 
                            <video controls style="width: 100%;">
                                <source src="<?= URL; ?>public/videos/<?= $this->videos[0]['video']; ?>" type="video/mp4">
                                Tu Navegador no soporta la reproducción de video. Por favor actualizalo. 
                            </video>
                        </div>                                     
                    </div>                                 
                </div>                             
                 End .col-md-9                             
                 Begin .col-md-3                             
                <div class="col-xs-12 col-sm-3 col-md-3"> 
                    <div class="title-left title-style03 underline03"> 
                        <h4><a href="">Ver Todos los Videos</a></h4> 
                    </div>                                 
                    <div class="module-media"> 
                        <div class="image">
                            <video controls style="width: 100%;">
                                <source src="<?= URL; ?>public/videos/<?= $this->videos[1]['video']; ?>" type="video/mp4">
                                Tu Navegador no soporta la reproducción de video. Por favor actualizalo. 
                            </video>
                        </div>                                     
                    </div>                                 
                    <div class="module-media"> 
                        <div class="image">
                            <video controls style="width: 100%;">
                                <source src="<?= URL; ?>public/videos/<?= $this->videos[2]['video']; ?>" type="video/mp4">
                                Tu Navegador no soporta la reproducción de video. Por favor actualizalo. 
                            </video>
                        </div>                                     
                    </div>                                 
                </div>                             
                 End .col-md-3                             
            </div>                         
        </div>                     
        End .container                     
        ========== END VIDEO ==========                     
    </section>                 -->
    <!--========== END .MODULE ==========-->                 
    <!--========== BEGIN .MODULE ==========-->                 
    <section class="module highlight"> 
        <!--========== BEGIN.CONTAINER ==========-->                     
        <div class="container"> 
            <!--========== BEGIN .ROW ==========-->                         
            <div class="row no-gutter"> 
                <!--========== BEGIN .C0L-MD-8 ==========-->
                <?php if (!empty($this->varios[0])): ?>
                    <!--                    <div class="col-md-8"> 
                                             Begin .news                                  
                                            <div class="news"> 
                                                <div class="module-title"> 
                                                    <h3 class="title"><span class="bg-1">Variedades</span></h3> 
                                                    <h3 class="subtitle">Últimas novedades</h3> 
                                                </div>
                    <?php
                    $VariosPrincipal = $this->varios[0];
                    unset($this->varios[0]);
                    ?>
                                                 Begin .item                                      
                                                <div class="item"> 
                                                    <div class="item-image-1">
                                                        <a class="img-link" href="<?= URL; ?>variedad/publicacion/<?= $VariosPrincipal['id']; ?>/<?= $helper->cleanUrl(utf8_encode($VariosPrincipal['titulo'])); ?>">
                                                            <img class="img-responsive img-full" src="<?= URL; ?>public/img/variedad/<?= utf8_encode($VariosPrincipal['img']); ?>" alt="">
                                                        </a>
                                                    </div>                                         
                                                    <div class="item-content"> 
                                                        <div class="title-left title-style04 underline04"> 
                                                            <h3><a href="<?= URL; ?>variedad/publicacion/<?= $VariosPrincipal['id']; ?>/<?= $helper->cleanUrl(utf8_encode($VariosPrincipal['titulo'])); ?>"><?= utf8_encode($VariosPrincipal['titulo']); ?></a></h3> 
                                                        </div>                                             
                                                        <br> 
                                                        <p><?= utf8_encode($VariosPrincipal['contenido']); ?></p> 
                                                        <div> 
                                                            <a href="<?= URL; ?>variedad/publicacion/<?= $VariosPrincipal['id']; ?>/<?= $helper->cleanUrl(utf8_encode($VariosPrincipal['titulo'])); ?>"><span class="read-more">Continuar Leyendo</span></a> 
                                                        </div>                                             
                                                    </div>                                         
                                                </div>
                                                 End .item                                      
                                                 Begin .news-block"                                      
                                                <div class="news-block">
                    <?php foreach ($this->varios as $item): ?>
                                                                                            <div class="item-block"> 
                                                                                                <div class="item-image">
                                                                                                    <a class="img-link" href="<?= URL; ?>variedad/publicacion/<?= $item['id']; ?>/<?= $helper->cleanUrl(utf8_encode($item['titulo'])); ?>">
                                                                                                        <img class="img-responsive img-full" src="<?= URL; ?>public/img/variedad/<?= utf8_encode($item['img']); ?>" alt="">
                                                                                                    </a>
                                                                                                </div>                                             
                                                                                                <div class="item-content">
                                                                                                    <span class="day"><?= utf8_encode($item['titulo']); ?></span> 
                                                                                                    <p><a href="<?= URL; ?>variedad/publicacion/<?= $item['id']; ?>/<?= $helper->cleanUrl(utf8_encode($item['titulo'])); ?>" ><?= substr(utf8_encode($item['contenido']), 0, 60); ?></a></p> 
                                                                                                </div>                                             
                                                                                            </div>
                    <?php endforeach; ?>
                                                </div>                                     
                                                 End .news-block"                                      
                                            </div>                                 
                                             End .news                                  
                                        </div>     -->
                <?php endif; ?>
                <!--========== END .C0L-MD-8 ==========-->                             
                <!--========== BEGIN .C0L-MD-4 ==========-->  
                <?php
                $col_md = "col-md-4";
                if (empty($this->varios[0]))
                    $col_md = "col-md-12";
                ?>
                <div class="<?= $col_md; ?>"> 
                    <!-- Begin .title-style02 -->                                 
                    <div class="title-style02"> 
                        <h3><a href="#">Clasificados</a></h3> 
                    </div>                                 
                    <!-- End .title-style02 -->                                 
                    <!--========== BEGIN .SIDEBAR-POST ==========-->                                 
                    <div class="sidebar-post"> 
                        <ul>
                            <?php foreach ($this->listadoPromociones as $item): ?>
                                <li> 
                                    <div class="item"> 
                                        <div class="item-image">
                                            <a class="img-link" href="<?= URL; ?>promocion/publicacion/<?= $item['id']; ?>/<?= $helper->cleanUrl(utf8_encode($item['descripcion'])); ?>">
                                                <img class="img-responsive img-full" src="<?= URL; ?>public/img/logos_marcas/<?= utf8_encode($item['img']) ?>" alt="">
                                            </a>
                                        </div>                                                 
                                        <div class="item-content"> 
                                            <h3><a href="<?= URL; ?>promocion/publicacion/<?= $item['id']; ?>/<?= $helper->cleanUrl(utf8_encode($item['descripcion'])); ?>" style="color: #fff !important;">Clasificados <?= utf8_encode($item['descripcion']) ?></a></h3> 
                                        </div>                                                 
                                    </div>                                             
                                </li>                                         
                            <?php endforeach; ?>                                       
                        </ul>                                     
                    </div>                                 
                    <!--========== END .SIDEBAR-POST ==========-->                                 
                </div>                             
                <!--========== END .COL-MD-4 ==========-->                             
            </div>                         
            <!--========== BEGIN 24H NEWS ON-AIR ==========-->                         
        </div>                     
    </section>                 
    <!--========== END .MODULE ==========-->                 
</section>