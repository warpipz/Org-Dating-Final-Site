<?php echo $this->Html->css('event'); ?>
<div class="pages-container">
	<?php if($this->Session->check('UPD_EVT_FAIL')){?>
    	<div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> Another event is on the selected date</div>
        <?php unset($_SESSION['UPD_EVT_FAIL']);?>
    <?php } ?>
    <form method="post" action="?">
    <input type="hidden" name="id" value="<?php echo $event['Event']['id'];?>" />
	<table class="table table-stiped">
        <tbody>
            <tr>
              <td>Name <span class="need">*</span></td>
              <td><input type="text" name="title" class="form-control" value="<?php echo $event['Event']['title'];?>" /></td>			  
            </tr>
            <tr>
              <td>Description <span class="need">*</span></td>
              <td>
                <textarea class="form-control" name="description" rows="10"><?php echo $event['Event']['description'];?></textarea>
              </td>			  
            </tr>
            <tr>
              <td>Maximum Participants <span class="need">*</span></td>
              <td>
                <select name="participants" class="form-control">
                    <?php for($x=1;$x<=20;$x++){?>
                        <?php $sel = ($event['Event']['participants']==$x) ? "selected" : "";?>
                        <option value="<?php echo $x?>" <?php echo $sel;?>><?php echo $x?></option>
                    <?php } ?>
                </select>
              </td>			  
            </tr>
            <tr>
              <td>Date Start<span class="need">*</span></td>
              <?php $y = date('Y',strtotime($event['Event']['date']))?>
              <?php $m = date('m',strtotime($event['Event']['date']))?>
              <?php $d = date('d',strtotime($event['Event']['date']))?>
              <td>
                Year
                <select name="date_yr" class="form-control date-form">
                    <?php for($x=(date('Y')-2);$x<=(date('Y')+20);$x++){?>
                        <?php $sel = ($x==$y) ? "selected='selected'" : "";?>
                        <option value="<?php echo $x?>" <?php echo $sel?>><?php echo $x?></option>
                    <?php } ?>
                </select>
                Month
                <select name="date_month" class="form-control date-form">
                    <?php for($x=1;$x<=12;$x++){?>
                    <?php $sel = ($x==$m) ? "selected='selected'" : "";?>
                        <option value="<?php  echo (strlen($x)!=2)? '0'.$x: $x ?>" <?php echo $sel;?>><?php echo $x?></option> 
                    <?php } ?>
                </select> 
                Day 
                <select name="date_day" class="form-control date-form">
                    <?php for($x=1;$x<=31;$x++){?>
                    <?php $sel = ($x==$d) ? "selected='selected'" : "";?>
                        <option value="<?php echo (strlen($x)!=2)? '0'.$x: $x ?>" <?php echo $sel;?>><?php echo $x?></option>
                    <?php } ?> 
                </select>
              </td>			  
            </tr>
            <tr>
            	<td colspan="2" class="text-center">
                	<a class="btn btn-primary btn-solo" href="<?php echo FOLDER;?>/event">
                    	<i class="fa fa-arrow-circle-left"></i>	Back
                    </a>
                    <button class="btn btn-success btn-solo">
                    	<i class="fa fa-check-square"></i> Update
                    </button>
                </td>
            </tr>
        </tbody>
      </table>
	</form>
</div>
