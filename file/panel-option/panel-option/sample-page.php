<?php
/**
 * Template Name: Wordpress Admin Sample
 **/

get_header(); ?>

		<div id="primary">
			<div id="content" role="main">
                
                <?php
				// Value from Text Field
				$sample_text_field = get_option('yourtheme_sample_text_field');
                echo $sample_text_field;
				?>
                
                
                <br><br>
                
                
                <?php
				// Value from Text Area
				$sample_text_area = get_option('yourtheme_sample_text_area');
                echo $sample_text_area;
				?>
                
                
                <br><br>             
                
                
                <?php
				// Value from Image Upload
				$sample_image_upload = get_option('yourtheme_sample_image_upload');
                echo '<img src="'.$sample_image_upload.'" />';
				?>
                
                
                <br><br>
                
                
                <?php
				// Value from Checkbox
				$sample_checkbox = get_option('yourtheme_sample_checkbox');
                echo $sample_checkbox;
				
				
				/* Sample if/else statement for checkboxes:	
				
				$sample_checkbox = get_option('yourtheme_sample_checkbox');
				
				if ($sample_checkbox == "true") {
					echo 'it is true'; 
					} else { 
					echo 'it is false';
					}
				*/			
				?>
                
                
                <br><br>
                
                
                <?php
				// Value from Dropdown
				$sample_dropdown = get_option('yourtheme_sample_dropdown');
                echo $sample_dropdown;
				?>
                
                
                <br><br>
                
                
                <?php
				// Value from Radio
				$sample_radio = get_option('yourtheme_sample_radio');
                echo $sample_radio;
				?>
                
                
                <br><br>
                
                
                <?php
				// Value from Image Radio Buttons (if/else example)
				$sample_image_radio = get_option('yourtheme_sample_image_radio');
                
				
				if ($sample_image_radio == "option1") {
					echo 'The first image is selected'; 
					
					} elseif ($sample_image_radio == "option2") { 
					
					echo 'The second image is selected'; 
					
					} else {
						
					echo 'The third image is selected';
					
					}	
				?>
                
                
                <br><br>
                
                
                <?php
				// Value from Color Picker
				$sample_colorpick = get_option('yourtheme_sample_color_picker');
                echo '<div style="width:100px;height:100px;background-color:'.$sample_colorpick.'"></div>';
				?>
                
                
                <br><br>
                
                
                <?php
				// Value from Wordpress Page Dropdown
				$sample_wp_pages = get_option('yourtheme_sample_wp_pages');
                echo $sample_wp_pages;
				?>
                
                
                <br><br>
                
                
                <?php
				// Value from Wordpress Category Dropdown
				$sample_wp_category = get_option('yourtheme_sample_wp_category');
                echo $sample_wp_category;
				?>
                
                
                

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>