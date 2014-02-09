$(document).ready(function(){
    $('#deselireBook').on('submit', function(){
        var id_book_elu = $('#id_book_elu');
        if(id_book_elu == ''){
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
                       
                        window.setTimeout("location=('?appli=book');",1000);
                    } else {
                        alert('Erreur : '+ json.reponse);
                    }
                }
            });
        }
        return false;
    });
});