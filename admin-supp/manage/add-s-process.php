<?
require_once 'db.php';

// declare variables
$bname = $_POST['bname'];
$country = $_POST['country'];
$location = $_POST['location'];
$contact = $_POST['contact'];
$phone = $_POST['phone'];
$email = $_POST["email"];
$website = $_POST['website'];
$add1 = $_POST['add1'];
$add2 = $_POST['add2'];
$pcode = $_POST['pcode'];
$overview = $_POST['overview'];
$area = $_POST['area'];

//date(DATE_RFC822)
// insert the values
mysql_query("INSERT INTO $database.`support` (id, bname, country,location,contact,phone,email,website,add1,add2,pcode,overview,area)"."VALUES (NULL,'$bname','$country','$location','$contact','$phone','$email','$website','$add1','$add2','$pcode','$overview','$area')");
header( "Location: http://www.danasiapacific.org/admin-supp/manage/done.php" );

?>