<?php
/*
Template Name: Zpravy
*/

add_theme_support('post-thumbnails');

$posts = get_posts(array(

));

?>

<?php get_header(); ?>

	<div class="container">

		<div class="row pageHeader">
			<div class="col-xs-12">
				<h1>
					Zprávy
				</h1>
			</div>
			<div class="col-lg-offset-3 col-lg-6 col-md-offset-2 col-md-8">
				<p class="lead">
					Volby jde vyhrát i bez peněz a kmotrů. Jsme aktivisti, makáme.
				</p>
			</div>
		</div>

		<?php include 'includes/posts.php' ?>

		<hr />

		<?php include 'includes/donate.php' ?>

		<?php include 'includes/kolo.php' ?>

	</div>

<?php get_footer(); ?>
