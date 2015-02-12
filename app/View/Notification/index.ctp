<div>
	<ul class="bordered no-list-type dropdown-notif">
		<?php foreach($all as $al){?>
        	<?php if(!isset($al['Notification']['message'])){continue;}?>
			<li class="<?php echo (!$al['Notification'][$statusC]) ? "notif-unread-li" : ""?>">
				<a href="<?php echo FOLDER;?>/notification/view/<?php echo $al['Notification']['id'];?>">
					<?php echo $al['Notification']['message'];?>
					<span><?php echo $al['Notification']['created'];?></span>
				</a>
			</li>
		<?php }?>
	</ul>
	
</div>