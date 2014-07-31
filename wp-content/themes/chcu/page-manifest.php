<?php
/*
Template Name: Manifest
*/

add_theme_support('post-thumbnails');

?>

<?php get_header(); ?>

	<div class="container">

		<div class="row pageHeader">
			<div class="col-xs-12">
				<h1>
					Manifest
				</h1>
			</div>
			<div class="col-lg-offset-3 col-lg-6 col-md-offset-2 col-md-8">
				<p class="lead">
					O co vám jde?
				</p>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-offset-3 col-lg-6 col-xs-12">
				<?php while (have_posts()) {
					the_post();
					the_content();
				} ?>
			</div>
		</div>

	</div>

<?php get_footer(); ?>
