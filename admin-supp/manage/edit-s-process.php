<?
require_once 'db.php';

// declare variables
$id = $_POST['id'];
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


mysql_query("UPDATE `support` SET `bname` = '$bname',
`country` = '$country',
`location` = '$location',
`contact` = '$contact',
`phone` = '$phone',
`email` = '$email',
`website` = '$website',
`add1` = '$add1',
`add2` = '$add2',
`pcode` = '$pcode',
`overview` = '$overview',
`area` = '$area' WHERE `support`.`id` = '$id' LIMIT 1 ;");

//date(DATE_RFC822)
// insert the values
// $result= MYSQL_QUERY(" INSERT INTO `vs249792_1`.`support` (id, bname, country,location,contact,phone,email,website,add1,add2,pcode,overview)".
   // "VALUES (NULL,'$bname','$country','$location','$contact','$phone','$email','$website','$add1','$add2','$pcode','$overview')");
 
//mysql_query("UPDATE `vs249792_1`.`support` SET bname = '$bname', country = '$country', location = '$location', contact = '$contact', phone ='$phone', email = '$email', website = '$website', add1 = '$add1', add2 = '$add2', pcode = '$pcode', overview = '$overview' WHERE 'id' = '2'");
//mysql_query($query) or die("There was a problem inserting the data </br>"  . mysql_error());

header( "Location: http://www.danasiapacific.org/admin-supp/manage/done.php" );
?>