<?php
/*
Template Name: Program
*/

add_theme_support('post-thumbnails');

?>

<?php get_header(); ?>

	<div class="container">

		<div class="row pageHeader">
			<div class="col-xs-12">
				<h1>
					Program
				</h1>
				<p class="lead">
					Co chceš ty a co chceme my.
				</p>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12">
				<?php while (have_posts()) {
					the_post();
					the_content();
				} ?>
			</div>
		</div>

	</div>

<?php get_footer(); ?>
