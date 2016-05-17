<?php
session_start();
	$log=$_SESSION['log'];
	$error=$_GET['login'];
if ($log=="logged")
{
header("Location:memberonly.php");
}
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>DAN Asia-Pacific Member's Only</title>
		<link rel="stylesheet" type="text/css" href="member.css"/> 
		<meta charset="UTF-8"/>
		<script type='text/javascript'>
		
		
			function submitform()
				{
					var inputed= document.getElementById('login').value;
					
					if(inputed.match(" ")!=null)
					{
					alert('Do not enter spaces in your membership number');
					return false;
					}
				
				}
		
		function pop()
			{
				window.open("help.html","mywindow","resizable=1,width=540,height=240");
			}
		
		
		</script>
		
		
		<style>
		
		
		
		#content
		{
		
		padding:10px;
		-webkit-border-radius:10px;
		-moz-border-radius:10px;
		border-radius:10px;
		background-color:#F0F0F0;
		-moz-box-shadow: 0 0 2px 1px #888;
		-webkit-box-shadow: 0 0 2px 1px#888;
		box-shadow: 0 0 2px 1px #888;
		}
		.error
		{
		color:red;
		}
		
		.help
		{
		font-size:12px;
		text-align:right;
		color:blue;
		text-decoration:underline;
		}
		.help:hover
		{
		cursor:pointer;
		}
		#login
		{
		background-color:#FFEEBD;
		
		font-size:18px;
		height:35px;
		}
		
		#button
		{
		font-size:18px;
		height:35px;
		}
		</style>
		
		</head>
	
	<body>
		<div id='banner'>
			<img src='memberlogo.png' alt='logo'/>
		</div>
		<div id='content'>
		DAN Asia-Pacific's Member portal can only be accessed by CURRENT DAN AP Members.
		<br/><br/>
		To login you need to enter your full current DAN AP Member Number, eg. AA1236K2000113.
		<br>
		Note that this is case sensitive - you must use capital letters. <br/>
		<br/>
		<form action='redirect.php' method='post' onSubmit="return submitform();"/>
		<label for='login'><b>Please Enter Your Member Number:</b></label>	
		<input type='text' id='login' name='login'/>
		<input type='submit' id='button' value='Login'/>
		
		<?php
		if($error=='error')
		{
		echo "<br/><br/><span class='error'>Error logging you in</span> <a class='help' onclick='pop();'>CLICK HERE FOR HELP</a>";
		}
		
		?>
				<br/><br/>

		<i>Tip: When entering your member number please do not leave any spaces.</i>
		<br/><br/>
		<center><a href='http://www.danasiapacific.org'>Back to DAN Asia-Pacific home</a></center>
	
	</div>
	
	
	
	</body>
</html>	