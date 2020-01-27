<?php
include_once 'env/config.php';
include 'inc/header.php';
?>


<?php
if (Detect::isMobile())
    {
    ?>
    <section class="sub-bnr parallax-bg" data-stellar-background-ratio="0.5" style="background:url(assets/img/team.jpg) no-repeat; ">
        <div class="container">
            <div class="row col-md-12 padding-bottom-150">
            </div>
            <div class="row col-md-12">
              <h3> <span> About us</span></h3>
                <p class="font-playfair letter-space-1">Making the best brand better and faster</p>
 <div class="arrow bounce padding-top-50">
                    <a class= "smoothScroll" href="#aboutUs"><i class="fa fa-angle-down fa-5x" aria-hidden="true" style="color: white"></i></a>
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
    <section class="sub-bnr parallax-bg" data-stellar-background-ratio="0.5" style="background:url(assets/img/team.jpg) no-repeat;">
        <div class="container">
            <div class="position-center-center">
                <h3> <span> About us</span></h3>
                <p class="font-playfair letter-space-1">Making the best brand better and faster</p>

                <div class="arrow bounce padding-top-50">
                    <a class= "smoothScroll" href="#aboutUs"><i class="fa fa-angle-down fa-5x" aria-hidden="true" style="color: white"></i></a>
                </div>

            </div>
        </div>
    </section>
    
    <?php
    }
    ?>



    <!-- About us content -->
    <section class="our-team padding-top-100 padding-bottom-100" id="aboutUs">
        <div class="container">
            <div class="row">

                <!-- Content Start -->
                <div class="col-md-12">

                    <!-- Heading Block -->
                    <div class="heading-block margin-bottom-80">
                        <h3 class="wow fadeInUp margin-bottom-50" data-wow-delay="0.4s">About Us</h3>
                        <hr class="wow fadeInLeft" data-wow-delay="0.4s">

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 "><img class="img-responsive" src="assets/img/business.jpg" alt="" > </div>
                <div class="col-md-8 ">
                    <!-- Text -->
                    <p class="wow fadeInUp" data-wow-delay="0.4s">
                        WE ARE TECHNOLOGY ADVANCED BRAND & MARKETING AGENCY DRIVEN BY A HIGHLY MOTIVATED TEAM OF SPECIALISTS.
                    </p>

                    <p class="wow fadeInUp" data-wow-delay="0.4s">
                        We possess of leading market technology integration integrated to provide a full circle brand and marketing exposure. Simply put we don't just publish information we do a full 360 degree and convert clicks to clients. From publishing on Social media right through to high lead conversion through AI, Machine Learning and ChatBots. </br>

                        We are focused on the success of your brand and our cross-category expertise provide a wealth of insight and leadership that is unmatched. We’re in it for the long haul, to meticulously design and produce your most marketable vision.
                    </p>
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
