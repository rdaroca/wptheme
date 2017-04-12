
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


		<?php if ( have_posts() ) : ?>  <!-- https://codex.wordpress.org/The_Loop -->
		    <?php while ( have_posts() ) : the_post(); ?>

		        <h2><?php the_title(); ?></h2>  <!-- https://codex.wordpress.org/Template_Tags -->
		        <p><?php the_excerpt(); ?></p>

		    <?php endwhile; ?>
		<?php endif; ?>


		<?php get_footer(); ?>