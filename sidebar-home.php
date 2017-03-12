<?php
/**
* Home Page Sidebar
 */
?>
<?php get_sidebar('menu'); ?>
<?php
/**<div class="newsletter">
	<h3><span style="color: #333333;">Be the <strong><em>first</em></strong> to hear about new white papers, research and partner events by subscribing to our monthly newsletter.</span></h3>
<form id="ccsfg" action="/wp-content/signup/signup/index.php" method="post">
<div id="nlform">
<h3 style="margin-bottom: 20px;">Subscribe to the MobileGroove newsletter</h3>
<p style="width: 50%; float: left;"><label for="FirstName">Name:</label>
<input id="FirstName" style="width: 90%;" name="FirstName" required="" type="text" /></p>
<p style="width: 50%; float: left;"><label for="EmailAddress">Email:</label>
<input id="EmailAddress" style="width: 90%;" name="EmailAddress" required="" type="text" /></p>
<p style="width: 50%; float: left;"><label for="JobTitle">Job Title:</label>
<input id="JobTitle" style="width: 90%;" name="JobTitle" type="text" /></p>
<p style="width: 50%; float: left;"><label for="CompanyName">Company:</label>
<input id="CompanyName" style="width: 90%;" name="CompanyName" type="text" /></p>

<div style="display: none;"><input id="list_General Interest" checked="checked" name="Lists[]" type="hidden" value="General Interest" />
<input name="SuccessURL" type="hidden" value="http://www.mobilegroove.com/newsletter/" />
<input name="FailureURL" type="hidden" value="http://www.mobilegroove.com/newsletter" /></div>
<input id="signup" name="signup" type="submit" value="Subscribe" />

</div>
</form><strong>How we protect your privacy:</strong>
We will never share, sell, or rent individual personal information with anyone for their promotional use without your advance permission. Information submitted to us is only available to employees managing this information for the purposes of sending you emails based on your request for information.
</div>
**/
?>
<div>
	<h3 class="head">Latest Tweets</h3>
	<div class="tweet">
		<a href=""><a href="https://twitter.com/peggyanne" target="_blank" class="twitter-name">@peggyanne</a><br />
		<div class="peggyanne"></div>
	</div>
</div>

<h3 class="head">Our Shows</h3>
<div class="sponsors media-box clearfix">
	<?php if ( is_active_sidebar('sponsor-ads') ) { dynamic_sidebar('sponsor-ads'); } ?>
</div>

<h3 class="head">Our Partners</h3>
<div class="sponsors clearfix">
	<?php if ( is_active_sidebar('partner-ads') ) { dynamic_sidebar('partner-ads'); } ?>
</div>

<!--<div id='youappi_widget_container' style="margin-top: 15px; overflow: hidden;"></div>
<script type='text/javascript' src='http://smartstore.youappi.com/widget/build/?widgetToken=cfd6568f-11d1-4e6c-ada9-aa0ae72d6add'></script>
<script type='text/javascript'>
youAPPiWidget.baseURL = 'http://smartstore.youappi.com';
youAPPiWidget.publisherToken = 'cfd6568f-11d1-4e6c-ada9-aa0ae72d6add';
youAPPiWidget.create();
</script>-->