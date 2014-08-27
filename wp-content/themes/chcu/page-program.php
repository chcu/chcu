<?php
/*
Template Name: Program
*/

add_theme_support('post-thumbnails');

$programStories = get_pages(array(
	'hierarchical' => 0,
	'sort_column'  => 'menu_order',
	'meta_key'     => 'pageRole',
	'meta_value'   => 'programStory',
));

if ($_GET['tema']) {
	$topic = $_GET['tema'];
	$programStories = array_filter($programStories, function($i) use($topic) {
		$meta = get_post_meta($i->ID);
		return $meta['topic'][0] == $topic;
	});
}

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

		<?php include 'includes/programStories.php' ?>

		<?php include 'includes/program2014link.php' ?>

		<hr />

		<?php include 'includes/donate.php' ?>

		<?php include 'includes/kolo.php' ?>

	</div>

<?php get_footer(); ?>
