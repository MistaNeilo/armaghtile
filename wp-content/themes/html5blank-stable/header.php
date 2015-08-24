<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

        <meta name="description" content="<?php bloginfo('description'); ?>"/>
        <link rel="canonical" href="http://www.armaghtile.com.au/" />
        <meta property="og:locale" content="en_US" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="Armaghtile - Professional Tiling Service Brisbane - armaghtile.com.au" />
        <meta property="og:description" content="<?php bloginfo('description'); ?>" />
        <meta property="og:url" content="http://www.armaghtile.com.au/" />
        <meta property="og:site_name" content="<?php bloginfo('name'); ?>" />



        <?php wp_head(); ?>

        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/lib/bootstrap.min.css">

        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/owl.css">
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/prettyPhoto.css">
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/animate.css">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

        <link id="main" rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>


    <body <?php body_class(); ?> id="top">

    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">

        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <i class="fa fa-th list toggle-menu"></i>
                </button>
                <a class="navbar-brand wow animated fadeInLeft" href="#top"><img alt="ArmaghTile Logo" src="<?php echo get_template_directory_uri(); ?>/img/logo.png"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right wow animated fadeInRight">

                    <?php
                    if (is_front_page())
                    {?>

                        <li><a href="#top">Home</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#experience">Experience</a></li>
                        <li><a href="#portfolio">Latest Projects</a></li>
                        <li><a href="#testimonials">Testimonials</a></li>
                        <li><a href="#contact">Contact</a></li>

                    <?php } else { ?>

                        <li><a href="<?php echo home_url(); ?>">Home</a></li>
                        <li><a href="<?php echo home_url(); ?>/#services">Services</a></li>
                        <li><a href="<?php echo home_url(); ?>/#experience">Experience</a></li>
                        <li><a href="<?php echo home_url(); ?>/#portfolio">Latest Projects</a></li>
                        <li><a href="<?php echo home_url(); ?>/#testimonials">Testimonials</a></li>
                        <li><a href="/<?php echo home_url(); ?>/#contact">Contact</a></li>

                    <?php } ?>




                </ul>

                <?php //html5blank_nav(); ?>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>



    <!-- start of banner -->

    <header>

        <div id="owl-demo">

            <div class="item" style="background:url('<?php echo get_template_directory_uri(); ?>/img/banner/banner-image1.jpg'); background-size:cover;">

                <div class="header-text">
                    <h5 class="hidden-xs alt spaced wow animated fadeInDown">Welcome to Armagh Tile</h5>
                    <h1 class="animated bounceInUp">View our latest work</h1>
                    <a href="#" class="btn btn-orange animated bounceIn">Click here <i class="fa fa-angle-right btn-arrow"></i></a>
                </div>

            </div>
            <div class="item" style="background:url('<?php echo get_template_directory_uri(); ?>/img/banner/banner-image2.jpg'); background-size:cover;">

                <div class="header-text">
                    <h5 class="hidden-xs alt spaced wow animated fadeInDown">Quality Workmanship</h5>
                    <h1 class="animated bounceInUp">Delivered on Time! Everytime!</h1>
                    <a href="#" class="btn btn-orange animated bounceIn">View latest projects <i class="fa fa-angle-right btn-arrow"></i></a>
                </div>

            </div>

        </div>

    </header>
