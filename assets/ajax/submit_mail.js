$(document).ready(function() {
    $('#formRecipe_mail').on('submit', function() {
 
        var name = $('#name_mail').val();
        var comments = $('#comments').val();
        var mail = $('#email_mail').val();
        // console.log(name);
        // console.log(comments);
        if(name === '' || comments === '' || mail === '' ) {
            $('.error-msg').remove();
            $("#message_error3").append("<span class='error-msg' style='color:red;' >Please fill in all fields</span>");
            return false;
        }
        else if(isEmail(mail) === false){
            $('.error-msg').remove();
            $("#message_error3").append("<span class='error-msg' style='color:red;' >Please fill in a valid email</span>");
            return false;
        }
        else {
            $.ajax({
                url: $(this).attr('action'),
                type: $(this).attr('method'),
                data: $(this).serialize()
            });

            alert('Thank you for your message, we will reply as possible');

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