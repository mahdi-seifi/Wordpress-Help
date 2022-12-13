<?php
$args = array(
    'post_type'         => 'product',
    'posts_per_page' => -1,
);
$my_query = new WP_Query($args);
while ($my_query->have_posts()):
$my_query->the_post();
$do_not_duplicate = $post->ID;?>

<?php update_post_meta( get_the_id(), '_visibility', 'visible' ) ?>

<?php endwhile; wp_reset_postdata(); ?>
