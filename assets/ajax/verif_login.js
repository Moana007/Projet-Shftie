function postLogin(login, password, box, errorCallback, successCallback) {
	var url = "?appli=users&action=connect";
	var settings = {
		data: {
			login: login,
			pwd: password,
			box: box
		},
		type: 'POST',
		error: errorCallback,
		success: successCallback
	};
	$.ajax(url, settings);
}

function onSubmit(event){
	//console.log('weee');
	event.preventDefault();
	var login = $('#login').val();
	var password = $('#pwd').val();
	var box = $('#checkbox').val();
	var url_courante = $('#url_c').val();

	var errorCallback = function(response){
		console.log(response);
	};


	var successCallback = function(response){
		if(response.success){
			window.location=url_courante;
		}
		else if(response.first){
			window.location='?appli=users&action=modif_users';
		}
		else{			
			$('.error-msg').remove();
			$("#message_error").append("<span class='error-msg' style='color:red;' >Attention, le mot de passe ou l'email est incorrect<br/>(Ou nous n'avez pas encore validé votre compte)</span>");
			$('#login, #pwd').val("");
			
			return false;
		}
	};

	postLogin(login, password, box, errorCallback, successCallback);
}

function bindSubmit(){
	//console.log('wess');
	$("#formu_co").on('submit', onSubmit);
}

$(document).on('ready', bindSubmit);