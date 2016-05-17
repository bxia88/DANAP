/**
* File: js/showhide.js
* Author: design1online.com, LLC
* Purpose: toggle the visibility of fields depending on the value of another field
**/
$(document).ready(function() {
    toggleFields(); //call this first so we start out with the correct visibility depending on the selected form values
   //this will call our toggleFields function every time the selection value field changes
    $("#acountry").change(function() { toggleFields(); });

});
//this toggles the visibility of our state fields depending on the current selected value of the country
function toggleFields()
{
    if ($("#acountry").val() ='Australia')
        $("#location").show();
    else
        $("#location").hide();
}