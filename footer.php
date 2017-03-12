      </div>
  </div>

  <div id="footer">
    <div id="footerContent" class="row footer-wrap">
        
        <div class="about-peggy">
          <div class="footer-cloud">
            <img src="<?php echo(IMAGEPATH);?>/footer-cloud.png">
          </div>
          <div class="footer-phone">
            <img src="<?php echo(IMAGEPATH);?>/footer-phone.png">
          </div>
          <div class="footer-content">
            <h6>Peggy Anne Salz</h6>
            <p>Content Marketing Strategist &amp; Owner of MobileGroove; Nine-Times author and regular contributor to Forbes and Harvard Business Review; Mobile Analyst with VentureBeat and Gigaom Research; Top 30 Mobile Marketing Influencer and Top 5 Mobile Development Expert.</p>
            <a href="mailto:peggy@mobilegroove.com" title="Contact">Let's talk about ways you can grow and engage your audience through expert content creation and marketing &raquo;</a>
          </div>
        </div>
        <div id="makeMeScrollable">
          <img src="<?php echo(IMAGEPATH);?>/logo-aisle411.jpg" alt="Aisle411">
          <img src="<?php echo(IMAGEPATH);?>/logo-alcatel.jpg" alt="Alcatel">
          <img src="<?php echo(IMAGEPATH);?>/logo-amdocs.jpg" alt="Amdocs">
          <img src="<?php echo(IMAGEPATH);?>/logo-artilium.jpg" alt="Artilium">
          <img src="<?php echo(IMAGEPATH);?>/logo-bango.jpg" alt="Bango">
          <img src="<?php echo(IMAGEPATH);?>/logo-blyk.jpg" alt="Blyk">
          <img src="<?php echo(IMAGEPATH);?>/logo-chacha.jpg" alt="ChaCha">
          <img src="<?php echo(IMAGEPATH);?>/logo-crittercism.jpg" alt="Crittercism">
          <img src="<?php echo(IMAGEPATH);?>/logo-funambol.jpg" alt="Funambol">
          <img src="<?php echo(IMAGEPATH);?>/logo-gemalto.jpg" alt="Gemalto">
          <img src="<?php echo(IMAGEPATH);?>/logo-inmobi.jpg" alt="InMobi">
          <img src="<?php echo(IMAGEPATH);?>/logo-mef.jpg" alt="MEF">
          <img src="<?php echo(IMAGEPATH);?>/logo-millenium.jpg" alt="Millenial Media">
          <img src="<?php echo(IMAGEPATH);?>/logo-mma.jpg" alt="MMA">
          <img src="<?php echo(IMAGEPATH);?>/logo-motricity.jpg" alt="Motricity">
          <img src="<?php echo(IMAGEPATH);?>/logo-netsize.jpg" alt="Netsize">
          <img src="<?php echo(IMAGEPATH);?>/logo-nuance.jpg" alt="Nuance">
          <img src="<?php echo(IMAGEPATH);?>/logo-qualcomm.jpg" alt="Qualcomm">
          <img src="<?php echo(IMAGEPATH);?>/logo-radioframe.jpg" alt="Radioframe">
          <img src="<?php echo(IMAGEPATH);?>/logo-samsung.jpg" alt="Samsung">
          <img src="<?php echo(IMAGEPATH);?>/logo-sap.jpg" alt="SAP">
          <img src="<?php echo(IMAGEPATH);?>/logo-taptu.jpg" alt="Taptu">
          <img src="<?php echo(IMAGEPATH);?>/logo-tyntec.jpg" alt="Tyntec">
        </div>
        <div class="scroll-gradient"></div>
    </div>
    <div class="row footNavRow">
      <div id="footNav"><?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => '' ) ); ?></div>
      <div id="footSocial" class="social">
        <div class="move-right cf"><span class="social-label">Follow us!</span>
            <ul class="social-icon-list">
                <li><a href="http://twitter.com/peggyanne" target="_blank" class="icon-social icon-twitter">Twitter</a></li>
                <li><a href="http://www.facebook.com/pages/MobileGroove/124986987587644" target="_blank" class="icon-social icon-facebook">Facebook</a></li>
                <li><a href="http://www.pinterest.com/mobilegroove/" target="_blank" class="icon-social icon-pinterest icon-orange">Pinterest</a></li>
                <li><a href="http://www.linkedin.com/in/peggysalz" target="_blank" class="icon-social icon-linkedin">LinkedIN</a></li>
                <li><a href="<?php echo SITEPATH;?>/rss" target="_blank" class="icon-social icon-rss">RSS</a></li>
            </ul>
         </div>
      </div>
    </div>
    <div class="row">
      <div id="footCopyright">Copyright &copy;2013-<?php echo date("Y") ?> MobileGroove. This work is licensed under a Creative Commons License, Some rights reserved. <br />Designed by <a href="http://tabithakarcher.com" target="_blank">Tabitha Karcher</a></div>
      <div id="footLinks" class="move-right"><ul id="footNav2"><!--<li><a href="<?php //echo SITEPATH;?>/subscribe" target="_blank" class="subscribeLink">Subscribe</a></li>--><li><a href="<?php echo SITEPATH;?>/contribute">Write a Guest Column</a></li></ul></div>
    </div>
  </div>

</div>
<?php /*
<!-- Video Modal -->
<div id="subscribeModal" class="modal hide fade">
  <div class="modal-header">
    <h1>Subscribe to the MobileGroove Newsletter</h1>
    <div class="subscribe-icon"><img src="<?php echo(IMAGEPATH);?>/subscribeIcon.png" /></div>
  </div>
  <div class="modal-body">
    <iframe src="<?php echo SITEPATH;?>/subscribe-form" frameborder="0" width="600" height="420"></iframe>
  </div>
</div>
*/
?>

<?php wp_footer(); ?>
</body>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-41205716-1', 'auto');
  ga('send', 'pageview');

</script>
</html>