<!DOCTYPE html>
<html>

	<head>
		<meta charset='UTF-8' />

		<title><?php bloginfo('name');?></title>

		<link rel='stylesheet' href="<?php bloginfo('stylesheet_url')?>" type="text/css" />
		<link href='http://www.pharmacy.nus.edu.sg/favicon.ico' rel='icon' type='image/x-icon'/>
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/base.css" media="screen, print, projection, handheld" />
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/print.css"  media="print" />
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/screen.css"  media="screen, projection, print" />
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/style.css"  media="screen, projection, print" />
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/handheld.css"  media="handheld" />
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/innerpage1.css"  media="screen, print, projection" />
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/left-menu.css" media="screen, print, projection, handheld" />
		<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/slideshow.js"></script>
		<script src="<?php echo get_template_directory_uri();?>/js/AC_RunActiveContent.js" type="text/javascript"></script>
		<?php wp_head();?>
	</head>

	<body>
		<div class="page-wrap">
			<header>

				<div class="container">

					<div class="header_logo" id="header">
						<div class="logo">
							<img src="<?php echo get_template_directory_uri();?>/images/nstu.png" />
							
						</div>
						<div class="header_content">
							<h2 id="nstu">Noakhali Science & Technology University </h2>
						</div>
						<div class="header_manue">
							<ul>
								<li>
									<a href="">Calender</a>
								</li>
								<li>
									<a href="">Library</a>
								</li>
								
								<li>
									<a href="">Registration</a>
								</li>
								
								<li>
									<a href="">Login</a>
								</li>
								
							</ul>
							<form role="search" method="get" id="searchform" action=" /" >
							<label class="screen-reader-text" for="s">
								<input type="text" class="" id="indexSearch" name="s" placeholder="Example: Admissions">
								<input type="submit" class="submit-button" id="submit" name="" value="Search">
							</label>
						</form>
						</div>
						
					</div>

					<div class="header-info">

						<div class="tool-bar">

							<small>Interact With The College</small>

							<ul class="social-icons">
								<li>
									<a href="http://www.facebook.com/ourMedicalSchool" class="facebook" alt="See us on Facebook" title="See us on Facebook" target="_blank">Facebook Page</a>
								</li>
								<li>
									<a href="http://www.instagram.com/ourMedSchool" class="instagram" alt="See us on Instagram" title="See us on Instagram" target="_blank">Instagram Photos</a>
								</li>
								<li>
									<a href="http://twitter.com/ourmedschool" class="twitter" alt="Follow us on Twitter" title="Follow us on Twitter" target="_blank">Twitter Feed</a>
								</li>
								<li>
									<a href="http://www.flickr.com/photos/ourmedschool/" class="flickr" alt="See us on Flickr" title="See us on Flickr" target="_blank">Flickr Albums</a>
								</li>
								<li>
									<a href="http://www.youtube.com/ourmedicalschool" class="youtube" alt="See us on YouTube" title="See us on YouTube" target="_blank">YouTube Videos</a>
								</li>
							</ul>
						</div>

						
					</div>

				</div>

			</header>