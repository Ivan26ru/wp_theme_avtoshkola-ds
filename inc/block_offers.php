<!-- Offers -->
<section class="offers" id="offers">
	<div class="container">
		<div class="offer">
			<p class="offer__title title">
				Спецпредложения и акции
			</p>
			<div class="offer__cont">
				<?php if( have_rows('offer', 'option') ): ?>
					<?php while( have_rows('offer', 'option') ): the_row();
						$name = get_sub_field('offer_title', 'option');
						$text = get_sub_field('offer_text', 'option');
						$link = get_sub_field('offer_link', 'option');
						$img = get_sub_field('offer_img', 'option');
						?>
						<a href="<?php echo $link; ?>" class="offer__item">
							<img src="<?php echo $img; ?>" alt="" class="offer__photo"/>
							<p class="offer__name">
								<?php echo $name; ?>
							</p>
							<p class="offer__text">
								<?php echo $text; ?>
							</p>
							<button class="offer__btn btn form-up">
								Подробнее
							</button>
						</a>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>