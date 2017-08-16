<script src="<?php echo base_url(); ?>assets/js/jquery-3.2.1.min.js" type="text/javascript" ></script>
<script src="<?php echo base_url(); ?>assets/js/materialize.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/funciones.js" type="text/javascript" ></script>

<script src="<?php echo base_url(); ?>assets/js/jQuery.circleProgressBar.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
        $(document).ready(function(){
            $('.slider').slider();
        });
        $('.datepicker').pickadate({
            selectMonths: true, // Creates a dropdown to control month
            selectYears: 15, // Creates a dropdown of 15 years to control year,
            today: 'Today',
            clear: 'Clear',
            close: 'Ok',
            closeOnSelect: false // Close upon selecting a date,
        });
		$('.modal').modal();
		$('.tap-target').tapTarget('open');
		$('.tap-target').tapTarget('close');
		$('.parallax').parallax();
		$('ul.tabs').tabs();
		$('ul.tabs').tabs('select_tab', 'tab_id');
        $('select').material_select();
        $('input#input_text, textarea#textarea1').characterCounter();
        $('.tooltipped').tooltip({delay: 50});
        $('.dropdown-button').dropdown({
          inDuration: 300,
          outDuration: 225,
          constrainWidth: false, // Does not change width of dropdown to that of the activator
          hover: false, // Activate on hover
          gutter: 0, // Spacing from edge
          belowOrigin: true, // Displays dropdown below the button
          alignment: 'left', // Displays dropdown with edge aligned to the left of button
          stopPropagation: false // Stops event propagation
        });
    });
 var options = [ 
     {selector: '#staggered-test', offset: 400, callback: function(el) { Materialize.showStaggeredList($(el)); } },
     {selector: '#image-test', offset: 500, callback: function(el) { Materialize.fadeInImage($(el)); } }
    ]; 
    Materialize.scrollFire(options);
  </script>
</body>
</html>