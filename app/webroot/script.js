// JavaScript Document
$(document).ready(function(){
	
	/***********************************
	*		 ADMIN ADD ORGANIZER
	***********************************/
	$('#addOrganizer button.btn-primary').click(function(){
		var form = $('#addOrganizer form');
		var errors = [];
		if(!form.find('input[name=name]').val()){
			errors.push('Put name');
		}
		if(!form.find('input[name=phonetic]').val()){
			errors.push('Put phonetic');
		}
		if(!form.find('input[name=username]').val()){
			errors.push('Put username');
		}
		if(!form.find('input[name=password]').val()){
			errors.push('Put password');
		}
		if(form.find('input[name=password]').val() != form.find('input[name=cpassword]').val()){
			errors.push('Password not same.');
		}
		
		if(errors.length){
			alerts({
				text : errors[0],
				cls  : 'danger',
				obj  : '#addOrganizer .modal-body',
				type : 'prepend'
			});	
		}else{
			$.ajax({
				url : FOLDER + '/admin/addorganizer',
				type : 'post',
				dataType : 'json',
				data : form.serialize(),
				success : function(data){
					if(data.status==1){
						$('.modal')	.modal('hide');
						window.location.reload();
					}else{
						alerts({
							text : "Username already taken",
							cls  : 'danger',
							obj  : '#addOrganizer .modal-body',
							type : 'prepend'
						});	
					}
				}
			});	
		}
		
	});
	
	/***********************************
	*		    ADD EVENT
	***********************************/
	$('#addEvent button.btn-primary').click(function(){
		var form = $('#addEvent form');
		var errors = [];
		if(!form.find('input[name=name]').val()){
			errors.push('Put name');
		}
		if(!form.find('textarea[name=description]').val()){
			errors.push('Put description');
		}
		
		
		if(errors.length){
			alerts({
				text : errors[0],
				cls  : 'danger',
				obj  : '#addEvent .modal-body',
				type : 'prepend'
			});	
		}else{
			$.ajax({
				url : FOLDER + '/event/addevent',
				type : 'post',
				dataType : 'json',
				data : form.serialize(),
				success : function(data){
					if(data.status==1){
						$('.modal')	.modal('hide');
						window.location.reload();
					}
					else if(data.status==3){
						alerts({
							text : "You have an event with the same date of event.",
							cls  : 'danger',
							obj  : '#addEvent .modal-body',
							type : 'prepend'
						});	
					}else{
						alerts({
							text : "You have an event with that name registered.",
							cls  : 'danger',
							obj  : '#addEvent .modal-body',
							type : 'prepend'
						});	
					}
				}
			});	
		}
		
	});
	
		
});

function alerticon(cls){
	switch(cls){
		case 'success' :
			return '<i class="fa fa-check-circle"></i> ';
			break;
		case 'warning' :
			return '<i class="fa fa-exclamation-circle"></i> ';
			break;
		case 'danger' :
			return '<i class="fa fa-exclamation-circle"></i> ';
			break;
		default :
			return '';
			break;
	}
}

function alerts(options){
	$('body .alert-custom').remove();
	var defaults = {
		text : '',
		cls  : 'success',
		obj  : 'body',
		type : 'append'
	};
	option = $.extend(defaults,options);
	var ele = $('<div />',{
		'class' : 'alert alert-' + option.cls + ' alert-custom',
		'role' : 'alert'
	});
	ele.html(alerticon(option.cls) + option.text);
	if(option.type=='prepend'){
		$(options.obj).prepend(ele);
	}else{ 
		$(options.obj).append(ele);
	}
	$("html, body").animate({ scrollTop: $('.alert-custom').offset().top - 5},100);
}