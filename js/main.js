var navContainer = "#topNav"; // This is the div that wraps around your <ul>

var resizeWidth = 990; // This is the width you want to hide navigation and make it mobile friendly

var navOpen = false;

var navPrepared = false;





jQuery(document).ready(function(){

        /*

        * Custom code begin

        */



        if ( jQuery("body").hasClass("author") ) {

          jQuery("#menu-item-15557").addClass("current-menu-item");

        }



        var columnistsNav = '<ul class="columnistsNav">'

            columnistsNav = columnistsNav + '<li><a href="http://mobilegroove.com/author/ken-herron/" class="clearfix"><div><img src="http://mobilegroove.com/wp-content/uploads/userphoto/107.thumbnail.jpg" /></div><span>Ken Herron</span>A cool hunter for new ideas, strategies, and technologies to increase the value of world-class brands by using technology to develop stronger emotional connections between companies and their customers to...</a></li>';

            columnistsNav = columnistsNav + '<li><a href="http://mobilegroove.com/author/gary-schwartz/" class="clearfix"><div><img src="http://mobilegroove.com/wp-content/uploads/userphoto/126.thumbnail.jpg" /></div><span>Gary Schwartz</span>Gary brings us insights on all things at the intersection of mobile and retail, directly from places and cases where the action is. Gary — who is the CEO of...</a></li>';

            columnistsNav = columnistsNav + '<li><a href="http://mobilegroove.com/author/jeff-hasen/" class="clearfix"><div><img src="http://mobilegroove.com/wp-content/uploads/userphoto/102.thumbnail.jpg" /></div><span>Jeff Hasen</span>A career author and sought-after speaker, Jeff Hasen builds, strengthens and protects brands. Companies benefiting from his talents have landed on Wired’s list of most innovative entities on Earth and...</a></li>';

            columnistsNav = columnistsNav + '</ul>';

        jQuery("#menu-item-15557").append(columnistsNav);



        jQuery('a.subscribeLink').click(function(e){

          e.preventDefault();

          jQuery('#subscribeModal').modal({show:true})

        });



        jQuery("#followUs").append('<div id="followUsDrop" class="row"><div class="followUsSocial"><a href="http://twitter.com/mobilegroove" target="_blank" class="icon-social icon-twitter icon-orange">Twitter</a></div><div class="followUsSocial"><a href="http://www.facebook.com/pages/MobileGroove/124986987587644" target="_blank" class="icon-social icon-facebook icon-orange">Facebook</a></div><div class="followUsSocial"><a href="./rss" target="_blank" class="icon-social icon-rss icon-orange">RSS</a></div><div class="followUsSocial"><a href="./newsletter" target="_blank" class="icon-social icon-rss icon-orange">Newsletter</a></div></div>');



        jQuery("#followUs").mouseenter(function(){

          //alert('test');

          jQuery("#followUsDrop").fadeIn();

        });



        jQuery("#topSearch").unbind().hover(function(){

      var newWidth = jQuery('#followUs').outerWidth();

      jQuery("#followUs").css({'opacity':0});

      jQuery(".searchField").stop().animate({'width':newWidth+'px'});

    },function(){

      jQuery(".searchField").stop().delay(500).animate({'width':'0px'},function(){

        jQuery("#followUs").stop().animate({'opacity':1});

      });

    });





        /* Home Slider */

        jQuery('#homeSlider .activeSlide').html(jQuery("#featured1").html());

        jQuery("#homeSliderNav a").click(function(e){

          if (jQuery(this).hasClass("active")){} else { jQuery("#homeSliderNav a.active").removeClass("active"); }

          jQuery(this).addClass("active");

          e.preventDefault();

          var toOpen = jQuery(this).attr("href");

          //toOpen = toOpen.substring(1);

          var slideContents = jQuery(toOpen).html();

          jQuery('#homeSlider .activeSlide').html(slideContents);

        });



        /* Pagination */

        if(jQuery('body').hasClass('home')) {

            jQuery(".qPager").jPaginate({ items: 4, pagination_class: 'pagination'});

        }



        /* Twitter */

        jQuery(".msearchgroove").tweet({

          username: "peggyanne",

          avatar_size: 68,

          count: 1,

          loading_text: "loading tweets..."

        });



        jQuery(".groovewire").tweet({

          username: "peggyanne",

          avatar_size: 68,

          count: 1,

          loading_text: "loading tweets..."

        });



        jQuery(".peggyanne").tweet({

          username: "peggyanne",

          avatar_size: 68,

          count: 1,

          loading_text: "loading tweets..."

        });







        /* Side Nav Toggles */

        jQuery(".sideNavSection").unbind('click').click(function(e){

          e.preventDefault();

          if (jQuery(this).hasClass("openItem")) {

            jQuery(".openItem").next(".sideMenuSlide").stop(true,true).slideToggle();

            jQuery(".openItem").removeClass("openItem");

          } else {

            jQuery(".openItem").next(".sideMenuSlide").stop(true,true).slideToggle();

            jQuery(".openItem").removeClass("openItem");

            jQuery(this).addClass("openItem");

            jQuery(this).next(".sideMenuSlide").stop(true,true).slideToggle();

          }

        });





        /* Custom code end */



        /* Begin Non Editable */

        // Add nav collapser div to page

        jQuery("body").prepend("<div id=\"navCollapser\">Show menu</div>")

        jQuery(navContainer).addClass("collapsible");

        // setup behaviour for collapsible navigation (if a navCollapser object exists)

        if(jQuery('#navCollapser').length && jQuery(navContainer).hasClass('collapsible')){

          if(jQuery(navContainer).length){

            jQuery('#navCollapser').click(function(){

              navOpen = !navOpen;

              collapserText();

              jQuery(navContainer).slideToggle('slow');

            });

          }

        }

        // Run nav collapser

        prepareNav();

        jQuery(window).resize(prepareNav);

        /* End Non Editable */

});







