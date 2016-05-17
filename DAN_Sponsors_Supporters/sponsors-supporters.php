<?php $thisPage="XXXXXX"; ?>
<?php

$server = "wic001my.server-sql.com";
$user = "vs249792_1_dbo";
$password = "wda8W2472P";
$database = "vs249792_1";

mysql_connect($server,$user,$password) or die("Could not connect: " . mysql_error());
mysql_query("USE $database");

$query = mysql_query("SELECT * FROM world") or die("Select Failed!");
while ($row = mysql_fetch_assoc($query))
{
	$countries[] = $row;
};

?>

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
<script type="text/javascript">
function showLocation() {
var selectedValue = document.getElementById("acountry").value;
document.getElementById("location").style.display = "none";
if(selectedValue == "Australia")
document.getElementById("location").style.display = "inline";
}
</script>
<!-- TemplateBeginEditable name="head" --><!-- TemplateEndEditable -->
</head>
<body onload="showLocation();">
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
      <form name="supporters" method="POST" action="dan-supporters.php" >

   <div align="left">
     <h1>DAN Sponsors &amp; Supporters </h1>
     <p><em>The general motivation behind businesses becoming DAN Sponsors or Supporters is that they are advocates for dive safety and want to associate themselves with DAN, being the organisation that is continually striving to improve the safety of diving for the recreational diving community. </em></p>
     <h2>DAN Sponsors </h2>
     <p>DAN Sponsors are dive businesses, corporations, organisations, professionals and enthusiasts who believe in and promote the Divers Alert Network. Supporters financially sponsor DAN Asia-Pacific in an endeavour to aid the organisation to continue enhancing the safety of diving for the recreational diving community. </p>
     <h2>DAN Supporters </h2>
     <p>DAN Supporters are dive-related businesses who actively promote DAN with their divers. These businesses display posters, distribute promotional material and generally assist in spreading the dive safety message and highlighting the importance of 'being prepared' with their students and divers.</p>
     <p>DAN Supporters are listed by Country to enable you to easily locate DAN Supporters in the areas that you are diving. </p>
     <p><em>Note: While DAN Asia-Pacific is providing a list of our Supporters we are not in any way endorsing any of these businesses. </em></p>
     <p><strong>Follow the below links to discover who are DAN Asia-Pacific's Sponsors and Supporters. </strong></p>
     <div align="center">
       <h2 align="left">&nbsp;</h2>
       <p align="left"> Select Country:
           <? 
$query="SELECT acountry,id FROM world ORDER BY acountry";

/* You can add order by clause to the sql statement if the names are to be displayed in alphabetical order */

$result = mysql_query ($query);
echo "<select id='acountry' name='acountry' onchange='showLocation();'>";
// printing the list box select command

while($nt=mysql_fetch_array($result)){//Array or records stored in $nt
	if ($_POST['acountry'] == $nt['acountry']) $selected = 'selected="selected"';
	else $selected = '';
echo "<option value='$nt[acountry]' $selected>$nt[acountry]</option>";
/* Option values are added by looping through the array */
}
echo "</select> ";// Closing of list box 


?>
 
	       <select name="location" id="location" style="display:none">
        <!-- <option <?if ($_POST['location'] == '-none-') echo 'selected="selected"';?> value='-none-'>-none-</option> -->
        <option <?if ($_POST['location'] == 'ACT') echo 'selected="selected"';?> value="ACT">Australian Capital Territory</option>
        <option <?if ($_POST['location'] == 'NSW') echo 'selected="selected"';?> value="NSW">New South Wales</option>
        <option <?if ($_POST['location'] == 'NT') echo 'selected="selected"';?> value="NT">Northern Territory</option>
        <option <?if ($_POST['location'] == 'QLD') echo 'selected="selected"';?> value="QLD">Queensland</option>
        <option <?if ($_POST['location'] == 'SA') echo 'selected="selected"';?> value="SA">South Australia</option>
        <option <?if ($_POST['location'] == 'TAS') echo 'selected="selected"';?> value="TAS">Tasmania</option>
        <option <?if ($_POST['location'] == 'VIC') echo 'selected="selected"';?> value="VIC">Victoria</option>
        <option <?if ($_POST['location'] == 'WA') echo 'selected="selected"';?> value="WA">Western Australia</option>
                </select>


            <input type="submit" name="Submit" value="Find" /> 
     </div>
	<?
	if ($_POST)
	{
		if ($_POST['acountry'] != 'Australia') $_POST['location'] = '-none-';
		$query = "SELECT * FROM support WHERE country = '". $_POST['acountry'] ."' and location = '". $_POST['location']. "' ORDER BY bname";
		$temp = mysql_query($query) or die("Select Failed!");
	}
	else
	{	
		$query = "SELECT * FROM support ORDER BY bname";
		$temp = mysql_query($query) or die("Select Failed!");
	}
		$i = 0;
		while ($info = mysql_fetch_array($temp)) {
			
			if (is_int($i/2)) {$bgcolor = '#C5DDF1';} else {$bgcolor = '#FFFFFF';};
	?>  
        <br />

    
          <? $i++;
	  }
	?>
</div>
</form>
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
