 $(document).ready(function(){
   		// Your code here
		//Pop-up event alert
		//Switch the second article
        $('#switch-two').click(function () {
          $('#two').toggleClass('newClass');
        });
		//Switch the elements with id="test"
        $('#test-switch').click(function () {
          $('.test').toggleClass('newTestClass');
        });
		//Switch the elements with an "article" tag
        $('#article-switch').click(function () {
          $('article').toggleClass('newClass');
        });
		//Switch the image, alt, and title attributes
        $('#image-switch').click(function (){
          $('img').attr ({
          src: "images/Rose.gif",
          alt: 'Rose',
          title: 'Rose'
         });
        });
		//Filter even list items
        $('#list').click(function () {
          $('ul.itemlist li:even').toggleClass('even');
        });
        //Filter odd table rows
        $('table.odd_row tr:odd').addClass('odd_row');
        //Override content text
        $(".test").text("Alert: This is the new text content!");
        //Hide the elements with class="test"
        $('#hide').click(function () {
          $(".test").hide('600');
        });
		//Toggle elements with class="test"
        $('#toggle').click(function () {
           $(".test").toggle();
        });
		//Expand all FAQ answers link
		$(".FAQ").prepend('<a href="#" id="show">Show/Hide all FAQ answers</a>');
        //Hide all definition descriptions
        $("dd").hide();
		//Questions are clickable with styles 
        $("dt") .addClass('question') .click(function() {
          $(this).next().toggle();
        });
		//Show all definition descrptions
        $("#show").click(function () {
          $("dd").toggle(); 
        });
        //Show all definition descriptions
        $("#show_dd").click(function () {  
          $("dd").show(); 
        });
        //Show all definition descriptions
        $("#hide_dd").click(function () {  
          $("dd").hide(); 
        });
		
	 });