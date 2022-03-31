<!--Feedback-->
<section class="feedbacks" id="feedbacks">
	<div class="container">
		<div class="feedback">
			<p class="feedback__title title">Рейтинг и отзывы Автошколы</p>
			<div class="feedback__cont">
				<?php if( have_rows('feedback', 'option') ): ?>
					<?php while( have_rows('feedback', 'option') ): the_row();
						$name = get_sub_field('feedback_name');
						$text = get_sub_field('feedback_text');
						$img = get_url_img_is_sub_field('feedback_img', 'thumb-94');
						?>
						<div><div class="feedback__item">
								<div class="feedback__item_wrap_img">
									<img class="feedback__photo" src="<?php echo $img; ?>" alt="<?php echo $name; ?>"/>
								</div>
								<div class="feedback__info">
									<p class="feedback__name"><?php echo $name; ?></p>
									<p class="feedback__text"><?php echo $text; ?></p>
									<div class="feedback__down">
										<?php if( have_rows('feedback_z', 'option') ): ?>
											<?php while( have_rows('feedback_z', 'option') ): the_row();
												$icon = get_sub_field('feedback_img', 'option');
												?>
												<img src="<?php echo $icon; ?>" title="<?php echo $name; ?>" alt="<?php echo $name; ?>"/>
											<?php endwhile; ?>
										<?php endif; ?>
									</div>
								</div>
							</div></div>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>