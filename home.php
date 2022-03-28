
<!-- Template Name: Главная
Template Post Type: post, page, product
 -->
<?php function fill_alt($buffer) {

    preg_match_all("/<img (.*?)\/>/", $buffer, $images);

    if(!is_null($images)) {

        foreach($images[1] as $index => $value) {

            if(!preg_match("/alt=/", $value)) { // Если у изображения нет alt

                preg_match("/src=\"(.*?)\"/", $images[0][$index], $matches);

                $image_name = basename($matches[1]);
                $image_name = preg_replace("/\.[^.]+$/", "", $image_name); // Имя изображения без расширения
                $buffer = str_replace($images[0][$index], str_replace("<img", '<img alt="'.$image_name.'"', $images[0][$index]), $buffer);

            } elseif(preg_match("/alt=\"\"/", $value)) { // Если у изображения есть alt, но он пустой

                preg_match("/src=\"(.*?)\"/", $images[0][$index], $matches);

                $image_name = basename($matches[1]);
                $image_name = preg_replace("/\.[^.]+$/", "", $image_name); // Имя изображения без расширения
                $buffer = str_replace($images[0][$index], str_replace(array("<img", "alt=\"\""), array('<img alt="'.$image_name.'"', ""), $images[0][$index]), $buffer);

            }

        }

    }

    return $buffer;

}

ob_start("fill_alt");
?>
 <?php get_template_part('template-parts/header')?>
<!-- Face -->
	<section class="faces faces-one" id="faces-one">
		<div class="container">
			<div class="face">
				<div class="face__item">
					<p class="face__title">
                        Поиск автошколы
					</p>
					<p class="face__text">
                        Навигация по автошколам Москвы
					</p>
					<div class="face__cont">
						<?php echo do_shortcode('[contact-form-7 id="32" title="Главная форма"]')?>
					</div>
				</div>
			</div>
		</div>
        <?php get_template_part('map')?>
	</section>
<!--Courses-->
    <section class="courses" id="courses">
    <div class="container">
        <div class="cours">
            <?php echo do_shortcode('[contact-form-7 id="1834" title="Выборка"]')?>
        </div>
    </div>
</section>
<!-- Ranges -->
	<section class="ranges" id="ranges">
		<div class="container">
			<div class="range">
				<h1 class="range__title title">
					Автошкола в Москве
				</h1>
				<div class="range__container responsive">
					<?php $the_query = new WP_Query( array(
						'orderby' => 'rand',
					    'post_type' => 'avtoshkola',
					        ) );?>
				    <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
					    <div class="range__cont">
		                    <div class="range__item">
                                <div class="range__part">
                                    <img src="<?php the_field('auto_img'); ?>" class="range__photo"/>
                                    <div class="range__reting">
                                        <?php if( have_rows('auto_reting') ): ?>
                                            <?php while( have_rows('auto_reting') ): the_row();
                                                $icon = get_sub_field('auto_icon', 'option');
                                                ?>
                                                <img src="<?php echo $icon; ?>" alt=""/>

                                            <?php endwhile; ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
								<div class="range__contant">
                                    <p class="range__place"><?php the_field('auto_name'); ?></p>
                                    <p class="range__place"><?php the_field('category'); ?></p>
									<p class="range__metro"><?php the_field('auto_metro'); ?></p>
				                    <div class="range__down">
				                    	<a href="<?php the_permalink() ?>" class="range__link">
                                            Подробнее
										</a>
				                    </div>
								</div>
							</div>
		            	</div>
					    <?php endwhile; ?>
				    <?php wp_reset_query(); ?>
				</div>
			</div>
		</div>
	</section>
<!--Blurbs-->
    <section class="blurbs" id="blurbs">
        <div class="container">
            <div class="blurb">
                <p class="blurb__title title">Бесплатная теория в Автошколе</p>
                <div class="blurb__up">
                    <div class="blurb__info">
                        <?php the_field('blurb_text', 'option'); ?>
                    </div>
                    <div class="blurb__form">
                        <p>Текущая акция</p>
                        <?php echo do_shortcode('[contact-form-7 id="2062" title="Текущая акция"]')?>
                    </div>
                </div>
                <div class="blurb__baner">
                    <img src="<?php the_field('blurb_baner', 'option'); ?>" alt=""/>
                </div>
                <div class="blurb__text">
                    <?php the_field('blurb_post', 'option'); ?>
                </div>
            </div>
        </div>
    </section>
