<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 */
get_header(); ?>

	<div id="mainContent" class="catPage">
		<h1 class="entry-title">Not Found</h1>
		<div class="entry-content">
    	<p class="center">Sorry, but you are looking for something that isn't here or has moved. Click <a onclick="history.back(-1)">here</a> to go back or try your search again.</p>
    	<form method="get" class="searchform" action="<?php bloginfo('url'); ?>/">
		<input type="text" value="<?php the_search_query(); ?>" name="s" class="searchfield" />
		<input type="submit" class="searchsubmit" value="Search"></input>
		</form>

    	</div>
	</div>
	<div id="sideBar"><?php get_sidebar(); ?></div>

	
<?php get_footer(); ?>