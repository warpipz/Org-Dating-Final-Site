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
		<li>Birthday</li>
		<li><?php echo $users['UserMeta']['year']."-".$users['UserMeta']['month']."-".$users['UserMeta']['day']; ?></li>
		<li>Blood Type</li>
		<li><?php echo $users['UserMeta']['bloodtype']; ?></li>
		<li>Present Prefecture</li>
		<li><?php echo $users['UserMeta']['present_prefecture']; ?></li>
		<li>Born Prefecture</li>
		<li><?php echo $users['UserMeta']['born_prefecture']; ?></li>
		<li>Body</li>
		<li><?php echo $users['UserMeta']['body']; ?></li>
		<li>cm</li>
		<li><?php echo $users['UserMeta']['cm']; ?></li>
		<li>Kg</li>
		<li><?php echo $users['UserMeta']['kg']; ?></li>
		<li>Hairstyle</li>
		<li><?php echo $users['UserMeta']['hairstyle']; ?></li>
		<li>Glass</li>
		<li><?php echo $users['UserMeta']['glass']; ?></li>
		<li>Type Person</li>
		<li><?php echo $users['UserMeta']['type_person']; ?></li>
		<li>Personality</li>
		<li><?php echo $users['UserMeta']['personality']; ?></li>
		<li>Occupation</li>
		<li><?php echo $users['UserMeta']['occupation']; ?></li>
		<li>Dayoff</li>
		<li><?php echo $users['UserMeta']['dayoff']; ?></li>
		<li>Education</li>
		<li><?php echo $users['UserMeta']['education']; ?></li>
		<li>Income</li>
		<li><?php echo $users['UserMeta']['income']; ?></li>
		<li>Living With</li>
		<li><?php echo $users['UserMeta']['living_with']; ?></li>
		<li>Relatives</li>
		<li><?php echo $users['UserMeta']['relative']; ?></li>
		<li>Smoking</li>
		<li><?php echo $users['UserMeta']['smoking']; ?></li>
		<li>Drinking Alcohol</li>
		<li><?php echo $users['UserMeta']['drinking_alcohol']; ?></li>
		<li>Car</li>
		<li><?php echo $users['UserMeta']['car']; ?></li>
		<li>Pet</li>
		<li><?php echo $users['UserMeta']['pet']; ?></li>
		<li>Purpose</li>
		<li><?php echo $users['UserMeta']['purpose']; ?></li>
		<li>Hobby</li>
		<li><?php echo $users['UserMeta']['hobby']; ?></li>
		<li>Interesting</li>
		<li><?php echo $users['UserMeta']['interesting']; ?></li>
		<li>Status</li>
		<li><?php echo $users['UserMeta']['status']; ?></li>
		<li>Desire</li>
		<li><?php echo $users['UserMeta']['desire']; ?></li>
		<li>Kids</li>
		<li><?php echo $users['UserMeta']['kids']; ?></li>
		
          
	</ul>	

</div>

<style type="text/css">
	.userINfo li:nth-child(even){
		width: 47%;
		font-size: 16px;
		margin-left: -4px;
	}
	.userINfo li:nth-child(odd){
		width: 50%;
		font-weight: bold;
		font-size: 16px;
	}
	.userINfo li{
		list-style-type: none;
		display: inline-block;
		border-bottom: 1px solid #ccc;
	}
</style>
