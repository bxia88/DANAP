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
		<script type='text/javascript' src='button.js'></script>
	<script type='text/javascript'>
	

	</script>
	
	<style>
	
		
		#os
		{
		float:left;
		width:700px;
		padding-left:10px;
		font-size:12px;
		}
		
		#os a
		{
		padding-right:10px;
		border-style:none;
		}
		
		#os img
		{
		border-style:none;
		}
		
		#back_space
		{
		margin-top:20px;
		}
	
		
	</style>
	
	
	</head>
	
	<body>
		<div id='banner'>
			<a href='memberonly.php'><img src='memberlogo1.png' alt='logo'/></a>
		</div>
		<div id='content'>

		
	
	<div id='os'>
		
		<h1>DAN America Reports</h1>
		<br/><br/>
		
		Click on the image below to view the report
		<br/><br/>
		
		<a href='pdfs/2008DANDivingReport.pdf' target='_blank'><img src='2008.jpg' alt="OS2008" /></a>
		
		<a href='pdfs/2007DANDivingReport.pdf' target='_blank'><img src='2007.jpg' alt="OS2007" /></a>
		
		<a href='pdfs/2006DANDivingReport.pdf' target='_blank'><img src='2006.jpg' alt="OS2006" /></a>
		
		<a href='pdfs/2005DCIReport.pdf' target='_blank'><img src='2005.jpg' alt="OS2005" /></a>
		
		<a href='pdfs/2004DCIReport.pdf' target='_blank'><img src='2004.jpg' alt="OS2004" /></a>
		
		<a href='pdfs/2003DCIReport.pdf' target='_blank'><img src='2003.jpg' alt="OS2003" /></a>
		
		<a href='pdfs/2002DCIReport.pdf' target='_blank'><img src='2002.jpg' alt="OS2002" /></a>
	
	
	<div id='back_space'>
		<a href='reports.php' onmouseover='overback();' onmouseout='outback();' onmousedown='downback();' onmouseup='upback();'><img src='back1.png' id='back'/></a>
		</div>
	</div><!--close os-->
	

	</div><!--close content-->
	
	<div id='footer'>
	
		<ul>
			<li><a href='http://danasiapacific.org'>DAN AP Home</a></li>
			<li><a href='memberonly.php'>Member Only Home</a></li>
		</ul>
	</div>
	</body>
</html>	