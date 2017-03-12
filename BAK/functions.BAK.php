<?php

/* Global Variables to make templates easier */
define( "IMAGEPATH",get_template_directory_uri() . "/img" );
define( "SITEPATH", esc_url(home_url()) );

remove_action ('wp_head', 'wp_generator');
remove_action('wp_head', 'wlwmanifest_link');
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
remove_action( 'wp_head', 'feed_links', 2 );
remove_action( 'wp_head', 'feed_links_extra', 3 );

if( !is_admin()){
   wp_deregister_script('jquery');
   wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"), false, '1.7.1');
   wp_enqueue_script('jquery');
}

// Hide admin bar on subscription iframe page
if ( is_page('subscribe-form') ) {
	show_admin_bar( false );
	add_filter('show_admin_bar', '__return_false');
}
// Function to limit words displayed for excerpts
function string_limit_words($string, $word_limit) {
  $words = explode(' ', $string, ($word_limit + 1));
  if (count($words) > $word_limit) {
    array_pop($words);
    echo implode(' ', $words)."...";
  } else {
    echo implode(' ', $words);
  }
}

function my_comment_form_args() {
	$args = array(
		'comment_notes_after' => ''
	);
	return $args;
}

// Adds featured contributors to the Homepage, displaying their latest post, user image, twitter link, facebook link, and link to rss feed
//  References $do_not_duplicate array in order to avoid repeated content.
function contributor( $authID ) {
  $authorID = $authID;
  $args = array ( 'author' => $authorID, 'posts_per_page' => 1 );
  global $contribQuery;
  $contribQuery = new WP_Query($args);
  while ($contribQuery->have_posts()) : $contribQuery->the_post();
    ?>
    <h1 class="entry-title"><a href="<?php bloginfo('url'); ?>/author/<?php echo get_the_author_meta('user_nicename'); ?>"><?php the_author(); ?></a></h1>
    <?php
  $authDesc = get_the_author_meta('user_description');
  ?>
  	<div class="entry-content">
  		<div class="entry-thumbnail"><?php userphoto_the_author_thumbnail(); ?></div>
	    <p><?php echo string_limit_words($authDesc, 30 );?>
	    <a href="<?php bloginfo('url'); ?>/author/<?php echo get_the_author_meta('user_nicename'); ?>" ><i>Read more &raquo;</i></a></p>
	</div>

    <?php
  endwhile;
}


// Get Posts From Category In List Format
function getCatPostsList($cat,$max){
	$postQuery = new WP_Query( 'posts_per_page='.$max.'&cat='.$cat);
	if ( $postQuery->have_posts() ) {
		while ( $postQuery->have_posts() ) {
			$postQuery->the_post();

			if ( has_post_thumbnail() && ! post_password_required() ) {
				$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID));
				$thumb_url = $thumb['0'];

				$postList .= "<li><a href='".get_permalink()."' class=\"clearfix\"><div class=\"sideThumb\"><img src=\"".$thumb_url."\" /></div><div class=\"sideLink\">".get_the_title()."</div></a></li>";
			} else {
				$postList .= "<li><a href='".get_permalink()."'>".get_the_title()."</a></li>";
			}
		}
		return $postList;
	} else {
		return false;
	}
}

/*
// Customize the excerpt
function new_excerpt_more( $more ) {
	return ' &hellip; <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">Keep reading &raquo;</a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );
*/

