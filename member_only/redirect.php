<?php

 session_start();
 $_SESSION['log']="logged";


//if user has already logged in therefore session data already sent then display page

if($_SESSION['log2']=='logged')
	{
	$match=true;
	}
	
//else check for password
	
	 
else
	{
	  if(isset($_POST['login'])==true)
	  {
	  $input=$_POST['login'];
	  }
	
	//setup mysql login variables

	$username= "vs452894_admin ";
	$password="LipJam1234";
	$host= "bne3-0001my.server-sql.com:3306";
	
	//connect to mysql
	$result= mysql_connect($host, $username, $password);
	//if there is an error then kill the application
	
	if($result==false)
	{
		//kills the php code and outputs the error message
		die("error connecting mysql");
	}
	
	//attempt to select the database called items
	$result = mysql_select_db("vs452894_mo_inst");
	if($result ==false)
	{
		die("error connecting to member database");
	}
	
	//create query that selects data from the database
	$result =mysql_query("SELECT member_id FROM member");
	
	//loop through all of the results
	
	while($row =mysql_fetch_array($result))
	{
		//row will become an array that holds all of the table fields you selected
		if($input== $row['member_id'])
		{
	
		$match=true;
		}
		
	}
	
	//if password doesn't match redirect back to index with error	
	
	if($match==false)
	{
	session_destroy();
	header("Location:index.php?login=error");
	}
	else
	{
	header("Location:memberonly.php");
	}

}


?>