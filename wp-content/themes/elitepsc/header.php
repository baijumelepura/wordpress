<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package elitepsc
 */

?>


<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
   <!--  <title>Elite | Home</title> -->
	<?php wp_head(); ?>

</head>



<body <?php body_class(); ?>>



    <div class="preloader" ></div>

    <div class="header-topbar">
        <div class="container padding-none">
            <div class="row">
                <div class="col-md-8 col-sm-6 welcome-top">
                    <ul class="list-inline top-icon">
                        <li><i class="fa fa-phone"></i> +961-1 786673</li>
                        <li><i class="fa fa-envelope"></i> info@elitepsc.com</li>
                        <li><i class="fa fa-clock-o"></i> Mon - Sat 8.00 - 18.00</li>
                    </ul>
                </div>
                <div class="col-md-4 col-sm-6">
                    <ul class="list-inline text-right icon-style-1">
                        <li class=" hvr-rectangle-out"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li class=" hvr-rectangle-out"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        <li class=" hvr-rectangle-out"><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li class=" hvr-rectangle-out"><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                        <li class=" hvr-rectangle-out"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>



    <div class="main-navbar conner-style no-bg bg-defult-1 position-fixed">
        <div class="container padding-none">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-default">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand dis-none" href="index.php"><img src="http://localhost/wordpress/wp-content/themes/elitepsc/img/logo-2.png" alt="">
                                </a>
                            <a class="navbar-brand dis-block" href="index.php"><img src="http://localhost/wordpress/wp-content/themes/elitepsc/img/logo-2.png" alt="">
                                </a>
                        </div>
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" data-hover="dropdown" data-animations-delay="1.8s" data-animations="fadeInUp">
                            <ul class="nav navbar-nav bg-none navbar-right style-3">
                                <li class="<?php if(basename($_SERVER['SCRIPT_NAME']) == 'index.php'){echo 'active'; }else { echo ''; } ?>">
                                    <a href="javascript:void(0);" onclick="home();" class="dropdown-toggle flip-animate" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span data-hover="Home">Home </span> </a>
                                    
                                </li>
                                
                                <li class="<?php if(basename($_SERVER['SCRIPT_NAME']) == 'aboutus.php'){echo 'active'; } elseif(basename($_SERVER['SCRIPT_NAME']) == 'docpro.php'){echo 'active'; } else { echo ''; } ?>">
                                    <a href="" class="dropdown-toggle flip-animate" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <span data-hover="Doctors">Doctors <i class="fa fa-angle-down" aria-hidden="true"></i></span></a>
                                    <ul class="dropdown-menu">
                                    <li class="<?php if(basename($_SERVER['SCRIPT_NAME']) == 'docpro.php'){echo 'active'; } ?>"><a href="docpro.php">Dr Samir Chebaro</a>
                                        </li>
									
                                    </ul>
                                </li>
                               
                                <li class="<?php if(basename($_SERVER['SCRIPT_NAME']) == 'facial_rej.php'){echo 'active'; }else { echo ''; } ?>">
                                    <a href="" class="dropdown-toggle flip-animate" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span data-hover="Services">Services <i class="fa fa-angle-down" aria-hidden="true"></i></span></a>
                                    <ul class="dropdown-menu">
                                        <li class="<?php if(basename($_SERVER['SCRIPT_NAME']) == 'facial_rej.php'){echo 'active'; }else { echo ''; } ?>"><a href="facial_rej.php">Facial Rejuvenation</a></li>
										<li class="<?php if(basename($_SERVER['SCRIPT_NAME']) == 'breast.php'){echo 'active'; }else { echo ''; } ?>"><a href="breast.php">Breast</a></li>
										<li class="<?php if(basename($_SERVER['SCRIPT_NAME']) == 'lipo.php'){echo 'active'; }else { echo ''; } ?>"><a href="lipo.php">Lipo</a></li>
										<li class="<?php if(basename($_SERVER['SCRIPT_NAME']) == 'rhino.php'){echo 'active'; }else { echo ''; } ?>"><a href="rhino.php">Rhino</a></li>
										<li class="<?php if(basename($_SERVER['SCRIPT_NAME']) == 'tummy.php'){echo 'active'; }else { echo ''; } ?>"><a href="tummy.php">Tummy Tuck</a></li>
										<li  class="<?php if(basename($_SERVER['SCRIPT_NAME']) == 'dental.php'){echo 'active'; }else { echo ''; } ?>"><a href="dental.php">Dental</a></li>
                                  
                                    </ul>
                                </li>
                                 <li class="<?php if(basename($_SERVER['SCRIPT_NAME']) == 'port.php'){echo 'active'; }else { echo ''; } ?>">
                                    <a href="javascript:void(0)" onclick="before();" class="dropdown-toggle flip-animate" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span data-hover="Before and After">Before and After </span></a>
                                          </li>
								<li >
                                    <a href="javascript:void(0)" onclick="book();" class="dropdown-toggle flip-animate" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span data-hover="Book Now">Book Now</span></a>
                                    
                                </li>
								
                                 <li class="<?php if(basename($_SERVER['SCRIPT_NAME']) == 'procedures.php'){echo 'active'; }else { echo ''; } ?>">
                                    <a href="javascript:void(0)" onclick="con();" class="dropdown-toggle flip-animate" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span data-hover="Crisalix 3D">Crisalix 3D </span></a>
                                    
                                </li>
								
								<li class="<?php if(basename($_SERVER['SCRIPT_NAME']) == 'contact.php'){echo 'active'; }else { echo ''; } ?>">
                                    <a href="javascript:void(0)" onclick="cont();" class="dropdown-toggle flip-animate" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span data-hover="Contact">Contact</span></a>
                                    
                                </li>
                          
								
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>


























