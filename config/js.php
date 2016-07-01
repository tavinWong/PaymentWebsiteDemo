<?php
//javascript:


?>

<!-- jquery -->
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<!-- AngularJS -->
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>

<!-- jquery UI -->
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>

<!-- Bootstrap -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


<script>
	$(document).on('click', '#sendBtn', function(){
			
	    	var totalPrice = $('#amount').text();
	    	
	    	data ={
	    		'total': totalPrice
	    	};
	    	$.post('functions/paymentPush.php',data, function(response){
	    		alert( response);
	    	});
	});
	$(document).ready(function(){
		var tempPrice = $('.product-price').text();
		$('#amount').html(tempPrice);	
	});


</script>
