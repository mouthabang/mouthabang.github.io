<?php
include_once 'env/config.php';
include 'inc/header.php';
?>
<?php
if (Detect::isMobile())
    {
    ?>


<?php }
?>


<?php
if (Detect::isMobile())
    {
    ?>
    <section class="sub-bnr parallax-bg" data-stellar-background-ratio="0.5" style="background:url(assets/img/col.jpg) no-repeat; ">
        <div class="container">
            <div class="row col-md-12 padding-bottom-150">
            </div>
            <div class="row col-md-12">
                <h3> <span>Services</span></h3>
                <p class="letter-space-1">We offer services tailored for individual business needs</p>
             <div class="arrow bounce padding-top-50">
                    <a class= "smoothScroll" href="#headingIntro"><i class="fa fa-angle-down fa-5x" aria-hidden="true" style="color: white"></i></a>
                </div>
            </div>
            
        </div>
    </section>
    <?php
    }

if (Detect::isComputer() || Detect::isTablet())
    {
    ?>
    <!--======= Heading =========-->
    <section class="sub-bnr parallax-bg" data-stellar-background-ratio="0.5" style="background:url(assets/img/col.jpg) no-repeat;">
        <div class="container">
            <div class="row position-center-center">
                <h3> <span>Services</span></h3>
                <p class="letter-space-1">We offer services tailored for individual business needs</p>
                <div class="arrow bounce padding-top-50">
                    <a class= "smoothScroll" href="#headingIntro"><i class="fa fa-angle-down fa-5x" aria-hidden="true" style="color: white"></i></a>
                </div>
            </div>
        </div>
    </section>

   <?php
    }
    
    ?>
    
    <!--======= Services section =========-->
    <section class="blog-list padding-top-150 padding-bottom-50" id="headingIntro">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!--Services we offer-->
                    <div class="heading-block margin-bottom-50"  >
                        <h3 class="wow fadeInUp margin-bottom-50" data-wow-delay="0.4s">Services we offer</h3>
                        <hr class="wow fadeInLeft" data-wow-delay="0.4s">
                    </div>
                    <p >We specialise in all fields of brand development across all conceivable categories, including brand design, web development, film media and digital marketing management.</p>
                    <p id="Branding">
                        Our intelligent approach to your branding process is sure to deliver certainty through the combination of exploration and input of targeted client feedback. <br>
                        ViralAdCo is excellently credentialed to develop your brand. Our
                        extensive list of local and international corporate clients need no
                        introduction
                    </p>

                </div>
            </div>

            <!--======= Services 1=========-->
            <div  class="row blog-post-home margin-top-100 margin-bottom-50">
                <!--IMG -->
                <div class="col-md-7 wow fadeInLeft" data-wow-delay="0.4s"> <img class="img-responsive" src="<?php echo ENV_ROOTURL; ?>assets/img/office-desk.jpg" alt="" > </div>
                <!--CONTENT -->
                <div class="col-md-5 padding-left-80 wow fadeInRight" data-wow-delay="0.4s">
                    <div class="post-content text-left">
                        <!-- POST INFO -->
                        <h1>Branding</h1>
                        <p>Unique industry experience to provide best branding fit for your company, product or service. We use advanced technology data analytics to design and built and create the right brand. </p>
                        <p id="Marketing">Exceptional brand design is now not left to chance but to well detailed brand research and awareness.</p>
                    </div>
                </div>

            </div>

            <!--======= Services 2 =========-->

            <div class="row blog-post-home margin-top-100" >
                <!-- POST IMG -->
                <div class="col-md-7  wow fadeInLeft" data-wow-delay="0.4s"> <img class="img-responsive" src="<?php echo ENV_ROOTURL; ?>assets/img/afro.jpg" alt="" > </div>
                <!-- POST CONTENT -->
                <div class="col-md-5 padding-left-80 wow fadeInRight" data-wow-delay="0.4s">
                    <div class="post-content text-left">
                        <!-- POST INFO -->
                        <h1>Marketing</h1>
                        <p>Our marketing strategies are not just human integrated but technology advanced. We utilise website, applications, landing pages and various other technology means to gather information and target the right market.</p>
                        <p id="Advertising">Digital marketing is current and critical to survive in our current age. ViralAdCo is a technological strong innovate company working on the edge of what is currently possible.</p>
                    </div>
                </div>

            </div>
            <!--======= Services 3=========-->


            <div class="row blog-post-home margin-top-100" >
                <!-- POST IMG -->
                <div class="col-md-7 wow fadeInLeft" data-wow-delay="0.4s"> <img class="img-responsive" src="<?php echo ENV_ROOTURL; ?>assets/img/girl.jpg" alt="" > </div>
                <!-- POST CONTENT -->
                <div class="col-md-5 padding-left-80 wow fadeInRight" data-wow-delay="0.4s">
                    <div class="post-content text-left">
                        <!-- POST INFO -->
                        <h1>Advertising</h1>
                        <p>Get your brand to the right person at the exact right time. Know what your clients want, and when they want it.</p>
                        <p id="Social">Apart from working with all the major advertising channels, ViralAdCo provides you with the extra benefit of knowing what your clients are doing and when. Coupled with Machine Learning, AI and Data Analytics you can have one of the most advanced advertising campaigns around</p>
                    </div>
                </div>

            </div>

            <div class="row blog-post-home margin-top-100" >
                <!-- POST IMG -->
                <div class="col-md-7  wow fadeInLeft" data-wow-delay="0.4s"> <img class="img-responsive" src="<?php echo ENV_ROOTURL; ?>assets/img/Social-Media.png" alt="" > </div>
                <!-- POST CONTENT -->
                <div class="col-md-5 padding-left-80 wow fadeInRight" data-wow-delay="0.4s">
                    <div class="post-content text-left">
                        <!-- POST INFO -->
                        <h1>Social Media Integration</h1>
                        <p>Publish, control and integrate straight into social media channels</p>
                        <p>Apart from the basic push of information our integrated backed system allows you to receive information back from various channels - in short - know your ROI, what they want, and what/who your client is exactly</p>
                    </div>
                </div>

            </div>

            <div class="row blog-post-home margin-top-100" id="Technology">
                <!-- POST IMG -->
                <div class="col-md-7  wow fadeInLeft" data-wow-delay="0.4s"> <img class="img-responsive" src="<?php echo ENV_ROOTURL; ?>assets/img/techIntergration.png" alt="" > </div>
                <!-- POST CONTENT -->
                <div class="col-md-5 padding-left-80 wow fadeInRight" data-wow-delay="0.4s">
                    <div class="post-content text-left">
                        <!-- POST INFO -->
                        <h1>Integration Technology</h1>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                        </p>

                    </div>
                </div>

            </div>
            
            <div class="row blog-post-home margin-top-100" >
                <!-- POST IMG -->
                <div class="col-md-7 wow fadeInLeft" data-wow-delay="0.4s"> <img id="OmniChannel" class="img-responsive" width="75%" src="<?php echo ENV_ROOTURL; ?>assets/img/omnichannel.jpg" alt="" > </div>
                <!-- POST CONTENT -->
                <div class="col-md-5 padding-left-80 wow fadeInRight" data-wow-delay="0.4s">
                    <div class="post-content text-left">
                        <!-- POST INFO -->
                        <h1>OmniChannel Marketing</h1>
                        <p>Utilize our top of the line service offering</p>
                        <p>Synchronous use of Data Analytics, Machine Learning, AI, Call Centers and other publishing and filtered mediums to provide our clients with one of the most advanced marketing engines around. </p>
                    </div>
                </div>

            </div>


        </div>
    </section>




<?php
include 'inc/footer.php';
?>


<?php
include 'inc/js_scripts.php';
?>


</body>
</html>
