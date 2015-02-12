<div class="divisions">
	<h3>Participants Registration</h3>
	<form action=<?php echo FOLDER?>/top/registration2" method="post">
		<input type="hidden" name="organizer_id" value="<?php echo $this->Session->read('Organizer.User.id');?>" />
		<table class="table table-striped">
			<tbody>
				<tr>
					<th>Username</th>
					<td><input type="text" name="login_id" class="form-control" /></td>
				</tr>
				<tr>
					<th>Password</th>
					<td><input type="password" name="login_pw" class="form-control" /></td>
				</tr>
				<tr>
					<th>Confirm Password</th>
					<td><input type="text" name="clogin_pw" class="form-control" /></td>
				</tr>
				<tr>
					<th>Organizers Events</th>
					<td>
						<select class="form-control" name="event_id">
							<?php foreach($events as $event){?>
								<option value="<?php echo $event['Event']['id'];?>">
									<?php echo $event['Event']['title'];?>
								</option>
							<?php } ?>
						</select>
					</td>
				</tr>
				<tr>
					<td colspan="2" class="text-center">
						<button class="btn btn-primary btn-solo">
							<i class="fa fa-arrow-circle-right"></i> Next
						</button>
						<a href="<?php echo FOLDER;?>/top/clear" class="btn btn-primary btn-solo">
							<i class="fa fa-arrow-circle-left"></i> Back
						</a>
					</td>
				</tr>
			</tbody>			
		</table>
	</form>
</div>