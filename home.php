
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
<!-- Licenses -->
    <section class="licenses" id="licenses">
    <div class="container">
        <div class="license">
            <p class="license__title title">
                Лицензии и документы
            </p>
            <div class="license__cont">
                <?php if( have_rows('license', 'option') ): ?>
                    <?php while( have_rows('license', 'option') ): the_row();
                        $icon = get_sub_field('license_photo', 'option');
                        ?>
                        <div class="license__item">
                            <img src="<?php echo $icon; ?>" alt=""/>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<!--Feedback-->
    <section class="feedbacks" id="feedbacks">
        <div class="container">
            <div class="feedback">
                <p class="feedback__title title">Рейтинг и отзывы Автошколы</p>
                <div class="feedback__cont">
                    <?php if( have_rows('feedback', 'option') ): ?>
                        <?php while( have_rows('feedback', 'option') ): the_row();
                            $name = get_sub_field('feedback_name', 'option');
                            $text = get_sub_field('feedback_text', 'option');
                            $img = get_sub_field('feedback_img', 'option');
                            ?>
                            <div><div class="feedback__item">
                                <img class="feedback__photo" src="<?php echo $img; ?>" alt=""/>
                                <div class="feedback__info">
                                    <p class="feedback__name"><?php echo $name; ?></p>
                                    <p class="feedback__text"><?php echo $text; ?></p>
                                    <div class="feedback__down">
                                        <?php if( have_rows('feedback_z', 'option') ): ?>
                                        <?php while( have_rows('feedback_z', 'option') ): the_row();
                                        $icon = get_sub_field('feedback_img', 'option');
                                        ?>
                                            <img src="<?php echo $icon; ?>" alt=""/>
                                            <?php endwhile; ?>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div></div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
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
<!-- Offers -->
    <section class="offers" id="offers">
    <div class="container">
        <div class="offer">
            <p class="offer__title title">
                Спецпредложения и акции
            </p>
            <div class="offer__cont">
                <?php if( have_rows('offer', 'option') ): ?>
                    <?php while( have_rows('offer', 'option') ): the_row();
                        $name = get_sub_field('offer_title', 'option');
                        $text = get_sub_field('offer_text', 'option');
                        $link = get_sub_field('offer_link', 'option');
                        $img = get_sub_field('offer_img', 'option');
                        ?>
                        <a href="<?php echo $link; ?>" class="offer__item">
                            <img src="<?php echo $img; ?>" alt="" class="offer__photo"/>
                            <p class="offer__name">
                                <?php echo $name; ?>
                            </p>
                            <p class="offer__text">
                                <?php echo $text; ?>
                            </p>
                            <button class="offer__btn btn form-up">
                                Подробнее
                            </button>
                        </a>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<!-- Instructors -->
    <section class="instructors" id="instructors">
    <div class="container">
        <div class="instru">
            <p class="instru__title title">
                Инструкторы Автошколы
            </p>
            <div class="instru__cont">
                <?php if( have_rows('instruc', 'option') ): ?>
                    <?php while( have_rows('instruc', 'option') ): the_row();
                        $icon = get_sub_field('instruc_photo', 'option');
                        $name = get_sub_field('instruc_name', 'option');
                        $text = get_sub_field('instruc_text', 'option');
                        ?>
                        <div class="instru__item">
                            <img src="<?php echo $icon; ?>" alt="" class="instru__img"/>
                            <p class="instru__name">
                                <?php echo $name; ?>
                            </p>
                            <p class="instru__text">
                                <?php echo $text; ?>
                            </p>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
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
<!--Places-->
    <section class="places" id="places">
    <div class="container">
        <div class="place">
            <p class="place__title title">Наши площадки для вождения</p>
            <div class="place__cont">
                <?php if( have_rows('place', 'option') ): ?>
                    <?php while( have_rows('place', 'option') ): the_row();
                        $name = get_sub_field('place_title', 'option');
                        $link = get_sub_field('place_link', 'option');
                        $img = get_sub_field('place_img', 'option');
                        ?>
                        <a href="<?php echo $link; ?>" class="place__item">
                            <img src="<?php echo $img; ?>" alt="" class="offer__photo"/>
                            <span><?php echo $name; ?></span>
                        </a>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
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
<!--Courses-->
    <section class="courses" id="courses-down">
    <div class="container">
        <div class="cours">
            <p class="cours__title">Пройти обучение онлайн</p>
            <?php echo do_shortcode('[contact-form-7 id="1834" title="Выборка"]')?>
        </div>
    </div>
</section>
<!-- Face -->
    <section class="faces faces-two" id="faces-two">
    <div class="container">
        <div class="face">
            <div class="face__item">
                <p class="face__title">
                    Автошкола для обучения
                </p>
                <p class="face__text">
                    Автошкола (Северо-восточный округ) ул. Нестерова, 15
                </p>
                <div class="face__cont">
                    <?php echo do_shortcode('[contact-form-7 id="32" title="Главная форма"]')?>
                </div>
            </div>
        </div>
    </div>
        <?php get_template_part('map')?>
</section>
<!--Footer-->
<?php get_template_part('template-parts/footer')?>