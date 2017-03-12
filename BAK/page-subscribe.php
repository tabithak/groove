<?php
/*
 * Template Name: Subscribe Page
 */
?>
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
<title>Mobile Groove</title>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
<!--[if lt IE 9]>
  <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
<![endif]-->
<?php wp_head(); ?>
<style>
html, body { overflow-y: auto !important; margin: 0px !important; }
#wpadminbar { display: none !important; }
#subscribeForm .kws_input_container { width: 50%; float: left ; }
#subscribeForm #cc_form_1 { width: 100% !important; text-align: left !important;}
#subscribeForm #cc_form_1 label { text-align: left; }
#subscribeForm #cc_form_1 input { display: block; }
.cc_Go { margin-top: 20px; }
</style>
</head>

<div id="subscribeForm">

  <p>Be the first to hear about new white papers, research and partner events by<br />subscribing to our monthly newsletter.</p>
  <div class="clearfix">

  	<?php if ( is_active_sidebar( 'cc_modal' ) ) { dynamic_sidebar( 'cc_modal' ); } ?>
<!--
	<form action="" id="constant-contact-signup" method="post" name="constant-contact-signup">
    <div class="col-50">

      <p><label class="" for="cc_first_name">Name<span class="req" title="The Name field is required">*</span></label>
        <input class="t required" id="cc_first_name" name="fields[first_name][value]" size="30" type="text" value="">
        <input name="fields[first_name][label]" type="hidden" value="Name"><input name="fields[first_name][req]" type="hidden" value="1">
      </p>

      <p><label class="" for="cc_job_title">Job Title</label>
        <input class="t" id="cc_job_title" name="fields[job_title][value]" size="30" type="text" value="">
        <input name="fields[job_title][label]" type="hidden" value="Job Title">
      </p>

      <p><input class="b searchsubmit" id="cc_Go" name="constant-contact-signup-submit" type="submit" value="Subscribe"></p>

    </div>
    <div class="col-50">

      <p><label class="" for="cc_email_address">Email Address<span class="req" title="The Email Address field is required">*</span></label>
        <input class="t required" id="cc_email_address" name="fields[email_address][value]" placeholder="example@tryme.com" size="30" type="text" value="">
        <input name="fields[email_address][label]" type="hidden" value="Email Address">
        <input name= "fields[email_address][req]" type="hidden" value="1">
      </p>

      <p><label class="" for="cc_company_name">Company Name</label>
        <input class="t" id="cc_company_name" name="fields[company_name][value]" size="30" type="text" value="">
        <input name="fields[company_name][label]" type="hidden" value="Company Name">
      </p>

    </div>
    <input name="cc_newsletter[]" type="hidden" value="1324064368">
	  <input id="cc_redirect_url" name="cc_redirect_url" type="hidden" value="">
	  <input id="cc_referral_url" name="cc_referral_url" type="hidden" value="http%3A%2F%2Fchrisburke.info%2Fdev%2Fgroove%2F">
	  <input name="uniqueformid" type="hidden" value="8828d809d234d92425273652e1c96aa104fff737">
	  <input name="ccformid" type="hidden" value="1">

	  </form>
   -->
  </div>
  <div class="clearfix">
    <h3>How we protect your privacy:</h3>
    <p><img src="/wp-content/themes/groove/img/iconLock.png" class="lockImg">We will never share, sell, or rent individual personal information with anyone for their promotional use without your advance permission. Information submitted to us is only available to employees managing this information for the purposes of sending you emails based on your request for information.</p>
  </div>


</div>

<?php wp_footer(); ?>
</body>
</html>