// Adds Real Wire RSS content to Homepage.
function realWire_rss_home() {
  include_once(ABSPATH . WPINC . '/rss.php');
  $rss = fetch_rss('http://www.realwire.com/rss/pub/?feed=44925809');
  $items = array_slice($rss->items, 0, 12);
  $i = 0;
  echo '<ul class="pressExcerpt container qPager">';
  foreach ($items as $item) {
  $more = $item['link'];
	echo '<li class="clearfix">';
		echo '<div class="prInfo">';
			echo '<p class="prTitle"><a href="'.$more.'" title="'.$d.'" target="_blank">'.htmlentities($item['title'], ENT_NOQUOTES, 'UTF-8').'</a></p>';
		echo '<div class="prDate">';
			echo '<p>Date: '.Date("m/d/Y",strtotime($item['pubdate'] . "C")).'</p>';
		echo '</div>';
			echo '<p>'.trim(substr(strip_tags($item['summary']), 0, 250)).' &#8230;&nbsp; <a href="'.$more.'" title="'.$d.'">Read more &raquo;</a></p>';
		echo '</div>';
	echo '</li>';

  $i++;
  }
  //echo '<div class="more-link"><a href="/real-wire/>See Latest Posts</a></div>';
  echo '</ul>';
}

function realWire_rss() {
  include_once(ABSPATH . WPINC . '/rss.php');
  $rss = fetch_rss('http://www.realwire.com/rss/pub/?feed=44925809');
  $items = array_slice($rss->items, 0, 20);
  $i = 0;
  foreach ($items as $item) {
  echo '<div class="pressPost">';
  $more = $item['link'];
			echo '<h1 class="entry-title"><a href="'.$more.'" title="'.$d.'">'.htmlentities($item['title'], ENT_NOQUOTES, 'UTF-8').'</a></h1>';
      echo '<p class="prDate">'.substr($item['pubdate'], 0, -12).'</p>';
			echo '<p>'.$item['description'].'</p>';
  //echo '<div class="more-link"><a href="/real-wire/#'.$more.'" title="'.$d.'">Read More</a></div>';
  echo '</div>';
  $i++;
  }
}

/**
 * Sets up theme defaults and registers the various WordPress features that
 * this theme supports.
*/
function theme_setup() {

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	add_editor_style( array( 'css/editor-style.css' ) );

	// Adds RSS feed links to <head> for posts and comments.
	add_theme_support( 'automatic-feed-links' );

	// Switches default core markup for search form, comment form, and comments
	// to output valid HTML5.
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list' ) );

	/*
	 * This theme supports all available post formats by default.
	 * See http://codex.wordpress.org/Post_Formats

	add_theme_support( 'post-formats', array(
		'aside', 'audio', 'chat', 'gallery', 'image', 'link', 'quote', 'status', 'video'
	) );*/

	// This theme uses wp_nav_menu() in one location.
	register_nav_menu( 'primary', 'Navigation Menu' );

	/*
	 * This theme uses a custom image size for featured images, displayed on
	 * "standard" posts and pages.
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 604, 270, true );

	// This theme uses its own gallery styles.
	add_filter( 'use_default_gallery_style', '__return_false' );

}
add_action( 'after_setup_theme', 'theme_setup' );


/**
 * Enqueues scripts and styles for front end.
 */
function theme_scripts_styles() {
	// Adds JavaScript to pages with the comment form to support sites with
	// threaded comments (when in use).
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) { wp_enqueue_script( 'comment-reply' ); }

	// Loads JavaScript file with functionality specific to Twenty Thirteen.
	// Loads JavaScript file with functionality specific to Twenty Thirteen.
	wp_enqueue_script( 'theme-script-migrate', get_template_directory_uri() . '/js/jquery-migrate-1.2.1.min.js', array( 'jquery' ), true );
	wp_enqueue_script( 'theme-script-tweenmax', get_template_directory_uri() . '/js/TweenMax.min.js', array( 'jquery' ), true );
	wp_enqueue_script( 'theme-script-slick', get_template_directory_uri() . '/slick/slick.min.js', array( 'jquery' ), true );
	wp_enqueue_script( 'theme-script-ui', get_template_directory_uri() . '/js/jquery-ui-1.10.3.custom.min.js', array( 'jquery' ), true );
	wp_enqueue_script( 'theme-script-mousewheel', get_template_directory_uri() . '/js/jquery.mousewheel.min.js', array( 'jquery' ), true );
	wp_enqueue_script( 'theme-script-kinetic', get_template_directory_uri() . '/js/jquery.kinetic.min.js', array( 'jquery' ), true );
	wp_enqueue_script( 'theme-script-smooth', get_template_directory_uri() . '/js/jquery.smoothdivscroll-1.3-min.js', array( 'jquery' ), true );
	wp_enqueue_script( 'theme-script', get_template_directory_uri() . '/js/main.js', array( 'jquery' ), true );
	wp_enqueue_script( 'theme-script-twitter', get_template_directory_uri() . '/js/jquery.twitter.js', array( 'jquery' ), true );
	wp_enqueue_script( 'theme-script-modal', get_template_directory_uri() . '/js/jquery.modal.js', array( 'jquery' ), true );
	// Load jquery pagination on Press Release page
	if ( is_front_page() ) {
		wp_enqueue_script( 'theme-script-pagination', get_template_directory_uri() . '/js/jquery.quickpager.js', array( 'jquery' ), true );
	}

}
add_action( 'wp_enqueue_scripts', 'theme_scripts_styles' );

