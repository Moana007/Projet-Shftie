$(document).ready(function() {
    $('#formRecipe_mail').on('submit', function() {
 
        var name = $('#name_mail').val();
        var comments = $('#comments').val();
        var mail = $('#email_mail').val();
        // console.log(name);
        // console.log(comments);
        if(name === '' || comments === '' || mail === '' ) {
            $('.error-msg').remove();
            $("#message_error3").append("<span class='error-msg' style='color:red;' >Veuillez renseigner tous les champs</span>");
            return false;
        }
        else if(isEmail(mail) === false){
            $('.error-msg').remove();
            $("#message_error3").append("<span class='error-msg' style='color:red;' >Veuillez renseigner un mail valide</span>");
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

function isEmail(email)
{
     if ( ( email.indexOf("@") == -1 ) 
       || ( email.indexOf("@") == 0 ) 
       || ( email.indexOf("@") != email.lastIndexOf("@") ) 
       || ( email.indexOf(".") == email.indexOf("@") - 1 ) 
       || ( email.indexOf(".") == email.indexOf("@") + 1 ) 
       || ( email.indexOf("@") == email.length -1 ) 
       || ( email.indexOf (".") == - 1 ) 
       || ( email.lastIndexOf (".") == email.length - 1 ) )
         return false;
      else
         return true;
}