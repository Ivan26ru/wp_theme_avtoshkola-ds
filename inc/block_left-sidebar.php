<div class="sidebar">
	<div class="sidebar__fixed" id="sidebar-fixed">
		<div class="sidebar__one">
			<p class="sidebar__title">О школе</p>
			<?php wp_nav_menu([
					'theme_location' => 'left-sidebar-1',
					'depth'          => 2, // количество уровней вложенности
					'items_wrap'     => '<ul class="sidebar__list">%3$s</ul>'
			]);
			?>
		</div>

		<div class="sidebar__two">
			<p class="sidebar__title">Категории</p>
			<?php wp_nav_menu([
					'theme_location' => 'left-sidebar-2',
					'depth'          => 2, // количество уровней вложенности
					'items_wrap'     => '<ul class="sidebar__list">%3$s</ul>'
			]);
			?>
		</div>
		<div class="sidebar__two sidebar__list-materialy">
			<p class="sidebar__title">Услуги</p>
			<?php wp_nav_menu([
					'theme_location' => 'left-sidebar-3',
					'depth'          => 2, // количество уровней вложенности
					'items_wrap'     => '<ul class="sidebar__list">%3$s</ul>'
			]);
			?>
		</div>

		<div class="sidebar__contact">
			<div class="wrap_map_img">
				<img src="<?php bloginfo('template_directory')?>/img/map-littel.jpg" title="Карта" alt="Карта"/>
			</div>
			<p class="sidebar__place">Центральный офис: Москва, ул. Степана Супруна дом 4</p>
			<a href="tel:89995991615" class="sidebar__phone">
				<p>8-999-599-1615</p>
			</a>
			<p class="sidebar__time block_social">
				<a href="tel:88007587702" class="block_social_icon"><img src="<?php bloginfo('template_directory')?>/img/tg.png" title="Телефон в шапке" alt="Телефон в шапке"/></a>
				<a href="tel:88007587702" class="block_social_icon"><img src="<?php bloginfo('template_directory')?>/img/ws.png" title="Телефон в шапке" alt="Телефон в шапке"/></a>
				<span class="block_social_info">c 8:00 до 20:00</span>
			</p>
			<a href="mailto:info@985.su" class="sidebar__email">
				<p>info@uc-avd.ru</p>
			</a>
		</div>
	</div>
</div>