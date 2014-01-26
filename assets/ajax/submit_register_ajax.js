$(document).ready(function() {
    $('#formu_register').on('submit', function() {
 
        var name = $('#name').val();
        var firstname = $('#firstname').val();
        var mail = $('#mail').val();
        var pwd1 = $('#pwd1').val();
        var pwd2 = $('#pwd2').val();
        


        if(name == '' || firstname == '' || mail == '' || pwd1 == '' || pwd2 == '' ) {
            $('.error-msg').remove();
            $("#message_error2").append("<span class='error-msg' style='color:red;' >Veuillez renseigner tous les champs</span>");
            $('#pwd1, #pwd2').val("");
        } 
        else if(pwd1 != pwd2){
            $('.error-msg').remove();
            $("#message_error2").append("<span class='error-msg' style='color:red;' >Passwords don't match</span>");
            $('#pwd1, #pwd2').val("");
        }
        else if(isEmail(mail) == false){
            $('.error-msg').remove();
            $("#message_error2").append("<span class='error-msg' style='color:red;' >Invalid Email</span>");
            $('#pwd1, #pwd2').val("");
        }
        // else if(isPwd(pwd1) == false){
        //     $('.error-msg').remove();
        //     $("#message_error2").append("<span class='error-msg' style='color:red;' >Invalid Email</span>");
        //     $('#pwd1, #pwd2').val("");
        // }
        else {
            alert('Recette Ajoutée avec Success, Congrats Man !');
            window.setTimeout("location=('?appli=users&action=confirm_mail');",1000);

        }
        return false;
    });
});

// function isPwd(pwd)
// {
     
// }

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
