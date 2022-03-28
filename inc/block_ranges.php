<!-- Ranges -->
<section class="ranges" id="ranges">
	<div class="container">
		<div class="range">
			<h1 class="range__title title">
				Автошкола в Москве
			</h1>
			<div class="range__container responsive">
				<?php $the_query = new WP_Query( array(
					'orderby' => 'rand',
					'post_type' => 'avtoshkola',
				) );?>
				<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
					<div class="range__cont">
						<div class="range__item">
							<div class="range__part">
								<img src="<?php the_field('auto_img'); ?>" class="range__photo"/>
								<div class="range__reting">
									<?php if( have_rows('auto_reting') ): ?>
										<?php while( have_rows('auto_reting') ): the_row();
											$icon = get_sub_field('auto_icon', 'option');
											?>
											<img src="<?php echo $icon; ?>" alt=""/>

										<?php endwhile; ?>
									<?php endif; ?>
								</div>
							</div>
							<div class="range__contant">
								<p class="range__place"><?php the_field('auto_name'); ?></p>
								<p class="range__place"><?php the_field('category'); ?></p>
								<p class="range__metro"><?php the_field('auto_metro'); ?></p>
								<div class="range__down">
									<a href="<?php the_permalink() ?>" class="range__link">
										Подробнее
									</a>
								</div>
							</div>
						</div>
					</div>
				<?php endwhile; ?>
				<?php wp_reset_query(); ?>
			</div>
		</div>
	</div>
</section>
