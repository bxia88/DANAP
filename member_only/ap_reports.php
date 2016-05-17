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

	
		#ap
		{
		float:left;
		width:340px;
		padding-left:10px;
		font-size:12px;
		}
		
		#ap a
		{
		padding-right:10px;
		border-style:none;
		}
		
		#ap img
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

		
	
	<div id='ap'>
	
		<h1>DAN Asia-Pacific Reports</h1>
		<br/><br/>
		
		Click on the image below to view the report
		<br/><br/>
		
		<a href='pdfs/1994-1998 Report.pdf' target='_blank'><img src='1994_1998.png' alt="AP1994-1998" /></a>
		
		<a href='pdfs/1999-2002 Report.pdf' target='_blank'><img src='1999_2002.png' alt="AP1999-2002" /></a>
	
	
	<div id='back_space'>
		<a href='reports.php' onmouseover='overback();' onmouseout='outback();' onmousedown='downback();' onmouseup='upback();'><img src='back1.png' id='back'/></a>
		</div>
	
	</div><!--close ap-->
	
	
	</div><!--close content-->
	
	<div id='footer'>
	
		<ul>
			<li><a href='http://danasiapacific.org'>DAN AP Home</a></li>
			<li><a href='memberonly.php'>Member Only Home</a></li>
		</ul>
	</div>
	</body>
</html>	