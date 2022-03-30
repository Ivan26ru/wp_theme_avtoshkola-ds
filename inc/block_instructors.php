<!-- Instructors -->
<section class="instructors" id="instructors">
	<div class="container">
		<div class="instru">
			<p class="instru__title title">
				Инструкторы
			</p>
			<div class="instru__cont">
				<?php if( have_rows('instruc', 'option') ): ?>
					<?php while( have_rows('instruc', 'option') ): the_row();
						$icon = get_sub_field('instruc_photo', 'option');
						$name = get_sub_field('instruc_name', 'option');
						$text = get_sub_field('instruc_text', 'option');
						?>
						<div class="instru__item">
							<img src="<?php echo $icon; ?>" title="<?php echo $name ?>" alt="<?php echo $name ?>" class="instru__img"/>
							<p class="instru__name">
								<?php echo $name; ?>
							</p>
							<p class="instru__text">
								<?php echo $text; ?>
							</p>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
