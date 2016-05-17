<?
require_once 'db.php';

// declare variables
$id = $_POST['id'];

//date(DATE_RFC822)
// insert the values
$query = "DELETE FROM world WHERE id = '$id';";
mysql_query($query) or die("Update Failed!". mysql_error());

header( "Location: http://www.danasiapacific.org/admin-supp/manage/done.php" );

?>