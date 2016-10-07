<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and navigation.
 *
 */
?><! doctype html>
<html>
	<head>
		<title>DeLong Equipment</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style.css">
		
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	    <![endif]-->
	    <?php wp_head(); ?>
	</head>
	<body>
		<div class="navmenu navmenu-default navmenu-fixed-left offcanvas">
			<a class="navmenu-brand" href="#">Navigation</a>
			<ul class="nav navmenu-nav">
				<li><a href="">Home</a></li>
				<li><a href="">Metal Finishing Services</a></li>
				<li><a href="">Maintenance Services</a></li>
				<li><a href="">Portfolio Gallery</a></li>
				<li><a href="">About Us</a></li>
				<li><a href="">Contact Us</a></li>
				<li><a href="">RFQ</a></li>
			</ul>
		</div>
		<button type="button" class="navbar-toggle visible-xs visible-sm" data-toggle="offcanvas" data-target=".navmenu" data-canvas="body">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<div class="container no-gutters">
			<div class="row no-gutters">
				<div class="col-xs-6 col-md-3">
					<div id="logo">
						<a href="#" title="Delong Equipment Company : Metal Finishing and Surface Preparation Solutions"><img src="<?php bloginfo('template_directory'); ?>/images/DeLong-logo.png" alt="Delong Equipment Company : Metal Finishing and Surface Preparation Solutions"></a>
					</div>
				</div>
				<div class="col-xs-6 col-md-9 hidden-xs hidden-sm">
					<div id="contact-line">
						<p><span>Call Us</span> Today: ATLANTA: <strong>800-548-8233</strong> &nbsp;&nbsp;GREENVILLE: <strong>800-959-5009</strong> &nbsp;&nbsp;<a href="mailto:sales@delongequipment.com" title="Email DeLong Equipment">sales@delongequipment.com</a></p>
					</div>
					<div id="nav">
						<nav>
							<ul>
								<li><a href="">Home</a></li>
								<li><a href="">Metal Finishing Services</a></li>
								<li><a href="">Maintenance Services</a></li>
								<li><a href="">Portfolio Gallery</a></li>
								<li><a href="">About Us</a></li>
								<li><a href="">Contact Us</a></li>
								<li><a href="">RFQ</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>