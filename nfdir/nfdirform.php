<!DOCTYPE HTML>
<html>
	<head>
		<title>DAN Diving Incident Monitoring Study - Incident Form</title>
		<meta charset="UTF-8"/>
		<link rel='stylesheet' type='text/css' href='nfdir.css'/>
		
		
		<script type="text/javascript">
		
		function finish()
		{
			var confirmer= confirm("Are you sure you want to submit?");
			
			if(confirmer==true)
				{
				return validate();
				}
			else
				{
				 return false;
				}
		}
		
		
		
		
		function validate()
		{
		
		var q1 = document.getElementById('Q1').value;
		
		if(q1=='null')
			{
			alert("Please do not send an empty form");
			return false;
			}
		 else
		   {
		   return true;
		   }
		
		
		}
		
		
		
		
		
		var eswitcher=false;
		var rswitcher=false;
	
		
		function equip()
		
		{
			if (eswitcher==false)
			{
			document.getElementById("equipment").style.display="block";
			document.getElementById("ebutton").value="No";
			eswitcher=true;
			}
			else
			{
			document.getElementById("equipment").style.display="none";
			document.getElementById("ebutton").value="Yes";
			eswitcher=false;
			}
		
		}
		
		
			function rebreather()
		
		{
			if (rswitcher==false)
			{
			document.getElementById("rebreather").style.display="block";
			document.getElementById("rbutton").value="No";
			rswitcher=true;
			}
			else
			{
			document.getElementById("rebreather").style.display="none";
			document.getElementById("rbutton").value="Yes";
			rswitcher=false;
			}
		
		}	
		
		
		
		</script>
		
		
		
		
		
	</head>
	<body>
	<div id='wrapper'>
		<div id='intro'>
		
			<img src="logo.png" alt="DAN LOGO" />
			<h1>DAN DIVING INCIDENT REPORT</h1>
			
			<p>
				<span class="bold">Definition:</span> A Diving incident is any error or 
            unplanned event that could, or indeed did, reduce the safety margin 
            for a diver on a particular dive. The error may have been made by 
            anyone involved with the dive. It may also include equipment 
            problems. The incident may have been preventable or unpreventable. 
            Most incidents don't cause harm, but reporting such incidents will 
            give valuable information when considered with other incidents.
            	<br/><br/>
            <span class="bold">Anonimity:</span> Please <b>DO NOT</b> identify any person involved unless it is yourself.<br>
            This form will not be available to any legal process.<br>
            Anonymity is assured.
            	<br/><br/>
             <span class="bold">Quality:</span>	Please DO NOT report hearsay 
            incidents.
            	<br/><br/>
              <span class="bold">Instructions:</span> Please read all questions carefully. In 
            addition to selecting one or more options under each heading, write 
            simply in your own words a description of what happened. This 
           is the most important component of the report so please ensure you complete this part.  Some questions will not be applicable, leave these blank.
            	<br/><br/>
            DAN Asia-Pacific will collect 
            and collate the information provided in these diving incident reports. 
            Please complete this form with as much detail as possible and then press 
            the submit report button at the 
            bottom.	
            <br/><br/>
            
           </div> <!--close intro-->	
          
			<div class='main'>
			
			<!--Contact details-->	
				
			<div id='contact_details'>	
			<h2>CONTACT DETAILS</h2>
			<br/>
			<span class='optional'>This section is completely optional, but it can be useful to DAN if we wish to seek clarification on the incident.<br/>
			If you wish to remain anonymous, simply do not enter your contact details.</span>	
			<br/>
			<br/>
				<form action="nfdircomplete.php" method="post">
			<div id='contact_input'>
			<label for='first_name'>First Name: </label>	
			<input type='text' id='first_name' name='first_name' size='30'/>	
			<br/><br/>
			<label for='last_name'>Last Name: </label>	
			<input type='text' id='last_name' name='last_name' size='30'/>	
			<br/><br/>
			<label for='phone'>Phone: </label>	
			<input type='text' id='phone' name='phone' size='30'/>	
			<br/><br/>
			<label for='email'>Email:</label>	
			<input type='text' id='email' name='email' size='30'/>	
			<br/><br/>
			</div><!--close contact_input-->
			</div> <!--close contact_details-->
			
			<h2>THE INCIDENT</h2>
						<br/><br/>	
			
			<!--QUESTION 1-->
					<span class="bold"><span class="blue">Q1:</span> Who was the involved person?</span>
					<br/><br/>
					<span class='answers'>
					<select name='Q1' id='Q1'>
						<option value="null">--Select--</option>
						<option value='yours'>You</option>
						<option value='your buddy'>Your Buddy</option>
						<option value='another diver'>Another Diver</option>
					</select>
					</span>
					<br/><br/>
					
			<!--QUESTION 2-->
					<span class="bold"><span class="blue">Q2:</span> Did the incident cause harm?</span>
					</br><br/>
					<span class='answers'>
					<select name='Q2'>
						<option value="null">--Select--</option>
						<option value="yes">YES</option>
						<option value="no">NO</option>
						<option value="unknown">NOT KNOWN</option>
					</select>	
					</span>
					
					<br/><br/>
					
			<!--QUESTION 3-->
					<span class="bold"><span class="blue">Q3:</span> Location?</span>
					<br/><br/>
					<span class='answers'>
					Australia
					<select name='Q3aus'>
						<option value="null">--State--</option>
						<option value="qld">QLD</option>
						<option value="nsw">NSW</option>
						<option value="vic">VIC</option>
						<option value="sa">SA</option>
						<option value="wa">WA</option>
						<option value="nt">NT</option>
						<option value="tas">TAS</option>
						<option value="act">ACT</option>
						<option value="outside_aus">OUTSIDE AUS</option>
					</select>	
					
					Other
						<select name='Q3os'>
						<option value="null">--Country--</option>
						<option value="brunei">BRUNEI</option>
						<option value="cambodia">CAMBODIA</option>
						<option value="china">CHINA</option>
						<option value="cookislands">COOK ISLANDS</option>
						<option value="fiji">FIJI</option>
						<option value="hongkong">HONG KONG</option>
						<option value="india">INDIA</option>
						<option value="indonesia">INDONESIA</option>
						<option value="korea">KOREA</option>
						<option value="laos">LAOS</option>
						<option value="malaysia">MALAYSIA</option>
						<option value="myanmar">MYANMAR</option>
						<option value="newzealand">NEW ZEALAND</option>
						<option value="niue">NIUE</option>
						<option value="papuanewguinea">PAPUA NEW GUINEA</option>
						<option value="philippines">PHILIPPINES</option>
						<option value="somoa">SAMOA</option>
						<option value="singapore">SINGAPORE</option>
						<option value="solomanislands">SOLOMAN ISLANDS</option>
						<option value="srilanka">SRI LANKA</option>
						<option value="taiwan">TAIWAN</option>
						<option value="thailand">THAILAND</option>
						<option value="timor">TIMOR</option>
						<option value="tonga">TONGA</option>
						<option value="vanuatu">VANUATU</option>
						<option value="vietnam">VIETNAM</option>
						<option value="other">OTHER</option>
						</select>	
					</span>
					<br/><br/>
					
			<!--QUESTION 4-->
					<span class="bold"><span class="blue">Q4:</span> What month did the incident occur?</span>
					<br/><br/>
					<span class='answers'>
					
					<select name='Q4'>
						<option value="null">--Month--</option>
						<option value="jan">JAN</option>
						<option value="feb">FEB</option>
						<option value="march">MARCH</option>
						<option value="april">APRIL</option>
						<option value="may">MAY</option>
						<option value="june">JUNE</option>
						<option value="july">JULY</option>
						<option value="aug">AUG</option>
						<option value="sept">SEPT</option>
						<option value="oct">OCT</option>
						<option value="nov">NOV</option>
						<option value="dec">DEC</option>
					</select>
					</span>
					<br/><br/>
		
				
					
					
			<!--QUESTION 5-->
					<span class="bold"><span class="blue">Q5:</span> Did the incident occur during training?</span>
					<br/><br/>
					<span class='answers'>
					
					<select name='Q5'>
						<option value="null">--Select--</option>
						<option value="yes">YES</option>
						<option value="no">NO</option>
						<option value="unknown">NOT KNOWN</option>
					</select>	
					</span>
					<br/><br/>	
					
			<!--QUESTION 6-->
					<span class="bold"><span class="blue">Q6:</span> At what point of the dive did the incident occur?</span>
					<br/><br/>
					<span class='answers'>
					
					<select name='Q6'>
						<option value="null">--Select--</option>
						<option value="preperation">Preperation</option>
						<option value="entry">Entry</option>
						<option value="descent">Descent</option>
						<option value="during">During the dive</option>
						<option value="ascent">Ascent</option>
						<option value="post">Post Dive</option>
							<option value="unknown">unknown</option>
					</select>	
					</span>
					<br/><br/>	
					
					<h2>DEPTHS</h2>
						<br/><br/>	
					
			<!--QUESTION 7-->
					<span class="bold"><span class="blue">Q7:</span> Depth when incident occured?</span>
					<br/><br/>
					<span class='answers'>
					
					<select name='Q7'>
						<option value="null">--Depth--</option>
						<option value="surface">Surface</option>
						<option value="01-10m">01-10m</option>
						<option value="11-20m">11-20m</option>
						<option value="21-30m">21-30m</option>
						<option value="31-40m">31-40m</option>
						<option value="41-50m">41-50m</option>
						<option value="51-99m">51-99m</option>
						<option value=">100m">Deeper than 100m</option>
						<option value="Unknown">Unknown</option>
					</select>	
					</span>
					<br/><br/>	
					
			<!--QUESTION 8-->
					<span class="bold"><span class="blue">Q8:</span> Planned depth for dive?</span>
					<br/><br/>
					<span class='answers'>
					
					<select name='Q8'>
						<option value="null">--Depth--</option>
						<option value="surface">Surface</option>
						<option value="01-10m">01-10m</option>
						<option value="11-20m">11-20m</option>
						<option value="21-30m">21-30m</option>
						<option value="31-40m">31-40m</option>
						<option value="41-50m">41-50m</option>
						<option value="51-99m">51-99m</option>
						<option value=">100m">Deeper than 100m</option>
						<option value="Unknown">Unknown</option>
					</select>	
					</span>
					<br/><br/>	
					
			<!--QUESTION 9-->
					<span class="bold"><span class="blue">Q9:</span> Maximum depth reached on dive?</span>
					<br/><br/>
					<span class='answers'>
					
					<select name='Q9'>
						<option value="null">--Depth--</option>
						<option value="surface">Surface</option>
						<option value="01-10m">01-10m</option>
						<option value="11-20m">11-20m</option>
						<option value="21-30m">21-30m</option>
						<option value="31-40m">31-40m</option>
						<option value="41-50m">41-50m</option>
						<option value="51-99m">51-99m</option>
						<option value=">100m">Deeper than 100m</option>
						<option value="Unknown">Unknown</option>
					</select>	
					</span>
					<br/><br/>	
					
					
		
			<h2>DESCRIPTION OF INCIDENT</h2>
			<br/>
			<!--QUESTION 10-->
					<span class="bold"><span class="blue">Q10:</span> Please Describe the incident in detail.
					<br/><br/>
					<span class='answers'>
					 Include ANY factors which you believe may have contributed to, or minimised the incident.</span> 
					<br/>
					<span class='answers'>
					 If more than one incident occured please fill out a seperate form.</span></span>
					<span class='answers'>
					<textarea name='Q10' id='Q10' cols='90%' rows='20' style="margin-left:0px;"></textarea></span>
					
					<br/><br/>
					
			<!--QUESTION 11-->
					<span class="bold"><span class="blue">Q11:</span> Do you think the incident was preventable?</span>
					<br/><br/>
					<span class='answers'>
					
					<select name='Q11'>
						<option value="null">--Select--</option>
						<option value="yes">YES</option>
						<option value="no">NO</option>
						<option value="unknown">NOT KNOWN</option>
					</select>
					</span>
					<br/>
					<span class='answers'>
					<label for='Q11a'>Steps that could of been taken to prevent the incident</label>
					</span>
					<br/>
					<span class='answers'>
					<textarea name='Q11a' id='Q11a'cols='90%' rows='5'/></textarea></span>
					<br/><br/>
			
			<h2>HEALTH AND MEDICATIONS</h2>
			<br/>
			
			<!--QUESTION 12-->
					<span class="bold"><span class="blue">Q12:</span> Did the diver have any health problems prior to incident?</span>
				<br/><br/>
					<span class='answers'>
					
					<select name='Q12'>
						<option value="null">--Select--</option>
						<option value="yes">YES</option>
						<option value="no">NO</option>
						<option value="unknown">NOT KNOWN</option>
					</select>
					</span>
					<br/>	
					<span class='answers'>
					Specify:
					</span>
					<span class='answers'>
					<input type='text' id='Q12a' name='Q12a' size='100%'/>
					<br/><br/></span>
			<!--QUESTION 13-->
					<span class="bold"><span class="blue">Q13:</span> Does the diver take any medication?</span>
					<br/><br/>
					<span class='answers'>
					
					<select name='Q13'>
						<option value="null">--Select--</option>
						<option value="yes">YES</option>
						<option value="no">NO</option>
						<option value="unknown">NOT KNOWN</option>
					</select>	
					</span>
					<br/>
					<span class='answers'>
					Specify
					</span>
					<span class='answers'>
					<input type='text' id='Q13a' name='Q13a' size='100%'/>
					</span>
					<br/><br/>
					
					<h2>EXPERIENCE AND QUALIFICATIONS</h2>
					<br/><br/>
			<!--QUESTION 14-->
					<span class="bold"><span class="blue">Q14:</span> Total number of dives ever, by diver?</span>
				<br/><br/>
					<span class='answers'>
					
					<select name='Q14'>
						<option value="null">--Select--</option>
						<option value="1-20">1-20</option>
						<option value="21-100">21-100</option>
						<option value="101-500">101-500</option>
						<option value="500+">500+</option>
						<option value="unknown">NOT KNOWN</option>
					</select>	
					</span>
					<br/><br/>		
				
			<!--QUESTION 15-->
					<span class="bold"><span class="blue">Q15:</span> Total years diving, by diver if known?</span>
					<br/><br/>
					<span class='answers'>
					
					<input type='text' name='Q15' id='Q15'/>years
					</span>
					<br/><br/>		
			
			
			<!--QUESTION 16-->
					<span class="bold"><span class="blue">Q16:</span> Diver's Qualificaiton? </span>
					<br/><br/>
					<span class='answers'>
					Recreational
					<select name='Q16rec'>
						<option value='null'>--Select--</option>
						<option value='no cert'>Uncertified</option>				
						<option value='student'>Dive student</option>
						<option value='open water'>Open water</option>
						<option value='adv open water'>Adv open water</option>
						<option value='rescue'>Rescue diver</option>
						<option value='divemaster'>Divemaster or A.I.</option>
						<option value='instructor'> Dive instructor</option>
						<option value='unknown'>Unknown</option>
					</select>	
					</span>		
					<br/>
					<span class='answers'>
					Non-Recreational (may tick more than one)
					<br/><br/>
							
						<input type='checkbox' name='Q16_commercial_military'
						id='commercial_military' value='checked'/>		
						<label for='commercial_military'>Commercial or military</label>	
						<br/>
								
						<input type='checkbox' name='Q16_technical' id='technical'/>
						<label for='technical' value='checked'>Technical</label>
						<br/>
							
						<input type='checkbox' name='Q16_cave' id='cave' value='checked'/>
						<label for='cave'>Cavern or Cave</label>	
					
					<br/><br/>
					Specify
					<br/>
					<input type='text' id='Q16a' name='Q16a' size='100%'/>
					</span>
					<br/><br/>
					<h2>FIRST AID and OXYGEN</h2>
					<br/>
					
			<!--QUESTION 17-->
					<span class="bold"><span class="blue">Q17:</span> First aid provision?</span>
					<br/><br/>
			
					<span class='answers'>
					
					<select name='Q17'>
						<option value="null">--Select--</option>
						<option value="not required">First aid not required</option>
						<option value="effective FA">First aid provided effectively</option>
						<option value="lack of supplies">First aid Provided Poorly</option>
					
					</select>
					<br/><br/>
					Specify
					<br/>
					<input type='text' id='Q17a' name='Q17a' size='100%'/>
					</span>
					<br/><br/>
					
			<!--QUESTION 18-->
					<span class="bold"><span class="blue">Q18:</span> Availability of oxygen?</span>
					<br/><br/>
			
					<span class='answers'>
					
					<select name='Q18'>
						
						<option value="null">--Select--</option>
						<option value="not needed">O2 not needed</option>
						<option value="available and sufficent">Available and sufficient</option>
						<option value="available and insufficent">Available but insufficient</option>
						<option value="not available">Not available</option>
					
						
					</select>
					</span></br>
					
			<!--QUESTION 19-->
					<span class="bold"><span class="blue">Q19:</span> How was the oxygen supplied?</span>
					<br/><br/>
					
					<span class='answers'>
					
					<select name='Q19'>
						<option value="null">--Select--</option>
						<option value="not needed">O2 not needed</option>
						<option value="demand valve">Demand Valve</option>
						<option value="constant flow with reservoir">Constant flow mask with reservoir</option>
						<option value="constant flow no reservoir">Constant flow mask no reservoir</option>
						<option value="other">Other</option>
					</select></span>
					<br/><br/>
					
					<h2>GAS SUPPLY ISSUES DURING DIVE</h2>
					<br/>
					
					
			<!--QUESTION 20-->
					<span class="bold"><span class="blue">Q20:</span> Gas supply in use during dive?</span>
					<br/><br/>
			
					<span class='answers'>
					
					<select name='Q20'>
						<option value="null">--Select--</option>
						<option value="air">Air</option>
						<option value="nitrox">Nitrox</option>
						<option value="heliox">Heliox</option>
						<option value="trimix">Trimix</option>
						<option value="o2">O2</option>
					</select>
					</span>
					<br/><br/>
					
			<!--QUESTION 21-->
					<span class="bold"><span class="blue">Q21:</span> Greater than expected consumption?</span>
					</br>
			
					<span class='answers'>
					
					<select name='Q21'>
						<option value="null">--Select--</option>
						<option value="yes">YES</option>
						<option value="no">NO</option>
						<option value="unknown">Unknown</option>
					
					</select>
					</span>
					<br/><br/>
			<!--QUESTION 22-->
					
					<span class="bold"><span class="blue">Q22:</span> Issues with gases other than air: (may tick more than one) </span>
						<br/><br/>
					<span class='answers'>
					
					<input type='checkbox' id='poor gas analysis' name='Q22_poor_gas_analysis' value='checked'/>
					<label for='poor gas analysis'>No/poor gas analysis or checking pre dive</label>
					<br/>
					<input type='checkbox' id='labeling issue' name='Q22_labeling_issue' value='checked'/>
					<label for='labeling issue'>Cylinder labelling issue</label>
					<br/>
					<input type='checkbox' id='confusion with gas mix' name='Q22_confusion_with_gas_mix' value='checked'/>
					<label for='confusion with gas mix'>Confusion with gas mix during dive</label>
					</span>
					<br/><br/>
										
					<h2>CYLINDER CONFIGURATION</h2>
					
					<br/>
			<!--QUESTION 23-->
						<span class="bold"><span class="blue">Q23:</span> Single cylinder? </span>
					</br><br/>
					<span class='answers'>
					<select name='Q23'>
						<option value='null'>--Select--</option>
						<option value='yes'>YES</option>
						<option value='no'>NO</option>
						<option value='unknown'>UNKNOWN</option>
					</select>
					</span>
					<br/>
			<!--QUESTION 24-->
						<span class="bold"><span class="blue">Q24:</span> Twin cylinder? </span>
					</br><br/>
					<span class='answers'>
					<select name='Q24'>
						<option value='null'>--Select--</option>
						<option value='no'>NO</option>
						<option value='unknown'>UNKNOWN</option>
						<option value='back mounted'>Independent back mounted</option>
						<option value='side mounted'>Independent side mounted</option>
						<option value='manifolded'>Manifolded</option>
					</select>
					</span>
					<br/>
			<!--QUESTION 25-->
						<span class="bold"><span class="blue">Q25:</span> Where Sling or Stage cylinders used? </span>
					</br><br/>
					<span class='answers'>
					<select name='Q25'>
						<option value='null'>--Select--</option>
						<option value='yes'>YES</option>
						<option value='no'>NO</option>
						<option value='unknown'>UNKNOWN</option>
					</select>
					</span>
					<br/>
					
					<span class='answers'>
					Number of sling or stage cylinders used?
					<input type='text' id='Q25a' name='Q25a'/>
					</span>
					<br/>
			<!--QUESTION 26-->
						<span class="bold"><span class="blue">Q26:</span> Describe the cylinder configuration and contents:</span>
					</br><br/>
					<span class='answers'>
					<textarea id='Q26' name='Q26' rows='5' cols='90%'></textarea>
					</span>
					<br/><br/>
			
						
					<h2>CONTRIBUTING FACTORS</h2>
					<br/>
			<!--QUESTION 27-->
					<span class="bold"><span class="blue">Q27:</span> Diver related: (tick as many as you feel relevant) </span>
					</br>
					</div><!--close main-->
					
					
					<div class='col1'>
					<span class='answers'>
					<input type='checkbox' name='Q27_inadequate_knowledge' value='checked' id='Q27_inadequate_knowledge'>
					<label for='Q27_inadequate_knowledge'>Inadequate knowledge</label>
					<br/>
					
					<input type='checkbox' name='Q27_insufficent_training' value='checked' id='Q27_insufficent_training'>
					<label for='Q27_insufficent_training'>Insufficient training in diving</label>
					<br/>
					
					<input type='checkbox' name='Q27_inexperience' value='checked' id='Q27_inexperience'>
					<label for='Q27_inexperience'>Inexperience in diving</label>
					<br/>
					
					<input type='checkbox' name='Q27_poor_technique' value='checked' id='Q27_poor_technique'>
					<label for='Q27_poor_technique'>Poor technique</label>
					<br/>
					
					<input type='checkbox' name='Q27_unfamiliar_diving_environment' value='checked' id='Q27_unfamiliar_diving_environment'>
					<label for='Q27_unfamiliar_diving_environment'>Unfamiliar diving environment</label>
					<br/>
					
					<input type='checkbox' name='Q27_inadequate_supervision' value='checked' id='Q27_inadequate_supervision'>
					<label for='Q27_inadequate_supervision'>Inadequate supervision</label>
					<br/>
					
					<input type='checkbox' name='Q27_poor_planning' value='checked' id='Q27_poor_planning'>
					<label for='Q27_poor_planning'>Poor planning</label>
					<br/>
					</span>
					</div><!--close col1-->
					
			
					
					<div class='col2'>
			
					<input type='checkbox' name='Q27_poor_communication' value='checked' id='Q27_poor_communication'>
					<label for='Q27_poor_communication'>Poor communication</label>
					<br/>
					
					<input type='checkbox' name='Q27_failure_to_self_check' value='checked' id='Q27_failure_to_self_check'>
					<label for='Q27_failure_to_self_check'>Failure to self check</label>
					<br/>
					
					<input type='checkbox' name='Q27_failure_to_buddy_check' value='checked' id='Q27_failure_to_buddy_check'>
					<label for='Q27_failure_to_buddy_check'>Failure to buddy check</label>
					<br/>
					
					<input type='checkbox' name='Q27_haste' value='checked' id='Q27_haste'>
					<label for='Q27_haste'>Haste</label>
					<br/>
					
					<input type='checkbox' name='Q27_inattention' value='checked' id='Q27_inattention'>
					<label for='Q27_inattention'>Inattention</label>
					<br/>
					
					<input type='checkbox' name='Q27_judgement_error' value='checked' id='Q27_judgement_error'>
					<label for='Q27_judgement_error'>Judgement error</label>
					<br/>
			
			
			
				</div><!--close col2-->
					</span>
			<div class='main'>
				
		<!--QUESTION 28-->
					<span class="bold"><span class="blue">Q28:</span> Equipment Related: (tick as many as you feel relevant)</span>
					</br>
				
					</div><!--close main-->
					
					<div class='col1'>
					<span class='answers'>
					
					<input type='checkbox' name='Q28_equipment_issue' value='checked' id='Q28_equipment_issue'>
					<label for='Q28_equipment_issue'>Equipment issue</label>
					<br/>
					
					<input type='checkbox' name='Q28_unfamiliar_equipment' value='checked' id='Q28_unfamiliar_equipment'>
					<label for='Q28_unfamiliar_equipment'>Unfamiliar equipment</label>
					<br/>
					
					<input type='checkbox' name='Q28_failure_to_understand_equipment' value='checked' id='Q28_failure_to_understand_equipment'>
					<label for='Q28_failure_to_understand_equipment'>Failure to understand equipment</label>
					<br/>
					
					<input type='checkbox' name='Q28_equipment_malfunction' value='checked' id='Q28_equipment_malfunction'>
					<label for='Q28_equipment_malfunction'>Equipment malfunction</label>
					<br/>
					</span>
				</div> <!--close col1-->
				
				<div class='col2'>
					
					<input type='checkbox' name='Q28_poorly_maintained' value='checked' id='Q28_poorly_maintained'>
					<label for='Q28_poorly_maintained'>Equipment poorly maintained</label>
					<br/>
					
					<input type='checkbox' name='Q28_poorly_serviced' value='checked' id='Q28_poorly_serviced'>
					<label for='Q28_poorly_serviced'>Equipment poorly serviced</label>
					<br/>	
					
					<input type='checkbox' name='Q28_not_serviced' value='checked' id='Q28_not_serviced'>
					<label for='Q28_not_serviced'>Equipment not serviced</label>
					<br/>	
				
	
				</div><!--close col2-->	
				
				<div class='main'>
		<!--QUESTION 29-->
		
				<span class="bold"><span class="blue">Q29:</span> Health Related: (tick as many as you feel relevant)</span>
					</br>
				
					</div><!--close main-->
					
			<div class='col1'>	
				
				<span class='answers'>
					
					<input type='checkbox' name='Q29_fatigue' value='checked' id='Q29_fatigue'>
					<label for='Q29_fatigue'>Fatigue</label>
					<br/>
					
					<input type='checkbox' name='Q29_anxiety' value='checked' id='Q29_anxiety'>
					<label for='Q29_anxiety'>Anxiety</label>
					<br/>
					
					<input type='checkbox' name='Q29_drugs_alcohol' value='checked' id='Q29_drugs_alcohol'>
					<label for='Q29_drugs_alcohol'>Drugs or Alcohol</label>
					<br/>
					
					<input type='checkbox' name='Q29_recent_illness' value='checked' id='Q29_recent_illness'>
					<label for='Q29_recent_illness'>Recent Illness</label>
					<br/>
				</span>
			</div> <!--close col1-->
				
			<div class='col2'>
				
				<input type='checkbox' name='Q29_feeling_unwell' value='checked' id='Q29_feeling_unwell'>
					<label for='Q29_feeling_unwell'>Feeling unwell</label>
					<br/>
				
				<input type='checkbox' name='Q29_sea_sickness' value='checked' id='Q29_sea_sickness'>
					<label for='Q29_sea_sickness'>Sea sickness</label>
					<br/>
					
				<input type='checkbox' name='Q29_poor_fitness' value='checked' id='Q29_poor_fitness'>
					<label for='Q29_poor_fitness'>Poor Fitness</label>
					<br/>	
				
			</div> <!--close col2-->
			
			<div class='main'>
			
				<h2>DID THE INCIDENT INVOLVE THE FOLLOWING</h2>
				<br/><br/>
		<!--QUESTION 30-->	
				<span class="bold"><span class="blue">Q30:</span> Gas supply issue: (tick as many as you feel relevant)</span>
					</br>
			
			</div> <!--close main-->
			
			<div class='col1'>
				<span class='answers'>
				<input type='checkbox' name='Q30_low_gas' value='checked' id='Q30_low_gas'>
					<label for='Q30_low_gas'>Low gas</label>
					<br/>
				
				<input type='checkbox' name='Q30_out_of_gas' value='checked' id='Q30_out_of_gas'>
					<label for='Q30_out_of_gas'>Out of gas</label>
					<br/>
				
				<input type='checkbox' name='Q30_buddy_breathing' value='checked' id='Q30_buddy_breathing'>
					<label for='Q30_buddy_breathing'>Buddy breathing</label>
					<br/>
				</span>	
			</div> <!--close col1-->
			
			<div class='col2'>
			
				<input type='checkbox' name='Q30_octopus_breathing' value='checked' id='Q30_octopus_breathing'>
					<label for='Q30_octopus_breathing'>Octopus breathing</label>
					<br/>
					
				<input type='checkbox' name='Q30_pony_breathing' value='checked' id='Q30_pony_breathing'>
					<label for='Q30_pony_breathing'>Pony breathing</label>
					<br/>	
					
				<input type='checkbox' name='Q30_contaminated_gas' value='checked' id='Q30_contaminated_gas'>
					<label for='Q30_contaminated_gas'>Contaminated gas</label>
					<br/>		
			
			
			</div> <!--close col2-->
			
			<div class='main'>
		<!--QUESTION 31-->	
				<span class="bold"><span class="blue">Q31:</span> Equalisation issue: (tick as many as you feel relevant)</span>
					</br>
			</div> <!--close main-->
			
			<div class='col1'>
				<span class='answers'>
				
				<input type='checkbox' name='Q31_descent' value='checked' id='Q31_descent'>
					<label for='Q31_descent'>Problem on descent</label>
					<br/>
					
				<input type='checkbox' name='Q31_ascent' value='checked' id='Q31_ascent'>
					<label for='Q31_ascent'>Problem on ascent</label>
					<br/>	
				</span>
			</div><!--close col1-->	
			
			
				<div class='main'>
		
		<!--QUESTION 32-->	
				<span class="bold"><span class="blue">Q32:</span> Altitude issue: (tick as many as you feel relevant)</span>
					</br>
			</div> <!--close main-->
			
			<div class='col1'>
				<span class='answers'>
				
				<input type='checkbox' name='Q32_flying_after_diving' value='checked' id='Q32_flying_after_diving'>
					<label for='Q32_flying_after_diving'>Flying after diving</label>
					<br/>
					
				<input type='checkbox' name='Q32_high_altitude' value='checked' id='Q32_high_altitude'>
					<label for='Q32_high_altitude'>Altitude >300m after diving</label>
					<br/>	
				</span>
			</div><!--close col1-->	
			
			
			<div class='main'>
			
		<!--QUESTION 33-->	
				<span class="bold"><span class="blue">Q33:</span> Environmental issue: (tick as many as you feel relevant)</span>
					</br>
			</div> <!--close main-->
			
			<div class='col1'>
				<span class='answers'>
				
				<input type='checkbox' name='Q33_marine_animal' value='checked' id='Q33_marine_animal'>
					<label for='Q33_marine_animal'>Marine animal</label>
					<br/>
					
				<input type='checkbox' name='Q33_poor_vis' value='checked' id='Q33_poor_vis'>
					<label for='Q33_poor_vis'>Poor visability</label>
					<br/>
					
				<input type='checkbox' name='Q33_strong_current' value='checked' id='Q33_strong_current'>
					<label for='Q33_strong_current'>Strong current</label>
					<br/>
					
				<input type='checkbox' name='Q33_entanglement' value='checked' id='Q33_entanglement'>
					<label for='Q33_entanglement'>Entanglement</label>
					<br/>
				</span>
			</div><!--close col1-->	
			
			
			<div class='main'>
			
		<!--QUESTION 34-->	
				<span class="bold"><span class="blue">Q34:</span> Ascent issue: (tick as many as you feel relevant)</span>
					</br>
			</div> <!--close main-->
			
			<div class='col1'>
				
				<span class='answers'>
				
				<input type='checkbox' name='Q34_out_of_gas_ascent' value='checked' id='Q34_out_of_gas_ascent'>
					<label for='Q34_out_of_gas_ascent'>Out of gas ascent</label>
					<br/>
				
				<input type='checkbox' name='Q34_rapid_ascent_to_surface' value='checked' id='Q34_rapid_ascent_to_surface'>
					<label for='Q34_rapid_ascent_to_surface'>Rapid ascent to surface</label>
					<br/>
					
				<input type='checkbox' name='Q34_rapid_ascent_at_depth' value='checked' id='Q34_rapid_ascent_at_depth'>
					<label for='Q34_rapid_ascent_at_depth''>Rapid ascent at depth- controlled</label>
					<br/>	
				
					<input type='checkbox' name='Q34_buoyancy_issue' value='checked' id='Q34_buoyancy_issue'>
					<label for='Q34_buoyancy_issue''>Buoyancy issue</label>
					<br/>	
				
				</span>
				</div> <!--close col1-->
				
				<div class='col2'>
					
					<input type='checkbox' name='Q34_problem_ascent' value='checked' id='Q34_problem_ascent'>
					<label for='Q34_problem_ascent''>Problem on ascent</label>
					<br/>
					
					<input type='checkbox' name='Q34_multiple_ascents' value='checked' id='Q34_multiple_ascents'>
					<label for='Q34_multiple_ascents''>Multiple ascents</label>
					<br/>
					
					<input type='checkbox' name='Q34_problem_at_deco_stop' value='checked' id='Q34_problem_at_deco_stop'>
					<label for='Q34_problem_at_deco_stop''>Problem at safety/deco stop</label>
					<br/>
					
					<input type='checkbox' name='Q34_missed_deco' value='checked' id='Q34_missed_deco'>
					<label for='Q34_missed_deco'>Missed deco</label>
					<br/>
				
			</div><!--close col2-->	
				
			<div class='main'>
			
			
		<!--QUESTION 35-->	
					<span class="bold"><span class="blue">Q35:</span> Buddy issue: (tick as many as you feel relevant)</span>
					</br>
			</div><!--close main-->
				
			<div class='col1' style='width:500px'>
			
				<span class='answers'>
				
				<input type='checkbox' name='Q35_problem_missed_at_buddy_check' value='checked' id='Q35_problem_missed_at_buddy_check'>
					<label for='Q35_problem_missed_at_buddy_check'>Problem missed during buddy check</label>
					<br/>
				
				<input type='checkbox' name='Q35_poor_buddy_pairing' value='checked' id='Q35_poor_buddy_pairing'>
					<label for='Q35_poor_buddy_pairing'>Poor buddy pairing</label>
					<br/>
				
				<input type='checkbox' name='Q35_poor_buddy_response' value='checked' id='Q35_poor_buddy_response'>
					<label for='Q35_poor_buddy_response'>Poor buddy response</label>
					<br/>	
				
				<input type='checkbox' name='Q35_lost_buddy_contact' value='checked' id='Q35_lost_buddy_contact'>
					<label for='Q35_lost_buddy_contact'>Lost buddy contact</label>
					<br/>	
				</span>
			</div><!--close col1-->
			
			<div class='main'>
			
		<!--QUESTION 36-->		
				<span class="bold"><span class="blue">Q36:</span> Other issue: (tick as many as you feel relevant)</span>
					<br/>
			</div><!--close div-->	
				
				<div class='col1'>
					
				<span class='answers'>
				
				<input type='checkbox' name='Q36_nausea_vomiting' value='checked' id='Q36_nausea_vomiting'>
					<label for='Q36_nausea_vomiting'>Nausea or vomiting u/w</label>
					<br/>
				
				<input type='checkbox' name='Q36_panic' value='checked' id='Q36_panic'>
					<label for='Q36_panic'>Panic</label>
					<br/>
					
				<input type='checkbox' name='Q36_anchor_retrieval' value='checked' id='Q36_anchor_retrieval'>
					<label for='Q36_anchor_retrieval'>Anchor retrieval</label>
					<br/>	
				</span>
			</div><!--close col1-->	
				
			<div class='main'>	
				
				<h2>EQUIPMENT INVOLVED IN THE INCIDENT</h2>
				<br/><br/>
				
		<!--QUESTION 37-->		
				<span class="bold"><span class="blue">Q37:</span> Equipment owner?</span>
					<br/><br/>
					<span class='answers'>
				<select id='Q37' name='Q37'>
					<option value=null>--Select--</option>					
					<option value='own'>Own</option>
					<option value='hired'>Hired</option>
					<option value='borrowed'>Borrowed</option>
					<option value='unknown'>Unknown</option>
				</select>	
				</span>
				<br/><br/>
				
					
				<span class="bold"><span class="blue">Q38:</span> Exposure suit worn?</span>
					<br/><br/>
					
		<!--QUESTION 38-->			
				<span class='answers'>
					<select id='Q38' name='Q38'>
						<option value='null'>--Select--</option>
						<option value='wet'>Wet</option>
						<option value='dry'>Dry</option>
						<option value='lycra'>Lycra</option>
						<option value='none'>Not worn</option>
						<option value='unknown'>Unknown</option>
					</select>
				</span>		
				<br/><br/>
				
				<b>Were there equipment issues involved in the incident?</b>
				<br/><br/>
				<span class='answers'>
				<input type='button' onclick='equip();' id="ebutton" value="Yes" size='100px'/>
				</span>
				
				</div><!--close main-->
				
				
				
				<div id='equipment'>
				
				
				<div class='main'>
				
		<!--QUESTION 39-->		
			<span class="bold"><span class="blue">Q39:</span> Equipment issues:  (tick as many as you feel relevant) </span>
					<br/>	
						
			</div><!--close main-->
			<div class='col1'>
				<span class='answers'>
				
				<input type='checkbox' name='Q39_new_equipment' value='checked' id='Q39_new_equipment'>
					<label for='Q39_new_equipment'>New equipment</label>
					<br/>	
				
				<input type='checkbox' name='Q39_equipment_misuse' value='checked' id='Q39_equipment_misuse'>
					<label for='Q39_equipment_misuse'>Equipment misuse</label>
					<br/>	
					
				<input type='checkbox' name='Q39_poor_condition' value='checked' id='Q39_poor_condition'>
					<label for='Q39_poor_condition'>Poor condition</label>
					<br/>		
				
				<input type='checkbox' name='Q39_essential_kit_missing' value='checked' id='Q39_essential_kit_missing'>
					<label for='Q39_essential_kit_missing'>Essential kit missing</label>
					<br/>
				
				<input type='checkbox' name='Q39_equipment_forgotten' value='checked' id='Q39_equipment_forgotten'>
					<label for='Q39_equipment_forgotten'>Equipment forgotten</label>
					<br/>
				
				</span>
			</div><!--close col1-->	
			
			
			
				
				<br/><br/>
				<div class='main'>
				
		<!--QUESTION 40-->		
				<span class="bold"><span class="blue">Q40:</span> Exposure suit issues: (tick as many as you feel relevant)</span>
					<br/>
			
			</div><!--close main-->
			<div class='col1'>
				<span class='answers'>		
				<input type='checkbox' name='Q40_uncomfortable' value='checked' id='Q40_uncomfortable'>
					<label for='Q40_uncomfortable'>Uncomfortable</label>
					<br/>
					
				<input type='checkbox' name='Q40_tight' value='checked' id='Q40_tight'>
					<label for='Q40_tight'>Tight-breathing restricted</label>
					<br/>
					
				<input type='checkbox' name='Q40_flooding' value='checked' id='Q40_flooding'>
					<label for='Q40_flooding'>Dry suit- flooding</label>
					<br/>
					
				<input type='checkbox' name='Q40_blowup' value='checked' id='Q40_blowup'>
					<label for='Q40_blowup'>Dry suit- blowup</label>
					<br/>
				</span>	
				</div>
				<div class='main'>
				
		<!--QUESTION 41-->		
				<span class="bold"><span class="blue">Q41:</span> Cylinder issue: (tick as many as you feel relevant)</span>
					<br/>	
				</div><!--close main-->
				<div class='col1'>
					<span class='answers'>
					
				<input type='checkbox' name='Q41_out_of_test' value='checked' id='Q41_out_of_test'>
					<label for='Q41_out_of_test'>Out of test</label>
					<br/>
					
				<input type='checkbox' name='Q41_faulty' value='checked' id='Q41_faulty'>
					<label for='Q41_faulty'>Faulty</label>
					<br/>	
				
				<input type='checkbox' name='Q41_changed_buoyancy' value='checked' id='Q41_changed_buoyancy'>
					<label for='Q41_changed_buoyancy'>Changed buoyancy</label>
					<br/>
				
				<input type='checkbox' name='Q41_not_secured' value='checked' id='Q41_not_secured'>
					<label for='Q41_not_secured'>Not secured</label>
					<br/>
				
				<input type='checkbox' name='Q41_size_change_between_dives' value='checked' id='Q41_size_change_between_dives'>
					<label for='Q41_size_change_between_dives'>Size change between dives</label>
					<br/>
					
				</span>	
				
				</div><!--close col1-->
				
			<div class='main'>
			
	<!--QUESTION 42-->			
			<span class="bold"><span class="blue">Q42:</span> Gas or regulator issue: (tick as many as you feel relevant)</span>
					<br/>
				</div><!--close main-->
				
			<div class='col1' style='width:370px'>
				<span class='answers'>
				
				<input type='checkbox' name='Q42_gas_not_turned_on' value='checked' id='Q42_gas_not_turned_on'>
					<label for='Q42_gas_not_turned_on'>Gas not turned on</label>
					<br/>
					
				<input type='checkbox' name='Q42_gas_not_turned_on_fully' value='checked' id='Q42_gas_not_turned_on_fully'>
					<label for='Q42_gas_not_turned_on_fully'>Gas not turned on fully</label>
					<br/>
					
				<input type='checkbox' name='Q42_gas_turned_on_and_off_prior_to_entry' value='checked' id='Q42_gas_turned_on_and_off_prior_to_entry'>
					<label for='Q42_gas_turned_on_and_off_prior_to_entry'>Gas turned on and off prior to entry</label>
					<br/>	
				
				<input type='checkbox' name='Q42_gas_turned_off_inappropriately' value='checked' id='Q42_gas_turned_off_inappropriately'>
					<label for='Q42_gas_turned_off_inappropriately'>Gas turned off inappropriately</label>
					<br/>	
				
				<input type='checkbox' name='Q42_predive_contents_check_not_done' value='checked' id='Q42_predive_contents_check_not_done'>
					<label for='Q42_predive_contents_check_not_done'>Predive contents check/analysis not done</label>
					<br/>	
				
				<input type='checkbox' name='Q42_failed_to_regularly_check_contents' value='checked' id='Q42_failed_to_regularly_check_contents'>
					<label for='Q42_failed_to_regularly_check_contents'>Failed to reguarly check contents</label>
					<br/>	
					
				<input type='checkbox' name='Q42_unable_to_read_contents_gauge' value='checked' id='Q42_unable_to_read_contents_gauge'>
					<label for='Q42_unable_to_read_contents_gauge'>Unable to read contents gauge</label>
					<br/>
				
				<input type='checkbox' name='Q42_inaccurate_contents_gauge' value='checked' id='Q42_inaccurate_contents_gauge'>
					<label for='Q42_inaccurate_contents_gauge'>Inaccurate contents gauge</label>
					<br/>
					
				<input type='checkbox' name='Q42_hp_hose_leak' value='checked' id='Q42_hp_hose_leak'>
					<label for='Q42_hp_hose_leak'>High pressure hose leak</label>
					<br/>
					
				<input type='checkbox' name='Q42_lp_hose_leak' value='checked' id='Q42_lp_hose_leak'>
					<label for='Q42_lp_hose_leak'>Low pressure hose leak</label>
					<br/>
					
				<input type='checkbox' name='Q42_regulator_free_flow' value='checked' id='Q42_regulator_free_flow'>
					<label for='Q42_regulator_free_flow'>Regulator free flow</label>
					<br/>	
					
				<input type='checkbox' name='Q42_regulator_increased_breathing_resistance' value='checked' id='Q42_regulator_increased_breathing_resistance'>
					<label for='Q42_regulator_increased_breathing_resistance'>Regulator increased breathing resistance</label>
					<br/>		
					
				<input type='checkbox' name='Q42_unable_to_purge' value='checked' id='Q42_unable_to_purge'>
					<label for='Q42_unable_to_purge'>Unable to purge</label>
					<br/>	
	
				</span>	
			</div><!--close col1-->
				
			<div class='col2'>
			
				<input type='checkbox' name='Q42_oring_problem' value='checked' id='Q42_oring_problem'>
					<label for='Q42_oring_problem'>O-ring problem</label>
					<br/>			
				
				<input type='checkbox' name='Q42_pillar_valve_problem' value='checked' id='Q42_pillar_valve_problem'>
					<label for='Q42_pillar_valve_problem'>Pillar valve problem</label>
					<br/>				
			
				<input type='checkbox' name='Q42_tape_still_on_valve' value='checked' id='Q42_tape_still_on_valve'>
					<label for='Q42_tape_still_on_valve'>Tape still on valve</label>
					<br/>	
				
				<input type='checkbox' name='Q42_1st_stage_incorrectly_attached' value='checked' id='Q42_1st_stage_incorrectly_attached'>
					<label for='Q42_1st_stage_incorrectly_attached'>1st stage incorrectly attached</label>
					<br/>	
					
				<input type='checkbox' name='Q42_1st_stage_malfunction' value='checked' id='Q42_1st_stage_malfunction'>
					<label for='Q42_1st_stage_malfunction'>1st stage malfunction</label>
					<br/>						
			
				<input type='checkbox' name='Q42_2nd_stage_malfunction' value='checked' id='Q42_2nd_stage_malfunction'>
					<label for='Q42_2nd_stage_malfunction'>2nd stage malfunction</label>
					<br/>	
					
				<input type='checkbox' name='Q42_octopus_malfunction' value='checked' id='Q42_octopus_malfunction'>
					<label for='Q42_octopus_malfunction'>Octopus malfunction</label>
					<br/>	
					
				<input type='checkbox' name='Q42_octopus_snagged' value='checked' id='Q42_octopus_snagged'>
					<label for='Q42_octopus_snagged'>Octopus snagged</label>
					<br/>	
				
				<input type='checkbox' name='Q42_pony_bottle_problem' value='checked' id='Q42_pony_bottle_problem'>
					<label for='Q42_pony_bottle_problem'>Pony bottle problem</label>
					<br/>
					
				<input type='checkbox' name='Q42_seperation_of_regular_parts' value='checked' id='Q42_seperation_of_regular_parts'>
					<label for='Q42_seperation_of_regular_parts'>Seperation of regular parts</label>
					<br/>
					
				<input type='checkbox' name='Q42_unable_to_locate_alternate' value='checked' id='Q42_unable_to_locate_alternate'>
					<label for='Q42_unable_to_locate_alternate'>Unable to locate alternate</label>
					<br/>
				
				<input type='checkbox' name='Q42_gas_used_frequently_for_buoyancy' value='checked' id='Q42_gas_used_frequently_for_buoyancy'>
					<label for='Q42_gas_used_frequently_for_buoyancy'>Gas used frequently for buoyancy</label>
					<br/>	
					
				<input type='checkbox' name='Q42_swivel_issue' value='checked' id='Q42_swivel_issue'>
					<label for='Q42_swivel_issue'>Swivel issue</label>
					<br/>		
			
			
			</div><!--close col2-->
			
			<div class='main'>
			
		<!--QUESTION 43-->		
				<span class="bold"><span class="blue">Q43:</span> BCD issue: (tick as many as you feel relevant)</span>
					<br/>
			</div><!--close main-->
			
			<div class='col1'>
				<span class='answers'>
				<input type='checkbox' name='Q43_bcd_not_worn' value='checked' id='Q43_bcd_not_worn'>
					<label for='Q43_bcd_not_worn'>BCD not worn</label>
					<br/>
					
				<input type='checkbox' name='Q43_unfamiliar_with_use' value='checked' id='Q43_unfamiliar_with_use'>
					<label for='Q43_unfamiliar_with_use'>Unfamiliar with use</label>
					<br/>
					
				<input type='checkbox' name='Q43_spontaneously_inflated' value='checked' id='Q43_spontaneously_inflated'>
					<label for='Q43_spontaneously_inflated'>Spontaneously inflated</label>
					<br/>	
					
				<input type='checkbox' name='Q43_inflator_failed' value='checked' id='Q43_inflator_failed'>
					<label for='Q43_inflator_failed'>Inflator failed</label>
					<br/>
					
				<input type='checkbox' name='Q43_inflator_hose_leak' value='checked' id='Q43_inflator_hose_leak'>
					<label for='Q43_inflator_hose_leak'>Inflator hose leak</label>
					<br/>	
					
				<input type='checkbox' name='Q43_inflator_not_connected' value='checked' id='Q43_inflator_not_connected'>
					<label for='Q43_inflator_not_connected'>Inflator not connected</label>
					<br/>	
					
				<input type='checkbox' name='Q43_incorrect_inflator_hose' value='checked' id='Q43_incorrect_inflator_hose'>
					<label for='Q43_incorrect_inflator_hose'>Incorrect inflator hose</label>
					<br/>	
					
				<input type='checkbox' name='Q43_didnt_know_how_to_inflate' value='checked' id='Q43_didnt_know_how_to_inflate'>
					<label for='Q43_didnt_know_how_to_inflate'>Didn't know how to inflate</label>
					<br/>	
					
				<input type='checkbox' name='Q43_didnt_know_how_to_deflate' value='checked' id='Q43_didnt_know_how_to_deflate'>
					<label for='Q43_didnt_know_how_to_deflate'>Didn't know how to deflate</label>
					<br/>	
					
				<input type='checkbox' name='Q43_combo_occy_inflator_issue' value='checked' id='Q43_combo_occy_inflator_issue'>
					<label for='Q43_combo_occy_inflator_issue'>Combo occy inflator issue</label>
					<br/>		
					
				<input type='checkbox' name='Q43_dump_valve_malfunction' value='checked' id='Q43_dump_valve_malfunction'>
					<label for='Q43_dump_valve_malfunction'>Dump valve malfunction</label>
					<br/>
					
				<input type='checkbox' name='Q43_uncomfortable' value='checked' id='Q43_uncomfortable'>
					<label for='Q43_uncomfortable'>Uncomfortable</label>
					<br/>	
				
					</span>
				</div><!--close col1-->
					
			<div class='col2'>
				
				
					
				<input type='checkbox' name='Q43_inflation_restricted_breathing' value='checked' id='Q43_inflation_restricted_breathing'>
					<label for='Q43_inflation_restricted_breathing'>Inflation restricted breathing</label>
					<br/>		
					
				<input type='checkbox' name='Q43_unable_to_deflate' value='checked' id='Q43_unable_to_deflate'>
					<label for='Q43_unable_to_deflate'>Unable to deflate</label>
					<br/>		
				
				<input type='checkbox' name='Q43_unable_to_inflate' value='checked' id='Q43_unable_to_inflate'>
					<label for='Q43_unable_to_inflate'>Unable to inflate</label>
					<br/>
					
				<input type='checkbox' name='Q43_unable_to_inflate_low_on_gas' value='checked' id='Q43_unable_to_inflate_low_on_gas'>
					<label for='Q43_unable_to_inflate_low_on_gas'>Unable to inflate (low on gas)</label>
					<br/>	
					
				<input type='checkbox' name='Q43_bcd_cylinder_problem' value='checked' id='Q43_bcd_cylinder_problem'>
					<label for='Q43_bcd_cylinder_problem'>BCD cylinder problem</label>
					<br/>
					
				<input type='checkbox' name='Q43_inadequate_buoyancy' value='checked' id='Q43_inadequate_buoyancy'>
					<label for='Q43_inadequate_buoyancy'>Inadequate buoyancy</label>
					<br/>	
				
				<input type='checkbox' name='Q43_confusion_inflate_deflate_button' value='checked' id='Q43_confusion_inflate_deflate_button'>
					<label for='Q43_confusion_inflate_deflate_button'>Confusion between the inflate/deflate buttons</label>
					<br/>	
					
				<input type='checkbox' name='Q43_buddy_couldnt_deflate' value='checked' id='Q43_buddy_couldnt_deflate'>
					<label for='Q43_buddy_couldnt_deflate'>Buddy couldn't deflate</label>
					<br/>	
					
				<input type='checkbox' name='Q43_buddy_couldnt_inflate' value='checked' id='Q43_buddy_couldnt_inflate'>
					<label for='Q43_buddy_couldnt_inflate'>Buddy couldn't inflate</label>
					<br/>		
					
				<input type='checkbox' name='Q43_bcd_leaked' value='checked' id='Q43_bcd_leaked'>
					<label for='Q43_bcd_leaked'>BCD leaked</label>
					<br/>
					
				<input type='checkbox' name='Q43_incorrect_size' value='checked' id='Q43_incorrect_size'>
					<label for='Q43_incorrect_size'>Incorrect size</label>
					<br/>
			</div><!--close col2-->
				
			<div class='main'>
				<span class='answers'>
				Other BCD issues:<br/>
				<input type='text' name='Q43other'id='Q43other' size='100%'/>
					<br/><br/>
				</span>
				
		<!--QUESTION 44-->			
				<span class="bold"><span class="blue">Q44:</span> Dive Table/computer/gauge issue: (tick as many as you feel relevant)</span>
					<br/>
			</div><!--close main-->	
			
			<div class='col1' style='width:350px'>
			
				<span class='answers'>
				
				<input type='checkbox' name='Q44_dive_table_not_used' value='checked' id='Q44_dive_table_not_used'>
					<label for='Q44_dive_table_not_used'>Dive table not used</label>
					<br/>
					
				<input type='checkbox' name='Q44_dive_table_misread' value='checked' id='Q44_dive_table_misread'>
					<label for='Q44_dive_table_misread'>Dive table misread</label>
					<br/>
					
				<input type='checkbox' name='Q44_dive_table_not_understood' value='checked' id='Q44_dive_table_not_understood'>
					<label for='Q44_dive_table_not_understood'>Dive table not understood</label>
					<br/>
					
				<input type='checkbox' name='Q44_computer_not_used' value='checked' id='Q44_computer_not_used'>
					<label for='Q44_computer_not_used'>Computer not used</label>
					<br/>
					
				<input type='checkbox' name='Q44_computer_stopped_working' value='checked' id='Q44_computer_stopped_working'>
					<label for='Q44_computer_stopped_working'>Computer stopped working</label>
					<br/>	
					
				<input type='checkbox' name='Q44_computer_forgot_to_activate' value='checked' id='Q44_computer_forgot_to_activate'>
					<label for='Q44_computer_forgot_to_activate'>Computer forgot to activate</label>
					<br/>	
					
				<input type='checkbox' name='Q44_computer_unable_to_read' value='checked' id='Q44_computer_unable_to_read'>
					<label for='Q44_computer_unable_to_read'>Computer unable to read/confusing</label>
					<br/>		
				
				</span>
				
				</div><!--close col1-->
				
				<div class='col2'>
				
				<input type='checkbox' name='Q44_computer_battery_problem' value='checked' id='Q44_computer_battery_problem'>
					<label for='Q44_computer_battery_problem'>Computer battery problem</label>
					<br/>	
					
				<input type='checkbox' name='Q44_dived_outside_limits' value='checked' id='Q44_dived_outside_limits'>
					<label for='Q44_dived_outside_limits'>Dived outside of limits of table/computer</label>
					<br/>	
					
				<input type='checkbox' name='Q44_depth_gauge_not_used' value='checked' id='Q44_depth_gauge_not_used'>
					<label for='Q44_depth_gauge_not_used'>Depth gauge not used</label>
					<br/>
					
				<input type='checkbox' name='Q44_depth_gauge_inaccurate' value='checked' id='Q44_depth_gauge_inaccurate'>
					<label for='Q44_depth_gauge_inaccurate'>Depth gauge inaccurate</label>
					<br/>
					
				<input type='checkbox' name='Q44_depth_gauge_unable_to_read' value='checked' id='Q44_depth_gauge_unable_to_read'>
					<label for='Q44_depth_gauge_unable_to_read'>Depth gauge unable to read</label>
					<br/>	
				
				<input type='checkbox' name='Q44_depth_gauge_max_depth_not_reset' value='checked' id='Q44_depth_gauge_max_depth_not_reset'>
					<label for='Q44_depth_gauge_max_depth_not_reset'>Depth gauge- max depth not reset</label>
					<br/>
					
				<input type='checkbox' name='Q44_depth_gauge_confusion_over_units' value='checked' id='Q44_depth_gauge_confusion_over_units'>
					<label for='Q44_depth_gauge_confusion_over_units'>Confusion over units</label>
					<br/>	
					
				</div> <!--close col2-->	
				
				
			<div class='main'>
			
		<!--QUESTION 45-->				
				<span class="bold"><span class="blue">Q45:</span> Mask/Fins issue: (tick as many as you feel relevant)</span>
					<br/>
			</div><!--close main-->
			
			<div class='col1'>
				<span class='answers'>
				
				<input type='checkbox' name='Q45_fin_strap_broke' value='checked' id='Q45_fin_strap_broke'>
					<label for='Q45_fin_strap_broke'>Fin strap broke</label>
					<br/>
					
				<input type='checkbox' name='Q45_fin_lost' value='checked' id='Q45_fin_lost'>
					<label for='Q45_fin_lost'>Fin lost</label>
					<br/>
					
				<input type='checkbox' name='Q45_fin_caused_cramp' value='checked' id='Q45_fin_caused_cramp'>
					<label for='Q45_fin_caused_cramp'>Fin caused cramp</label>
					<br/>
					
				<input type='checkbox' name='Q45_fin_incorrect_size' value='checked' id='Q45_fin_incorrect_size'>
					<label for='Q45_fin_incorrect_size'>Fin incorrect size</label>
					<br/>	
					
				<input type='checkbox' name='Q45_mask_flooding_panic' value='checked' id='Q45_mask_flooding_panic'>
					<label for='Q45_mask_flooding_panic'>Mask Flooding-panic</label>
					<br/>		
					
				</span>
			</div><!--close col1-->
			
			<div class='col2'>
				
				<input type='checkbox' name='Q45_mask_flooding_no_panic' value='checked' id='Q45_mask_flooding_no_panic'>
					<label for='Q45_mask_flooding_no_panic'>Mask Flooding-no panic</label>
					<br/>
					
				<input type='checkbox' name='Q45_mask_strap_broke' value='checked' id='Q45_mask_strap_broke'>
					<label for='Q45_mask_strap_broke'>Mask strap broke</label>
					<br/>	
					
				<input type='checkbox' name='Q45_mask_unable_to_clear' value='checked' id='Q45_mask_unable_to_clear'>
					<label for='Q45_mask_unable_to_clear'>Mask unable to clear</label>
					<br/>	
					
				<input type='checkbox' name='Q45_mask_clearing_caused_panic' value='checked' id='Q45_mask_clearing_caused_panic'>
					<label for='Q45_mask_clearing_caused_panic'>Mask clearing caused panic</label>
					<br/>		
				</div><!--close col2-->	
				
			<div class='main'>
			
		<!--QUESTION 46-->			
				<span class="bold"><span class="blue">Q46:</span> Weights: (tick as many as you feel relevant)</span>
					<br/>
				</div><!--close main-->
				
				
			<div class='col1'>
			
				<span class='answers'>
					
				<input type='checkbox' name='Q46_underweighted' value='checked' id='Q46_underweighted'>
					<label for='Q46_underweighted'>Underweighted</label>
					<br/>
					
				<input type='checkbox' name='Q46_overweighted' value='checked' id='Q46_overweighted'>
					<label for='Q46_overweighted'>Overweighted</label>
					<br/>	
				
				<input type='checkbox' name='Q46_unable_to_release' value='checked' id='Q46_unable_to_release'>
					<label for='Q46_unable_to_release'>Unable to release</label>
					<br/>	
					
				<input type='checkbox' name='Q46_didnt_know_how_to_release' value='checked' id='Q46_didnt_know_how_to_release'>
					<label for='Q46_didnt_know_how_to_release'>Didn't know how to release</label>
					<br/>	
					
				<input type='checkbox' name='Q46_quick_release_jam' value='checked' id='Q46_quick_release_jam'>
					<label for='Q46_quick_release_jam'>Quick release jam</label>
					<br/>		
					
					
					
				</span>
			</div><!--close col1-->	
					
			<div class='col2'>
				
				<input type='checkbox' name='Q46_tongue_overlap' value='checked' id='Q46_tongue_overlap'>
					<label for='Q46_tongue_overlap'>Tongue overlap causing snag</label>
					<br/>		
				
				<input type='checkbox' name='Q46_snagged_on_release' value='checked' id='Q46_snagged_on_release'>
					<label for='Q46_snagged_on_release'>Snagged on release</label>
					<br/>	
					
				<input type='checkbox' name='Q46_weights_dropped_by_accident' value='checked' id='Q46_weights_dropped_by_accident'>
					<label for='Q46_weights_dropped_by_accident'>Weights dropped by accident</label>
					<br/>	
					
				<input type='checkbox' name='Q46_snagged_causing_accidental_release' value='checked' id='Q46_snagged_causing_accidental_release'>
					<label for='Q46_snagged_causing_accidental_release'>Snagged causing accidental release</label>
					<br/>		
					
				<input type='checkbox' name='Q46_integrated_weight_issue' value='checked' id='Q46_integrated_weight_issue'>
					<label for='Q46_integrated_weight_issue'>Integrated weight issue</label>
					<br/>		
				</div><!--close col2-->	
					
					
				</div> <!--close equipment-->
				<br/><br/>
				
			<div class='main'>
				
				<b>Was the involved person using a rebreather?</b>
				<br/><br/>
				<span class='answers'>
				<input type='button' onclick='rebreather();' id="rbutton" value="Yes" size='100px'/>
				</span>
			</div><!--close main-->	
				
			<div id='rebreather'>
				
				<div class='main'>
				
				<h2>REBREATHER</h2>
				<br/><br/>
		<!--QUESTION 47-->			
				<span class="bold"><span class="blue">Q47:</span> Rebreather type?</span>
					<br/><br/>
					<span class='answers'>
				<select name='Q47'>
					<option value='null'>--Select--</option>
					<option value='semi closed'>Semi closed</option>
					<option value='fully closed'>Fully closed</option>
					<option value='unknown'>Unknown</option>
				</select>	
				</span>
				<br/><br/>
			
		<!--QUESTION 48-->			
			<span class="bold"><span class="blue">Q48:</span> Rebreather build?</span>
					<br/><br/>
					<span class='answers'>
				<select name='Q48'>
					<option value='null'>--Select--</option>
					<option value='production model'>Production model</option>
					<option value='modified significantly'>Modified significantly</option>
					<option value='home or custom'>Home/custom built</option>
					<option value='unknown'>Unknown</option>
				</select>	
				</span>
				
				<br/><br/>
				
		<!--QUESTION 49-->			
				<span class="bold"><span class="blue">Q49:</span> Rebreather control?</span>
					<br/><br/>
					<span class='answers'>
				<select name='Q49'>
					<option value='null'>--Select--</option>
					<option value='manual'>Manual</option>
					<option value='electric'>Electric</option>
					<option value='unknown'>Unknown</option>
				</select>	
				</span>
				
		<!--QUESTION 50-->			
					<br/><br/>
				<span class="bold"><span class="blue">Q50:</span> Rebreather brand?</span>
					<br/><br/>
				<span class='answers'>
				<input type='text' id='Q50' name='Q50' size='80%'/>
				</span>
				<br/><br/>
				
		<!--QUESTION 51-->	
		<span class="bold"><span class="blue">Q51:</span> Rebreather issue: (tick as many as you feel relevant) </span>
					<br/><br/>
				
			</div><!--close main-->
			
			
			<div class='col1'>
				<span class='answers'>
				<input type='checkbox' name='Q51_oxygen_toxicity' value='checked' id='Q51_oxygen_toxicity'>
					<label for='Q51_oxygen_toxicity'>Oxygen toxicity</label>
					<br/>	

				<input type='checkbox' name='Q51_hypoxia' value='checked' id='Q51_hypoxia'>
					<label for='Q51_hypoxia'>Hypoxia</label>
					<br/>	
					
					
				<input type='checkbox' name='Q51_high_co2' value='checked' id='Q51_high_co2'>
					<label for='Q51_high_co2'>High CO2</label>
					<br/>
				
				<input type='checkbox' name='Q51_sensor_problem' value='checked' id='Q51_sensor_problem'>
					<label for='Q51_sensor_problem'>Sensor problem</label>
					<br/>
					
				<input type='checkbox' name='Q51_scrubber' value='checked' id='Q51_scrubber'>
					<label for='Q51_scrubber'>Scrubber</label>
					<br/>
					
				
				</span>
			</div> <!--close col1-->
			
			<div class='col2'>
			
				<input type='checkbox' name='Q51_caustic_cocktail' value='checked' id='Q51_caustic_cocktail'>
					<label for='Q51_caustic_cocktail'>Caustic cocktail</label>
					<br/>
				
				<input type='checkbox' name='Q51_oneway_valve_problem' value='checked' id='Q51_oneway_valve_problem'>
					<label for='Q51_oneway_valve_problem'>One way valve problem</label>
					<br/>
				
				<input type='checkbox' name='Q51_pre_check_fail' value='checked' id='Q51_pre_check_fail'>
					<label for='Q51_pre_check_fail'>Pre check not performed/incorrect</label>
					<br/>	
					
				<input type='checkbox' name='Q51_buddy_unfamiliar_with_unit' value='checked' id='Q51_buddy_unfamiliar_with_unit'>
					<label for='Q51_buddy_unfamiliar_with_unit'>Buddy unfamiliar with unit</label>
					<br/>	
					
					
				<input type='checkbox' name='Q51_flooding_of_unit' value='checked' id='Q51_flooding_of_unit'>
					<label for='Q51_flooding_of_unit'>Flooding of unit</label>
					<br/>
				</div><!--close col2-->
				
			<div class='main'>
			
	
				<span class='answers'>
				
				Other:<br/>
				<input type='text' id='Q51a' name='Q51a' size='80%'/>
				<br/><br/>
				</span>
		<!--QUESTION 52-->			
				<span class="bold"><span class="blue">Q52:</span> Rebreather gases used: (tick as many as you feel relevant) </span>
					<br/><br/>
				
			</div><!--close main-->
				
			<div class='col1'>
				
				<span class='answers'>
				
				<input type='checkbox' name='Q52_100_o2' value='checked' id='Q52_100_o2'>
					<label for='Q52_100_o2'>100% oxygen</label>
					<br/>
				
				<input type='checkbox' name='Q52_air' value='checked' id='Q52_air'>
					<label for='Q52_air'>Air</label>
					<br/>
				
				<input type='checkbox' name='Q52_nitrox' value='checked' id='Q52_nitrox'>
					<label for='Q52_nitrox'>Nitrox</label>
					<br/>
				
				<input type='checkbox' name='Q52_trimix' value='checked' id='Q52_trimix'>
					<label for='Q52_trimix'>Trimix</label>
					<br/>
				
				<input type='checkbox' name='Q52_heliox' value='checked' id='Q52_heliox'>
					<label for='Q52_heliox'>Heliox</label>
					<br/>
				
				<input type='checkbox' name='Q52_heliox' value='checked' id='Q52_heliox'>
					<label for='Q52_heliox'>Unknown</label>
					<br/>
				</span>
			</div><!--close col1-->
			
			<div class='main'>
			
		<!--QUESTION 53-->			
				<span class="bold"><span class="blue">Q53:</span> Rebreather bailout to OC? </span>
					<br/><br/>
				<span class='answers'>	
				<select name='Q53' id='Q53'>
					<option value='null'>--Select--</option>
					<option value='yes'>Yes</option>
					<option value='no'>No</option>
					<option value='unknown'>Unknown</option>
				</select>
				</span>
				<br/><br/>
				
		<!--QUESTION 54-->			
					<span class="bold"><span class="blue">Q54:</span> Rebreather bailout inadequate? </span>
					<br/><br/>
				<span class='answers'>	
				<select name='Q54' id='Q54'>
					<option value='null'>--Select--</option>
					<option value='yes'>Yes</option>
					<option value='no'>No</option>
					<option value='unknown'>Unknown</option>
				</select>
				</span>
				<br/><br/>
				
				<span class='answers'>
				
				Describe:<br/>
				<input type='text' id='Q54a' name='Q54a' size='80%'/>
				<br/><br/>
				</span>	
				
					
			</div><!--close main-->		
				
			</div><!--close rebreather-->
			
			
			<div class='main'>
			<br/><br/>
			<span class='answers'>
			<input type='submit' onclick='return finish();' value='Submit' id='submit' name='Submit Report'/>
			</span>
			</div>	<!--close main-->
		</div><!--close wrapper-->
	</body>
	
</html>	