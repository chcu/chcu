<?php get_header(); ?>
			
	<div class="container">

		<div class="row pageHeader">
			<div class="col-xs-12">
				<h1>
					Zpravodaj
				</h1>
			</div>
			<div class="col-lg-offset-3 col-lg-6 col-md-offset-2 col-md-8">
				<p class="lead">
					<?php if (is_category()) { ?>
							<span><?php _e("Kategorie:", "wpbootstrap"); ?></span> <?php single_cat_title(); ?>
					<?php } elseif (is_tag()) { ?> 
							<span><?php _e("Štítek:", "wpbootstrap"); ?></span> <?php single_tag_title(); ?>
					<?php } elseif (is_author()) { ?>
							<span><?php _e("Autor:", "wpbootstrap"); ?></span> <?php get_the_author_meta('display_name'); ?>
					<?php } elseif (is_day()) { ?>
							<span><?php _e("Daily Archives:", "wpbootstrap"); ?></span> <?php the_time('l, F j, Y'); ?>
					<?php } elseif (is_month()) { ?>
					    	<span><?php _e("Monthly Archives:", "wpbootstrap"); ?>:</span> <?php the_time('F Y'); ?>
					<?php } elseif (is_year()) { ?>
					    	<span><?php _e("Yearly Archives:", "wpbootstrap"); ?>:</span> <?php the_time('Y'); ?>
					<?php } ?>
				</p>
			</div>
		</div>
		<?php include 'includes/posts.php' ?>
		</div> <!-- end #content -->

<?php get_footer(); ?>