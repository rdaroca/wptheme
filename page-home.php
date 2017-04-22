<!-- Page template for HOME -->
<?php get_header(); ?>

<!-- 		<div class="main_content clearfix">

			<div class="featured clearfix">
				<div class="featured_product">
					<a href="#"><img src="../Static Page copy/images/fproduct512.png"></a>
				</div>

				<div class="featured_content">
					<h1>Horizon</h1>
					<h2>ZeroDawn</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. <a href="#" class="readmore">ReadMore</a></p>
				</div>

			</div>

			<div class="other_products clearfix">
				<ul class="listings">
					<li class="post_wrapper">
						<div class="thumbnail">
							<img src="../Static Page copy/images/uncharted4.png">
						</div>
						<h2>Uncharted 4</h2>
						<h3>Lorem ipsum dolor sit amet, consectetur adipiscsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. <a href="#" class="readmore">ReadMore</a></h3>
					</li>

					<li class="post_wrapper">
						<div class="thumbnail">
							<img src="../Static Page copy/images/darksouls3.png">
						</div>
						<h2>DarkSouls 3</h2>
						<h3> In omnis habemus similique vix. Mel te quodsi adipiscing, nostro commodo mediocrem per cu, quo natum tempor libris ex. Fugit decore labores cu cum, inani denique quaerendum sit ut, in vel dicant audire dignissim. Vix ex convenire complectitur, sit phaedrum reprehendunt id, <a href="#" class="readmore">ReadMore</a></h3>
					</li> 

					<li class="post_wrapper">
						<div class="thumbnail">
							<img src="../Static Page copy/images/metalgear.png">
						</div>
						<h2>Metal Gear</h2>
						<h3>Lorem ipsum dolor sit amet, consectetur adipiscsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. <a href="#" class="readmore">ReadMore</a></h3>
					</li>

				</ul>

			</div>

		</div> -->

<div class="main_content clearfix">
	<div class="featured clearfix">

	<?php 
	//Tells WP to display only 1 page and get it from Featured product category
	$args = array( 'posts_per_page' => 1, 'category_name' => 'featured-product' );
	// The Query
	$the_query = new WP_Query( $args );

	// The Loop
	if ( $the_query->have_posts() ) {
		
		while ( $the_query->have_posts() ) {
			$the_query->the_post(); ?>

			<div class="featured_product">
				<?php
				
				if ( has_post_thumbnail()) {		//checks if a featured image exist if yes display full size of the image
					the_post_thumbnail('full');		// output is equal to <img src=“” />
				}
				
			?>

			</div>

			<div class="featured_content">
				<h2><?php the_title(); ?></h2>		<!-- Displays the tile of the post -->
				<?php $sub_heading = get_post_meta(get_the_ID(), 'Sub Heading', true); ?> 
				<h4 class="sub"><?php echo $sub_heading ?></h4> <!-- Displays the Subheading of the post -->

				<p>
					<?php the_excerpt(); ?><!-- Displays the excerpt of the post -->
				</p>
			</div>
	</div>

		<?php }

	} ?>

	<div class="other_products clearfix">
		<ul class="Listings">
		<?php

		$args = array( 'posts_per_page' => 3, 'category_name' => 'other-products' );
		// The Query
		$the_query = new WP_Query( $args );
		
		// The Loop
		if ( $the_query->have_posts() ) {
			
			while ( $the_query->have_posts() ) {
				$the_query->the_post();
		?>
		
				<li class="post_wrapper">
					<div class="thumbnail">
						<?php

							if ( has_post_thumbnail()) {		//checks if a featured image exist if yes display full size of the image
								the_post_thumbnail('full');		// output is equal to <img src=“” />
							}																	
						?>
					</div>
						<h2>
							<a href="<?php the_permalink(); ?>"> <!-- this would make the title a link of the post -->
								<?php the_title(); ?>  <!-- this would dispay the title of the post -->
							</a>
						</h2>
							<?php the_excerpt(); ?> <!-- this would dispay an exerpt of the post -->

				</li>
			<?php }
		}	?>	



		</ul>

	</div>
</div>


<?php get_footer(); ?>