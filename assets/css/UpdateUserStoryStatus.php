
	<?php echo form_open('AddUserStoryForm'); ?>
	<div align="center">
     <h1>ADD USERSTORY</h1>
	 
	 <table cellspacing="10pt">
		<tr>
		<td>Story id:</td>
     	<td><input type="text" size="20" id="storyidid" name="storyid"  value="<?php echo set_value('storyid'); ?>"/>
	 	<td><span class="error"><?php echo form_error('storyid'); ?></span></td>
		</tr>
		<tr>
    	<td>Story Name :</td>
     	<td><input type="text" size="20" id="storyidname" name="storyname" value="<?php echo set_value('storyname'); ?>" />
	 	<td><span class="error"><?php echo form_error('storyname'); ?></span></td>
		</tr>
		<tr>
		<td>User Story :
     	<td><input type="text" size="20" id="userstory" name="userstory" value="<?php echo set_value('userstory'); ?>"/>
		<td><span class="error"> <?php echo form_error('userstory'); ?></span></td>
		</tr>
		<td>Size :
     	<td><input type="text" size="20" id="size" name="size" value="<?php echo set_value('size'); ?>"/>
		<td><span class="error"> <?php echo form_error('size'); ?></span></td>
		</tr>
		<td>Priority :
     	<td><input type="text" size="20" id="priority" name="priority" value="<?php echo set_value('priority'); ?>"/>
		<td><span class="error"> <?php echo form_error('priority'); ?></span></td>
		</tr>
		<td>Sprint No :
     	<td><input type="text" size="20" id="sprintno" name="sprintno" value="<?php echo set_value('sprintno'); ?>"/>
		<td><span class="error"> <?php echo form_error('sprintno'); ?></span></td>
		</tr>
		<td>Release No :
     	<td><input type="text" size="20" id="releaseno" name="releaseno" value="<?php echo set_value('releaseno'); ?>"/>
		<td><span class="error"> <?php echo form_error('releaseno'); ?></span></td>
		</tr>
		<td>User Case :
     	<td><input type="text" size="20" id="usecase" name="usecase" value="<?php echo set_value('usecase'); ?>"/>
		<td><span class="error"> <?php echo form_error('usecase'); ?></span></td>
		</tr>
		<td>Remarks :
     	<td><input type="text" size="20" id="remarks" name="remarks" value="<?php echo set_value('remarks'); ?>"/>
		<td><span class="error"> <?php echo form_error('remarks'); ?></span></td>
		</tr>
	 
     </table>
	 
	 <br>
	 <br>
     <input type="submit" value="Save"/>
	 <input type="button" value="Cancel"/>
      </div>
   </form>	
	</body>
</html>