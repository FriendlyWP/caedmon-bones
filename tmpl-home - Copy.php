<?php
/*
Template Name: Home Page
*/
?>

<?php get_header(); ?>
			
			<div id="content">
				<?php 
				    	//adding scripts file in the footer
				    	wp_enqueue_script( 'flexslider', get_template_directory_uri() . '/library/js/flexslider/jquery.flexslider-min.js', array( 'jquery' ), '', true );
				    	wp_enqueue_style( 'flexslider-style', get_template_directory_uri() . '/library/css/flexslider.css' );

				    	?>
						<script type="text/javascript" language="javascript">
		                    jQuery(document).ready(function($) {
		                    	var n = 1
		                        $('.flexslider').flexslider({
		                        	//namespace: "mmflex-",
		                          animation: "fade",
		                          slideshowSpeed: 10000,
		                          directionNav: false,
		                          pauseOnAction: true,
		                          pauseOnHover: true,
		                          controlNav: true,
		                          animationLoop: true,
		                          prevText: "",
		                          nextText: "",
		                          //pausePlay: false,
								  //pauseText: 'Pause',
								  //playText: 'Play',
			                    });
			                });
		                </script>
						
						<?php
					    	if (function_exists('get_field') ) {
					    	 	if (get_field('frames')) {
					    	 	echo '<div class="flexslider wrap wide">';
					    	 	echo '<ul class="slides">';	
									 
									while(has_sub_field('frames')):
										$overlay_heading_text = get_sub_field('overlay_heading_text');
										$overlay_smaller_text = get_sub_field('overlay_smaller_text');
										$button_text = get_sub_field('button_text');
										$button_destination = get_sub_field('button_destination');
										$slide_image = get_sub_field('slide_image');
				    	 				$image_info =  wp_get_attachment_image_src( $slide_image, 'feature-slide' );
				    	 				echo '<li>';
				    	 		 		if ($button_destination) {
				    	 		 			echo '<a href="' . $button_destination . '">';
				    	 		 		}
				    	 		 		echo '<img src="' . $image_info[0] . '" />';
				    	 		 		if ($button_destination) {
				    	 		 			echo '</a>';
				    	 		 		}
				    	 		 		if ($overlay_heading_text || $overlay_smaller_text || $button_text ) {
				    	 		 			echo '<span class="overlay"><span>';
				    	 		 			if ( $overlay_heading_text ) {
				    	 		 				echo '<h3>' . $overlay_heading_text . '</h3>';
				    	 		 			}
				    	 		 			if ( $overlay_smaller_text ) {
				    	 		 				echo '<p>' .  $overlay_smaller_text. '</p>';
				    	 		 			}
				    	 		 			if ( $button_text ) {
				    	 		 				echo '<a href="' . $button_destination . '" class="button orange">' . $button_text . '</a>';
				    	 		 			}
				    	 		 			echo '</span></span>';
				    	 		 		}
				    	 		 		echo '</li>';
					    	 		endwhile; 
					    	 	echo '</ul>';
								echo '</div>';
								}
							}
					    	?>
			

				<div id="inner-content" class="wrap cf">
						
				    <div id="main" class="m-all t-2of3 d-5of7 cf" role="main">
				    	
					    
					    <?php the_content(); ?>

				</div> <!-- end #main -->
    
				    <?php get_sidebar(); ?>
				    
				</div> <!-- end #inner-content -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>