<div class="containers">
	<h1><?php echo $notif['Notification']['message'];?></h1>
</div>
<div class="containers">
  <?php if($notif['Notification']['type']==0){?>	
	<?php echo $this->element('notif/event',array('notif'=>$notif));?>
	<?php echo $this->element('notif/user',array('notif'=>$notif));?>	
  <?php } ?>
  <?php if($notif['Notification']['type']==1 || $notif['Notification']['type']==2){?>	
	<?php echo $this->element('notif/event',array('notif'=>$notif));?>
  <?php } ?>
</div>
