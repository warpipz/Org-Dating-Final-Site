<?php //echo $this->element('sql_dump'); ?>
<?php //print_r(expression) ?>
<?php echo $this->Html->css('event'); ?>
<div class="pages-container">
	<?php //pr($users); ?>
	<ul class="userINfo">
		<li>Id </li>
		<li><?php echo $users['User']['id'] ?> </li>
		<li>User Name</li>
		<li><?php echo $users['User']['login_id'] ?> </li>
		<li>Status</li>
		<li><?php echo ($users['User']['status']==0)? 'active':'inactive'; ?> </li>
		<li>Full Name</li>
		<li><?php echo $users['UserMeta']['name']; ?></li>
		<li>Phonetic</li>
		<li><?php echo $users['UserMeta']['phonetic']; ?></li>
		<li>Gender</li>
		<li><?php echo $users['UserMeta']['genderName']; ?></li>
	</ul>	

</div>

<style type="text/css">
	.userINfo li:nth-child(even){
		width: 47%;
		font-size: 16px;
	}
	.userINfo li:nth-child(odd){
		width: 50%;
		font-weight: bold;
		font-size: 16px;
	}
	.userINfo li{
		list-style-type: none;
		display: inline-block;
	}
</style>
