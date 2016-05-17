<? require_once 'db.php';?>
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

<FORM METHOD="POST" enctype="multipart/form-data" action="add-s-process.php">
  <div align="center"><img src="images/dan-logo.jpg" width="750" height="82" />
  </div>
  <table width="750" border="0" align="center" cellpadding="4" cellspacing="0">
    <tr>
      <td colspan="2"><div align="center"></div></td>
    </tr>
    <tr valign="top">
      <td colspan="2"><div align="center">
          <h4 align="left">Add a supporter to the DAN Supporters Database 
</h4>
      </div></td>
    </tr>
    <tr valign="top">
      <td width="118">Business Name:</td>
      <td width="616"><input name="bname" type="text" id="bname" size="50" /></td>
    </tr>
    <tr valign="top">
      <td>Country:</td>
      <td><select name="country" id="country">
		<? foreach($countries as $country): ?>
        <option value="<?=$country['acountry']?>"><?=$country['acountry']?></option>
		<? endforeach; ?>
      </select></td>
    </tr>
    <tr valign="top">
      <td>Australian State:</td>
      <td><select name="location" id="location">
        <option selected="selected">-none-</option>
        <option value="ACT">Australian Capital Territory</option>
        <option value="NSW">New South Wales</option>
        <option value="NT">Northern Territory</option>
        <option value="QLD">Queensland</option>
        <option value="SA">South Australia</option>
        <option value="TAS">Tasmania</option>
        <option value="VIC">Victoria</option>
        <option value="WA">Western Australia</option>
                  </select></td>
    </tr>
    <tr valign="top">
      <td>Location:</td>
      <td><input name="area" type="text" id="area" size="50" /></td>
    </tr>
    <tr valign="top">
      <td>Contact Person:</td>
      <td><input name="contact" type="text" id="contact" size="50" /></td>
    </tr>
    <tr valign="top">
      <td>Phone: &nbsp; </td>
      <td><input name="phone" type="text" id="phone" size="50" /></td>
    </tr>
    <tr valign="top">
      <td>Email: </td>
      <td><input name="email" type="text" id="email" size="50" /></td>
    </tr>
    <tr valign="top">
      <td>Website: &nbsp;</td>
      <td><input name="website" type="text" id="website" size="50" /></td>
    </tr>
    <tr valign="top">
      <td>Address Line 1: </td>
      <td><input name="add1" type="text" id="add1" size="50" /></td>
    </tr>
    <tr valign="top">
      <td>Address Line 2: </td>
      <td><input name="add2" type="text" id="add2" size="50" /></td>
    </tr>
    <tr valign="top">
      <td>Postcode / Zip:</td>
      <td><input name="pcode" type="text" id="pcode" size="50" /></td>
    </tr>
    <tr valign="top">
      <td>About us: &nbsp;&nbsp;</td>
      <td><textarea name="overview" cols="50" rows="10" id="overview"></textarea></td>
    </tr>
    <tr>
      <td><div align="center">
      </div></td>
      <td><input type="submit" name="Submit2" value="Submit  to database" /></td>
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
