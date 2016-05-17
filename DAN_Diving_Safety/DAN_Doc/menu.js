
	var t;
		function init()
		{
			
			document.getElementById('dropdown').style.visibility='visible';
			clearTimeout(t);
		}
		
		
		function out()
		{
		t=setTimeout('hideit()',1000);
		}
		
		function hideit()
		{
		document.getElementById('dropdown').style.visibility='hidden';
		}