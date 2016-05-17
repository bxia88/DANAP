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
		
	
		
		
		
		
	</style>
	
	
	</head>
	
	<body>
		<div id='banner'>
			<a href='memberonly.php'><img src='memberlogo1.png' alt='logo'/></a>
		</div>
		<div id='content'>

		<h1>Breath Hold Study</h1>
			<br/>
		
		<div id='article'>
		
		The research team at the Center for Hyperbaric Medicine and Environmental Physiology at Duke University Medical Center conducted a study of breath-hold diving in 2005. Breath-hold diving has been practiced for many centuries both as an occupation and for recreation.
		<br/><br/>
		Hyperventilation is the most common method implemented to extend breath-hold duration, but with breath-hold diving arises the risk of loss of consciousness from hypoxia. Breathing oxygen prior to breath-hold diving can prevent hypoxia. This breath-hold project studied the effects of hyperventilation, work, breathing mixture and dive depth on immersed breath-hold duration.
		<br/><br/>
		The primary objective of this study was to increase breath-hold time to a maximal safe level without danger of loss of consciousness or functional incapacity due to hypocapnia, hypoxia or hypercapnia. This is to be developed as an operational procedure for use by military divers. A secondary objective was the generalized study of the physiological effects of hyperoxia, hypoxia hypercapnia and hypocapnia as they relate to breath-hold diving.
		<br/><br/>
		For a list of publications related to this study, <a href='http://www.diversalertnetwork.org/research/pubs.asp?sort=keyword&keyword1=breathhold' target='_blank'>click here.</a>
		
		<br/><br/>
		<div id='back_space'>
		<a href='findings.php' onmouseover='overback();' onmouseout='outback();' onmousedown='downback();' onmouseup='upback();'><img src='back1.png' id='back'/></a>
		</div>
		
		
		</div><!--close article-->
	</div><!--close content-->
	
	<div id='footer'>
	
		<ul>
			<li><a href='http://danasiapacific.org'>DAN AP Home</a></li>
			<li><a href='memberonly.php'>Member Only Home</a></li>
		</ul>
	</div>
	</body>
</html>	