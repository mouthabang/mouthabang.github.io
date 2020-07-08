<?php

function curPageURL()
    {
    $pageURL = 'http';
    if ($_SERVER["HTTPS"] == "on")
        {
        $pageURL .= "s";
        }
    $pageURL .= "://";
    if ($_SERVER["SERVER_PORT"] != "80")
        {
        $pageURL .= $_SERVER["SERVER_NAME"] . ":" . $_SERVER["SERVER_PORT"] . $_SERVER["REQUEST_URI"];
        }
    else
        {
        $pageURL .= $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
        }
    return $pageURL;
    }

include_once ENV_ROOT . 'lib/detect.php';
include_once ENV_ROOT . 'inc/head.php';
?>

<!-- Header -->
<header id="header" class="absolute fullwidth light">

    <!-- Top Bar -->
    <div id="top-bar">
        <div class="container" >
            <div class="module left">
                <ul class="list-inline">
                    <li><i class="fa fa-envelope text-primary "></i>info@eonmedia.co.za</li>
                    <li><i class="fa fa-phone text-primary"></i> +27 82 455 4449 </li>
                </ul>
            </div>
            <div class="module right">
                <ul class="list-inline">
                    <a href="https://www.facebook.com/eonmedia" class="icon icon-facebook icon-xs"><i class="fa fa-facebook" ></i></a>
                    <a href="https://www.youtube.com/channel/UCI7TQ9gqJkY2s21fMQ9cVYw?spfreload=10" class="icon  icon-youtube icon-xs"><i class="fa fa-youtube"></i></a>
                    <a href="https://vimeo.com/eonmediaproductions" class="icon icon-vimeo icon-xs"><i class="fa fa-vimeo"></i></a>
                </ul>
            </div>

        </div>
    </div>


    <!-- Navigation Bar -->
    <div id="nav-bar" >
        <div class="container">
            <!-- Logo -->
            <a id="logo" class="logo-wrapper" href="<?php echo ENV_ROOTURL; ?>index.php">
                <img  class="logo logo-dark" src="<?php echo ENV_ROOTURL; ?>assets/img/logo.png"  >
            </a>

            <nav class="module-group right">

                <!-- Primary Menu -->
                <div class="module menu">
                    <ul id="nav-primary" class="nav nav-primary">
                        <li><a href="<?php echo ENV_ROOTURL; ?>index.php">Home</a></li>
                        <li><a href="<?php echo ENV_ROOTURL; ?>services.php">Services</a></li>
                        <li><a href="<?php echo ENV_ROOTURL; ?>gallery.php">Gallery</a></li>
                        <li><a href="<?php echo ENV_ROOTURL; ?>about.php">About Us</a></li>
                        <li><a href="<?php echo ENV_ROOTURL; ?>contactus.php">Contact Us</a></li>
                    </ul>
                </div>


            </nav>

            <!-- Menu Toggle -->
            <div class="menu-toggle">
                <a href="#" data-toggle="mobile-menu" class="mobile-trigger"><span><span></span></span></a>
            </div>

        </div>
    </div>
</header>
<!-- Header / End -->


