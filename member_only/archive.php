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
		<title>DAN Asia-Pacific Member's Only From the Archive</title>
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
		border-left-style:dotted;
		border-width:1px;
		padding-left:10px;
		float:left;
		height:200px;
		}
		
		#archive_links ul
		{
		list-style:none;
		text-decoration:none;
		}
		
		#archive_links li
		{
		font-size:18px;
		margin:3px;
		padding:2px;
		}
		
		#archive_links a
		{
		text-decoration:none;
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
		</div>
		<div id='content'>

		<h1>From the Archives</h1>
		<br/>
		<div id='intro'>
		We have put together a selection of articles from some of the past issues of <i>Alert Diver magazine. </i>
		<br/><br/>
		<i>Alert Diver</i> is the region’s only dedicated dive health and safety magazine so the archives contain a wealth of information. 
		<br/><br/>
		We have divided the articles into four main categories and will continue to add to them. To view the articles available simply click on your category of interest.
		<br/><br/>
		<i>NOTE: The articles are available in read-only <a href='http://get.adobe.com/reader/' target='_blank'> Adobe Acrobat</a> (pdf) format.</i>

		
		</div><!--close intro-->
		
		<div id='archive_links'>
		
		<ul>
			<li><a href='safety.php'>Safety</a></li>
			<li><a href='medical.php'>Medical</a></li>
			<li><a href='research.php'>Research</a></li>
			<li><a href='dan_helped_me.php'>DAN Helped Me</a></li>
		</ul>
		
		</div><!--close archive_links-->
		
		
	</div><!--close content-->
	
	<div id='footer'>
	
		<ul>
			<li><a href='http://danasiapacific.org'>DAN AP Home</a></li>
			<li><a href='memberonly.php'>Member Only Home</a></li>
		</ul>
	</div>
	</body>
</html>	