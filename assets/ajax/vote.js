$(document).ready(function(){
	$('#formVote').on('submit', function() {
		var url = $('#url_location').val();
		$.ajax({
			url: $(this).attr('action'),
            type: $(this).attr('method'),
            data: $(this).serialize(),
            dataType: 'json',
                success: function(json) {
                    if(json.reponse == 'ok') { 
                            $('.error-msg').remove();
                             $('#pop_up_js').css( 'background','green');
                            $("#pop_up_js").append("<p class='error-msg' style='color:white;' >Vote considered<br/></p>");
                            $('#pop_up_js').fadeToggle();
                        window.setTimeout("location=('"+url+"');",2000);
                    } else {
                        alert('Erreur : '+ json.reponse);
                    }
                }
		});
	
	return false;
});
});

$(document).ready(function(){
    $('#formUnvote').on('submit', function() {
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
                            $("#pop_up_js").append("<p class='error-msg' style='color:white;' >vote removed<br/></p>");
                            $('#pop_up_js').fadeToggle();
                        window.setTimeout("location=('"+url+"');",2000);
                    } else {
                        alert('Erreur : '+ json.reponse);
                    }
                }
        });
    
    return false;
});
});
