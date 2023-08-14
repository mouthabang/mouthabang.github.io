<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="Unlimited Financial services">
    <meta name="author" content="Mou">
    <title>Gallery | Unlimited Financial services</title>

    
    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    
    <link href="https://fonts.googleapis.com/css?family=Asap:400,400i%7CRaleway:600,800" rel="stylesheet">
     
     <!-- FONT AWESOME -->
     <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <!-- LEAFLET MAP -->
    <link rel="stylesheet" href="assets/css/leaflet.css">
    <link rel="stylesheet" href="assets/css/leaflet-gesture-handling.min.css">
    <link rel="stylesheet" href="assets/css/leaflet.markercluster.css">
    <link rel="stylesheet" href="assets/css/leaflet.markercluster.default.css">
    <link rel="stylesheet" href="assets/css/maps.css">
    <!-- Slider Revolution CSS Files -->
    <link rel="stylesheet" href="assets/css/settings.css">
    <link rel="stylesheet" href="assets/css/layers.css">
    <link rel="stylesheet" href="assets/css/navigation.css">
    <!-- ARCHIVES CSS -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/lightcase.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    
    <script src="assets/js/jquery.min.js"></script>
    <link   rel="stylesheet" href="assets/css/floating-wpp.min.css">
    <script type="text/javascript" src="assets/js/floating-wpp.min.js"></script>

    <link rel="stylesheet" href="assets/css/lightgallery2.css">
    <link rel="stylesheet" href="assets/css/video-js2.css">
    
    

</head>

