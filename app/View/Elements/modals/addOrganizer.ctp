<div class="modal fade" id="addOrganizer" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Add Organizer</h4>
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
				  <td>Phoentic <span class="need">*</span></td>
				  <td><input type="text" name="phonetic" class="form-control" /></td>			  
				</tr>
				<tr>
				  <td>Gender <span class="need">*</span></td>
				  <td>
					<select name="gender" class="form-control">
						<option value="1">Male</option>
						<option value="2">Female</option>
					</select>
				  </td>			  
				</tr>
				<tr>
				  <td>Username <span class="need">*</span></td>
				  <td><input type="text" name="username" class="form-control" /></td>			  
				</tr>
				<tr>
				  <td>Password <span class="need">*</span></td>
				  <td><input type="password" name="password" class="form-control" /></td>			  
				</tr>
				<tr>
				  <td>Confirm Password <span class="need">*</span></td>
				  <td><input type="password" name="cpassword" class="form-control" /></td>			  
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