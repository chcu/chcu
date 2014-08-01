<?php
/*
Template Name: Kandidat
*/

add_theme_support('post-thumbnails');

$candidatesHome = get_pages(array(
	'meta_key'     => 'pageRole',
	'meta_value'   => 'candidates',
));

$candidates = get_pages(array(
	'hierarchical' => 0,
	'sort_column'  => 'menu_order',
	'meta_key'     => 'pageRole',
	'meta_value'   => 'candidate',
));

while (have_posts()) {
	the_post();
	$postId = get_the_ID();

	$meta = get_post_meta($postId);

	$portraitUrl = $meta['portraitUrl'][0];

	$doWant    = array_filter(explode("\n", $meta['doWant'][0]));
	$doNotWant = array_filter(explode("\n", $meta['doNotWant'][0]));
	$hasWants  = $doWant && $doNotWant;

	$phone         = $meta['phone'][0];
	$emailAddress  = $meta['emailAddress'][0];
	$urlFacebook   = $meta['urlFacebook'][0];
	$urlGooglePlus = $meta['urlGooglePlus'][0];
	$urlLinkedIn   = $meta['urlLinkedIn'][0];
	$hasContacts   = $phone || $emailAddress || $urlFacebook || $urlGooglePlus || $urlLinkedIn;

	$urls = $meta['url'];
}

?>

<?php get_header(); ?>

	<div class="container">

		<div class="row">
			<div class="candidateHeader col-md-offset-1 col-md-10 col-sm-12"<?php if ($portraitUrl) { ?> class="hasPortrait" style="background-image: url('<?php echo $portraitUrl ?>');"<?php } else { ?> class="hasNotPortrait"<?php } ?>>
				<div class="candidateInfoWrapper col-md-offset-1 col-md-10">
					<div class="candidateInfo">
						<h1>
							<?php echo $meta['firstName'][0] ?> <?php echo $meta['lastName'][0] ?>
						</h1>
						<?php if ($meta['perex'][0]) { ?>
							<p class="lead">
								<?php echo $meta['perex'][0] ?>
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
								<?php if ($urlFacebook) { ?>
									<li><a target="_blank" class="icon" href="<?php echo $urlFacebook ?>"><i class="fa fa-facebook"></i></a></li>
								<?php } ?>
								<?php if ($urlGooglePlus) { ?>
									<li><a target="_blank" class="icon" href="<?php echo $urlGooglePlus ?>"><i class="fa fa-google-plus"></i></a></li>
								<?php } ?>
								<?php if ($urlLinkedIn) { ?>
									<li><a target="_blank" class="icon" href="<?php echo $urlLinkedIn ?>"><i class="fa fa-linkedin"></i></a></li>
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

		<div class="row">
			<div class="col-xs-12 candidateBioHeaderWrapper<?php if ($hasWants) { ?> hasWants<?php } else { ?> hasNotWants<?php } ?>">
				<h2 class="candidateBioHeader">
					Bio
				</h2>
			</div>
		</div>
		<script type="text/javascript">
			$(function(){
				$('.candidateBioHeader').css('width', $('.candidateBioHeader').innerHeight() + 'px');
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
						Kandidátka
					</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-offset-3 col-lg-6 col-md-offset-2 col-md-8">
					<p class="long text-center">
						Jsme populisti, slušní lidé, aktivisti, flákači a tvrdě pracující, důchodci, cikáni, architekti a matky, programátoři, gayové, intelektuálové a kritici, pragmatici, pacienti, trapáci, slušní občané a rebelové. Dělejte si z nás legraci, rýpejte do nás, pomlouvejte za zády a do novin. My to ustojíme. A budeme vás poslouchat.
					</p>
				</div>
			</div>
		</div>

		<div class="row">
			<?php include 'includes/candidates.php' ?>
		</div>

		<div class="row">
			<div class="col-xs-12">
				<p class="text-center">
					<a class="blackButton" href="<?php echo get_permalink($candidatesHome[0]->ID) ?>">Celá kandidátka <span class="fa fa-caret-right"></span></a>
				</p>
			</div>
		</div>

	</div>

<?php get_footer(); ?>
