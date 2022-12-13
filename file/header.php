
    <title>
    <?php
	    	if (is_single()) {
	    		wp_title().bloginfo('name');
	    	} else {
	    		bloginfo('name');
	    	}
	     ?>
	</title>
