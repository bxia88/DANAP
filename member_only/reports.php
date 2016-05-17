<?php
session_start();

$log=$_SESSION['log'];

		
			if($log=="logged")
			{
			 
			}
		else
		{
		session_destroy();
		header("Location:index.php?login=error");
		}
		
	$_SESSION['log2']='logged';	
?>

<!DOCTYPE HTML>

<html>
	<head>
		<title>DAN Asia-Pacific Member's Only Reports</title>
	<meta charset="UTF-8"/>
	<link rel="stylesheet" type="text/css" href="member.css"/>
	
	<script type='text/javascript'>
	

	</script>
	
	<style>
		#intro
		{
		width:400px;
		padding-right:20px;	
		float:left;
		font-size:14px;
				
		border-right-style:dotted;
		border-width:1px;
		}
		
		#intro ul
		{
		list-style:none;
		}
		
		#intro li
		{
		padding-bottom:5px;
		}
		
		#intro a
		{
		text-decoration:none;
		font-size:16px;
		}
		
			
		#intro a:hover
		{
		text-decoration:underline;
		}
		
		#right
		{
		float:left;
		width:340px;
		padding-left:10px;
		
		
		}
		
		#right ul
		{
		list-style:none;
		}
		
		#right a
		{
		text-decoration:none;
		}
		
		#right a:hover
		{
		text-decoration:underline;
		}
		
		#right li
		{
		padding-bottom:10px;
		}

		
		
		#howto
		{
		display:none;
		}
		
		#howto a
		{
		font-size:14px;
		}
		
	</style>
	
	
	</head>
	
	<body>
		<div id='banner'>
			<a href='memberonly.php'><img src='memberlogo1.png' alt='logo'/></a>
		</div>
		<div id='content'>

		
		<h1>Annual Diving Reports</h1>
			<br/><br/>
			
		<div id='intro'>	
		
		Fatalities and serious diving injuries are rare and often seem to be associated with unsafe
		behaviours or hazardous conditions, but they can occur without apparent cause.
		<br/><br/>
		Understanding the contributing factors could lead to safer diving.  The primary goal of DAN's
		Annual Diving Report on Decompression Illness, Diving Fatalities, and Project Dive Exploration
		is to further this understanding.
		<br/><br/>

		<i>NOTE: The reports are available in read-only <a href='http://get.adobe.com/reader/' target='_blank'> Adobe Acrobat</a> (pdf) format.</i>
	</div><!--close intro-->
	
	<div id='right'>

	
	
	<ul>
			<li><a href='ap_reports.php'><b>DAN Asia-Pacific Reports</a></b></li>
			<li><a href='us_reports.php'><b>DAN America Reports</a></b></li>
		</ul>	
		
		
	</div><!--close right-->	
	</div><!--close content-->
	
	<div id='footer'>
	
		<ul>
			<li><a href='http://danasiapacific.org'>DAN AP Home</a></li>
			<li><a href='memberonly.php'>Member Only Home</a></li>
		</ul>
	</div>
	</body>
</html>	