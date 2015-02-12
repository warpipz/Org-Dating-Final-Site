<?php echo $this->Html->css('event'); ?>
<script>
$(document).ready(function(){
	$('#eTitleSubmit').click(function(){
		$('form').submit();
	});
	$('#eTitleSubmit101').click(function(){
		$('.curNumber').hide();
		$('.curFlow').show();
	});
});
</script>
<style type='text/css'>
.eTitleCont{
	text-align: center;
	font-size: 400%;
	padding: 20px;
}
.curFlow{
	display: none;
}
table{
	text-align: center;
	margin:0 auto;
}
</style>
<div class="divisions curNumber" id="eventTitle">
	<div class="curNumber">
		<div class="eTitleCont">あなたの番号は　1番です。</div>
		<table class="table">			
			<tbody>
				<tr>
					<td colspan="2" class="text-center">
						<button class="btn btn-primary btn-solo" onclick="window.history.back();">
							<i class="fa fa-arrow-circle-left"></i> Back
						</button>
						<button class="btn btn-success btn-solo" id="eTitleSubmit101">
							<i class="fa fa-arrow-circle-right"></i> Next
						</button>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
<div class="curFlow">
	<div class="divisions">
		<form method="post" onsubmit="return false;" id="frmRegStep2" action="/check_profile">	
			<!-- <input type="hidden" name="login_id" value="<?php //echo $post['login_id']?>" />
			<input type="hidden" name="login_pw" value="<?php //echo $post['login_pw']?>" /> -->	
			<div class="eTitleCont">
				<h3>
				<?php
					//pr($curEvent);
					echo $event['Event']['description'];
				?>
				</h3>
			</div>
			<table class="table">			
				<tbody>
					<tr>
						<th>Party Flow<span class="need"></span></th>
						<td>
							<ul>
								<li>View the profile</li>
								<li>Check sheet and evaluation sheet</li>
								<li>Intermediate impression card</li>
								<li>Coupling card approach card</li>
							</ul>
						</td>
					</tr>
					<tr>
						<td colspan="2" class="text-center">
							<button class="btn btn-success btn-solo" id="eTitleSubmit">
								<i class="fa fa-arrow-circle-right"></i> Next
							</button>
						</td>
					</tr>
				</tbody>
			</table>
		</form>
	</div>
</div>