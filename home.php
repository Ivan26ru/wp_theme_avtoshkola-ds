<!-- Template Name: Главная
Template Post Type: post, page, product
 -->
<?php include TEMPLATEPATH . "/inc/func_fill_alt.php"; ?>
<?php get_template_part('template-parts/header') ?>
<?php //include TEMPLATEPATH . "/inc/block_map.php"; ?>
<?php include TEMPLATEPATH . "/inc/block_map.php"; ?>

<!--Courses-->
<section class="courses" id="courses">
	<div class="container">
		<div class="cours">
			<?php echo do_shortcode('[contact-form-7 id="1834" title="Выборка"]') ?>
		</div>
	</div>
</section>

<?php include TEMPLATEPATH . "/inc/block_ranges.php"; ?>
<?php include TEMPLATEPATH . "/inc/block_blurbs-one.php"; ?>


<!--More-information-->
<section class="more-information" id="more-information">
	<div class="container">
		<div class="more-info">
			<?php if (have_rows('more')): ?><?php while (have_rows('more')): the_row();
				$title = get_sub_field('more_title');
				$name = get_sub_field('more_name');
				$link = get_sub_field('more_linlk');
				$img = get_sub_field('more_img');
				?>
				<div class="more-info__cont popmake-186">
					<p class="more-info__title"><?php echo $title; ?></p>
					<div class="more-info__item">
						<div class="more-info__up">
							<img src="<?php echo $img; ?>" alt=""/>
							<p><?php echo $name; ?></p>
						</div>
						<?php if (have_rows('more_item')): ?><?php while (have_rows('more_item')): the_row();
							$text = get_sub_field('more_text');
							?>
							<p class="more-info__text"><?php echo $text; ?></p>
						<?php endwhile; ?><?php endif; ?>
						<a href="" class="more-info__btn btn form-up">ПОДРОБНЕЕ</a>
					</div>
				</div>
			<?php endwhile; ?><?php endif; ?>
		</div>
	</div>
</section>

<!--Videos-->
<section class="videos" id="videos">
	<div class="container">
		<div class="video">
			<p class="video__title title">Обучение и получение прав</p>
			<?php echo do_shortcode("[theme_video_shablon metka=\"obuchenie_i_poluchenie_prav\"]"); ?>
		</div>
	</div>
</section>

<!-- Prices -->
<section class="pices" id="prices">
	<div class="container">
		<div class="pice">
			<div class="pice__cont">
				<div class="pice__part">
					<div class="pice__up">
						<p class="pice__title">Цены</p>
						<div class="pice__icon">
							<p>Лучшее предложение<span>в Москве</span></p>
							<img src="<?php bloginfo('template_directory') ?>/img/one.png" alt=""/>
						</div>
					</div>
					<?php echo do_shortcode(get_field('price', 'option')); ?>
				</div>
				<div class="pice__part">
					<div class="pice__form">
						<p class="pice__name">Узнать подробности</p>
						<p class="pice__more">Вышлем подробный прайс</p>
						<?php echo do_shortcode('[contact-form-7 id="2006" title="Узнать подробности"]') ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Services -->
<section class="services" id="services">
	<div class="container">
		<div class="serv">
			<div class="serv__up">
				<div class="serv__info">
					<img src="<?php bloginfo('template_directory') ?>/img/lisens-2.png" alt=""/>
					<p>Официальное получение документов<span>Лицензия 77Л01 №0010539</span></p>
				</div>
				<p class="serv__title title">
					Мы обучаем </p>
				<div class="serv__info">
					<p>Работа с гос. компаниями<span>Наличие ЭЦП</span></p>
					<img src="<?php bloginfo('template_directory') ?>/img/work-2.png" alt=""/>
				</div>
			</div>
			<div class="serv__cont">
				<?php if (have_rows('serv', 'option')): ?><?php while (have_rows('serv', 'option')): the_row();
					$text = get_sub_field('serv_text', 'option');
					$link = get_sub_field('serv_link', 'option');
					$class = get_sub_field('serv_class', 'option');
					?>
					<a href="<?php echo $link; ?>" class="serv__item serv__item_<?php echo $class; ?>">
						<p>
							<?php echo $text; ?>
						</p>
					</a>
				<?php endwhile; ?><?php endif; ?>
			</div>
		</div>
	</div>
</section>
<?php include TEMPLATEPATH . "/inc/block_licenses.php"; ?>
<?php include TEMPLATEPATH . "/inc/block_feedbacks.php"; ?>
<!--Reviews-->
<section class="reviews" id="reviews">
	<div class="container">
		<div class="review">
			<p class="review__title title"><?php the_field('info-1', 'option'); ?></p>
			<div class="review__cont">
				<div class="review__part block_text_content">
					<p class="review__text ">
						<?php the_field('info_text', 'option'); ?>
					</p>
				</div>
				<div class="review__part">
					<div class="review__form">
						<p class="review__name">Запрос на права</p>
						<?php echo do_shortcode('[contact-form-7 id="1975" title="Запрос на права"]') ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section><!-- Information -->
<section class="information" id="information">
	<div class="container">
		<div class="info">
			<p class="info__title title">
				<?php the_field('info-2', 'option'); ?>
			</p>
			<div class="info__cont">
				<div class="info__part block_text_content">
					<?php the_field('info', 'option'); ?>
				</div>
			</div>
		</div>
	</div>
	</div>
</section>
<?php include TEMPLATEPATH . "/inc/block_offers.php"; ?>
<?php include TEMPLATEPATH . "/inc/block_instructors.php"; ?>
<!-- Text -->
<section class="texts" id="texts">
	<div class="container">
		<div class="text block_text_content">
			<?php the_field('text'); ?>
		</div>
	</div>
</section>
<?php include TEMPLATEPATH . "/inc/block_places.php"; ?>
<!--Ranks-->
<section class="ranks" id="ranks">
	<div class="container">
		<div class="rank">
			<p class="rank__title">Категории транспортных средств</p>
			<div class="rank__cont">
				<div class="rank__part">
					<img src="<?php the_field('rank_img', 'option'); ?>" alt=""/>
				</div>
				<div class="rank__part block_text_content">
					<?php the_field('rank_text', 'option'); ?>
				</div>
			</div>
		</div>
</section>
<?php include TEMPLATEPATH . "/inc/block_courses-down.php"; ?>
<?php include TEMPLATEPATH . "/inc/block_map.php"; ?>
<?php get_template_part('template-parts/footer') ?>