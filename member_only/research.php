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
		<title>DAN Asia-Pacific Member's Only From the Archive- Research</title>
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

		<h1>Diving Research Articles</h1>
		<br/>
		<div id='archive_links'>
			
		<ul>
			<li><a href='pdfs/Research/Deco_Models.pdf' target='_blank'>Some Thoughts on Decompression Models</a> by Mike Ward </li> 
			<li><a href='pdfs/Research/Deep_Stops.pdf' target='_blank'>Deep Stops, Deep Trouble? Some questions raised about the safety of deep stops in deep diving</a>  </li> 
			<li><a href='pdfs/Research/Shallow_Diving_Fatality.pdf' target='_blank'>A Diving Fatality at Shallow Depth: A Case Study on Pulmonary Barotrauma</a> by Dr.Gary Morris</li> 
			<li><a href='pdfs/Research/Tables_Computers.pdf' target='_blank'>Dive Tables & Computers</a> by Keith Cardwell</li> 
			
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