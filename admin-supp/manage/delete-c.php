<?
require_once 'db.php';

$query = "SELECT * FROM world WHERE id = '2'";
$temp = mysql_query($query) or die("Select Failed!"); 
$info = mysql_fetch_array($temp)

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
	font-size: 14px;
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


  <div align="center"><img src="images/dan-logo.jpg" width="750" height="82" />
  </div>
   <table width="700" border="0" align="center" cellpadding="0" cellspacing="2" bgcolor="#CCCCCC">
	<?
	$query = "SELECT * FROM world ORDER BY id";
	$temp = mysql_query($query) or die("Select Failed!");
	
	while ($info = mysql_fetch_array($temp)) {
	?>
      <tr>
        <td width="336" height="24" bgcolor="#FFFFFF"> <? echo $info['acountry']; ?> </td>

        <td width="358" bgcolor="#FFFFFF">
          <FORM METHOD="POST" enctype="multipart/form-data" action="delete-c-process.php">
            <input name="id" type="hidden" id="id" value="<? echo $info['id']; ?>" />
            <input type="submit" name="Submit" value="Delete" />
          </FORM></td>
      </tr>
	<?
	  }
	?>
    </table>    
  <p>&nbsp;  </p>



</body>
</html>
