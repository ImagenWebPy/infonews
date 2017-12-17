<?php
$helper = new Helper();
?>
<section id="main-section"> 
    <!--========== BEGIN .MODULE ==========-->                 
    <section class="module"> 
        <!--========== BEGIN .CONTAINER ==========-->                     
        <div class="container"> 
            <!--========== BEGIN #NEWS-SLIDER ==========-->                         
            <div id="news-slider" class="owl-carousel"> 
                <div class="news-slide"> 
                    <?php
                    foreach ($this->slider as $key => $val):
                        $position = '';
                        switch ($key) {
                            case 0:
                                $position = 'first';
                                break;
                            case 1:
                                $position = 'second';
                                break;
                            case 2:
                                $position = 'third';
                                break;
                            case 3:
                                $position = 'fourth';
                                break;
                        }
                        ?>
                        <div class="news-slider-layer <?= $position; ?>"> 
                            <a href="<?= URL; ?>noticias/publicacion/<?= $val['id']; ?>/<?= $helper->cleanUrl(utf8_encode($val['titulo'])); ?>" target="_blank"> 
                                <div class="content"> 
                                    <span class="category-tag bg-1"><?= utf8_encode($val['marca']); ?></span> 
                                    <p><?= utf8_encode($val['titulo']) ?></p> 
                                </div>                                         
                                <img class="img-responsive" src="<?= URL; ?>public/img/<?= utf8_encode($val['img']); ?>" alt=""> 
                            </a>                                     
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
                <h3 class="title"><span class="bg-1">Promociones</span></h3> 
                <h3 class="subtitle">Enterate de las últimas promociones del grupo</h3> 
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
                                        <a class="img-link" href="#">
                                            <img class="img-responsive img-full" src="<?= URL; ?>public/img/promociones/<?= utf8_encode($val['img']) ?>" alt="">
                                        </a>
                                        <span><a class="label-5" href="tech-science.html"><?= utf8_encode($val['marca']) ?></a></span>
                                    </div>                                         
                                    <div class="item-content"> 
                                        <div class="title-left title-style04 underline04"> 
                                            <h3><a href="#"><strong><?= utf8_encode($val['marca']) ?></strong></a></h3> 
                                        </div>                                             
                                        <?= utf8_encode($val['contenido']) ?>
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
                                        <a class="img-link" href="#">
                                            <img class="img-responsive img-full" src="<?= URL; ?>public/img/promociones/<?= utf8_encode($val['img']) ?>" alt="">
                                        </a>
                                        <span><a class="label-5" href="tech-science.html"><?= utf8_encode($val['marca']) ?></a></span>
                                    </div>                                         
                                    <div class="item-content"> 
                                        <div class="title-left title-style04 underline04"> 
                                            <h3><a href="#"><strong><?= utf8_encode($val['marca']) ?></strong></a></h3> 
                                        </div>                                             
                                        <?= utf8_encode($val['contenido']) ?>
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
                                    <a class="img-link" href="#">
                                        <img class="img-responsive img-full" src="<?= URL; ?>public/img/noticias/<?= utf8_encode($item['img']) ?>" alt="">
                                    </a>
                                </div>                                         
                                <div class="item-content"> 
                                    <div class="title-left title-style04 underline04"> 
                                        <h3><a href="#"><strong><?= utf8_encode($item['titulo']) ?></a></h3> 
                                    </div>                                             
                                    <p><?= substr(strip_tags(utf8_encode($item['contenido'])),0,180) ?></p> 
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
                                <li> 
                                    <div class="item"> 
                                        <div class="item-image">
                                            <a class="img-link" href="#">
                                                <img class="img-responsive img-full" src="<?= URL; ?>public/img/index_370x185-image01.jpg" alt="">
                                            </a>
                                        </div>                                                     
                                        <div class="item-content"> 
                                            <h4 class="ellipsis"><a href="#">From propaganda to pop artist</a></h4> 
                                            <p class="ellipsis"><a href="#">A gift for drawing led to a prestigious career as artist...</a></p> 
                                        </div>                                                     
                                    </div>                                                 
                                </li>                                             
                                <li> 
                                    <div class="item"> 
                                        <div class="item-image">
                                            <a class="img-link" href="#">
                                                <img class="img-responsive img-full" src="<?= URL; ?>public/img/index_370x185-image02.jpg" alt="">
                                            </a>
                                        </div>                                                     
                                        <div class="item-content"> 
                                            <h4 class="ellipsis"><a href="#">One Type of Food You Never Eat</a></h4> 
                                            <p class="ellipsis"><a href="#">No one has ever felt better after eating plane food.</a></p> 
                                        </div>                                                     
                                    </div>                                                 
                                </li>                                             
                                <li> 
                                    <div class="item"> 
                                        <div class="item-image">
                                            <a class="img-link" href="#">
                                                <img class="img-responsive img-full" src="<?= URL; ?>public/img/index_370x185-image03.jpg" alt="">
                                            </a>
                                        </div>                                                     
                                        <div class="item-content"> 
                                            <h4 class="ellipsis"><a href="#">Preschool</a></h4> 
                                            <p class="ellipsis"><a href="#">Your child should feel confident in her ability to meet the challenges...</a></p> 
                                        </div>                                                     
                                    </div>                                                 
                                </li>                                             
                                <li> 
                                    <div class="item"> 
                                        <div class="item-image">
                                            <a class="img-link" href="#">
                                                <img class="img-responsive img-full" src="<?= URL; ?>public/img/index_370x185-image04.jpg" alt="">
                                            </a>
                                        </div>                                                     
                                        <div class="item-content"> 
                                            <h4 class="ellipsis"><a href="#">Antarctica Stations</a></h4> 
                                            <p class="ellipsis"><a href="#">New research factors in collapsing Antarctic ice sheet that could...</a></p> 
                                        </div>                                                     
                                    </div>                                                 
                                </li>                                             
                                <li> 
                                    <div class="item"> 
                                        <div class="item-image">
                                            <a class="img-link" href="#">
                                                <img class="img-responsive img-full" src="<?= URL; ?>public/img/index_370x185-image05.jpg" alt="">
                                            </a>
                                        </div>                                                     
                                        <div class="item-content"> 
                                            <h4 class="ellipsis"><a href="#">Yellow fever outbreak</a></h4> 
                                            <p class="ellipsis"><a href="#">Drug manufacturers globally produce just enough vaccines for...</a></p> 
                                        </div>                                                     
                                    </div>                                                 
                                </li>                                             
                                <li> 
                                    <div class="item"> 
                                        <div class="item-image">
                                            <a class="img-link" href="#">
                                                <img class="img-responsive img-full" src="<?= URL; ?>public/img/index_370x185-image06.jpg" alt="">
                                            </a>
                                        </div>                                                     
                                        <div class="item-content"> 
                                            <h4 class="ellipsis"><a href="#">How To Succeed In</a></h4> 
                                            <p class="ellipsis"><a href="#">How to achieve business success in a certain sector or country.</a></p> 
                                        </div>                                                     
                                    </div>                                                 
                                </li>                                             
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
    <section class="module"> 
        <!-- Begin .title-style05-bg -->                     
        <div class="center-title"> 
            <span class="title-line-left"></span> 
            <h4 class="title-style05 style-01">Últimos contenidos en Video</h4> 
            <span class="title-line-right"></span> 
        </div>                     
        <!-- End .title-style05-bg -->                     
    </section>                 
    <!--========== END .MODULE ==========-->                 
    <!--========== BEGIN .MODULE ==========-->                 
    <section class="module dark"> 
        <!--========== BEGIN VIDEO ==========-->                     
        <!-- Begin .container-->                     
        <div class="container"> 
            <div class="row no-gutter"> 
                <!-- Begin .col-md-9 -->                             
                <div class="col-sm-9 col-md-9"> 
                    <div class="video-full"> 
                        <div class="video-container"> 
                            <iframe src="https://player.vimeo.com/video/97744717?title=0&amp;byline=0&amp;portrait=0" class="video" title="Advertisement"></iframe>                                         
                        </div>                                     
                    </div>                                 
                </div>                             
                <!-- End .col-md-9-->                             
                <!-- Begin .col-md-3-->                             
                <div class="col-xs-12 col-sm-3 col-md-3"> 
                    <div class="title-left title-style03 underline03"> 
                        <h4>Related Videos</h4> 
                    </div>                                 
                    <div class="module-media"> 
                        <div class="image">
                            <img class="img-responsive" src="<?= URL; ?>public/img/index_620x465-image04.jpg" alt="">
                        </div>                                     
                        <a href="video.html"><span class="play-icon"></span></a> 
                    </div>                                 
                    <div class="module-media"> 
                        <div class="image">
                            <img class="img-responsive" src="<?= URL; ?>public/img/index_620x465-image02.jpg" alt="">
                        </div>                                     
                        <a href="video.html"><span class="play-icon"></span></a> 
                    </div>                                 
                </div>                             
                <!-- End .col-md-3-->                             
            </div>                         
        </div>                     
        <!--End .container-->                     
        <!--========== END VIDEO ==========-->                     
    </section>                 
    <!--========== END .MODULE ==========-->                 
    <!--========== BEGIN .MODULE ==========-->                 
    <section class="module highlight"> 
        <!--========== BEGIN.CONTAINER ==========-->                     
        <div class="container"> 
            <!--========== BEGIN .ROW ==========-->                         
            <div class="row no-gutter"> 
                <!--========== BEGIN .C0L-MD-8 ==========-->                             
                <div class="col-md-8"> 
                    <!-- Begin .news -->                                 
                    <div class="news"> 
                        <div class="module-title"> 
                            <h3 class="title"><span class="bg-1">Variedad</span></h3> 
                            <h3 class="subtitle">Últimas novedades</h3> 
                        </div>                                     
                        <!-- Begin .item -->                                     
                        <div class="item"> 
                            <div class="item-image-1">
                                <a class="img-link" href="#">
                                    <img class="img-responsive img-full" src="<?= URL; ?>public/img/index_800x400-image17.jpg" alt="">
                                </a>
                            </div>                                         
                            <div class="item-content"> 
                                <div class="title-left title-style04 underline04"> 
                                    <h3><a href="#"><strong>Breaking</strong> News Stories</a></h3> 
                                </div>                                             
                                <br> 
                                <div class="post-meta-elements"> 
                                    <div class="post-meta-author"> 
                                        <i class="fa fa-user"></i>
                                        <a href="#">By Hugh Jackson</a> 
                                    </div>                                                 
                                    <div class="post-meta-date"> 
                                        <i class="fa fa-calendar"></i>December 25, 2016 
                                    </div>                                                 
                                </div>                                             
                                <p><a href="#" target="_blank" class="external-link">At the 24h News we see breaking news events as unexpected, momentous or informative events...</a></p> 
                                <p><a href="#" target="_blank" class="external-link">Our editors also consider other aspects of...</a></p> 
                                <p><a href="#" target="_blank" class="external-link">Is this event part of a subject the 24h News often reports on?</a></p> 
                                <div> 
                                    <a href="#"><span class="read-more">Continue reading</span></a> 
                                </div>                                             
                            </div>                                         
                        </div>                                     
                        <!-- End .item -->                                     
                        <!-- Begin .news-block" -->                                     
                        <div class="news-block"> 
                            <div class="item-block"> 
                                <div class="item-image">
                                    <a class="img-link" href="#">
                                        <img class="img-responsive img-full" src="<?= URL; ?>public/img/index_800x400-image21.jpg" alt="">
                                    </a>
                                </div>                                             
                                <div class="item-content">
                                    <span class="day">Thu, Dec 12, 2016</span> 
                                    <p><a href="#" target="_blank" class="external-link">The energy choices</a></p> 
                                </div>                                             
                            </div>                                         
                            <div class="item-block"> 
                                <div class="item-image">
                                    <a class="img-link" href="#">
                                        <img class="img-responsive img-full" src="<?= URL; ?>public/img/index_800x400-image22.jpg" alt="">
                                    </a>
                                </div>                                             
                                <div class="item-content">
                                    <span class="day">Thu, Dec 12, 2016</span> 
                                    <p><a href="#" target="_blank" class="external-link">Food/Agriculture</a></p> 
                                </div>                                             
                            </div>                                         
                            <div class="item-block"> 
                                <div class="item-image">
                                    <a class="img-link" href="#">
                                        <img class="img-responsive img-full" src="<?= URL; ?>public/img/index_800x400-image23.jpg" alt="">
                                    </a>
                                </div>                                             
                                <div class="item-content">
                                    <span class="day">Thu, Dec 12, 2016</span> 
                                    <p><a href="#" target="_blank" class="external-link">Healthcare</a></p> 
                                </div>                                             
                            </div>                                         
                            <div class="item-block"> 
                                <div class="item-image">
                                    <a class="img-link" href="#">
                                        <img class="img-responsive img-full" src="<?= URL; ?>public/img/index_800x400-image24.jpg" alt="">
                                    </a>
                                </div>                                             
                                <div class="item-content">
                                    <span class="day">Thu, Dec 12, 2016</span> 
                                    <p><a href="#" target="_blank" class="external-link">Housing/Construction</a></p> 
                                </div>                                             
                            </div>                                         
                        </div>                                     
                        <!-- End .news-block" -->                                     
                    </div>                                 
                    <!-- End .news -->                                 
                </div>                             
                <!--========== END .C0L-MD-8 ==========-->                             
                <!--========== BEGIN .C0L-MD-4 ==========-->                             
                <div class="col-md-4"> 
                    <!-- Begin .title-style02 -->                                 
                    <div class="title-style02"> 
                        <h3><a href="#">Promociones</a></h3> 
                    </div>                                 
                    <!-- End .title-style02 -->                                 
                    <!--========== BEGIN .SIDEBAR-POST ==========-->                                 
                    <div class="sidebar-post"> 
                        <ul> 
                            <li> 
                                <div class="item"> 
                                    <div class="item-image">
                                        <a class="img-link" href="#">
                                            <img class="img-responsive img-full" src="<?= URL; ?>public/img/index_370x185-image07.jpg" alt="">
                                        </a>
                                    </div>                                                 
                                    <div class="item-content"> 
                                        <h3>01</h3> 
                                        <p class="ellipsis"><a href="#">Survivor is world's oldest man - Guinness World Records.</a></p> 
                                    </div>                                                 
                                </div>                                             
                            </li>                                         
                            <li> 
                                <div class="item"> 
                                    <div class="item-image">
                                        <a class="img-link" href="#">
                                            <img class="img-responsive img-full" src="<?= URL; ?>public/img/index_370x185-image08.jpg" alt="">
                                        </a>
                                    </div>                                                 
                                    <div class="item-content"> 
                                        <h3>02</h3> 
                                        <p class="ellipsis"><a href="#">East Kilbride: Manager Billy O. to leave post on 20 Dec.</a></p> 
                                    </div>                                                 
                                </div>                                             
                            </li>                                         
                            <li> 
                                <div class="item"> 
                                    <div class="item-image">
                                        <a class="img-link" href="#">
                                            <img class="img-responsive img-full" src="<?= URL; ?>public/img/index_370x185-image09.jpg" alt="">
                                        </a>
                                    </div>                                                 
                                    <div class="item-content"> 
                                        <h3>03</h3> 
                                        <p class="ellipsis"><a href="#">Nature's way of saying older women aren't attractive?</a></p> 
                                    </div>                                                 
                                </div>                                             
                            </li>                                         
                            <li> 
                                <div class="item"> 
                                    <div class="item-image">
                                        <a class="img-link" href="#">
                                            <img class="img-responsive img-full" src="<?= URL; ?>public/img/index_370x185-image10.jpg" alt="">
                                        </a>
                                    </div>                                                 
                                    <div class="item-content"> 
                                        <h3>04</h3> 
                                        <p class="ellipsis"><a href="#">Last post for stamp collectors,  valued in catalogues</a></p> 
                                    </div>                                                 
                                </div>                                             
                            </li>                                         
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