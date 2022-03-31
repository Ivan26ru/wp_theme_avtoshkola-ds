<!-- Licenses -->
<section class="licenses" id="licenses">
	<div class="container">
		<div class="license">
			<p class="license__title title">Лицензии</p>
			<div class="license__cont">
				<?php if (have_rows('license', 'option')): ?><?php while (have_rows('license', 'option')): the_row();
					$img = get_url_img_is_sub_field('license_photo', 'lic-207x285');
					?>
					<div class="license__item">
						<img src="<?php echo $img; ?>" title="Лицензии" alt="Лицензии"/>
					</div>
				<?php endwhile; ?><?php endif; ?>
			</div>
		</div>
	</div>
</section>