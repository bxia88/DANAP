<?php $thisPage="XXXXXX"; ?>
<?php
session_cache_limiter('none');
session_start();
ob_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<!-- TemplateBeginEditable name="doctitle" -->
<title>DAN Divers Alert Network - Asia Pacific</title>
<!-- TemplateEndEditable -->
<link rel="icon" href="../favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="content-style-type" content="text/css" />
<link href="../danstyle.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" src="../_includes/menu.js"></script>
<script language="JavaScript" src="../_includes/crumb.js"></script> 
<?php putenv("TZ=Australia/Melbourne"); ?>
<!-- TemplateBeginEditable name="head" --><!-- TemplateEndEditable -->
</head>
<body>
<div id="root">
  <div id="head">
      <p><a href="../contact/update_details.php">UPDATE YOUR CONTACT DETAILS</a></p>
      <img src="../_images/gradient.t.jpg" width="120" height="47" /></div>
  <div id="posthead">
		<img src="../_images/logo.jpg" width="310" height="100" />     
		<img src="../_images/banner1.jpg" width="114" height="100" />
		<img src="../_images/banner2.jpg" width="114" height="100" />
		<img src="../_images/banner3.jpg" width="114" height="100" />
		<img src="../_images/banner4.jpg" width="114" height="100" />	</div>
	
	<div id="croot">

      <div id="path">
        <div class="fl"><?php echo date("jS F Y", time()); ?></div>
      </div>
	  <div id="main">
        <div id="side"> <a id="join" href="../membership/residencycheck.php">Join Now</a> <a id="renew" href="../membership/residencycheck_renew.php">Renew Now</a>
            <?php include("../_includes/navagation.php"); ?>
            <!--end menu-->
            <a href="http://www.danasiapacific.org/main/newsevents/breakingnews.php"><img src="../_images/mbreakingnews.jpg" alt="Breaking News" border="0" /></a> </div>
	    <!-- TemplateBeginEditable name="content_body" -->
              <div id="content">
        <h2><em>Welcome to the Divers Alert Network Asia-Pacific</em></h2>
        <p>DAN is <em>your</em> dive safety association. With 30+ years  helping divers worldwide, DAN are the <em>experts</em> in diving accident management.  Wherever members live or dive around the world they have peace of mind knowing  that DAN is available 24-hours a day, 7 days a week to assist in the event of  an accident. Join more than 300,000  of your fellow scuba divers worldwide who are already DAN Members. </p>
        <h6>DAN Membership &amp; Dive Injury Insurance </h6>
        <p>Your Membership includes the benefits of <a href="../membership/travelassist.php">DAN TravelAssist</a>, a  subscription to <a href="../inside/alertdiver.php"><em>Alert Diver</em></a> magazine and a number of other valuable benefits,  including the opportunity to add an optional <a href="../membership/insurancecountrylink.php">Dive Injury Insurance Plan</a>, to be  covered for Chamber and Hospital costs following a covered diving accident.</p>
        <p><em>To discover the full  range of Membership Benefits, to learn more about our range of optional Dive  Injury (Treatment) Insurance options, or to join DAN, follow the links below.</em></p>
        <h6 align="justify"><ul>
            <li><strong><a href="../membership/residencycheck.php">JOIN DAN</a></strong></li>
            <li><strong><a href="../membership/benefits.php">DAN</a></strong> <a href="../membership/benefits.php"><strong>Membership  Benefits</strong></a></li>
            <li><strong><a href="../membership/insurancecountrylink.php">Optional Dive Injury (Treatment) Insurance Plans</a></strong> </li>
            <li><strong><a href="../membership/residencycheck_prices.php">Prices</a></strong> <a href="../membership/residencycheck_prices.php"><strong>for DAN  Membership and Dive Injury Insurance</strong></a></li>
            </ul>
        </h6>
        <p><em>We look forward to welcoming you as a DAN Member and supporter of dive safety.</em></p>
      </div>
        <!-- TemplateEndEditable --> </div>
	  <div class="clear cx"><!-- --></div>
	</div>
	<div id="footer">
	<div id="cfooter">
	  <p>Copyright &copy; Divers Alert Network 2007 | site designed by <a href="http://greenpixel.com.au">Greenpixel</a></p>
	</div>
	<p id="footerlinks">
	<a href="http://www.danasiapacific.org/main/privacy.php"<?php if ($thisPage=="privacy") echo " id=\"footercurrent\""; ?>>privacy</a></p>
	</div>
</div>
</body>
</html>
