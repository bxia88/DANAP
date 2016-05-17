<div id="menu">
<ul id="menu1">
  <li><a href="<?php echo "http://" . $_SERVER['SERVER_NAME']; ?>/index.php"<?php if ($thisPage=="INDEX") echo " id=\"currentpage\""; ?>>Home</a></li>
  <li><a href="<?php echo "http://" . $_SERVER['SERVER_NAME']; ?>/dan_membership_insurance.php"<?php if ( strpos($thisPage, "MEMBERSHIP" ) !== false ) echo " id=\"currentpage\""; ?>>Membership & Insurance</a>
	  <ul>
		<li><a href="<?php echo "http://" . $_SERVER['SERVER_NAME']; ?>/Membership_Insurance/DAN_membership_benefits.php"<?php if ($thisPage=="MEMBERSHIP benefits") echo " id=\"currentpage\""; ?>>DAN Membership Benefits</a></li>
		<li><a href="<?php echo "http://" . $_SERVER['SERVER_NAME']; ?>/Membership_Insurance/insurancecountrylink.php"<?php if ($thisPage=="MEMBERSHIP insurancecountrylink") echo " id=\"currentpage\""; ?>>Dive Injury Insurance Plans</a></li>
		<li><a href="<?php echo "http://" . $_SERVER['SERVER_NAME']; ?>/Membership_Insurance/residencycheck_prices.php"<?php if ($thisPage=="MEMBERSHIP residencycheck_prices") echo " id=\"currentpage\""; ?>>DAN Coverage Prices</a></li>
		<li><a href="<?php echo "http://" . $_SERVER['SERVER_NAME']; ?>/Membership_Insurance/faq.php"<?php if ($thisPage=="MEMBERSHIP faq") echo " id=\"currentpage\""; ?>>Frequently Asked Questions</a></li>
		<li><a href="<?php echo "http://" . $_SERVER['SERVER_NAME']; ?>/Membership_Insurance/residencycheck.php"<?php if ($thisPage=="MEMBERSHIP residencycheck") echo " id=\"currentpage\""; ?>>Join DAN</a></li>
		<li><a href="<?php echo "http://" . $_SERVER['SERVER_NAME']; ?>/Membership_Insurance/residencycheck_renew.php"<?php if ($thisPage=="MEMBERSHIP residencycheck2") echo " id=\"currentpage\""; ?>>Renew Your Membership</a></li>
		<li><a href="<?php echo "http://" . $_SERVER['SERVER_NAME']; ?>/Membership_Insurance/claim.php"<?php if ($thisPage=="MEMBERSHIP claim") echo " id=\"currentpage\""; ?>>Making a DAN Insurance Claim</a></li>
		<li><a href="<?php echo "http://" . $_SERVER['SERVER_NAME']; ?>/Support_DAN.php"<?php if ($thisPage=="SPONSORS sponsors_supporters") echo " id=\"currentpage\""; ?>>DAN Sponsors &amp; Supporters</a></li>
	  </ul>
  </li>
  
  <li><a href="<?php echo "http://" . $_SERVER['SERVER_NAME']; ?>/dan_helped_me.php"<?php if ( strpos($thisPage, "TESTIMONIALS" ) !== false ) echo " id=\"currentpage\""; ?>>Testimonials</a>
  <li><a href="<?php echo "http://" . $_SERVER['SERVER_NAME']; ?>/emergency.php"<?php if ( strpos($thisPage, "EMERGENCY" ) !== false ) echo " id=\"currentpage\""; ?>>Emergency</a>
	  <ul>
		<li><a href="<?php echo "http://" . $_SERVER['SERVER_NAME']; ?>/emergency/emergency_procedures.php"<?php if ($thisPage=="EMERGENCY XXXX") echo " id=\"currentpage\""; ?>>Procedure for an Emergency</a></li>
		<li><a href="<?php echo "http://" . $_SERVER['SERVER_NAME']; ?>/emergency/hotline_numbers.php"<?php if ($thisPage=="EMERGENCY XXXX") echo " id=\"currentpage\""; ?>>24-Hour Hotline Numbers</a></li>
	  </ul>
  </li>
  <li><a href="http://www.danasiapacific.org/main/member_only/index.php"<?php if ($thisPage=="MEMBERS-ONLY") echo " id=\"currentpage\""; ?>>MEMBERS-ONLY</a></li>
  <li><a href="<?php echo "http://" . $_SERVER['SERVER_NAME']; ?>/DAN_news_events.php"<?php if ($thisPage=="NEWSEVENTS") echo " id=\"currentpage\""; ?>>DAN News & Events</a></li>
  <li><a href="<?php echo "http://" . $_SERVER['SERVER_NAME']; ?>/DAN_diving_safety.php"<?php if ($thisPage=="DIVING SAFETY") echo " id=\"currentpage\""; ?>>Diving Safety </a></li>
  <li><a href="<?php echo "http://" . $_SERVER['SERVER_NAME']; ?>/accident.php"<?php if ( strpos($thisPage, "ACCIDENT" ) !== false ) echo " id=\"currentpage\""; ?>>Accident Reporting & Research</a>
	  <ul>
		<li><a href="<?php echo "http://" . $_SERVER['SERVER_NAME']; ?>/accident.php"<?php if ($thisPage=="ACCIDENT accident") echo " id=\"currentpage\""; ?>>DAN Reporting &amp; Research</a></li>
		<li><a href="<?php echo "http://" . $_SERVER['SERVER_NAME']; ?>/accident/accident_reporting.php"<?php if ($thisPage=="ACCIDENT accident_reporting") echo " id=\"currentpage\""; ?>>Diving Accident Reporting</a></li>
		<li><a href="<?php echo "http://" . $_SERVER['SERVER_NAME']; ?>/_pdf/accident_report_form.pdf"<?php if ($thisPage=="XXXX") echo " id=\"currentpage\""; ?>>Diving Accident Report Form</a></li>
		<li><a href="<?php echo "http://" . $_SERVER['SERVER_NAME']; ?>/accident/nfdir.php"<?php if ($thisPage=="ACCIDENT nfdir") echo " id=\"currentpage\""; ?>>Non-Fatal Dive Incidents Reporting</a></li>
		<li><a href="<?php echo "http://" . $_SERVER['SERVER_NAME']; ?>/accident/research.php"<?php if ($thisPage=="ACCIDENT research") echo " id=\"currentpage\""; ?>>DAN Research</a></li>
		<li><a href="<?php echo "http://" . $_SERVER['SERVER_NAME']; ?>/accident/research_grants.php"<?php if ($thisPage=="ACCIDENT research_grants") echo " id=\"currentpage\""; ?>>DAN Research Grants</a></li>
		<li><a href="<?php echo "http://" . $_SERVER['SERVER_NAME']; ?>/research/jellyfish/jellyfish.html"<?php if ($thisPage=="JELLYFISH  jellyfish") echo " id=\"currentpage\""; ?>>Jellyfish Sting Research</a></li>
	  </ul>
  </li>
  <li><a href="<?php echo "http://" . $_SERVER['SERVER_NAME']; ?>/categories.php"<?php if ($thisPage=="SHOP") echo " id=\"currentpage\""; ?>>DAN Products</a>
	  <ul>
		<li><a href="<?php echo "http://" . $_SERVER['SERVER_NAME']; ?>/shop/oxygen.php"<?php if ($thisPage=="SHOP oxygen") echo " id=\"currentpage\""; ?>>Oxygen Equipment</a></li>
		<li><a href="<?php echo "http://" . $_SERVER['SERVER_NAME']; ?>/shop/firstaid.php"<?php if ($thisPage=="SHOP firstaid") echo " id=\"currentpage\""; ?>>First Aid Equipment</a></li>
		<li><a href="<?php echo "http://" . $_SERVER['SERVER_NAME']; ?>/shop/books.php"<?php if ($thisPage=="SHOP books") echo " id=\"currentpage\""; ?>>Books</a></li>
		<li><a href="<?php echo "http://" . $_SERVER['SERVER_NAME']; ?>/products.php?cat=10"<?php if ($thisPage=="SHOP XXXX") echo " id=\"currentpage\""; ?>>DAN Merchandise</a></li>
		<li><a href="<?php echo "http://" . $_SERVER['SERVER_NAME']; ?>/products.php?cat=11"<?php if ($thisPage=="SHOP XXXX") echo " id=\"currentpage\""; ?>>Featured Product</a></li>
		<li><a href="<?php echo "http://" . $_SERVER['SERVER_NAME']; ?>/shop/ordering_info.php"<?php if ($thisPage=="SHOP XXXX") echo " id=\"currentpage\""; ?>>Inquire / Order</a></li>
	  </ul>
  </li>
 <li><a href="<?php echo "http://" . $_SERVER['SERVER_NAME']; ?>/DAN_training.php"<?php if ( strpos($thisPage, "TRAINING" ) !== false ) echo " id=\"currentpage\""; ?>>DAN Training</a>
	  <ul>
		<li><a href="<?php echo "http://" . $_SERVER['SERVER_NAME']; ?>/training/courses.php"<?php if ($thisPage=="TRAINING courses") echo " id=\"currentpage\""; ?>>DAN Courses</a></li>
		<li><a href="<?php echo "http://" . $_SERVER['SERVER_NAME']; ?>/training/inhouse.php"<?php if ($thisPage=="TRAINING inhouse") echo " id=\"currentpage\""; ?>>DAN Internal Course Schedule</a></li>
		<li><a href="<?php echo "http://" . $_SERVER['SERVER_NAME']; ?>/training/external.php"<?php if ($thisPage=="TRAINING external") echo " id=\"currentpage\""; ?>>DAN External Course Schedule</a></li>
		<li><a href="<?php echo "http://" . $_SERVER['SERVER_NAME']; ?>/training/faq.php"<?php if ($thisPage=="TRAINING faq") echo " id=\"currentpage\""; ?>>DAN Training Questions</a></li>
		<li><a href="<?php echo "http://" . $_SERVER['SERVER_NAME']; ?>/training/updates.php"<?php if ($thisPage=="TRAINING updates") echo " id=\"currentpage\""; ?>>DAN Instructor Updates</a></li>
		<li><a href="<?php echo "http://" . $_SERVER['SERVER_NAME']; ?>/privacy.php"<?php if ($thisPage=="TRAINING privacy") echo " id=\"currentpage\""; ?>>Privacy Statement</a></li>
	  </ul>
  </li>
</ul>
</div>