<?php
get_header(); ?>
	<div id="mainContent">

		<?php if ( have_posts() ) : ?>

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
			<article id="post-<?php the_ID(); ?>" <?php post_class('container homePosts'); ?>>
				<?php if ( is_single() ) : ?>
				<h1 class="entry-title entry-title-single"><?php the_title(); ?></h1>
				<?php else : ?>
				<h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
				<?php endif; // is_single() ?>

				<div class="entry-content clearfix">
					<div class="entry-topic smInfo">Topic: <?php echo $categoryList; ?> | Author: <span class="author"><?php the_author(); ?></span> | Date: <?php the_date(); ?></div>
					<?php if ( is_single() ) { ?>
						<?php the_content(); ?>
						<span class='st_twitter_large' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>' displayText='twitter'></span><span class='st_facebook_large' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>' displayText='facebook'></span><span class='st_plusone_large' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>' displayText='plusone'></span><span class='st_sharethis_large' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>' displayText='sharethis'></span><span class='st_email_large' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>' displayText='email'></span>
					<?php } else { ?>
						<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
						<div class="entry-thumbnail">
							<?php the_post_thumbnail(); ?>
						</div>
						<?php endif; ?>
						<?php the_advanced_excerpt( array( 'before' => '<p class="entry-content">' .'length=200&use_words=0&no_custom=0&ellipsis=%26hellip;&allowed_tags=strong,em' , 'after' => '</p>')); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . 'Pages:' . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
					<?php } ?></p>
				</div><!-- .entry-content -->
			</article><!-- #post -->
		<?php endwhile; ?>
		<?php 
			comments_template(); 
			?>
		
		<div class="articles-nav">
				<?php
          global $wp_query;  
  
          $total_pages = $wp_query->max_num_pages;  
            
          if ($total_pages > 1){  
            
            $current_page = max(1, get_query_var('paged'));  
              
            echo '<div class="post_page_nav">';  
              
            echo paginate_links(array(  
                'base' => get_pagenum_link(1) . '%_%',  
                'format' => '/page/%#%',  
                'current' => $current_page,  
                'total' => $total_pages,  
                'prev_text' => 'Prev',  
                'next_text' => 'Next'  
              ));  
            
            echo '</div>';  
              
          }  
        ?>
			</div>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>

	</div>

	<div id="sideBar"><?php get_sidebar(); ?></div>
	
<?php get_footer(); ?>