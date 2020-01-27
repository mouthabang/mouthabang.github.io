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

include_once ENV_ROOTURL . 'lib/detect.php';
include_once ENV_ROOTURL . 'inc/head.php';
?>

<body>
    <!-- Header -->
    <header class="header ">
        <div class="container-fluid sticky">

            <div class="logo">
                <a href="<?php echo ENV_ROOTURL; ?>"index.php><img src="<?php echo ENV_ROOTURL; ?>assets/img/logo.png" width="180px" alt="ViralAdCo"></a>
            </div>

            <!-- Nav navbar navbar-default navbar-fixed-top" role="navigation"-->
            <nav class="navbar webimenu">
                <!-- MENU BUTTON RESPONSIVE -->
                <div class="menu-toggle"> <i class="fa fa-bars"> </i> </div>
                <ul class="ownmenu">
                    <li><a href="<?php echo ENV_ROOTURL; ?>index.php">Home </a></li>
                    <li><a href="<?php echo ENV_ROOTURL; ?>services.php"> services </a></li>
                    <li><a href="<?php echo ENV_ROOTURL; ?>about.php">about </a> </li>
                    <li><a href=""  data-toggle="modal" data-target="#myModal"> contact</a></li>
                </ul>

            </nav>
        </div>
    </header>

    <!-- End Header -->


    <!-- Modal -->
    <div class="modal fade " id="myModal" role="dialog"  >
        <div class="modal-dialog modal-lg " >

            <!--  Content-->
            <div class="modal-content"  style="background-image: url(<?php echo ENV_ROOTURL; ?>assets/img/pattern.jpg);">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <div class="logo text-center">
                        <a href="<?php echo ENV_ROOTURL; ?>"index.php><img src="<?php echo ENV_ROOTURL; ?>assets/img/logo.png" width="180px" alt="ViralAdCo"></a>
                    </div><br>
                    <h4 class="modal-title text-center">
                        Contact Us
                    </h4>

                </div>
                <div class="modal-body">
                    <h6>Whether you have a specific project in mind or just want to talk shop we look forward to hearing from you.
                    </h6>
                </div>


                <div class="modal-body">

                    <form class="contact-form validate-form" id="contact-form" >
                    <div class="row col-md-8">


                        <div class="form-group">
                            <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="email" id="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                        </div>

                        <div class="form-group">
                            <textarea class="form-control" name="message" id="message" rows="5" placeholder="what’s in your mind"></textarea>
                        </div>

                        <div class="form-group">
                            <button class="btn btn-block btn-dark" type="submit"  value="submit" id="btn_submit" onClick="proceed();">SUBMIT</button>
                        </div>

                    </div>
                    </form>
                    <div class="row">

                        <div class="col-md-4">
                            <li class="media">
                                <div class="media-left"> <i class="icon-pointer"></i> </div>
                                <div class="media-body">
                                    <p>101 York Street<br>
                                        George, South Africa.</p>
                                </div>
                            </li>
                        </div>
                        <div class="col-md-4">
                            <li class="media">
                                <div class="media-left"> <i class="icon-envelope-open"></i> </div>
                                <div class="media-body">
                                    <p>info@viraladco.com</p>
                                </div>
                            </li>
                        </div>
                        <div class="col-md-4">
                            <li class="media">
                                <div class="media-left" data-wow-delay="0.4s"> <i class="icon-call-end"></i> </div>
                                <div class="media-body">
                                    <p>+27 799 55 7686</p>
                                </div>
                            </li>
                        </div>
                    </div>


                </div>

            </div>

        </div>

    </div>
