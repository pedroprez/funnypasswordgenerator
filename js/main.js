$(document).ready(function(){
	$("#generate-form .btn").click(function(){
		$text = $("#generate-form input[type='text']");
		$.get( "ajax/generate.php?" + Math.random() * 10, function( data ) {
		  $text.val( data );
		});
	})
});