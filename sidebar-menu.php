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