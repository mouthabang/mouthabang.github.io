<?php
include_once 'env/config.php';
include 'inc/header.php';
?>
<!--======= HOME PAGE MAIN SLIDER Mobile view-->
<?php
if (Detect::isMobile())
    {
    ?>
    <section class="home-slider">
        <!-- Slider Loader -->
        <div id="loader" class="hom-slie">
            <div class="tp-loader spinner0"> <span class="dot1"></span> <span class="dot2"></span> <span class="bounce1"></span> <span class="bounce2"></span> <span class="bounce3"></span> </div>
        </div>

        <!-- SLIDE Start -->
        <div class="tp-banner-container">
            <div class="tp-banner">
                <ul>
                    <!-- SLIDE  1-->
                    <li data-transition="random" data-slotamount="7" data-masterspeed="300"  data-saveperformance="off" >
                        <!-- MAIN IMAGE -->
                        <img src="<?php echo ENV_ROOTURL; ?>assets/img/slide1.jpg"  alt="slider"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">
                        <!-- LAYERS -->

                        <!-- Heading NR. 1 -->
                        <div class="tp-caption sfr font-extra-bold tp-resizeme"
                             data-x="center" data-hoffset="0"
                             data-y="center" data-voffset="0"
                             data-speed="800"
                             data-start="1500"
                             data-easing="Power3.easeInOut"
                             data-splitin="chars"
                             data-splitout="none"
                             data-elementdelay="0.07"
                             data-endelementdelay="0.1"
                             data-endspeed="300"
                             style="z-index: 8; font-size:210px; color:#fff; white-space: nowrap; padding-bottom: 150px;">ViralAdCo</div>


                        <!-- Sub heading NR. 2 -->
                        <div class="tp-caption font-playfair sfb tp-resizeme"
                             data-x="center" data-hoffset="0"
                             data-y="center" data-voffset="80"
                             data-speed="800"
                             data-start="2000"
                             data-easing="Power3.easeInOut"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.1"
                             data-endelementdelay="0.1"
                             data-endspeed="300"
                             style=" padsz-index: 10; font-size:30px; color:#fff; max-width: auto; max-height: auto; padding-bottom: 100px; white-space: nowrap;">Brand Architects Through Advanced Technology</div>

                        <!-- Button. 3 -->

                        <div class="tp-caption lfb tp-scrollbelowslider"
                             data-x="center" data-hoffset="0"
                             data-y="center" data-voffset="180"
                             data-speed="800"
                             data-start="2400"
                             data-elementdelay="0.1"
                             data-endelementdelay="0.1"
                             data-endspeed="300"
                             data-scrolloffset="0"
                             style="z-index: 8; color:#fff;"><a href="#whoAreWe" class="btn smoothScroll">Who we are</a> </div>
                    </li>

                    <!-- SLIDE  2-->
                    <li data-transition="random" data-slotamount="7" data-masterspeed="300"  data-saveperformance="off" >
                        <!-- MAIN IMAGE -->
                        <img src="<?php echo ENV_ROOTURL; ?>assets/img/slide2.jpg"  alt="home_slider2"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">
                        <!-- LAYERS -->

                        <!-- Heading . 1 -->
                        <div class="tp-caption sft tp-resizeme"
                             data-x="center" data-hoffset="0"
                             data-y="center" data-voffset="-90"
                             data-speed="600"
                             data-start="500"
                             data-easing="Power3.easeInOut"
                             data-splitin="chars"
                             data-splitout="none"
                             data-elementdelay="0.07"
                             data-endelementdelay="0.1"
                             data-endspeed="300"
                             style="z-index: 5; font-size:36px; color:#fff;  max-width: auto; max-height: auto; white-space: nowrap; padding-bottom: 150px;">
                            full 360 degree connection with clients and leads</div>

                        <!-- Heading. 2 -->
                        <div class="tp-caption font-bold tp-resizeme"
                             data-x="center" data-hoffset="0"
                             data-y="center" data-voffset="0"
                             data-speed="300"
                             data-start="1000"
                             data-easing="Power3.easeInOut"
                             data-splitin="chars"
                             data-splitout="none"
                             data-elementdelay="0.1"
                             data-endelementdelay="0.1"
                             data-endspeed="300"
                             style="z-index: 5; font-size:110px; color:#fff; max-width: auto; max-height: auto; white-space: nowrap; padding-bottom: 150px;">
                            Brand Architects</div>

                        <!-- Button. 3 -->
                        <div class="tp-caption lfb tp-scrollbelowslider"
                             data-x="center" data-hoffset="0"
                             data-y="center" data-voffset="180"
                             data-speed="800"
                             data-start="2400"
                             data-easing="Power3.easeInOut"
                             data-elementdelay="0.1"
                             data-endelementdelay="0.1"
                             data-endspeed="300"
                             data-scrolloffset="0"
                             style="z-index: 8;"><a href="#." class="btn smoothScroll">Who we are</a> </div>

                    </li>
                    <!-- SLIDE  3-->
                    <li data-transition="random" data-slotamount="7" data-masterspeed="300"  data-saveperformance="off" >
                        <!-- MAIN IMAGE -->
                        <img src="<?php echo ENV_ROOTURL; ?>assets/img/slide3.jpg"  alt="home_slider3"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">
                        <!-- LAYERS -->

                        <!-- Heading 1 -->
                        <div class="tp-caption font-bold tp-resizeme"
                             data-x="center" data-hoffset="0"
                             data-y="center" data-voffset="-60"
                             data-speed="300"
                             data-start="1000"
                             data-easing="Power3.easeInOut"
                             data-splitin="chars"
                             data-splitout="none"
                             data-elementdelay="0.1"
                             data-endelementdelay="0.1"
                             data-endspeed="300"
                             style="z-index: 5; font-size:60px; color:#fff; max-width: auto; max-height: auto; white-space: nowrap;">
                            Direct Link With Your Clients </div>

                        <!-- Small text 2 -->
                        <div class="tp-caption font-playfair font-italic sfb tp-resizeme"
                             data-x="center" data-hoffset="0"
                             data-y="center" data-voffset="-20"
                             data-speed="500"
                             data-start="2100"
                             data-easing="Power3.easeInOut"
                             data-splitin="chars"
                             data-splitout="none"
                             data-elementdelay="0.07"
                             data-endelementdelay="0.1"
                             data-endspeed="300"
                             style="z-index: 6; font-size:30px; color:#fff; max-width: auto; max-height: auto; white-space: nowrap;">
                            effortless connectivity</div>

                        <!-- Button 1 -->
                        <div class="tp-caption skewfromleft tp-resizeme"
                             data-x="center" data-hoffset="-150"
                             data-y="center" data-voffset="120"
                             data-speed="500"
                             data-start="2500"
                             data-easing="Power3.easeInOut"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.1"
                             data-endelementdelay="0.1"
                             data-endspeed="300"
                             style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;"><a href="<?php echo ENV_ROOTURL; ?>services.php" class="btn btn-med btn-color">
                                View Services</a> </div>

                        <!--

                        -->
                        <!-- Button 2 -->
                        <div class="tp-caption lfb skewfromright tp-resizeme"
                             data-x="center" data-hoffset="150"
                             data-y="center" data-voffset="120"
                             data-speed="500"
                             data-start="2800"
                             data-easing="Power3.easeInOut"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.1"
                             data-endelementdelay="0.1"
                             data-endspeed="300"
                             style="z-index: 8; max-width: auto; max-height: auto; white-space: nowrap;"><a href="<?php echo ENV_ROOTURL; ?>about.php" class="btn btn-med btn-color">
                                About Us</a> </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <?php
    }
