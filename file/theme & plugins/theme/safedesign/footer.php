<footer>
    <div class="container hidden-xs">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <div class="newslater">
                    <h3>دست اول باشید</h3>
                    <p> با تکمیل فرم زیر، ضمن قرارگیری در گروه دست اول‌های همیار آکادمی جزو اولین افرادی باشید که از نتایج تحقیقات و تصمیمات ما مطلع میشود</p>
         <input placeholder="تلفن همراه" />
                    <input placeholder="آدرس ایمیل" />
            <a class="btn-newslater"> عضویت</a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 footer-content">

                <img class="logo-footer" src="<?php echo ot_get_option( 'footer_logo' ); ?>" />
                <br />
 <ul class="social-media">
     <li>
    <a href="<?php echo ot_get_option( 'facebook' ); ?>"><img src="<?php bloginfo('template_url'); ?>/images/general/facebook(1).png" /></a>     </li>
     <li>
  <a href="<?php echo ot_get_option( 'twiter' ); ?>"><img src="<?php bloginfo('template_url'); ?>/images/general/twitter.png" /></a></li>
     <li>
      <a href="<?php echo ot_get_option( 'instageram' ); ?>">   <img src="<?php bloginfo('template_url'); ?>/images/general/instagram-sketched(1).png" /></a></li>
     <li>
<a href="<?php echo ot_get_option( 'telegram' ); ?>"><img src="<?php bloginfo('template_url'); ?>/images/general/telegram(1).png" /></a></li>
     <li>
<a href="<?php echo ot_get_option( 'rss' ); ?>"><img src="<?php bloginfo('template_url'); ?>/images/general/rss.png" /></a></li>
     <li>
       <a href="<?php echo ot_get_option( 'youtube' ); ?>">  <img src="<?php bloginfo('template_url'); ?>/images/general/youtube.png" /></a></li>
 </ul>
                <br />

				<?php 
							 if (has_nav_menu('footer-menu')) {
	wp_nav_menu( array(
		'theme_location' => 'footer-menu',
		'menu_class' => 'menu-footer',
		'container' => false
	) );
}
							 
							 
							 ?>
                <p><?php echo ot_get_option( 'address' ); ?></p>
                <span><?php echo ot_get_option( 'phone' ); ?></span>
            </div>
        </div>
    </div>
    <div class="container hidden-sm hidden-md hidden-lg">
        <div class="row">
            <ul class="social-media">
                <li>
                    <a><img src="<?php bloginfo('template_url'); ?>/images/general/facebook(1).png" /></a>
                </li>
                <li>
                    <img src="<?php bloginfo('template_url'); ?>/images/general/twitter.png" />
                </li>
                <li>
                    <img src="<?php bloginfo('template_url'); ?>/images/general/instagram-sketched(1).png" />
                </li>
                <li>
                    <img src="<?php bloginfo('template_url'); ?>/images/general/telegram(1).png" />
                </li>
                <li>
                    <img src="<?php bloginfo('template_url'); ?>/images/general/rss.png" />
                </li>
                <li>
                    <img src="<?php bloginfo('template_url'); ?>/images/general/youtube.png" />
                </li>
            </ul>
            <hr />
            <p>آدرس: تهران، پاسداران، بوستان دوم، خیابان گیلان غربی، بن بست مریم، پلاک ۲، طبقه اول، واحد ۱</p>
            <span>شماره تماس : ۰۲۱۷۴۵۵۳۰۰۰</span>

        </div>
    </div>
</footer>

    <?php wp_footer(); ?>
</body>
</html>