<?php get_header(); ?>

    <div class="container">
        <div class="row text-center">
		
                <h3 class="title-webmaster">جستوجو</h3>
        </div>
    </div>

    <div class="container">
        <div class="row product">
		
		
		<?php if(have_posts()) : while(have_posts()) : the_post(); ?>

		
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 xs-style-content-product shop-item">
                <div class="content-product img-responsive">
                  <a href="<?php the_permalink() ?>">
<?php
the_post_thumbnail( 'search-img' );
 ?>

                                </a>
                    <h2><?php the_title(); ?></h2>
                    <p><?php the_content_rss('', TRUE, '', 20); ?></p>
                </div>
            </div>
 
       <?php endwhile; else: ?>

<?php endif; ?>

   
     
        
      
        </div>
    </div>



   <?php get_footer(); ?>