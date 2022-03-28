<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package auto
 */
?>
<?php include TEMPLATEPATH . "/inc/func_fill_alt.php"; ?>
<?php get_template_part('template-parts/header') ?>
<?php include TEMPLATEPATH . "/inc/block_faces-one.php"; ?>
<?php include TEMPLATEPATH . "/inc/block_up.php"; ?>
<?php include TEMPLATEPATH . "/inc/block_blurbs-one.php"; ?>
<?php include TEMPLATEPATH . "/inc/block_about.php"; ?>
<?php include TEMPLATEPATH . "/inc/block_places.php"; ?>
<?php include TEMPLATEPATH . "/inc/block_licenses.php"; ?>
<?php include TEMPLATEPATH . "/inc/block_feedbacks.php"; ?>
<?php include TEMPLATEPATH . "/inc/block_offers.php"; ?>
<?php include TEMPLATEPATH . "/inc/block_instructors.php"; ?>
<?php include TEMPLATEPATH . "/inc/block_courses-down.php"; ?>
<?php include TEMPLATEPATH . "/inc/block_news_category.php"; ?>
<?php include TEMPLATEPATH . "/inc/block_faces-two.php"; ?>

<?php get_template_part('template-parts/footer') ?>