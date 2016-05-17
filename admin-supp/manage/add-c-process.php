<?
require_once 'db.php';

// declare variables
$acountry = $_POST['acountry'];

//date(DATE_RFC822)
// insert the values
$result= MYSQL_QUERY("INSERT INTO `vs249792_1`.`world` (id, acountry)".
   "VALUES (NULL,'$acountry')");
    header( "Location: http://www.danasiapacific.org/admin-supp/manage/done.php" );

?>