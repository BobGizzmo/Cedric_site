<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Cedric Debacq</title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/normalize.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
</head>
<body>
	<!-- HEADER BARRE/TOP NAV ET PHOTO -->
	<header>
		<!-- BARRE DU DESSUS -->
		<div id="header-barre-top">
			<img id="header-barre-img" src="<?php bloginfo('template_url') ?>/img/logo-styliste-entreprise2x.png">
			<ul>
				<li><i class="fa fa-envelope-o" aria-hidden="true"></i>info@cedric-debacq.fr</li>
				<li><i class="fa fa-phone" aria-hidden="true"></i>Tel: +33.6.49.75.30.63</li>
				<li><i class="fa fa-search" id="header-search" aria-hidden="true"></i></li>
				<!-- <form method="get" id="searchform" action="<?php bloginfo('home'); ?>/"> <div> <input type="text" value="<?php the_search_query(); ?>" name="s" id="s" /> <input type="submit" id="searchsubmit" value="Chercher" /> </div> </form> -->
			</ul>
		</div>
		<!-- EFFET BLUR SOUS NAV -->
		<div id="blur-div">
			<img id="header-img" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" class=" col-md-10">
		</div>
		<!-- BARRE DE MENU -->
		<nav id="header-barre-nav">
			<?php
                   wp_nav_menu( array(
                       'menu'              => 'primary',
                       'theme_location'    => 'primary',
                       'depth'             => '',
                       'container'         => 'ul',
                       'container_class'   => '',
                       'container_id'      => '',
                       'menu_class'        => 'primary-menu')
                   );
               ?>
		</nav>
		<!-- IMAGE DE HEADER -->
		<img id="header-img" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" class=" col-md-10">
	</header>