<!--More-information-->
<section class="more-information" id="more-information">
    <div class="container">
        <div class="more-info">
            <?php if( have_rows('more') ): ?>
                <?php while( have_rows('more') ): the_row();
                    $title = get_sub_field('more_title');
                    $name = get_sub_field('more_name');
                    $link = get_sub_field('more_linlk');
                    $img = get_sub_field('more_img');
                    ?>
                    <div class="more-info__cont">
                    <p class="more-info__title"><?php echo $title; ?></p>
                         <div class="more-info__item">
                            <div class="more-info__up">
                                <img src="<?php echo $img; ?>" alt=""/>
                                <p><?php echo $name; ?></p>
                            </div>
                            <?php if( have_rows('more_item') ): ?>
                                <?php while( have_rows('more_item') ): the_row();
                                    $text = get_sub_field('more_text');
                                    ?>
                                    <p class="more-info__text"><?php echo $text; ?></p>
                                <?php endwhile; ?>
                            <?php endif; ?>
                             <a href="" class="more-info__btn btn form-up">ПОДРОБНЕЕ</a>
                         </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>
<!--Videos-->
    <section class="videos" id="videos">
        <div class="container">
            <div class="video">
                <p class="video__title title">Обучение и получение прав</p>
                <div class="video__cont">
                    <?php the_field('video', 'option');?>
                    <div class="video__item">
                        <img src="<?php bloginfo('template_directory') ?>/img/video.png" alt=""/>
                        <p>Автомобильные права. Порядок получения. Стоимость.</p>
                    </div>
                    <div class="video__item">
                        <img src="<?php bloginfo('template_directory') ?>/img/video.png" alt=""/>
                        <p>Другие категории и порядок обучения.</p>
                    </div>
                </div>
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
                    <?php the_field('price', 'option'); ?>
                </div>
                <div class="pice__part">
                    <div class="pice__form">
                        <p class="pice__name">Узнать подробности</p>
                        <p class="pice__more">Вышлим подробный прайс</p>
                        <?php echo do_shortcode('[contact-form-7 id="2006" title="Узнать подробности"]')?>
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
                    Мы обучаем
                </p>
                <div class="serv__info">
                    <p>Работа с гос. компаниями<span>Наличие ЭЦП</span></p>
                    <img src="<?php bloginfo('template_directory') ?>/img/work-2.png" alt=""/>
                </div>
            </div>
            <div class="serv__cont">
                <?php if( have_rows('serv', 'option') ): ?>
                    <?php while( have_rows('serv', 'option') ): the_row();
                        $text = get_sub_field('serv_text', 'option');
                        $link = get_sub_field('serv_link', 'option');
                        $class = get_sub_field('serv_class', 'option');
                        ?>
                        <a href="<?php echo $link; ?>" class="serv__item serv__item_<?php echo $class; ?>">
                            <p>
                                <?php echo $text; ?>
                            </p>
                        </a>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<?php include "inc/block_licenses.php"; ?>
<?php include "inc/block_feedbacks.php"; ?>
<!--Reviews-->
    <section class="reviews" id="reviews">
    <div class="container">
        <div class="review">
            <p class="review__title title"><?php the_field('info-1', 'option'); ?></p>
            <div class="review__cont">
                <div class="review__part">
                    <p class="review__text">
                        <?php the_field('info_text', 'option'); ?>
                    </p>
                </div>
                <div class="review__part">
                    <div class="review__form">
                        <p class="review__name">Запрос на права</p>
                        <?php echo do_shortcode('[contact-form-7 id="1975" title="Запрос на права"]')?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Information -->
    <section class="information" id="informa tion">
    <div class="container">
        <div class="info">
            <p class="info__title title">
                <?php the_field('info-2', 'option'); ?>
            </p>
            <div class="info__cont">
                <div class="info__part">
                    <p><?php the_field('info', 'option'); ?></div></p>
            </div>
        </div>
    </div>
    </div>
</section>
	<?php include "inc/block_offers.php"; ?>
<?php include "inc/block_instructors.php"; ?>
<!-- Text -->
    <section class="texts" id="texts">
    <div class="container">
        <div class="text">
            <p>
                <?php the_field('text'); ?>
            </p>
        </div>
    </div>
</section>
<?php include "inc/block_places.php"; ?>
<!--Ranks-->
    <section class="ranks" id="ranks">
    <div class="container">
        <div class="rank">
            <p class="rank__title">Категории транспортных средств</p>
            <div class="rank__cont">
                <div class="rank__part">
                    <img src="<?php the_field('rank_img', 'option'); ?>" alt=""/>
                </div>
                <div class="rank__part">
                    <?php the_field('rank_text', 'option'); ?>
            </div>
        </div>
    </div>
</section>
<?php include "inc/block_courses-down.php"; ?>
<?php include "inc/block_faces-two.php"; ?>
<!--Footer-->
<?php get_template_part('template-parts/footer')?>