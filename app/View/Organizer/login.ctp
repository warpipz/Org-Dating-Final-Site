<div class="divisions">
	<h3>Site management login</h3>
	<form action="?" method="post">
		<table class="table">
		  <tbody>
			<tr>
				<th>Username</th>
				<td><input type="text" class="form-control" name="data[User][login_id]" /></td>
			</tr>
			<tr>
				<th>Password</th>
				<td><input type="password" class="form-control" name="data[User][login_pw]" /></td>
			</tr>
			<tr>
				<td colspan="2" class="text-center">
					<a href="<?php echo FOLDER;?>/" class="btn btn-primary btn-solo">
						<i class="fa fa-arrow-circle-left"></i> Back
					</a>
					<button class="btn btn-primary btn-solo">
						<i class="fa fa-check-square-o"></i> Login
					</button>
				</td>
			</tr>
		  </tbody>
		</table>
	</form>
</div>