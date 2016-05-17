function openWBT(course)
{
	var url = 'http://www.diversalertnetwork.org/training/courses/online/intro.asp?course=' + (course);
	popWin = window.open(url, 'module','resizable=yes,scrollbars=yes,status=yes,toolbar=no,location=no,menubar=no,width=750,height=550,left=0,top=0');
}