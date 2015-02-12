<?php echo $this->element('modals/addEvent');?>
<?php echo $this->element('modals/cancelEvent');?>
<?php echo $this->element('modals/finishEvent');?>
<?php echo $this->Html->css('event'); ?>
<div class="pages-container">
	
	<button class="btn btn-success btn-solo" data-toggle="modal" data-target="#addEvent">
		<i class="fa fa-calendar"></i> Add Event
	</button>
	<?php //pr($events); ?>
	<table class="table table-hover">
	  <thead>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Participants</th>
            <th>Max</th>
			<th>Status</th>
			<th>Date of Event</th>
			<th>Actions</th>
		</tr>
	  </thead>
	  <tbody>
		<?php foreach($events as $key => $event){?>
			<?php $open = ($key%2==1) ? '<th>' : '<td>';?>
			<?php $close = ($key%2==1) ? '</th>' : '</td>';?>
			<tr id="tr-<?php echo $event['Event']['id'];?>">
				<?php echo $open?> <?php echo $event['Event']['id'];?> <?php echo $close;?>
								<?php echo $open?> <?php echo "<a href='/newdating/event/event_view/".$event['Event']['id']."'>".$event['Event']['title'] ."</a>";?> <?php echo $close;?>
				<?php echo $open?><?php echo "<a href='/newdating/event/event_user/".$event['Event']['id']."'>" ?>  <?php echo count($event['EventUser']);?><?php echo "</a>"; ?> <?php echo $close;?>
                <?php echo $open?><?php echo $event['Event']['participants'];?>  <?php echo $close;?>
				<?php echo $open?> <?php echo $event['Event']['status'];?> <?php echo $close;?>
				<?php echo $open?> <?php $date_event = new DateTime($event['Event']['date']);
  						echo date_format($date_event, 'Y年m月d日');
  						//2015-01-30 02:42:19   <?php echo $close; ?> 
				<?php echo $open?> 
					<?php $date_now = new DateTime(); 
					$date_now  = date_format($date_now,'Y-m-d'); 
					?>
					<?php if($event['Event']['status']==0){ ?>
					<button class="btn btn-primary btn-solo btn-update" data-toggle="modal" data-target="#finishEvent" <?php echo ($date_now > date_format( $date_event,'Y-m-d') || $date_now < date_format($date_event,'Y-m-d') )? 'style="display:none"':''; ?> data-update-event-id="<?php echo $event['Event']['id'];?>">Finish</button>
					<?php } else{?>
					<button class="btn btn-primary btn-solo"  <?php echo ($date_now > date_format($date_event,'Y-m-d') || $date_now < date_format($date_event,'Y-m-d') )? 'style="display:none"':''; ?> >Finished</button>
					<?php } ?>
					<button class="btn btn-danger btn-solo btn-delete" data-toggle="modal" data-target="#cancelEvent" data-event-id="<?php echo $event['Event']['id'];?>">Delete</button>
				<?php echo $close;?>
			</tr>
		<?php } ?>
	  </tbody>
	</table>
	
</div>
<?php //echo $this->element('sql_dump'); ?>
<?php echo $this->Html->script('event'); ?>