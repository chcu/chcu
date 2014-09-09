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
    
    <meta property="og:image" content="<?php echo get_theme_root_uri() . '/' . get_template() ?>/images/CHCU_facebook_oimage2_tr.png" />

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

    <!--<meta property="og:url" content="http://chcu.zitbrno.cz" />
    <meta property="og:site_name" content="CHCU ŽÍT BRNO"/>
    <meta property="og:title" content="CHCU ŽÍT BRNO" />
    <meta property="og:type" content="article" />
    <meta property="og:description" content="Chceme vrátit naději životu v Brně a chceme, aby nám nikdo nebránil být na něj hrdí." />
    <meta property="og:image" content="<?php echo get_theme_root_uri() . '/' . get_template() ?>/images/CHCU_facebook_oimage2_tr.png" /> -->



		<link href="<?php echo get_theme_root_uri() . '/' . get_template() ?>/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />

		<link href="//fonts.googleapis.com/css?family=Roboto&subset=latin-ext" rel="stylesheet" type="text/css" />
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" />

		<link rel="shortcut icon" href="<?php echo get_theme_root_uri() . '/' . get_template() ?>/images/favicon2.gif" type="image/x-icon" />

	</head>

	<body <?php body_class(); ?>>
		<header role="banner">

			<?php include 'includes/nav.php' ?>

		</header>
