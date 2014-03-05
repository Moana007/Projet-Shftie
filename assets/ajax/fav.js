$(document).ready(function(){
	$('#formFav').on('submit', function() {
		var url = $('#url_location').val();
		$.ajax({
			url: $(this).attr('action'),
            type: $(this).attr('method'),
            data: $(this).serialize(),
            dataType: 'json',
                success: function(json) {
                    if(json.reponse == 'ok') { 
                        $('.error-msg').remove();
                        $('#pop_up_js').css( 'background','#89B929');
                        $("#pop_up_js").append("<p class='error-msg' style='color:white;' >Favorites added ! <br/></p>");
                        $('#pop_up_js').fadeToggle();
                        window.setTimeout("location=('"+url+"');", 2000);
                    } else {
                        alert('Erreur : '+ json.reponse);
                    }
                }
		});
	
	return false;
});
});
$(document).ready(function(){
    $('#formUnfav').on('submit', function() {
        var url = $('#url_location').val();
        $.ajax({
            url: $(this).attr('action'),
            type: $(this).attr('method'),
            data: $(this).serialize(),
            dataType: 'json',
                success: function(json) {
                    if(json.reponse == 'ok') { 
                        $('.error-msg').remove();
                        $('#pop_up_js').css( 'background','red');
                        $("#pop_up_js").append("<p class='error-msg' style='color:white;' >Favorites removed <br/></p>");
                        $('#pop_up_js').fadeToggle();
                        window.setTimeout("location=('"+url+"');", 2000);
                    } else {
                        alert('Erreur : '+ json.reponse);
                    }
                }
        });
    
    return false;
});
});