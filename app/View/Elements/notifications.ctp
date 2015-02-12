<?php foreach($notifs as $notif){?>
  <?php if(!isset($notif['Notification']['message'])){continue;}?>
  <?php $class = (!$notif['Notification'][$statusC]) ? "notif-unread" : "";?>
  <li data-id="<?php echo $notif['Notification']['id'];?>" class="<?php echo $class;?>">
	<a href="<?php echo FOLDER?>/notification/view/<?php echo $notif['Notification']['id'];?>">
	  <?php echo $notif['Notification']['message'];?>
	</a>
  </li>
<?php }?>