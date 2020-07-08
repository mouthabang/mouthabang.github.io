<?php
include_once 'env/config.php';

$strPageSlider = TRUE;
$strPageHero = TRUE;
include 'inc/header.php';
?>

<body class="one-page header-absolute">
    <br><br><br><br><br>

    <div id="page-title" class="page-title page-title-3 bg-black dark">
        <div class="bg-image"><img src="<?php ?> assets/img/video.jpg"></div>
        <div class="container">
            <h1>Service</h1>
        </div>
        <div class="breadcrumb-wrapper border-top">
            <div class="container">
                <ol class="breadcrumb">
                    <li><a href="<?php echo ENV_ROOTURL; ?>index.php">Home Page</a></li>
                    <li class="active">Service</li>
                </ol>
            </div>
        </div>
    </div>
    <?php
    if (Detect::isMobile())
        {
        ?>




        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-push-2">
                        <h3 class="mb-90 text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4" id="weddings">
                        <!-- Service -->

                        <div class="feature feature-2">
                            <span class="icon icon-sm"><img src="<?php echo ENV_ROOTURL; ?>assets/img/icon/wedding-couple.png"></span>
                            <div class="feature-content">

                                <h5>Wedding Productions</h5>
                                <p>
                                    We offer romantic wedding films and photography unique to the couple and their happiest day. Ensuring that we take the time to personally meet and plan the visual outcomes of each individual wedding. Our style is regarded emotionally evoking and of the highest visual quality. Our discreet, comfortable approach to wedding photography and cinematography creates a relaxed atmosphere with no distraction to ensure that the day…
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4" id="Corporate">
                        <!-- Service -->
                        <div class="feature feature-2">
                            <span class="icon icon-sm"><img src="<?php echo ENV_ROOTURL; ?>assets/img/icon/enterprise.png"></span>
                            <div class="feature-content">
                                <h5>Corporate Advertising / Marketing Videos</h5>
                                <p>

                                    Our approach to corporate advertisements is what sets us apart from the rest! We help our clients grow their business by promoting their product or service in a visually enticing manner specifically geared to their target market. Thereby ensuring the most beneficial outcome. Productions. We offer professional visual services including: Video productions, photography, graphic design, script writing, copywriting, casting, event management                                 </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <!-- Service -->
                        <div class="feature feature-2">
                            <span class="icon icon-sm"><img src="<?php echo ENV_ROOTURL; ?>assets/img/icon/musical-note.png"></span>
                            <div class="feature-content">
                                <h5>Music Video's</h5>
                                <p>
                                    When it comes to music videos, we ensure that the best quality visual compliments your music. We offer script writing as an optional extra to creatively tell a story that resonates with your audience as we combine the visual with your song. The Garden Route lends itself to amazing backdrops for creatively unique music videos and combined with our cinematic state…
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <!-- Service -->
                        <div class="feature feature-2">
                            <span class="icon icon-sm"><img src="<?php echo ENV_ROOTURL; ?>assets/img/icon/youtube-logo.png"></span>
                            <div class="feature-content">
                                <h5>Youtube Produtions</h5>
                                <p>
                                    We can help you go viral! We offer the filming and production of web related entertainment or demonstration videos for upcoming YouTube sensations. Offering the service of maintaining the YouTube channel with freshly filmed and produced content, we can establish and sustain a potentially profitable YouTube channel                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <!-- Service -->
                        <div class="feature feature-2">
                            <span class="icon icon-sm"><img src="<?php echo ENV_ROOTURL; ?>assets/img/icon/sketch.png"></span>
                            <div class="feature-content">
                                <h5>Logo Animation / Design</h5>
                                <p>Logo animations are crucial when it comes to corporate videos. We can create an animation with special effects and sound using your existing logo or we can create it all for you from scratch! Allow us to transform your identity with a modern and fresh approach to your marketing tools to establised a well recognizable brand among your clients and target market… 
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <!-- Service -->
                        <div class="feature feature-2">
                            <span class="icon icon-sm"><img src="<?php echo ENV_ROOTURL; ?>assets/img/icon/stage.png"></span>
                            <div class="feature-content">
                                <h5>Sound, Lighting and Set Building </h5>
                                <p>
                                    In collaboration with locally based, professional sound company, SND Productions, we offer an extensive range of sound, entertainment, lighting and set building solutions to all events. Using the expertise of some of the best local sound and lighting engineers, we are able to ensure that all visual and audio requirements are met with great success…  
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <!-- Service -->
                        <div class="feature feature-2">
                            <span class="icon icon-sm"><img src="<?php echo ENV_ROOTURL; ?>assets/img/icon/video-camera.png"></span>
                            <div class="feature-content">
                                <h5>Property / Lifestyle Photo's and Filming </h5>
                                <p>
                                    We offer a top quality service if property photography and videography to promote the sales in this industry. Whether it be for a private seller or property agency looking to promote the ideal home for sale, we can offer a range of visual services to promote the lifestyle that will ultimately seal the deal. We also offer virtual tours of properties, guest houses, etc… </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <!-- Service -->
                        <div class="feature feature-2">
                            <span class="icon icon-sm"><img src="<?php echo ENV_ROOTURL; ?>assets/img/icon/wine-glasses.png"></span>
                            <div class="feature-content">
                                <h5>Special Events / Visuals </h5>
                                <p>
                                    So much time and effort is spent in arranging corporate events, conferences and congresses. We offer the professional service that will leave a lasting impression of your success. Offering professional filming and photography we have a range of visual products that may be suited to your event’s unique    
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <!-- Service -->
                        <div class="feature feature-2">
                            <span class="icon icon-sm"><img src="<?php echo ENV_ROOTURL; ?>assets/img/icon/broadcasting.png"></span>
                            <div class="feature-content">
                                <h5>Live Broadcasting</h5>
                                <p>
                                    We offer live broadcasting for all corporate conferencing, sporting or wedding events where this service is required. Filming of an on-stege performance or speaker can be projected onto separate screens within the vicinity of the main location, or visuals can be streamed directly onto the internet for remote viewing. We combine our visual expertise… </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <!-- Service -->
                        <div class="feature feature-2">
                            <span class="icon icon-sm"><img src="<?php echo ENV_ROOTURL; ?>assets/img/icon/light.png"></span>
                            <div class="feature-content">
                                <h5>Studio</h5>
                                <p>
                                    Our fully equipped studio with infinity curves, specialized lighting and green screen facilities offer the perfect solution to studio photography or filming. Our state of the art, uniquely designed studio facility is combined with our professional expertise ensuring successful shoots for an array of different outcomes…  

                                </p>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <!-- Service -->
                        <div class="feature feature-2">
                            <span class="icon icon-sm"><img src="<?php echo ENV_ROOTURL; ?>assets/img/icon/checklist.png"></span>
                            <div class="feature-content">
                                <h5>Event Management</h5>
                                <p>
                                    Need help with managing your next event? We event have this covered. Whether it be your wedding day, a corporate conference, incentive, gala dinner or year end function, we can manage it all! With the professional event management skills of Ilse Coetzee (with an extensive 9-year career in the hospitality and event management industry), we can manage…  
                                </p>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <!-- Service -->
                        <div class="feature feature-2">
                            <span class="icon icon-sm"><img src="<?php echo ENV_ROOTURL; ?>assets/img/icon/share.png"></span>
                            <div class="feature-content">
                                <h5>Social Media Management</h5>
                                <p>
                                    This is a crucial aspect to any new or existing company. We offer the professional social media management services to ensure you stay on top of your game! Offering daily posts, updated cover images, updated content, freshly photographed product or service images and videos and paid advertisements. To gaurantee that you are getting what you pay for…  </p>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <!-- Service -->
                        <div class="feature feature-2">
                            <span class="icon icon-sm"><img src="<?php echo ENV_ROOTURL; ?>assets/img/icon/script.png"></span>
                            <div class="feature-content">
                                <h5>Scriptwring / Copywriting</h5>
                                <p>
                                    This is a crucial aspect to any new or existing company. We offer the professional social media management services to ensure you stay on top of your game! Offering daily posts, updated cover images, updated content, freshly photographed product or service images and videos and paid advertisements. To gaurantee that you are getting what you pay for…  </p>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <!-- Service -->
                        <div class="feature feature-2">
                            <span class="icon icon-sm"><img src="<?php echo ENV_ROOTURL; ?>assets/img/icon/happy-girl.png"></span>
                            <div class="feature-content">
                                <h5>Casting</h5>
                                <p>
                                    This is a crucial aspect to any new or existing company. We offer the professional social media management services to ensure you stay on top of your game! Offering daily posts, updated cover images, updated content, freshly photographed product or service images and videos and paid advertisements. To gaurantee that you are getting what you pay for…  </p>

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

    <section>
        <div class="container">
            
             <div class="row">
                    <div class="col-lg-8 col-lg-push-2">
                        <h3 class="mb-90 text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
                    </div>
                </div>
        </div>
    </section>
        <!-- Service 1 -->
        <section class="section-double left" id="Corporate">
            
            <div class="col-md-6 content">
                <h2>Corporate Advertising</h2>
                <p class="lead">
                    Our approach to corporate advertisements is what sets us apart from the rest! We help our clients grow their business by promoting their product or service in a visually enticing manner specifically geared to their target market. Thereby ensuring the most beneficial outcome. Productions. We offer professional visual services including: Video productions, photography, graphic design, script writing, copywriting, casting, event management  </p>
                <a href="<?php echo ENV_ROOTURL; ?>gallery.php#gallery" class="btn btn-filled btn-danger">View Gallery</a>
            </div>
            <div class="col-md-6 image">
                <div class="bg-image"><img src="<?php echo ENV_ROOTURL; ?>assets/img/1.jpg" alt=""></div>
            </div>
        </section>


        <!-- Service 2 -->
        <section class="section-double right" id="live">

            <div class="col-md-6 content">
                <h2>Live Broadcasting</h2>
                <p class="lead">
                    We offer live broadcasting for all corporate conferencing, sporting or wedding events where this service is required. Filming of an on-stege performance or speaker can be projected onto separate screens within the vicinity of the main location, or visuals can be streamed directly onto the internet for remote viewing. We combine our visual expertise… 
                </p>
                <a href="<?php echo ENV_ROOTURL; ?>gallery.php#gallery" class="btn btn-filled btn-danger">View Gallery</a>
            </div>
            <div class="col-md-6 image">
                <div class="bg-image"><img src="<?php echo ENV_ROOTURL; ?>assets/img/2.jpg" alt=""></div>
            </div>

        </section>
        <!-- Section 3 -->
        <section class="section-double left" id="event">

            <div class="col-md-6 content">
                <h2>Event Management</h2>
                <p class="lead">
                    Need help with managing your next event? We event have this covered. Whether it be your wedding day, a corporate conference, incentive, gala dinner or year end function, we can manage it all! With the professional event management skills of Ilse Coetzee (with an extensive 9-year career in the hospitality and event management industry), we can manage… 
                </p>
                <a href="<?php echo ENV_ROOTURL; ?>gallery.php#gallery" class="btn btn-filled btn-danger">View Gallery</a>
            </div>
            <div class="col-md-6 image">
                <div class="bg-image"><img src="<?php echo ENV_ROOTURL; ?>assets/img/3.jpg" alt=""></div>
            </div>

        </section>



        <!-- Section 4 -->
        <section class="section-double right" id="musicVideo">

            <div class="col-md-6 content">
                <h2>Music Video's</h2>
                <p class="lead">
                    When it comes to music videos, we ensure that the best quality visual compliments your music. We offer script writing as an optional extra to creatively tell a story that resonates with your audience as we combine the visual with your song. The Garden Route lends itself to amazing backdrops for creatively unique music videos and combined with our cinematic state…</p>
                <a href="<?php echo ENV_ROOTURL; ?>gallery.php#gallery" class="btn btn-filled btn-danger">View Gallery</a>
            </div>
            <div class="col-md-6 image">
                <div class="bg-image"><img src="<?php echo ENV_ROOTURL; ?>assets/img/4.jpg" alt=""></div>
            </div>

        </section>


        <!-- Section 6 -->
        <section class="section-double left" id="YouTube">

            <div class="col-md-6 content">
                <h2>YouTube Video Productions</h2>
                <p class="lead">
                    We can help you go viral! We offer the filming and production of web related entertainment or demonstration videos for upcoming YouTube sensations. Offering the service of maintaining the YouTube channel with freshly filmed and produced content, we can establish and sustain a potentially profitable YouTube channel…..
                </p>
                <a href="<?php echo ENV_ROOTURL; ?>gallery.php#gallery" class="btn btn-filled btn-danger">View Gallery</a>
            </div>
            <div class="col-md-6 image">
                <div class="bg-image"><img src="<?php echo ENV_ROOTURL; ?>assets/img/5.jpg" alt=""></div>
            </div>

        </section> 


        <!-- Section 6 -->
        <section class="section-double right" id="Social">

            <div class="col-md-6 content">
                <h2>Social Media Management</h2>
                <p class="lead">
                    Social Media Management

                    This is a crucial aspect to any new or existing company. We offer the professional social media management services to ensure you stay on top of your game! Offering daily posts, updated cover images, updated content, freshly photographed product or service images and videos and paid advertisements. To gaurantee that you are getting what you pay for… 

                </p>
                <a href="<?php echo ENV_ROOTURL; ?>gallery.php#gallery" class="btn btn-filled btn-danger">View Gallery</a>
            </div>
            <div class="col-md-6 image">
                <div class="bg-image"><img src="<?php echo ENV_ROOTURL; ?>assets/img/6.jpg" alt=""></div>
            </div>

        </section>



        <?php
        }
    ?>


    <?php
    include 'inc/footer.php';
    include 'inc/js_scripts.php';
    ?>

</body>