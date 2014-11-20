<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap cf">

						<div id="main" class="m-all t-2of3 d-5of7 cf" role="main">

							
							    	<h1 class="page-title"><?php post_type_archive_title(); ?></h1>
							    	<?php if ( function_exists('yoast_breadcrumb') ) {
									yoast_breadcrumb('<p id="breadcrumbs">','</p>');
								} ?>

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">


								<section class="entry-content cf">

									 <blockquote> <?php
				                   //if ( ! has_excerpt() ) {
				                   	the_content();
				                  /* } else {
				                   	echo '<p>' . get_the_excerpt() .  ' &nbsp; <a class="readmore" href="' . get_permalink() . '">Read more &raquo;</a></p>';
				                   } */
				                    
				                  ?>
				                  <?php if (function_exists('get_field')) {
				              		echo '<span style="font-weight:700;">';
				              		the_field('attribution');
				              		echo '</span>';
				              		if (get_field('about')) {
				              			echo '<br />';
				              			the_field('about');
				              		}
				              	} ?>
				              	</blockquote>


								</section>

								<footer class="article-footer">

								</footer>

							</article>

							<?php endwhile; ?>

									<?php bones_page_navi(); ?>

							<?php else : ?>

									<article id="post-not-found" class="hentry cf">
										<header class="article-header">
											<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
										<section class="entry-content">
											<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the archive.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>

						</div>

					<?php get_sidebar(); ?>

				</div>

			</div>

<?php get_footer(); ?>
