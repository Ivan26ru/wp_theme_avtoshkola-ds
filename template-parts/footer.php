<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package right
 */

?>

<!-- Footer -->
<footer class="footer" id="footer">
	<div class="container">
		<div class="down">
			<div class="down__cont">
				<div class="down__item down__item_name">
					<a href="https://avtoshkola-ds.ru/o-nas/">
						Коротко об автошколе
					</a>
				</div>
				<?php wp_nav_menu([
						'theme_location' => 'footer-1',
						'depth'          => 2, // количество уровней вложенности
						'items_wrap'     => '<ul class="down__list">%3$s</ul>'
				]);
				?>
				<div class="down__best">
					<img src="<?php bloginfo('template_directory') ?>/img/one.png" title="Коротко об автошколе" alt="Коротко об автошколе"/>
					<p>Лучшее предложение <span>в Москве</span></p>
				</div>
			</div>
			<div class="down__cont">
				<div class="down__item down__item_name">
					<a href="https://avtoshkola-ds.ru/kategorii/">
						Услуги
					</a>
				</div>
				<?php wp_nav_menu([
						'theme_location' => 'footer-2',
						'depth'          => 2, // количество уровней вложенности
						'items_wrap'     => '<ul class="down__list">%3$s</ul>'
				]);
				?>
			</div>
			<div class="down__cont">
				<div class="down__item down__item_name">
					<a href="https://avtoshkola-ds.ru/ceny/">Обучение</a>
				</div>
				<?php wp_nav_menu([
						'theme_location' => 'footer-3',
						'depth'          => 2, // количество уровней вложенности
						'items_wrap'     => '<ul class="down__list">%3$s</ul>'
				]);
				?>
			</div>
			<div class="down__info">
				<a href="https://avtoshkola-ds.ru/" class="down__logo">
					<img src="<?php bloginfo('template_directory') ?>/img/logo-3.png" title="Логотип в шапке" alt="Логотип в шапке"/>
					<div>
						<span>Дядя Степа</span>
						<p>Сеть Автошкол в Москве</p>
					</div>
				</a>
				<p class="down__place">Москва, ул. Степана Супруна дом 4</p>
				<div class="down__phone block_social">
					<a href="tel:88007587702" class="block_social_icon"><img src="<?php bloginfo('template_directory')?>/img/tg.png" title="Телефон в подвале" alt="Телефон в подвале"/></a>
					<a href="tel:88007587702" class="block_social_icon"><img src="<?php bloginfo('template_directory')?>/img/ws.png" title="Телефон в подвале" alt="Телефон в подвале"/></a>
					<a href="tel:899959991615" class="block_social_info">8-929-956-9316</a>
				</div>
				<p class="down__time"> с 8:00 до 22:00</p>
				<a href="https://avtoshkola-ds.ru/sitemap_index.xml" class="down__link down__link_map">
					Карта сайта
				</a>
			</div>
		</div>
	</div>
	<a href="https://avtoshkola-ds.ru/sitemap_index.xml"></a>
</footer>
<script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/jquery-3.5.1.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/slick.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/slick.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/main.js"></script>
<?php wp_footer(); ?>

</body></html>
