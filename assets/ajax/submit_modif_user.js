$(document).ready(function() {
    $('#users_udpate').on('submit', function() {
 
        var age = $('#age').val();
        //var sex_m = $('#sex_m').val();
        //var sex_f = $('#sex_f').val();

        if(age === '') {
            $('.error-msg').remove();
            $("#message_error_age").append("<span class='error-msg' style='color:red;' >*You must fill this to continue</span>");
            return false;
        }
        else if($('input[name=sex]').is(':checked') === false){
            $('.error-msg').remove();
            $("#message_error_gender").append("<span class='error-msg' style='color:red;' >*You must fill this to continue</span>");
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

