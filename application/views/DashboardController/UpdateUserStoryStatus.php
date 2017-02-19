<html>
<style>
body { 
background-image:url("http://localhost/CI/image/bg2.jpg"); 
color: #ffffff 		
}
</style>
<body>

	<?php //echo form_open('DashboardController/UpdateUserStoryStatus'); ?>
	<div align="center">
     <h1>ADD USERSTORY</h1>
	 <form method="post" action="<?php $_SERVER['PHP_SELF']?>">
	 <table cellspacing="10pt">
		<tr>
		<td>Story id:</td>
     	<td><input type="text" size="20" id="storyidid" name="storyid"  value="<?php echo "$story_Id"; ?>" disabled/>
	 	
		</tr>
		<tr>
    	<td>Story Name :</td>
     	<td><input type="text" size="20" id="storyidname" name="storyname" value="<?php echo "$story_Name"; ?>"  disabled/>
	 	
		</tr>
		<tr>
		<td>User Story :
     	<td><textarea id="userstory" name="userstory"  disabled><?php echo "$userStory"; ?></textarea>
		
		</tr>
		<td>User Story Status:
     	<td><select name="userStory_Status" id="userStory_Status" >
			<option name="To do" value="0" <?php if ($status=='0') {echo "selected='selected'";}?>>To do</option>
			<option name="In progress" value="1" <?php if ($status=='1') echo "selected='selected'";?>>In progress</option>
			<option name="Completed" value="2" <?php if ($status=='2'){ echo "selected='selected'";}?>>Completed</option>
			<option name="Unplanned" value="3" <?php if ($status=='3') echo "selected='selected'";?>>Unplanned</option>
			<option name="Cancelled" value="4" <?php if ($status=='4') echo "selected='selected'";?>>Cancelled</option>
			</select>
		
		</tr>
	 
     </table>
	 
	 <br>
	 <br>
     <input type="submit" value="Save" style="color: #FFFFFF;  background-color: #72A4D2;"/>
	 <input type="button" value="Cancel" style="color: #FFFFFF;  background-color: #72A4D2;"/>
      </div>
   </form>	
	</body>
</html>