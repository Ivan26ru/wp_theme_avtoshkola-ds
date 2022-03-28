<div class="sidebar">
	<div class="sidebar__fixed" id="sidebar-fixed">
		<ul class="sidebar__list">
			<?php if( have_rows('menu', 'option') ): ?>
				<?php while( have_rows('menu', 'option') ): the_row();
					$text = get_sub_field('menu_text', 'option');
					$link = get_sub_field('menu_link', 'option');
					?>
					<li>
						<a href="<?php echo $link; ?>">
							<p><?php echo $text; ?></p>
						</a>
					</li>
				<?php endwhile; ?>
			<?php endif; ?>
		</ul>
		<ul class="sidebar__list">
			<?php if( have_rows('menu-two', 'option') ): ?>
				<?php while( have_rows('menu-two', 'option') ): the_row();
					$text = get_sub_field('menu_text-two', 'option');
					$link = get_sub_field('menu_link-two', 'option');
					?>
					<li>
						<a href="<?php echo $link; ?>">
							<p><?php echo $text; ?></p>
						</a>
					</li>
				<?php endwhile; ?>
			<?php endif; ?>
		</ul>
		<ul class="sidebar__list sidebar__list-materialy">
			<?php if( have_rows('menu-three', 'option') ): ?>
				<?php while( have_rows('menu-three', 'option') ): the_row();
					$text = get_sub_field('menu_text-three', 'option');
					$link = get_sub_field('menu_link-three', 'option');
					?>
					<li>
						<a href="<?php echo $link; ?>">
							<p><?php echo $text; ?></p>
						</a>
					</li>
				<?php endwhile; ?>
			<?php endif; ?>
		</ul>
		<div class="sidebar__contact">
			<img src="<?php bloginfo('template_directory')?>/img/map-littel.png" alt="" class="sidebar__map"/>
			<p class="sidebar__place">Центральный офис: Москва, ул. Степана Супруна дом 4</p>
			<a href="tel:89995991615" class="sidebar__phone">
				<p>8-999-599-1615</p>
			</a>
			<p class="sidebar__time">
				<a href="tel:88007587702" ><img src="<?php bloginfo('template_directory')?>/img/telegram.svg" alt="Телефон в шапке"/></a>
				<a href="tel:88007587702" ><img src="<?php bloginfo('template_directory')?>/img/whatsap.svg" alt="Телефон в шапке"/></a>
				c 8:00 до 20:00
			</p>
			<a href="mailto:info@985.su" class="sidebar__email">
				<p>info@uc-avd.ru</p>
			</a>
		</div>
	</div>
</div>