

<?php 
/*
Template Name: products
*/
get_header(); ?>


	<?php 

	// this is for the pagination
	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

	//Tells WP to display only 1 page and get it from Featured product category
	$args = array( 'posts_per_page' => 3, 'post_type' => 'post', 'paged' => $paged );
	
	// The Query
	$the_query = new WP_Query( $args );
	?>

	<div class="post clearfix">
		<ul>

		<?php if ( $the_query->have_posts() ) {
		
		while ( $the_query->have_posts() ) {
			$the_query->the_post(); ?>

			<li class="post_list">
		    	<div class="post_thumbnail">
		    	<?php
				
				if ( has_post_thumbnail()) {		//checks if a featured image exist if yes display full size of the image
					the_post_thumbnail('300x210');		// output is equal to <img src=“” />
				}
				
				?>
				</div>
				<div class="post_content">
		        <h2><?php the_title(); ?></h2>  <!-- https://codex.wordpress.org/Template_Tags -->
		        <p><?php the_excerpt(); ?></p>
		        </div>
			</li>

		<?php }

		} ?>
			<!-- this is for the pagination -->
			<?php
			echo "<div class='pagination' style='clear:both;'>";
			// pagination
		
				$big = 999999999; // need an unlikely integer
				 
				echo paginate_links( array(
				    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
				    'format' => '?paged=%#%',
				    'current' => max( 1, get_query_var('paged') ),
				    'total' => $the_query->max_num_pages
				) );


			echo "</div>";
			?>

		</ul>
	</div>

<?php get_footer(); ?>