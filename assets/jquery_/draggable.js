$(document).on( 'ready', function() {
	
	var url = $('#cover-image').css('background-image').replace('url(', '').replace(')', '').replace("'", '').replace('"', '');
	var bgImg = $('<img />');
	bgImg.hide();
	bgImg.bind('load', function(){
	    var imgheight = $(this).height();
		$('#cover').css('height',imgheight);
	});
	$('#cover').append(bgImg);
	bgImg.attr('src', url);
	
	$('#cover').draggable({
		
	    drag: function(event, ui)
	    {
	        if (ui.position.top > 0) {
	            ui.position.top = 0;
	        }
	        var maxtop = ui.helper.parent().height() - ui.helper.height();
	        if ( ui.position.top < maxtop) {
	            ui.position.top = maxtop;
	        }
	        if ( ui.position.left > 0) {
	            ui.position.left = 0;
	        }
	        var maxleft = ui.helper.parent().width() - ui.helper.width();
	        if ( ui.position.left < maxleft) {
	            ui.position.left = maxleft;
	        }
			var postop = $('#cover').css('top');
			$('#cover-image').css('backgroundPosition','center '+postop);
	    },
	    stop: function(event, ui){
				var p = $('#cover');
				var position = p.position();
				var positiontop = position.top;
				console.log("top:" + positiontop);
				$("#pos_top_css").val( positiontop );
		}
	});
	
});