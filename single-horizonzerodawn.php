<?php get_header(); ?>
<div class="content-area clearfix">

			<?php
			while ( have_posts() ) : the_post();
			?>
			
<!-- 			Include the page content template. -->
			
			<div class="single_container">
				<div class="single_thumbnail">

				<?php
				if ( has_post_thumbnail() ) {
						the_post_thumbnail('large');
					}
				?>
				</div>

				<div class="single_content">

				<?php		
				the_title();
					the_content();

				endwhile; // End of the loop.
				?>
				</div>

			</div>
</div>

<?php get_footer(); ?>