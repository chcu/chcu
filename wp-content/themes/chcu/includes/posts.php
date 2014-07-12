<ul class="posts">
	<?php foreach ($posts as $post) { ?>
		<?php
		preg_match('#src="(.+)"#U', get_the_post_thumbnail($post->ID, 'post-thumb'), $match);
		$meta = get_post_meta($post->ID);
		?>
		<li class="clearfix">
			<div class="image col-lg-offset-1 col-lg-3 col-md-3 col-sm-5 col-xs-12">
				<p>
					<a href="<?php echo get_permalink($post) ?>"><img src="<?php echo $match[1] ?>" class="img-responsive" /></a>
				</p>
			</div>
			<div class="content col-lg-7 col-md-9 col-sm-7 col-xs-12">
				<h3 class="title">
					<a href="<?php echo get_permalink($post) ?>"><?php echo $post->post_title ?></a>
				</h3>
				<p class="perex">
					<?php echo $meta['perex'][0] ?>
				</p>
			</div>
			<div class="clearfix"></div>
		</li>
	<?php } ?>
</ul>