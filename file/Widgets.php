<?php
if (function_exists('register_sidebar')) {
	register_sidebar(array(
		'name' => 'ستون سمت چپ',
		'id'   => 'left-side',
		'description'   => 'ستون سمت چپ',
		'before_widget' => '',
		'before_title'  => '',
		'after_title'   => '',
		'after_widget'  => ''
	));
}
?>


<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('left-side')) : else : ?><?php endif; ?>
