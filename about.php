
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
<?php include "inc/block_blurbs-one.php"; ?>
<!-- About -->
	<section class="about" id="about">
		<div class="container">
			<div class="take-info">
				<div class="take-info__cont">
					<?php include "inc/block_left-sidebar.php"; ?>
					<div class="contant">
                        <?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
						<?php the_content(); ?>
					</div>
					<?php include "inc/block_sidebar-two.php"; ?>
				</div>
			</div>
		</div>
	</section>
<?php include "inc/block_places.php"; ?>
<?php include "inc/block_licenses.php"; ?>

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
<?php include "inc/block_offers.php"; ?>
<?php include "inc/block_instructors.php"; ?>
<?php include "inc/block_courses-down.php"; ?>
<?php include "inc/block_news_posts.php"; ?>
<?php include "inc/block_faces-two.php"; ?>

<?php get_template_part('template-parts/footer')?>