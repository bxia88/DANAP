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
		<title>DAN Asia-Pacific Member's Only Seminars</title>
	<meta charset="UTF-8"/>
	<link rel="stylesheet" type="text/css" href="member.css"/>
	
	<script type='text/javascript'>
	
	function openlec()
	{
	document.getElementById('lecturer').style.display='block';
	}
	
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
		
		#viddiv
		{
		float:left;
		padding-left:10px;
		font-size:13px;
		}
		
		#lecturer
		{
		display:none;
		font-style:italic;
		font-size:12px;
		}
		
		#vidhelp
		{
		float:right;
		}
	
	</style>
	
	
	</head>
	
	<body>
		<div id='banner'>
			<a href='memberonly.php'><img src='memberlogo1.png' alt='logo'/></a>
		</div>
		<div id='content'>

		
		<h1>Online Seminars</h1>
			<br/><br/>
			
		<div id='intro'>	
		The first Seminar in DAN AP’s online education series is focused on an extremely important issue: <b>Diver Accident Management. </b>
		<br/><br/>
		As divers, being equipped with the skills to help yourself and others in the event of a diving accident or emergency is vital.
		<br/><br/>
		The Diver Accident Management seminar runs for approximately 44 minutes. DAN America CEO, Nick Bird, provides the seminar (see profile below).
		<br/><br/>
		<i>Coming Soon...</i>
		<br/><br/>
		DAN Asia-Pacific will continue to add seminars to this page and will make announcements in Member publications <i>Alert Diver</i> and <i>Deeper with DAN.</i>
		<br/><br/>
		<b>The next online Seminar will discuss Diver Fatalities.</b>
		<br/><br/>
		<a href='#' onclick='openlec();'>Click to see Lecturer Profile</a>
		<br/><br/>
		<div id='lecturer'>
		Dr. Bird is the CEO and Chief Medical Officer at DAN America and oversees the mission departments of medicine, research and education.<br/>
		He started diving in 1984 and became an instructor in 1989. 
		<br/>
		He taught diving in southern and northern California prior to attending medical school. After medical school he completed a residency in family medicine, and subsequently joined the US Air Force as a flight surgeon and served in Iraq. 
		<br/>He received his initial training in hyperbaric medicine while stationed at Travis Air Force Base and completed a fellowship in diving and hyperbaric medicine at the University of California San Diego. 
		<br/>
		He then served as the medical director for hyperbaric medicine at Dixie Regional Medical Center in St. George, UT prior to coming to DAN.
		
		</div>
	
	</div><!--close intro-->
	
	<div id='viddiv'>
	<iframe src="http://player.vimeo.com/video/34266548?color=ff000d" width="366" height="250" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
	
	<p>Click play above to view: Diver Accident Management Seminar</p>
	<br/>
	<a href='http://vimeo.com/help/faq#playing_videos' target="_blank" id='vidhelp'>Video not playing?</a>
	
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