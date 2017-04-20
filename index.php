
		<?php get_header(); ?>

			<div class="post clearfix">
				<ul>
				<?php if ( have_posts() ) : ?>  <!-- https://codex.wordpress.org/The_Loop -->
				    <?php while ( have_posts() ) : the_post(); ?>
				    	<li class="post_list">
					    	<div class="post_thumbnail">
					    	<?php
							
							if ( has_post_thumbnail()) {		//checks if a featured image exist if yes display full size of the image
								the_post_thumbnail('full');		// output is equal to <img src=“” />
							}
							
							?>
							</div>
							<div class="post_content">
					        <h2><?php the_title(); ?></h2>  <!-- https://codex.wordpress.org/Template_Tags -->
					        <p><?php the_excerpt(); ?></p>
					        </div>
					    </li>
				    <?php endwhile; ?>
				<?php endif; ?>
				</ul>
			</div>

		<?php get_footer(); ?>