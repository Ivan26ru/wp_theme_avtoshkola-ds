<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package right
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<!--Favicon-->
	<link rel="shortcut icon" title="фавикон" alt="фавикон" href="/favicon.ico"/>
	<link type="image/x-icon" title="фавикон" alt="фавикон" rel="shortcut icon" href="/favicon.ico"/>
	<link type="image/x-icon" title="фавикон" alt="фавикон" sizes="16x16" rel="icon" href="<?php bloginfo('template_directory') ?>/img/logo-3.png"/>
	<link type="image/x-icon" title="фавикон" alt="фавикон" sizes="32x32" rel="icon" href="<?php bloginfo('template_directory') ?>/img/logo-3.png"/>
	<link type="image/x-icon" title="фавикон" alt="фавикон" sizes="96x96" rel="icon" href="<?php bloginfo('template_directory') ?>/img/logo-3.png"/>
	<link type="image/x-icon" title="фавикон" alt="фавикон" sizes="120x120" rel="icon" href="<?php bloginfo('template_directory') ?>/img/logo-3.png"/>
	<!-- Slider css -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/css/slick-theme.css"/>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/css/slick.css"/>
	<!-- WP-style -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/style_wp.css">
	<!-- Style css -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/main.css?<?php echo date('U'); ?>">
	<?php wp_head(); ?>
	<!-- Yandex.Metrika counter -->
	<script type="text/javascript">
		(function (m, e, t, r, i, k, a) {
			m[i] = m[i] || function () {
				(m[i].a = m[i].a || []).push(arguments)
			};
			m[i].l = 1 * new Date();
			k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
		})
		(window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

		ym(86930517, "init", {
			clickmap: true,
			trackLinks: true,
			accurateTrackBounce: true,
			webvisor: true
		});
	</script>
	<noscript>
		<div>
			<img src="https://mc.yandex.ru/watch/86930517" style="position:absolute; left:-9999px;" title="Яндекс метрика" alt="Яндекс метрика"/>
		</div>
	</noscript>
	<!-- /Yandex.Metrika counter -->
	<meta name="yandex-verification" content="949336b0486bc093"/>

</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<!-- Header -->
<header class="header" id="header">
	<div class="container">
		<div class="menu">
			<a href="/" class="menu__logo">
				<img src="<?php bloginfo('template_directory') ?>/img/logo-3.png" title="Логотип в шапке" alt="Логотип в шапке"/>
				<div>
					<span>Дядя Степа</span>
					<p>Сеть Автошкол в Москве</p>
				</div>
			</a>
			<div class="header_wrap_menu">
				<div class="hc_line1">
					<a href="#">
						<div class="hc_line1_wrap_img">
							<img src="<?php bloginfo('template_directory') ?>/img/lisens-2.png" title="Лицензия" alt="Лицензия">
						</div>
						Лицензия № 036152</a>
				</div>
				<div class="hc_line2">
					<?php wp_nav_menu([
							'theme_location' => 'menu-1',
							'depth'          => 0, // количество уровней вложенности
							'items_wrap'     => '<ul class="menu__list">%3$s</ul>'
					]); ?>
				</div>
			</div>

			<div class="menu__info">
				<div class="menu__up block_social">
					<a href="tel:89299569316" class="block_social_icon"><img src="<?php bloginfo('template_directory') ?>/img/tg.png" title="Телефон в шапке" alt="Телефон в шапке"/></a>
					<a href="tel:89299569316" class="block_social_icon"><img src="<?php bloginfo('template_directory') ?>/img/ws.png" title="Телефон в шапке" alt="Телефон в шапке"/></a>
					<a href="tel:89299569316" class="menu__tel block_social_info">8-929-956-9316</a>
				</div>
				<p><span>с 8:00 до 20:00</span></p>
				<a href="mailto:info@uc-avd.ru"><span>info@uc-avd.ru</span></a>
			</div>

			<!--icon-->
			<div class="menu__burger_wrap_img" id="burger-menu">
				<svg class="menu__burger_img-open" alt="меню" title="меню" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
					<path d="M0 96C0 78.33 14.33 64 32 64H416C433.7 64 448 78.33 448 96C448 113.7 433.7 128 416 128H32C14.33 128 0 113.7 0 96zM0 256C0 238.3 14.33 224 32 224H416C433.7 224 448 238.3 448 256C448 273.7 433.7 288 416 288H32C14.33 288 0 273.7 0 256zM416 448H32C14.33 448 0 433.7 0 416C0 398.3 14.33 384 32 384H416C433.7 384 448 398.3 448 416C448 433.7 433.7 448 416 448z"/>
				</svg>
				<svg class="menu__burger_img-close" viewBox="0 0 320 512" xmlns="http://www.w3.org/2000/svg">&lt;!&ndash;! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. &ndash;&gt;
					<path d="M310.6 361.4c12.5 12.5 12.5 32.75 0 45.25C304.4 412.9 296.2 416 288 416s-16.38-3.125-22.62-9.375L160 301.3L54.63 406.6C48.38 412.9 40.19 416 32 416S15.63 412.9 9.375 406.6c-12.5-12.5-12.5-32.75 0-45.25l105.4-105.4L9.375 150.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L160 210.8l105.4-105.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-105.4 105.4L310.6 361.4z"/>
				</svg>
			</div>

			<!--menu-->

			<?php wp_nav_menu([
					'theme_location' => 'mobile',
					'menu_class'     => 'my_mobile_menu',
					'menu_id'        => 'my_mobile_menu',
					'depth'          => 0, // количество уровней вложенности
					'items_wrap'     => '<ul class="mobile__menu__list">%3$s</ul>'
			]); ?>
<!--			<div class="my_mobile_menu" id="my_mobile_menu">-->
<!--				<ul>-->
<!--					<li><a href="#">Цены</a></li>-->
<!--					<li><a href="#">Обучение</a></li>-->
<!--					<li><a href="#">Секции</a></li>-->
<!--					<li><a href="#">Контакты</a></li>-->
<!--					<li><a href="#">Акции</a></li>-->
<!--					<li><a href="#">О нас</a></li>-->
<!--				</ul>-->
<!--			</div>-->
		</div>
	</div>
</header>


<style>
	.menu__burger_wrap_img {
		position: relative;
		display: none;
		background: #000000;
		cursor: pointer;
		width: 50px;
		height: 50px;
	}

	.menu__burger_wrap_img svg {
		fill: #ffffff;
		width: 100%;
		height: 100%;
		object-fit: contain;
		object-position: center;
	}

	.menu__burger_wrap_img svg path {

	}

	.menu__burger_img-close {
		display: none;
	}

	.menu__burger_img-open {
		display: block;
	}

	.menu__burger_wrap_img.close .menu__burger_img-open {
		display: none;
	}

	.menu__burger_wrap_img.close .menu__burger_img-close {
		display: block;
	}

	.my_mobile_menu {
		position: fixed;
		z-index: 1;
		top: 62px;
		left: 0;
		display: none;
		visibility: hidden;
		min-width: 100%;
		height: 0;
		min-height: 100%;
		padding-top: 20px;
		transition: all 0.3s ease-in-out;
		text-align: center;
		opacity: 0;
	}

	.my_mobile_menu ul {
		display: flex;
		align-items: flex-end;
		flex-direction: column;
		justify-content: flex-start;
		margin-left: auto;
		padding-right: 20px;
		list-style: none;
	}

	.my_mobile_menu li:not(:last-child) {
		margin: 0 0 10px;
	}

	.my_mobile_menu.overlay {
		visibility: visible;
		padding-top: 30px;
		opacity: 1;
		background: rgba(0, 0, 0, 0.8);
	}

	.my_mobile_menu.overlay a {
		font-size: 27px;
		text-decoration: none;
		color: #ffffff;
	}

	.my_mobile_menu.overlay a:focus {
		color: #000000;
	}

	.my_mobile_menu a:hover {
		color: #000;
	}

	@media only screen and (max-width: 992px) {
		.menu__burger_wrap_img {
			display: block;
		}

		.my_mobile_menu {
			display: block;
		}

	}
</style>


<script>
	var burgerMenu = document.getElementById('burger-menu');
	var overlay = document.getElementById('my_mobile_menu');
	burgerMenu.addEventListener('click', function () {
		this.classList.toggle("close");
		overlay.classList.toggle("overlay");
	});
</script>