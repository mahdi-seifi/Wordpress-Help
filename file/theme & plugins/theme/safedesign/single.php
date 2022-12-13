﻿<?php get_header(); ?>
    <div class="container single-top">
        <!-- sidebar -->
  <?php get_sidebar(); ?>

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