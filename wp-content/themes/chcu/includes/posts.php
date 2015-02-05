<div class="row">
	<ul class="posts">
		<?php foreach ($posts as $post) { ?>
			<?php
			preg_match('#src="(.+)"#U', get_the_post_thumbnail($post->ID, 'post-thumb'), $match);
			$meta = get_post_meta($post->ID);
			$user = get_user_by('id', $post->post_author);
			$candidatePage = get_pages(array(
				'hierarchical' => 0,
				'meta_key'     => 'userLogin',
				'meta_value'   => $user->user_login,
			));
			$imageUrl = trim($match[1]);
			?>
			<li class="clearfix">
				<?php if ($imageUrl) { ?>
					<div class="image col-lg-offset-1 col-lg-2 col-md-2 col-sm-4 col-xs-12">
						<p>
							<a href="<?php echo get_permalink($post) ?>"><img src="<?php echo $imageUrl ?>" class="img-responsive" /></a>
						</p>
					</div>
				<?php } ?>
				<div class="content <?php if ($imageUrl) { ?> col-lg-8 col-md-10 col-sm-8 <?php } else { ?> col-lg-offset-1 <?php } ?> col-xs-12">
					<h3 class="title">
						<a href="<?php echo get_permalink($post) ?>"><?php echo $post->post_title ?></a>
					</h3>
					<p class="perex">
						<?php echo $meta['perex'][0] ?>
					</p>
					<p class="details">
						<?php if(!$hideAuthor):?>
							<?php if ($candidatePage[0]) { ?>
								<a href="<?php echo get_permalink($candidatePage[0]->ID) ?>"><?php echo $user->display_name ?></a>
							<?php } else { ?>
								<?php echo $user->display_name ?>
							<?php } ?>
							&middot; 
						<?php endif;?>
						<time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_time('j. n.'); ?></time>
						&middot; <?php the_category(", "); ?>
						&middot; <?php the_tags(""); ?>
					</p>
				</div>
				<div class="clearfix"></div>
			</li>
		<?php } ?>
	</ul>
</div>
