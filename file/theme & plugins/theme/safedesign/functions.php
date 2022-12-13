<?php
add_action( 'wp_enqueue_scripts', 'safedesign_assets' );
function safedesign_assets() {
	wp_enqueue_style( 'Bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '4.0.0' );
    wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', array(), '4.0.0' );
	// Scripts
	wp_enqueue_script( 'jQuery-1124', get_template_directory_uri() . '/js/1.12.4.min.js', array( 'jquery' ), '1.4.1', true );
	wp_enqueue_script( 'bootstrapmin', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '1.4.1', true );
}


add_theme_support( 'menus' );

function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'منوی اصلی سیف دیزاین' ),
      'footer-menu' => __( 'منوی قسمت فوتر' )
    )
  );
}
add_action( 'init', 'register_my_menus' );


if (function_exists('register_sidebar')) {
	register_sidebar(array(
		'name' => 'ساید بار',
		'id'   => 'left-side',
		'description'   => 'هر المانی که میخواید داخل قسمت ساید بار نمایش داده شود را از قسمت سمت راست کشیده و داخل این قسمت رها کنید',
		'before_widget' => '  <div class="widgetbox">',
		'before_title'  => '<div class="headarea">
                        <h3 class="text-center">',
		'after_title'   => '</h3>
                    </div>
                    <div class="contentarea">',
		'after_widget'  => '                    </div>
                </div>'
	));
}




if ( function_exists( 'add_theme_support' ) )
	add_theme_support( 'post-thumbnails' );

if ( function_exists( 'add_image_size' ) ){
	add_image_size( 'post-item', 360, 239, true );
	add_image_size( 'cornita-filter-post', 720, 720, true );
	add_image_size( 'aboutus-index-img', 178, 156, true );
	add_image_size( 'portfolio-img', 360, 225, true );
	add_image_size( 'product-img', 360, 225, true );
	add_image_size( 'search-img', 360, 225, true );
	add_image_size( 'single-img', 1000, 882, true );
}



function aboutus_index_post_type() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'درباره ما', 'Post Type General Name', 'twentythirteen' ),
        'singular_name'       => _x( 'درباره ما', 'Post Type Singular Name', 'twentythirteen' ),
        'menu_name'           => __( 'درباره ما', 'twentythirteen' ),
        'parent_item_colon'   => __( 'آیتم', 'twentythirteen' ),
        'all_items'           => __( 'تمام آیتم ها', 'twentythirteen' ),
        'view_item'           => __( 'مشاهده آیتم', 'twentythirteen' ),
        'add_new_item'        => __( 'افزودن آیتم جدید', 'twentythirteen' ),
        'add_new'             => __( 'آیتم جدید', 'twentythirteen' ),
        'edit_item'           => __( 'ویرایش آیتم', 'twentythirteen' ),
        'update_item'         => __( 'به روزرسانی آیتم', 'twentythirteen' ),
        'search_items'        => __( 'جستوجوی آیتم', 'twentythirteen' ),
        'not_found'           => __( 'موجود نیست', 'twentythirteen' ),
        'not_found_in_trash'  => __( 'در زباله دان موجود نیست', 'twentythirteen' ),
    );
     
// Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'index_aboutus', 'twentythirteen' ),
        'description'         => __( 'این پست تایپ برای مدیریت قسمت درباره ما در صفحه اصلی است', 'twentythirteen' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
       'taxonomies'            => array( '', '' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );
     
    // Registering your Custom Post Type
    register_post_type( 'index_aboutus', $args );
 
}
 
/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/
 
add_action( 'init', 'aboutus_index_post_type', 0 );


function portfolio_iteme_post_type() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'نمونه کارها', 'Post Type General Name', 'twentythirteen' ),
        'singular_name'       => _x( 'نمونه کارها', 'Post Type Singular Name', 'twentythirteen' ),
        'menu_name'           => __( 'نمونه کارها', 'twentythirteen' ),
        'parent_item_colon'   => __( 'آیتم', 'twentythirteen' ),
        'all_items'           => __( 'تمام نمونه کارها', 'twentythirteen' ),
        'view_item'           => __( 'مشاهده نمونه کار', 'twentythirteen' ),
        'add_new_item'        => __( 'افزودن نمونه کار جدید', 'twentythirteen' ),
        'add_new'             => __( 'نمونه جدید', 'twentythirteen' ),
        'edit_item'           => __( 'ویرایش نمونه کار', 'twentythirteen' ),
        'update_item'         => __( 'به روز رسانی نمونه کار', 'twentythirteen' ),
        'search_items'        => __( 'جستوجوی نمونه کار', 'twentythirteen' ),
        'not_found'           => __( 'موجود نیست', 'twentythirteen' ),
        'not_found_in_trash'  => __( 'در زباله دان موجود نیست', 'twentythirteen' ),
    );
     
// Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'portfolio', 'twentythirteen' ),
        'description'         => __( 'این پست تایپ مربوط به نمونه کارهای وب سایت است', 'twentythirteen' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
       'taxonomies'            => array( '', '' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );
     
    // Registering your Custom Post Type
    register_post_type( 'portfolio', $args );
 
}
 
/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/
 
add_action( 'init', 'portfolio_iteme_post_type', 0 );

add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

/* Remove Woocommerce User Fields */
add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );
add_filter( 'woocommerce_billing_fields' , 'custom_override_billing_fields' );
add_filter( 'woocommerce_shipping_fields' , 'custom_override_shipping_fields' );
 
function custom_override_checkout_fields( $fields ) {
  unset($fields['billing']['billing_state']);
  unset($fields['billing']['billing_country']);
  unset($fields['billing']['billing_company']);

  unset($fields['billing']['billing_postcode']);
  unset($fields['billing']['billing_city']);
  unset($fields['shipping']['shipping_state']);
  unset($fields['shipping']['shipping_country']);
  unset($fields['shipping']['shipping_company']);

  unset($fields['shipping']['shipping_postcode']);
  unset($fields['shipping']['shipping_city']);
  return $fields;
}
function custom_override_billing_fields( $fields ) {
  unset($fields['billing_state']);
  unset($fields['billing_country']);
  unset($fields['billing_company']);

  unset($fields['billing_postcode']);
  unset($fields['billing_city']);
  return $fields;
}
function custom_override_shipping_fields( $fields ) {
  unset($fields['shipping_state']);
  unset($fields['shipping_country']);
  unset($fields['shipping_company']);

  unset($fields['shipping_postcode']);
  unset($fields['shipping_city']);
  return $fields;
}
/* End - Remove Woocommerce User Fields */
