<div id="map">
    <div class="acf-map">
        <?php $the_query = new WP_Query( array(
            'post_type' => 'avtoshkola',
        ) );?>
        <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
            <div class="marker" data-lat="<?php the_field('map_lat'); ?>" data-lng="<?php the_field('map_lng'); ?>"></div>
        <?php endwhile; ?>
        <?php wp_reset_query(); ?>
    </div>
</div>