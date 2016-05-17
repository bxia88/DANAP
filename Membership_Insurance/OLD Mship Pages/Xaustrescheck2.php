<?php $thisPage="MEMBERSHIP austrescheck2"; ?>
<?php
session_cache_limiter('none');
session_start();
ob_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/DAN_template.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>

<!-- InstanceBeginEditable name="doctitle" -->
<title>DAN Divers Alert Network Asia-Pacific : Membership and Insurance for Scuba Divers</title>
<!-- InstanceEndEditable -->
<meta name="keywords" content="Diving, Scuba, Scuba Diving, Scuba Dive, Diving Insurance, PADI, Diving Equipment, Dive, Liveaboard Diving, Scuba Dive, Dive Shops"> 
<link rel="icon" href="../favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="content-style-type" content="text/css" />
<link href="../danstyle.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Raleway:400,600' rel='stylesheet' type='text/css'>
<script language="JavaScript" src="../_includes/menu.js"></script>
<script language="JavaScript" src="../_includes/crumb.js"></script> 
<script language="JavaScript" src="../_includes/jquery.js"></script>
<!-- InstanceBeginEditable name="head" -->
<script type="text/javascript"
src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	//When you click on a link with class of poplight and the href starts with a # 
	$('a.poplight[href^=#]').click(function() {
	    var popID = $(this).attr('rel'); //Get Popup Name
	    var popURL = $(this).attr('href'); //Get Popup href to define size

	    //Pull Query & Variables from href URL
	    var query= popURL.split('?');
	    var dim= query[1].split('&');
	    var popWidth = dim[0].split('=')[1]; //Gets the first query string value

	    //Fade in the Popup and add close button
	    $('#' + popID).fadeIn().css({ 'width': Number( popWidth ) }).prepend('<a href="#" class="close"><img src="../_images/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>');

	    //Define margin for center alignment (vertical   horizontal) - we add 80px to the height/width to accomodate for the padding  and border width defined in the css
	    var popMargTop = ($('#' + popID).height() + 80) / 2;
	    var popMargLeft = ($('#' + popID).width() + 80) / 2;

	    //Apply Margin to Popup
	    $('#' + popID).css({
	        'margin-top' : -popMargTop,
	        'margin-left' : -popMargLeft
	    });

	    //Fade in Background
	    $('body').append('<div id="fade"></div>'); //Add the fade layer to bottom of the body tag.
	    $('#fade').css({'filter' : 'alpha(opacity=80)'}).fadeIn(); //Fade in the fade layer - .css({'filter' : 'alpha(opacity=80)'}) is used to fix the IE Bug on fading transparencies 

	    return false;
	});

	//Close Popups and Fade Layer
	$('a.close, #fade').live('click', function() { //When clicking on the close or fade layer...
	    $('#fade , .popup_block').fadeOut(function() {
	        $('#fade, a.close').remove();  //fade them both out
	    });
	    return false;
	});
});
</script>
<!-- InstanceEndEditable -->
</head>
<body> 
<div id="root">
  <div id="posthead">
		
		 <a id="danlogo" href="/"><img src="../_images/danlogo.png" alt="DAN Homepage" width="220" height="59" /></a>
		<div id="join_renew_contact">

		<p id="join_renew"><a href="residencycheck.php">Join</a> | <a href="residencycheck_renew.php">Renew</a></p>
		<p id="about_contact"><a href="http://www.danasiapacific.org/main/korean.php">Korean 한국어</a> | <a href="http://www.danasiapacific.org/Chinese">Chinese 中文</a> | <a href="/about_DAN.php">About DAN</a> | <a href="/Membership_Insurance/faq.php">FAQs</a> | <a href="/Contact_DAN.php">Contact DAN</a> | <a id="fblogo" href="http://www.facebook.com/pages/DAN-Asia-Pacific/150119398346709"><img src="../_images/facebook.png" alt="DAN on Facebook" width="64" height="15" /></a></p>

		</div>
  </div>
