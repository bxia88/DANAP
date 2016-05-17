<?php $thisPage="XXXXXX"; ?>
<?php
session_cache_limiter('none');
session_start();
ob_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<!-- TemplateBeginEditable name="doctitle" -->
<title>DAN Divers Alert Network Asia-Pacific : Membership and Insurance for Scuba Divers</title>
<!-- TemplateEndEditable -->
<link rel="icon" href="../favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon" />
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
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
      <p><a href="../Contact_DAN/update_details.php">UPDATE YOUR CONTACT DETAILS</a></p>
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
        <div id="side"> <a id="join" href="../Membership_Insurance/residencycheck.php">Join Now</a> <a id="renew" href="../Membership_Insurance/residencycheck.php">Renew Now</a>
            <?php include("../_includes/navagation.php"); ?>
            <!--end menu-->
            <a href="http://www.danasiapacific.org/main/newsevents/breakingnews.php"><img src="../_images/mbreakingnews.jpg" alt="Breaking News" border="0" /></a> </div>
	    <!-- TemplateBeginEditable name="content_body" -->
        <div id="content">
          <h1>DAN Supporters  </h1>
          <p>DAN AP Member, Narelle, recalls her DCI experience one year on. </p>
          <h2>17 February 2007&hellip;&hellip; An Adventure Begins! </h2>
          <p>&nbsp;</p>
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
