<?php

$server = "BNE3-0001MY.server-sql.com";
$user = "vs452894_admin";
$password = "LipJam1234";
$database = "vs452894_supp";

mysql_connect($server,$user,$password,$database) or die("Could not connect: " . mysql_error());
mysql_query("USE $database");

$query = mysql_query("SELECT * FROM world ORDER BY acountry") or die("Select Failed!");
while ($row = mysql_fetch_assoc($query))
{
	$countries[] = $row;
};

?>