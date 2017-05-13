

<?php 
/*
Template Name: product-games
*/
get_header(); ?>


	<?php 
	//Tells WP to display only 1 page and get it from Featured product category
	$args = array( 'category_name' => 'games' );
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

		</ul>
	</div>

<?php get_footer(); ?>