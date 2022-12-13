
    <?php get_header(); ?>
    <div class="container">
        <div class="row txt-start">
            <div class="hidden-xs col-sm-6 col-md-6 col-lg-6 number-webmaster">
              <?php echo ot_get_option( 'txt_bottom_left_header' ); ?>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 center-webmaster" >
          <?php echo ot_get_option( 'txt_bottom_header' ); ?>
                <a href="<?php echo ot_get_option('btn_botom_header'); ?>" class="btn-webmaster">آموزش کسب و کار اینترنتی</a>
            </div>

        </div>
    </div>

    <div class="container">
        <div class="row product">
				<?php
$args = array(
    'post_type'         => 'product',
    'posts_per_page' => 3,
);
$my_query = new WP_Query($args);
while ($my_query->have_posts()):
$my_query->the_post();
$do_not_duplicate = $post->ID;?>
		
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 xs-style-content-product">
                <div class="content-product img-responsive">
			 <a href="<?php the_permalink() ?>">	<?php  the_post_thumbnail( 'product-img',array('class' => '')); ?></a>
		
 <a href="<?php the_permalink() ?>"><h2><?php the_title(); ?></h2></a>
<p><?php the_content_rss('', TRUE, '', 20); ?></p>
<span> قیمت <?php if ( $price_html = $product->get_price_html() ) : ?>
                                    <?php echo $price_html; ?>
                                  <?php endif; ?></span>
</div>
            </div>
    
      <?php endwhile; wp_reset_postdata(); ?>
   <br />
            <a class="all-product-btn">تمامی دوره ها</a>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="hidden-xs col-sm-6 col-md-6 col-lg-6 box-state">
                <div class="col-xs-12 col-sm-6 col-md-6 left-state">
                    <img src="<?php bloginfo('template_url'); ?>/images/home/student.png" />
                    <span class="number-left-state"><?php echo ot_get_option('number_student'); ?></span>
                    <span class="text-left-state">همیارجو</span>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 right-state">
                    <img src="<?php bloginfo('template_url'); ?>/images/home/book.png" />
                <span class="number-right-state"><?php echo ot_get_option('training_course'); ?></span>
                 <span class="text-right-state">دوره آموزشی</span>
                </div>
                <br />
                <div class="col-xs-12 col-sm-6 col-md-6 right-state-bottom">
                    <img src="<?php bloginfo('template_url'); ?>/images/home/award.png" />
                    <span class="number-right-state"> <?php echo ot_get_option('graduated'); ?></span>
                    <span class="text-right-state">فارغ التحصیل</span>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 right-state-bottom">
                    <img src="<?php bloginfo('template_url'); ?>/images/home/video-camera.png" />
                    <span class="number-right-state"><?php echo ot_get_option('training_hours'); ?></span>
                    <span class="text-right-state">ساعت دوره آموزشی</span>
                </div>
            </div>
            <div class="col-xs-12 hidden-sm hidden-md hidden-lg statistics">
                <p> آمار و ارقام نشانگر <h2>موفقیت دانشجویان</h2>  ما می باشد‍‍‍</p>


            </div>
            <div class="col-xs-12 hidden-sm hidden-md hidden-lg right-state-bottom-xs">
                <div class="col-xs-12 hidden-sm hidden-md hidden-lg xs-left-state">
                    <img src="<?php bloginfo('template_url'); ?>/images/home/student.png" />
                    <br />
                    <span class="number-left-state-xs">۸۶۴۳۶</span>
                    <br />
                    <span>دوره آموزشی</span>
                </div>
                <div class="col-xs-12 hidden-sm hidden-md hidden-lg xs-content-state">

                    <img src="<?php bloginfo('template_url'); ?>/images/home/book.png" />
                    <br />
                    <span class="number-content-state-xs"><?php echo ot_get_option('btn_botom_header'); ?></span>
                    <br />
                    <span>همیارجو</span>
                </div>
                <div class="col-xs-12 hidden-sm hidden-md hidden-lg xs-content-state">
                    
                    <img src="<?php bloginfo('template_url'); ?>/images/home/award.png" />
                    <br />
                    <span class="number-content-state-xs">۱۸۰۷۹</span>
                    <br />
                    <span>فارغ التحصیل</span>
                </div>
                <div class="col-xs-12 hidden-sm hidden-md hidden-lg xs-content-state">
                
                    <img src="<?php bloginfo('template_url'); ?>/images/home/video-camera.png" />
                    <br />
                    <span class="number-content-state-xs">۲۵۶۰</span>
                    <br />
                    <span>ساعت دوره آموزشی</span>
                </div>


            </div>
            <div class="hidden-xs col-sm-6 col-md-6 col-lg-6 statistics">
            
               
            <?php echo ot_get_option('index_conter'); ?>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row news-block">
		
		
            <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 pull-right">
			
			 <?php $args     = array(
            'post_type'      => array('post'), /* پست تایپ دلخواه */
            'post_status'    => 'publish',
            'posts_per_page' => 1, /* تعداد پست قابل نمایش */
            'order'          => 'DESC',
            'orderby'        => 'ID',
            'tax_query'      => array(
            array(
            'taxonomy' => 'category', /* تکسونومی پست تایپ */
            'field'    => 'slug', /* اگر میخواید از نامک دسته برای نمایش استفاده کنید مقدار رو به slug تغییر بدین */
            'terms'    => array('special'), /* آی دی یا نامک دسته */
            ),
            ),
            'paged'          => ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1,
            );
            $loop = new WP_Query( $args );
            if ( $loop->have_posts() ) { ?>
            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
			
                <div class="news">
                    <a href="<?php the_permalink() ?>"><img src="<?php bloginfo('template_url'); ?>/images/home/website-or-weblog-720x508.jpg" /> </a>
                    <div class="news-title">
                        <ul>
                            <li>  <?php the_category(', ') ?></li>
                        </ul>
                        <br />
                        <h2><?php the_title(); ?></h2>
                    </div>
                </div>
          <?php endwhile; ?>
            <?php wp_reset_query(); ?>
            <?php } else {
            echo "<div class='alert alert-warning'>با عرض پوزش مطلبی جهت نمایش یافت نشد.</div>";
            } ?>
            </div>
			
			
			
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 pull-left">
			
 <?php $args     = array(
            'post_type'      => array('post'), /* پست تایپ دلخواه */
            'post_status'    => 'publish',
            'posts_per_page' => 2, /* تعداد پست قابل نمایش */
            'order'          => 'DESC',
            'orderby'        => 'ID',
            'tax_query'      => array(
            array(
            'taxonomy' => 'category', /* تکسونومی پست تایپ */
            'field'    => 'slug', /* اگر میخواید از نامک دسته برای نمایش استفاده کنید مقدار رو به slug تغییر بدین */
            'terms'    => array('general'), /* آی دی یا نامک دسته */
            ),
            ),
            'paged'          => ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1,
            );
            $loop = new WP_Query( $args );
            if ( $loop->have_posts() ) { ?>
            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
			
			
			
                <div class="news news-item">
                    <a href="<?php the_permalink() ?>"> 
                        <?php the_post_thumbnail( 'post-item' ); ?>
						</a>
           <div class="news-title-item">
              <?php the_category(', ') ?>
               <h5><?php the_title(); ?></h5>
           </div>
                </div>
        
         

      <?php endwhile; ?>
            <?php wp_reset_query(); ?>
            <?php } else {
            echo "<div class='alert alert-warning'>با عرض پوزش مطلبی جهت نمایش یافت نشد.</div>";
            } ?>
				
				
				
				
				
            </div>
            <a class="news-btn">مقالات دیگر</a>
        </div>
    </div>
    <div class="container">
        <div class="row book">
            <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 pull-right book-content">
                <div class="p-book">‍‍‍<?php echo ot_get_option( 'content_book' ); ?></div>
               <a href="<?php echo ot_get_option( 'up_book' ); ?>" class="btn-book">دانلود کتاب</a>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 pull-left text-center">
                <img src="<?php echo ot_get_option( 'download_book' ); ?>" />
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row product">
		<h4>برخی از نمونه کارهای موفق سیف دیزاین</h4>
		<hr/>
		<?php
