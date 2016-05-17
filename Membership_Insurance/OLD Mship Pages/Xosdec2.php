<?php $thisPage="MEMBERSHIP osdec"; ?>
<?php
session_cache_limiter('none');
session_start();
ob_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/DAN_template.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>

<!-- InstanceBeginEditable name="doctitle" -->
<title>DAN Divers Alert Network - Asia Pacific : Membership and Insurance for Scuba Divers</title>
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
<style type="text/css">
<!--
.style1 {font-size: 18px}
-->
</style>
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
          <h3>Do you have a pre-existing / pre-disposing medical  condition, serious injury or have you suffered from decompression illness? <a href="medcon_info.php">READ MORE</a></h3>
          <h3>Are you a non-National of the Asia-Pacific? <a href="non_nat.php">LEARN MORE<br />
          </a><br />
          </h3>
          <p class="sred style1">APPLY FOR DAN  MEMBERSHIP  (ON-LINE OR FAX)</p>
          <h6>BROWSER PROBLEM<em> (including, but not limited to, Safari &amp;  Google Chrome) </em></h6>
          <h5>Certain browsers are NOT compatible with DAN forms. If you  experience difficulties, please try an alternative browser,  such a Firefox or Internet Explorer.</h5>
          <h6>iPad and iPhone Users </h6>
          <h5><strong>The Dolphin browser (free at the App Store) is compatible with  DAN's online application.</strong></h5>
          <div class="center">
		    <table width="350" height="90" border="0">
            <tr>
              <td><div align="center">
                <p><a id="applyonline" href="https://www.danasiapacific.org/main/mforms/os-n_membershipform.php">Click Here  To Apply On-Line</a></p>
                <p><img src="../_images/ssl_seal.gif" alt="Security Certificate" width="100" height="60" /></p>
              </div></td>
              <td class="strong">OR</td>
              <td><h4 align="center"><a href="../_pdf/osfaxform.pdf">Click here to download a MEMBERSHIP APPLICATION FORM To fax to DAN </a></h4></td>
            </tr>
          </table>	    
		  </div>
		  
	        <a href="http://www.adobe.com/products/acrobat/readstep2.html"><img src="../_images/get_adobe_reader.gif" alt="Get Acrobat Reader" width="112" height="33" border="0" class="imgRight" /></a>
	      <p class="fine">The FAX form requires Acrobat Reader, click on the image to download Acrobat Reader</p>
		  
		  
          <p>&nbsp;</p>
          <p class="sred" style="font-size:1.4em">&nbsp;</p>
          <a id="back" href="javascript:history.go(-1)" onMouseOver="self.status=document.referrer;return true">BACK</a>
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