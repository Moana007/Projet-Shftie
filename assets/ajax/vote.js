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
                        alert('Vote pris en compte !');
                        window.setTimeout("location=('"+url+"');");
                    } else {
                        alert('Erreur : '+ json.reponse);
                    }
                }
		});
	
	return false;
});
});