$args = array(
    'post_type'         => 'portfolio',
    'posts_per_page' => 6,
);
$my_query = new WP_Query($args);
while ($my_query->have_posts()):
$my_query->the_post();
$do_not_duplicate = $post->ID;?>
		
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 xs-style-content-product">
                <div class="content-product img-responsive">
                 <a href="<?php the_permalink() ?>"> <?php  the_post_thumbnail( 'portfolio-img',array('class' => '')); ?> </a>  
                   <a href="<?php the_permalink() ?>">   <h2><?php the_title(); ?></h2></a>
                    <p><?php the_content_rss('', TRUE, '', 20); ?></p>
                </div>
            </div>
      
     <?php endwhile; wp_reset_postdata(); ?>
            <br />
            <a class="all-product-btn">سایر نمونه کارها</a>
        </div>
    </div>
    <div class="container">
	<?php
$args = array(
    'post_type'         => 'index_aboutus',
    'posts_per_page' => 1,
);
$my_query = new WP_Query($args);
while ($my_query->have_posts()):
$my_query->the_post();
$do_not_duplicate = $post->ID;?>
        <div class="row about-us">
            <h3><?php the_title(); ?></h3>
			<hr/>
            <br />
            <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 enamad">
                <img src="<?php echo ot_get_option( 'up_namad' ); ?>" />
                <img src="<?php echo ot_get_option( 'up_samane' ); ?>" />
            </div>
            <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
			<?php the_content(); ?>
            </div>
            <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
             
				   <?php  the_post_thumbnail( 'aboutus-index-img',array('class' => 'hidden-xs')); ?>
            </div>
        </div>
		<?php endwhile; wp_reset_postdata(); ?>
		
    </div>
  <?php get_footer(); ?>
