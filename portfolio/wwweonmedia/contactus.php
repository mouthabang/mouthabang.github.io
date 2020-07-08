<?php
include_once 'env/config.php';

$strPageSlider = TRUE;
$strPageHero = TRUE;
include 'inc/header.php';
?>

<body class="one-page header-absolute">
    <br><br><br><br><br>


    <div id="page-title" class="page-title page-title-3 bg-black dark">
        <div class="bg-image"><img src="<?php ?> assets/img/contact-us.jpg"></div>
        <div class="container">
            <h1>Contact Us</h1>
        </div>
        <div class="breadcrumb-wrapper border-top">
            <div class="container">
                <ol class="breadcrumb">
                    <li><a href="<?php echo ENV_ROOTURL; ?>index.php">Home Page</a></li>
                    <li class="active">Contact Us</li>
                </ol>
            </div>
        </div>
    </div>

    <section>

        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h3>Get in touch!</h3>
                    <img src="<?php echo ENV_ROOTURL; ?>assets/img/sessions.jpg" class="img-rounded mb-40" alt="">

                </div>
                <div class="col-md-3">
                    <address>
                    <h3>Contacts</h3>
                        
                        <strong>Address:</strong><br>
                        SND Production House<br>
                        29 Hibernia Street<br>
                        George, 6530<br><br>

                        <strong>Phone: </strong><br>
                        +48 221 909 99<br><br>
                        <strong>E-mail: </strong> 
                        <a href="">info@eonmedia.co.za</a><br>
                    </address>
                </div>

                <div class="col-md-6">
                    <h3>Feel free to ask a question or simply leave a comment.</h3>
                    <form class="contact-form validate-form" id="contact-form" method="POST" 
                          data-message-error="Opps... Something went wrong - please try again later"
                          data-message-success="Thank you form your message! We will answer within 24 hours."
                          >
                        <div class="row">
                            <div class="form-group ">
                                <input name="name" id="name" type="text" class="form-control" placeholder="Firstname" required>
                            </div>
                            <div class="form-group ">
                                <input name="name" id="name" type="text" class="form-control" placeholder="Lastname" required>
                            </div>
                            <div class="form-group ">
                                <input name="email" id="email" type="text" class="form-control" placeholder="E-mail address" required>
                            </div>

                            <div class="form-group ">
                                <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Message" required></textarea>
                            </div>
                        </div>   

                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <button type="submit" class="btn btn-filled btn-submit btn-block"><span>Send<i class="i-after ti-arrow-right"></i></span></button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>

    </section>


</body>
    <?php
    include 'inc/footer.php';
    include 'inc/js_scripts.php';
    ?>

