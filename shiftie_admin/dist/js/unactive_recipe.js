$(document).ready(function(){
    $('#unactiveRecipe').on('submit', function(){
        var idrecipe = $('#idrecipe');
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
                        window.setTimeout("location=('?appli=recettes');",1000);
                    } else {
                        alert('Erreur : '+ json.reponse);
                    }
                }
            });
        }
        return false;
    });
});