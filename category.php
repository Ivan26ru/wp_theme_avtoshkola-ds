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
<?php include "inc/block_faces-one.php"; ?>
<?php include "inc/block_up.php"; ?>
	<?php include "inc/block_blurbs-one.php"; ?><!-- About -->
<?php include "inc/block_about.php"; ?>
<?php include "inc/block_places.php"; ?>
<?php include "inc/block_licenses.php"; ?>
<?php include "inc/block_feedbacks.php"; ?>
<?php include "inc/block_offers.php"; ?>
	<?php include "inc/block_instructors.php"; ?>
	<?php include "inc/block_courses-down.php"; ?>
	<?php include "inc/block_faces-two.php"; ?>

<?php get_template_part('template-parts/footer')?>