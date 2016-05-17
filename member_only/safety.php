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
		<title>DAN Asia-Pacific Member's Only From the Archive- Safety</title>
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

		<h1>Diving Safety Articles</h1>
		<br/>
		<div id='archive_links'>
			
		<ul>
			<li><a href='pdfs/Safety/Bent_on_denial.pdf' target='_blank'>Bent on Denial</a> by Dr. Andrew Fock</li> 
			<li><a href='pdfs/Safety/Breathless_on_bottom.pdf' target='_blank'>Breathless on the Bottom: DAN Reviews Out-of-Air Accidents and Incidents</a> by Rick Layton</li>
			<li><a href='pdfs/Safety/Computer_Fails.pdf' target='_blank'>Your Computer Fails: Now What?</a> by Robert Rossier</li>
			<li><a href='pdfs/Safety/Gas_Management.pdf' target='_blank'>Lessons in Gas Management</a> by Marty McCafferty</li>
			<li><a href='pdfs/Safety/Into_the_Darkness.pdf' target='_blank'>Into the Darkness: An Illuminating Look at Night-Diving Safety</a> by Rick Layton</li>
			<li><a href='pdfs/Safety/Maintenaince_Matters.pdf' target='_blank'>Maintenance Matters: Do Unto Dive Gear Before it Does Unto You</a> by Rick Layton</li>
			<li><a href='pdfs/Safety/Out_of_Control.pdf' target='_blank'>Out of Control: DAN Reviews Buoyancy-Related Incidents & Accidents</a> by Rick Layton</li>
			<li><a href='pdfs/Safety/Stop_in_Name_of_Safety.pdf' target='_blank'>Stop in the Name of Safety: DAN Discusses the Finer Points of Diving Ascents</a> by Eric Douglas & Dan Nord</li>
			<li><a href='pdfs/Safety/Theory_to_Practice.pdf' target='_blank'>Theory into Practice: Out-of-Air Emergencies Don’t Have to Happen</a> by Eric Douglas & Dr. Petar Denoble</li>
			<li><a href='pdfs/Safety/Weight_Safety.pdf' target='_blank'>Weight Safety: When Buoyancy Goes Bust</a>  by Rick Layton</li>
			
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