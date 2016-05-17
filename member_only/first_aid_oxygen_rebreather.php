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

		<h1>First Aid Oxygen Rebreather</h1>
			<br/>
		
		<div id='article'>
		Oxygen breathed at elevated pressure (hyperbaric oxygen) is the definitive treatment for decompression illness (DCI). The primary first aid for a patient awaiting hyperbaric oxygen therapy is oxygen breathed at ambient pressure (normobaric oxygen). Typically, normobaric oxygen is provided by an open-circuit regulator or a non-rebreathing mask, but limited oxygen supplies can be exhausted in less than one hour in remote locations — too soon for optimal therapy. Oxygen-supply duration may be increased by using closed-circuit breathing systems in which the expired gas is rebreathed after carbon dioxide is removed and oxygen is replaced.
		<br/><br/>
		This study tested available closed-circuit oxygen rebreathers and developed/modified circuits to develop the most suitable for remote duty first aid. The Institutional Review Board of Duke University Medical Center approved this protocol.
		<br/><br/>
		<b>Phase 1</b>
		<br/>
		DAN's goal to make a closed-circuit oxygen rebreather device began in 1997. Five systems were tested at the Center for Hyperbaric Medicine and Environmental Physiology at Duke University Medical Center and East Carolina University Environmental Physiology Lab. Variables measured included: inspired oxygen and carbon dioxide fractions (FIO2 and FICO2), inspired temperature, rate of oxygen use, breathing resistance, heart rate and canister duration. Evaluation criteria included weight, volume, simplicity, cost, inspired oxygen, carbon dioxide scrubber duration, prepackaged carbon dioxide scrubber availability, expandable hoses for heat exchange and preapproval of system components by the U.S. Food and Drug Administration (FDA).
		<br/><br/>
		The system that was chosen was tested in 27 trials to simulate realistic field conditions and ultimately was developed as the Remote Emergency Medical Oxygen (REMO2) system available from DAN.
		<br/><br/>
		<b>Phase 2</b>
		<br/>
		An unexpected loss in manufacturing capability for the original REMO2 required the development of a replacement device. The goal of the Phase 2 study was to establish a second generation unit with overall performance superior to the original.
		<br/><br/>
		The second-generation device was developed in collaboration with two companies — Engineered Medical Systems (EMS) and Micropore.
		<br/><br/>
		<h2>Results</h2>
		<br/>
		<b>Phase 1 Results</b>
		<br/>
		One system was chosen and developed into an oxygen rebreather for consumer use called the DAN Remote Emergency Medical Oxygen (REMO2™) system.
		<br/><br/>
		DAN sold the REMO2™ system from January 1999 to August 2001. DAN was forced to suspend sales of the REMO2 unit and accessories due to an unexpected loss in the supply of manufactured components.
		<br/><br/>
		<b>Phase 2 Results</b>
		<br/>
		Further trials were conducted to develop a new rebreather circuit using FDA-approved, off-the-shelf components. Six human trials were conducted to evaluate the production quality of what would become the second-generation REMO2 circuit.
		<br/><br/>
		Two important enhancements of the second-generation circuit were the longer scrubber duration and the reduction in the measured breathing resistance.
		<br/><br/>
		DAN began selling the second generation REMO2 and providing training in its use in October 2003.
		<br/><br/>
		<a href='http://www.diversalertnetwork.org/research/pubs.asp?sort=keyword&keyword1=remo' target='_blank'>See a list of publications related to this study.</a>
		
		<br/><br/>
		
		<h2>Project Supporters</h2>
		<br/>
		This project was funded by Divers Alert Network.
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