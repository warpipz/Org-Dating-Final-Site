$(document).ready(function(){
	notifications();	
});

function notifications(){
	
	$.ajax({		
		url : FOLDER + '/notification/notifications',
			type : 'post',
			dataType : 'json',
			data : {
				id : $('ul.dropdown-notif li:first-child').data('id')
			},
			success : function(data){
				if(data.length){
					var num = $('span.notification-counter').text();
					if(num==''){
						num=0;	
					}
					$('span.notification-counter').text(parseInt(num) + data.length);
					$.each(data,function(i,item){
						$('ul.dropdown-notif').prepend(createNotif(item));	
					});
				}
				setTimeout(function(){
					notifications();	
				},30000);
			}			
	});
		
}

function createNotif(data){
	var li = '<li data-id="'+data.Notification.id+'" class="notif-unread">';
	li += '<a href="'+FOLDER+'/notification/view/'+data.Notification.id+'">';
	li += data.Notification.message;
	li += '</a>';
  	li+= '</li>';
	return li;
}