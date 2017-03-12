<?php
/*
 * Template Name: Events Page 
 */
get_header(); 

	


?>
	<div id="mainContent">
		<?php /* The loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>

			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="entry-header">
					<h1 class="entry-title"><?php the_title(); ?></h1>
				</div><!-- .entry-header -->

				<div id="event_list_box" class="entry-content">

						<?php the_content(); ?>
					
				</div><!-- .entry-content -->

			</div><!-- #post -->

			<?php 
			//comments_template(); 
			?>
		<?php endwhile; ?>
	</div>

	<div id="sideBar"><?php get_sidebar('home'); ?></div>
	
<?php get_footer(); ?>