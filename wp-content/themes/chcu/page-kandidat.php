<?php
/*
Template Name: Kandidat
*/

add_theme_support('post-thumbnails');

$candidatesHome = get_pages(array(
	'meta_key'     => 'pageRole',
	'meta_value'   => 'candidates',
));

$candidates = array_slice(get_pages(array(
	'hierarchical' => 0,
	'sort_column'  => 'menu_order',
	'meta_key'     => 'pageRole',
	'meta_value'   => 'candidate',
)), 0, 20);

while (have_posts()) {
	the_post();
	$postId = get_the_ID();

	$post = get_post($postId);
	$meta = get_post_meta($postId);

	$portraitUrl = trim($meta['portraitUrl'][0]);

	$doWant    = array_filter(explode("\n", $meta['doWant'][0]));
	$doNotWant = array_filter(explode("\n", $meta['doNotWant'][0]));
	$hasWants  = $doWant && $doNotWant;

	$phone         = $meta['phone'][0];
	$emailAddress  = $meta['emailAddress'][0];
	$urlHomepage   = $meta['urlHomepage'][0];
	$urlFacebook   = $meta['urlFacebook'][0];
	$urlTwitter    = $meta['urlTwitter'][0];
	$urlGooglePlus = $meta['urlGooglePlus'][0];
	$urlLinkedIn   = $meta['urlLinkedIn'][0];
	$hasContacts   = $phone || $emailAddress || $urlFacebook || $urlGooglePlus || $urlLinkedIn;

	$urls = $meta['url'];
}

?>

<?php get_header(); ?>

	<div class="container">

		<?php if ($portraitUrl) { ?>
			<div class="row">
				<div class="col-md-offset-1 col-md-10 col-sm-12">
					<img class="img-responsive" src="<?php echo $portraitUrl ?>" />
				</div>
			</div>
		<?php } ?>

		<div class="row">
			<div class="candidateHeader col-md-offset-1 col-md-10 col-sm-12 <?php if ($portraitUrl) { ?> hasPortrait <?php } else { ?> hasNotPortrait <?php } ?>">
				<div class="candidateInfoWrapper col-md-offset-1 col-md-10">
					<div class="candidateInfo">
						<h1>
							<?php echo $meta['firstName'][0] ?> <?php echo $meta['lastName'][0] ?>
						</h1>
						<?php if ($meta['perex'][0] || $meta['role'][0] ) { ?>
							<p class="lead">
								<?php echo $meta['role'][0] ? nl2br($meta['role'][0]) : $meta['perex'][0] ?>
							</p>
						<?php } ?>
						<?php if ($hasContacts) { ?>
							<ul class="candidateContacts">
								<?php if ($phone) { ?>
									<li><i class="fa fa-phone"></i> <?php echo $phone ?></li>
								<?php } ?>
								<?php if ($emailAddress) { ?>
									<li><i class="fa fa-envelope"></i> <a href="mailto:<?php echo $emailAddress ?>"><?php echo $emailAddress ?></a></li>
								<?php } ?>
								<?php if ($urlHomepage) { ?>
									<li class="socialNetwork"><a target="_blank" class="icon" href="<?php echo $urlHomepage ?>"><i class="fa fa-home"></i></a></li>
								<?php } ?>
								<?php if ($urlFacebook) { ?>
									<li class="socialNetwork"><a target="_blank" class="icon" href="<?php echo $urlFacebook ?>"><i class="fa fa-facebook"></i></a></li>
								<?php } ?>
								<?php if ($urlTwitter) { ?>
									<li class="socialNetwork"><a target="_blank" class="icon" href="<?php echo $urlTwitter ?>"><i class="fa fa-twitter"></i></a></li>
								<?php } ?>
								<?php if ($urlGooglePlus) { ?>
									<li class="socialNetwork"><a target="_blank" class="icon" href="<?php echo $urlGooglePlus ?>"><i class="fa fa-google-plus"></i></a></li>
								<?php } ?>
								<?php if ($urlLinkedIn) { ?>
									<li class="socialNetwork"><a target="_blank" class="icon" href="<?php echo $urlLinkedIn ?>"><i class="fa fa-linkedin"></i></a></li>
								<?php } ?>
							</ul>
							<script type="text/javascript">
								$(function(){
									$('.candidateContacts i').css('width', $('.candidateContacts i').innerHeight() + 'px');
								})
							</script>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>

		<?php if ($hasWants) { ?>
			<div class="row">
				<div class="col-md-offset-1 col-md-10 col-sm-12">
					<div class="col-md-offset-1 col-md-10">
						<div class="candidateDoWant candidateWants">
							<h2>
								<i class="fa fa-check-circle-o"></i>
								Chcu
							</h2>
							<ul>
								<?php foreach ($doWant as $item) { ?>
									<li>
										<?php echo $item ?>
									</li>
								<?php } ?>
							</ul>
						</div><div class="candidateDoNotWant candidateWants">
							<h2>
								<i class="fa fa-times-circle-o"></i>
								Nechcu
							</h2>
							<ul>
								<?php foreach ($doNotWant as $item) { ?>
									<li>
										<?php echo $item ?>
									</li>
								<?php } ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<script type="text/javascript">
				var resizeWants = function() {
					Array.prototype.max = function() {
						return Math.max.apply(null, this);
					};

					var heights = [];
					$('.candidateWants').each(function(){
						$(this).css('height', 'auto');
						heights.push($(this).innerHeight());
					});

					$('.candidateWants').css('height', heights.max() + 'px');
				}

				resizeWants();
				$(window).resize(function(){
					resizeWants();
				});
			</script>
		<?php } ?>

		<?php if (trim($post->post_content)) { ?>
			<div class="row">
				<div class="col-xs-12 candidateBioHeaderWrapper<?php if ($hasWants) { ?> hasWants<?php } else { ?> hasNotWants<?php } ?>">
					<h2 class="candidateBioHeader">
						<span class="middle">Proč?</span>
					</h2>
				</div>
			</div>

			<script type="text/javascript">
				$(function(){
					$('.candidateBioHeader').css('height', ($('.candidateBioHeader').innerWidth() - 10) + 'px');
				})
			</script>

			<div class="row">
				<div class="candidateBio col-lg-offset-2 col-lg-8 col-md-offset-1 col-md-10">
					<?php while (have_posts()) {
						the_post();
						the_content();
					} ?>
				</div>
			</div>
		<?php } ?>

		<?php if ($urls) { ?>
			<div class="row">
				<div class="col-xs-12">
					<ul class="candidateUrls">
						<?php foreach ($urls as $url) { ?>
							<?php list($title, $href) = explode("\n", $url) ?>
							<li>
								<a target="_blank" href="<?php echo $href ?>"><?php echo $title ?></a>
							</li>
						<?php } ?>
					</ul>
				</div>
			</div>
		<?php } ?>

		<div class="row">
			<div class="col-sm-12">
				<hr />
			</div>
		</div>

		<div class="sectionHeader">
			<div class="row">
				<div class="col-sm-12">
					<h2>
						Další zastupitelé
					</h2>
				</div>
			</div>
		</div>

		<?php include 'includes/candidates.php' ?>

		<div class="row">
			<div class="col-xs-12">
				<p class="text-center">
					<a class="blackButton" href="<?php echo get_permalink($candidatesHome[0]->ID) ?>">Celá kandidátka <span class="fa fa-caret-right"></span></a>
				</p>
			</div>
		</div>

		<hr />

		<?php include 'includes/donate.php' ?>

		<?php include 'includes/kolo.php' ?>

	</div>

<?php get_footer(); ?>
