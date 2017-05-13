<div class="footer clearfix">

			<div class="Copyright">

				<p>© Copyright 2017 PS4 </p>
		
			</div>

			<div class="footer_links">

 			<?php

				if ( has_nav_menu('footer-menu') ) {
			 		wp_nav_menu( array( 
			 		'theme_location' => 'footer-menu', 
			 		'container_class' => 'footer clearfix') );
			}
			
			?> 

			</div>

		</div>



	</div><!--  div container -->
	
	<?php wp_footer(); ?>

</body>
</html>