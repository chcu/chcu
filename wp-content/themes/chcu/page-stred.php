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

		<div class="row" style="margin-top: 3em; margin-bottom: 4em;">
			<div class="col-lg-6 col-md-12">
				<p>
					<img class="img-responsive" src="<?php echo get_theme_root_uri() . '/' . get_template() ?>/stred_1.jpg" style="border: 1px solid white;" />
				</p>
			</div>
			<div class="col-lg-6 col-md-12">
				<p>
					<img class="img-responsive" src="<?php echo get_theme_root_uri() . '/' . get_template() ?>/stred_2.jpg" style="border: 1px solid black;" />
				</p>
			</div>
		</div>

		<div class="row sectionHeader">
			<div class="col-sm-12">
				<h2>
					Kandidátka
				</h2>
			</div>
		</div>

		<style type="text/css">
			table.candidates {
				width: 100%;
				border-collapse: collapse;
			}
			table.candidates tr th, table.candidates tr td {
				padding: .25em .75em;
				vertical-align: top;
				border-top: 1px solid #DDD;
				border-bottom: 1px solid #DDD;
			}
			table.candidates tr th:first-child, table.candidates tr td:first-child {
				padding-left: 0;
			}
			table.candidates tr th:last-child, table.candidates tr td:last-child {
				padding-right: 0;
			}
		</style>

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
