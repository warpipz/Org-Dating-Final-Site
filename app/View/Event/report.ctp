<?php //echo $this->element('sql_dump'); ?>
<?php //print_r(expression) ?>
<?php echo $this->Html->css('event'); ?>
<?php echo $this->Html->script('org-user.js'); ?>
<div class="pages-container">
	<div class="user-info">
		<?php //pr($reports);  	
		 	$event_obj = new AppController() ; 
			$event_numByGender = $event_obj->getNumber($reports['Report']['user_id'],$reports['Report']['event_id']);			
		?>
		<h2>機能<?php echo $event_numByGender['EventUser']['number']; ?></h2>
	</div>
	<form method="post" id="preview_form" action="/newdating/event/preview/<?php echo $reports['Report']['id'];?>" >
	<input type="hidden" name="selected_user" value="機能<?php echo $event_numByGender['EventUser']['number']; ?>"/>
	<table class="table table-hover">
		<thead>
			<tr>
				<td colspan="6">あなたが指名したお相手とカップルになる確率</td>
			</tr>
		</thead>
		<tbody>
			<?php for ($i = 0 ; $i<count($reports['ReportMeta']);) { ?>
			<tr>
				<td>第<?php echo ($i = $i+1) ?>指名</td>
				<td> <?php echo $reports['ReportMeta'][$i-1]['meta_num'].'番'; ?> 
					<input type="hidden" name="you_choose[<?php echo $i-1;?>][num]" value="<?php echo $reports['ReportMeta'][$i-1]['meta_num'].'番'; ?>" />
				</td>
				<td>
				<?php 
					$scores = $event_obj->getRatingScore($reports['ReportMeta'][$i-1]['meta_value'],$reports['Report']['user_id']);
					//pr($scores);
					 $score_list = array();
					foreach ($scores['RatingMeta'] as $key => $score) {
						$score_list[$key] = $score['value'];  
					}
					echo (array_sum($score_list)/2000)*100 . '%'; 
					
				?>
				<input type="hidden" name="you_choose[<?php echo $i-1;?>][avg]" value="<?php echo (array_sum($score_list)/2000)*100 . '%'; ?>" class="Average"/>	
				 </td>
				<td> <?php if($i<count($reports['ReportMeta'])){echo '第'.($i=$i+1).'指名';} ?> </td>
				<td> 
					<?php if($i-1<count($reports['ReportMeta'])){
						echo $reports['ReportMeta'][$i-1]['meta_num'].'番';
					}?>
					<input type="hidden" name="you_choose[<?php echo $i-1;?>][num]" value="<?php echo $reports['ReportMeta'][$i-1]['meta_num'].'番'; ?>" />
				</td>	
				<td> 
					<?php 
					if($i-1<count($reports['ReportMeta'])){
						$scores = $event_obj->getRatingScore($reports['ReportMeta'][$i-1]['meta_value'],$reports['Report']['user_id']);
						 $score_list = array();
						
						foreach ($scores['RatingMeta'] as $key => $score) {
							$score_list[$key] = $score['value'];  
						}
						echo (array_sum($score_list)/2000)*100 . '%';
						
					}
					?>
					<input type="hidden" name="you_choose[<?php echo $i-1;?>][avg]" value="<?php echo (array_sum($score_list)/2000)*100 . '%'; ?>" class="Average"/>	
				</td>				
			</tr>

			<?php }?>
		</tbody>

	</table>

	<table class="table table-hover">
		<thead>
			<tr>
				<th colspan="4">あなたが指名したお相手のライバル数</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($reports['ReportMeta'] as $key => $report_na) { ?>
			<tr>
				<td>第<?php echo ($key+1) ?>指名</td>
				<td> 
					<?php 
					$result_sameNum = $event_obj->getTheSameNum($report_na['meta_key'],$report_na['meta_value'],$report_na['report_id']);
					$numbers = array();
					foreach ($result_sameNum as $key2 => $numnila) {
						$numbers[] = $numnila['UserNum']['EventUser']['number'].'番';
					}
					echo implode(", ", $numbers);
					?>
					<input type="hidden" name="they_choose_u[<?php echo $key;?>][number]" value="<?php echo implode(", ", $numbers);?>"/>
				 </td>

				<td>Total <?php echo count($result_sameNum) ;?>
					<input type="hidden" name="they_choose_u[<?php echo $key;?>][total]" value="<?php echo count($result_sameNum);?>"/>
				</td>
				<td>
					<textarea name="they_choose_u[<?php echo $key;?>][admin_comment]" id="commentpartone-<?php echo $key+1;?>"></textarea>
				 </td>

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
			for($index=1; $index<=6; $index++){?>
			<tr>
				<td>第<?php echo $index;?>指名</td>
				<td>
				<?php 					
					$list_num = $event_obj->getNumberWhoChoseYou($event_numByGender['EventUser']['id'],$index);  
					echo implode(", ", $list_num);
				?>
				<input type="hidden" name="num_who_choose_u[]" value="<?php echo implode(", ", $list_num);?>"/> 
				</td>
			</tr>
			<?php } // end for loop ?>
			<tr>
				<td colspan="2">
					<textarea name="lastcomment" id="lastcomment"></textarea>
				</td>
			</tr>
		</tbody>
	</table>
		<input type="submit" value="Print" name="print" />
		<!-- 
		<div class="printLink">
			<a href="" class="Print">Print</a>
		</div> -->
	</form>
</div><!-- pages-container --> 

<script type="text/javascript">
	$(document).ready(function(){
		  // Sweet, the form was submitted...
  	$('#preview_form').submit(function(e){
  		window.open('', 'formpopup', 'width=800,height=600,resizeable,scrollbars');
        this.target = 'formpopup';
  	});
  		
	});
</script>