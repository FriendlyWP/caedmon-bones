			<footer class="footer" role="contentinfo">

				<div id="inner-footer" class="wrap cf">

					<?php if ( is_active_sidebar( 'footer-widgets' ) ) { ?>

						<div class="footer-widgets">

							<?php dynamic_sidebar( 'footer-widgets' ); ?>

						</div>

					<?php } ?>

					<?php if (!wp_is_mobile()) { ?>
						<nav role="navigation" class="foot-nav">
						<?php wp_nav_menu(array(
    					'container' => '',                              // remove nav container
    					'container_class' => 'footer-links cf',         // class of container (should you choose to use it)
    					'menu' => __( 'Footer Links', 'bonestheme' ),   // nav name
    					'menu_class' => 'nav footer-nav cf',            // adding custom nav class
    					'theme_location' => 'footer-links',             // where it's located in the theme
    					'before' => '',                                 // before the menu
	        			'after' => '',                                  // after the menu
	        			'link_before' => '',                            // before each link
	        			'link_after' => '',                             // after each link
	        			'depth' => 0,                                   // limit the depth of the nav
    					'fallback_cb' => 'bones_footer_links_fallback'  // fallback function
						)); ?>
					</nav>
					<?php } else { ?>
						<p style="text-align: center;"><a href="#top">Back to Top</a></p>
					<?php } ?>
					<?php if (function_exists('get_field') && get_field('copyrighted', 'option')) {
						?>
						<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <span><?php the_field('copyrighted', 'option' ); ?></span></p>
						<?php
					} else { ?> 
						<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?></p>
					<?php } ?>

					<?php if (function_exists('get_field') && get_field('street_address', 'option')) {
						
						?>
						<div itemscope itemtype="http://schema.org/Organization" class="organization-address">
							<span itemprop="name" class="hide"><?php the_field('copyrighted', 'option' ); ?></span>
							<div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
						      <span itemprop="streetAddress"><?php the_field('street_address', 'option'); ?></span>,
						      <span itemprop="addressLocality"><?php the_field('city', 'option'); ?></span>,
						      <span itemprop="addressRegion"><?php the_field('state', 'option'); ?></span>
						      <span itemprop="postal-code"><?php the_field('zip', 'option'); ?></span>
						   </div>
						   <div class="contact">
						   		<?php if (get_field('phone', 'option')) { ?>
						   			<span class="item">Phone: <span itemprop="telephone"><?php the_field('phone', 'option'); ?></span></span>
						   		<?php } ?>
							   <?php if (get_field('contact_email', 'option')) { 
							   	$email = get_field('contact_email', 'option'); ?>
							   		<span class="item"><a href="mailto:<?php echo antispambot($email); ?>" target="_blank" itemprop="email">Email Us</a></span>
							   <?php } ?>
							   <?php if (get_field('contact_page_link', 'option')) { ?>
							   		<span class="item"><a href="<?php the_field('contact_page_link', 'option'); ?>">Contact Us</a></span>
							   <?php } ?>
							</div>
						</div>
						<?php
					} else { ?> 

					<?php } ?>


				

			

			</div><!-- #inner-footer-->
			</footer>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

	</body>

</html> <!-- end of site. what a ride! -->
