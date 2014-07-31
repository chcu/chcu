<!DOCTYPE html>

<!--[if IEMobile 7 ]> <html <?php language_attributes(); ?>class="no-js iem7"> <![endif]-->
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title><?php wp_title( '|', true, 'right' ); ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->
		<!-- IE8 fallback moved below head to work properly. Added respond as well. Tested to work. -->
			<!-- media-queries.js (fallback) -->
		<!--[if lt IE 9]>
			<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
		<![endif]-->

		<!-- html5.js -->
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

			<!-- respond.js -->
		<!--[if lt IE 9]>
		          <script type='text/javascript' src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
		<![endif]-->

		<link href="http://fonts.googleapis.com/css?family=Roboto&subset=latin-ext" rel="stylesheet" type="text/css" />
		<link href="<?php echo get_theme_root_uri() . '/' . get_template() ?>/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	</head>

	<body <?php body_class(); ?>>
		<header role="banner">

			<div id="chcuNav" class="navbar navbar-default navbar-fixed-top">
				<div class="container">

					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>

						<span class="navbar-brand-container">
							<a class="navbar-brand" title="Chcu Žít Brno" href="<?php echo home_url(); ?>">CHCU</a>
						</span>
					</div>

					<div class="collapse navbar-collapse navbar-responsive-collapse">
						<?php wp_bootstrap_main_nav(); // Adjust using Menus in Wordpress Admin ?>
					</div>

				</div> <!-- end .container -->
			</div> <!-- end .navbar -->

		</header> <!-- end header -->
