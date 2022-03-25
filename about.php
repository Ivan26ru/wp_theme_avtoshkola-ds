
<!-- Template Name: О нас 
Template Post Type: page, product
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
<!-- Up -->
<section class="up" id="up">
    <div class="container">
        <h1 class="title">
            <?php
            if (is_category()) {
                echo get_queried_object()->name;
            }  else {
                the_title();
            }
            ?>
        </h1>
    </div>
</section>
<!--Blurbs-->
<section class="blurbs" id="blurbs-one">
    <div class="container">
        <div class="blurb">
            <div class="blurb__up">
                <div class="blurb__info">
                    <span>Акция действует до 03.02.22</span>
                    <span>Времени осталось:  2 дн. 16 час. 34 мин. 20 сек.</span>
                    <div class="blurb__item">
                        <div>
                            <p class="name">ТЕОРИЯ</p>
                            <p class="big red">10.990</p>
                        </div>
                        <span>+</span>
                        <div>
                            <p class="name">ГИБДД</p>
                            <p class="big">8.000 <span>руб.</span></p>
                        </div>
                        <span>+</span>
                        <div>
                            <p class="name">ВОЖДЕНИЕ</p>
                            <p class="big">7.990 <span>руб.</span></p>
                        </div>
                        <span>=</span>
                        <div>
                            <p class="name">ИТОГО</p>
                            <p class="big">15.990 <span>руб.</span></p>
                        </div>
                    </div>
                </div>
                <div class="blurb__form">
                    <p>Текущая акция</p>
                    <?php echo do_shortcode('[contact-form-7 id="2062" title="Текущая акция"]')?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About -->
	<section class="about" id="about">
		<div class="container">
			<div class="take-info">
				<div class="take-info__cont">
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
                            <ul class="sidebar__list">
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
					<div class="contant">
                        <?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
						<?php the_content(); ?>
					</div>
                    <div class="sidebar-two">
                        <div class="sidebar-two__cont" id="sidebar-two-fixed">
                            <div class="sidebar-two__info">
                                <p class="sidebar-two__title">ДядяСтепа</p>
                                <span class="sidebar-two__red">опыт более 10 лет</span>
                                <span>ИНН 9715006367</span>
                                <span>КПП 771501001</span>
                            </div>
                            <?php echo do_shortcode('[contact-form-7 id="2106" title="Обучение"]')?>
                        </div>
                    </div>
				</div>
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
<!-- Licenses -->
	<section class="licenses" id="licenses">
		<div class="container">
			<div class="license">
				<p class="license__title title">
					Лицензии
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
					Инструкторы
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
<!--Courses-->
<section class="courses" id="courses-down">
    <div class="container">
        <div class="cours">
            <p class="cours__title">Пройти обучение онлайн</p>
            <?php echo do_shortcode('[contact-form-7 id="1834" title="Выборка"]')?>
        </div>
    </div>
</section>
<!--News-->
<section class="news" id="news">
    <div class="container">
        <div class="new">
            <?php
            $args = array(
                'show_option_all'    => '',
                'showposts'=>5,
                'show_option_none'   => __('No categories'),
                'orderby'            => 'rand',
                'order'       => 'DESC',
                'include'     => array(),
                'exclude'     => array(),
                'meta_key'    => '',
                'meta_value'  =>'',
                'post_type'   => 'post',
                'suppress_filters' => true,
            );

            $posts = get_posts( $args );

            foreach($posts as $post){ setup_postdata($post); ?>
                <div class="new__item">
                    <a href="<?php the_permalink() ?>">
                        <div class="new__photo">
                            <div id="cat-image-miniature">
                                <?php if ( has_post_thumbnail() ) {
                                    the_post_thumbnail();
                                } else { ?>
                                    <img src="<?php bloginfo('template_directory'); ?>/img/dont.png" alt="<?php the_title(); ?>" />
                                <?php } ?>
                            </div>
                        </div>
                        <span class="new__name"><?php the_title() ?></span>
                    </a>
                </div>
                <?php
            }wp_reset_postdata();?>
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
<?php get_template_part('template-parts/footer')?>