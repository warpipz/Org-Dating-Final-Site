<h1>Event Details</h1>
<table class="table table-striped">
	<tbody>
		<tr>
			<th>Title</th>
			<td><?php echo $notif['Event']['title'];?></td>
		</tr>
		<tr>
			<th>Description</th>
			<td><?php echo nl2br($notif['Event']['description']);?></td>
		</tr>
		<tr>
			<th>Max Participats</th>
			<td><?php echo $notif['Event']['participants'];?></td>
		</tr>
		<tr>
			<th>Created on</th>
			<td><?php echo $notif['Event']['created'];?></td>
		</tr>
		<tr>
			<th>Created by</th>
			<td><?php echo $notif['UserMeta']['name'];?></td>
		</tr>
		<?php if($notif['Event']['created']!=$notif['Event']['modified']){?>
		
			<tr>
				<th>Updated on</th>
				<td><?php echo $notif['Event']['modified'];?></td>
			</tr>
			<tr>
				<th>Updated by</th>
				<td><?php echo $notif['UserMeta']['name'];?></td>
			</tr>
		<?php } ?>
	</tbody>
</table>