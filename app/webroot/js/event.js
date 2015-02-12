// JavaScript Document
$(document).ready(function(){
	
		$('.btn-delete').click(function(){
			var data_event_id =  $(this).attr('data-event-id');
			$('#event_id').val(data_event_id);
		});   

		$('#yes_del').click( function(){
			$.ajax({
				url : '/newdating/event/removeEvent',
				data : {id : $('#event_id').val()},
				type : 'post',
				success : function()
				{
					$('#tr-' + $('#event_id').val()).remove();
				},
				error : function()
				{
					alert("Error Deleting record");
				}		
			 
			});
		});

		$('.btn-update').click(function(){
			var data_event_id =  $(this).attr('data-update-event-id');
			$('#event_id_update').val(data_event_id);
			

		});

		$('#update_eventid').click(function(){


			$.ajax({
				url : '/newdating/event/updateStatus',
				data : {id : $('#event_id_update').val()},
				type : 'post',
				success : function()
				{
					   window.location.reload();
				},
				error : function()
				{
					alert("Error Updating Record");
				}		
			 
			});
		});
});