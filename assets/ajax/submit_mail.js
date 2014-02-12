$(document).ready(function() {
    $('#formRecipe_mail').on('submit', function() {
 
        var name = $('#name_mail').val();
        var comments = $('#comments').val();
        // console.log(name);
        // console.log(comments);
        if(name === '' || comments === '' ) {
            $('.error-msg').remove();
            $("#message_error3").append("<span class='error-msg' style='color:red;' >Veuillez renseigner tous les champs</span>");
            

            return false;
        }
        else {
            $.ajax({
                url: $(this).attr('action'),
                type: $(this).attr('method'),
                data: $(this).serialize()
            });

            alert('Merci pour votre message, nous vous répondrons dans la mesure du possible');

        }

	});
});