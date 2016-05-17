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

      <h1><em>Wherever you are diving, make DAN Coverage part of your dive kit!  </em></h1>
      <h2>Did you know that emergency medical evacuations can cost more than $100,000?</h2>
      <p>DAN provides protection for scuba divers with Worldwide Emergency Evacuation Coverage (with your DAN Membership) and <em>optional</em> Dive Injury Insurance Plans, to cover  chamber and hospital costs following a covered diving accident. </p>
      <p><a href="http://join.danap.org">Joining DAN*</a> (Membership and Dive Injury Insurance) gives you peave of mind. It allows you to  enjoy your scuba diving knowing you will be looked after in the event of a diving incident, wherever you are in the world,  24-hours a day, 7 days a week.</p>
      <p><em>Why DAN?</em> With   30+ years  experience helping sick and injured scuba divers worldwide, DAN are the experts in diving accident management. </p>
      <p id="btjoinnow" onmouseover="self.status=document.referrer;return true" href="http://join.danap.org"><a id="btjoinnow" href="http://join.danap.org" onmouseover="self.status=document.referrer;return true">BACK</a> </p>
      <p><em>We look forward to welcoming you as a DAN Member and supporter of dive safety.</em><br />
      </p>
      <p>* DAN AP can only accept as Members, residents of the Asia-Pacific (excluding Japan). If you reside in another part of the world please <a href="Contact_DAN/internationaloffices.php">CLICKHERE </a>to find the DAN branch that looks after your region.</p>
      <p>&nbsp;</p>

          
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
