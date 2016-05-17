<?php $thisPage="XXXXXX"; ?>
<?php error_reporting (E_ALL ^ E_NOTICE); ?>
<?php
session_cache_limiter('none');
session_start();
ob_start(); ?>
<?php

$server = "BNE3-0001MY.server-sql.com";
$user = "vs452894_admin";
$password = "LipJam1234";
$database = "vs452894_supp";

mysql_connect($server,$user,$password) or die("Could not connect: " . mysql_error());
mysql_query("USE $database");

$query = mysql_query("SELECT * FROM world ORDER BY acountry") or die("Select Failed!");
while ($row = mysql_fetch_assoc($query))
{
	$countries[] = $row;
};


?>

	
	
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/DAN_template.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>

<!-- InstanceBeginEditable name="doctitle" -->
<title>DAN Divers Alert Network Asia-Pacific : Membership and Insurance for Scuba Divers</title>
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
<script language="javascript" type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script language="JavaScript" src="../_includes/showhide.js"></script>
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

      <form name="supporters" action="" method="POST">
  <div align="center">
  </div>
   <div align="center">
     <div align="center">
       <h2 align="left">DAN Asia-Pacific Supporters</h2>
       <p align="left"><em>Planning a dive trip? Looking for a local operator to dive with? </em>All you need to do is select a region to view the current list of DAN AP Supporters. </p>
       <p align="left">DAN Asia-Pacific Supporters are dive businesses  that have expressed their desire to promote  DAN and dive safety with their divers by becoming a registered &quot;DAN  Supporter&quot;<em>. </em></p>
       <p align="left"><em><strong>Please note that by listing these businesses as DAN Supporters; DAN Asia-Pacific is not endorsing these operations. </strong></em><br />
       </p>
       <p align="left"> <strong>Select Country</strong>:
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

       
		<select name="location" id="location">
		<option <?if ($_POST['location'] == '-none-') echo 'selected="selected"';?> value="-none-">-State (If AUSTRALIA)-</option>
		<option <?if ($_POST['location'] == 'ACT') echo 'selected="selected"';?> value="ACT">Australian Capital Territory</option>
        <option <?if ($_POST['location'] == 'NSW') echo 'selected="selected"';?> value="NSW">New South Wales</option>
        <option <?if ($_POST['location'] == 'NT') echo 'selected="selected"';?> value="NT">Northern Territory</option>
        <option <?if ($_POST['location'] == 'QLD') echo 'selected="selected"';?> value="QLD">Queensland</option>
        <option <?if ($_POST['location'] == 'SA') echo 'selected="selected"';?> value="SA">South Australia</option>
        <option <?if ($_POST['location'] == 'TAS') echo 'selected="selected"';?> value="TAS">Tasmania</option>
        <option <?if ($_POST['location'] == 'VIC') echo 'selected="selected"';?> value="VIC">Victoria</option>
        <option <?if ($_POST['location'] == 'WA') echo 'selected="selected"';?> value="WA">Western Australia</option>
        </select>
		

         <input name="Find" type="submit" id="Find" value="Find" /> 
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
        <table width="500" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="<?=$bgcolor?>" class="blist">
          <tr >
			<td width="15" height="20"></td>
            <td valign="bottom"><span class="bname"><? echo $info['bname']; ?></span></td>
			<td valign="bottom"><? if($info['area']) echo '<strong>Location:</strong>';?> <? echo $info['area']; ?></td>
			<td width="15"></td>
          </tr>
        
          <tr >
			<td width="15"></td>
            <td width="321"><? if($info['contact']) echo '<strong>Contact Person:</strong>';?> <? echo $info['contact']; ?></td>
            <td width="291"><? if($info['phone']) echo '<strong>Phone:&nbsp;</strong>';?> <? echo $info['phone']; ?></td>
			<td width="15"></td>
          </tr>
          <tr>
			<td width="15"></td>
            <td><? if($info['email']) echo '<strong>Email:</strong>';?> <a href="mailto:<? echo $info['email']; ?>"><? echo $info['email']; ?></a></td>
            <td><? if($info['website']) echo '<strong>Website:</strong>';?> <a href="http://<? echo $info['website']; ?>" target="_blank"><? echo $info['website']; ?></a></td>
			<td width="15"></td>
          </tr>
  <tr >
			<td width="15"></td>
            <td colspan="2"><? if($info['add1'] || $info['add2'] || ($info['location'] != '-none-') || $info['pcode']) echo '<strong>Address: </strong>'; if($info['add1']) echo $info['add1'].', ';if($info['add2']) echo $info['add2'].'  '; if ($info['location'] != '-none-') echo $info['location'].'  '; if($info['pcode'].'  ') echo $info['pcode'];?> </td>
         <td width="15"></td>
		</tr>
          <tr>
			<td width="15"></td>
            <td colspan="2"><? if($info['overview']) echo '<strong>About Us:</strong>';?>              <? if($info['overview']) echo $info['overview']; ?></td>
		<td width="15"></td>
          </tr>
        </table>
   
          <? $i++;
	  }
	?>
</div>
</form>

          
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
<!-- InstanceEnd -->
</html>