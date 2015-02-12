<?php //echo $this->element('sql_dump'); ?>
<?php //print_r(expression) ?>
<?php echo $this->Html->css('event'); ?>
<?php echo $this->Html->script('org-user.js'); ?>
<div class="pages-container">
	
	<button class="btn btn-primary btn-solo btn_back">
		 <i class="fa fa-arrow-circle-left"></i>
		Back
	</button>
	
	<table class="table table-hover">
	  <thead>
		<tr>
			<th>Number</th>
			<th>Name</th>
			<th>Username</th>
			<th>Password</th>
			<th>Middle Time</th>
			<th>Final Time</th>
			<th>Report</th>
		</tr>
	  </thead>
	  <tbody>
	  	<?php $femalecount = 0 ;?>
	  	<?php $event_obj = new AppController() ; ?>
	  	<?php //pr($event); ?>
	  	<?php foreach ($event as $key => $events): ?>

		<tr>
			<?php  if($events['UserMeta']['genderName']=='Male' && $key==0){ ?>
				<td colspan="7">Male</td>
			<?php } else if($events['UserMeta']['genderName']=='Female' & $femalecount==0	){ 
					$femalecount = 1;
				?>
			<td colspan="7">Female</td>
				<?php } ?>
		</tr>
		<tr>
			<td><?php echo $events['EventUser']['number'] ?></td>
			<td><?php echo $events['UserMeta']['name'] ?></td>
			<td><?php echo $events['User']['login_id'] ?></td>
			<td><?php echo $events['User']['login_pw'] ?></td>
			<?php $numgen = array();
				$numgen2 = array();
			?>

			<?php if($events['Rating']) { ?>	
			<?php foreach($events['Rating'] as $key => $rating){
					if($rating['is_second']==0){
						$event_numByGender = $event_obj->getNumber($rating['from_id'],$rating['event_id']);						
						$numgen[$key] = '<a href="/newdating/event/rating/'.$rating['id'].'">'.$event_numByGender['EventUser']['number'].'</a>';
					}
					else{
						$event_numByGender = $event_obj->getNumber($rating['from_id'],$rating['event_id']);
						//pr($event_numByGender);
						$numgen2[$key] = '<a href="/newdating/event/rating/'.$rating['id'].'">'.$event_numByGender['EventUser']['number'].'</a>';
					}	
				}	
				?>

				<td> 
					<?php echo implode(", ", $numgen);	?>	
				</td>			
				<td>
					<?php echo implode(", ", $numgen2); ?> 
				</td>
			<?php 
				}
				else{
					echo "<td> </td>
					<td> </td>
					";
				}
			?>
			<td>
				<?php $report  =  $event_obj->getReport($events['EventUser']['user_id'],$events['EventUser']['event_id']);  
				//pr($report);
				if(isset($report['Report']['id'])){
				?> 
				<a href="/newdating/event/report/<?php echo $report['Report']['id'] ?>">View</a>
				<?php } ?>

			</td>	
		</tr>
		<?php endforeach ?>
	  </tbody>
	</table>
	
</div>

<style type="text/css">
	.table tbody tr td[colspan="7"]{
		text-indent: 15px;
		font-size: 14px;
		font-weight: bold;
	}
</style>
