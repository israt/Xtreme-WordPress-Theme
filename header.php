<?php
/**
 * The template for displaying the header
 *
 * @package WordPress
 * @subpackage Dynasty3
 * @since Dynasty3 1.0
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <!-- Bootstrap -->
    
    <meta name="keywords" content="Xtreme" />
    <meta name="description" content="Xtreme" />
	<meta name="author" content="Najiana">
	<meta name="robots" content="Xtreme" />

<!-- Responsive View  -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Favicon -->
<link rel="shortcut icon" href="<?php echo of_get_option('fav','No Entry'); ?>">

<!-- Google fonts-->
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

<link href='https://fonts.googleapis.com/css?family=Raleway:400,100,300,200,500,600,800,700,900' rel='stylesheet' type='text/css'>

<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>


<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<!-- FONT awesome STYLES -->
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/font-awesome.min.css" type="text/css" />
<!-- BOOTSTRAP STYLES -->
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/bootstrap.css" type="text/css" />

<!-- jquery-ui CSS -->
<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/jquery-ui.css" rel="stylesheet">

<!-- Menu CSS -->
<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/menu.css" media="all" />

<!--slider-->
<link rel="stylesheet" media="all" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/jquery.bxslider.css" type="text/css">

<!-- fancyBox main CSS files -->
<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/jquery.fancybox.css?v=2.1.5" media="screen" />

<!-- CSS STYLES -->
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/style.css" type="text/css" />
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/template.css" type="text/css" />

<!-- Responsive Devices Styles -->
<link rel="stylesheet" media="screen" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/responsive-leyouts.css" type="text/css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>

<?php wp_head(); ?>
</head>

<body>
	<!--header starts..........-->
    <header>
    	<div class="header_top">
    	<!--row starts.......-->
    	<div class="container">
        	<!--container starts.....-->
            <div class="row">
                    <div class="col-md-4">
                            <ul class="leaf_menu">
                                <li><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/leaf2.png" alt="">&nbsp;&nbsp;<a href="<?php echo bloginfo('url');?>/blog">Blog</a></li>
                                <li><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/leaf2.png" alt="">&nbsp;&nbsp;<a href="<?php echo bloginfo('url');?>/gallery">Gallery</a></li>
                            </ul>
                    </div>
                    <!--col-md-4 ends.........-->
                    <div class="col-md-4">
                        <!--searchbox starts...-->
                        <div class="input-group">
                        	  <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/leaf2.png" alt="">
                              <input type="text" class="form-control" placeholder="Customers Pay here">
                              <span class="input-group-btn">
                              <input type="image"  src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/button-next.png" >
                              </span>
                        </div><!-- /input-group -->
                        <!--searchbox ends...-->
                    </div>
                    <!--col-md-4 ends.........-->
					
					<div class="col-md-4">
                            <ul class="leaf_menu2">
                                <li><a href="#"  class="call">Call for a quote</a></li>
                                <li style="float:right;"><i class="fa fa-phone-square"></i><a href="#" class="phn"><?php echo of_get_option('tel','No Entry'); ?></a></li>
                            </ul>
                    </div>
                    
                    <!--col-md-4 ends.........-->
            </div>
            <!--container ends.....-->
        </div>
        <!--row ends.......-->
    </div>
    <!--header top ends..........-->
    <!--menu area starts.......-->
    <div class="menu_area">
        	<div class="row">
            	<div class="col-md-2">
                	<div class="logo_area">
                    <a href="<?php echo bloginfo('url');?>"><img src="<?php echo of_get_option('logo','No Entry'); ?>" alt="" class="img-responsive"></a>
				
                    </div>
                </div>
                <div class="col-md-10">
                    	<div class="nav dnt3-menu">
                                        <ul class="dropdown clear">
                                            <li><i class="fa fa-home"></i><a href="<?php echo bloginfo('url');?>" class="active text">Home</a></li>
                                            <li><i class="fa fa-building"></i><a href="<?php echo bloginfo('url');?>/commercial-services" class="active text">Commercial Services</a></li>
                                            <li><i class="fa fa-building-o"></i><a href="<?php echo bloginfo('url');?>/residential-services" class="active text">Residential Services</a></li>
                                            <li><i class="fa fa-leaf"></i><a href="<?php echo bloginfo('url');?>/about-us" class="active text">About</a></li>
                                            <li><i class="fa fa-question-circle"></i><a href="<?php echo bloginfo('url');?>/why-extreme-gardens" class="active text">Why <span>extreme gardens</span></a></li>					
                                            <li><i class="fa fa-map-marker"></i><a href="<?php echo bloginfo('url');?>/contact-us" class="active text">Contact</a></li>
                                        </ul>
                         
                    </div>
                </div>
            </div>
    </div>
    <!--menu area ends.......-->
    </header>
    <!--header ends..........-->
   
    
	