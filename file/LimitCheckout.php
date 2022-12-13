<?php
/*
Plugin Name:Limit Checkout
Description: محدود کردن خرید برای مبالغ بالای 50 میلیون
Author: Safedesign.ir - Mohammad mahdi seifi
Author URI: http://safedesign.ir/
Version: 1.0.0
*/
defined('ABSPATH') || exit;
add_action( 'woocommerce_cart_calculate_fees','LC_custom_fee' );
function LC_custom_fee() {
    global $woocommerce;
    if ( is_admin() && ! defined( 'DOING_AJAX' ) )
        return;

    $lc_max_pay = 49999500;
    $lc_cart_total = WC()->cart->cart_contents_total;

    if ($lc_cart_total > $lc_max_pay){
        //$lc_fee = $lc_cart_total - $lc_max_pay;
        //$woocommerce->cart->add_fee( 'به شما حساب 99999999999 واریز شود', -$lc_fee, false, '' );
        add_filter('woocommerce_order_button_html', 'disable_place_order_button_html' );
        add_filter( 'woocommerce_cart_needs_payment', '__return_false' );
        add_action('woocommerce_review_order_after_payment', 'LC_add_content_to_woocommerce_checkout', 5);
    }
}
function LC_add_content_to_woocommerce_checkout(){
    echo '
    <div style="background:#ff000017;padding:20px;border-radius:10px;border:2px dashed #ff000075;text-align: center;">
    به دلیل وجود سقف جابجایی تا 500,000,000 ریال شما نمیتوانید به صورت اینترنتی پرداخت نمایید لطفا در واتساپ پیام ارسال بفرمایید
    <br><br>
    <a style="background:#5252d1;color:white;padding:5px;border-radius:5px;" href="tel:09124720118"><i aria-hidden="true" class="fa fa-phone"></i> تماس تلفنی</a>
    <a style="background:#2db742;color:white;padding:5px;border-radius:5px;" href="https://api.whatsapp.com/send?phone=989124720118"><i aria-hidden="true" class="fab fa-whatsapp"></i> تماس در واتساپ</a>
    </div>
    ';
}
function disable_place_order_button_html( $button ) {
    $style  = 'style="display:none;"';
    $button = '<a class="button" '.$style.'>' . $text . '</a>';
    return $button;
}
add_action( 'woocommerce_review_order_before_submit', 'LC_message_below_checkout_button' );

function __search_by_title_only( $search, &$wp_query )
{
    global $wpdb;
    if(empty($search)) {
        return $search; // skip processing - no search term in query
    }
    $q = $wp_query->query_vars;
    $n = !empty($q['exact']) ? '' : '%';
    $search =
    $searchand = '';
    foreach ((array)$q['search_terms'] as $term) {
        $term = esc_sql($wpdb->esc_like($term));
        $search .= "{$searchand}($wpdb->posts.post_title LIKE '{$n}{$term}{$n}')";
        $searchand = ' AND ';
    }
    if (!empty($search)) {
        $search = " AND ({$search}) ";
        if (!is_user_logged_in())
            $search .= " AND ($wpdb->posts.post_password = '') ";
    }
    return $search;
}
//add_filter('posts_search', '__search_by_title_only', 500, 2);

?>