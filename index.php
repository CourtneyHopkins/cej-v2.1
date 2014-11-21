<?php get_header(); ?>

			<div id="content">
				<div id="inner-content" class="wrap cf">
					<div class="page-header">
						<span>Journal</span>
						<div class="divider"></div>
					</div>
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<article>
						<a href="<?php the_permalink() ?>" class="cf">
							<div class="meta-circle">
								<span><?php echo get_the_time('j M'); ?></span><br>
								<?php echo get_the_time('Y'); ?> 
							</div>
							<section>
								<h1 class="h2 entry-title"><?php the_title(); ?></h1>
								<?php //the_content(); ?>
							</section>
						</a>
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
										<p><?php _e( 'This is the error message in the index.php template.', 'bonestheme' ); ?></p>
								</footer>
							</article>
					<?php endif; ?>
				</div>
			</div>

<?php get_footer(); ?>
