<?php get_header(); ?>
    <div class="container single-top">
        <!-- sidebar -->
        <div class="hidden-xs col-sm-3 col-md-3 col-lg-3">
            <div class="sidebar ">
                <div class="widgetbox">
                    <div class="headarea">
                        <h3 class="text-center">قیمت :<?php if ( $price_html = $product->get_price_html() ) : ?>
                                    <?php echo $price_html; ?>
                                  <?php endif; ?> </h3>
                    </div>
                    <div class="contentarea">
					<div class="ditelis">
					        <img src="<?php bloginfo('template_url'); ?>/images/general/grid.png" />
		<span><?php global $post,$product; $cat_count = sizeof(get_the_terms($post->ID,'product_cat'));
echo $product->get_categories(',','<span>'. _n('','', $cat_count,'woocommerce' ).'','.</span>'); ?></span>
					</div>
<div class="ditelis">
<img src="<?php bloginfo('template_url'); ?>/images/general/user.png" />
<span> نویسنده :<?php the_author(', ') ?> </span>
     </div>
<div class="ditelis">
<img src="<?php bloginfo('template_url'); ?>/images/general/time.png" />
<span>زمان انتشار :  <?php the_time('j F Y'); ?></span>
     </div>
	 <div class="ditelis">
<img src="<?php bloginfo('template_url'); ?>/images/general/price.png" />
<span>زمان انتشار :  <?php echo $product->get_tags( ', ', '<span class="tagged_as">' . _n( '', '', $tag_count, 'woocommerce' ) . ' ', '.</span>' ); ?></span>
     </div>
                    </div>
					<a class="cart-btn" title="افزودن به سبد خرید " href="<?php bloginfo('url'); ?>/?add-to-cart=<?php echo get_the_ID(); ?>">افزودن به سبد خرید</a>
                </div>
               

            </div>
        </div>
        <!-- sidebar -->
        <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9 content-single">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <h2><?php the_title(); ?></h2>
            <br />
         <?php the_post_thumbnail( 'single-img',array('class' => 'img-responsive')); ?>
            <br />
            <p>
	<?php the_content(__('')); ?>
            </p>
			<?php endwhile; else: ?><?php endif; ?>
        </div>
    </div>


    <?php get_footer(); ?>