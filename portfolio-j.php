<?php
/*
Template Name: portfolioTemplate
*/
get_header(); ?>

	<div id="mainContent">
    	<style>
			.lazyItem {
				width: 33%;
			}
				
		</style>
        <div id="options" class="clearfix">
            <ul id="filters">
                <li><a href="#" data-filter="*" class="current">show all</a></li>
                <li><a href="#" data-filter=".all">all</a></li>
                <li><a href="#" data-filter=".portfolio-books">books</a></li>
                <li><a href="#" data-filter=".portfolio-whitepapers">whitepapers</a></li>
                <li><a href="#" data-filter=".portfolio-articles">articles</a></li>
                <li><a href="#" data-filter=".portfolio-podcasts">podcasts</a></li>
            </ul>
        </div>
		<div class="lazy-wrapper isotope"></div>

		
	</div>
	<div id="sideBar"><?php get_sidebar(); ?></div>

<script src="<?php echo get_template_directory_uri(); ?>/js/magnific.min.js"></script>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/magnific.css">
<script src="<?php echo get_template_directory_uri(); ?>/js/imagesloaded.min.js"></script>

<!-- isotope -->
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.isotope.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.isotope.sloppy-masonry.min.js"></script>

<!-- Lazy Loader plugin -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/lazyloader.css">
<script src="<?php echo get_template_directory_uri(); ?>/js/lazyloader.js"></script>

<script>
	$(document).ready(function() {
	  $('.image-link').magnificPopup({type:'image'});
	});
	
	// cache container
	var $container = $('.lazy-wrapper');
	// initialize isotope
	$container.isotope({
	  itemSelector : '.lazyItem',
		  layoutMode : 'fitRows'
	});
	
	// filter items when filter link is clicked
	$('#filters li a').click(function(){
	  //removes class from all items to "clear" the class from your menu
	  $('#filters li a').removeClass("current");
	  //adds the class to whichever item you clicked
	  $(this).addClass("current");
	  var selector = $(this).attr('data-filter');
	  $container.isotope({ filter: selector });
	  return false;
	});
	$(function(){
		$('.lazy-wrapper').lazyLoader({
			jsonFile: '<?php echo get_template_directory_uri(); ?>/js/data.json',
			limit: 12,
			records: 30,
			offset: 1,
			mode: "click",
			more_caption: "Load more",
			isIsotope: true,
			isotopeResize: 3
		});
	});	
</script>

<?php get_footer(); ?>