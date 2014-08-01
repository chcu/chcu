<?php get_header(); ?>

	<div class="container">
		<?php while (have_posts()) { the_post(); ?>

			<div class="row">
				<div class="col-xs-12">
					<h1>
						<?php the_title(); ?>
					</h1>
				</div>
			</div>

			<div class="row">
				<div class="col-xs-12">
					<?php the_post_thumbnail( 'wpbs-featured' ); ?>
				</div>
			</div>

			<div class="row">
				<div class="col-xs-12">
					<p class="meta"><?php _e("Posted", "wpbootstrap"); ?> <time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_time(); ?></time> <?php _e("by", "wpbootstrap"); ?> <?php the_author_posts_link(); ?> <span class="amp">&</span> <?php _e("filed under", "wpbootstrap"); ?> <?php the_category(', '); ?>.</p>
				</div>
			</div>

			<div class="row">
				<div class="col-xs-12">
					<?php the_content(); ?>
				</div>
			</div>

			<div class="row">
				<div class="col-xs-12">
					<?php wp_link_pages(); ?>
				</div>
			</div>

			<div class="row">
				<div class="col-xs-12">
					<?php the_tags('<p class="tags"><span class="tags-title">' . __("Tags","wpbootstrap") . ':</span> ', ' ', '</p>'); ?>
				</div>
			</div>

			<?php comments_template('',true); ?>

		<?php } ?>
	</div>

<?php get_footer(); ?>