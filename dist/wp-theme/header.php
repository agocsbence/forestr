<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title><?php if(is_front_page() || is_home()){ echo get_bloginfo('name'); } else{ echo wp_title(''); echo ' | '; echo get_bloginfo('name'); }?></title>
		<meta content="width=device-width, initial-scale=1" name="viewport"/>

		<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/assets/css/hamburgers.min.css" type="text/css">
        <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/assets/css/style.css?v=1.0.1" type="text/css" />
		<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif]-->
		
		<link href="favicon.png" rel="shortcut icon" type="image/x-icon"/>
		<link href="webclip.png" rel="apple-touch-icon"/>
		<?php wp_head(); ?>
	</head>
	<body class="body has-bg">
		
		<nav class="navbar">
			<a href="index.html" class="navbar-logo">ForestR Foundation</a>
			<button class="hamburger hamburger--boring" type="button" aria-label="Menu" aria-controls="navigation">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</button>
			<div class="navbar-nav slide-right" id="navigation">
				<div class="nav-item"><a href="news.html">News</a></div>
				<div class="nav-item"><a href="projects.html">Projects</a></div>
				<div class="nav-item"><a href="donate.html">Donate</a></div>
				<div class="nav-item"><a href="connect.html">Get involved</a></div>
				<div class="nav-item"><a href="partners.html">Partners</a></div>
				<div class="nav-item"><a href="contact.html">Contact to</a></div>
				<div class="nav-item"><a href="about.html">About</a></div>
			</div>
		</nav>

		<div class="page-content">