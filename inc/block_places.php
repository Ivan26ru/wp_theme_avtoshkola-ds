<!--Places-->
<section class="places" id="places">
	<div class="container">
		<div class="place">
			<p class="place__title title">Наши площадки для вождения</p>
			<div class="place__cont">
				<?php if( have_rows('place', 'option') ): ?>
					<?php while( have_rows('place', 'option') ): the_row();
						$name = get_sub_field('place_title', 'option');
						$link = get_sub_field('place_link', 'option');
						$img = get_sub_field('place_img', 'option');
						?>
						<a href="<?php echo $link; ?>" class="place__item">
							<img src="<?php echo $img; ?>" title="<?php echo $name; ?>" alt="<?php echo $name; ?>" class="offer__photo"/>
							<span><?php echo $name; ?></span>
						</a>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>