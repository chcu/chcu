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

		<div class="row">
			<?php include 'includes/posts.php' ?>
		</div>

	</div>

<?php get_footer(); ?>
