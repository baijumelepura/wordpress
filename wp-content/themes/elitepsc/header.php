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

<?php if(basename(get_permalink()) != 'book-now'){ ?>

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
                            <a class="navbar-brand dis-none" href="index.php"><img src="http://edrack.net/wp-content/themes/elitepsc/img/logo-2.png" alt="">
                                </a>
                            <a class="navbar-brand dis-block" href="index.php"><img src="http://edrack.net/wp-content/themes/elitepsc/img/logo-2.png" alt="">
                                </a>
                        </div>
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" data-hover="dropdown" data-animations-delay="1.8s" data-animations="fadeInUp">
                        
							<?php 
$args = array(
'theme_location' => 'top',
    'menu_class' => 'nav navbar-nav bg-none navbar-right style-3',        
    'menu' => 'top-menu',
	'container' => 'ul',
);
wp_nav_menu( $args ); 
?>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
<style>
    @media (min-width: 768px)
.navbar-right .sub-menu {
    right: 0;
    left: auto;
}
.open>.sub-menu {
    display: block;
}
    .sub-menu {
    position: absolute;
    top: 100%;
    left: 0;
    z-index: 1000;
    display: none;
    float: left;
    min-width: 160px;
    padding: 5px 0;
    margin: 2px 0 0;
    font-size: 14px;
    text-align: left;
    list-style: none;
    background-color: #fff;
    -webkit-background-clip: padding-box;
    background-clip: padding-box;
    border: 1px solid #ccc;
    border: 1px solid rgba(0,0,0,.15);
    border-radius: 4px;
    -webkit-box-shadow: 0 6px 12px rgba(0,0,0,.175);
    box-shadow: 0 6px 12px rgba(0,0,0,.175);
}
.menu-item-has-children>ul>li:last-child>a {
    border-bottom: none;
}
.menu-item-has-children>ul>li>a {
    padding: 15px 20px;
    border-bottom: 1px dashed #171A23;
}
.menu-item-has-children>ul>li>a {
    display: block;
    padding: 3px 20px;
    clear: both;
    font-weight: 400;
    line-height: 1.42857143;
    color: #333;
    white-space: nowrap;
}
</style>
