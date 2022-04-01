<div class="sidebar">
	<div class="sidebar__fixed" id="sidebar-fixed">
		<div class="sidebar__one">
			<p class="sidebar__title">Категории</p>
			<?php wp_nav_menu([
					'theme_location' => 'left-sidebar-1',
					'depth'          => 2, // количество уровней вложенности
					'items_wrap'     => '<ul class="sidebar__list">%3$s</ul>'
			]);
			?>
		</div>

		<div class="sidebar__two">
			<p class="sidebar__title">Права</p>
			<?php wp_nav_menu([
					'theme_location' => 'left-sidebar-2',
					'depth'          => 2, // количество уровней вложенности
					'items_wrap'     => '<ul class="sidebar__list">%3$s</ul>'
			]);
			?>
		</div>
		<div class="sidebar__two sidebar__list-materialy">
			<p class="sidebar__title">Материалы</p>
			<?php wp_nav_menu([
					'theme_location' => 'left-sidebar-3',
					'depth'          => 2, // количество уровней вложенности
					'items_wrap'     => '<ul class="sidebar__list">%3$s</ul>'
			]);
			?>
		</div>

		<div class="sidebar__contact">
			<img src="<?php bloginfo('template_directory')?>/img/map-littel.jpg" title="Карта" alt="Карта" class="sidebar__map"/>
			<p class="sidebar__place">Центральный офис: Москва, ул. Степана Супруна дом 4</p>
			<a href="tel:89995991615" class="sidebar__phone">
				<p>8-999-599-1615</p>
			</a>
			<p class="sidebar__time">
				<a href="tel:88007587702" ><img src="<?php bloginfo('template_directory')?>/img/telegram.svg" title="Телефон в шапке" alt="Телефон в шапке"/></a>
				<a href="tel:88007587702" ><img src="<?php bloginfo('template_directory')?>/img/whatsap.svg" title="Телефон в шапке" alt="Телефон в шапке"/></a>
				c 8:00 до 20:00
			</p>
			<a href="mailto:info@985.su" class="sidebar__email">
				<p>info@uc-avd.ru</p>
			</a>
		</div>
	</div>
</div>