
<?php
if (Detect::isComputer() || Detect::isTablet())
    {
    ?>
    <!-- Footer -->
    <footer id="footer" class="dark bg-secondary">
        <div class="container" >

            <div class="row">

                <div class="col-md-2 text-center"><!-- Widget - Logo -->

                    <div class="widget widget-logo">
                        <img class="logo logo-dark img-responsive" width="100%" src="<?php echo ENV_ROOTURL; ?>assets/img/logo.png" alt="">
                    </div>
                </div><!-- End Widget - Logo -->

                <div class="col-md-5">
                    <!-- Widget - Services -->
                    <div class="widget widget-recent-posts">
                        <h6 class="text-uppercase text-muted text-center">Services</h6>

                        <div class="col-md-6">

                            <ul class="list-posts">
                                <li>
                                    <a href="#">Wedding Productions</a>
                                </li>
                                <li>
                                    <a href="#">Advertising & Marketing</a>
                                </li>
                                <li>
                                    <a href="#">Music Video's</a>
                                </li>
                                <li>
                                    <a href="#">Youtube Produtions</a>
                                </li>
                                <li>
                                    <a href="#">Logo Animation / Design</a>
                                </li>
                                <li>
                                    <a href="#">Scriptwring / Copywriting</a>
                                </li>
                                <li>
                                    <a href="#">Sound, Lighting and Set Building </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">

                            <ul class="list-posts">

                                <li>
                                    <a href="#">Special Events / Visuals</a>
                                </li>
                                <li>
                                    <a href="#">Live Broadcasting</a>
                                </li>
                                <li>
                                    <a href="#">Studio</a>
                                </li>
                                <li>
                                    <a href="#">Event Management</a>
                                </li>
                                <li>
                                    <a href="#">Social Media Management</a>
                                </li>
                                <li>
                                    <a href="#">Casting</a>
                                </li>
                                <li>
                                    <a href="#">Property / Lifestyle Photo's and Filming</a>
                                </li>
                            </ul>


                        </div>

                    </div>

                </div>

                <div class="col-md-5">

                    <!-- Widget - Contact -->
                    <div class="widget widget-contact">
                        <h6 class="text-uppercase text-muted text-center">Contact Us</h6>
                        <div class="col-md-2"></div>
                        <div class="col-md-5">
                            <address>
                                <strong>Address:</strong><br>
                                SND Production House<br>
                                29 Hibernia Street<br>
                                George, 6530<br><br>
                            </address>
                        </div>
                        <div class="col-md-5">
                            <address>
                                <strong>Phone:</strong><br>
                                +27 82 455 4449<br><br>
                                <strong>E-mail:</strong><br>
                                info@eonmedia.co.za<br>
                            </address>
                        </div>


                    </div>
                </div>

            </div>

        </div>
        <hr class="sep-line">
        <div class="row pt-50 pb-50 text-center">
            <a href="https://www.facebook.com/eonmedia" class="icon icon-circle icon-facebook icon-xs"><i class="fa fa-facebook" ></i></a>
            <a href="https://www.youtube.com/channel/UCI7TQ9gqJkY2s21fMQ9cVYw?spfreload=10" class="icon  icon-circle icon-youtube icon-xs"><i class="fa fa-youtube"></i></a>
            <a href="https://vimeo.com/eonmediaproductions" class="icon icon-circle icon-vimeo icon-xs"><i class="fa fa-vimeo"></i></a>
            <br>
            <p>                    © 2018; All Rights Reserved eonmedia. <br>
                Built by <a href="www.themi bv  nmssingfloor.co.za"> The Missing Floor</a> </p>


        </div>
    </footer>


    <?php
    }
else if (Detect::isMobile())
    {
    ?>
    <footer id="footer" class="dark bg-secondary">
        <div class="container" >


            <hr class="sep-line">
            <div class="row pt-50 pb-50 text-center">
                <a href="https://www.facebook.com/eonmedia" class="icon icon-circle icon-facebook icon-xs"><i class="fa fa-facebook" ></i></a>
                <a href="https://www.youtube.com/channel/UCI7TQ9gqJkY2s21fMQ9cVYw?spfreload=10" class="icon  icon-circle icon-youtube icon-xs"><i class="fa fa-youtube"></i></a>
                <a href="https://vimeo.com/eonmediaproductions" class="icon icon-circle icon-vimeo icon-xs"><i class="fa fa-vimeo"></i></a>
                <br>
                <p>                    © 2018; All Rights Reserved eonmedia. <br>
                    Built by <a href="www.themissingfloor.co.za"> The Missing Floor</a> </p>

            </div>

        </div>

    </footer>


    <?php
    }
?>