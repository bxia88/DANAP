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
		<title>DAN Asia-Pacific Member's Only From the Archive- Medical</title>
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

		<h1>Diving Medical Issues Articles</h1>
		<br/>
		<div id='archive_links'>
			
		<ul>
			<li><a href='pdfs/Medical/Epilepsy_Q_A.pdf' target='_blank'>Epilepsy & Diving: Q&A’s</a> by Frans Cronje</li> 
			<li><a href='pdfs/Medical/Common_Marine_Injuries.pdf' target='_blank'>Dealing With Some of the More Common Marine Injuries</a> by Marty McCafferty</li> 
			<li><a href='pdfs/Medical/Fathoms_of_Fear.pdf' target='_blank'>Fathoms of Fear: A Case Study of Panic in a Recreational Scuba Diver</a> by Dr. David F. Colvard</li> 
			<li><a href='pdfs/Medical/Hypothermia.pdf' target='_blank'>Hypothermia</a> by Neal W. Pollack</li> 
			<li><a href='pdfs/Medical/Phys_Fit_Return_to_Dive.pdf' target='_blank'>Practical Thoughts on Physical Fitness and a Return to Diving</a> by Neal W. Pollack, Ph.D </li> 
			<li><a href='pdfs/Medical/Remember_to_Breathe.pdf' target='_blank'>Remember to Breathe</a> by Daniel A. Nord</li> 
			<li><a href='pdfs/Medical/Swimmers_Ear.pdf' target='_blank'>Swimmer’s Ear: Advice About a Pesky & Sometimes Painful Problem</a> by Doc Vikingo</li> 
			<li><a href='pdfs/Medical/Symptons_Not_To_Ignore.pdf' target='_blank'>Symptoms You Should Not Ignore After Diving</a> by Joel Dovenbarger</li> 
			<li><a href='pdfs/Medical/Marine_envenomations.pdf' target='_blank'>Marine Envenomations</a> by Dr. Joseph Becker & Dr. Paul Auerbach</li> 
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