<?php
/*
Template Name: Kandidatka
*/

add_theme_support('post-thumbnails');

$candidates = get_pages(array(
	'hierarchical' => 0,
	'sort_column'  => 'menu_order',
	'meta_key'     => 'pageRole',
	'meta_value'   => 'candidate',
));

?>

<?php get_header(); ?>

	<div class="container">

		<div class="row pageHeader">
			<div class="col-xs-12">
				<h1>
					Zastupitelé
				</h1>
			</div>
			<div class="col-lg-offset-3 col-lg-6 col-md-offset-2 col-md-8">
				<p class="lead">
					Jsme populisti, slušní lidé, aktivisti, flákači a tvrdě pracující, důchodci, cikáni, architekti a matky, programátoři, gayové, intelektuálové a kritici, pragmatici, pacienti, trapáci, slušní občané a rebelové. Dělejte si z nás legraci, rýpejte do nás, pomlouvejte za zády a do novin. My to ustojíme. A budeme vás poslouchat.
				</p>
			</div>
		</div>
		<div class="row">
			<h2>Magistrát města Brna aneb &bdquo;Velké Brno&ldquo;</h2>
		</div>
		<?php
		$zastupitel_za = "mmb";
		include 'includes/candidates.php' ?>

		<div class="row">
			<h2>Brno-střed aneb &bdquo;Malé Brno&ldquo;</h2>
		</div>
		<?php
		$zastupitel_za = "stred";
		include 'includes/candidates.php' ?>

		<hr />

		<?php include 'includes/donate.php' ?>

		<?php include 'includes/kolo.php' ?>

	</div>

<?php get_footer(); ?>
