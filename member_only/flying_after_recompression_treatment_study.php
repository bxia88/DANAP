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

		<h1>Flying After Recompression Treatment Study</h1>
			<br/>
		
		<div id='article'>
		
		In 2003, DAN conducted an online survey of divers who were recompressed for decompression illness (DCI) within the past five years and then flew. Flying after diving is a recognized DCI risk factor. Divers, who are treated for DCI with recompression therapy in locations far from home, must fly home and potentially face additional problems from DCI on those flights. One would think that by waiting a certain length of time after recompression, one could limit the risk of relapse. So the question is how long one should wait to fly after recompression therapy.
		<br/><br/>
		This was one of the goals of the anonymous survey. In addition, DAN was trying to learn how often DCI relapses occur after recompression therapy; and what effect flying after recompression had on DCI relapse.
		<br/><br/>
		Currently, there is very little data to answer the question of how long to wait but some recommendations range from the most common of 72 hours to 4-6 weeks, which is the longest.
		<br/><br/>
		A review of the DAN DCI data from 1993-1995 where 151 cases were treated in Cozumel or Cayman and 126 were successfully followed up with, showed that 95 divers had complete relief after treatment and 9 (10%) had a relapse of symptoms with flight. 31 divers finished treatment with residual symptoms and 22 (71%) had a relapse with flight.
		<br/><br/>
		<h2>Results</h2>
		<br/>
		Surveys were sent to approximately 200 chambers in October of 2003 and the diver survey was posted on the DAN website in November 2003.
		<br/><br/>
		<b>Chamber Survey Results</b>
		<br/>
		Of 200 chambers, 17 replied with the following information:
		<br/>
			<ul>
				<li>12 of 229 non-flying SCI cases had relapse (4%)</li>
				<li>3 relapsed during or after flight with post-treatment surface intervals of 14 hours to 10 days.</li>
			</ul>
		<br/>
		<b>Diver Survey Results</b>
		<br/>
		310 divers responded with the following information:
			<ul>
			
				<li>200 cases did not fly</li>
				<li>30 were determined not to be DCI</li>
				<li>79 flew after recompression treatment</li>
				<li>39% of the 200 who did not fly had a relapse (4%)</li>
				<li>30% of the 79 who did fly relapsed (10%)</li>
			</ul>
		<br/>
		No significant difference between the 2 groups in terms of relapse rate.
		<br/><br/>
		<b>Estimated relapse rates after recompression:</b>
			<ul>
			
				<li>4% with no flight</li>
				<li>10% for asymptomatic flight</li>
				<li>71% for flying with symptoms and still 45% after waiting for 72 hours</li>
			</ul>
		For a list of publications related to this study, <a href='http://www.diversalertnetwork.org/research/pubs.asp?sort=keyword&keyword1=fat' target='_blank'>click here.</a>	
		<br/><br/>
	<h2>Project Supporters</h2>
	<br/>
	This project was supported by DAN Members and Donors.
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