?>

<?php
if (Detect::isComputer() || Detect::isTablet())
    {
    ?>
    <!--======= HOME PAGE MAIN SLIDER || Detect::isMobile()=========-->
    <section class="home-slider">
        <!-- Slider Loader -->
        <div id="loader" class="hom-slie">
            <div class="tp-loader spinner0"> <span class="dot1"></span> <span class="dot2"></span> <span class="bounce1"></span> <span class="bounce2"></span> <span class="bounce3"></span> </div>
        </div>

        <!-- SLIDE Start -->
        <div class="tp-banner-container">
            <div class="tp-banner">
                <ul>
                    <!-- SLIDE  1-->
                    <li data-transition="random" data-slotamount="7" data-masterspeed="300"  data-saveperformance="off" >
                        <!-- MAIN IMAGE -->
                        <img src="<?php echo ENV_ROOTURL; ?>assets/img/slide1.jpg"  alt="slider"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">
                        <!-- LAYERS -->

                        <!-- Heading NR. 1 -->
                        <div class="tp-caption sfr font-extra-bold tp-resizeme"
                             data-x="center" data-hoffset="0"
                             data-y="center" data-voffset="0"
                             data-speed="800"
                             data-start="1500"
                             data-easing="Power3.easeInOut"
                             data-splitin="chars"
                             data-splitout="none"
                             data-elementdelay="0.07"
                             data-endelementdelay="0.1"
                             data-endspeed="300"
                             style="z-index: 6; font-size:110px; color:#fff; white-space: nowrap;">ViralAdCo</div>

                        <!-- Sub heading NR. 2 -->
                        <div class="tp-caption font-playfair sfb tp-resizeme"
                             data-x="center" data-hoffset="0"
                             data-y="center" data-voffset="80"
                             data-speed="800"
                             data-start="2000"
                             data-easing="Power3.easeInOut"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.1"
                             data-endelementdelay="0.1"
                             data-endspeed="300"
                             style="z-index: 7; font-size:16px; color:#fff; max-width: auto; max-height: auto; white-space: nowrap;">Brand Architects Through Advanced Technology</div>

                        <!-- Button. 3 -->
                        <div class="tp-caption lfb tp-scrollbelowslider"
                             data-x="center" data-hoffset="0"
                             data-y="center" data-voffset="180"
                             data-speed="800"
                             data-start="2400"
                             data-easing="Power3.easeInOut"
                             data-elementdelay="0.1"
                             data-endelementdelay="0.1"
                             data-endspeed="300"
                             data-scrolloffset="0"
                             style="z-index: 8;"><a href="#whoAreWe" class="btn smoothScroll">Who we are</a> </div>
                    </li>

                    <!-- SLIDE  2-->
                    <li data-transition="random" data-slotamount="7" data-masterspeed="300"  data-saveperformance="off" >
                        <!-- MAIN IMAGE -->
                        <img src="<?php echo ENV_ROOTURL; ?>assets/img/slide2.jpg"  alt="home_slider2"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">
                        <!-- LAYERS -->

                        <!-- Heading NR. 1 -->
                        <div class="tp-caption sft tp-resizeme"
                             data-x="center" data-hoffset="0"
                             data-y="center" data-voffset="-90"
                             data-speed="600"
                             data-start="500"
                             data-easing="Power3.easeInOut"
                             data-splitin="chars"
                             data-splitout="none"
                             data-elementdelay="0.07"
                             data-endelementdelay="0.1"
                             data-endspeed="300"
                             style="z-index: 5; font-size:36px; color:#fff;  max-width: auto; max-height: auto; white-space: nowrap;">
                            full 360 degree connection with clients and leads</div>

                        <!-- Heading. 2 -->
                        <div class="tp-caption font-bold tp-resizeme"
                             data-x="center" data-hoffset="0"
                             data-y="center" data-voffset="0"
                             data-speed="300"
                             data-start="1000"
                             data-easing="Power3.easeInOut"
                             data-splitin="chars"
                             data-splitout="none"
                             data-elementdelay="0.1"
                             data-endelementdelay="0.1"
                             data-endspeed="300"
                             style="z-index: 5; font-size:110px; color:#fff; max-width: auto; max-height: auto; white-space: nowrap;">
                            Brand Architects</div>

                        <!-- Button. 3 -->
                        <div class="tp-caption sft tp-resizeme"
                             data-x="center" data-hoffset="0"
                             data-y="center" data-voffset="180"
                             data-speed="400"
                             data-start="1500"
                             data-easing="Power3.easeInOut"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.1"
                             data-endelementdelay="0.1"
                             data-endspeed="300"
                             style="z-index: 10; max-width: auto; max-height: auto; white-space: nowrap;"><a href="#services" class="btn btn-med btn-color smoothScroll">
                                View Services</a> </div>
                    </li>
                    <!-- SLIDE  3-->
                    <li data-transition="random" data-slotamount="7" data-masterspeed="300"  data-saveperformance="off" >
                        <!-- MAIN IMAGE -->
                        <img src="<?php echo ENV_ROOTURL; ?>assets/img/slide3.jpg"  alt="home_slider3"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">
                        <!-- LAYERS -->

                        <!-- Heading 1 -->
                        <div class="tp-caption font-bold tp-resizeme"
                             data-x="center" data-hoffset="0"
                             data-y="center" data-voffset="-60"
                             data-speed="300"
                             data-start="1000"
                             data-easing="Power3.easeInOut"
                             data-splitin="chars"
                             data-splitout="none"
                             data-elementdelay="0.1"
                             data-endelementdelay="0.1"
                             data-endspeed="300"
                             style="z-index: 5; font-size:60px; color:#fff; max-width: auto; max-height: auto; white-space: nowrap;">
                            Direct Link With Your Clients </div>

                        <!-- Small text 2 -->
                        <div class="tp-caption font-playfair font-italic sfb tp-resizeme"
                             data-x="center" data-hoffset="0"
                             data-y="center" data-voffset="-20"
                             data-speed="500"
                             data-start="2100"
                             data-easing="Power3.easeInOut"
                             data-splitin="chars"
                             data-splitout="none"
                             data-elementdelay="0.07"
                             data-endelementdelay="0.1"
                             data-endspeed="300"
                             style="z-index: 6; font-size:30px; color:#fff; max-width: auto; max-height: auto; white-space: nowrap;">
                            effortless connectivity</div>

                        <!-- Button 1 -->
                        <div class="tp-caption skewfromleft tp-resizeme"
                             data-x="center" data-hoffset="-150"
                             data-y="center" data-voffset="120"
                             data-speed="500"
                             data-start="2500"
                             data-easing="Power3.easeInOut"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.1"
                             data-endelementdelay="0.1"
                             data-endspeed="300"
                             style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;"><a href="<?php echo ENV_ROOTURL; ?>services.php" class="btn btn-med btn-color">
                                View Services</a> </div>

                        <!-- Button 2 -->
                        <div class="tp-caption skewfromright tp-resizeme"
                             data-x="center" data-hoffset="150"
                             data-y="center" data-voffset="120"
                             data-speed="500"
                             data-start="2800"
                             data-easing="Power3.easeInOut"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.1"
                             data-endelementdelay="0.1"
                             data-endspeed="300"
                             style="z-index: 8; max-width: auto; max-height: auto; white-space: nowrap;"><a href="<?php echo ENV_ROOTURL; ?>about.php" class="btn btn-med btn-color">
                                About Us</a> </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <?php
    }
