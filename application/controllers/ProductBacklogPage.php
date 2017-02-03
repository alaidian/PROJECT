<?php
include('AddUserStoryForm.php');
 class ProductBacklogPage extends AddUserStoryForm
{
	var $Project_ID,$Story_ID,$Task_ID,$Task_Description,$Assigned_To,$Estimated_Hours,$Remaining_Hours,$Task_Status,$UserStory,$UserStory_Description,$Size,$UserStory_Status,$Priority,$Sprint_Number,$Release_Number,$Use_case_ID,$Remarks;
	 // function buttonAddUserStory_clk()
	 function index() 
	{

		$obj=new AddUserStoryForm();
		$obj->index();

		
		
	$this->load->view('product_backlog');
	$this->load->model('product_backlog_model');
		$result=$this->product_backlog_model->display_userstories(); 
           echo "<h1 align='center'>PRODUCT BACKLOG</h1>";


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
			echo $row->Remarks.'</td><td><img src="../image/edit1.png" height="10" width="10" /></td><td><img src="../image/delete_user.jpg" height="10" width="10"/></td><td><img src="../image/add.png" height="10" width="10"/></td></tr>';
			
         	}//foreach

		}//if
		echo "</table>";
	echo "<input type='checkbox' name='checkbox' />Show Task";

echo "<img src='../image/dashboard.jpg' align='right' height='50' width='50'/>";



echo "<img src='../image/addtask.jpg' align='right' height='50' width='50'/>";

	}
	  function displayProductBacklogPage()
	{
	
	
		

	}
	  function buttonEditUserStory_clk()
	{}
	  function buttonDeleteUserStory_clk()
	{}
	  function buttonDeleteTask_clk()
	{}
	  function promptForConfirmation()
	{}
	  function displayErrorMessage()
	{}
	  function buttonEditTask_clk()
	{}
	  function checkboxShowTask()
	{}
	
}
?>