<body class="inner-pages">

     <div class="header">
        <div class="header-top">
            <div class="container">
                <div class="top-info hidden-sm-down">
                    <div class="call-header">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <a href="tel:+266 22315870">(+266) 2231 5870 </a>
                    </div>
                    <div class="mobile-header">
                        <i class="fa fa-mobile" aria-hidden="true"></i>
                        <a href="tel:+266 51963220">(+266) 5196 3220 </a>
                    </div>

                    <div class="address-header">
                        <i class="fa fa-map-marker" aria-hidden="true"> </i><a  target="_blank" href="https://goo.gl/maps/faeeCuANpvoeGq2v9">NRH Building, Second Floor, Maseru</a>
                    </div>
                    <div class="mail-header">
                        <i class="fa fa-envelope" aria-hidden="true"> </i><a href="mailto:info@ufs.co.ls">info@ufs.co.ls</a>
                    </div>
                </div>
                <div class="top-social hidden-sm-down">
                    <div class="social-icons-header">
                        <div class="social-icons">
                            <a target="_blank" href="https://www.facebook.com/557025904787446/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a target="_blank" href="https://twitter.com/UnlimitedFinan2?s=08"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="header-bottom heading sticky-header" id="heading">
            <div class="container">
                <!-- STAR MOBILE LOGO -->
                <a href="index.html" class="logo">
                    <img src="assets/img/logo.png" alt="Unlimited Financial services">
                </a>

                <button type="button" class="button-menu hidden-lg-up" data-toggle="collapse" data-target="#main-menu" aria-expanded="false">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </button>

                <nav id="main-menu" class="collapse">
                    <ul>
                        <!-- STAR COLLAPSE MOBILE MENU -->
                        <li><a href="index.html">Home</a></li>
                        <li><a href="gallery.php">Gallery</a></li>
                        <li><a href="aboutus.html">About Us</a></li>
                        <li><a href="contactus.html">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <section class="headinggallery">
		<div class="text-heading text-center">
			<div class="container">
				<h1>Gallery</h1>
			</div>
		</div>
    </section>

    <div class="demo-gallery branches-section portfolio"> 
        <div class="container">
            <div class="filters-group">
				<ul>
					<li class="active" data-filter="*">All</li>
					<li data-filter=".csi">CSI</li>
					<li data-filter=".video">Video</li>
				</ul>
            </div>
        </div>
        
        <ul id="lightgallery" class="gallery-item">
        <?php
            $directory = "assets/img/gallery";
            $images = glob($directory . "/*.{jpg,jpeg,png,gif,mp4}", GLOB_BRACE);
            foreach($images as $image)
            {
                if( strpos($image.substr($image, -4), '.jpg') 
                ||      strpos($image.substr($image, -4), '.jpeg') 
                ||      strpos($image.substr($image, -4), '.gif') 
                ||      strpos($image.substr($image, -4), '.png') )
                {       
        ?>
            
            <li class="csi" data-src="<?php echo $image;?>" >
                <a href="">
                    <img class="img-responsive"src="<?php echo $image; ?>">
                    <div class="demo-gallery-poster">
                        <img src="https://sachinchoolur.github.io/lightGallery/static/img/zoom.png">
                    </div>
                </a>
            </li>
        <?php
                }
            }
        ?>
        </ul>

        <ul id="" class="gallery-item">
        <?php
            foreach($images as $image)
            {
             
            if( strpos($image.substr($image, -4), '.mp4') )
            {
       ?>
               <li  class="video" id="video2">
                   <a  target="_blank" href="<?php echo $image;?>" >
                    <video class="lg-video-object lg-html5" >
                        <source src="<?php echo $image;?>" type="video/mp4">
                    </video>
                    </a>
               </li>
            
             <?php    
            }
               
        }
        ?>
        </ul>

       

        </div>
    </div>
    


    <!-- START FOOTER -->
    <footer class="first-footer">
        <div class="top-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="netabout">
                            <a href="index.html" class="logo">
                                <img src="assets/img/logo.png" alt="Unlimited Financial services">
                            </a>
                            <p>UFS is currently operating in 6 districts namely , Maseru where it is head quartered, mafeteng , Berea , leribe , Botha-Bothe and mokhotlong.</p>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6">
                        <div class="widget quick-link clearfix">
                            <h3 class="widget-title">Contact and Address</h3>
                            
                        <div class="contactus">
                            <ul>
                                <li>
                                    <div class="info">
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                        <p class="in-p">NRH Building, Second Floor, Room #10, Kingsways way Road, Maseru</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="info">
                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                        <p class="in-p">(+266) 2231 5870</p>
                                    </div>
                                </li>

                                <li>
                                    <div class="info">
                                        <i class="fa fa-mobile" aria-hidden="true"></i>
                                        <p class="in-p">(+266) 5196 3220</p>
                                    </div>
                                </li>


                                <li>
                                    <div class="info">
                                        <i class="fa fa-envelope" aria-hidden="true"></i>
                                        <p class="in-p ti">info@ufs.co.ls</p>

                                    </div>
                                </li>
                            </ul>
                        </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="widget quick-link clearfix">
                            <h3 class="widget-title">Quick Links</h3>
                            <div class="quick-links">
                                <ul class="one-half mr-5">
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="aboutus.html">About Us</a></li>
                                    <li><a href="contactus.html">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="second-footer">
            <div class="container">
                <p> Designed by URBAN "DIGITALL"</p>
                <p>  &copy; Copyright All rights reserved.</p>
                <ul class="netsocials">
                    <li><a target="_blank" href="https://www.facebook.com/557025904787446/"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a target="_blank" href="https://twitter.com/UnlimitedFinan2?s=08"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>
    </footer>
    
    <div id="WAButton" name="WAButton"></div>
    <a data-scroll href="#heading" class="go-up"><i class="fa fa-angle-double-up" aria-hidden="true"></i></a>
    <!-- END FOOTER -->
    <!-- START PRELOADER -->
    <div id="preloader">
        <div id="status">
            <div class="status-mes"></div>
        </div>
    </div>
    <!-- END PRELOADER -->

    <!-- ARCHIVES JS -->
    <script src="assets/js/tether.min.js"></script>
    <script src="assets/js/moment.js"></script>
    <script src="assets/js/transition.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/fitvids.js"></script>
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/smooth-scroll.min.js"></script>
    <script src="assets/js/lightcase.js"></script>
    <script src="assets/js/owl.carousel.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/ajaxchimp.min.js"></script>
    <script src="assets/js/newsletter.js"></script>
    <script src="assets/js/jquery.form.js"></script>
    <script src="assets/js/jquery.validate.min.js"></script>
    <script src="assets/js/forms-2.js"></script>

    <!-- LEAFLET MAP JS -->
    <script src="assets/js/leaflet.js"></script>
    <script src="assets/js/leaflet-gesture-handling.min.js"></script>
    <script src="assets/js/leaflet-providers.js"></script>
    <script src="assets/js/leaflet.markercluster.js"></script>
    <script src="assets/js/map-single.js"></script>

    <!-- Slider Revolution scripts -->
    <script src="assets/js/jquery.themepunch.tools.min.js"></script>
    <script src="assets/js/jquery.themepunch.revolution.min.js"></script>
    <script src="assets/js/revolution.extension.actions.min.js"></script>
    <script src="assets/js/revolution.extension.carousel.min.js"></script>
    <script src="assets/js/revolution.extension.kenburn.min.js"></script>
    <script src="assets/js/revolution.extension.layeranimation.min.js"></script>
    <script src="assets/js/revolution.extension.migration.min.js"></script>
    <script src="assets/js/revolution.extension.navigation.min.js"></script>
    <script src="assets/js/revolution.extension.parallax.min.js"></script>
    <script src="assets/js/revolution.extension.slideanims.min.js"></script>
    <script src="assets/js/revolution.extension.video.min.js"></script>

    <!--<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>-->
    <script src="assets/js/picturefill.min.js"></script>
    <script src="assets/js/jquery.mousewheel.min.js"></script>
    <script src="assets/js/lightgallery-all.min.js"></script>

    <script src="assets/js/lightgallery_2.js"></script>
    <script src="assets/js/lg-video_2.js"></script>
    <script src="assets/js/video2.js"></script>


    <!-- MAIN JS -->
    <script src="assets/js/script.js"></script>
    <script>
        
        $("#lightgallery").lightGallery({
            videojs: true
        });
         
    </script>
   
</body>

</html>
