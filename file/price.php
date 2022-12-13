<?php if ( $price_html = $product->get_price_html() ) : ?>
    <?php echo $price_html; ?>
<?php endif; ?>

-------------

or for woocamerce price

<?php $price = get_post_meta( get_the_ID(), '_price', true ); ?>
<span><?php echo wc_price( $price ); ?></span>
