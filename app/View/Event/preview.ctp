<?php //echo $this->element('sql_dump'); ?>
<?php echo $this->Html->css('event'); ?>
<?php echo $this->Html->script('org-user.js'); ?>
<div class="pages-container" id="printable">
	<div class="user-info">		
		<h2><?php echo $this->data['selected_user'];?></h2>
	</div>
	<?php 
		//pr($this->data['you_choose']);
		$you_choose = $this->data['you_choose'];
		$they_choose_u = $this->data['they_choose_u'];
		//pr($this->data['they_choose_u']);
		?>
	<table class="table table-hover">
		<thead>
			<tr>
				<td colspan="6">あなたが指名したお相手とカップルになる確率</td>
			</tr>
		</thead>
		<tbody>
			<?php 
			for($i = 0; $i<count($you_choose); ){ ?>
				<tr>
					<td>第<?php echo ($i = $i+1); ?>指名</td>
					<td><?php echo $you_choose[$i-1]['num'];?> </td>
					<td><?php echo $you_choose[$i-1]['avg'];?></td> 
					<td><?php if($i<count($you_choose)){ echo '第'.($i=$i+1).'指名';}  ?></td>					
					<td><?php if($i-1<count($you_choose)){ echo $you_choose[$i-1]['num']; }?> </td>
					<td><?php if($i-1<count($you_choose)){ echo $you_choose[$i-1]['avg']; }?></td>
				</tr>
			<?php } ?>
		</tbody>

	</table>
	<table class="table table-hover">
		<thead>
			<tr>
				<th colspan="4">あなたが指名したお相手のライバル数</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($they_choose_u as $key => $they_choose) {
			
			?>
			<tr>
				<td>第<?php echo $key+1; ?>指名</td>
				<td><?php echo $they_choose['number'];?></td>
				<td>Total <?php echo $they_choose['total'];?></td>
				<td><?php echo nl2br($they_choose['admin_comment']); ?></td>

			</tr>

			<?php } ?>
		</tbody>

	</table>
	
	<table class="table table-hover">
		<thead>
			<tr>
				<th colspan="2">あなたを指名したお相手</th>
			</tr>
		</thead>
		<tbody>
	<?php
	 $num_who_choose_u = $this->data['num_who_choose_u'];
	 foreach ($num_who_choose_u as $key => $value) {  ?>
	 	<tr>
			<td>第<?php echo $key+1;?>指名</td>
	 		<td><?php echo $value;?></td>
	 	</tr>
	 <?php } ?>
	 	<tr>
	 		<td colspan="2"><?php echo nl2br($this->data['lastcomment']); ?> </td>
	 	</tr>
	 	</tbody>
	</table>
	
	

	<?php unset($you_choose);
		unset($they_choose_u);
		unset($num_who_choose_u);
	?>


</div><!-- printable --> 
<div id="non-printable">
	<input type="button" name="print" value="Print" id="eprint" class="PrintNa" />
</div>

<style type="text/css">
	.navbar{
		display: none !important;
	}

    /* #printable { display: none; } */

    @media print
    {
    	#non-printable { display: none; }
    	#printable { display: block; }

    }

</style>
<script type="text/javascript">
$(document).ready(function(){
	$('.PrintNa').click(function(){
		//$('#eprint').hide();
		window.print();
	});
});

</script>

