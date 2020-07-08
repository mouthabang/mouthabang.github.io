<?php
include_once 'env/config.php';

$strPageSlider = TRUE;
$strPageHero = TRUE;
include 'inc/header.php';
?>
<div id="content">
    <body class="one-page header-absolute">

        <!-- Loader -->
        <div id="page-loader"><svg class="loader-1 loader-primary" width="65px" height="65px" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg"><circle class="circle" fill="none" stroke-width="3" stroke-linecap="round" cx="33" cy="33" r="30"></circle></svg></div>
        <!-- Loader / End -->

        

        <?php
        if (Detect::isMobile())
            {
            ?>
            <br><br><br><br><br>
                               <!-- Heading start -->
                                <section id="home" class="fullheight dark bg-black">

                                    <div class="bg-image zooming">
                                        <img src="<?php echo ENV_ROOTURL; ?>assets/img/film-couple.jpg" alt="">
                                    </div>

                                    <div class="container v-center text-center">
                                        <h1 class="mb-5 text-bg bg-secondary font-secondary" ></h1>
                                    </div>
                                    <div class="container v-center text-center">
                                        <h1 class="mb-5 text-bg bg-secondary font-secondary " ></h1>
                                    </div>
                                    <div class="container v-center text-center">
                                        <h1 class="mb-5 text-bg bg-secondary font-secondary " ></h1>
                                    </div>

                                </section>
                              <!-- Heading End -->

                               <!-- Production House start -->
                                <section class="container">
                                    <div class="row">

                                        <div class="col-md-6 bg-white">
                                            <h1 class="">EONMEDIA (Pty) Ltd</h1>
                                            <p class="lead mb-60" >EONMEDIA (Pty) Ltd is a full service Garden Route based video, photo and creative production company specialising in an array of areas including weddings, corporate, live broadcasting, marketing, event, advertising, catalogue, fashion and website videos, photography and design. </p>
                                            <p class="lead mb-60" >Our services are only limited to our client’s imagination! We pride ourselves in taking the time to understand the individual requirements of each of our clients, making our service personal and professional to deliver a production uniquely every time.  </p>

                                        </div>

                                    </div>
                                    <div class="row animated"  data-animation="slideInUp" data-animation-delay="100">
                                        <img src="<?php echo ENV_ROOTURL; ?>assets/img/index-music-video.jpg">

                                    </div>
                                </section><!-- Production House end -->



                               <section class="bg-white"><!-- Production House Start -->

                                    <div class="container text-center">
                                        <h1>Services</h1>

                                            <p class="lead text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </section><!-- Production House Start -->



                                <section class="bg-grey pt-0 protrude">
                                    <div class="container">
                                        <div class="row pull-up-40 mb-60">
                                            <div class="col-md-4">
                                                <!-- Service 1 -->

                                                <div class="feature feature-3 animated"  data-animation="slideInUp" data-animation-delay="100">
                                                    <img src="<?php echo ENV_ROOTURL; ?>assets/img/1.jpg" alt="">
                                                        <div class="feature-content text-center bg-white">
                                                            <h5>Corporate Advertising</h5>
                                                            <a class="btn  btn-danger btn-block" href="<?php echo ENV_ROOTURL; ?>services.php#Corporate"><span>View Details</span></a>
                                                        </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <!-- Service 2 -->
                                                <div class="feature feature-3 animated"  data-animation="slideInUp" data-animation-delay="100">
                                                    <img src="<?php echo ENV_ROOTURL; ?>assets/img/2.jpg" alt="">
                                                        <div class="feature-content text-center bg-white">

                                                            <h5>Live Broadcasting</h5>
                                                            <a class="btn  btn-danger btn-block" href="<?php echo ENV_ROOTURL; ?>services.php#live"><span>View Details</span></a>
                                                        </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <!-- Service -->
                                                <div class="feature feature-3 animated"  data-animation="slideInUp" data-animation-delay="100">
                                                    <img src="<?php echo ENV_ROOTURL; ?>assets/img/3.jpg" alt="">
                                                        <div class="feature-content text-center bg-white"><br>
                                                                <h5>Event Management</h5>
                                                                <a class="btn  btn-danger btn-block" href="<?php echo ENV_ROOTURL; ?>services.php#event"><span>View Details</span></a>
                                                        </div>
                                                </div>
                                            </div>


                                        </div>

                                        <div class="row pull-up-40 md-60">

                                            <div class="col-md-4">
                                                <!-- Service -->
                                                <div class="feature feature-3 animated"  data-animation="slideInUp" data-animation-delay="100">
                                                    <img src="<?php echo ENV_ROOTURL; ?>assets/img/4.jpg" alt="">
                                                        <div class="feature-content text-center bg-white">
                                                            <h5>Music Video's</h5>
                                                            <a class="btn  btn-danger btn-block" href="<?php echo ENV_ROOTURL; ?>services.php#musicVideo"><span>View Details</span></a>
                                                        </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <!-- Service -->
                                                <div class="feature feature-3 animated"  data-animation="slideInUp" data-animation-delay="100">
                                                    <img src="<?php echo ENV_ROOTURL; ?>assets/img/5.jpg" alt="">
                                                        <div class="feature-content text-center bg-white">
                                                            <h5>YouTube Video Productions</h5>
                                                            <a class="btn  btn-danger btn-block" href="<?php echo ENV_ROOTURL; ?>services.php#YouTube"><span>View Details</span></a>
                                                        </div>
                                                </div>
                                            </div>


                                            <div class="col-md-4">
                                                <!-- Service -->
                                                <div class="feature feature-3 animated"  data-animation="slideInUp" data-animation-delay="100">
                                                    <img src="<?php echo ENV_ROOTURL; ?>assets/img/6.jpg" alt="">
                                                        <div class="feature-content text-center bg-white">
                                                            <h5>Social Media Management</h5>
                                                            <a class="btn  btn-danger btn-block" href="<?php echo ENV_ROOTURL; ?>services.php#Social"><span>View Details</span></a>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </section>

                                <?php
                                }

                            if (Detect::isComputer() || Detect::isTablet())
                                {
                               
                                ?>
                                <br><br><br><br><br>
                                                    <!-- Carousel Start -->
                                                    <div class="carousel inner-controls h-lg cover dark bg-black" data-single-item="true" data-autoplay="7000" data-pagination="true" data-navigation="true" data-transition="fade">   <!-- Slide -->

                                                        <div class="slide h-lg"><!-- Slide1 Start -->
                                                            <div class="bg-image"><img src="<?php echo ENV_ROOTURL; ?>assets/img/film-couple.jpg" alt="film garden route south africa"></div>
                                                            <div class="container v-center">
                                                                <div class="row">
                                                                    <div class="col-lg-6 col-md-8 ">
                                                                        <h1 class="font-secondary">Professional Cinematography & Photography</h1>
                                                                        <div class="col-sm-6">
                                                                            <a href="<?php echo ENV_ROOTURL; ?>services.php#Corporate" class="btn btn-default">View Services<i class="i-after ti-arrow-right"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- Slide1 End -->

                                                        <div class="slide h-lg"><!-- Slide2 Start -->
                                                            <div class="bg-image"><img src="<?php echo ENV_ROOTURL; ?>assets/img/merc-full.jpg" alt=""></div>
                                                            <div class="container v-center">
                                                                <div class="row">
                                                                    <div class="col-lg-6 col-md-8 ">
                                                                        <h1 class="font-secondary">Corporate Advertisements, Events & Broadcasting</h1>
                                                                        <div class="col-sm-6">
                                                                            <a href="<?php echo ENV_ROOTURL; ?>services.php#Corporate" class="btn btn-default">View Details<i class="i-after ti-arrow-right"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- Slide2 End -->


                                                        <div class="slide h-lg"><!-- Slide3 Start -->
                                                            <div class="bg-image"><img src="<?php echo ENV_ROOTURL; ?>assets/img/elvis-video.jpg" alt=""></div>
                                                            <div class="container v-center">
                                                                <div class="row">
                                                                    <div class="col-lg-6 col-md-8 ">
                                                                        <h1 class="font-secondary">Creatively Unique Music Videos</h1>
                                                                        <p>for local artists, offering scriptwriting, filming, casting, set building, and production of the finest quality</p>
                                                                        <div class="col-sm-6">
                                                                            <a href="<?php echo ENV_ROOTURL; ?>services.php#musicVideo" class="btn btn-default">View Details<i class="i-after ti-arrow-right"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- Slide4 End -->
                                                        <div class="slide h-lg"><!-- Slide4 Start -->
                                                            <div class="bg-image"><img src="<?php echo ENV_ROOTURL; ?>assets/img/film-shoot.jpg" alt=""></div>
                                                            <div class="container v-center">
                                                                <div class="row">
                                                                    <div class="col-lg-6 col-md-8 ">
                                                                        <h1 class="font-secondary">Film To Corporate TV Advertising</h1>

                                                                        <div class="col-sm-6">
                                                                            <a href="<?php echo ENV_ROOTURL; ?>services.php#Corporate" class="btn btn-default">View Details<i class="i-after ti-arrow-right"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- Slide4 End -->

                                                    </div>
                                                    <!-- Carousel End -->



                                                    <!-- Section / Edge -->

                                                    <div id="about" class="bg-grey"><br><br>

                                                                <div class="container">
                                                                    <div class="row row-double right ">
                                                                        <div class="col-md-6 image video-box placeholder-image">
                                                                            <div class="image bg-image" >

                                                                                <img src="<?php echo ENV_ROOTURL; ?>assets/img/index-music-video.jpg" alt="" class="mb-40">

                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6 content bg-white">
                                                                            <h1 class="animated">EONMEDIA (Pty) Ltd</h1>
                                            <p class="lead mb-60" >EONMEDIA (Pty) Ltd is a full service Garden Route based video, photo and creative production company specialising in an array of areas including weddings, corporate, live broadcasting, marketing, event, advertising, catalogue, fashion and website videos, photography and design. </p>
                                            <p class="lead mb-60 animated" >Our services are only limited to our client’s imagination! We pride ourselves in taking the time to understand the individual requirements of each of our clients, making our service personal and professional to deliver a production uniquely every time.  </p>
                                                                        </div>
                                                                    </div>

                                                                </div><br><br>
                                                                        </div>

                                                                        <section class="fullheight dark">
                                                                            <!-- BG Image -->
                                                                            <div class="bg-parallax" data-parallax="scroll" data-image-src="<?php echo ENV_ROOTURL; ?>assets/img/merc-logo.jpg"></div>

                                                                            <div class="v-center text-center">
                                                                                <h2>We capture that beautiful moment</h2>
                                                                                <h3 class="lead">..and make it last forever.</h3>
                                                                            </div>
                                                                        </section>



                                                                        <div class="page-title page-title-4 bg-white">
                                                                            <div class="container text-center">
                                                                                <h1>Services</h1><br>

                                                                                    <p class="lead text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                                            </div>
                                                                        </div>


                                                                        <!-- Section-->
                                                                        <section class="bg-grey pt-0 protrude">
                                                                            <div class="container">
                                                                                <div class="row pull-up-40 mb-60">
                                                                                    <div class="col-md-4">
                                                                                        <!-- Service -->
                                                                                        <div class="feature feature-3">
                                                                                            <img src="<?php echo ENV_ROOTURL; ?>assets/img/1.jpg" alt="">
                                                                                                <div class="feature-content text-center bg-white">
                                                                                                    <h5>Corporate Advertising</h5>
                                                                                                    <a class="btn  btn-danger btn-block" href="<?php echo ENV_ROOTURL; ?>services.php#Corporate"><span>View Details</span></a>
                                                                                                </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-4">
                                                                                        <!-- Service -->
                                                                                        <div class="feature feature-3">
                                                                                            <img src="<?php echo ENV_ROOTURL; ?>assets/img/2.jpg" alt="">
                                                                                                <div class="feature-content text-center bg-white">

                                                                                                    <h5>Live Broadcasting</h5>
                                                                                                    <a class="btn  btn-danger btn-block" href="<?php echo ENV_ROOTURL; ?>services.php#live"><span>View Details</span></a>
                                                                                                </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-4">
                                                                                        <!-- Service -->
                                                                                        <div class="feature feature-3">
                                                                                            <img src="<?php echo ENV_ROOTURL; ?>assets/img/3.jpg" alt="">
                                                                                                <div class="feature-content text-center bg-white"><br>
                                                                                                        <h5>Event Management</h5>
                                                                                                        <a class="btn  btn-danger btn-block" href="<?php echo ENV_ROOTURL; ?>services.php#event"><span>View Details</span></a>
                                                                                                </div>
                                                                                        </div>
                                                                                    </div>


                                                                                </div>

                                                                                <div class="row pull-up-40 md-60">

                                                                                    <div class="col-md-4">
                                                                                        <!-- Service -->
                                                                                        <div class="feature feature-3">
                                                                                            <img src="<?php echo ENV_ROOTURL; ?>assets/img/4.jpg" alt="">
                                                                                                <div class="feature-content text-center bg-white">
                                                                                                    <h5>Music Video's</h5>
                                                                                                    <a class="btn  btn-danger btn-block" href="<?php echo ENV_ROOTURL; ?>services.php#musicVideo"><span>View Details</span></a>
                                                                                                </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="col-md-4">
                                                                                        <!-- Service -->
                                                                                        <div class="feature feature-3">
                                                                                            <img src="<?php echo ENV_ROOTURL; ?>assets/img/5.jpg" alt="">
                                                                                                <div class="feature-content text-center bg-white">
                                                                                                    <h5>Video Productions</h5>
                                                                                                    <a class="btn  btn-danger btn-block" href="<?php echo ENV_ROOTURL; ?>services.php#YouTube"><span>View Details</span></a>
                                                                                                </div>
                                                                                        </div>
                                                                                    </div>


                                                                                    <div class="col-md-4">
                                                                                        <!-- Service -->
                                                                                        <div class="feature feature-3">
                                                                                            <img src="<?php echo ENV_ROOTURL; ?>assets/img/6.jpg" alt="">
                                                                                                <div class="feature-content text-center bg-white">
                                                                                                    <h5>Social Media Management</h5>
                                                                                                    <a class="btn  btn-danger btn-block" href="<?php echo ENV_ROOTURL; ?>services.php#Social"><span>View Details</span></a>
                                                                                                </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                            </div>

                                                                        </section>

                                                                        </div>








                                                                        <?php
                                                                        }
                                                                    ?>

                                                                    </div>
                                                                    <?php
                                                                    include 'inc/footer.php';
                                                                    include 'inc/js_scripts.php';
                                                                    ?>

                                                                    </body>