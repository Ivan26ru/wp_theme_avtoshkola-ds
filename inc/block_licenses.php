<!-- Licenses -->
<section class="licenses" id="licenses">
	<div class="container">
		<div class="license">
			<p class="license__title title">
				Лицензии
			</p>
			<div class="license__cont">
				<?php if( have_rows('license', 'option') ): ?>
					<?php while( have_rows('license', 'option') ): the_row();
						$icon = get_sub_field('license_photo', 'option');
						?>
						<div class="license__item">
							<img src="<?php echo $icon; ?>" title="Лицензии" alt="Лицензии"/>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>