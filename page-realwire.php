<?php
/*
 * Template Name: Press Releases
 */
get_header(); ?>

	<div id="mainContent">
			<?php realWire_rss(); ?>   
	</div>
	<div id="sideBar"><?php get_sidebar('home'); ?></div>
	
<?php get_footer(); ?>