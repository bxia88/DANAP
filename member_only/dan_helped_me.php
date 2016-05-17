<?php
session_start();

$log=$_SESSION['log'];

		
			if($log=="logged")
			{
			 //stay logged in
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
		<title>DAN Asia-Pacific Member's Only From the Archive- DAN Helped Me</title>
	<meta charset="UTF-8"/>
	<link rel="stylesheet" type="text/css" href="member.css"/>
	
	<script type='text/javascript' src='button.js'></script>
	
	<style>
		#intro
		{
		width:400px;
		padding-right:20px;	
		float:left;
		font-size:14px;
		
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
		
		#archive_links
		{
	
		padding-left:0px;
		
		
		}
		
		#archive_links ul
		{
		list-style:none;
		text-decoration:none;
		padding-left:0px;
		}
		
		#archive_links li
		{
		font-size:14px;
		margin:3px;
		padding:2px;
		}
		
		#archive_links a
		{
		text-decoration:none;
		font-size:16px;
		}
		
		#archive_links a:hover
		{
		text-decoration:underline;
		}
		
				
	</style>
	
	
	</head>
	
	<body>
		<div id='banner'>
			<a href='memberonly.php'><img src='memberlogo1.png' alt='logo'/></a>
		</div><!--close banner-->
		
		<div id='content'>

		<h1>DAN Helped Me Articles</h1>
		<br/>
		<div id='archive_links'>
			
		<ul>
			<li><a href='pdfs/Dan_helped_me/Despite_the_Best_Laid_Plans.pdf' target='_blank'>Despite the Best Laid Plans: Accidents Can & Do Happen</a> by Marty McCafferty</li> 
			<li><a href='pdfs/Dan_helped_me/Pony_Cart_to_Learjet.pdf' target='_blank'>From a Pony Cart Ambulance to a Learjet: An Unforgettable Journey with DCI</a> by 'Dr.X'- (a DAN member)</li> 
			<li><a href='pdfs/Dan_helped_me/Rescue_in_Gulf_ Thailand.pdf' target='_blank'>Rescue in the Gulf of Thailand</a> by Riche Kohler</li> 
			<li><a href='pdfs/Dan_helped_me/Drowning_in_Dahab.pdf' target='_blank'>Drowning in Dahab: A DAN Member Tells of His Near Death Experience</a> by Duncan Paterson</li> 
			
		</ul>	
		<div id='back_space'>
		<a href='archive.php' onmouseover='overback();' onmouseout='outback();' onmousedown='downback();' onmouseup='upback();'><img src='back1.png' id='back'/></a>
		</div>
		
		</div><!--archive_links-->
		
		
		
		
	</div><!--close content-->
	
	<div id='footer'>
	
		<ul>
			<li><a href='http://danasiapacific.org'>DAN AP Home</a></li>
			<li><a href='memberonly.php'>Member Only Home</a></li>
		</ul>
	</div>
	</body>
</html>	