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
		<title>DAN Asia-Pacific Member's Only</title>
	<meta charset="UTF-8"/>
	<link rel="stylesheet" type="text/css" href="member.css"/>
	
	<script type='text/javascript' src='button.js'>
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
		
	
		.back
		{
		font-size:12px;
		}
		
		
		
	</style>
	
	
	</head>
	
	<body>
		<div id='banner'>
			<a href='memberonly.php'><img src='memberlogo1.png' alt='logo'/></a>
		</div>
		<div id='content'>

		<h1>Aging Diver Study</h1>
			<br/>
		
		<div id='article'>
		
		There are many questions regarding aging and diving such as:
		<br/><br/>
		"At what age should I begin to dive more conservatively?"
		<br/><br/>
		"At what age should I stop diving?"
		<br/><br/>
		Many of us are asking these questions and most of us will ask them in the future. Unfortunately, the answers are not clear. There just isn't any information about aging and diving. To address the issue, DAN studied aging and diving using the same methodology as <a href='#'>Project Dive Exploration.</a> For the purpose of the study, older divers were arbitrarily defined as 50 years of age or more. Divers under 50 also participated in the study as controls. DAN used older and younger divers.
		<br/><br/>
		DAN and Duke University conducted a laboratory study of dry simulated dives to compare pulmonary and cardiac function of older and younger divers. The results of this study were published in the Journal of Applied Physiology in October 2002 as <a href='#'>"Effects of age and exercise on physiological dead space during simulated dives at 2.8 ATA."</a>
		<br/><br/>
		
		<h2>Results</h2>
		<br/>
		Data for aging diver is still being collected through <a href='#'>Project Dive Exploration </a>and will be analyzed as a subset of PDE.
		<br/><br/>
		Your participation in PDE is welcome.
		<br/><br/>
		A <a href='http://www.diversalertnetwork.org/research/pubs.asp?sort=keyword&keyword1=aging%20diver' target='_blank'>list of publications</a> related to this study is available.
		<br/><br/>
	<div id='back_space'>
		<a href='findings.php' onmouseover='overback();' onmouseout='outback();' onmousedown='downback();' onmouseup='upback();'><img src='back1.png' id='back'/></a>
		</div>
		</div>
	</div><!--close content-->
	
	<div id='footer'>
	
		<ul>
			<li><a href='http://danasiapacific.org'>DAN AP Home</a></li>
			<li><a href='memberonly.php'>Member Only Home</a></li>
		</ul>
	</div>
	</body>
</html>	