<?php
/*
 * Template Name: Columnists Page 
 */
get_header(); 

	


?>
	<div id="mainContent" class="catPage">
        <?php 
          $contributors = array(102, 107, 126);
          shuffle($contributors);
          foreach ($contributors as $contributor) {
            contributor( $contributor, $do_not_duplicate );
          }
         ?>
	</div>

	<div id="sideBar"><?php get_sidebar('home'); ?></div>
	
<?php get_footer(); ?>