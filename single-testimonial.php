<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap cf">

					<div id="main" class="m-all t-2of3 d-5of7 cf" role="main">

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

				                <header class="article-header">

				                  <h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>

				                </header> <?php // end article header ?>
				                <?php if ( function_exists('yoast_breadcrumb') ) {
									yoast_breadcrumb('<p id="breadcrumbs">','</p>');
								} ?>


				                <section class="entry-content cf" itemprop="articleBody">
				                 <blockquote> <?php
				                    // the content (pretty self explanatory huh)
				                    the_content();
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
				              	
				                </section> <?php // end article section ?>


				              </article> <?php // end article ?>

						<?php endwhile; ?>

						<?php else : ?>

							<article id="post-not-found" class="hentry cf">
									<header class="article-header">
										<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
									</header>
									<section class="entry-content">
										<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
									</section>
									<footer class="article-footer">
											<p><?php _e( 'This is the error message in the single.php template.', 'bonestheme' ); ?></p>
									</footer>
							</article>

						<?php endif; ?>

					</div>

					<?php get_sidebar(); ?>

				</div>

			</div>

<?php get_footer(); ?>
