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
}

?>

<?php get_header(); ?>

	<div class="container">

		<div class="row">
			<div class="candidateHeader col-md-offset-1 col-md-10 col-sm-12" style="background-image: url('<?php echo $portraitUrl ?>');">
				<div class="candidateInfoWrapper col-md-offset-1 col-md-10">
					<div class="candidateInfo">
						<h1>
							<?php echo $meta['firstName'][0] ?> <?php echo $meta['lastName'][0] ?>
						</h1>
						<p class="lead">
							<?php echo $meta['perex'][0] ?>
						</p>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-offset-1 col-md-10 col-sm-12">
				<div class="col-md-offset-1 col-md-10">
					<div class="candidateDoWant candidateWants">
						<h2>
							<i class="fa fa-check-circle-o"></i>
							Chcu
						</h2>
						<ul>
							<?php foreach (explode("\n", $meta['doWant'][0]) as $item) { ?>
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
							<?php foreach (explode("\n", $meta['doNotWant'][0]) as $item) { ?>
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

		<div class="row">
			<div class="col-xs-12 candidateBioHeaderWrapper">
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
