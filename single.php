<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package auto
 */
?>
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
	<?php include "inc/block_blurbs-one.php"; ?>    <!-- About -->
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
<?php include "inc/block_feedbacks.php"; ?>
	<?php include "inc/block_offers.php"; ?>
	<?php include "inc/block_instructors.php"; ?>
<?php include "inc/block_courses-down.php"; ?>
<!--News-->
    <section class="news" id="news">
        <div class="container">
            <div class="new">
                <?php
                $categories = get_the_category($post->ID);
                if ($categories) {
                    $category_ids = array();
                    foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;

                    $args=array(
                        'category__in' => $category_ids,
                        'post__not_in' => array($post->ID),
                        'showposts'=>5,
                        'orderby'            => 'rand',
                        'caller_get_posts'=>1
                    );
                    $my_query = new wp_query($args);
                    if( $my_query->have_posts() ) {
                        while ($my_query->have_posts()) {
                            $my_query->the_post();
                            ?>
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
                        <?php } } wp_reset_query(); } ?>
            </div>
    </section>
<?php include "inc/block_faces-two.php"; ?>

<?php get_template_part('template-parts/footer')?>