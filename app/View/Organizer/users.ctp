<?php //echo $this->element('sql_dump'); ?>
<?php //print_r(expression) ?>
<?php echo $this->Html->css('event'); ?>
<?php echo $this->Html->script('org-user'); ?>
<div class="pages-container">
	
	<button class="btn btn-primary btn-solo btn_back" >
		 <i class="fa fa-arrow-circle-left"></i>
		Back
	</button>
	
	<table class="table table-hover">
	  <thead>
		<tr>
			<th>Participant ID</th>
			<th>Name</th>
			<th>Username</th>
			<th>Password</th>
			<th>Gender</th>
			<th>Status</th>
		</tr>
	  </thead>
	  <tbody>
	  	<?php foreach ($users as $key => $user): ?>
		<tr>
			<td><?php echo $user['User']['id'] ?></td>
			<td><a href="/newdating/organizer/userview/<?php echo $user['User']['id']; ?>"><?php echo $user['UserMeta']['name'] ?></a></td>
			<td><?php echo $user['User']['login_id'] ?></td>
			<td><?php echo $user['User']['login_pw'] ?></td>
			<td><?php echo $user['UserMeta']['genderName'] ?></td>

			<td><button id="users_status" class="btn <?php echo ($user['User']['status']==1)?'btn-danger':'btn-primary'; ?> users" data-user='organizer' data-action='<?php echo ($user['User']['status']==1)?'inactive':'active'; ?>' data-user-id="<?php echo $user['User']['id'] ?>" ><?php echo ($user['User']['status']==1)?'inactive':'active'; ?></button></td>
		</tr>
		<?php endforeach ?>
	  </tbody>
	</table>
	
</div>
