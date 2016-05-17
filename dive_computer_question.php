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
	      <h1>Member Question: The Difference in Dive Computers </h1> 
        <p><strong><em>My buddy’s computer gets him back to  the surface quicker than mine. I am considering selling my current computer and  buying one like his. What do you think?</em> </strong></p>
	      <p>	        DAN Answer: I think you are lucky! Your computer seems to be  giving you a margin of safety that your buddy’s computer is not giving him.  Computers are mechanical devices which are programmed with a mathematical  formula designed to evaluate time, depth, and ascent speed, and calculate your  safest rate of ascent from a given dive, including decompression obligations  and safety stops. Different computers use different mathematical formulae, and  the decisions they make on what you should do on ascent may differ from one  computer to another. </p>
	      <p>Most computers allow the user to program in a  margin for safety. A higher safety factor will see you doing more decompression  than normal, while a lower safety factor will have the diver back on the  surface quicker. Ask your buddy if he has set this option. Or is YOUR computer  on a conservative setting?<br />
            <br />
Sometimes two divers believe they have done the same dive, therefore incurring  the same deco obligation, but subtle variations in depth, descent/ascent rates,  time spent at different depths, can change your profile compared with your  buddy.<br />
<br />
In my opinion, seeking the quickest trip back to the surface based upon  decisions from a mechanical box on your wrist is hardly the way to go. The  incidence of decompression sickness among divers who follow decompression  obligations correctly is sufficiently high that I advise all divers to be  conservative when calculating decompression. <br />
<br />
In other words, your computer’s decisions regarding your decompression seems to  be a safer one than that supplied to your buddy. After all, an extra ten  minutes of deco is better than ten hours in the chamber.</p>
	      <p><strong>Not Yet a DAN Member? <a href="Membership_Insurance/residencycheck.php">JOIN TODAY</a></strong></p>
	      <p><em>Answer provided by Stan  Bugg, who is on the DAN AP Board of Directors (</em><em>Copyright sbugg  2014</em>)</p>
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
