<!DOCTYPE html>
<html lang="en" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%;">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=0" />
	<title><?php echo $GLOBALS['site_title']; ?></title>
	<link rel="shortcut icon" type="image/x-icon" href="css/images/favicon.ico" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>asset/theme/<?php echo $GLOBALS['site_theme']; ?>/css/style.css" type="text/css" media="all" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>asset/theme/<?php echo $GLOBALS['site_theme']; ?>/css/flexslider.css" type="text/css" media="all" />
	
	<script src="<?php echo base_url(); ?>asset/theme/<?php echo $GLOBALS['site_theme']; ?>/js/jquery-1.8.0.min.js" type="text/javascript"></script>
	<!--[if lt IE 9]>
		<script src="<?php echo base_url(); ?>asset/theme/<?php echo $GLOBALS['site_theme']; ?>/js/modernizr.custom.js"></script>
	<![endif]-->
	<script src="<?php echo base_url(); ?>asset/theme/<?php echo $GLOBALS['site_theme']; ?>/js/jquery.flexslider-min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>asset/theme/<?php echo $GLOBALS['site_theme']; ?>/js/functions.js" type="text/javascript"></script>
</head>
<body>
	<!-- wraper -->
	<div id="wrapper">
		<!-- shell -->
		<div class="shell">
			<!-- container -->
			<div class="container">
				<!-- header -->
				<header id="header">
					<h1><a href="#">Rumah Sakit Bargawastra Wijaya</a></h1>
					<h3><a href="#">Rumah Sakit Bargawastra Wijaya</a></h3>
				</header>
				<!-- end of header -->
				<!-- navigation -->
				<nav id="navigation">
					<a href="<?php echo base_url(); ?>" class="nav-btn">HOME<span class="arr"></span></a>
					<?php echo $menu_atas; ?>
				</nav>
				<!-- end of navigation -->
				<!-- slider -->
				<div class="m-slider">
					<div class="slider-holder">
						<span class="slider-shadow"></span>
						<span class="slider-b"></span>
						<div class="slider flexslider">
							<ul class="slides">
								<li>
									<div class="img-holder">
										<img src="<?php echo base_url(); ?>asset/theme/<?php echo $GLOBALS['site_theme']; ?>/css/images/slide-img1.png" alt="" />
									</div>
									<div class="slide-cnt">
										<h2>Your Title Here</h2>
										<div class="box-cnt">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus eget augue quis lorem ipsum dolor sit amet, consectetur adipiscing elit. llus eget augue quis lorem ipsum dolor sit amet, free css templates</p>
										</div>
										<a href="#" class="grey-btn">request a demo</a>
									</div>
								</li>
								<li>
									<div class="img-holder">
										<img src="<?php echo base_url(); ?>asset/theme/<?php echo $GLOBALS['site_theme']; ?>/css/images/slide-img2.png" alt="" />
									</div>
									<div class="slide-cnt">
										<h2>Your Title Here</h2>
										<div class="box-cnt">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus eget augue quis lorem ipsum dolor sit amet, consectetur adipiscing elit. llus eget augue quis lorem ipsum dolor sit amet, free css templates</p>
										</div>
										<a href="#" class="grey-btn">request a demo</a>
									</div>
								</li>
								<li>
									<div class="img-holder">
										<img src="<?php echo base_url(); ?>asset/theme/<?php echo $GLOBALS['site_theme']; ?>/css/images/slide-img1.png" alt="" />
									</div>
									<div class="slide-cnt">
										<h2>Your Title Here</h2>
										<div class="box-cnt">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus eget augue quis lorem ipsum dolor sit amet, consectetur adipiscing elit. llus eget augue quis lorem ipsum dolor sit amet, free css templates</p>
										</div>
										<a href="#" class="grey-btn">request a demo</a>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>		
				<!-- end of slider -->
				<!-- main -->
				<p style="height:40px;"></p>
				<nav id="navigation">
					
					<a href="<?php echo base_url(); ?>" class="nav-btn">HOME<span class="arr"></span></a>
					<?php echo $menu_bawah; ?>
				</nav>
				<div class="main">