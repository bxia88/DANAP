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

		<h1>U.S. Navy Survey</h1>
			<br/>
		
		<div id='article'>
		
		In 1998, DAN assisted the U.S. Navy with a survey of recreational divers. The Navy was interested in information about diver demographics, dive experience and diving habits.
		<br/><br/>
		The Navy's new low-frequency sonar called SURTASS LFA (Surveillance Towed Array Sonar System Low Frequency Active) may be audible for many miles, so the potential for incidental exposure is greater than with current sonar. Like the sonar currently in use, the Navy had to establish safe-operating limits.
		<br/><br/>
		The Navy wanted to find levels that would not cause problems in the recreational community and conducted studies involving nonmilitary-trained sport divers. DAN did not play a role in that study, nor did it play a role in recruiting test subjects. The Navy did that on its own.
		<br/><br/>
		However, DAN lent assistance in the Navy's efforts to determine how representative the subjects were of the sport diver population and gave the Navy an idea of the medical conditions present in sport divers, which may have to be taken into consideration in setting safe sonar operating limits.
		<br/><br/>
		DAN sent surveys to 3,000 randomly selected DAN members. Participation was voluntary.
		<br/><br/>
		
		<h2>Results</h2>
		<br/>
		Three thousand surveys were mailed to randomly selected DAN members; 1,654 completed surveys were returned. This represented a 55 percent return rate. The ratio male to female was 1,229:408, and the average age was 40.
		<br/><br/>
		During 1999, DAN and Navy researchers presented data at the annual Undersea and Hyperbaric Medical Society (UHMS) scientific meeting. The U.S. Navy used the data to produce their report to the federal government on the impact of the new sonar.
		<br/><br/>
		
		<h2>Supporters</h2>
		<br/>
		This project was supported by the U.S. Navy.
		
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