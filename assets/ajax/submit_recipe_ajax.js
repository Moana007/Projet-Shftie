$(document).ready(function() {
    $('#formRecipe').on('submit', function() {
 
        var recette_name = $('#recette_name').val();
        var description = $('#description').val();
        var photo = $('#photo').val();
        var preparation = $('#preparation').val();
        var ingredient = $('#ingredient').val();
        var level = $('#level').val();
        var option = $('#option').val();
        var tps_prepa = $('#time_prepa').val();
        var tps_cuiss = $('#time_cuisson').val();
        var tps_repos = $('#time_repos').val();


        if(recette_name === '') {
            alert('Le champ -Titre de la recette- doit êtres remplis');
        }
        else if(description === '') {
            alert('Le champ -Description- doit êtres remplis');
        }
        else if(photo === '') {
            alert('Le champ -Photo- doit êtres remplis');
        }
        else if(ingredient === '') {
            alert('Le champ -Ingrédient- doit êtres remplis');
        }
        else if(preparation === ''){
            alert('Le champ -Preparation- doit êtres remplis');
        }
        else if(level === '-' || level === '' ) {
            alert('Veuillez choisir une difficulté');
        }
        else if(tps_prepa === '-' || tps_prepa === '') {
            alert('Veuillez choisir un temps de preparation');
        }
        else if(tps_cuiss === '-' || tps_cuiss === '') {
            alert('Veuillez choisir un temps de cuisson');
        }
        else if(tps_repos === '-' || tps_repos === '') {
            alert('Veuillez choisir un temps de repos');
        }

        // else if(option.is(':checked')) {                     // A Debuger si possible
        //     alert('Veuillez choisir des -Tags-');
        // }

        else {
            $.ajax({
                url: $(this).attr('action'),
                type: $(this).attr('method'),
                data: $(this).serialize(),
                dataType: 'json',
                success: function(json) {
                    if(json.reponse == 'ok') {
                        alert('Recette Ajoutée avec Succés');
                        window.setTimeout("location=('?appli=home&action=myrecipe');",1000);
                    } else {
                        alert('Erreur : '+ json.reponse);
                    }
                }
            });
        }
        return false;
    });
});

