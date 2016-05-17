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

		<h1>Flying After Diving</h1>
			<br/>
		
		<div id='article'>
		
		In the past, guidelines for flying after diving were quite varied. For example, after a single no-stop dive, the U.S. Navy recommended a two-hour surface interval time (SIT), DAN recommended 12 hours SIT, and the U.S. Air Force recommended 24 hours SIT.
		<br/><br/>
		A focal point in DAN's research was repetitive dives across the range of depths common in recreational diving, using a series of different surface intervals. Researchers analyzed experimental data to develop a model for estimating decompression risk.
		<br/><br/>
		For this study, more than 500 subjects participated in the experiments at the Center for Hyperbaric Medicine and Environmental Physiology at Duke University Medical Center. Dives spanned the typical recreational depth range: 40 fsw (feet of seawater), 60 fsw and 100 fsw, and dive times were near the recommended recreational limits. Researchers tested both single and repetitive dives.
		<br/><br/>
		Following the dives, participants took a four-hour flight at a simulated altitude of 8,000 feet in the chamber. This is the maximum cabin altitude allowed by the Federal Aviation Administration for pressurized commercial aircraft.
		<br/><br/>
		The objective of the study was to estimate the relationship between the preflight surface interval and decompression illness (DCI) incidence for each dive series. A preflight surface interval was accepted or rejected within the study based upon the number of DCI incidents and total exposures. Acceptance and rejection rules were chosen to allow mild DCI but limit more serious DCI. The Duke Institutional Review Board of Duke Medical Center approved these rules.
		<br/><br/>
		All subjects were dry and at rest throughout the dives and flight. The subjects were certified recreational divers who went through medical history reviews and physical examinations by a DAN diving physician. In addition, they had to be at least 18 years old, not pregnant if female, and body composition must be within 40 percent of their ideal weight. Subjects were eligible for more than one study as the profiles changed, but a subject could participate in only one profile series.
		<br/><br/>		
		
		<h2>Results</h2>
		<br/>
		The study was conducted from 1993 to 1999 for 802 exposures. There were 40 decompression sickness (DCS) incidents (5 percent), of which 21 were moderate DCS, 18 mild DCS and one serious DCS.
		<br/><br/>
		Data were presented at a Flying After Diving Workshop at DAN in May 2002, and the following guidelines were the consensus. They apply to air dives followed by flights at cabin altitudes of 2,000 to 8,000 feet (610 to 2,438 meters) for divers who do not have symptoms of DCS. The recommended preflight surface intervals do not guarantee avoidance of DCS. Longer surface intervals will reduce DCS risk further. For a single no-decompression dive, a minimum preflight surface interval of 12 hours is suggested. For dives requiring decompression stops, there is little evidence on which to base a recommendation, and a preflight surface interval substantially longer than 18 hours appears prudent.
		<br/><br/>
		A second flying after diving study began in 2002 with support from the U.S. Navy. The study is investigating additional dive profiles and oxygen breathing in the surface intervals as a possible method for making the surface intervals shorter.
		<br/><br/>
		<a href='pdfs/fad.pdf' target='_blank'>Download</a> the Flying After Diving Workshop Proceedings.
		<br/><br/>
		<h2>Supporters</h2>
		<br/>
		The project was funded by DAN Members, donors and PADI.
		
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