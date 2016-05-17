<?php $thisPage="XXXXXX"; ?>
<?php
session_cache_limiter('none');
session_start();
ob_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/DAN_template.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>

<!-- InstanceBeginEditable name="doctitle" -->
<title>DAN Divers Alert Network Asia-Pacific </title>
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
<link href="../plans.css" rel="stylesheet" type="text/css">
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
	      <h1>Dive Dive Dive ... Until You Drop! </h1> 
          <p>Most  divers these days use dive computers and appear to be reasonably confident that  they will avoid decompression illness (DCI) as long as they dive within the  limits of these devices. Interestingly, the majority of divers DAN AP has  managed with DCI have been using dive computers and diving within the limits  advised by their computers. </p>
          <p>The issue is that dive computer  algorithms are based on decompression models, which are generalisations of what  might be occurring within a diver’s body. These models have inherent  inaccuracies and cannot cater for the broad individual variation between divers  and the type of dives undertaken. </p>
          <p>Deeper dives, longer dives, short  surface intervals and repetitive diving can all lead to higher inert gas loads,  greater bubble formation and consequently less accurate decompression  calculations. Divers need to be aware that deeper diving is associated with a  higher risk of DCI and the resulting DCI is more likely to affect the nervous  system. Very long dives also carry a higher risk of DCI. </p>
          <p>Bubbles can often be found in a  diver’s venous blood after surfacing from a dive and this is common after  recreational dives. These bubbles are usually detectable within the first hour  after diving and can continue to appear in peak numbers for several hours.  Therefore, in most circumstances, it is a good idea to extend surface intervals  as long as possible between dives. Although it is often convenient and  relatively common on dive boats to have surface intervals of around one hour or  so, it is probably safer to extend these to at least two – three hours, preferably  longer, especially after deeper dives.</p>
          <p>In reality, relatively few divers  suffer DCI given the enormous amount of diving that takes place around the  world. However, for those that do, it can be a very unpleasant, disruptive and,  in some cases, life-changing experience. Therefore, it is wise to balance the  benefits of the extra depth, dive times and dives against the potential  problems that can arise, and make an informed choice about the level of risk  one is willing to take. </p>
          <p><a href="file:///C|/Users/Marketing/Desktop/CURRENT DAN WEBSITE 201408/not_your_typical_honeymoon.php"></a><br />
          </p>
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
<?php include("_includes/analyticstracking.php") ?>
</body>
<!-- InstanceEnd --></html>
