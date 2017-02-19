
	<?php //echo form_open('DashboardController/AddUserStoryForm'); ?>
	<div class="w3-white " align="center">
     <h1>ADD USERSTORY</h1>
	 <form method="post" action="<?php $_SERVER['PHP_SELF']?>">
	 <table cellspacing="10pt">
		<tr>
		<div class="form-group">
		<td>Story id:</td>
     	<td><input type="text" size="20" id="storyidid" name="storyid" placeholder="Enter Story id" style="color: #000000;" value="<?php echo set_value('storyid'); ?>"/>
	 	<td><span class="error"><?php echo form_error('storyid'); ?></span></td>
		</tr>
		<tr>
		<div class="form-group">
    	<td>Story Name :</td>
     	<td><input type="text" size="20" id="storyidname" name="storyname" placeholder="Enter Story Name"style="color: #000000;" value="<?php echo set_value('storyname'); ?>" />
	 	<td><span class="error"><?php echo form_error('storyname'); ?></span></td>
		</tr>
		</div>
		<tr>
		<div class="form-group">
		<td>User Story :
     	<td><input type="text" size="20" id="userstory" name="userstory" placeholder="Enter UserStory" style="color: #000000;" value="<?php echo set_value('userstory'); ?>"/>
		<td><span class="error"> <?php echo form_error('userstory'); ?></span></td>
		</div>
		</tr>
		<div class="form-group">
		<td>Size :
     	<td><input type="text" size="20" id="size" name="size" placeholder="Enter Size"style="color: #000000;" value="<?php echo set_value('size'); ?>"/>
		<td><span class="error"> <?php echo form_error('size'); ?></span></td>
		</div>
		</tr>
		<div class="form-group">
		<td>Priority :
     	<td><input type="text" size="20" id="priority" name="priority" placeholder="Enter Priority" style="color: #000000;" value="<?php echo set_value('priority'); ?>"/>
		<td><span class="error"> <?php echo form_error('priority'); ?></span></td>
		</div>
		</tr>
		<div class="form-group">
		<td>Sprint No :
     	<td><input type="text" size="20" id="sprintno" name="sprintno" placeholder="Enter Sprint number" style="color: #000000;" value="<?php echo set_value('sprintno'); ?>"/>
		<td><span class="error"> <?php echo form_error('sprintno'); ?></span></td>
		</div>
		</tr>
		<div class="form-group">
		<td>Release No :
     	<td><input type="text" size="20" id="releaseno" name="releaseno" placeholder="Enter Release number" style="color: #000000;" value="<?php echo set_value('releaseno'); ?>"/>
		<td><span class="error"> <?php echo form_error('releaseno'); ?></span></td>
		</div>
		</tr>
		<div class="form-group">
		<td>Use Case :</td>
     	<td><select name="usecase" id="usecase" style="color: #000000;" >
		</div>
		<?php
				$this->load->model('UserStoryDetail');
				
				$data=$this->UserStoryDetail->display_UserStories();
				
				
				foreach($data as $row)
						{
						$id=$row->Project_ID;
						echo "$id";
						$name=$row->Use_Case_ID;
						echo '<option value='."$id".'>'."$name".'</option>';
						
						
						}
			?>
			</select></tr>
		<td>Remarks :
     	<td><input type="text" size="20" id="remarks" name="remarks" placeholder="Enter Remarks"style="color: #000000;" value="<?php echo set_value('remarks'); ?>"/>
		<td><span class="error"> <?php echo form_error('remarks'); ?></span></td>
		</tr>
	 
     </table>
	 
	 <br>
	 <br>
     <input type="submit" value="Save" style="color: #FFFFFF;  background-color: #72A4D2;"/>
	<a href="http://localhost/CI/DashboardController/index"> <input type="button" value="Cancel" style="color: #FFFFFF;  background-color: #72A4D2;"/></a>
      </div>
   </form>	
	</body>
</html>