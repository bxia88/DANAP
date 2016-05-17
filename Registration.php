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
<link rel="icon" href="favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="content-style-type" content="text/css" />
<link href="danstyle.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" src="_includes/menu.js"></script>
<script language="JavaScript" src="_includes/crumb.js"></script> 
<?php putenv("TZ=Australia/Melbourne"); ?>
<!-- TemplateBeginEditable name="head" --><!-- TemplateEndEditable -->
<style type="text/css">
<!--
.style1 {
	font-size: 12px;
	font-style: italic;
	font-weight: bold;
}
-->
</style>
</head>
<body>
<div id="root">
  <div id="head">
      <p><a href="Contact_DAN/update_details.php">UPDATE YOUR CONTACT DETAILS</a></p>
      <img src="_images/gradient.t.jpg" width="120" height="47" /></div>
  <div id="posthead">
		<img src="_images/logo.jpg" width="310" height="100" />     
		<img src="_images/banner1.jpg" width="114" height="100" />
		<img src="_images/banner2.jpg" width="114" height="100" />
		<img src="_images/banner3.jpg" width="114" height="100" />
		<img src="_images/banner4.jpg" width="114" height="100" />	</div>
	
	<div id="croot">

      <div id="path">
        <div class="fl"><?php echo date("jS F Y", time()); ?></div>
      </div>
	  <div id="main">
        <div id="side"> <a id="join" href="Membership_Insurance/residencycheck.php">Join Now</a> <a id="renew" href="Membership_Insurance/residencycheck_renew.php">Renew Now</a>
            <?php include("_includes/navagation.php"); ?>
            <!--end menu-->
            <a href="http://www.danasiapacific.org/main/newsevents/breakingnews.php"><img src="_images/mbreakingnews.jpg" alt="Breaking News" border="0" /></a> </div>
	    <!-- TemplateBeginEditable name="content_body" -->
        <div id="content">
          <h1><strong>Registering Your Business As a Bonus+ Partner</strong></h1>
          <p>Send an email to <a href="mailto:marketing@danasiapacific.org">marketing@danasiapacific.org</a> with <u>all</u> the following information.</p>
          <h2>CONTACT DETAILS</h2>
          <ul>
            <li>Business Name</li>
            <li> Business Address: Street Address, State, Zip/Postcode, Country<br />
              </li>
            <li>Contact Person<br />
              </li>
            <li>Phone Number<br />
              </li>
            <li>Fax Number<br />
              </li>
            <li>Email<br />
              </li>
            <li>Website </li>
          </ul>
          <h2>PHOTOS &amp; CORPORATE LOGO </h2>
          <p>To enhance your page on the Bonus+ website, email your  Corporate Logo plus 2-3 Photos <em>(the 2-3 photo&rsquo;s should be low resolution and  150x115 pixels)</em> that highlight a customers experience with your business. </p>
          <h2>BUSINESS DESCRIPTION &ndash; 250 Word  Maximum</h2>
          <p>This is your opportunity to market your business to  DAN Members. Make sure you are clear in explaining the key aspects of your  business. </p>
          <h2>YOUR OFFER FOR DAN MEMBERS TO  REDEEM WITH YOUR BUSINESS</h2>
          <p>Remember  to make your offer as appealing as possible so that you are maximising this  free advertising opportunity. Your aim here is to stand out from the offers of  competing businesses and to make the Member feel they are getting great value.  Feel free to include a package of offers if this is appropriate for your  business. We encourage you to think beyond a basic &ldquo;10% OFF&rdquo; offer. It is the  businesses that put thought in to creating an offer of value that achieve the  greatest results from Bonus+. <br />
            <br />
            <strong>NOTE: Offers that are not seen to be offering DAN Members  genuine value will not automatically be accepted into the Program. It is  essential that Bonus+ be viewed as credible by Members to ensure all parties  involved achieve positive results. As such, there needs to be a legitimate  dollar value saving involved in your offer. If you are able to state the actual  dollar saving that will only work to enhance your offer.</strong> </p>
          <h2>PARTNER AGREEMENT</h2>
          <p>Please read the following conditions. By registering as a Bonus+  Partner you are agreeing to the DAN AP Bonus+ Program Partner Terms &amp;  Conditions.</p>
          <h2 align="left">TERMS &amp; CONDITIONS</h2>
          <ol><li>A business that agrees to take part must be       in a position to fulfill its offer/s for a minimum period of three-months       commencing from the date the business is added to the Bonus+ website.</li>
            <li>Beyond the minimum three-month period, if a       business wishes to opt-out of the program they must give DAN AP notice of one-week via email or fax.</li>
            <li>A       business must give DAN AP notice of one week via email or fax of any variation       it wishes to make to the current offer.</li>
            <li>Businesses       are only obligated to fulfil the offers to <em>current</em> DAN Members       worldwide on the presentation of a valid DAN Membership card to the       participating business.</li>
            <li>All offers are &ldquo;ongoing&rdquo; until a Partner elects  to opt-out of the program or advises the marketing department of a change to  the existing offer.              </li>
          </ol>
          <p class="style1">We look forward to welcoming you as a Bonus+ Partner! </p>
          <p>&nbsp;</p>
          <p>&nbsp;</p>
          <p class="subHeading">&nbsp;</p>
        <a id="back" href="javascript:history.go(-1)" onmouseover="self.status=document.referrer;return true">BACK</a> </div>
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
