<?php
 session_start();
 $_SESSION['log']="logged";


$log=$_SESSION['log2'];

if($log=='logged')
	{
	$match=true;
	
	}

$input=$_POST['login'];


//setup our mysql login variables

$username= "root";
$password="";
$host= "localhost";

//connect to mysql
$result= mysql_connect($host, $username, $password);
//if ther is an error then kill the application

if($result==false)
{
	//kills the php code and outputs the error message
	die("error connecting mysql");
}

//attempt to select the database called items
$result = mysql_select_db("DAN Asia-Pacific");
if($result ==false)
{
	die("error connecting to items database");
}

//create query that selects data from the database
$result =mysql_query("SELECT user FROM member");

//loop through all of the results

while($row =mysql_fetch_array($result))
{
	//row will become an array that holds all of the table fields you selected
	if($input== $row['user'])
	{

	$match=true;
	}
	
}

if($match==false)
{
session_destroy();
header("Location:index.php?login=error");
}



?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>DAN Asia-Pacific Member's Only</title>
	<meta charset="UTF-8"/>
	<link rel="stylesheet" type="text/css" href="member.css"/>
	
	<script type='text/javascript'>
	var t;
		function pics(choice)
		{
			
			
			
			if(choice == 'diver')
			{
			t=setTimeout('orig()',700);
			
			}
			else
			{
			document.getElementById('pic').src=choice+'.png';
			clearTimeout(t);
			}
			
	
		}	
	
	function orig()
		{
			document.getElementById('pic').src='diver.png'
		}
		
		
	</script>
	
	<style>
		#intro
		{
		width:400px;
		border-right-style:dotted;
		border-width:1px;
		padding-right:20px;	
		float:left;
		font-size:14px;
		height:455px;
		}
		
		#links
		{
		width:350px;
		float:left;
		padding-left:20px;
		margin:0;
		}
		
		#links ul
		{
		list-style:none;
		text-decoration:none;
		margin:0;
		padding-left:10px;
		}
		#links li
		{
		margin:3px;
		padding:2px;
	
		width:260px;

		}
		
	
		
		#links a
		{
		text-decoration:none;
		font-size:18px;
		
		}
		
		#links a:hover
		{
		text-decoration:underline;
		
		}
		
		#links h1
		{
		color:black;
		}
		
		#links img
		{
		padding-left:5px;
		padding-top:10px;
		}
		
	</style>
	
	
	</head>
	
	<body>
		<div id='banner'>
			<img src='memberlogo1.png' alt='logo'/>
		</div>
		<div id='content'>

		
		<h1>Welcome to DAN Asia-Pacific's Member Portal.</h1>
			<br/><br/>
			
		<div id='intro'>	
		Our objective is to share with our valued Members, a range of materials that will further develop your diving health and safety knowledge and skills.
			<br/><br/>
		Your membership fees enable DAN to continue striving to improve diving safety and we appreciate this support very much.
			<br/><br/>
		In a first for DAN Asia-Pacific, you will be able to access Online Seminars on a range of topics from Diver Fatalities, Accident Management to Medications and Diving; and much more.
			<br/><br/>
		In addition, we are making available to our Members, Reports on DCI and Diving Fatalities, findings from recent Research Initiatives, articles from past issues of Alert Diver and more.
			<br/><br/>
		We encourage you to visit the site regularly as we continue to add to the content.
		<br/><br/>
		Safe Diving,
		<br/><br/>
		John Lippmann OAM,
		<br/>
		DAN Asia-Pacific
		<br/>
		Executive Director
	
	</div><!--close intro-->
	
	<div id='links'>
	
		<h1> Quick Links</h1>
		<br/>
			<ul>
				<li><a href='seminar.php' onmouseover='pics("sem");' onmouseout='pics("diver");'>DAN Online Seminars</a></li>
				<li><a href='archive.php' onmouseover='pics("alert");' onmouseout='pics("diver");'>From the Archives</a></li>
				<li><a href='reports.php' onmouseover='pics("report");' onmouseout='pics("diver");'>Annual Diving Reports</a></li>
				<li><a href='findings.php'  onmouseover='pics("research");' onmouseout='pics("diver");'>Research Project Findings</a></li>
				<li><a href='proceedings.php'  onmouseover='pics("research");' onmouseout='pics("diver");'>Workshop Proceedings </a></li>
				<li><a href='downloads.php'  onmouseover='pics("download");' onmouseout='pics("diver");'>Downloads</a></li>
			</ul>
		
		<img src='diver.png' id='pic' alt='Diver'/>
	</div><!--close links-->
	
	</div><!--close content-->
	
	<div id='footer'>
	
		<ul>
			<li><a href='http://danasiapacific.org'>DAN AP Home</a></li>
			<li><a href='#'>Member Only Home</a></li>
		</ul>
	</div>
	</body>
</html>	