$(document).ready(function() {
    $('#pwd_udpate').on('submit', function() {
 
        var pwd1 = $('#new_pwd').val();
        var pwd2 = $('#new_pwd2').val();

        if(pwd1 != pwd2 ) {
            $('.error-msg').remove();
            $("#message_error_pwd").append("<span class='error-msg' style='color:red;' >Your password does not match.</span>");
            return false;
        }
        else {
            $.ajax({
                url: $(this).attr('action'),
                type: $(this).attr('method'),
                data: $(this).serialize()
            });
        }

        
    });
});
// ?appli=user&action=modif_users