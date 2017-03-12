<?php

/* Template Name: Portfolio */

get_header(); ?>
	<!--<script   src="https://code.jquery.com/jquery-1.11.0.min.js"   integrity="sha256-spTpc4lvj4dOkKjrGokIrHkJgNA0xMS98Pw9N7ir9oI="   crossorigin="anonymous"></script>-->

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/magnific.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/magnific.css">

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

		<?php endwhile; ?>
</div>

<div id="sideBar"><?php get_sidebar(); ?></div>


<style>
.portfolio-legend {
	margin-bottom: 12px;
}
.portfolio-legend ul {
	list-style-type: none;
	margin: 0 0 40px 0;
	padding: 0;
}
.portfolio-legend ul li {
	position: relative;
	display: block;
	float: left;
	margin-right: 12px;
	margin-bottom: 10px;
	text-transform: uppercase;
	font-size: 15px;
	font-weight: bold;
	background-color: #4c4c4d; 
	color: #fff;
	padding: 4px 12px 3px;
	line-height: 25px;
}
/*.portfolio-legend-title {
	font-family: 'syncopate', sans-serif;
}*/
.portfolio-legend ul li strong {
	display: inline-block;
	font-weight: bold;
	font-size: 20px;
	text-align: center;
	line-height: 20px;
	padding-left: 6px;
	position: relative;
	top: 2px;
}
.portfolio-item-trigger {
	position: relative;
	display:block;
	float: left;
	margin-right: 18px;
	margin-bottom: 15px;
	width: 181px;
}
.portfolio-item-trigger + .portfolio-item-trigger {
	margin-left: 18px;
}
.portfolio-item-badge {
	position: absolute;
	left: 0;
	top: 10px;
	background-color: #ea8f30;
	color: #fff;
	font-size: 13px;
	padding: 3px 6px;
	font-weight: bold;
}
.portfolio-content-image {
	float: left;
	margin-right: 25px;
	margin-bottom: 10px;
}
.portfolio-content-title {
	font-size: 21px;
	margin-top: 0;
	padding-top: 0;
	color: #ea8f30;
}


/* Styles for dialog window */
.portfolio-item-content {
	background: white;
	padding: 20px 30px;
	text-align: left;
	max-width: 700px;
	margin: 40px auto;
	position: relative;
}

.portfolio-button {
	display: block;
	width: auto;
	padding: 6px 12px;
	background: #eb8f31;
	color: #fff;    
	font-weight: 400;
    font-family: 'Roboto Slab', serif;
	text-align: center;
}

/**
 * Fade-zoom animation for first dialog
 */

/* start state */
.my-mfp-zoom-in .zoom-anim-dialog {
	opacity: 0;

	-webkit-transition: all 0.2s ease-in-out; 
	-moz-transition: all 0.2s ease-in-out; 
	-o-transition: all 0.2s ease-in-out; 
	transition: all 0.2s ease-in-out; 



	-webkit-transform: scale(0.8); 
	-moz-transform: scale(0.8); 
	-ms-transform: scale(0.8); 
	-o-transform: scale(0.8); 
	transform: scale(0.8); 
}

/* animate in */
.my-mfp-zoom-in.mfp-ready .zoom-anim-dialog {
	opacity: 1;

	-webkit-transform: scale(1); 
	-moz-transform: scale(1); 
	-ms-transform: scale(1); 
	-o-transform: scale(1); 
	transform: scale(1); 
}

/* animate out */
.my-mfp-zoom-in.mfp-removing .zoom-anim-dialog {
	-webkit-transform: scale(0.8); 
	-moz-transform: scale(0.8); 
	-ms-transform: scale(0.8); 
	-o-transform: scale(0.8); 
	transform: scale(0.8); 

	opacity: 0;
}

/* Dark overlay, start state */
.my-mfp-zoom-in.mfp-bg {
	opacity: 0;
	-webkit-transition: opacity 0.3s ease-out; 
	-moz-transition: opacity 0.3s ease-out; 
	-o-transition: opacity 0.3s ease-out; 
	transition: opacity 0.3s ease-out;
}
/* animate in */
.my-mfp-zoom-in.mfp-ready.mfp-bg {
	opacity: 0.8;
}
/* animate out */
.my-mfp-zoom-in.mfp-removing.mfp-bg {
	opacity: 0;
}

</style>
<script>
	$(document).ready(function() {
	$('.portfolio-item-trigger').magnificPopup({
		type: 'inline',

		fixedContentPos: false,
		fixedBgPos: true,

		overflowY: 'auto',

		closeBtnInside: true,
		preloader: false,
		
		midClick: true,
		removalDelay: 300,
		mainClass: 'my-mfp-zoom-in'
	});
});
</script>

<?php get_footer(); ?>