$(document).ready(function(){
	$("#generate-form .btn").click(function(){
		var $btn = $(this);
    	var $text = $("#generate-form input[type='text']");
		
		//var loading = new Loading($text);
		//loading.reset();
		//loading.play();
		
		$.get( "ajax/generate.php?" + Math.random() * 10, function( data ) {
		  $text.val( data );
		  //loading.stop();
		});
	})

	$("#btnUpdateCaptcha").click(function(e){
		var $btn = $(this);
		var $captcha = $('#captcha');
		//console.log($('#captcha'));
		var original_path = $captcha.attr("original-path");
		$captcha.attr("src", original_path + "?" + Math.random() * 10);
		return false;
		//e.stopPropagation();
	});

});

loadingElement = null;
loadingWaitingPoints = 0;
loadingCurrentTimer = null;
//loadingWaitingPoints = 3;
function Loading(element) { 
	loadingElement = $(element);
	this.initializate = function () {
		loadingElement.val("Loading");
		loadingWaitingPoints = 0;
	}
	this.play = function(){
			loadingElement.attr("disabled",'disabled');
			this.initializate();
			
			loadingCurrentTimer = setInterval(function(){
				loadingElement.val();
				loadingElement.val(loadingElement.val() + ".");
				loadingWaitingPoints++;
				if (loadingWaitingPoints > 3) {
					var loadToReset = Loading(loadingElement);
					this.reset();
				}
			}, 500);
	},
	this.stop = function(){
		window.clearInterval(loadingCurrentTimer);
		loadingElement.removeAttr("disabled");
	},
	this.reset = function() {
		this.stop();
		this.play();
	}
}







