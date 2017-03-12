<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 */
get_header(); ?>

	<div id="mainContent">
		<?php /* The loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>

			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="entry-header">
					<h1 class="entry-title"><?php the_title(); ?></h1>
				</div><!-- .entry-header -->

				<div class="entry-content">

						<?php the_content(); ?>

						<span class='st_twitter_large' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>' displayText='twitter'></span><span class='st_facebook_large' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>' displayText='facebook'></span><span class='st_plusone_large' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>' displayText='plusone'></span><span class='st_sharethis_large' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>' displayText='sharethis'></span><span class='st_email_large' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>' displayText='email'></span>
					
				</div><!-- .entry-content -->

			</div><!-- #post -->

			<?php 
			comments_template(); 
			?>
		<?php endwhile; ?>
	</div>
	<div id="sideBar"><?php get_sidebar(); ?></div>

	
<?php get_footer(); ?>