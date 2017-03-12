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

    <?php 
      $curauth = (get_query_var('author_name')) ? get_user_by('slug', get_query_var('author_name')) : get_userdata(get_query_var('author'));
      $authDesc = $curauth->description;;
      $authID = $curauth->ID;
      $authFacebook = get_user_meta( $authID, 'facebook',true);
      $authTwitter = get_user_meta( $authID, 'twitter',true);
      $authLinkedIN = get_user_meta( $authID, 'linkedin',true);
      $authPintrest = get_user_meta( $authID, 'pintrest',true);
        //'the_author_meta();' Use data entered into User's Personal Options Fields (Profile Data)
        //  http://codex.wordpress.org/Function_Reference/the_author_meta
      if (!empty($authDesc)) { 
    ?>
      <div class="fullPost authDesc clearfix">
        <h2>About the Author: <?php echo $curauth->display_name; ?></h2>
        <?php userphoto_the_author_thumbnail(); ?>
        <p><?php echo $authDesc; ?></p>
        <div class="socialLinks">
          <ul>
            <li><a href="<?php bloginfo('url'); ?>/author/<?php echo $curauth->user_nicename; ?>/feed" class="rss icon-social icon-rss">RSS</a></li>
            <?php if ( $authFacebook != "" ) { ?>
            <li><a href="<?php echo $authFacebook; ?>" class="facebook icon-social icon-facebook">Facebook</a></li>
            <?php } ?>
            <?php if ( $authTwitter != "" ) { ?>
            <li><a href="<?php echo $authTwitter; ?>" class="twitter icon-social icon-twitter">Twitter</a></li>
            <?php } ?>
            <?php if ( $authLinkedIN != "" ) { ?>
            <li><a href="<?php echo $authLinkedIN; ?>" class="linkedIn icon-social icon-linkedin">LinkedIn</a></li>
            <?php } ?>
            <!--<li><a href="<?php the_author_meta('googleplus'); ?>" class="googleplus">Google+</a></li>-->
            <?php if ( $authPintrest != "" ) { ?>
            <li><a href="<?php echo $authPintrest; ?>" class="pinterest icon-social icon-pintrest">Pinterest</a></li>
            <?php } ?>
          </ul>
        </div>
      </div>
      <?php } ?>

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
            <?php the_advanced_excerpt('length=200&use_words=0&no_custom=0&ellipsis=%26hellip;&allowed_tags=strong,em'); ?>
          <?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . 'Pages:' . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
        </div><!-- .entry-content -->
      </article><!-- #post -->
    <?php endwhile; ?>
    
    <div class="articles-nav">
        <p class="articles-nav-prev"><?php next_posts_link('&larr; Older Posts'); ?></p>
        <p class="articles-nav-next"><?php previous_posts_link('Newer Posts &rarr;'); ?></p>
      </div>

    <?php else : ?>
      <?php get_template_part( 'content', 'none' ); ?>
    <?php endif; ?>

  </div>
  <div id="sideBar"><?php get_sidebar(); ?></div>

  
<?php get_footer(); ?>