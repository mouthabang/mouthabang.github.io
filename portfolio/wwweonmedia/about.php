<?php
include_once 'env/config.php';

$strPageSlider = TRUE;
$strPageHero = TRUE;
include 'inc/header.php';
?>

<body class="one-page header-absolute">
    <br><br><br><br><br>

    <!--About us Header-->
    <div id="page-title" class="page-title page-title-3 bg-black dark">
        <div class="bg-image"><img src="<?php ?> assets/img/aboutus.jpg"></div>
        <div class="container">
            <h1>About us</h1>
        </div>
        <div class="breadcrumb-wrapper border-top">
            <div class="container">
                <ol class="breadcrumb">
                    <li><a href="<?php echo ENV_ROOTURL; ?>index.php">Home Page</a></li>
                    <li class="active">About Us</li>
                </ol>
            </div>
        </div>
    </div>

    <!--S-->
    <section class="container">
        <div class="row">
            <div class="col-sm-4">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs nav-stacked mb-30" role="tablist">
                    <li class="active"><a href="#description_2" role="tab" data-toggle="tab">Our History</a></li>
                    <li><a href="#additional-info_2" role="tab" data-toggle="tab">Our Team</a></li>
                </ul>
            </div>
            <div class="col-sm-8">
                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active fade in" id="description_2">
                        <h3 class="text-center"> Our History </h3>
                        <p class="lead">EONMEDIA was established by Eon Coetzee, professional photographer and cinematographer in 2011. Motivated by a dream to create lasting intimate memories and impactful visual productions, he now has a dedicated team of professionals, each equipped with particular, specialized skills offering an A-Team in quality productions of all sorts and shapes that are unmatched in the Garden Route. We are a young, dynamic team creating a comfortable atmosphere with loads of creative energy, making every shoot personally unique and professional.</p>
                        <p class="lead">EONMEDIA (Pty) Ltd is a full service Garden Route based <strong>video</strong>, <strong>photo</strong> and <strong>creative production</strong> company specializing in an array of areas including <strong>weddings</strong>, <strong>corporate</strong>, <strong>live broadcasting</strong>, <strong>marketing</strong>, <strong>event</strong>, <strong>advertising</strong>, <strong>catalogue</strong>, <strong>fashion</strong> and <strong>website videos</strong>, <strong>photography</strong> and <strong>design</strong>. Situated on the top level of the SND Production House in the city of  George, we are centrally based and easily accessible.</p>
                        <p class="lead">Our services are only limited to our client’s imagination! We pride ourselves in taking the time to understand the individual requirements of each of our clients, making our service personal and professional to deliver a production uniquely every time.</p>
                        <p class="lead">Our <strong>wedding films</strong> take story telling to the next level, making each viewer part of the day’s most intimate moments. Our fully equipped and cinematically experienced team, do a wonderful job in keeping filming and photography fun, comfortable and discreet on the day, to ensure a stress free day for the couple, their guests and all other service providers . Afterward our creative team makes magic in producing wonderfully romantic films and photographs that will leave a lingering romance that is unmatched.</p>
                        <p class="lead"><strong>Corporate advertisements</strong>,<strong> events</strong>,<strong> broadcasting</strong> and other marketing related design, photo and video productions are created with great attention to detail. Taking all related strategies in account, we offer an exceptional service coving all requirements from script writing, casting, filming, production and social media management. We ensure that your target audience is identified and reached successfully. We produce marketing material that will lead your clients to action. A production value is determined by how it entices your clients to choose your business above your competitor. Our visual services puts you ahead of the game!</p>
                        <p class="lead">We offer creatively unique <strong>music videos</strong> for local artists, offering <strong>scriptwriting</strong>, <strong>filming</strong>, <strong>casting</strong>, <strong>set building</strong>, and <strong>production</strong> of the finest quality. Using state of the art cinematic gear and our professional expertise to ensure that your music video is shared and loved by fans and industry professionals alike! By producing the CD cover images and booklet design, creating a music video teaser and professionally designed promotion advertisement, we offer a one-stop , fuss-free artist / music launch. New artist? Not to worry! We also assist with setting up YouTube channels for upcoming artists and manage their social media platforms to reach more potential fans and promote CD sales.</p>
                        <p class="lead">Our studio serves as a photography and filming gem in the Garden Route. Its professionally crafted infinity curves, makes it ideal for any shoot and it’s versatility is endless. It lends itself perfectly to green screen filming and the large space makes creative studio photography effortless. This well kept professional facility is also available to rent for specific photo shoots by other professional photographers or videographers. With a fully equipped sound studio by SND Productions, we are also able to offer quality audio recordings of the highest standard.</p>
                        <p class="lead">In addition to offering an array of visual services, we also offer complete event management for special events, such as weddings, exhibitions, concerts, corporate conferencing and events. Making your event journey hassle free as we manage your budget to create the best possible event outcome. We associate only with the very best in local service providers ensuring top quality, visuals, sound, décor, venues and catering.</p>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="additional-info_2">
                                                <h3 class="text-center"> Our Team </h3>

                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <!-- Member -->
                                <div class="text-center mb-50">
                                    <img class="img-circle mb-20" src="assets/img/profile/EonCoetzee.jpg" alt="">
                                    <h5 class="mb-0 text-md">Eon Coetzee</h5>
                                    <span class="text-muted">CEO / Founder</span>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <!-- Member -->
                                <div class="text-center mb-50">
                                    <img class="img-circle mb-20" src="assets/img/profile/male.jpg" alt="">
                                    <h5 class="mb-0 text-md">Jaun Landman</h5>
                                    <span class="text-muted">Company Director</span>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <!-- Member -->
                                <div class="text-center mb-50">
                                    <img class="img-circle mb-20" src="assets/img/profile/female.jpg" alt="">
                                    <h5 class="mb-0 text-md">Ilse Coetzee</h5>
                                    <span class="text-muted">Creative Producer & Event Manager</span>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <!-- Member -->
                                <div class="text-center mb-50">
                                    <img class="img-circle mb-20" src="assets/img/profile/male.jpg" alt="">
                                    <h5 class="mb-0 text-md">Dolf Gerber</h5>
                                    <span class="text-muted">Cinematographer</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <!-- Member -->
                                <div class="text-center mb-50">
                                    <img class="img-circle mb-20" src="assets/img/profile/female.jpg" alt="">
                                    <h5 class="mb-0 text-md">Gerda Roth</h5>
                                    <span class="text-muted">Photographer</span>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <!-- Member -->
                                <div class="text-center mb-50">
                                    <img class="img-circle mb-20" src="assets/img/profile/male.jpg" alt="">
                                    <h5 class="mb-0 text-md">Chris Matthee</h5>
                                    <span class="text-muted">Freelance Cinematographer / Film Director</span>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <!-- Member -->
                                <div class="text-center mb-50">
                                    <img class="img-circle mb-20" src="assets/img/profile/female.jpg" alt="">
                                    <h5 class="mb-0 text-md">Beverly Matthee</h5>
                                    <span class="text-muted">Freelance Photographer</span>
                                </div>
                            </div>
                        </div></div>

                </div>
            </div>
        </div>


    </section>


    <?php
    include 'inc/footer.php';
    include 'inc/js_scripts.php';
    ?>

</body>