<div id="croot">
	  <div id="main"> 
        <div id="side"> 
            <?php include("../_includes/navagation.php"); ?>          
        </div>
        <div id="banner_right">
			<img class="banner" src="../_images/banner_images/rotate.php" width="955" height="330">
		</div>
	   	<div class="clear cx"><!-- --></div>
	</div><!-- Close Main -->
 	<div id="content"><!-- InstanceBeginEditable name="testimoinals_block" -->
 	  <div id="testimonials"><?php include("../_includes/01a_testimonials.php"); ?></div>
      <div id="body_content">
 	<!-- InstanceEndEditable --><!-- InstanceBeginEditable name="content_body" -->
	    <div id="content">
          <h1><strong>Would  you like to add a Dive Injury (Treatment) Insurance Plan to your DAN Membership?</strong></h1>

          <p>If you select &ldquo;Yes&rdquo; each of the  Dive Injury Insurance policies will be explained. You will then be able to  select the plan that meets your needs on the application form.</p>

          <p>            DAN Membership includes Worldwide  Emergency Evacuation but does <strong>not</strong> cover treatment costs. The<em> optional</em> Dive Injury Insurance Plans provide coverage for treatment and certain other  costs associated with a covered dive accident (within the limits of each plan). </p>

          <p>            IMPORTANT: The <em>optional</em> Dive Injury Insurance Plans are per person and can only be purchased at the time of becoming a DAN  Asia-Pacific Member. &nbsp;</p>

          <div class="center"><table width="350" height="90" border="0">

            <tr>

              <td><div align="center"><a id="yes" href="austplans1.php">YES</a></div></td>

              <td><div align="center"><a href="#?w=500" rel="popup_no" id="no" class="poplight">NO</a></div></td>





            </tr>

          </table></div>

          <p><strong>IMPORTANT NOTE:</strong> <strong>Any signs or symptoms that appear within 24 to 48 hours of diving should be suspected of being diving-related.</strong> 

          It is important to get specialist diving medical advice as soon as possible and<span class="red"><strong> not to dive again until this is done</strong></span>. Call a DAN-supported <a href="../emergency/hotline_numbers.php">diving emergency hotline</a> for advice.</p>

          <p><a id="back" href="javascript:history.go(-1)" onMouseOver="self.status=document.referrer;return true">BACK</a>          </p>
          
          <div id="popup_no" class="popup_block">
    <h2>YOU ARE APPLYING FOR DAN MEMBERSHIP ONLY</h2><br />
    <p><strong>This includes Emergency Evacuation but it DOES NOT include coverage for treatment costs associated with a covered diving accident.</strong><br /><br />
    	To be covered for emergency evacuation <u>and</u> treatment for a covered diving accident/illness you need to add on an optional Dive Injury (Treatment) Insurance plan.<br /><br />
    	Please select your preference below:</p>
    <div class="center">
		    <table width="500" height="100" border="0">
            <tr>
              <td><div align="center"><a id="membership" href="austdec.php">YES</a></div></td>
              <td><div align="center"><a id="membershipplus" href="austplans1.php">NO</a></div></td>
            </tr>
          </table></div>
 </div>
	    </div>
	    <!-- InstanceEndEditable --> 
	  	<div class="clear cx"><!-- --></div>
    </div>
  </div>
</div>

<div id="footer">
	<div id="cfooter"><p>INCIDENT PREVENTION&nbsp;&nbsp;  <span class="red">+</span>&nbsp;&nbsp;   INCIDENT MANAGEMENT&nbsp;&nbsp;  <span class="red">+</span>&nbsp;&nbsp;INCIDENT PROTECTION</p><a id="fb_icon" href="http://www.facebook.com/pages/DAN-Asia-Pacific/150119398346709"><img src="../_images/fb.png" alt="DAN on Facebook" width="33" height="33" /></a></div>
	<p id="footerlinks">
	
	<p class="copyright"> Divers Alert Network (DAN) Asia-Pacific Limited ABN 67 066 827 129 &nbsp;&nbsp;&nbsp;Copyright &copy; Divers Alert Network 2014  </p>
	
	<a class="privacy" href="../privacy.php"<?php if ($thisPage=="privacy") echo " id=\"footercurrent\""; ?>>privacy</a>
    </div>
<div>
<?php include("../_includes/analyticstracking.php") ?>
</body>
<!-- InstanceEnd --></html>
