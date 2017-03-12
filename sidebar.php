<?php
/**
* Sidebar
 */
?>
<?php get_sidebar('menu'); ?>
<div>
	<h3 class="head">Latest Tweets</h3>
	<div class="tweet clearfix">
		<a href=""><a href="https://twitter.com/peggyanne" target="_blank">@peggyanne</a><br />
		<div class="peggyanne"></div>
	</div>
</div>

<h3 class="head">Our Shows</h3>
<div class="sponsors clearfix">
	<?php if ( is_active_sidebar('sponsor-ads') ) { dynamic_sidebar('sponsor-ads'); } ?>
</div>

<h3 class="head">Our Partners</h3>
<div class="sponsors clearfix">
	<?php if ( is_active_sidebar('partner-ads') ) { dynamic_sidebar('partner-ads'); } ?>
</div>

<!---<div id='youappi_widget_container' style="margin-top: 15px; overflow: hidden;"></div>
<script type='text/javascript' src='http://smartstore.youappi.com/widget/build/?widgetToken=cfd6568f-11d1-4e6c-ada9-aa0ae72d6add'></script>
<script type='text/javascript'>
youAPPiWidget.baseURL = 'http://smartstore.youappi.com';
youAPPiWidget.publisherToken = 'cfd6568f-11d1-4e6c-ada9-aa0ae72d6add';
youAPPiWidget.create();
</script>-->