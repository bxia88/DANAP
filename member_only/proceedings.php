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
		<title>DAN Asia-Pacific Member's Only Research</title>
	<meta charset="UTF-8"/>
	<link rel="stylesheet" type="text/css" href="member.css"/>
	
	<script type='text/javascript'>
	
	
	
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
		
		.article
		{
		
		width:600px;
		font-size:14px;
		background-color:#F0F0F0;
		padding:10px;
		border-style:solid;
		border-width:1px;
		-webkit-border-radius: 10px;
		-moz-border-radius: 10px;
		border-radius: 10px;
		border-color:#C2C2C2;
		}
		
		.article a
		{
		font-size:16px;
		font-weight:700;
		text-decoration:none;
		}
		
	</style>
	
	
	</head>
	
	<body>
		<div id='banner'>
			<a href='memberonly.php'><img src='memberlogo1.png' alt='logo'/></a>
		</div>
		<div id='content'>

		
		<h1>Workshop Proceedings </h1>
			<br/><br/>
			
		<div class='article'>
			<a href='pdfs/Fatalities_Proceedings_10-6-11.pdf'>Recreational Diving Fatalities Workshop Proceedings 2010 </a>
			<p>The risks of dying during recreational diving are small. The purpose of this workshop<br>
			  was to consider how the risks might be reduced further. Topics included investigation,<br>
		    surveillance, training and operational safety, and cardiovascular disease.</p>
	      </div>
		
		<br/>
		<div class='article'></div>
		
		<br/>
		
		
		
		
		
	</div><!--close content-->
	
	<div id='footer'>
	
		<ul>
			<li><a href='http://danasiapacific.org'>DAN AP Home</a></li>
			<li><a href='memberonly.php'>Member Only Home</a></li>
		</ul>
	</div>
	</body>
</html>	