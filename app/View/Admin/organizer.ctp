<?php echo $this->Html->script('org-user'); ?>
<?php echo $this->element('modals/addOrganizer');?>

<div class="pages-container">
	
	<button class="btn btn-success btn-solo" data-toggle="modal" data-target="#addOrganizer">
		<i class="fa fa-user-plus"></i> Add Organizer
	</button>
	
	<table class="table table-hover">
		<tr>
			<th>ID</th>
			<th>Username</th>
			<th>Name</th>
			<th>Gender</th>
			<th>Status</th>
		</tr>
		<?php foreach($organizers as $key => $organizer){?>
			<?php $open = ($key%2==1) ? '<th>' : '<td>';?>
			<?php $close = ($key%2==1) ? '</th>' : '</td>';?>
			<tr>
				<?php echo $open?> <?php echo $organizer['User']['id'];?> <?php echo $close;?>
				<?php echo $open?> <a href="/newdating/admin/organizerview/<?php echo $organizer['User']['id'];?>"><?php echo $organizer['User']['login_id'];?></a> <?php echo $close;?>
				<?php echo $open?> <?php echo $organizer['UserMeta']['name'];?> <?php echo $close;?>
				<?php echo $open?> <?php echo $organizer['UserMeta']['gender'];?> <?php echo $close;?>
				<?php echo $open?> <button id="users_status" class="btn <?php echo ($organizer['User']['status']==1)?'btn-danger':'btn-primary'; ?> users" data-user='admin' data-action='<?php echo ($organizer['User']['status']==1)?'inactive':'active'; ?>' data-user-id="<?php echo $organizer['User']['id'] ?>" ><?php echo ($organizer['User']['status']==1)?'inactive':'active'; ?></button> <?php echo $close;?>
			</tr>
		<?php } ?>
	</table>
	
</div>