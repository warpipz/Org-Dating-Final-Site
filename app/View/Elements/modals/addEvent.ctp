<div class="modal fade" id="addEvent" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Add Event</h4>
      </div>
      <div class="modal-body">
	    <form>
		  <table class="table table-stiped">
		    <tbody>
				<tr>
				  <td>Name <span class="need">*</span></td>
				  <td><input type="text" name="name" class="form-control" /></td>			  
				</tr>
				<tr>
				  <td>Description <span class="need">*</span></td>
				  <td><!-- <input type="text" name="description" class="form-control" /> -->
				  	<textarea class="form-control" name="description"></textarea>
				  </td>			  
				</tr>
				<tr>
				  <td>Maximum Participants <span class="need">*</span></td>
				  <td>
					<select name="participants" class="form-control">
						<?php for($x=2;$x<=20;$x=$x+2){?>
							<option value="<?php echo $x?>"><?php echo $x?></option>
						<?php } ?>
					</select>
				  </td>			  
				</tr>
				<tr>
				  <td>Date Start<span class="need">*</span></td>
				  <td>
				  	<?php  $test = new DateTime();
  						//echo date_format($test, 'Y-m-d H:i:s');
  						//2015-01-30 02:42:19  
  					?>
				  	Year
					<select name="date_yr" class="form-control date-form">
						<?php for($x=date_format($test, 'Y');$x<=(date_format($test, 'Y')+1);$x++){?>
							<option value="<?php echo $x?>"><?php echo $x?></option>
						<?php } ?>
					</select>
					Month
					<select name="date_month" class="form-control date-form">
						<?php for($x=1;$x<=12;$x++){?>
							<option value="<?php  echo (strlen($x)!=2)? '0'.$x: $x ?>"><?php echo $x?></option> 
						<?php } ?>
					</select> 
					Day 
					<select name="date_day" class="form-control date-form">
						<?php for($x=1;$x<=31;$x++){?>
							<option value="<?php echo (strlen($x)!=2)? '0'.$x: $x ?>"><?php echo $x?></option>
						<?php } ?> 
					</select>
				  </td>			  
				</tr>
			</tbody>
		  </table>
		</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary">Add</button>
      </div>
    </div>
  </div>
</div>