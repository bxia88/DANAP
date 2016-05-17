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
		<title>DAN Asia-Pacific Member's Only Downloads</title>
	<meta charset="UTF-8"/>
	<link rel="stylesheet" type="text/css" href="member.css"/>
	
	<script type='text/javascript'>
	
	
	
	</script>
	
	<style>
		#intro
		{
		width:400px;
		padding-right:20px;	
		padding-top:30px;
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
		
		
		
		#right
		{
		border-left-style:dotted;
		border-width:1px;
		padding-left:30px;
		float:left;
			font-size:14px;
		margin-top:30px;
		}
		
		
		.book
		{
		font-size:16px;
		
		font-weight:bold;
		}
		
	</style>
	
	
	</head>
	
	<body>
		<div id='banner'>
			<a href='memberonly.php'><img src='memberlogo1.png' alt='logo'/></a>
		</div>
		<div id='content'>

		<h1>Downloads</h1>
		
		<div id='intro'>
		
		<span class='book'>Diving Medicine for Scuba Divers</span>
		<br/><br/>
		<img src='dmfsd.png' alt='Diving Medicine for Scuba Divers'/>
		<br/><br/>
		<a href='dmfsd/divemedicine.php'>View as Flip Book</a>
		<br/>
		<a href='pdfs/dmfsd.pdf' target='_blank'>View as .pdf</a>
		
		
		</div><!--close intro-->
		
		<div id='right'>
		
		<span class='book'>The Sports Diving Medical</span>
		<br/><br/>
		<img src='sdm.jpg' alt='Diving Medicine for Scuba Divers'/>
	
		<br/><br/>
		<a href='sdm/sportsdivingmedical.php'>View as Flip Book</a>
		
		
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