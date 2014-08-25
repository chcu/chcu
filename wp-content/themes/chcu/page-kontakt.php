<?php
/*
Template Name: Kontakt
*/

add_theme_support('post-thumbnails');

$hollanPage = get_pages(array(
	'meta_key'  => 'candidateId',
	'meta_value'=> 'matej.hollan',
));

#var_dump($hollanPage); die;

?>

<?php get_header(); ?>

	<div class="container">

		<div class="row pageHeader">
			<div class="col-xs-12">
				<h1>
					Kontakt
				</h1>
				<p class="lead">
					Kde jste vy, byli jsme i my, kde jsme my, budete i vy.<br />A volejte Hollanovi.
				</p>
			</div>
		</div>
		<div class="row contactOptions">
			<div class="col-sm-offset-3 col-sm-2 contactSegment meetings">
				<p class="image">
					<img class="img-responsive" src="<?php echo get_theme_root_uri() . '/' . get_template() ?>/icon_cup.png" />
				</p>
				<p>
					Každé pondělí<br />16&ndash;19&nbsp;h<br />v&nbsp;kavárně <a target="_blank" href="http://www.cafeatlas.cz/">Atlas</a>
				</p>
			</div>
			<div class="col-sm-2 contactSegment">
				<p class="image">
					<img class="img-responsive" src="<?php echo get_theme_root_uri() . '/' . get_template() ?>/icon_flag.png" />
				</p>
				<p>
					Žít Brno<br />Zemědělská 72<br />613&nbsp;00 Brno
				</p>
			</div>
			<div class="col-sm-2 contactSegment">
				<p class="image">
					<img class="img-responsive" src="<?php echo get_theme_root_uri() . '/' . get_template() ?>/icon_phone.png" />
				</p>
				<p>
					Matěj Hollan<br />jednička<br />774 956 148
				</p>
			</div>
		</div>

		<?php include 'includes/donate.php' ?>

	</div>

<?php get_footer(); ?>
