function postLogin(login, password, box, errorCallback, successCallback) {
	var url = "/users/connect";
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
			window.location='/home';
		}
		else{			
			$('.error-msg').remove();
			$("#message_error").append("<span class='error-msg' style='color:red;' >Warning password or email is incorrect<br/>(Or you have not validated your account)</span>");
			$('#pwd').val("");
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