$(document).ready(function(){
	/*========================================
	Users/Organizers Active and Inactive
	==========================================*/
	$('.users').click(function(){
		var $this = $(this),
		request = false;
		var validate_user = ($this.attr('data-user') == 'organizer')?'organizer':'admin';
		$.ajax({
			url : "/newdating/"+validate_user+"/activeorinactive/",
			type : "POST",
			data : {userID:$this.attr('data-user-id'),
					userAction:$this.attr('data-action')
				},
				success:function(){
					if($this.attr('data-action')=='active'){
						$this.attr('data-action','inactive');
						$this.removeClass('btn-primary').addClass('btn-danger');
						$this.text('inactive');
					}else{
						$this.attr('data-action','active');
						$this.removeClass('btn-danger').addClass('btn-primary');
						$this.text('active');
					}
				},
				error:function(){
					console.log();
				}
			});	
	});

	$('.btn-solo').click(function(){
		window.location.href="/newdating/organizer/";
	});
});
