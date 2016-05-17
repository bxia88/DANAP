<?php $thisPage="XXXXXX"; ?>
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
<link rel="icon" href="favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="content-style-type" content="text/css" />
<link href="danstyle.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Raleway:400,600' rel='stylesheet' type='text/css'>
<script language="JavaScript" src="_includes/menu.js"></script>
<script language="JavaScript" src="_includes/crumb.js"></script> 
<script language="JavaScript" src="_includes/jquery.js"></script>
<!-- InstanceBeginEditable name="head" --><!-- InstanceEndEditable -->
</head>
<body> 
<div id="root">
  <div id="posthead">
		
		 <a id="danlogo" href="/"><img src="_images/danlogo.png" alt="DAN Homepage" width="220" height="59" /></a>
		<div id="join_renew_contact">

		<p id="join_renew"><a href="Membership_Insurance/residencycheck.php">Join</a> | <a href="Membership_Insurance/residencycheck_renew.php">Renew</a></p>
		<p id="about_contact"><a href="http://www.danasiapacific.org/main/korean.php">Korean 한국어</a> | <a href="http://www.danasiapacific.org/Chinese">Chinese 中文</a> | <a href="/about_DAN.php">About DAN</a> | <a href="/Membership_Insurance/faq.php">FAQs</a> | <a href="/Contact_DAN.php">Contact DAN</a> | <a id="fblogo" href="http://www.facebook.com/pages/DAN-Asia-Pacific/150119398346709"><img src="_images/facebook.png" alt="DAN on Facebook" width="64" height="15" /></a></p>

		</div>
  </div>
<div id="croot">
	  <div id="main"> 
        <div id="side"> 
            <?php include("_includes/navagation.php"); ?>          
        </div>
        <div id="banner_right">
			<img class="banner" src="_images/banner_images/rotate.php" width="955" height="330">
		</div>
	   	<div class="clear cx"><!-- --></div>
	</div><!-- Close Main -->
 	<div id="content"><!-- InstanceBeginEditable name="testimoinals_block" -->
 	  <div id="testimonials"><?php include("_includes/01a_testimonials.php"); ?></div>
      <div id="body_content">
 	<!-- InstanceEndEditable --><!-- InstanceBeginEditable name="content_body" -->
        <div id="content">
          <h1>Registering Your Information</h1>
          <p>All you need to do is click the 'Register Here' link at the bottom of this page and type in your responses for the various fields. </p>
          <p class="em">Members should be aware of the following: </p>
          <p><span class="sred">1.</span> All information will be stored as entered by you so please be sure to type your information carefully to ensure accurate information is accessed in the event of a medical emergency. </p>
          <p><span class="sred">2. </span>You need to use the TAB key to move between the various fields. Do NOT use the Enter key to move between fields. The enter key indicates that you have finished entering your information so be careful to only select Enter once you have completed all fields. If you accidentally use the Enter key before completion you will receive a message that states 'Completed with Errors'. </p>
          <p><span class="sred">3.</span><span class="em"> Note:</span> If you try to re-enter data upon accidentally having used the Enter key you will be creating a duplicate entry for yourself on the database. If this happens to you, you will need to send an email to <a href="mailto:info@danasiapacific.org">info@danasiapacific.org</a> with your name and member number advising us of this so we can remove any duplicate entries on the database. </p>
          <p><span class="sred">4.</span> Once you have successfully entered your information a message will appear stating that your information has been saved and will ask whether you would like to enter another member. </p>
          <p><a href="http://www.danasiapacific.org/Medical/">REGISTER HERE</a></p>
          <a id="back" href="javascript:history.go(-1)" onmouseover="self.status=document.referrer;return true">BACK</a>
		</div>
        <!-- InstanceEndEditable --> 
	  	<div class="clear cx"><!-- --></div>
    </div>
  </div>
</div>

<div id="footer">
	<div id="cfooter"><p>INCIDENT PREVENTION&nbsp;&nbsp;  <span class="red">+</span>&nbsp;&nbsp;   INCIDENT MANAGEMENT&nbsp;&nbsp;  <span class="red">+</span>&nbsp;&nbsp;INCIDENT PROTECTION</p><a id="fb_icon" href="http://www.facebook.com/pages/DAN-Asia-Pacific/150119398346709"><img src="_images/fb.png" alt="DAN on Facebook" width="33" height="33" /></a></div>
	<p id="footerlinks">
	
	<p class="copyright"> Divers Alert Network (DAN) Asia-Pacific Limited ABN 67 066 827 129 &nbsp;&nbsp;&nbsp;Copyright &copy; Divers Alert Network 2014  </p>
	
	<a class="privacy" href="../privacy.php"<?php if ($thisPage=="privacy") echo " id=\"footercurrent\""; ?>>privacy</a>
    </div>
<div>
<?php include("_includes/analyticstracking.php") ?>
</body>
<!-- InstanceEnd --></html>
