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
include_once ENV_ROOT . 'include/head.php';
?>

<body>
       <!------ Preloader Start ------>
    <div id="preloader">
        <div id="status">
            <img src="<?php echo ENV_ROOTURL; ?>assets/img/logo.png" alt="" />
            <div class="loader">
                Loading...
                <div class="ball"></div>
                <div class="ball"></div>
                <div class="ball"></div>
            </div>
        </div>
    </div>
    
    <!------ Header Start ------>
    <div class="impl_header_wrapper">
        <div class="impl_logo">
            <a href="index.html"><img src="<?php echo ENV_ROOTURL; ?>assets/img/logo.png" alt="Logo" class="img-fluid"></a>
        </div>
        <div class="impl_top_header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="impl_top_info">
                            <ul class="impl_header_social">
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            </ul>
                            <p class="impl_header_time"><i class="fa fa-clock-o" aria-hidden="true"></i> Working Hours - 6 AM To 8 PM <span>sunday closed</span></p>
                            <ul class="impl_header_icons">
                                <li class="impl_search"><span><i class="fa fa-search" aria-hidden="true"></i></span></li>
                                <li class="cart-popup"><a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                                    <!--shopping cart box-->
                                    <div class="cart-box">
                                        <div class="popup-container">
                                            <div class="cart-entry">
                                                <a href="#" class="image">
												<img src="http://via.placeholder.com/70x60" alt="">
											</a>
                                                <div class="content">
                                                    <a href="#" class="title">Serpent</a>
                                                    <p class="quantity">Quantity: 1</p>
                                                    <span class="price">$4500.00</span>
                                                </div>
                                                <div class="button-x">
                                                    <i class="fa fa-times-circle" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                            <div class="cart-entry">
                                                <a href="#" class="image">
												<img src="http://via.placeholder.com/70x60" alt="">
											</a>
                                                <div class="content">
                                                    <a href="#" class="title">Empire</a>
                                                    <p class="quantity">Quantity: 1</p>
                                                    <span class="price">$900.00</span>
                                                </div>
                                                <div class="button-x">
                                                    <i class="fa fa-times-circle" aria-hidden="true"></i>
                                                </div>
                                            </div>
                                            <div class="summary">
                                                <div class="subtotal">Sub Total</div>
                                                <div class="price-s">$5100.0</div>
                                            </div>
                                            <div class="cart-buttons">
                                                <a href="checkout.html" class="btn impl_btn">View Cart</a>
                                                <a href="checkout.html" class="btn impl_btn">Checkout</a>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="#signin" data-toggle="modal"> Log in / Sign up <i class="fa fa-sign-in" aria-hidden="true"></i></a></li>
                            </ul>
                            <div class="impl_search_overlay">
                                <div class="impl_search_area">
                                    <div class="srch_inner">
                                        <form action="#">
                                            <input type="text" placeholder="Search here... ">
                                            <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                        </form>
                                        <div class="srch_close_btn">
                                            <span class="srch_close_btn_icon"><i class="fa fa-times" aria-hidden="true"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--sign-in form-->
        <div class="modal" id="signin">
            <div class="impl_signin">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">×</span>
			</button>
                <div class="impl_sign_form">
                    <h1>Sign In</h1>
                    <div class="form-group">
                        <input type="text" placeholder="Email" class="form-control">
                        <span class="form_icon">
						<i class="fa fa-envelope" aria-hidden="true"></i>
					</span>
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="Password" class="form-control">
                        <span class="form_icon">
					<i class="fa fa-lock" aria-hidden="true"></i>
					</span>
                    </div>
                    <div class="forget_password">
                        <div class="remember_checkbox">
                            <label>Keep me signed in
							<input type="checkbox">
							<span class="checkmark"></span>
						</label>
                        </div>
                        <a href="#">Forgot Password ?</a>
                    </div>
                    <a href="#" class="impl_btn">submit</a>
                    <p>Dont Have An Account? <a class="impl_modal" href="#signup" data-toggle="modal">Sign Up</a></p>
                </div>
                <div class="impl_sign_img">
                    <h2>Welcome To Impel Cars</h2>
                    <p>A Perfect Zone To Sell And Purchase Cars</p>
                    <div class="impl_sign_bottom">
                        <h3>It’s Not Just A Car </h3>
                        <h3>It’s Someone’s Dream</h3>
                    </div>
                </div>
            </div>
        </div>
        <!--sign-up form-->
        <div class="modal" id="signup">
            <div class="impl_signin">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">×</span>
			</button>
                <div class="impl_sign_form">
                    <h1>Sign up</h1>
                    <div class="form-group">
                        <input type="text" placeholder="Username" class="form-control">
                        <span class="form_icon">
						<i class="fa fa-user" aria-hidden="true"></i>
					</span>
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Email" class="form-control">
                        <span class="form_icon">
						<i class="fa fa-envelope" aria-hidden="true"></i>
					</span>
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="Password" class="form-control">
                        <span class="form_icon">
					<i class="fa fa-lock" aria-hidden="true"></i>
					</span>
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="Confirm Password" class="form-control">
                        <span class="form_icon">
					<i class="fa fa-lock" aria-hidden="true"></i>
					</span>
                    </div>
                    <a href="#" class="impl_btn">sign up</a>
                    <p>Dont Have An Account? <a href="#signup" data-toggle="modal" class="impl_modal">Sign Up</a></p>
                </div>
                <div class="impl_sign_img">
                    <h2>Welcome To Impel Cars</h2>
                    <p>A Perfect Zone To Sell And Purchase Cars</p>
                    <div class="impl_sign_bottom">
                        <h3>It’s Not Just A Car </h3>
                        <h3>It’s Someone’s Dream</h3>
                    </div>
                </div>
            </div>
        </div>
        <!--menu start-->
        <div class="impl_menu_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <button class="impl_menu_btn">
			<i class="fa fa-car" aria-hidden="true"></i>
			<i class="fa fa-bars" aria-hidden="true"></i>
		</button>
                        <div class="impl_menu_inner">
                            <div class="impl_logo_responsive">
                                <a href="index.html"><img src="<?php echo ENV_ROOTURL; ?>assets/img/logo1.png" alt="Logo" class="img-fluid"></a>
                            </div>
                            <div class="impl_menu">
                                <nav>
                                    <div class="menu_cross">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </div>
                                    <ul>
                                        <li ><a href="index.php" class="active">Home</a></li>
                                        <li><a href="catalogue.php">Car Catalogue</a></li>
                                        <li><a href="blog.php">Blog</a></li>
                                        <li><a href="aboutus.php">About us</a></li>
                                        <li><a href="contact.php">Contact us</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
