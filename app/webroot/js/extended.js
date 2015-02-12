// JavaScript Document
$(document).ready(function(){
	
	/***********************************
	*		Registration BUTTON
	***********************************/
	$('#regForm button.btn-primary').click(function(){
		var form = $('form#regForm');
		var errors = [];
		$.ajax({
			url : FOLDER + '/user/regcheck',	
			dataType : 'json',
			data : form.serialize(),
			type : 'post',
			success : function(data){
				if(!form.find('input[name=login_id]').val()){
					errors.push('Put Username');
				}
				if(!form.find('input[name=login_pw]').val()){
					errors.push('Put Password');
				}
				if(form.find('input[name=login_pw]').val() != form.find('input[name=clogin_pw]').val()){
					errors.push('Passwords does not match');
				}
				if(data.status==2){
					errors.push('Username already taken');
				}
				if(!errors.length){
					form.removeAttr('onsubmit');
					form.submit();
				}else{
					alerts({
						text : errors[0],
						cls  : 'danger',
						obj  : '#registration-container',
						type : 'prepend'
					});		
				}	
			}
		});		
	});
	
	/***********************************
	*	 Registration Step 2 check
	***********************************/
	$('#frmRegStep2 #submit-reg2').click(function(){
		var form = $('#frmRegStep2');
		var errors = [];
		if(!form.find('input[name=name]').val()){
			errors.push('Put name');
		}
		if(!form.find('input[name=phonetic]').val()){
			errors.push('Put phonetic');
		}
		if($('#year').val()==''){
			errors.push('Please Select Year');
		}
		if($('#month').val()==''){
			errors.push('Please Select Month');
		}
		if($('#day').val()==''){
			errors.push('Please Select Day');
		}
		if($('#prefecture_present').val()==''){
			errors.push('Please Select Your Present Prefecture');
		}
		if($('#prefecture_born').val()==''){
			errors.push('Please Select Your Prefecture Where are you are born');
		}
		if($('#body').val()==''){
			errors.push('Please Select Your Body Type');
		}
		if(!form.find('input[name=cm]').val()){
			errors.push('Put your Cm');
		}
		if(!form.find('input[name=kg]').val()){
			errors.push('Put your Kg');
		}
		if($('#hairstyle').val()==''){
			errors.push('Please Select Your hairstyle');
		}
		if($('#glass').val()==''){
			errors.push('Please Select Your Glass');
		}
		if($('#type_person').val()==''){
			errors.push('Please Select Your Type of person');
		}
		if($('#personality').val()==''){
			errors.push('Please Select Your personality');
		}
		if($('#occupation').val()==''){
			errors.push('Please Select Your occupation');
		}
		if($('#dayoff').val()==''){
			errors.push('Please Select Your Day Off');
		}
		if($('#education').val()==''){
			errors.push('Please Select Your education');
		}
		if($('#income').val()==''){
			errors.push('Please Select Your Income');
		}
		if($('#living_with').val()==''){
			errors.push('Please Select Who is your living with');
		}
		if($('#relative').val()==''){
			errors.push('Please Select Who is your relative');
		}
		if($('#smoking').val()==''){
			errors.push('Please Select if your are smoking');
		}
		if($('#drinking').val()==''){
			errors.push('Please Select if your are drinking alcohol');
		}
		if($('#pet').val()==''){
			errors.push('Please Select Your pet');
		}
		if($('#purpose').val()==''){
			errors.push('Please Select Your purpose');
		}
		if($('#hobby').val()==''){
			errors.push('Please Select Your Hobby');
		}
		if($('#interesting').val()==''){
			errors.push('Please Select Your what is your interesting');
		}
		if($('#desire').val()==''){
			errors.push('Please Select Desire');
		}
		if($('#want_kids').val()==''){
			errors.push('Please Select if you want kid');
		}
		if(!errors.length){
			form.removeAttr('onsubmit');
			form.submit();
		}else{
			alerts({
				text : errors[0],
				cls  : 'danger',
				obj  : '#step2reg',
				type : 'prepend'
			});			
		}		
	});

	/***********************************
	*	 	  Update user info
	***********************************/
	$('#submit-upd-inf').click(function(){
		var form = $('#frmUpdInf');
		var errors = [];
		if(!form.find('input[name=name]').val()){
			errors.push('Put name');
		}
		if(!form.find('input[name=phonetic]').val()){
			errors.push('Put phonetic');
		}
		if($('#year').val()==''){
			errors.push('Please Select Year');
		}
		if($('#month').val()==''){
			errors.push('Please Select Month');
		}
		if($('#day').val()==''){
			errors.push('Please Select Day');
		}
		if($('#prefecture_present').val()==''){
			errors.push('Please Select Your Present Prefecture');
		}
		if($('#prefecture_born').val()==''){
			errors.push('Please Select Your Prefecture Where are you are born');
		}
		if($('#body').val()==''){
			errors.push('Please Select Your Body type');
		}
		if(!form.find('input[name=cm]').val()){
			errors.push('Put your Cm');
		}
		if(!form.find('input[name=kg]').val()){
			errors.push('Put your Kg');
		}
		if($('#hairstyle').val()==''){
			errors.push('Please Select Your hairstyle');
		}
		if($('#glass').val()==''){
			errors.push('Please Select Your Glass');
		}
		if($('#type_person').val()==''){
			errors.push('Please Select Your Type of person');
		}
		if($('#personality').val()==''){
			errors.push('Please Select Your personality');
		}
		if($('#occupation').val()==''){
			errors.push('Please Select Your occupation');
		}
		if($('#dayoff').val()==''){
			errors.push('Please Select Your Day Off');
		}
		if($('#education').val()==''){
			errors.push('Please Select Your education');
		}
		if($('#income').val()==''){
			errors.push('Please Select Your Income');
		}
		if($('#living_with').val()==''){
			errors.push('Please Select Who is your living with');
		}
		if($('#relative').val()==''){
			errors.push('Please Select Who is your relative');
		}
		if($('#smoking').val()==''){
			errors.push('Please Select if your are smoking');
		}
		if($('#drinking').val()==''){
			errors.push('Please Select if your are drinking alcohol');
		}
		if($('#pet').val()==''){
			errors.push('Please Select Your pet');
		}
		if($('#purpose').val()==''){
			errors.push('Please Select Your purpose');
		}
		if($('#hobby').val()==''){
			errors.push('Please Select Your Hobby');
		}
		if($('#interesting').val()==''){
			errors.push('Please Select Your what is your interesting');
		}
		if($('#desire').val()==''){
			errors.push('Please Select Desire');
		}
		if($('#want_kids').val()==''){
			errors.push('Please Select if you want kid');
		}
		if(!errors.length){
			form.removeAttr('onsubmit');
			form.submit();
		}else{
			alerts({
				text : errors[0],
				cls  : 'danger',
				obj  : '#user-index',
				type : 'prepend'
			});			
		}		
	});

$('.top-btn').click(function(){
	$('.alert').remove();
	$('.top-divs').hide();
	var ito = $(this);
	$('#'+ito.data('id')).show();


});

});
function goBack() {
	window.history.back()
}
function ValidateEmail(mail){  
	if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/.test(mail)){  
		return true; 
	}   
	return false;
} 