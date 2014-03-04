$(document).ready(function(){
	$('#formElireRecipe').on('submit',function(){
		var top = $('#top');
        if(idrecipe == ''){
            alert('Il y a un probleme');
        }
        else {
            $.ajax({
                url: $(this).attr('action'),
                type: $(this).attr('method'),
                data: $(this).serialize(),
                dataType: 'json',
                success: function(json) {
                    if(json.reponse == 'ok') { 
                        window.setTimeout("location=('?appli=home');",1000);
                    } else {
                        alert('Erreur : '+ json.reponse);
                    }
                }
            });
        }
        return false;
	});
});