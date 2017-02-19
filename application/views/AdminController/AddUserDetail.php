
<html>
	<head>
			<title>USER REGISTRATION</title>
			<style>
			.error
			{
				color:#FF0000;
			}
			</style>
	</head>
	<body>
	<?php// echo form_open('../AdminController/addUserDetail'); ?>
	<form action = "<?php $_SERVER['PHP_SELF'] ?>" method = "post">
	<div align="center">
     <h1>USER REGISTRATION</h1>
	 <table cellspacing="10pt">
		<tr>
		<td>Employee id:</td>
     	<td><input type="text" size="20" id="empid" name="empid"  value="<?php echo set_value('empid'); ?>"/>
	 	<td><span class="error"><?php echo form_error('empid'); ?></span></td>
		</tr>
		<tr>
    	<td> Name :</td>
     	<td><input type="text" size="20" id="empname" name="empname" value="<?php echo set_value('empname'); ?>" />
	 	<td><span class="error"><?php echo form_error('empname'); ?></span></td>
		</tr>
		<tr>
		<td> Email :
     	<td><input type="text" size="20" id="empemail" name="empemail" value="<?php echo set_value('empemail'); ?>"/>
		<td><span class="error"> <?php echo form_error('empemail'); ?></span></td>
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