<! View for Product Backlog Page Written by: Divya>
<html>
	<head>
	<title>PRODUCT BACKLOG</title>
	<link href="../template/default.css" rel="stylesheet" type="text/css" media="all" />
	</head>
	<body>
	<form>
           <h1 align='center'>PRODUCT BACKLOG</h1>

<?php
		
		$this->load->model('UserStoryDetail');
		$result=$this->UserStoryDetail->display_userstories(); 
		echo "<table border='border' align='center' ><tr><th>Story ID</th><th>Story Name</th><th>User Story Description</th><th>Priority</th><th>Size</th><th>Status</th><th>Release No</th><th>Sprint No</th><th>User Case ID</th><th>Remarks</th><th>Edit</th><th>Delete</th><th>Add Task</th></tr>";
		if($result)
		{

			foreach($result as $row)
			{

			echo "<tr><td>".$row->Story_ID."</td><td>";
			echo $row->Story_Name."</td><td>";
			echo $row->User_Story."</td><td>";
			echo $row->Size."</td><td>";
			echo $row->User_Story_Status."</td><td>";
			echo $row->Priority."</td><td>";
			echo $row->Sprint_Number."</td><td>";
			echo $row->Release_Number."</td><td>";
			echo $row->Use_Case_ID."</td><td>";
			echo $row->Remarks.'</td><td><img src="../image/edit1.png" height="10" width="10" /></td><td><img src="../image/delete_user.jpg" height="10" width="10"/></td><td><img src=".../image/add.png" height="10" width="10"/></td></tr>';
			
         	}//foreach

		}//if
		echo "</table>";
	echo "<input type='checkbox' name='checkbox' />Show Task";

echo "<img src='.../image/dashboard.jpg' align='right' height='50' width='50'/>";



echo "<img src='.../image/addtask.jpg' align='right' height='50' width='50'/>";


	
?>	

	
	
	</table>

	</form>
	</body>
</html>
