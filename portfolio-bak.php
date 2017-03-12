<?php
/*
Template Name: portfolioTemplate
*/
get_header(); ?>
	<!--<script   src="https://code.jquery.com/jquery-1.11.0.min.js"   integrity="sha256-spTpc4lvj4dOkKjrGokIrHkJgNA0xMS98Pw9N7ir9oI="   crossorigin="anonymous"></script>-->
	<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/2.0.0/isotope.pkgd.min.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.min.js"></script>

	<div id="mainContent">



<div id="controls">
    <ul>
        <li><a id="asc" href="#">Sort Ascending</a>
        </li>
        <li><a id="desc" href="#">Sort Descending</a>
        </li>
        <li><a id="thin" href="#">Narrow Images</a>
        </li>
        <li><a id="all" href="#">All Images</a>
        </li>
    </ul>
</div>
<div id="container" class="isotope">

    <img class="lazzzzzy" width="333" height="500" src="http://www.appelsiini.net/projects/lazyload/img/grey.gif" data-original="http://farm5.static.flickr.com/4113/5013039951_3a47ccd509.jpg" alt="Stanley" />
    <img class="lazzzzzy" width="369" height="500" src="http://www.appelsiini.net/projects/lazyload/img/grey.gif" data-original="http://farm5.static.flickr.com/4131/5013039885_0d16ac87bc.jpg" alt="Officer" />
    <img class="lazzzzzy" width="500" height="333" src="http://www.appelsiini.net/projects/lazyload/img/grey.gif" data-original="http://farm5.static.flickr.com/4086/5013039583_26717f6e89.jpg" alt="Tony" />
    <img class="lazzzzzy" width="456" height="500" src="http://www.appelsiini.net/projects/lazyload/img/grey.gif" data-original="http://farm5.static.flickr.com/4146/5013646070_f1f44b1939.jpg" alt="Kendra" />
    <img class="lazzzzzy" width="456" height="500" src="http://www.appelsiini.net/projects/lazyload/img/grey.gif" data-original="http://farm5.static.flickr.com/4144/5013039541_17f2579e33.jpg" alt="Giraffe" />
    <img class="lazzzzzy" width="333" height="500" src="http://www.appelsiini.net/projects/lazyload/img/grey.gif" data-original="http://farm5.static.flickr.com/4153/5013039741_d860fb640b.jpg" alt="Gavin" />
    <img class="lazzzzzy" width="333" height="500" src="http://www.appelsiini.net/projects/lazyload/img/grey.gif" data-original="http://farm5.static.flickr.com/4113/5013039697_a15e41fcd8.jpg" alt="Anita" />
    <img class="lazzzzzy" width="359" height="500" src="http://www.appelsiini.net/projects/lazyload/img/grey.gif" data-original="http://farm5.static.flickr.com/4124/5013646314_c7eaf84918.jpg" alt="Take My Portrait" />
    <img class="lazzzzzy" width="333" height="500" src="http://www.appelsiini.net/projects/lazyload/img/grey.gif" data-original="http://farm5.static.flickr.com/4089/5013040075_bac12ff74e.jpg" alt="Wonder" />
</div>
<div class="lazzzzzy"><!--test--></div>

		
	</div>
	<div id="sideBar"><?php get_sidebar(); ?></div>


<style>
#controls ul li {
    float:left;
    margin-right:20px;
}
#container {
    clear:both;
}
/**** Isotope filtering ****/
 .isotope-item {
    z-index: 2;
}
.isotope-hidden.isotope-item {
    pointer-events: none;
    z-index: 1;
}
</style>
<script>
	
	jQuery(document).ready(function ($) {
		var $win = $(window),
			$imgs = $(".lazzzzzy");
			$con = $('#container').isotope();
	
		function loadVisible($els, trigger) {
			$els.filter(function () {
				var rect = this.getBoundingClientRect();
				return rect.top >= 0 && rect.top <= window.innerHeight;
			}).trigger(trigger);
		}
		
		$con.isotope('on', 'layoutComplete', function () {
			loadVisible($imgs, 'lazylazy');
		});
	
		$win.on('scroll', function () {
			loadVisible($imgs, 'lazylazy');
		});
	
		$imgs.lazyload({
			effect: "fadeIn",
			failure_limit: Math.max($imgs.length - 1, 0),
			event: 'lazylazy'
		});
		
		
		$('#asc').click(function (event) {
			$con.isotope({
				sortAscending: true,
				sortBy: 'original'
			});
		});
	
		$('#desc').click(function (event) {
			$con.isotope({
				sortAscending: false,
				sortBy: 'original'
			});
		});
	
		$('#thin').click(function (event) {
			$con.isotope({
				sortAscending: true,
				filter: 'img[width="333"]',
				sortBy: 'original'
			});
		});
	
		$('#all').click(function (event) {
			$con.isotope({
				sortAscending: true,
				filter: '',
				sortBy: 'original'
			});
		}); 
	});
</script>

<?php get_footer(); ?>