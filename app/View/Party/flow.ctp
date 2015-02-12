<?php echo $this->Html->css('event'); ?>
<div class="divisions" id="step2reg">
	<h3>Event Title</h3>
	<form method="post" onsubmit="return false;" id="frmRegStep2" action="/check_profile">	
		<input type="hidden" name="login_id" value="<?php echo $post['login_id']?>" />
		<input type="hidden" name="login_pw" value="<?php echo $post['login_pw']?>" />	
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
						<button class="btn btn-success btn-solo" id="submit-reg2">
							<i class="fa fa-arrow-circle-right"></i> Next
						</button>
					</td>
				</tr>
			</tbody>
		</table>
	</form>
</div>