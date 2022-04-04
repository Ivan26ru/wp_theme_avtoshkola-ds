<!-- Offers -->
<section class="offers" id="offers">
	<div class="container">
		<div class="offer">
			<p class="offer__title title">
				Спецпредложения и акции </p>
			<div class="offer__cont">
				<?php if (have_rows('offer', 'option')): ?><?php while (have_rows('offer', 'option')): the_row();
					$name = get_sub_field('offer_title');
					$text = get_sub_field('offer_text');
					$link = get_sub_field('offer_link');
					$img = get_url_img_is_sub_field('offer_img', 'offer-320x135');
					?>
					<a href="<?php echo $link; ?>" class="offer__item popmake-186">
						<div class="offer__item_wrap_img">
							<img src="<?php echo $img; ?>" title="<?php echo $name; ?>" alt="<?php echo $name; ?>" />
						</div>
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
				<?php endwhile; ?><?php endif; ?>
			</div>
		</div>
	</div>
</section>