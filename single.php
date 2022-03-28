<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package auto
 */
?>
<?php include "inc/func_fill_alt.php"; ?>
<?php get_template_part('template-parts/header')?>
<?php include "inc/block_faces-one.php"; ?>
<?php include "inc/block_up.php"; ?>
	<?php include "inc/block_blurbs-one.php"; ?>    <!-- About -->
<?php include "inc/block_about.php"; ?>
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