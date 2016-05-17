<?php $thisPage="SPONSORS student_membership_registration"; ?>
<?php
session_cache_limiter('none');
session_start();
ob_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/DAN_template.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>

<!-- InstanceBeginEditable name="doctitle" -->
<title>DAN Divers Alert Network Asia-Pacific : Student Membership Registration</title>
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
<!-- InstanceBeginEditable name="head" --><!-- InstanceEndEditable -->
</head>
<body> 
<div id="root">
  <div id="posthead">
		
		 <a id="danlogo" href="/"><img src="../_images/danlogo.png" alt="DAN Homepage" width="220" height="59" /></a>
		<div id="join_renew_contact">

		<p id="join_renew"><a href="../Membership_Insurance/residencycheck.php">Join</a> | <a href="../Membership_Insurance/residencycheck_renew.php">Renew</a></p>
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
         <h1>Registration Process for Student Membership </h1>
        
          <p align="justify"> There are two parts to the registration process for Student Membership:</p>
          <p align="justify">1. The Dive Centre or Independent Instructor needs to be a registered DAN Asia-Pacific <a href="../sponsors/supporter_info.php">Supporter</a>.            </p>
          <p align="justify">2. Each Instructor in your dive centre that will be offering Student Membership to your customers needs to be registered with DAN Asia-Pacific (by completing the Student Insurance - Instructor Registration Form).            </p>
          <p align="justify">The cost is AUD$100 per Instructor. </p>
          <p align="justify">Note: This fee is capped at AUD$300 for dive operators with numerous instructors, provided they are registered at the same time.</p>
          <p><strong><a href="../_pdf/Student_Ins_Inst_Registration.pdf">CLICK HERE</a></strong> to Download the Instructor Registration Form</p>
          <p><em> Note: Each Instructor that is to be registered must complete the form.</em></p>
		  
		  <h2> Other Requirements </h2>
		  <h5><strong> Each Instructor Must be a DAN Asia-Pacific Member </strong>	</h5>
		  <p>Each Instructor looking to register as a provider of DAN Student Membership must also be a DAN Asia-Pacific Member.            </p>
		  <p>The Instructor’s DAN Asia-Pacific Member Number needs to be included on the Student Registration Form. <br />
		    <br />
	      To join DAN Asia-Pacific visit the<a href="../membership.php"> Membership &amp; Insurance</a> section or select '<em>Join Now</em>' from the Homepage. </p>
		  <h5> <strong> Each Instructor Must be a Certified DAN O2 Provider </strong> </h5>
          <p>Email <a href="mailto:training@danasiapacific.org">DAN Training</a> to locate a DAN O2 Instructor in your area if you do not have a current DAN O2 Provider Certification.</p>
          <p><em> IMPORTANT: As a dive safety association we need to ensure that only dive operators / instructors with a committed dive safety focus are in the unique position of being able to offer Student Membership to their customers. </em></p>
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