/**
 * Creates a nicely formatted and more specific title element text for output
 * in head of document, based on current view.
 * @param string $title Default title text for current view.
 * @param string $sep Optional separator.
 * @return string The filtered title.
 */
function theme_wp_title( $title, $sep ) {
	global $paged, $page;

	if ( is_feed() )
		return $title;

	// Add the site name.
	$title .= get_bloginfo( 'name' );

	// Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		$title = "$title $sep $site_description";

	// Add a page number if necessary.
	if ( $paged >= 2 || $page >= 2 )
		$title = "$title $sep " . sprintf( 'Page %s', max( $paged, $page ) );

	return $title;
}
add_filter( 'wp_title', 'theme_wp_title', 10, 2 );

/**
 * Registers two widget areas.
 */
function theme_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Main Sidebar', 'theme' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Appears in the sidebar section of the site.', 'theme' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer Section', 'theme' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Appears on posts and pages in the sidebar.', 'theme' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );

	register_sidebar( array(
		'name'          => __( 'Constant Contact', 'theme' ),
		'id'            => 'cc_modal',
		'description'   => __( 'Subscribe Modal', 'theme' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );

	// Sponsor Ads
	register_sidebar(array(
	    'name' => 'Sponsor Ads',
	    'before_title' => '',
    	'after_title' => '',
    	'before_widget' => '',
		'after_widget'  => '',
	    'id' => 'sponsor-ads'
	));
	// Partner Ads
	register_sidebar(array(
	    'name' => 'Partner Ads',
	    'before_title' => '<h3 class="partnerHead">',
    	'after_title' => '</h3>',
    	'before_widget' => '',
		'after_widget'  => '',
	    'id' => 'partner-ads'
	));
}
add_action( 'widgets_init', 'theme_widgets_init' );

// Adds new fields to user profile. Use " echo $curauth->twitter;, etc " to access in templates.
function new_user_fields( $contactmethods ) {
  $contactmethods['twitter'] = 'Twitter (Full URL)';
  $contactmethods['facebook'] = 'Facebook (Full URL)';
  $contactmethods['googleplus'] = 'Google+ (Full URL)';
  $contactmethods['linkedin'] = 'LinkedIn (Full URL)';
  $contactmethods['pinterest'] = 'Pinterest (Full URL)';
  //$contactmethods['rss'] = 'RSS Feed (Full URL)';

  return $contactmethods;
}
add_filter('user_contactmethods','new_user_fields',10,1);

// Pagination Links
function pagination($pages = '', $range = 4)
{
     $showitems = ($range * 2)+1;

     global $paged;
     if(empty($paged)) $paged = 1;

     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }

     if(1 != $pages)
     {
         echo "<div class=\"pagination\"><span>Page ".$paged." of ".$pages."</span>";
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo; First</a>";
         if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo; Previous</a>";

         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? "<span class=\"current\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a>";
             }
         }

         if ($paged < $pages && $showitems < $pages) echo "<a href=\"".get_pagenum_link($paged + 1)."\">Next &rsaquo;</a>";
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>Last &raquo;</a>";
         echo "</div>\n";
     }
}
