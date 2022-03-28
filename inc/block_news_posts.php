<!--News-->
<section class="news" id="news">
	<div class="container">
		<div class="new">
			<?php
			$args = array(
					'show_option_all'  => '',
					'showposts'        => 5,
					'show_option_none' => __('No categories'),
					'orderby'          => 'rand',
					'order'            => 'DESC',
					'include'          => array(),
					'exclude'          => array(),
					'meta_key'         => '',
					'meta_value'       => '',
					'post_type'        => 'post',
					'suppress_filters' => true,
			);

			$posts = get_posts($args);

			foreach ($posts as $post) {
				setup_postdata($post); ?>
				<div class="new__item">
					<a href="<?php the_permalink() ?>">
						<div class="new__photo">
							<div id="cat-image-miniature">
								<?php if (has_post_thumbnail()) {
									the_post_thumbnail();
								} else { ?>
									<img src="<?php bloginfo('template_directory'); ?>/img/dont.png" alt="<?php the_title(); ?>"/>
								<?php } ?>
							</div>
						</div>
						<span class="new__name"><?php the_title() ?></span>
					</a>
				</div>
				<?php
			}
			wp_reset_postdata(); ?>
		</div>
</section>