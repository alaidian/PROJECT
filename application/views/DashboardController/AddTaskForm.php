<!View for Add Task Written By :Anne >
<html>

<body>
	<?php 
	?>
	
	<div align="center">
     <h1>ADD TASK</h1>
	 <form action = '<?php $_SERVER['PHP_SELF'] ?>'  method = "post">
	 <table cellspacing="30pt">
		<tr>
		<td>Task id:</td>
     	<td><input type="text" size="20" id="taskid" name="taskid" placeholder="Enter Task id"  value="<?php echo set_value('taskid'); ?>"/>
	 	<td><span class="error"><?php echo form_error('taskid'); ?></span></td>
		</tr>
		<tr>
    	<td>Task Description :</td>
     	<td><textarea id="taskdescription" name="taskdescription" placeholder="Enter Task Description " value="<?php echo set_value('taskdescription'); ?>" /></textarea>
	 	<td><span class="error"><?php echo form_error('taskdescription'); ?></span></td>
		</tr>
		<tr>
		<tr>
		<td>Assigned To :</td>
		<td><select name="assignedto" id="assignedto">
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
		<td>Estimated Hours :
     	<td><input type="text" size="20" id="estimatedhours" name="estimatedhours" placeholder="Enter Estimated Hours " value="<?php echo set_value('estimatedhours'); ?>"/>
		<td><span class="error"> <?php echo form_error('estimatedhours'); ?></span></td>
		</tr>
		
	 
     </table>
	 
	 <br>
	 <br>
     <input type="submit" value="Save" style="color: #FFFFFF;  background-color: #72A4D2;"/>
	<a href='http://localhost/CI/DashboardController/index'> <input type="button" value="Cancel" style="color: #FFFFFF;  background-color: #72A4D2;"/></a>
      </div>
   </form>	
</body>
</html>
	