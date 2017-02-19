
	
	<form method="post" action="<?php $_SERVER['PHP_SELF']?>">
	<?php 
	$this->load->model('TaskDetail');
	$tid=$this->session->userdata('tid');
	$result=$this->TaskDetail->single_taskDetail($tid); 

	?>
	<div align="center">
     <h1>EDIT TASK</h1>
	 
	 <table cellspacing="30pt">
		<tr>
		<td>Task id:</td>
     	<td><input type="text" size="20" id="taskid" name="taskid"  style="color: #000000;"value='<?php echo "$result->Task_ID" ; ?>' disabled />
	 	
		</tr>
		<tr>
    	<td>Task Description :</td>
     	<td><textarea  id="taskdescription" name="taskdescription"  style="color: #000000;"><?php echo "$result->Task_Description";?></textarea>
	 	<td><span class="error"><?php echo form_error('taskdescription'); ?></span></td>
		</tr>
		<tr>
		<tr>
		<td>Assigned To :</td>
		<td><select name="assignedto" id="assignedto" style="color: #000000;" ><?php echo "$result->Assigned_To"; ?>
		<?php
				$this->load->model('UserDetail');
				//$obj=new UserDetail();
				$data=$this->UserDetail->select_users();
				//$data=$obj->select_users();
				
				foreach($data as $row)
						{
						$id=$row->User_ID;
						echo "$id";
						$name=$row->User_Name;
						echo '<option value='."$id".'>'."$name".'</option>';
						
						
						}
			?>
			</select>
		</td>
		</tr>
		<tr>
		<td>Estimated Hours :
     	<td><input type="text" size="20" id="estimatedhours" name="estimatedhours" style="color: #000000;" value='<?php echo "$result->Estimated_Hours"; ?>'/>
		<td><span class="error"> <?php echo form_error('estimatedhours'); ?></span></td>
		</tr>
		<tr>
		<td>Remaining Hours:</td>
     	<td><input type="text" size="20" id="remaininghours" name="remaininghours" style="color: #000000;" value='<?php echo "$result->Remaining_Hours"; ?>'/>
	 	<td><span class="error"><?php echo form_error('remaininghours'); ?></span></td>
		</tr>
		<tr>
		<td>Task Status:</td>
     	<td><input type="text" size="20" id="taskstatus" name="taskstatus"  style="color: #000000;" value='<?php echo "$result->Task_Status"; ?>'/>
	 	<td><span class="error"><?php echo form_error('taskstatus'); ?></span></td>
		</tr>
	 
     </table>
	 
	 <br>
	 <br>
    <input type="submit" value="Save" style="color: #FFFFFF;  background-color: #72A4D2;"  />
	<a href='http://localhost/CI/DashboardController/index'> <input type="button" value="Cancel" style="color: #FFFFFF;  background-color: #72A4D2;"/></a>
	
      </div>
   </form>	
	