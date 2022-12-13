<?php
$taxonmomy     = 'product_cat';
$exclude_slug  = 'outlet';
$exclude_id    = $term_name = get_term_by( 'slug', $exclude_slug, $taxonmomy )->term_id; // term Id to be excluded

// Get the array of top level product category WP_Terms Objects 
$parents_terms = get_terms( array(
    'taxonomy'   => $taxonmomy,
    'parent'     => 0,
    'number'     => 9,
    'hide_empty' => 0,
    'exclude'    => $exclude_id,
) );

// Loop through top level product categories
foreach ($parents_terms as $term) {
    $term_id   = $term->term_id;
    $term_name = $term->name;
    $term_link = get_term_link( $term, $taxonmomy );
    $thumb_id  = get_woocommerce_term_meta( $term_id, 'thumbnail_id', true ); // Get term thumbnail id

    // Display only product categories that have a thumbnail
    if ( $thumb_id > 0 ) :
        $image_src = wp_get_attachment_url( $thumb_id ); // Get term thumbnail url
        ?>
        <div class="wrapper">
            <img src="<?php echo $image_src; ?>"/>
            <a href="<?php echo $term_link ?>">
                <div class="title">
                    <h3><?php echo $term_name; ?></h3>
                </div>
            </a>
        </div>
    <?php
    endif;
}