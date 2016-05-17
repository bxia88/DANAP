<?php $thisPage="XXXXXX"; ?>
<?php
session_cache_limiter('none');
session_start();
ob_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="../Templates/DAN_template.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>

<!-- InstanceBeginEditable name="doctitle" -->
<title>DAN Divers Alert Network Asia Pacific: Update Your Contact Details - PREVIEW</title>
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
<SCRIPT LANGUAGE = "JavaScript">
	function isFilled(str){ return (str != ""); }
	function isEmail(str) {	return (str.indexOf(".") > 2) && (str.indexOf("@") > 0); }
 	function isDigital(str)	{ return(parseFloat(str,10)==(str*1)); }
 	function isCurrency(val) { 	var re = /^(\$?\d+\$?|\$?\d+\.\d+\$?)$/; return (re.test(val)); }
		function ValidForm(form) {
		var field, i;
		var req = new Array(0);
		var email = new Array(0);
		var digits = new Array(0);
		var currs = new Array(0);

		for (i=0;i<0;i++)	{
			eval("field = form." + req[i]);
			if (!isFilled(field.value))	{
				alert("Field '" + field.title + "' is required to be filled in before successful submission.");
				field.focus();
				return false;
				break;
			}}
		for (i=0;i<0;i++)	{
			eval("field = form." + email[i]);
			if (!isEmail(field.value)) {
				alert("Field '" + field.title + "' is required to be filled in with valid email addresses before successful submission.");
				field.focus();
				return false;
				break;
			}}
		for (i=0;i<0;i++)	{
			eval("field = form." + digits[i]);
			if (!isDigital(field.value)) {
				alert("Field " + field.title + " is required to be filled in only with digits (0-9) and decimal point before successful submission.");
				field.focus();
				return false;
				break;
			}}
		for (i=0;i<0;i++)	{
			eval("field = form." + currs[i]);
			if (!isCurrency(field.value)) {
				alert("Field " + field.title + " is required to be filled in only with digits (0-9) a decimal point, or a dollar sign before successful submission.");
				field.focus();
				return false;
				break;
			}}
		return true; }

</SCRIPT>
<!-- ATTENTION! Do not remove this string -->
<BASE href="http://www.danasiapacific.org/main/contact/">
<!-- ... end of attention string -->
<link href="http://www.danasiapacific.org/main/form.css" rel="stylesheet" type="text/css" />
<link href="http://www.danasiapacific.org/main/danstyle.css" rel="stylesheet" type="text/css" />
<!-- InstanceEndEditable -->
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
          <h1>Update Your Contact Details - PREVIEW</h1>
          <p>Please check that all details have been entered correctly.</p>
		  	<FORM ACTION="http://www.danasiapacific.org/main/_form/users/formprocessorpro.php" METHOD="POST" 
		  	ENCTYPE="multipart/form-data" id="preview" onsubmit="return ValidForm(this);">
			<INPUT TYPE="hidden" NAME="___form_id_" VALUE="f984852bfad714aa68e42e2c64e3c77146219cce37cb4">
			<table>
			<tr>
			<td class="heading">Member Number</td>
			<td class="fcol">[rd_Member_Number]</td>
			</tr><tr>
			<td class="heading">First Name</td>
			<td class="fcol">[rw_First_Name]</td>
			</tr><tr>
			<td class="heading">Last Name</td>
			<td class="fcol">[rw_Last_Name]</td>
			</tr><tr>
			<td class="heading">Home Number</td>
			<td class="fcol">[d_Home_Number]</td>
			</tr><tr>
			<td class="heading">Work Number</td>
			<td class="fcol">[d_Work_Number]</td>
			</tr><tr>
			<td class="heading">Mobile Number</td>
			<td class="fcol">[d_Mobile_Number]</td>
			</tr><tr>
			<td class="heading">Fax</td>
			<td class="fcol">[d_Fax]</td>
			</tr><tr>
			<td class="heading">Address 1</td>
			<td class="fcol">[Address_1]</td>
			</tr><tr>
			<td class="heading">Address 2</td>
			<td class="fcol">[Address_2]</td>
			</tr><tr>
			<td class="heading">City</td>
			<td class="fcol">[w_City]</td>
			</tr><tr>
			<td class="heading">State</td>
			<td class="fcol">[w_State]</td>
			</tr><tr>
			<td class="heading">Zip/Post Code</td>
			<td class="fcol">[d_Zip_Post_Code]</td>
			</tr><tr>
			<td class="heading">Country</td>
			<td class="fcol">[w_Country]</td>
			</tr><tr>
			<td class="heading">Futher Comments</td>
			<td class="fcol">[Futher_Comments]</td>
			</tr>
			<td class="fname">&nbsp;</td>
			  	<td class="fcol">
				<input name="submit" type="submit" class="btn" value=" Submit to DAN " />
   			  <input type="button" value="Cancel" class="btn"  onClick="document.location = 'http://www.danasiapacific.org/main/contact/update_details.php'"></td>
			</table></FORM>
			</table>
			
			</table>

          <a id="back" href="javascript:history.go(-1)" onmouseover="self.status=document.referrer;return true">BACK</a>
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
