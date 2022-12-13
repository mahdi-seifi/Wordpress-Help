<?php
if ( function_exists( 'add_theme_support' ) )
	add_theme_support( 'post-thumbnails' );

if ( function_exists( 'add_image_size' ) ){
	add_image_size( 'cornita-accordion-post', 720, 375, true );
	add_image_size( 'cornita-filter-post', 720, 720, true );
}


   <?php  the_post_thumbnail( 'نام آیدی',array('class' => 'img-responsive')); ?>




   -----------------------------------


   for woocamerce image

             <?php
                            $id = wc_get_product( $product_id );
                            $image = wp_get_attachment_image_src( get_post_thumbnail_id( $id ), 'single-post-thumbnail' );
                            ?>
                            <img class="img-fluid mb-4" src="<?php echo $image[0]; ?>">
