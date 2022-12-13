<?php
/*
Plugin Name: ووکامرس فارسی
Plugin URI: https://woosupport.ir
Description: بسته فارسی ساز ووکامرس پارسی به راحتی سیستم فروشگاه ساز ووکامرس را فارسی می کند. با فعال سازی افزونه ، بسیاری از قابلیت های مخصوص ایران به افزونه افزوده می شوند. پشتیبانی در <a href="http://www.woocommerce.ir/" target="_blank">ووکامرس پارسی</a>.
Version: 4.0.3
Author: ووکامرس فارسی
Author URI: https://woosupport.ir
WC requires at least: 3.6.0
WC tested up to: 4.5.1
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit;
} // Exit if accessed directly

if ( ! defined( 'PW_VERSION' ) ) {
	define( 'PW_VERSION', '4.0.3' );
}

if ( ! defined( 'PW_DIR' ) ) {
	define( 'PW_DIR', __DIR__ );
}

if ( ! defined( 'PW_FILE' ) ) {
	define( 'PW_FILE', __FILE__ );
}

if ( ! defined( 'PW_URL' ) ) {
	define( 'PW_URL', plugin_dir_url( __FILE__ ) );
}

/**
 * @return Persian_Woocommerce_Core
 */
function PW() {
	return Persian_Woocommerce_Core::instance();
}

add_action( 'woocommerce_loaded', function() {

	require_once( 'vendor/autoload.php' );
	require_once( 'include/class-core.php' );
	require_once( 'include/class-widget.php' );
	require_once( 'include/class-translate.php' );
	require_once( 'include/class-tools.php' );
	require_once( 'include/class-address.php' );
	require_once( 'include/class-currencies.php' );

} );

