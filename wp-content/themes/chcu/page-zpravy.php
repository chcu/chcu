<?php
/*
Template Name: Zpravy
*/

add_theme_support('post-thumbnails');
add_action( 'pre_get_posts', 'bez_denicku' );

$posts = get_posts(array(
	'posts_per_page' => 1000,
));

?>

<?php get_header(); ?>

	<div class="container">

		<div class="row pageHeader">
			<div class="col-xs-12">
				<h1>
					Zpravodaj
				</h1>
			</div>
			<div class="col-lg-offset-3 col-lg-6 col-md-offset-2 col-md-8">
				<p class="lead">
					Zprávy z magistrátu i radnice.
				</p>
			</div>
		</div>

		<?php include 'includes/posts.php' ?>

		<hr />

		<?php include 'includes/donate.php' ?>

		<?php include 'includes/kolo.php' ?>

	</div>

<?php get_footer(); ?>
