<?php get_header(); ?>

	<div class="container">
		<?php while (have_posts()) { the_post(); ?>

			<?php
			$postId = get_the_ID();
			$post = get_post($postId);
			$user = get_user_by('id', $post->post_author);
			?>

			<div class="row">
				<div class="col-lg-offset-2 col-lg-8 col-md-offset-1 col-md-10 col-sm-12">
					<h1 class="postTitle">
						<?php the_title(); ?>
					</h1>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-offset-2 col-lg-8 col-md-offset-1 col-md-10 col-sm-12">
					<p class="postDetails">
						<?php if ($candidatePage[0]) { ?>
							<a href="<?php echo get_permalink($candidatePage[0]->ID) ?>"><?php echo $user->display_name ?></a>
						<?php } else { ?>
							<?php echo $user->display_name ?>
						<?php } ?>
						&middot; <time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_time(); ?></time>
					</p>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-offset-2 col-lg-8 col-md-offset-1 col-md-10 col-sm-12 postContent">
					<?php the_content(); ?>
				</div>
			</div>

		<?php } ?>
	</div>

<?php get_footer(); ?>