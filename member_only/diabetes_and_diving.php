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

		<h1>Diabetes and Diving</h1>
			<br/>
		
		<div id='article'>
		
		Historically, DAN has advised divers with insulin-dependent diabetes against diving because of the threat of a hypoglycemic episode underwater. However, in a 1996 survey, DAN discovered that approximately 177 of its members were diabetic and scuba diving. Of these, approximately 74 percent were insulin-dependent.
		<br/><br/>
		As a result of these findings, DAN Medical Research launched an observational study in 1997 to analyze current guidelines for divers with diabetes.
		<br/><br/>
		The objectives of this study were:
			<ul>
				<li>To measure blood glucose levels during scuba diving while following study guidelines</li>
				<li>To develop a workable protocol for blood glucose analysis</li>
				<li>To access compliance and study guidelines.</li>
			</ul>
			
		For this study, all participants:
			<ul>
				<li>visited a personal doctor and had medical verification form signed</li>
				<li>had a Hemoglobin A1c (glycosylated hemoglobin) test before dive trip (within two weeks of the study date)</li>
				<li>kept a daily log of diet, exercise, insulin doses, and blood glucose levels as described</li>
				<li>administered a minimum of three blood glucose tests within one hour of each dive activity and one post-dive test (DAN supplied diabetic equipment and supplies.)</li>
				<li>had a Hemoglobin A1c test after study within two weeks of completion of study (DAN covered both test costs.)</li>
			</ul>
			
			To participate, the diver must have:
				<ul>
					<li>insulin-dependent diabetes</li>
					<li>a scuba diver certification</li>
					<li>been between the ages of 18 and 65</li>
					<li>not been pregnant</li>
					<li>been a DAN Member with DAN Master or Preferred Plan dive insurance</li>
					<li>been willing to follow the protocols for DAN's study</li>
					<li>had a medical release form signed by a diabetologist or personal primary care physician</li>
				</ul>
			
			To participate, the diver must have had:	
				<ul>
					<li>a pretrip HbA1c test in range of < 9 percent</li>
					<li>no history of any episode of severe insulin reactions 			(loss of consciousness or seizure) in past 12 months</li>
					<li>no advanced secondary complications, coronary artery disease, cardiovascular disease</li>
					<li>no advanced peripheral vascular disease, proliferative retinopathy, neuropathy or renal disease</li>
					<li>no hospitalization within the previous 12 months for insulin shock or diabetic ketoacidosis</li>
					<li>hypoglycemic awareness as well as a good understanding of the relationship between exercise and blood glucose levels</li>
					<li>good control of his or her diabetes</li>
					<li>the ability to accurately check blood glucose without supervision</li>
					<li>the ability to detect and treat hypoglycemia without assistance</li>
					<li>no hospitalization or surgery in past 12 months for other conditions</li>
				</ul>	
		<br/>
		<b>Blood Glucose Monitoring</b>
		<br/>
		Blood glucose monitoring occurred one hour, 30 minutes and 10 minutes prior to the dive and again immediately after the dive.
		<br/><br/>
		<b>What Are Hypoglycemic or Hyperglycemic Episodes?</b>
		<br/>
		Researchers assumed a hypoglycemic episode if the diver's blood glucose level was 70 mg/dl or less, or the diver experienced symptomatic hypoglycemia before, during or after diving.
		<br/><br/>
		<b>Signs and Symptoms of Hypoglycemia</b>
				
			<ul>
				<li>sweating</li>
				<li>nervousness</li>
				<li>faintness</li>
				<li>palpitations</li>
				<li>confusion</li>
				<li>visual disturbances</li>
				<li>stupor</li>
				<li>seizures</li>
				<li>loss of consciousness</li>
			</ul>	
				
	<b>Prior to the Dive</b>
	<br/>
	Blood glucose levels below 100 mg/dl on predive measurements or falling levels during subsequent tests were treated with an oral glucose gel and a fourth measurement obtained one hour later. The subject was not allowed to dive and was kept under medical supervision until blood glucose level was rising or stable and above 100 mg/dl.
	<br/><br/>
	<b>During the Dive</b>
	<br/>
	Volunteers who experienced hypoglycemic events (symptoms of hypoglycemia) during the dive signaled their buddies with a pre-established hand signal — an L-shape with their thumb and index finger — and the buddies ascended to the surface. On the surface, the buddy helped the diabetic diver become positively buoyant and ingest a tube of glucose gel (each diabetic diver carried a tube). The buddy team then terminated the dive, returned to the boat and rechecked the diabetic's blood glucose level. An event occurring after the dive required a diabetic diver to eat a carbohydrate snack and recheck his or her blood glucose level until it rose above 80 mg/dl. The diabetic remained under medical supervision during this time.			
		<br/>	<br/>	
	<h2>Results</h2>
	<br/>
	From 1997 through 1999, DAN collected data on nine trips, 561 dives by 41 insulin-requiring divers and 504 control dives by 43 divers without diabetes. Diving created no adverse effects on the diver with diabetes. There were 18 hypoglycemic episodes outside of the diving.
	<br/><br/>
	
	<b>Resources</b>
		<ul>
			<li><a href='http://www.diversalertnetwork.org/research/pubs.asp?sort=keyword&keyword1=diabetes' target='_blank'>List of publications related to this study</a></li>
			
			<li><a href='http://www.diversalertnetwork.org/default.aspx?a=news&id=741' target='_blank'>"DAN and UHMS Publish Guidelines for Recreational Diving with Diabetes"</a></li>
			
			<li><a href='http://www.diversalertnetwork.org/default.aspx?a=news&id=742' target='_blank'>Table of Contents for Diabetes and Recreational Diving with Diabetes</a></li>
		</ul>
		<br/>
	<h2>Project Supporters</h2>
	<br/>
		This project was supported by DAN Members, DAN donors and the following businesses and organizations:
			<ul>
				<li>Aggressor Fleet Inc.</li>
				<li>Nekton Cruises Inc.</li>
				<li>Peter Hughes Diving Inc.</li>
				<li>Underwater Explorers Society (UNEXSO), Bahamas</li>
				<li>Bayer Corporation</li>
				<li>Can Am Care</li>
				<li>Buceo Medico Mexicano Hyperbaric Chamber, Cozumel</li>
				<li>Casa del Mar, Cozumel</li>
				<li>Del-Mar Aquatics, Cozumel</li>
				<li>AquaWorld, Cozumel</li>
				<li>Albatros Charters, Cozumel</li>
				<li>Blue Bubble Divers, Cozumel</li>
				<li>Caribbean Divers, Cozumel</li>
				<li>Cozumel Equalizer SA, Cozumel</li>
				<li>Dive Paradise, Cozumel</li>
				<li>Mako Tours, Cozumel</li>
				<li>Scuba Club Cozumel, Cozumel</li>
				<li>Sand Dollar, Cozumel</li>
				<li>Cha Cha Cha Divers, Cozumel</li>
				<li>Scuba Du, Cozumel</li>
				<li>Dive Palancar, Cozumel</li>
				<li>Aldora Divers, Cozumel</li>
			</ul>
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