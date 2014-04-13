$(document).ready(function(){
	$("#generate-form .btn").click(function(){
		var $btn = $(this);
    	//$btn.button('loading');
		var $text = $("#generate-form input[type='text']");
		//$text.val("...");
		//$text.attr("disable",'disable');

		//document.body.appendChild(circle.canvas);
		var loading = new Loading($text);
		loading.play();
		
		$.get( "ajax/generate.php?" + Math.random() * 10, function( data ) {
		  $text.val( data );
		  loading.stop();
		});
	})
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