if (Detect::isComputer() || Detect::isTablet() || Detect::isMobile())
    {
    ?>

    <div id="content">

        <!-- WHO WE ARE -->
        <section class="who-we-are parallax-bg padding-top-100 padding-bottom-100" id="whoAreWe">
            <div class="container">
                <div class="row padding-bottom-150">

                    <!-- Content Start -->
                    <div class="col-md-7">

                        <!-- Heading Block -->
                        <div class="heading-block margin-bottom-50">
                            <h6 class="animate fadeInRight" data-wow-delay="0.4s">Who we are ?</h6>
                            <hr class="animate fadeInLeft" data-wow-delay="0.4s">
                            <h3 class="animate fadeInUp" data-wow-delay="0.4s">we are technology advanced<span>  brand & marketing agency </span> driven by a highly motivated team of specialists.</h3>
                        </div>

                        <!-- Text -->
                        <p class="animate fadeInUp" data-wow-delay="0.4s">We possess of leading market technology integration integrated to provide a full circle brand and marketing exposure. Simply put we don't just publish information we do a full 360 degree and convert clicks to clients. From publishing on Social media right through to high lead conversion through AI, Machine Learning and ChatBots.<br>
                            <br>
                            We are focused on the success of your brand and our cross-category expertise provide a wealth of insight and leadership that is unmatched. We’re in it for the long haul, to meticulously design and produce your most marketable vision.</p>


                        <a href="#." class="btn btn-dark  animate fadeInUp" data-wow-delay="0.4s">LEARN MORE</a> </div>
                </div>
            </div>
        </section>



        <!-- Section 2 -->
        <section class="light-gray-bg padding-top-100 padding-bottom-100" id="services">
            <div class="container">
                <!-- Heading -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="heading-block wow fadeInUp" data-wow-delay="0.4s">
                            <h3 class="wow fadeInUp margin-bottom-40" data-wow-delay="0.4s">Why choose <span> ViralAdCo </span></h3>
                            <hr class="wow fadeInLeft" data-wow-delay="0.4s">
                            <p>We are a highly advanced technology company in the brand and marketing space.  ViralAdCo is excellently credentialed to develop your brand. Our extensive list of international and local corporate clients need no introduction.
                                <br>
                                <br></p>

                        </div>
                    </div>
                </div>
            </div>

            <!--Details-->

            <div class="row padding-bottom-50">


                <div class="col-md-5 col-xs-12 no-padding wow fadeInLeft" data-wow-delay="0.4s">
                    <img class="img-responsive" src="<?php echo ENV_ROOTURL; ?>assets/img/business.jpg" alt="" >                </div>
                <div class="col-md-6 col-xs-12">
                    <h3 class="text-center">We offer services such as:<br><br></h3>


                    <?php
                    if (Detect::isComputer() || Detect::isTablet())
                        {
                        ?>
                        <ul class="col-md-12  no-padding">
                            <li class="col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
                                <h6>Branding  <i class="ion-bag icon-size-25"></i> </h6>
                                <p>We specialise in all fields of brand development across all conceivable categories, including brand design, web development, film media and digital marketing management.</p>

                            </li>
                            <li class="col-sm-6 wow fadeInUp" data-wow-delay="0.6s">
                                <h6>Marketing  <i class="ion-speakerphone icon-size-25"></i></h6>
                                <p>Clear Return On Investment approach per product or service.</p><br><br><br><br>
                            </li>

                        </ul>
                        <div class="row">

                            <div class="col-md-6">
                                <a class= "btn btn-block btn-dark smoothScroll" href="<?php echo ENV_ROOTURL; ?>services.php#Branding">  View Details</a>
                            </div>

                            <div class="col-md-6">
                                <a class= "btn btn-block btn-dark smoothScroll" href="<?php echo ENV_ROOTURL; ?>services.php#Marketing">  View Details</a>
                            </div>
                        </div>
                        <ul class="col-md-12  no-padding">
                            <li class="col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
                                <h6>Advertising  <i class="icon-screen-desktop icon-size-25"></i> </h6>
                                <p>Enjoy a well established connection base with all broadcasting and printing houses.</p>

                            </li>
                            <li class="col-sm-6 wow fadeInUp" data-wow-delay="0.6s">
                                <h6>Social Media Integration <i class="icon-share icon-size-25"></i></h6>
                                <p>Integrated technology systems from landing pages to conversion of leads to upgrade of CRM client data</p>
                            </li>

                        </ul>
                        <div class="row">
                            <div class="col-md-6">
                                <a class= "btn btn-block btn-dark smoothScroll" href="<?php echo ENV_ROOTURL; ?>services.php#Advertising">  View Details</a>
                            </div>

                            <div class="col-md-6">
                                <a class= "btn btn-block btn-dark smoothScroll" href="<?php echo ENV_ROOTURL; ?>services.php#SocialMedia">  View Details</a>
                            </div>
                        </div>


                        <ul class="col-md-12  no-padding">
                            <li class="col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
                                <h6>Integrated Technology  <i class="ion-hammer icon-size-25"></i> </h6>
                                <p>Marketing software that helps you grow your business effortlessly.</p>

                            </li>
                            <li class="col-sm-6 wow fadeInUp" data-wow-delay="0.6s">
                                <h6>OmniChannel Marketing <i class="icon-microphone icon-size-25"></i></h6>
                                <p>Technology merged with human interaction on large scale projects</p>
                            </li>

                        </ul>
                        <div class="row">
                            <div class="col-md-6">
                                <a class= "btn btn-block btn-dark smoothScroll" href="<?php echo ENV_ROOTURL; ?>services.php#Technology">  View Details</a>
                            </div>

                            <div class="col-md-6">
                                <a class= "btn btn-block btn-dark smoothScroll" href="<?php echo ENV_ROOTURL; ?>services.php#OmniChannel">  View Details</a>
                            </div>
                        </div>

                        <?php
                        }
                    if (Detect::isMobile())
                        {
                        ?>
                        <ul class="col-md-12  no-padding">
                            <li class="col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
                                <h6>Branding  <i class="ion-bag icon-size-25"></i> </h6>
                                <p>We specialise in all fields of brand development across all conceivable categories, including brand design, web development, film media and digital marketing management.</p>


                                <a class= "btn btn-block btn-dark smoothScroll" href="<?php echo ENV_ROOTURL; ?>services.php#Branding">  View Details</a>




                            </li>
                            <li class="col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                                <h6>Marketing  <i class="ion-speakerphone icon-size-25"></i></h6>
                                <p>Clear Return On Investment approach per product or service.</p>

                                <a class= "btn btn-block btn-dark smoothScroll" href="<?php echo ENV_ROOTURL; ?>services.php#Marketing">  View Details</a>

                            </li>

                            <li class="col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                                <h6>Advertising  <i class="icon-screen-desktop icon-size-25"></i> </h6>
                                <p>Enjoy a well established connection base with all broadcasting and printing houses.</p>
                                <a class= "btn btn-block btn-dark smoothScroll" href="<?php echo ENV_ROOTURL; ?>services.php#Advertising">  View Details</a>

                            </li>
                            <li class="col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                                <h6>Social Media Integration <i class="icon-share icon-size-25"></i></h6>
                                <p>Integrated technology systems from landing pages to conversion of leads to upgrade of CRM client data</p>
                                <a class= "btn btn-block btn-dark smoothScroll" href="<?php echo ENV_ROOTURL; ?>services.php#SocialMedia">  View Details</a>
                            </li>

                            <li class="col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                                <h6>Integrated Technology  <i class="ion-hammer icon-size-25"></i> </h6>
                                <p>Marketing software that helps you grow your business effortlessly.</p>

                                <a class= "btn btn-block btn-dark smoothScroll" href="<?php echo ENV_ROOTURL; ?>services.php#Technology">  View Details</a>

                            </li>
                            <li class="col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                                <h6>OmniChannel Marketing <i class="icon-microphone icon-size-25"></i></h6>
                                <p>Technology merged with human interaction on large scale projects</p>
                                <a class= "btn btn-block btn-dark smoothScroll" href="<?php echo ENV_ROOTURL; ?>services.php#OmniChannel">  View Details</a>
                            </li>


                        </ul>

        <?php
        }
    ?>


                </div>

            </div>


        </section>


        <!-- Section 3 -->
        <section class="portfolio port-item-up padding-bottom-100 padding-top-150" id="services">
            <h3 class="text-center">Our Clients</h3>
            <br>

            <div class="container">
                <hr>    <!-- PORTOFLIO ITEMS FILTER -->
                <div class="text-center">
                    <div id="js-filters-awesome-work" class="cbp-l-filters-buttonCenter filter-style-2">
                        <div data-filter="*" class="cbp-filter-item-active cbp-filter-item"> All
                            <div class="cbp-filter-counter"></div>
                        </div>

                        <div data-filter=".international" class="cbp-filter-item">international
                            <div class="cbp-filter-counter"></div>
                        </div>
                        <div data-filter=".multinternational" class="cbp-filter-item">Multinational
                            <div class="cbp-filter-counter"></div>
                        </div>

                        <div data-filter=".SA" class="cbp-filter-item"> South Africa
                            <div class="cbp-filter-counter"></div>
                        </div>

                        <div data-filter=".other" class="cbp-filter-item"> Other
                            <div class="cbp-filter-counter"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Gallery -->


    <?php
    if (Detect::isComputer() || Detect::isTablet())
        {
        ?>
                <div id="js-grid-awesome-work" class="col-5 no-space text-center container-fluid">
                <?php
        }else if (Detect::isMobile())
        {
                ?>
                <div id="js-grid-awesome-work" class="col-6 no-space text-center container-fluid">

                    <?php
        }
                ?>


                    <?php
                    $dir = ENV_ROOTURL . 'assets/img/grey-logos/International/';
                    $dir2 = ENV_ROOTURL . 'assets/img/grey-logos/Multinational/';
                    $dir3 = ENV_ROOTURL . 'assets/img/grey-logos/SA/';
                    $dir4 = ENV_ROOTURL . 'assets/img/grey-logos/Other/';
                    if (is_dir($dir))
                        {
                        if ($dh = opendir($dir))
                            {
                            while (($filename = readdir($dh)) !== false)
                                {
                                //int strlen ( string $string )
                                if ($filename == ".." || $filename == ".")
                                    {
                                    
                                    }
                                else
                                    {
                                    ?>

                                    <!-- international -->
                                    <div class="cbp-item  international">
                                        <div class="port-item">
                                            <!-- article img -->
                                            <article>
                                                <img src="<?php echo ENV_ROOTURL; ?>assets/img/grey-logos/International/<?php echo $filename; ?>" alt="">

                                                <!-- Portfolio Hover -->
                                                <div class="port-hover">
                                                    <div class="position-center-center">
                                                        <a  href="<?php echo ENV_ROOTURL; ?>assets/img/grey-logos/International/<?php echo $filename; ?>" class="cbp-lightbox" data-title=""  >
                                                            <i class="icon-magnifier icon-size"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </article>
                                        </div>
                                    </div>

                                    <?php
                                    }
                                }closedir($dh);
                            }
                        }
                    if (is_dir($dir2))
                        {
                        if ($dh2 = opendir($dir2))
                            {
                            while (($filename2 = readdir($dh2)) !== false)
                                {
                                if ($filename2 == ".." || $filename2 == ".")
                                    {
                                    
                                    }
                                else
                                    {
                                    ?>
                                    <!-- Multinational -->
                                    <div class="cbp-item  multinternational">
                                        <div class="port-item">
                                            <!-- article img -->
                                            <article> <img src="<?php echo ENV_ROOTURL; ?>assets/img/grey-logos/Multinational/<?php echo $filename2; ?>" alt="">
                                                <!-- Portfolio Hover -->
                                                <div class="port-hover">
                                                    <div class="position-center-center">

                                                        <a  href="<?php echo ENV_ROOTURL; ?>assets/img/grey-logos/Multinational/<?php echo $filename2; ?>" class="cbp-lightbox" data-title=""  >
                                                            <i class="icon-magnifier icon-size"></i>
                                                        </a>

                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                    </div>

                                    <?php
                                    }
                                }closedir($dh2);
                            }
                        }
                    if (is_dir($dir3))
                        {
                        if ($dh3 = opendir($dir3))
                            {
                            while (($filename3 = readdir($dh3)) !== false)
                                {
                                if ($filename3 == ".." || $filename3 == ".")
                                    {
                                    
                                    }
                                else
                                    {
                                    ?>


                                    <!-- South Africa -->
                                    <div class="cbp-item  SA">
                                        <div class="port-item">
                                            <!-- article img -->
                                            <article> <img src="<?php echo ENV_ROOTURL; ?>assets/img/grey-logos/SA/<?php echo $filename3; ?>" alt="">
                                                <!-- Portfolio Hover -->
                                                <div class="port-hover">
                                                    <div class="position-center-center">
                                                        <a  href="<?php echo ENV_ROOTURL; ?>assets/img/grey-logos/SA/<?php echo $filename3; ?>" class="cbp-lightbox" data-title=""  >
                                                            <i class="icon-magnifier icon-size"></i>
                                                        </a>

                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                    </div>


                    <?php
                    }
                }closedir($dh3);
            }
        }
    if (is_dir($dir4))
        {
        if ($dh4 = opendir($dir4))
            {
            while (($filename4 = readdir($dh4)) !== false)
                {
                if ($filename4 == ".." || $filename4 == ".")
                    {
                    
                    }
                else
                    {
                    ?>
                                    <!-- Other -->
                                    <div class="cbp-item other">
                                        <div class="port-item">
                                            <!-- article img -->
                                            <article> <img src="<?php echo ENV_ROOTURL; ?>assets/img/grey-logos/Other/<?php echo $filename4; ?>" alt="">
                                                <!-- Portfolio Hover -->
                                                <div class="port-hover">
                                                    <div class="position-center-center">
                                                        <a  href="<?php echo ENV_ROOTURL; ?>assets/img/grey-logos/Other/<?php echo $filename4; ?>" class="cbp-lightbox" data-title=""  >
                                                            <i class="icon-magnifier icon-size"></i>
                                                        </a>

                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                    </div>

                    <?php
                    }
                }closedir($dh4);
            }
        }
    ?>

                </div>

        </section>

<?php } ?>

<?php
include 'inc/footer.php';
?>


<?php
include 'inc/js_scripts.php';
?>


</body>
</html>
