<?php
include_once 'env/config.php';

$strPageSlider = TRUE;
$strPageHero = TRUE;
include 'inc/header.php';
?>

<body class="one-page header-absolute">
    <br><br><br><br><br>


    <div id="page-title" class="page-title page-title-3 bg-black dark">
        <div class="bg-image"><img src="<?php ?> assets/img/service.jpg"></div>
        <div class="container">
            <h1>Gallery</h1>
        </div>
        <div class="breadcrumb-wrapper border-top">
            <div class="container">
                <ol class="breadcrumb">
                    <li><a href="<?php echo ENV_ROOTURL; ?>index.php">Home Page</a></li>
                    <li class="active">Gallery</li>
                </ol>
            </div>
        </div>
    </div>

    <section>

        <div class="container" id="gallery">
            <ul class="nav nav-tabs filter-isotope mb-50 text-center" data-filter-list="#works-list">
                <li class="active"><a href="#" data-filter="*">All</a></li>
                <li><a href="#" data-filter=".weddings">Weddings</a></li>
                <li><a href="#" data-filter=".logo-design">Logo-Design</a></li>
                <li><a href="#" data-filter=".live-concert">Live-Concets</a></li>
            </ul>

            <div id="works-list" class="masonry row">
                <div class="masonry-sizer col-md-3 col-sm-6 col-xs-12"></div>

                <div class="masonry-item weddings col-md-3 col-sm-6 col-xs-12">
                    <!-- Image -->
                    <div class="image-box image-hover text-center">
                        <div class="image">
                            <a href="<?php echo ENV_ROOTURL; ?>assets/img/Gallery/Wedding/wed(1).jpg" data-lightbox="gallery" data-title="Image Title"><img src="<?php echo ENV_ROOTURL; ?>assets/img/Gallery/Wedding/wed(1).jpg" alt=""></a>
                        </div>
                        <div class="title">
                            <a href="#">
                                <h5 class="mb-0">Lorem ipsum</h5>
                                <span class="text-muted">Ipsum</span>
                            </a>
                        </div>
                    </div>
                </div>


                <div class="masonry-item weddings col-md-3 col-sm-6 col-xs-12">
                    <!-- Image -->
                    <div class="image-box image-hover text-center">
                        <div class="image">
                            <a href="<?php echo ENV_ROOTURL; ?>assets/img/Gallery/Wedding/wed(2).jpg" data-lightbox="gallery" data-title="Consectetur  ipsum"><img src="<?php echo ENV_ROOTURL; ?>assets/img/Gallery/Wedding/wed(2).jpg" alt=""></a>
                        </div>
                        <div class="title">
                            <a href="#">
                                <h5 class="mb-0">Consectetur  ipsum</h5>
                                <span class="text-muted">Consectetur</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="masonry-item weddings col-md-3 col-sm-6 col-xs-12">
                    <!-- Image -->
                    <div class="image-box image-hover text-center">
                        <div class="image">
                            <a href="<?php echo ENV_ROOTURL; ?>assets/img/Gallery/Wedding/wed(3).jpg" data-lightbox="gallery" data-title="Image Title"><img src="<?php echo ENV_ROOTURL; ?>assets/img/Gallery/Wedding/wed(3).jpg" alt=""></a>
                        </div>
                        <div class="title">
                            <a href="#">
                                <h5 class="mb-0">Vestibulum sollicitudin</h5>
                                <span class="text-muted">Vestibulum</span>
                            </a>
                        </div>
                    </div>
                </div> 

                <div class="masonry-item weddings col-md-3 col-sm-6 col-xs-12">
                    <!-- Image -->
                    <div class="image-box image-hover text-center">
                        <div class="image">
                            <a href="<?php echo ENV_ROOTURL; ?>assets/img/Gallery/Wedding/wed(4).jpg" data-lightbox="gallery" data-title="Image Title"><img src="<?php echo ENV_ROOTURL; ?>assets/img/Gallery/Wedding/wed(4).jpg" alt=""></a>
                        </div>
                        <div class="title">
                            <a href="#">
                                <h5 class="mb-0">Vestibulum sollicitudin</h5>
                                <span class="text-muted">Vestibulum</span>
                            </a>
                        </div>
                    </div>
                </div>
                
                

                <div class="masonry-item live-concert col-md-3 col-sm-6 col-xs-12">
                    <!-- Image -->
                    <div class="image-box image-hover text-center">
                        <div class="image">
                            <a href="<?php echo ENV_ROOTURL; ?>assets/img/Gallery/live-concert/live.jpg" data-lightbox="gallery" data-title="Image Title"><img src="<?php echo ENV_ROOTURL; ?>assets/img/Gallery/live-concert/live.jpg" alt=""></a>
                        </div>
                        <div class="title">
                            <a href="#">
                                <h5 class="mb-0">Vestibulum sollicitudin</h5>
                                <span class="text-muted">Vestibulum</span>
                            </a>
                        </div>
                    </div>
                </div> 

                
                <div class="masonry-item live-concert col-md-3 col-sm-6 col-xs-12">
                    <!-- Image -->
                    <div class="image-box image-hover text-center">
                        <div class="image">
                            <a href="<?php echo ENV_ROOTURL; ?>assets/img/Gallery/live-concert/live2.jpg" data-lightbox="gallery" data-title="Image Title"><img src="<?php echo ENV_ROOTURL; ?>assets/img/Gallery/live-concert/live2.jpg" alt=""></a>
                        </div>
                        <div class="title">
                            <a href="#">
                                <h5 class="mb-0">Vestibulum sollicitudin</h5>
                                <span class="text-muted">Vestibulum</span>
                            </a>
                        </div>
                    </div>
                </div> 
                
                
                <div class="masonry-item live-concert col-md-3 col-sm-6 col-xs-12">
                    <!-- Image -->
                    <div class="image-box image-hover text-center">
                        <div class="image">
                            <a href="<?php echo ENV_ROOTURL; ?>assets/img/Gallery/live-concert/live3.jpg" data-lightbox="gallery" data-title="Image Title"><img src="<?php echo ENV_ROOTURL; ?>assets/img/Gallery/live-concert/live3.jpg" alt=""></a>
                        </div>
                        <div class="title">
                            <a href="#">
                                <h5 class="mb-0">Vestibulum sollicitudin</h5>
                                <span class="text-muted">Vestibulum</span>
                            </a>
                        </div>
                    </div>
                </div>
                

                <div class="masonry-item logo-design col-md-3 col-sm-6 col-xs-12">
                    <!-- Image -->
                    <div class="image-box image-hover text-center">
                        <div class="image">
                            <a href="<?php echo ENV_ROOTURL; ?>assets/img/Gallery/logo-design/Club-cafe.jpg" data-lightbox="gallery" data-title="Image Title"><img src="<?php echo ENV_ROOTURL; ?>assets/img/Gallery/logo-design/Club-cafe.jpg" alt=""></a>
                        </div>
                        <div class="title">
                            <a href="#">
                                <h5 class="mb-0">Vestibulum sollicitudin</h5>
                                <span class="text-muted">Vestibulum</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="masonry-item logo-design col-md-3 col-sm-6 col-xs-12">
                    <!-- Image -->
                    <div class="image-box image-hover text-center">
                        <div class="image">
                            <a href="<?php echo ENV_ROOTURL; ?>assets/img/Gallery/logo-design/comp-and-mod.jpg" data-lightbox="gallery" data-title="Image Title"><img src="<?php echo ENV_ROOTURL; ?>assets/img/Gallery/logo-design/comp-and-mod.jpg" alt=""></a>
                        </div>
                        <div class="title">
                            <a href="#">
                                <h5 class="mb-0">Vestibulum sollicitudin</h5>
                                <span class="text-muted">Vestibulum</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="masonry-item logo-design col-md-3 col-sm-6 col-xs-12">
                    <!-- Image -->
                    <div class="image-box image-hover text-center">
                        <div class="image">
                            <a href="<?php echo ENV_ROOTURL; ?>assets/img/Gallery/logo-design/mgt.jpg" data-lightbox="gallery" data-title="Image Title"><img src="<?php echo ENV_ROOTURL; ?>assets/img/Gallery/logo-design/mgt.jpg" alt=""></a>
                        </div>
                        <div class="title">
                            <a href="#">
                                <h5 class="mb-0">Vestibulum sollicitudin</h5>
                                <span class="text-muted">Vestibulum</span>
                            </a>
                        </div>
                    </div>
                </div>
 


            </div>
        </div>

    </section>



    <?php
    include 'inc/footer.php';
    include 'inc/js_scripts.php';
    ?>

</body>