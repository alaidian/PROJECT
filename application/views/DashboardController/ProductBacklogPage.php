<! View for Product Backlog Page Written by: Divya>
<html>
	<head>
	<title>PRODUCT BACKLOG</title>
	<style>




</style>
	
	</head>
	<body class="w3-grey" style="background-image:url('http://localhost/CI/image/bg.jpg');background-repeat:no-repeat;background-size:cover;">
				<div class="w3-white">
				<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>
	<form>
	
           <h1 align='center'>PRODUCT BACKLOG</h1>
		   <br/><br/>

<?php
		$this->load->library('session');
		$this->load->model('UserStoryDetail');
		$SID=$this->session->userdata('SID');
		$result=$this->UserStoryDetail->display_userstories(); 
		echo "<table class='table table-striped table-hover table-bordered' border='border' align='center' ><tr><th>Story ID</th><th>Story Name</th><th>User Story Description</th><th>Priority</th><th>Size</th><th>Status</th><th>Release No</th><th>Sprint No</th><th>User Case ID</th><th>Remarks</th><th>Edit</th><th>Delete</th><th>Add Task</th></tr>";
		
		if($result)
		{

			foreach($result as $row)
			{
			//$_SESSION[‘UserStory_ID’] = $row->Story_ID;
			echo "<tr><td><a href='http://localhost/CI/DashboardController/selectGivenUserStory/$row->Story_ID'>".$row->Story_ID."</a></td><td>";
			if($SID===0)
			{
			echo "<a href='http://localhost/CI/DashboardController/productBacklogPage/$row->Story_ID'>".$row->Story_Name."</a></td><td>";
			}
			else
			{
				echo "<a href='http://localhost/CI/DashboardController'>".$row->Story_Name."</a></td><td>";
			}
			echo $row->User_Story."</td><td>";
			echo $row->Size."</td><td>";
			echo $row->User_Story_Status."</td><td>";
			echo $row->Priority."</td><td>";
			echo $row->Sprint_Number."</td><td>";
			echo $row->Release_Number."</td><td>";
			echo $row->Use_Case_ID."</td><td>";
			echo $row->Remarks."</td><td><img src='http://localhost/CI/image/edit_userstory.jpe' height='10' width='10' /></td><td><img src='http://localhost/CI/image/delete_userstory.png' height='10' width='10'/></td><td><a href='http://localhost/CI/DashboardController/addTaskForm'><img src='http://localhost/CI/image/add_task.jpe' height='10' width='10'/></a></td></tr>";
			if($row->Story_ID===$SID)
			{
				$this->load->model('TaskDetail');
				$result1=$this->TaskDetail->display_task(); 
				echo "<tr><th></th><th>Task ID</th><th>Task Description</th><th>Estimated Hours</th><th>Assigned To</th><th>Status</th><th>Remaining Hours</th><th>Edit</th><th>Delete</th><th></th><th></th><th></th><th></th></tr>";
				if($result1)
				{

					foreach($result1 as $row)
					{
			
					echo "<tr><td></td>";
					echo "<td>".$row->Task_ID."</td><td>";
					echo $row->Task_Description."</td><td>";
					echo $row->Estimated_Hours."</td><td>";
					echo $row->Assigned_To."</td><td>";
					echo $row->Task_Status."</td><td>";
					echo $row->Remaining_Hours."</td><td><a href='http://localhost/CI/DashboardController/editTaskForm/$row->Task_ID' data-toggle='tooltip' title='Edit Task' ><img src='http://localhost/CI/image/edit_task.jpe'  height='10' width='10' /></a></td><td><img src='http://localhost/CI/image/delete_task.png' data-toggle='tooltip' title='Delete Task'height='10' width='10'/></td></td>";
					echo "<td></td>";
					echo "<td></td>";
					echo "<td></td>";
					echo "<td></td></tr>";
					
				}//foreach
				}
				echo "<tr><th>Story ID</th><th>Story Name</th><th>User Story Description</th><th>Priority</th><th>Size</th><th>Status</th><th>Release No</th><th>Sprint No</th><th>User Case ID</th><th>Remarks</th><th>Edit</th><th>Delete</th><th>Add Task</th></tr>";
			}//if
			}//foreach
		}//if
			
		echo "</table>";
	echo "<input type='checkbox' name='checkbox' />Show Task";

echo "<a href='http://localhost/CI/DashboardController/viewDashboard' data-toggle='tooltip' title='View Dashboard'text='Click here'><img src='http://localhost/CI/image/dashboard.jpe' align='right' height='50' width='50'/></a>";



echo "<a data-toggle='tooltip' title='Add UserStory'href='http://localhost/CI/DashboardController/addUserStoryForm'><img src='http://localhost/CI/image/add_userstory.jpe'  align='right' height='50' width='50'/></a>";


	
?>	

	
	
	</table>

	</form>
	</div>
	</body>
</html>
