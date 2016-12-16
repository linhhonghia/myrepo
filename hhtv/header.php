<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
	<meta charset="utf-8">
	<!--[if IE]>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<![endif]-->
	<title>HHTV - Great Quality From Small Things</title>
	<link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

<?php wp_head(); ?>
<?php   while ( have_posts() ) : the_post(); ?> 
</head>


<body>

<div class="c-wrapper">
	<div id="page" class="hfeed site">

		<div class="c-main-menu-off-canvas pull-right">
			<nav class="navbar navbar-inverse main-menu off-canvas">

				<!--<a href="#" class="btn-close">-->
					<!--<i class="fa fa-close"></i>-->
				<!--</a>-->
				<!-- <ul class="nav navbar-nav">
					<li id="mega-menu-item-05" class="menu-item menu-item-has-children list-style">
						<a class="menu-link" href="index.html">Home</a>
					</li>
					<li id="mega-menu-item-06" class="menu-item menu-item-has-children list-style">
						<a class="menu-link" href="services.html">Services</a>
					</li>
					<li id="mega-menu-item-07" class="menu-item menu-item-has-children list-style">
						<a class="menu-link" href="career.html">Career</a>
					</li>
					<li id="mega-menu-item-08" class="menu-item menu-item-has-children list-style">
						<a class="menu-link" href="contact.html">Contact Us</a>
					</li>
				</ul> -->
			</nav>
		</div>

		<header id="masthead" class="site-header style-1">

			<section class="c-main-navigation">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 c-column">
							<div class="c-main-navigation__inner">
								<div class="col-xs-12 col-sm-3 col-md-3 no-gutter c-column">
									<div class="c-branding pull-left">
										<div id="site-branding" class="site-branding">
											<a class="logo" href="#">


												<img src="<?php echo HHTV_THEME_URI ?>/images/logo.png" alt="BuildMag"/>
											</a>
										</div>
									</div>

									<a href="#" class="btn btn-default btn-toggle-nav">
										<i class="fa fa-bars"></i>
									</a>
								</div>
								<!--branding-->

								<div class="col-xs-12 col-sm-9 col-md-9 no-gutter c-column">
									<div class="c-main-menu pull-right">
											
											<?php hhtv_menu('primary-menu'); ?>
									
									</div>
									<!--!main-menu-->
								</div>
								<!--!main-navigation-->

							</div>
							<!--!navigation-->
						</div>
					</div>
				</div>
			</section>
			<!--!top-links-->

		</header>
		<!--!site-header-->

		 <?php
    endwhile; //resetting the page loop
    wp_reset_query(); //resetting the page query
    ?>
