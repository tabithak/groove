<?php
/*
 * Template Name: Home Page 
 */
get_header(); ?>

	<div id="mainContent">
    	
    
		<div class="featured-content row cf">
        	<div class="featured-primary featured-primary-box">
            	<div class="featured-primary featured-location">
                	<a href="http://www.forbes.com/sites/peggyannesalz/2016/01/12/why-mobile-video-advertising-will-eat-the-world/#227c64307868" class="featured-primary featured-tag" target="_blank">OUR WORK ON FORBES</a>
                    <a class="featured-primary featured-topic-icon featured-topic-icon-marketing">Topic: Mobile Marketing</a>
                </div>
            	<div class="featured-primary featured-article">
                	<div class="featured-primary featured-image"><img src="<?php echo IMAGEPATH; ?>/posts/mobile-video.jpg" alt="mobile video abstract"></div>
                    <h1 class="featured-primary featured-article-title"><a href="http://www.forbes.com/sites/peggyannesalz/2016/01/12/why-mobile-video-advertising-will-eat-the-world/#604290d97868" title="The Changing Economics of App Development" target="_blank">Why Mobile Video (Advertising) Will Eat The World</a></h1>
                    <p class="featured-primary featured-article-author">Author: <span class="author">Peggy Anne Salz</span></p>
                    <p class="featured-primary featured-article-content">Borrowing from the title of the milestone presentation Mobile is Eating the World (given by mobile analyst and authority Benedict Evans at Andreessen Horowitz's Tech Summit 2014) is the best way to describe how mobile video&mdash;powered by mobile programmatic&mdash;is poised to rock the digital world in 2016. Top line numbers show mobile video viewing is already eating into desktop’s leading share of video views. It’s a migration that can be attributed to the advance of high-speed 4G mobile networks that reduce latency, making mobile video accessible and enjoyable for more consumers in more markets.</p>
                </div>
           	</div>
            <div class="featured-secondary featured-secondary-box cf">
            	<div class="featured-secondary-single">
                	<div class="featured-secondary-single featured-location">
                		<a href="http://venturebeat.com/2015/12/09/the-next-opportunity-for-app-developers-turning-anonymous-data-into-ad-sales/" class="featured-primary featured-tag" target="_blank" title="The next opportunity for app developers: Turning anonymous data into ad sales">OUR WORK ON VENTUREBEAT</a>
                        <a class="featured-secondary-single featured-topic-icon featured-topic-icon-apps">Topic: Mobile Apps</a>
                    </div>
                    <div class="featured-secondary-single featured-article">
                    	<div class="featured-secondary-single featured-image"><img src="<?php echo IMAGEPATH; ?>/posts/business-apps.jpg" alt="business apps"></div>
                        <h2 class="featured-secondary-single featured-article-title"><a href="http://venturebeat.com/2015/12/09/the-next-opportunity-for-app-developers-turning-anonymous-data-into-ad-sales/" title="The next opportunity for app developers: Turning anonymous data into ad sales" target="_blank">The next opportunity for app developers: Turning anonymous data into ad sales</a></h2>
                    	<p class="featured-secondary-single featured-article-author">Author: <span class="author">Peggy Anne Salz</span></p>
                        <p class="featured-secondary-single featured-article-content">In the early days of the Internet, publishers made the transition from selling their inventory &mdash; allowing brands to wrap advertising around articles, pictures, and videos &mdash; to the far more lucrative business of selling the data they collected about the people browsing their sites. Fast forward, and mobile app publishers are at a similar crossroads.</p>
                    </div>
                </div>
                <div class="featured-secondary-group">
                	<div class="featured-secondary-group featured-location">
                        <span class="featured-secondary-group featured-tag">OUR WORK AROUND THE WEB</span>
                    </div>
                    <div class="featured-secondary-group featured-article cf">
                        <div class="sideThumb"><img class="featured-secondary-group featured-image" src="<?php echo IMAGEPATH; ?>/posts/nov15-04-fst067012-1200x675.jpg" alt="pixelated construction workers"></div>
                        <h3 class="featured-secondary-group featured-article-title"><a href="https://hbr.org/2015/11/the-changing-economics-of-app-development" title="The Changing Economics of App Development" target="_blank">The Changing Economics of App Development</a></h3>
                        
                    </div>
                    <div class="featured-secondary-group featured-article cf">
                    	<div class="sideThumb"><img class="featured-secondary-group featured-image" src="<?php echo IMAGEPATH; ?>/posts/NewsRepublic.jpg" alt="smartphone app displays"></div>
                        <h3 class="featured-secondary-group featured-article-title"><a href="https://digitalcontentnext.org/blog/2016/01/27/qa-gilles-raymond-news-republic-founder-and-ceo/" title="Q&A: Gilles Raymond, News Republic Founder and CEO" target="_blank">Q&amp;A: Gilles Raymond, News Republic Founder and CEO</a></h3>
                    </div>
                </div>
            </div>
           
            </div>
            
            <div class="featured-writing">
            	<p><a href="mailto:peggy@mobilegroove.com" title="Contact">From content marketing strategy and consulting to the creation of compelling white papers, custom research and blog posts &#8212; tell us what you need and we'll deliver. Get in touch &raquo;</a></p>
            </div>
             <div class="main-content-menu cf">
            	<?php


	$post_mobileApps = getCatPostsList('990','2');
	$post_mobileCommerce = getCatPostsList('139','2');
	$post_mobileEnterprise = getCatPostsList('1315','2');
	$post_mobileLoyalty = getCatPostsList('996','2');
	$post_mobileMarketing = getCatPostsList('40','2');
	$post_mobileResearch = getCatPostsList('1316','2');
	$post_mobileSearch = getCatPostsList('43','2');
	$post_socialMedia = getCatPostsList('48','2');


?>
<div>
	<ul id="sideNav">

	 <?php if ($post_mobileCommerce != false) { ?>
	 <li><a href="" class="sideNavSection"><span class="hidden-text">Mobile </span>Apps<i class="icon icon-topic icon-topic-apps"></i></a>
	 	<div class="sideMenuSlide"><ul><?php echo $post_mobileApps; ?><li class="sideNavReadMore"><a href="<?php echo SITEPATH;?>/mobile-apps">Read All Articles &raquo;</a></li></ul></div>
	 </li>
	 <?php } ?>

	 <?php if ($post_mobileCommerce != false) { ?>
	 <li><a href="" class="sideNavSection"><span class="hidden-text">Mobile </span>Commerce<i class="icon icon-topic icon-topic-commerce"></i></a>
	 	<div class="sideMenuSlide"><ul><?php echo $post_mobileCommerce; ?><li class="sideNavReadMore"><a href="<?php echo SITEPATH;?>/mobile-commerce">Read All Articles &raquo;</a></li></ul></div>
	 </li>
	 <?php } ?>

	 <?php if ($post_mobileEnterprise != false) { ?>
	 <li><a href="" class="sideNavSection"><span class="hidden-text">Mobile </span>Enterprise<i class="icon icon-topic icon-topic-enterprise"></i></a>
	 	<div class="sideMenuSlide"><ul><?php echo $post_mobileEnterprise; ?><li class="sideNavReadMore"><a href="<?php echo SITEPATH;?>/mobile-enterprise">Read All Articles &raquo;</a></li></ul></div>
	 </li>
	 <?php } ?>

	 <?php if ($post_mobileLoyalty != false) { ?>
	 <li><a href="" class="sideNavSection"><span class="hidden-text">Mobile </span>Loyalty<i class="icon icon-topic icon-topic-loyalty"></i></a>
	 	<div class="sideMenuSlide"><ul><?php echo $post_mobileLoyalty; ?><li class="sideNavReadMore"><a href="<?php echo SITEPATH;?>/mobile-loyalty">Read All Articles &raquo;</a></li></ul></div>
	 </li>
	 <?php } ?>

	 <?php if ($post_mobileMarketing != false) { ?>
	 <li><a href="" class="sideNavSection"><span class="hidden-text">Mobile </span>Marketing<i class="icon icon-topic icon-topic-marketing"></i></a>
	 	<div class="sideMenuSlide"><ul><?php echo $post_mobileMarketing; ?><li class="sideNavReadMore"><a href="<?php echo SITEPATH;?>/mobile-marketing">Read All Articles &raquo;</a></li></ul></div>
	 </li>
	 <?php } ?>

	 <?php if ($post_mobileResearch != false) { ?>
	 <li><a href="" class="sideNavSection"><span class="hidden-text">Mobile </span>Research<i class="icon icon-topic icon-topic-research"></i></a>
	 	<div class="sideMenuSlide"><ul><?php echo $post_mobileResearch; ?><li class="sideNavReadMore"><a href="<?php echo SITEPATH;?>/mobile-research">Read All Articles &raquo;</a></li></ul></div>
	 </li>
	 <?php } ?>

	 <?php if ($post_mobileSearch != false) { ?>
	 <li><a href="" class="sideNavSection"><span class="hidden-text">Mobile </span>Search<i class="icon icon-topic icon-topic-search"></i></a>
	 	<div class="sideMenuSlide"><ul><?php echo $post_mobileSearch; ?><li class="sideNavReadMore"><a href="<?php echo SITEPATH;?>/search">Read All Articles &raquo;</a></li></ul></div>
	 </li>
	 <?php } ?>

	 <?php if ($post_socialMedia != false) { ?>
	 <li><a href="" class="sideNavSection">Social Media<i class="icon icon-topic icon-topic-social-media"></i></a>
	 	<div class="sideMenuSlide"><ul><?php echo $post_socialMedia; ?><li class="sideNavReadMore"><a href="<?php echo SITEPATH;?>/social-media">Read All Articles &raquo;</a></li></ul></div>
	 </li>
	 <?php } ?>
	</ul>
</div>
		
</div>
	<h3>Recommended Posts</h3>

		<?php /* The loop */ 
		$args = array(
					'posts_per_page' => 5,
					'orderby' => 'date',
					'post__not_in'   => array($homeID),
				);
		$postQuery = new WP_Query($args);
		while ( $postQuery->have_posts() ) : $postQuery->the_post(); 
		$cats = get_the_category(); $cat_name = $cats[0]->name; $cats_slug = $cats[0]->slug;
		?>

		<article id="post-<?php the_ID(); ?>" <?php post_class('container homePosts'); ?>>
		<h1 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
	
		<div class="entry-content clearfix">
				<div class="entry-topic smInfo">Topic: <a href="<?php echo SITEPATH."/".$cats_slug;?>"><?php echo $cat_name; ?><!--<i class="icon topic-icon"></i>--></a> | Author: <span class="author"><?php the_author(); ?></div>
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
		<p class="more-posts view-more-button-text"><a href="<?php echo SITEPATH;?>/posts">View All Posts</a></p>

		<div class="prBox"><h3 class="head">Press Releases <img src="<?php echo IMAGEPATH;?>/realwire.png" align="right"></h3></div>
		<div class="prContent"><?php realWire_rss_home(); ?><p class="view-more-button-text"><a href="<?php echo SITEPATH;?>/real-wire">View All Press Releases</a></p></div>
	</div>

	<div id="sideBar"><?php get_sidebar('home'); ?></div>
	
<?php get_footer(); ?>