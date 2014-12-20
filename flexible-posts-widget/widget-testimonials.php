<?php
/**
 * Flexible Posts Widget: Default widget template
 */

// Block direct requests
if ( !defined('ABSPATH') )
	die('-1');

echo $before_widget;

if ( !empty($title) )
	echo $before_title . $title . $after_title;

if( $flexible_posts->have_posts() ):
?>
	<?php while( $flexible_posts->have_posts() ) : $flexible_posts->the_post(); global $post; ?>
			<div class="textwidget">
				<blockquote> <?php
				                   if ( ! has_excerpt() ) {
				                   	the_content();
				                   } else {
				                   	echo '<p>' . get_the_excerpt() .  ' &nbsp; <a class="readmore" href="' . get_permalink() . '">Read more &raquo;</a></p>';
				                   }
				                    
				                  ?>
				                  <?php if (function_exists('get_field')) {
				              		echo '<span style="font-weight:700;">';
				              		//the_field('attribution');
				              		the_title();
				              		echo '</span>';
				              		if (get_field('about')) {
				              			echo '<br />';
				              			the_field('about');
				              		}
				              	} ?>
				              	</blockquote>
			</div>
	<?php endwhile; ?>
	<!-- <a class="readmore inwidget" href="<?php bloginfo('url'); ?>/testimonials">Read other testimonials</a> -->

<?php else: // We have no posts ?>
	<div class="dpe-flexible-posts no-posts">
		<p><?php _e( 'No post found', 'flexible-posts-widget' ); ?></p>
	</div>
<?php	
endif; // End have_posts()
	
echo $after_widget;
