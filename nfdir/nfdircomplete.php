<?php

$ar=array();
//loop through all post data and put into array
foreach($_POST as $name => $value)
{
	if(($value == 'null') || ($value == null) || ($value == 'Submit Report'))
	{
		//do nothing, couldn't use !== for some reason
	}
	else
	{
		$ar[$i]=$name."-".$value."\n";
		$i++;
	}


}

$result=implode('',$ar);



//implode the array into a string set as message variable
$message= "New Incident Report \n".$result;

$to='jl_research@danasiapacific.org';

$subject='NEW Diving Incident Report';

$headers= 'From: research@danasiapacific.org';

if($result != '')
	{
	mail($to,$subject,$message,$headers);
	}







?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>DAN Diving Incident Monitoring Study - Form Submitted</title>
		<meta charset="UTF-8"/>
		<link rel='stylesheet' type='text/css' href='nfdir.css'/>
		
	
	</head>
	
	<body>
	
	<div id='wrapper'>
		<div id='intro'>
		
			<img src="logo.png" alt="DAN LOGO" />
			<h1>DAN DIVING INCIDENT REPORT</h1>
			
			<p>Thank you for taking the time to fill out a DAN Diving Incident Report.
			<br/>
			The information you have provided will aid in the prevention of dive accidents.
			<br/>
			If you wish to fill out another report please click <a href="nfdirform.php">here.</a>
			<br/>
			Or for more information on DAN Asia-Pacific, you can visit our website <a href="http://danasiapacific.org">here.</a>
			
		</div>
		
	</div>
	
	</body>
	
</html>	
	
	
	
	
	
	
	
	
	