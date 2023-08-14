<?php
include_once 'env/config.php';
include 'inc/header.php';
?>
<div id="content">
<?php

if (Detect::isComputer() || Detect::isTablet() || Detect::isMobile())
    {
    ?>


<!-- Heading and signup page pb_gradient_v1-->
   
 <section class="pb_cover_v3  bgImgCenters" id="home">
        <div class="container ">
            <div class="row align-items-center ">
                <div class="col-md-7">
                        <h2 class="heading animated"  data-animation="slideInUp" data-animation-delay="100">ACCIDENTAL PLAN</h2>
                            <div class="sub-heading">
                                <p class="mb-4">In an emergency situation quick response is vital.  Our personal accidental insurance plan is comprehensive and provides a range of benefits to give you peace of mind.</p>
                            </div>
                </div>
                <div class="col-md-5 ">
                            <form class="bg-white rounded pb_form_v1" name="formSignUp" method="post">
                                <h2 class="mb-4 text-center">Sign up now</h2>
                                <p> we will get back to you within 24hr or less </p>
                                <div class="form-group">
                                    <input type="text" class="form-control pb_height-50 reverse" placeholder="First Name" name="first_name">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control pb_height-50 reverse" placeholder="Last Name" name="last_name">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control pb_height-50 reverse" placeholder="Email" name="email">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control pb_height-50 reverse" placeholder="Cell" name="telephone">
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary btn-lg btn-block pb_btn-pill  btn-shadow-blue" value="submit">
                                </div>
                            </form>

                </div>
                </div>
            </div>
        </div>
</section>
<!-- END section -->

    <section class="pb_section" id="aboutus">
    <h1 class="text-center">Health Plans</h1><br>
        
        <div class="container">
                <div class="row">

                            <div class="col-md-4 wow fadeInUp"  data-wow-delay="0.4s">
                            <h3>Accidental Hospitilised</h3><br>
                                <a href="">
                                    <div class="service-card">
                                        <img class="service-card-background" src="<?php echo ENV_ROOTURL;?>assets/img/family.jpg"/>
                                        <div class="service-card-inner">
                                        </div>
                                    </div>
                                </a>  
                                <p class="text-center"><span>Benefits:</span> R 150 000.00 per year</p><br>
                            </div>

                            <div class="col-md-4 wow fadeInUp"  data-wow-delay="0.4s">
                            <h3>Accident or Trauma Room</h3><br>
                                <a href="">
                                    <div class="service-card">
                                        <img class="service-card-background" src="<?php echo ENV_ROOTURL;?>assets/img/operation.jpg"/>
                                        <div class="service-card-inner">
                                        </div>
                                    </div>
                                </a>
                                <p class="text-center"><span>Benefits:</span> R 15 000.00 per year</p><br>
                                
                                
                            </div>

                            <div class="col-md-4 wow fadeInUp"  data-wow-delay="0.4s">
                            <h3>EMS, Ambulance and Paramedics</h3>
                                <a href="">
                                    <div class="service-card">
                                        <img class="service-card-background" src="<?php echo ENV_ROOTURL;?>assets/img/family.jpg"/>
                                        <div class="service-card-inner">
                                        </div>
                                    </div>
                                </a>  
                                <p class="text-center"><span>Benefits:</span> R 35 000.00 per year</p><br>
                            </div> 
                </div>

                
                

            </div>
        </div>

    </section>

    <div class="container-fluid background-parallax-1">

        <div class="container">
            <div class="col-md-7">
                
                <h1 class= "heading">Principal memeber R 205.00</h1>
                <h1 class= "heading">Spouce: R 101.00</h1>
                <h1 class= "heading">Dependent: R 81.00</h1>
            </div>
        </div>
    </div>


    <section class="pb_section bg-light" id="aboutus">
            <div class="container">
            <p>Asterio Group Solutions T/A <a href="http://www.agshealth.co.za" title="Affordable Medical Insurance"><strong>AGS Health</strong></a> has been established as a Proprietary Limited company operating in <strong>South Africa</strong> since 2015. Our business model is based on a gap in the market to provide <a href="http://www.agshealth.co.za" title="Family Medical Insurance"><em>affordable healthcare solutions</em></a>. <strong>AGS <a href="http://www.agshealth.co.za" title="Medical Insurance South Africa">Health</a></strong> has grown into a well-rounded Medical Insurance company that provides the public with a number of diverse products to suit the required need of the market.</p>
            
            
    <h5><strong>Asterio Group Solutions (Pty) Ltd</strong> 2015/430737/07, Financial Service Provider (FSP 48780).</h5>
    <p>AGS Health is not a medical aid and under no circumstances must it be considered as a replacement for the benefits offered by a medical aid.<br />
    When joining AGS Health there will be a non-refundable once off registration fee of R150,00 which is debited together with your first deduction. The R150,00 is for the clients membership card and admin fee.<br />
    <a href="http://www.agshealth.co.za" title="Health Insurance Gauteng"><strong>AGS Health Dental</strong></a> is supplied by <em>Dental Risk Underwriting Managers</em> (DRUM) and Administered by DRC<br />
    (<a href="http://www.agshealth.co.za" title="Affordable medical cover">Dental Risk Company</a>) and is underwrien by Guard Risk <a href="http://www.agshealth.co.za" title="Hospital plan South Africa"><strong>Insurance Company</strong></a>.<br />
    <em>AGS Health as a Company</em>, has re-insured the company’s risk with African Unity Life Limited an authorized Financial Services Provider, (FSP 8447).<br />
    The minimum entry age of the Principle member Insured is 18 (eighteen) years old.<br />
    The maximum entry age of the Principle member Insured cannot exceed 65 (sixty-five) years.</p>
    <p><a href="http://www.agshealth.co.za/callback/">Click here</a> and we will contact you.</p>
    <div>
    </section>




    <?php
    }
    ?>



<?php
include 'inc/footer.php';
?>


<?php
include 'inc/js_scripts.php';
?>




    	</body>
</html>