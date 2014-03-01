$(document).ready(function(){
	$('#topRecette').on('submit', function(){
		var id_recipe_elire = $('#id_recipe_elire');
        if(id_recipe_elire == ''){
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
                        window.setTimeout("location=('?appli=recettes&filter=day_recipe');");
                    } else {
                        alert('Erreur : '+ json.reponse);
                    }
                }
            });
        }
        return false;
	});
});