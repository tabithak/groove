<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" lang="en-US">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" lang="en-US">
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html lang="en-US">
<!--<![endif]-->
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width">
<title><?php wp_title(''); ?></title>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/to-push.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/slick/slick.css"/>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Syncopate' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
<!--[if lt IE 9]>
  <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
<![endif]-->
<!--[if lte IE 9]>
  <style type="text/css">

      input#submit, input[type=submit], button {
        filter: none;
      }
  </style>
<![endif]-->
<?php wp_head(); ?>

<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/slick/slick.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.13.1/TweenMax.min.js"></script>

<!-- Google Analytics -->
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-41205716-1', 'auto');
ga('send', 'pageview');
</script>
<!-- End Google Analytics -->
</head>
 
<body <?php body_class(); ?>>

<div id="mainWrap">
  <div id="header">
    <div class="row header-row">
      <div id="logo"><a href="/"><img src="<?php echo(IMAGEPATH);?>/logo.png"></a></div>
      	<div class="social social-right cf">
        	<span class="social-label">Follow us!</span>
            <ul class="social-icon-list">
                <li><a href="http://twitter.com/peggyanne" target="_blank" class="icon-social icon-twitter">Twitter</a></li>
                <li><a href="http://www.facebook.com/peggy.salz" target="_blank" class="icon-social icon-facebook">Facebook</a></li>
                <li><a href="http://www.pinterest.com/mobilegroove/" target="_blank" class="icon-social icon-pinterest icon-orange">Pinterest</a></li>
                <li><a href="http://www.linkedin.com/in/peggysalz" target="_blank" class="icon-social icon-linkedin">LinkedIN</a></li>
                <li><a href="<?php echo SITEPATH;?>/rss" target="_blank" class="icon-social icon-rss">RSS</a></li>
            </ul>
       </div>
        
    </div>
    <div id="topNav">
      <div class="row">
        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => '' ) ); ?>
       <?php /* <div id="searchBlock" class="clearfix">
	
    <div id="followUs">
        <div class="followBtn">Follow Us!</div>
        <div id="followUsDrop" class="clearfix">
        <div class="followUsSocial"><a href="http://twitter.com/peggyanne" target="_blank" class="icon-social icon-twitter icon-orange">Twitter</a></div>
        <div class="followUsSocial"><a href="http://www.facebook.com/pages/MobileGroove/124986987587644" target="_blank" class="icon-social icon-facebook icon-orange">Facebook</a></div>
        <div class="followUsSocial"><a href="<?php echo SITEPATH;?>/rss" target="_blank" class="icon-social icon-rss icon-orange">RSS</a></div>
        <div class="followUsSocial"><a href="<?php echo SITEPATH;?>/newsletter" target="_blank" class="icon-social icon-email icon-orange subscribeLink">Newsletter</a></div>
        <div class="followUsSocial"><a href="http://www.pinterest.com/mobilegroove/" target="_blank" class="icon-social icon-pinterest icon-orange">Pinterest</a></div>
        <div class="followUsSocial"><a href="http://www.linkedin.com/in/peggysalz" target="_blank" class="icon-social icon-linkedin icon-orange">LinkedIN</a></div>
        </div>
    </div>
	*/ ?>

</div>
      </div>
      
       <div class="row search-row">
        <div id="search" class="cf">
            <form role="search" method="get" id="searchform" class="searchform" action="<?php echo SITEPATH;?>">
            <div class="search-box"><input type="text" placeholder="What are you looking for?" name="s" id="s" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;"></div>
            <div class="search-btn"><input type="submit" name="submit" value="search"></div>
            </form>
        </div>
        </div>
    </div>
  </div>

  <div id="mainBody">
   <div class="seen-content-wrap">
    <div class="seen-content row cf">
        <h1>As seen on</h1>
        <span class="seen-content-logo"><img src="<?php echo(IMAGEPATH);?>/seen-on/logo-forbes.png"></span>
        <span class="seen-content-logo"><img src="<?php echo(IMAGEPATH);?>/seen-on/logo-hbr.png"></span>
        <span class="seen-content-logo"><img src="<?php echo(IMAGEPATH);?>/seen-on/logo-venturebeat.png"></span>
        <span class="seen-content-logo"><img src="<?php echo(IMAGEPATH);?>/seen-on/logo-mma.png"></span>
        <span class="seen-content-logo"><img src="<?php echo(IMAGEPATH);?>/seen-on/logo-pocketgamerbiz.png"></span>
    </div>
   </div>
   <div class="row">
