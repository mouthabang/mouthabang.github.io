
<?php
if (Detect::isComputer() || Detect::isTablet() || Detect::isMobile())
    {
    ?>

    <!-- Footer -->
    <footer class="page-footer light-gray-bg">

        <!-- Footer Links -->
        <div class="container-fluid text-center text-md-left">
            <br><hr>

            <!-- Grid row -->
            <div class="row">

                <!--  Column 1 with Logo -->
                <div class="col-md-5">

                    <img src="<?php echo ENV_ROOTURL; ?>assets/img/logo.png" width="200px">
                    <p>Brand Architects Through Advanced Technology</p>

                </div>

                <!--  Column 2 Services -->
                <div class="col-md-3">

                    <h5 class="text-uppercase">Services</h5>

                    <ul  class="list-unstyled">
                        <li>
                            <a class= "smoothScroll" href="<?php echo ENV_ROOTURL; ?>services.php#Branding"><p>Branding</p></a>
                        </li>
                        <li>
                            <a class= "smoothScroll" href="<?php echo ENV_ROOTURL; ?>services.php#Marketing"><p>Marketing</p></a>
                        </li>
                        <li>
                            <a class= "smoothScroll"  href="<?php echo ENV_ROOTURL; ?>services.php#Advertising"><p>Advertising</p></a>
                        </li>
                        
                        <li>
                            <a class= "smoothScroll"  href="<?php echo ENV_ROOTURL; ?>services.php#Social"><p>Social Media Integration</p></a>
                        </li>
                        
                        <li>
                            <a class= "smoothScroll"  href="<?php echo ENV_ROOTURL; ?>services.php#Technology"><p>Integrated Technology </p></a>
                        </li>
                        
                        <li>
                            <a class= "smoothScroll"  href="<?php echo ENV_ROOTURL; ?>services.php#OmniChannel"><p>OmniChannel Marketing</p></a>
                        </li>
                        
                    </ul>
                </div>

                <!-- Column 3 Contact us-->
                <div class="col-md-3">

                    <h5 class="text-uppercase">Contact Us</h5>

                    <ul class="contact-info animate fadeInUp" data-wow-delay="0.4s">
                        <li class="media">
                            <i class="icon-envelope-open"></i> <p>info@viraladco.com</p>

                        </li>
                        <li class="media">
                            <i class="icon-call-end"></i>
                            <p>+27 799 55 7686</p>
                        </li>
                        <li class="media">

                            <a href=""><i class="icon-social-facebook"></i></a>
                        <a href="#"><i class="icon-social-twitter"></i></a>

</li>                    </ul>

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </div>
        <!-- Footer Links -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2018 Copyright:
            <a href="#">ViralAdCo</a>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->

    <!-- GO TO TOP  -->
    <a href="#" class="cd-top"><i class="fa fa-angle-up"></i></a>
    <!-- GO TO TOP End -->

    <?php
    }
?>
