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

		<h3><?php printf( 'Search Results for: %s', get_search_query() ); ?></h3>
		<div class="navigation">
			<div class="alignleft"><?php previous_posts_link('&laquo; Previous Entries') ?></div>
			<div class="alignright"><?php next_posts_link('Next Entries &raquo;','') ?></div>
		</div>
		<?php /* The loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>
		<?php
		$categories = get_the_category();
		$separator = ', ';
		$output = '';
		if($categories){
			foreach($categories as $category) {
				$output .= '<a href="'.get_category_link( $category->term_id ).'" title="' . esc_attr( sprintf( __( "View all posts in %s" ), $category->name ) ) . '">'.$category->cat_name.'</a>'.$separator;
			}
		$categoryList = trim($output, $separator);
		}
		?>
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="entry-header">

					<h1 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

				</div><!-- .entry-header -->

				<div class="entry-content clearfix">
					<div class="entry-topic smInfo">Topic: <?php echo $categoryList; ?></a></div>
						<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
						<div class="entry-thumbnail">
							<?php the_post_thumbnail(); ?>
						</div>
						<?php endif; ?>
						<?php the_advanced_excerpt('length=200&use_words=0&no_custom=0&ellipsis=%26hellip;&allowed_tags=strong,em'); ?>
					<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . 'Pages:' . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
				</div><!-- .entry-content -->

			</div><!-- #post -->

			<?php 
			//comments_template(); 
			?>
		<?php endwhile; ?>
		<div class="navigation">
			<div class="alignleft"><?php previous_posts_link('&laquo; Previous Entries') ?></div>
			<div class="alignright"><?php next_posts_link('Next Entries &raquo;','') ?></div>
		</div>
	</div>
	<div id="sideBar"><?php get_sidebar(); ?></div>

	
<?php get_footer(); ?>