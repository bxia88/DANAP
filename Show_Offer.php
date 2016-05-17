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
<!-- InstanceBeginEditable name="head" -->
<style type="text/css">
<!--
.style1 {
	color: #000099;
	font-style: italic;
	font-size: medium;
}
.style3 {font-size: x-large}
-->
</style>
<!-- InstanceEndEditable -->
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

      <h3 class="style1">MIDE 2015 Show Special <br />
      </h3>
      <h1><span class="style3"><em>Receive 50% Off DAN Asia-Pacific Membership </em>*</span></h1>
      <p id="btjoinnow" onMouseOver="self.status=document.referrer;return true" href="residencycheck.php"><a id="btjoinnow" href="membership_insurance/residencycheck.php" onMouseOver="self.status=document.referrer;return true">BACK</a></p>

        

        <p>Joining DAN (Membership and Dive Injury Insurance) gives you peave of mind. It allows you to  enjoy your scuba diving knowing you will be looked after in the event of a diving incident, wherever you are in the world,  24-hours a day, 7 days a week.</p>

          
        <p><em>Why DAN?</em> With   30+ years  experience helping sick and injured scuba divers worldwide, DAN are the experts in diving accident management. </p>
        <p>At the time of becoming a DAN <a href="Membership_Insurance/DAN_membership_benefits.php">Member</a>, you have the option to add, at the normal price, a <a href="Membership_Insurance/osinstable.php">DAN Dive Injury Insurance Plan</a> to be covered for Chamber and Hospital Costs following a covered diving incident (within the limits of the plan you select).</p>
        <p><em>We look forward to welcoming you as a DAN Asia-Pacific Member.</em></p>
        <h2>Conditions*</h2>
        <p>To receive 50% Off DAN AP Membership:</p>
        <ul>
          <li>You must enter <strong>MIDE2015</strong> in the Referral Code field, which is located on the second screen of the online application.</li>
          <li>Your must submit your application by the 21st June  to receive the discount. <em>NOTE: The discount is not applied on the form but when the DAN Team process your application. </em></li>
          <li>You must be a new DAN Member. Renewing Members are not eligible for this promotion.</li>
          <li>Optional DAN Dive Injury Insurance is charged at the full normal price. </li>
          <p><br />
          <strong>Have a question?</strong> Send us an <a href="mailto:info@danap.org">email</a> or call +61-3-9886 9166.</p>
      </ul>
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
