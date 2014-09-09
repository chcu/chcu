<?php
/*
Template Name: BodProgramu
*/

add_theme_support('post-thumbnails');

while (have_posts()) {
	the_post();
	$postId = get_the_ID();

	$meta = get_post_meta($postId);
}

$programStories = get_pages(array(
	'hierarchical' => 0,
	'sort_column'  => 'menu_order',
	'meta_key'     => 'pageRole',
	'meta_value'   => 'programStory',
));

foreach ($programStories as $key => $programStory) {
	if ($programStory->ID == $postId) {
		$storyKey = $key;
	}
}

if ($storyKey - 1 >= 0) {
	$previousStory = $programStories[$storyKey - 1];
} else {
	$previousStory = $programStories[count($programStories) - 1];
}

if ($storyKey + 1 < count($programStories)) {
	$nextStory = $programStories[$storyKey + 1];
} else {
	$nextStory = $programStories[0];
}

?>

<?php get_header(); ?>

	<div class="container">

		<div class="row">
			<div class="programStoryHeader col-md-offset-1 col-md-10 col-sm-12" data-topic="<?php echo $meta['topic'][0] ?>">
				<h1>
					<?php the_title() ?>
				</h1>
				<p class="lead">
					<?php echo $meta['perex'][0] ?>
				</p>
			</div>
		</div>

		<div class="row programStoryWrapper">
			<div class="col-md-offset-1 col-md-2 programBrowse prev">
				<p>
					<a href="<?php echo get_permalink($previousStory) ?>">
						<span class="icon">
							<i class="fa fa-caret-left"></i>
						</span>
						<span class="text">
							<span class="line">Chcu</span> <span class="line">předchozí</span>
						</span>
					</a>
				</p>
			</div>
			<div class="col-md-6 programStoryText">
				<?php echo the_content() ?>
			</div>
			<div class="col-md-2 programBrowse next">
				<p>
					<a href="<?php echo get_permalink($nextStory) ?>">
						<span class="text">
							<span class="line">Chcu</span> <span class="line">další</span>
						</span>
						<span class="icon">
							<i class="fa fa-caret-right"></i>
						</span>
					</a>
				</p>
			</div>
		</div>

		<?php include 'includes/program2014link.php' ?>


    
    	<div class="row sectionHeader">
      <br /><br />
			<div class="col-sm-12">
				<h2>
					Co eště chceš?
				</h2>
				<p class="special">
					Brno jde, když se chce.
				</p>
			</div>
		</div>
    
    <?php include 'includes/programStories.php' ?>
    
    		<hr />

		<?php include 'includes/donate.php' ?>

		<?php include 'includes/kolo.php' ?>

	</div>

<?php get_footer(); ?>
