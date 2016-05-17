<?php
session_start();

$log=$_SESSION['log'];

		
			if($log=="logged")
			{
			echo "dsf"; 
			}
		else
		{
		session_destroy();
		header("Location:index.php?login=error");
		}
		
	$_SESSION['log2']='logged';	
		?>




<html>

	<body>
		
		<a href='memberonly.php'>Return</a>

		
	</body>
	
</html>	