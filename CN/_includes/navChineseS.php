<div id="menu">
<ul id="menu1">
  <li><a href="<?php echo "http://" . $_SERVER['SERVER_NAME']; ?>/CN/index.php"<?php if ($thisPage=="INDEX") echo " id=\"currentpage\""; ?>>主页</a></li>
  <li><a href="<?php echo "http://" . $_SERVER['SERVER_NAME']; ?>/CN/dan_membership_insurance.php"<?php if ( strpos($thisPage, "MEMBERSHIP" ) !== false ) echo " id=\"currentpage\""; ?>>会员 & 保险</a>
	  <ul>
		<li><a href="<?php echo "http://" . $_SERVER['SERVER_NAME']; ?>/CN/Membership_Insurance/DAN_membership_benefits.php"<?php if ($thisPage=="MEMBERSHIP benefits") echo " id=\"currentpage\""; ?>>DAN会员的好处</a></li>
		<li><a href="<?php echo "http://" . $_SERVER['SERVER_NAME']; ?>/CN/Membership_Insurance/insurancecountrylink.php"<?php if ($thisPage=="MEMBERSHIP insurancecountrylink") echo " id=\"currentpage\""; ?>>潜水受伤治疗方案</a></li>
		<li><a href="<?php echo "http://" . $_SERVER['SERVER_NAME']; ?>/CN/Membership_Insurance/residencycheck_prices.php"<?php if ($thisPage=="MEMBERSHIP residencycheck_prices") echo " id=\"currentpage\""; ?>>DAN会员价格</a></li>
		<li><a href="<?php echo "http://" . $_SERVER['SERVER_NAME']; ?>/CN/Membership_Insurance/faq.php"<?php if ($thisPage=="MEMBERSHIP faq") echo " id=\"currentpage\""; ?>>常见问题</a></li>
		<li><a href="<?php echo "http://" . $_SERVER['SERVER_NAME']; ?>/CN/Membership_Insurance/residencycheck.php"<?php if ($thisPage=="MEMBERSHIP residencycheck") echo " id=\"currentpage\""; ?>>加入DAN</a></li>
		<li><a href="<?php echo "http://" . $_SERVER['SERVER_NAME']; ?>/CN/Membership_Insurance/residencycheck_renew.php"<?php if ($thisPage=="MEMBERSHIP residencycheck2") echo " id=\"currentpage\""; ?>>续约你的会员资格</a></li>
		<li><a href="<?php echo "http://" . $_SERVER['SERVER_NAME']; ?>/CN/Membership_Insurance/claim.php"<?php if ($thisPage=="MEMBERSHIP claim") echo " id=\"currentpage\""; ?>>申请DAN保险理赔</a></li>
		<li><a href="<?php echo "http://" . $_SERVER['SERVER_NAME']; ?>/CN/Support_DAN.php"<?php if ($thisPage=="SPONSORS sponsors_supporters") echo " id=\"currentpage\""; ?>>DAN创办人 &amp; 支持者</a></li>
	  </ul>
  </li>
  
  <!-- <li><a href="<?php echo "http://" . $_SERVER['SERVER_NAME']; ?>/dan_helped_me.php"<?php if ( strpos($thisPage, "TESTIMONIALS" ) !== false ) echo " id=\"currentpage\""; ?>>Testimonials</a> -->
  <li><a href="<?php echo "http://" . $_SERVER['SERVER_NAME']; ?>/CN/emergency1.php"<?php if ( strpos($thisPage, "EMERGENCY" ) !== false ) echo " id=\"currentpage\""; ?>>急救处理</a>
	  <ul>
		<li><a href="<?php echo "http://" . $_SERVER['SERVER_NAME']; ?>/CN/emergency/emergency_procedures.php"<?php if ($thisPage=="EMERGENCY XXXX") echo " id=\"currentpage\""; ?>>急救处理方法</a></li>
		<li><a href="<?php echo "http://" . $_SERVER['SERVER_NAME']; ?>/CN/emergency/hotline_numbers.php"<?php if ($thisPage=="EMERGENCY XXXX") echo " id=\"currentpage\""; ?>>24小时热线电话</a></li>
	  </ul>
  </li>
  <!-- <li><a href="http://www.danasiapacific.org/main/member_only/index.php"<?php if ($thisPage=="MEMBERS-ONLY") echo " id=\"currentpage\""; ?>>MEMBERS-ONLY</a></li> -->
  <li><a href="<?php echo "http://" . $_SERVER['SERVER_NAME']; ?>/CN/DAN_news_events.php"<?php if ($thisPage=="NEWSEVENTS") echo " id=\"currentpage\""; ?>>常见问题</a></li>
  <li><a href="<?php echo "http://" . $_SERVER['SERVER_NAME']; ?>/CN/DAN_diving_safety.php"<?php if ($thisPage=="DIVING SAFETY") echo " id=\"currentpage\""; ?>>潜水安全 & 健康 </a></li>
  <li><a href="<?php echo "http://" . $_SERVER['SERVER_NAME']; ?>/CN/accident.php"<?php if ( strpos($thisPage, "ACCIDENT" ) !== false ) echo " id=\"currentpage\""; ?>>研究 & 报告</a>
	  <ul>
		<li><a href="<?php echo "http://" . $_SERVER['SERVER_NAME']; ?>/CN/accident.php"<?php if ($thisPage=="ACCIDENT accident") echo " id=\"currentpage\""; ?>>DAN Reporting &amp; Research</a></li>
		<li><a href="<?php echo "http://" . $_SERVER['SERVER_NAME']; ?>/CN/accident/accident_reporting.php"<?php if ($thisPage=="ACCIDENT accident_reporting") echo " id=\"currentpage\""; ?>>Diving Accident Reporting</a></li>
		<li><a href="<?php echo "http://" . $_SERVER['SERVER_NAME']; ?>/CN/_pdf/accident_report_form.pdf"<?php if ($thisPage=="XXXX") echo " id=\"currentpage\""; ?>>Diving Accident Report Form</a></li>
		<li><a href="<?php echo "http://" . $_SERVER['SERVER_NAME']; ?>/CN/accident/nfdir.php"<?php if ($thisPage=="ACCIDENT nfdir") echo " id=\"currentpage\""; ?>>Non-Fatal Dive Incidents Reporting</a></li>
		<li><a href="<?php echo "http://" . $_SERVER['SERVER_NAME']; ?>/CN/accident/research.php"<?php if ($thisPage=="ACCIDENT research") echo " id=\"currentpage\""; ?>>DAN Research</a></li>
		<li><a href="<?php echo "http://" . $_SERVER['SERVER_NAME']; ?>/CN/accident/research_grants.php"<?php if ($thisPage=="ACCIDENT research_grants") echo " id=\"currentpage\""; ?>>DAN Research Grants</a></li>
		<li><a href="<?php echo "http://" . $_SERVER['SERVER_NAME']; ?>/CN/research/jellyfish/jellyfish.html"<?php if ($thisPage=="JELLYFISH  jellyfish") echo " id=\"currentpage\""; ?>>Jellyfish Sting Research</a></li>
	  </ul>
  </li>
  <li><a href="<?php echo "http://" . $_SERVER['SERVER_NAME']; ?>/CN/categories.php"<?php if ($thisPage=="SHOP") echo " id=\"currentpage\""; ?>>DAN的产品</a>
	  <ul>
		<li><a href="<?php echo "http://" . $_SERVER['SERVER_NAME']; ?>/CN/shop/oxygen.php"<?php if ($thisPage=="SHOP oxygen") echo " id=\"currentpage\""; ?>>Oxygen Equipment</a></li>
		<li><a href="<?php echo "http://" . $_SERVER['SERVER_NAME']; ?>/CN/shop/firstaid.php"<?php if ($thisPage=="SHOP firstaid") echo " id=\"currentpage\""; ?>>First Aid Equipment</a></li>
		<li><a href="<?php echo "http://" . $_SERVER['SERVER_NAME']; ?>/CN/shop/books.php"<?php if ($thisPage=="SHOP books") echo " id=\"currentpage\""; ?>>Books</a></li>
		<li><a href="<?php echo "http://" . $_SERVER['SERVER_NAME']; ?>/CN/products.php?cat=10"<?php if ($thisPage=="SHOP XXXX") echo " id=\"currentpage\""; ?>>DAN Merchandise</a></li>
		<li><a href="<?php echo "http://" . $_SERVER['SERVER_NAME']; ?>/CN/products.php?cat=11"<?php if ($thisPage=="SHOP XXXX") echo " id=\"currentpage\""; ?>>Featured Product</a></li>
		<li><a href="<?php echo "http://" . $_SERVER['SERVER_NAME']; ?>/CN/shop/ordering_info.php"<?php if ($thisPage=="SHOP XXXX") echo " id=\"currentpage\""; ?>>Inquire / Order</a></li>
	  </ul>
  </li>
 <li><a href="<?php echo "http://" . $_SERVER['SERVER_NAME']; ?>/DAN_training.php"<?php if ( strpos($thisPage, "TRAINING" ) !== false ) echo " id=\"currentpage\""; ?>>DAN培训</a>
	  <ul>
		<li><a href="<?php echo "http://" . $_SERVER['SERVER_NAME']; ?>/CN/training/courses.php"<?php if ($thisPage=="TRAINING courses") echo " id=\"currentpage\""; ?>>DAN Courses</a></li>
		<li><a href="<?php echo "http://" . $_SERVER['SERVER_NAME']; ?>/training/inhouse.php"<?php if ($thisPage=="TRAINING inhouse") echo " id=\"currentpage\""; ?>>DAN Internal Course Schedule</a></li>
		<li><a href="<?php echo "http://" . $_SERVER['SERVER_NAME']; ?>/training/external.php"<?php if ($thisPage=="TRAINING external") echo " id=\"currentpage\""; ?>>DAN External Course Schedule</a></li>
		<li><a href="<?php echo "http://" . $_SERVER['SERVER_NAME']; ?>/training/faq.php"<?php if ($thisPage=="TRAINING faq") echo " id=\"currentpage\""; ?>>DAN Training Questions</a></li>
		<li><a href="<?php echo "http://" . $_SERVER['SERVER_NAME']; ?>/training/updates.php"<?php if ($thisPage=="TRAINING updates") echo " id=\"currentpage\""; ?>>DAN Instructor Updates</a></li>
		<li><a href="<?php echo "http://" . $_SERVER['SERVER_NAME']; ?>/privacy.php"<?php if ($thisPage=="TRAINING privacy") echo " id=\"currentpage\""; ?>>Privacy Statement</a></li>
	  </ul>
  </li>
</ul>
</div>