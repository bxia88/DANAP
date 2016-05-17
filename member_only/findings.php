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
		<title>DAN Asia-Pacific Member's Only Research</title>
	<meta charset="UTF-8"/>
	<link rel="stylesheet" type="text/css" href="member.css"/>
	
	<script type='text/javascript'>
	
	
	
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
		
		.article
		{
		
		width:600px;
		font-size:14px;
		background-color:#F0F0F0;
		padding:10px;
		border-style:solid;
		border-width:1px;
		-webkit-border-radius: 10px;
		-moz-border-radius: 10px;
		border-radius: 10px;
		border-color:#C2C2C2;
		}
		
		.article a
		{
		font-size:16px;
		font-weight:700;
		text-decoration:none;
		}
		
	</style>
	
	
	</head>
	
	<body>
		<div id='banner'>
			<a href='memberonly.php'><img src='memberlogo1.png' alt='logo'/></a>
		</div>
		<div id='content'>

		
		<h1>Research Studies/ Projects</h1>
			<br/><br/>
			
		<div class='article'>
			<a href='flying_after_recompression_treatment_study.php'>Flying After Recompression Treatment Study</a>
			<p>DAN conducted an online survey of divers who were recompressed for decompression illness (DCI) within the past five years and then flew in an airplane. The study was published in the Management of Mild or Marginal Decompression Illness in Remote Locations Workshop Proceedings.</p>
		</div>
		
		<br/>
		<div class='article'>
			<a href='diabetes_and_diving.php'>Diabetes and Diving</a>
			<p>DAN completed two studies on recreational diving by persons with diabetes. The first study followed adults with diabetes who were previously certified to dive. The second studied teenagers with diabetes immediately following their certification training. All participants had to demonstrate good general blood glucose control prior to entry to the study. The divers were shown to be able to effectively control blood glucose levels during multiday diving under relatively benign subtropical conditions, producing relatively few cases of hypoglycemia and no significant untoward events.</p>
		</div>
		
		<br/>
		<div class='article'>
			<a href='us_navy_survey.php'>U.S. Navy Survey</a>
			<p>The U.S. Navy asked DAN for assistance in conducting a survey of recreational divers to obtain information about diver demographics, dive experience and diving habits. In early 1998 a randomly selected group of DAN Members received a four-page survey form.</p>
		</div>
		
		
		<br/>
		<div class='article'>
			<a href='liveaboard_doppler.php'>Liveaboard Doppler</a>
			<p>DAN researchers assessed the effects of age, gender and dive profiles on participants through the use of Doppler monitoring devices.</p>
		</div>
		
		<br/>
		<div class='article'>
			<a href='aging_diver_study.php'>Aging Diver Study</a>
			<p>The objective of the Aging Diver Study was to evaluate the effects of age and associated medical conditions on dive style and dive outcome using PDE methodology.</p>
		</div>
		
		<br/>
		<div class='article'>
			<a href='breath_hold_study.php'>Breath-Hold Study</a>
			<p>The breath-hold project studied the effects of hyperventilation, work, breathing mixture and dive depth on immersed breath-hold duration. The primary objective of this study was to increase breath-hold time to a maximal safe level without danger of loss of consciousness or functional incapacity due to hypocapnia, hypoxia or hypercapnia. The study was published as a report to the Navy.</p>
		</div>
		
		<br/>
		<div class='article'>
			<a href='flying_after_diving.php'>Flying After Diving</a>
			<p>Past guidelines for how long to wait after diving before flying for recreational divers were unclear and often contradictory. DAN conducted human trials to investigate this question with support from the U.S. Navy. The study was documented in two publications and a workshop.</p>
		</div>
	
		<br/>
		<div class='article'>
			<a href='first_aid_oxygen_rebreather.php'>First Aid Oxygen Rebreather</a>
			<p>The first- and second-generation closed-circuit oxygen rebreathing circuits developed for remote duty first aid applications were studied to confirm effective performance. The second-generation device was able to deliver an extremely high fraction of oxygen (~0.95 with aggressive mask management) at an average oxygen flow rate of 1.1 L·min-1.</p>
		</div>
	
		<br/>
		
		
		
		
		
	</div><!--close content-->
	
	<div id='footer'>
	
		<ul>
			<li><a href='http://danasiapacific.org'>DAN AP Home</a></li>
			<li><a href='memberonly.php'>Member Only Home</a></li>
		</ul>
	</div>
	</body>
</html>	