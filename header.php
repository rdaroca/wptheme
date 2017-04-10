<?php ?>

<!DOCTYPE html>
<html>
<head>
	<title><?php echo get_bloginfo('name') ?> </title>
	<link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('stylesheet_url'); ?>"> 
	
	<?php wp_head(); ?>

</head>
<body>
	<div class="container">

		<div class="header clearfix">

			<div class="logo">
				<?php theme_prefix_the_custom_logo(); ?>
			</div>

 			<?php

				if ( has_nav_menu('header-menu') ) {
			 		wp_nav_menu( array( 
			 		'theme_location' => 'header-menu', 
			 		'container_class' => 'main_menu clearfix') );
			}
			
			?> 

		</div>