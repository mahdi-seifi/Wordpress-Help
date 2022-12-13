<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php bloginfo('name'); ?></title>

    <!-- Bootstrap -->
   <?php wp_head(); ?>
</head>
<body>
 <header>
     <div class="container">
<div class="hidden-xs col-sm-3 col-md-3 col-lg-3">
  <a data-toggle="modal" data-target="#exampleModal"> <img class="search-icone" src="<?php bloginfo('template_url');?>/images/general/search.png" /></a>  
    <!-- Button trigger modal -->


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                  
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h3 class="text-center text-danger">مطالب مورد نظر را جستوجو کنید ...</h3>
                    <br />
                    <div class="input-group input-group-lg">
                   <form method="get" action="<?php bloginfo('url'); ?>">
                        <input type="text" name="s" id="s" class="form-control input-search" aria-label="Large" aria-describedby="inputGroup-sizing-sm" />
						<input class="btn btn-primary btn-search" type="submit" name="btnSubmit"  value="" />
					
                   	</form>

               
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">بستن</button>
                    
                </div>
            </div>
        </div>
    </div>
    <a class="menu-btn">ورود و ثبت نام</a>
</div>
         <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">
             <nav class="navbar navbar-default" role="navigation">
                 <div class="container-fluid">
                     <!-- Brand and toggle get grouped for better mobile display -->
                     <div class="navbar-header">
              
                         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                             <span class="sr-only">Toggle navigation</span>
                             <span class="icon-bar"></span>
                             <span class="icon-bar"></span>
                             <span class="icon-bar"></span>
                         </button>

                     </div>
                     <!-- Collect the nav links, forms, and other content for toggling -->
          
                         <div class="collapse navbar-collapse style-menu" id="bs-example-navbar-collapse-1">
                
							 <?php 
							 if (has_nav_menu('header-menu')) {
	wp_nav_menu( array(
		'theme_location' => 'header-menu',
		'menu_class' => 'nav navbar-nav',
		'container' => false
	) );
}
							 
							 
							 ?>
                         </div>
             <!-- /.navbar-collapse -->
               
                 </div><!-- /.container-fluid -->
             </nav>
         </div>
         <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2 logo">
             <img class="img-responsive" src="<?php echo ot_get_option( 'up_logo' ); ?>" />
         </div>
     </div>
 </header>