function prepareNav(){

  if(jQuery('#mainWrap').width() <= resizeWidth && jQuery(navContainer).hasClass('collapsible')){

      jQuery(navContainer).hide();

      jQuery('#navCollapser').show();

      navOpen = false;

      navPrepared = true;

  } else {

    jQuery(navContainer).show();

    jQuery('#navCollapser').hide();

    navOpen = true;

    navPrepared = false;

  }

  collapserText();

  }



function collapserText(){

  if(navOpen){

    jQuery('#navCollapser').html('Hide menu');

  } else {

    jQuery('#navCollapser').html('Show menu');

  }

}





jQuery(document).ready(function(){



    var userAgent = navigator.userAgent;

    if( userAgent.search( 'MSIE 8.0') > -1 ){

      jQuery('.carousel').slick({

        dots: true,

        arrows: false,

        slide: 'div.slide',

        autoplay: true,

        fade: true,

          lazyLoad: 'progressive',

        pauseOnHover: true,

        draggable: false,

        autoplaySpeed: 3000,

      });



    } else  {



   /* var sapTween1 = TweenMax.from(jQuery('#slide-sap .slide-sap-cart'), 2, {left:'-=400', autoAlpha: 0, ease:Power4.easeInOut});

        var sapTween2 = TweenMax.from(jQuery('#slide-sap h2'), 1, {left:'-=-600', autoAlpha: 0, delay: 1});

    var sapTween3 = TweenMax.from(jQuery('#slide-sap h3'), 1, {right:'-=-600', autoAlpha: 0, delay: 2});

    var sapTween4 = TweenMax.from(jQuery('#slide-sap .slide-box'), 1, {autoAlpha: 0, delay: 3});

    var sapTween5 = TweenMax.from(jQuery('#slide-sap .slide-button'), 1, {bottom:'-=100', delay: 4});

    var sapTween5 = TweenMax.from(jQuery('#slide-sap .slide-attribution'), 1, {autoAlpha: 0, delay: 4.5});





    var egTween1 = TweenMax.from(jQuery('#slide-eg h2'), 2, {left:'-=400', autoAlpha: 0, ease:Power4.easeInOut, paused: true});

        var egTween2 = TweenMax.from(jQuery('#slide-eg h3'), 1, {left:'-=-600', autoAlpha: 0, delay: 1, paused: true});

    var egTween3 = TweenMax.from(jQuery('#slide-eg .slide-eg-book'), 2, {right:'-=-200', autoAlpha: 0, delay: 2, ease:Power4.easeInOut, paused: true});

    var egTween4 = TweenMax.from(jQuery('#slide-eg .slide-box'), 1, {autoAlpha: 0, delay: 3, paused: true});

    var egTween5 = TweenMax.from(jQuery('#slide-eg .slide-button'), 1, {bottom:'-=100', delay: 4, paused: true});

    var egTween6 = TweenMax.from(jQuery('#slide-eg .slide-attribution'), 1, {autoAlpha: 0, delay: 4.5, paused: true});





    var appTween1 = TweenMax.from(jQuery('#slide-app .slide-app-graphic'), 1.25, {top: '-=-100', left:'-=-400', autoAlpha: 0, ease:Power4.easeInOut, paused: true});

    var appTween2 = TweenMax.from(jQuery('#slide-app h2'), 2, {left:'-=200', autoAlpha: 0, ease:Power4.easeInOut, delay: 0.75, paused: true});

        var appTween3 = TweenMax.from(jQuery('#slide-app h3'), 1, {left:'-=-600', autoAlpha: 0, delay: 2, paused: true});

    var appTween4 = TweenMax.from(jQuery('#slide-app .slide-box'), 1, {autoAlpha: 0, delay: 3, paused: true});

    var appTween5 = TweenMax.from(jQuery('#slide-app .slide-button'), 1, {bottom:'-=100', delay: 4, paused: true});

    var appTween6 = TweenMax.from(jQuery('#slide-app .slide-attribution'), 1, {autoAlpha: 0, delay: 4.5, paused: true});





    var connectTween1 = TweenMax.from(jQuery('#slide-connect h2'), 2, {left:'-=600', autoAlpha: 0, ease:Power4.easeInOut, paused: true});

    var connectTween2 = TweenMax.from(jQuery('#slide-connect .slide-connect-bridge'), 1.25, {bottom: '+=-200', autoAlpha: 0, delay: 0.5, ease:Power4.easeInOut, paused: true});

        var connectTween3 = TweenMax.from(jQuery('#slide-connect h3'), 1, {left:'-=-600', autoAlpha: 0, delay: 2, paused: true});

    var connectTween4 = TweenMax.from(jQuery('#slide-connect .slide-box'), 1, {autoAlpha: 0, delay: 3, paused: true});

    var connectTween5 = TweenMax.from(jQuery('#slide-connect .slide-connect-book'), 1.25, {top: '+=100', right:'+=400', autoAlpha: 0, delay: 4, ease:Power4.easeInOut, paused: true});

    var connectTween6 = TweenMax.from(jQuery('#slide-connect .slide-button'), 1, {bottom:'-=100', delay: 5, paused: true});

    var connectTween7 = TweenMax.from(jQuery('#slide-connect .slide-attribution'), 1, {autoAlpha: 0, delay: 5.5, paused: true});





    var gigaomTween1 = TweenMax.from(jQuery('#slide-gigaom h2'), 1.25, {left:'-=200', autoAlpha: 0, paused: true});

    var gigaomTween2 = TweenMax.from(jQuery('#slide-gigaom .slide-gigaom-book'), 2, {top: '-=-100', left:'-=-400', autoAlpha: 0, delay: 0.75, ease:Power4.easeInOut, paused: true});

    var gigaomTween3 = TweenMax.from(jQuery('#slide-gigaom .slide-box'), 1, {autoAlpha: 0, delay: 2, paused: true});

    var gigaomTween4 = TweenMax.from(jQuery('#slide-gigaom .slide-button'), 1, {bottom:'-=100', delay: 3, paused: true});

    var gigaomTween5 = TweenMax.from(jQuery('#slide-gigaom .slide-attribution'), 1, {autoAlpha: 0, delay: 3.5, paused: true});





    var mobileTween1 = TweenMax.from(jQuery('#slide-mobile h2'), 1.25, {left:'-=200', autoAlpha: 0, paused: true});

    var mobileTween2 = TweenMax.from(jQuery('#slide-mobile .slide-box'), 1, {autoAlpha: 0, delay: 0.75, paused: true});

    var mobileTween3 = TweenMax.from(jQuery('#slide-mobile .slide-mobile-hand'), 1, {bottom: '-=100', autoAlpha: 0, delay: 1, ease:Power4.easeInOut, paused: true});

    var mobileTween4 = TweenMax.from(jQuery('#slide-mobile .slide-mobile-1'), 0.5, {bottom: '-=50', autoAlpha: 0, delay: 1.5, ease:Power4.easeInOut, paused: true});

    var mobileTween5 = TweenMax.from(jQuery('#slide-mobile .slide-mobile-2'), 0.5, {bottom: '-=50', autoAlpha: 0, delay: 1.75, ease:Power4.easeInOut, paused: true});

    var mobileTween6 = TweenMax.from(jQuery('#slide-mobile .slide-mobile-3'), 0.5, {bottom: '-=50', autoAlpha: 0, delay: 2, ease:Power4.easeInOut, paused: true});

    var mobileTween7 = TweenMax.from(jQuery('#slide-mobile .slide-mobile-4'), 0.5, {bottom: '-=50', autoAlpha: 0, delay: 2.25, ease:Power4.easeInOut, paused: true});

    var mobileTween8 = TweenMax.from(jQuery('#slide-mobile .slide-button'), 1, {bottom:'-=100', delay: 3, paused: true});

    var mobileTween7 = TweenMax.from(jQuery('#slide-mobile .slide-attribution'), 0.5, {autoAlpha: 0, delay: 3.5, paused: true});





    var minuteTween1 = TweenMax.from(jQuery('#slide-minute .slide-minute-logo'), 1.5, {left:'-=600', autoAlpha: 0, ease:Power4.easeInOut, paused: true});

    var minuteTween2 = TweenMax.from(jQuery('#slide-minute .slide-minute-phone'), 1.5, {left: '-=-600', autoAlpha: 0, ease:Power4.easeInOut, paused: true});

    var minuteTween3 = TweenMax.from(jQuery('#slide-minute .slide-box'), 1, {autoAlpha: 0, delay: 1.5, paused: true});

    var minuteTween4 = TweenMax.from(jQuery('#slide-minute .slide-button'), 1, {bottom:'-=200', delay: 2, paused: true});

*/



    jQuery('.carousel').slick({

      dots: true,

      arrows: false,

      slide: 'div.slide',

      autoplay: false,

      autoplay: true,

      fade: true,

      pauseOnHover: true,

      lazyLoad: 'progressive',

      draggable: false,

      autoplaySpeed: 5000,

      /*onAfterChange: function (carousel, index) {



           if (carousel.currentSlide === 1) {



              jQuery("#slide-eg").fadeIn(1000, function () {

                  egTween1.play();

                  egTween2.play();

                  egTween3.play();

                  egTween4.play();

                  egTween5.play();

                  egTween6.play();

              });

            } else if (carousel.currentSlide === 2) {



              jQuery("#slide-app").fadeIn(1000, function () {

                  appTween1.play();

                  appTween2.play();

                  appTween3.play();

                  appTween4.play();

                  appTween5.play();

                  appTween6.play();

              });

            } else if (carousel.currentSlide === 3) {



                jQuery("#slide-connect").fadeIn(1000, function () {

                  connectTween1.play();

                  connectTween2.play();

                  connectTween3.play();

                  connectTween4.play();

                  connectTween5.play();

                  connectTween6.play();

                  connectTween7.play();

              });

            } else if (carousel.currentSlide === 4) {



                jQuery("#slide-gigaom").fadeIn(1000, function () {

                  gigaomTween1.play();

                  gigaomTween2.play();

                  gigaomTween3.play();

                  gigaomTween4.play();

                  gigaomTween5.play();

              });

            } else if (carousel.currentSlide === 5) {



                jQuery("#slide-mobile").fadeIn(1000, function () {

                  mobileTween1.play();

                  mobileTween2.play();

                  mobileTween3.play();

                  mobileTween4.play();

                  mobileTween5.play();

                  mobileTween6.play();

                  mobileTween7.play();

                  mobileTween8.play();

              });

            } else if (carousel.currentSlide === 6) {



                jQuery("#slide-minute").fadeIn(1000, function () {

                  minuteTween1.play();

                  minuteTween2.play();

                  minuteTween3.play();

                  minuteTween4.play();

              });

            }

        }*/



    });



    }



    jQuery("#makeMeScrollable").smoothDivScroll({

      mousewheelScrolling: "allDirections",

      manualContinuousScrolling: true,

      autoScrollingMode: "onStart",

      visibleHotSpotBackgrounds: "hover",

      touchScrolling: true,

      hotSpotScrollingStep: 3,

      autoScrollingStep: 1,

      autoScrollingInterval: 25

    });

    // Mouse out

    jQuery("#makeMeScrollable").bind("mouseout", function(){

      jQuery("#makeMeScrollable").smoothDivScroll("startAutoScrolling");

    });



  });

$('p').each(function() {
    var $this = $(this);
    if($this.html().replace(/\s|&nbsp;/g, '').length == 0)
        $this.remove();
});