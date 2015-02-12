<?php echo $this->Html->css('event'); ?>
<script>
$(document).ready(function(){
	$('#eTitleSubmit').click(function(){
		$('form').submit();
	});
});
</script>
<style type='text/css'>
.eTitleCont{
	text-align: center;
	font-size: 400%;
	padding: 20px;
}
</style>
<div class="divisions" id="eventNumber">
	<div class="eTitleCont">あなたの番号は　1番です。</div>
	<form method="post" id="frmRegStep2" action="/newdating/party/flow">	
		<!-- <input type="hidden" name="login_id" value="<?php //echo $post['login_id']?>" />
		<input type="hidden" name="login_pw" value="<?php //echo $post['login_pw']?>" />	 -->
		<table class="table">			
			<tbody>
				<tr>
					<td colspan="2" class="text-center">
						<button class="btn btn-primary btn-solo" onclick="window.history.back();">
							<i class="fa fa-arrow-circle-left"></i> Back
						</button>
						<button class="btn btn-success btn-solo" id="eTitleSubmit">
							<i class="fa fa-arrow-circle-right"></i> Next
						</button>
					</td>
				</tr>
			</tbody>
		</table>
	</form>
</div>