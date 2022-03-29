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
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<!--Favicon-->
    <link rel="shortcut icon" alt="фавикон" href="/favicon.ico" />
    <link type="image/x-icon" alt="фавикон" rel="shortcut icon" href="/favicon.ico" />
    <link type="image/x-icon" alt="фавикон" sizes="16x16" rel="icon" href="<?php bloginfo('template_directory') ?>/img/logo-3.png" />
    <link type="image/x-icon" alt="фавикон" sizes="32x32" rel="icon" href="<?php bloginfo('template_directory') ?>/img/logo-3.png" />
    <link type="image/x-icon" alt="фавикон" sizes="96x96" rel="icon" href="<?php bloginfo('template_directory') ?>/img/logo-3.png" />
    <link type="image/x-icon" alt="фавикон" sizes="120x120" rel="icon" href="<?php bloginfo('template_directory') ?>/img/logo-3.png" />
	<!-- Slider css -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory')?>/css/slick-theme.css"/>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory')?>/css/slick.css"/>
    <!-- WP-style -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory')?>/css/style_wp.css">
	<!-- Style css -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory')?>/css/main.css?<?php echo date('U');?>">
	<?php wp_head(); ?>
	<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(86930517, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/86930517" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
	<meta name="yandex-verification" content="949336b0486bc093" />

</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<!-- Header -->
	<header class="header" id="header">
		<div class="container">
			<div class="menu">
				<div class="menu__burger">
					<span></span>
					<span></span>
					<span></span>
				</div>
				<a href="https://avtoshkola-ds.ru/" class="menu__logo">
					<img src="<?php bloginfo('template_directory')?>/img/logo-3.png" alt="Логотип в шапке"/>
					<div>
						<span>Дядя Степа</span>
                        <p>Сеть Автошкол в Москве</p>
					</div>
				</a>
				<?php  wp_nav_menu(array( 
					'menu_class'        => 'menu__list', 
					'container'         => 'ul',
				) ); ?> 
				<div class="menu__info">
                    <div class="menu__up">
                        <a href="tel:89995991615" ><img src="<?php bloginfo('template_directory')?>/img/telegram.svg" alt="Телефон в шапке"/></a>
                        <a href="tel:89995991615" ><img src="<?php bloginfo('template_directory')?>/img/whatsap.svg" alt="Телефон в шапке"/></a>
                        <a href="tel:89995991615" class="menu__tel">8-999-599-1615</a>
                    </div>
					<p> <span>с 8:00 до 20:00</span></p>
					<a href="mailto:info@uc-avd.ru"><span>info@uc-avd.ru</span></a>
				</div> 
			</div>
		</div>
	</header>


