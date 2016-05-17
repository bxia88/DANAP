<?
require_once 'db.php';

$eid = $_POST['id'];

$query = "SELECT * FROM support WHERE id = '$eid'";
$temp = mysql_query($query) or die("Select Failed!"); 
$info = mysql_fetch_array($temp);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Dan - Admin</title>
<style type="text/css">
<!--
body,td,th {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 11px;
	color: #000000;
}
body {
	margin-left: 0px;
	margin-top: 00px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style>
</head>

<body>

<FORM METHOD="POST" enctype="multipart/form-data" action="edit-s-process.php">
  <div align="center"><img src="images/dan-logo.jpg" width="750" height="82" />
  </div>
  <table width="750" border="0" align="center" cellpadding="4" cellspacing="0">
    <tr>
      <td colspan="2"><div align="center"></div></td>
    </tr>
    <tr valign="top">
      <td colspan="2"><div align="center">
          <h4 align="left">Edit a supporter that is in the DAN Supporters Database 
            <input type="hidden" name="id" value="<? echo $info['id']; ?>"/>
</h4>
      </div></td>
    </tr>
    <tr valign="top">
      <td width="122">Business Name:</td>
      <td width="378"><input name="bname" type="text" id="bname" value="<? echo $info['bname']; ?>" size="50" /></td>
    </tr>
    <tr valign="top">
      <td>Country:</td>
      <td>
			<select name="country" id="country">
                <? foreach($countries as $country): ?>
		        <option value="<?=$country['acountry']?>" <?if($info['country'] == $country['acountry']) echo 'selected="selected"';?>><?=$country['acountry']?></option>
				<? endforeach; ?>
            </select>  
</td>
    </tr>
    <tr valign="top">
      <td>Australian State:</td>
      <td><select name="location" id="location">
        <option value="-none-" <?if($info['location'] == '-none-') echo 'selected="selected"';?>>-none-</option>
        <option value="ACT" <?if($info['location'] == 'ACT') echo 'selected="selected"';?>>Australian Capital Territory</option>
        <option value="NSW" <?if($info['location'] == 'NSW') echo 'selected="selected"';?>>New South Wales</option>
        <option value="NT" <?if($info['location'] == 'NT') echo 'selected="selected"';?>>Northern Territory</option>
        <option value="QLD" <?if($info['location'] == 'QLD') echo 'selected="selected"';?>>Queensland</option>
        <option value="SA" <?if($info['location'] == 'SA') echo 'selected="selected"';?>>South Australia</option>
        <option value="TAS" <?if($info['location'] == 'TAS') echo 'selected="selected"';?>>Tasmania</option>
        <option value="VIC" <?if($info['location'] == 'VIC') echo 'selected="selected"';?>>Victoria</option>
        <option value="WA" <?if($info['location'] == 'WA') echo 'selected="selected"';?>>Western Australia</option>
                  </select></td>
    </tr>
    <tr valign="top">
      <td>Location:</td>
      <td><input name="area" type="text" id="area" value="<? echo $info['area']; ?>" size="50" /></td>
    </tr>
    <tr valign="top">
      <td>Contact Person:</td>
      <td><input name="contact" type="text" id="contact" value="<? echo $info['contact']; ?>" size="50" /></td>
    </tr>
    <tr valign="top">
      <td>Phone: &nbsp; </td>
      <td><input name="phone" type="text" id="phone" value="<? echo $info['phone']; ?>" size="50" /></td>
    </tr>
    <tr valign="top">
      <td>Email: </td>
      <td><input name="email" type="text" id="email" value="<? echo $info['email']; ?>" size="50" /></td>
    </tr>
    <tr valign="top">
      <td>Website: &nbsp;</td>
      <td><input name="website" type="text" id="website" value="<? echo $info['website']; ?>" size="50" /></td>
    </tr>
    <tr valign="top">
      <td>Address Line 1: </td>
      <td><input name="add1" type="text" id="add1" value="<? echo $info['add1']; ?>" size="50" /></td>
    </tr>
    <tr valign="top">
      <td>Address Line 2: </td>
      <td><input name="add2" type="text" id="add2" value="<? echo $info['add2']; ?>" size="50" /></td>
    </tr>
    <tr valign="top">
      <td>Postcode / Zip:</td>
      <td><input name="pcode" type="text" id="pcode" value="<? echo $info['pcode']; ?>" size="50" /></td>
    </tr>
    <tr valign="top">
      <td>About us: &nbsp;</td>
      <td><textarea name="overview" cols="50" rows="10" id="overview"><? echo $info['overview']; ?></textarea></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center">
          <input type="submit" name="Submit2" value="Submit  to database" />
      </div></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
  <p>&nbsp;  </p>
</FORM>


</body>
</html>
