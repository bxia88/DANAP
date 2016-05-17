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

		<h1>Liveaboard Doppler</h1>
			<br/>
		
		<div id='article'>
		
		In preliminary studies beginning as early as 1985, the incidence of nitrogen bubbles in divers has been a continuing source of study for dive researchers at DAN and the Center for Hyperbaric Medicine and Environmental Physiology at Duke University Medical Center.
		<br/><br/>
		In this study, Doppler monitoring at the precordial site (around the heart) was used. This area contains all the bubbles passing from the tissues to the lungs, so it is considered to be the best point to estimate bubble production in the body.
		<br/><br/>
		For recreational divers, DAN has observed, bubble levels tend to peak at one hour after surfacing and fall off in two to three hours, so most Doppler testing is done within an hour time frame. Likewise, because this time frame presents a poor clinical tool for physicians, who usually do not receive patients suffering from decompression sickness (DCS) within an hour after diving, Doppler technology works better as a tool for DCS risk assessment rather than as a diagnostic tool.
		<br/><br/>
		DAN collected data and combined these trips with Project Dive Exploration (PDE) studies for 10 years over three phases. It incorporated the methodology of Project Dive Exploration during Phase III. The Doppler field studies took place on liveaboard dive boats in the Caribbean and the Pacific. Subjects were monitored with Doppler ultrasound 20-40 minutes post dive at a precordial site. Knee bends and hand squeezes were used as the movement phase. Doppler scoring Kisman-Masurel scoring was collapsed to Spencer scale and dichotomized to grades 0.1 vs. 2.3.
		<br/><br/>
		<b>Doppler Use in Research</b>
		<br/>
		Dr. Merrill Spencer of Virginia Mason Medical Center in Seattle, Wash., found a new way to use Doppler ultrasound waves for diving research in the mid-1960s. This led to ultrasound devices used now that send waves through body tissues and catch waves reflected back toward a receiving crystal. Any tissue moving toward or away from the sending crystal will reflect a frequency shift by the velocity of the moving object. Doppler systems analyze the shift and emit an audible chirp or pop when they occur.
		<br/><br/>
		As it happens, gas bubbles reflect much more of the sending signal than the blood flow or body tissues, and therefore these bubbles result in a chirp or pop on the Doppler device. Researchers use these detected bubbles to calculate the levels of bubbling from "no bubbling" to "grade four," which represents well in excess of 1,000 or more bubbles per minute detected in the veins.
		<br/><br/>
		<h2>Results</h2>
		<br/>
		Usable data were from six trips made between 1989 and 1999 where 281 repetitive, multiday dive profiles were collected and analyzed. The total number of subjects in the analyzed data was 67 (46 males, 21 females). Of the 281 dives reviewed, no DCS occurred in monitored dives. One subject was treated after a later dive that was not part of the project.
		<br/><br/>	
		Doppler detected venous gas emboli were:
			<ul>
				<li>Grade 0: 27%</li>
				<li>Grade 1: 37%</li>
				<li>Grade 2: 25%</li>
				<li>Grade 3: 11%</li>
			</ul>
		<br/>
		For a list of publications related to the use of Doppler in our research, <a href='http://www.diversalertnetwork.org/research/pubs.asp?sort=keyword&keyword1=doppler' target='_blank'>click here.</a>
		
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