<?php //echo $this->element('sql_dump'); ?>
<?php //print_r(expression) ?>
<?php echo $this->Html->css('event'); ?>
<?php echo $this->Html->script('org-user.js'); ?>
<div class="pages-container">
	
	<?php //pr($ratings); ?>
	<div id="user-info">
		<?php $user_info_obj =  new AppController();
			$user_info = $user_info_obj->getMemberInfo($ratings['Rating']['user_id']);
			
			//pr($user_info);
		?>
		<label>Full Name : <?php echo $user_info['UserMeta']['name']; ?></label> 
	</div>
	<table class="table table-hover">
	<?php //pr($ratings['RatingMeta']) ?>
	<?php foreach ($ratings['RatingMeta'] as $key => $rating) { ?>	
		
		<tr>

			<th><?php echo $this->RatingCategory->rate_subcategory[$rating['key']] ; ?> </th>
			<td><?php echo (count($ratings['RatingMeta'])!=($key+1) )? $rating['value'].'%':$rating['value']; ?></td>
		</tr>
		<?php } ?>
	</table><!-- table -->
	
</div><!-- pages-container --> 

