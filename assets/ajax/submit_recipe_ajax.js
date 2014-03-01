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
             $('.error-msg').remove();
                $('#pop_up_js').css( 'background','red');
                $("#pop_up_js").append("<p class='error-msg' style='color:white;' >Le champ -Titre de la recette- doit êtres remplis<br/></p>");
                $('#pop_up_js').fadeToggle();
            
        }
        else if(description === '') {
            $('.error-msg').remove();
            $('#pop_up_js').css( 'background','red');
            $("#pop_up_js").append("<p class='error-msg' style='color:white;' >Le champ -Description- doit êtres remplis<br/></p>");
            $('#pop_up_js').fadeToggle();
        }
        else if(photo === '') {
            $('.error-msg').remove();
            $('#pop_up_js').css( 'background','red');
            $("#pop_up_js").append("<p class='error-msg' style='color:white;' >Le champ -Photo- doit êtres remplis<br/></p>");
            $('#pop_up_js').fadeToggle();
            
        }
        else if(ingredient === '') {
            $('.error-msg').remove();
            $('#pop_up_js').css( 'background','red');
            $("#pop_up_js").append("<p class='error-msg' style='color:white;' >Le champ -Ingrédient- doit êtres remplis<br/></p>");
            $('#pop_up_js').fadeToggle();
        }
        else if(preparation === ''){
            $('.error-msg').remove();
            $('#pop_up_js').css( 'background','red');
            $("#pop_up_js").append("<p class='error-msg' style='color:white;' >Le champ -Preparation- doit êtres remplis<br/></p>");
            $('#pop_up_js').fadeToggle();
            
        }
        else if(level === '-' || level === '' ) {
            $('.error-msg').remove();
            $('#pop_up_js').css( 'background','red');
            $("#pop_up_js").append("<p class='error-msg' style='color:white;' >Veuillez choisir une difficulté<br/></p>");
            $('#pop_up_js').fadeToggle();
            
        }
        else if(tps_prepa === '-' || tps_prepa === '') {
            $('.error-msg').remove();
            $('#pop_up_js').css( 'background','red');
            $("#pop_up_js").append("<p class='error-msg' style='color:white;' >Veuillez choisir un temps de preparation<br/></p>");
            $('#pop_up_js').fadeToggle();
        }
        else if(tps_cuiss === '-' || tps_cuiss === '') {
            $('.error-msg').remove();
            $('#pop_up_js').css( 'background','red');
            $("#pop_up_js").append("<p class='error-msg' style='color:white;' >Veuillez choisir un temps de cuisson<br/></p>");
            $('#pop_up_js').fadeToggle();
           
        }
        else if(tps_repos === '-' || tps_repos === '') {
            $('.error-msg').remove();
            $('#pop_up_js').css( 'background','red');
            $("#pop_up_js").append("<p class='error-msg' style='color:white;' >Veuillez choisir un temps de repos<br/></p>");
            $('#pop_up_js').fadeToggle();
            
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
                        $('.error-msg').remove();
                        $('#pop_up_js').css( 'background','green');
                        $("#pop_up_js").append("<p class='error-msg' style='color:white;' >Recette ajoutée avec succes<br/></p>");
                        $('#pop_up_js').fadeToggle();
                        window.setTimeout("location=('?appli=home&action=myrecipe');",1000);
                    } else {
                        $('.error-msg').remove();
                        $('#pop_up_js').css( 'background','red');
                        $("#pop_up_js").append("<p class='error-msg' style='color:white;' >"+ json.reponse +"<br/></p>");
                        $('#pop_up_js').fadeToggle();
                        alert('Erreur : '+ json.reponse);
                    }
                }
            });
        }
        return false;
    });
});

