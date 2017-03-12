<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('container homePosts'); ?>>
	<?php if ( is_single() ) : ?>
	<?php
		$categories = get_the_category(the_ID());
		$separator = ', ';
		$output = '';
		if($categories){
			foreach($categories as $category) {
				$output .= '<a href="'.get_category_link( $category->term_id ).'" title="' . esc_attr( sprintf( __( "View all posts in %s" ), $category->name ) ) . '">'.$category->cat_name.'</a>'.$separator;
			}
			$categoryList = trim($output, $separator);
		}
		?>
	<h1 class="entry-title"><?php the_title(); ?></h1>
	<?php else : ?>
	<h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
	<?php endif; // is_single() ?>

	<div class="entry-content clearfix">
		<div class="entry-topic smInfo">Topic: <?php echo $categoryList; ?></div>
			<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
			<div class="entry-thumbnail">
				<?php the_post_thumbnail(); ?>
			</div>
			<?php endif; ?>
			<p class="entry-excerpt"><?php the_advanced_excerpt('length=200&use_words=0&no_custom=0&ellipsis=%26hellip;&allowed_tags=strong,em'); ?></p>
		<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . 'Pages:' . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
	</div><!-- .entry-content -->
</article><!-- #post -->
