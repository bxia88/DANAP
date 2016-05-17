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
		<title>DAN Asia-Pacific Member's Only- Alert Diver Magazine</title>
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

		<h1>Alert Diver Magazine</h1>
		<br/>
		<div id='intro'>
		
		Issue 49:May-August 2012
		<br/><br/>
		<a href='http://danasiapacific.org/alertdiveronline/alertdiver/web/flipviewerxpress.html' target='_blank'><img src='ad49.png'></a>
		<br/><br/>
		Issue 43:May-August 2010
		<br/><br/>
		<a href='pdfs/mayaug2010AD.pdf' target='_blank'><img src='ad43.png'></a>
		</div><!--close intro-->
		
		<div id='archive_links'>
		
		Issue 46:May-August 2011
		<br/><br/>
		<a href='http://danasiapacific.org/alertdiveronline/ad46_May-Aug_2011/' target='_blank'><img src='ad46.png'></a>
	<br/><br/>
			Issue 46:May-August 2011
		<br/><br/>
		<a href='pdfs/AD40-May_Aug09online.pdf' target='_blank'><img src='ad40.png'></a>
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