<?php
/*
Template Name: Stred
*/

add_theme_support('post-thumbnails');

?>

<?php get_header(); ?>

	<div class="container">

		<div class="row pageHeader">
			<div class="col-xs-12">
				<h1>
					Chcu žít Brno-střed
				</h1>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-offset-3 col-lg-6 col-md-offset-2 col-md-8 col-sm-12 longCopy">
				<?php while (have_posts()) {
					the_post();
					the_content();
				} ?>
			</div>
		</div>

		<hr />

		<?php include 'includes/donate.php' ?>

		<?php include 'includes/kolo.php' ?>

	</div>

<?php get_footer(); ?>
