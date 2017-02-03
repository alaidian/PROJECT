<?php
class ProductBacklog
{
	var $Project_ID,$User_ID;
	  function insertProductBacklog()
		{}
	  function updateProductBacklog()
	{}
	  function deleteProductBacklog()
	{}
	
}

class ProjectDetail
{
	var $Project_ID,$Project_Name,$Project_Status;
	
	  function insertProjectDetail()
	{
	echo "Hello";}
	  function retrieveProjectDetail()
	{}
	  function updateProjectDetail()
	{}
	  function deleteProject()
	{}

}
class UserDetail
{
	var $User_ID,$User_name,$User_Status,$Email_ID,$Password;
	  function insertUserDetail($User_ID,$User_Name,$User_Status,$Email_ID,$Password)
	{
		$this->load->model('insert_user_model');
		$data=array('User_Id'=>$User_ID,'User_name'=>$User_Name,'Email_ID'=>$Email_ID,'Password'=>$Password,'User_Status'=>1);
	
		$this->insert_user_model->form_insert($data);
		}
	  function checkUserDetail()
	{}
}
class MobileLoginPage
{
var $username,$password;
	  function displaySucessMessage()
	{}
	  function buttonMobileLogin_clk()
	{}
	
	
}
class UserStoryDetail
{
var $Project_ID,$Story_ID,$Story_Name,$UserStory,$Size,$UserStory_Status,$Priority,$Sprint_Number,$Release_Number,$Use_case_ID,$Remarks;
	  function insertUserStoryDetail()
	{
		$this->load->model('insert_user_story_model');
		$data=array('Project_ID'=>$Project_ID,'Story_ID'=>$Story_ID,'Story_Name'=>$Story_Name,'UserStory'=>$UserStory,'Size'=>$Size,'UserStory_Status'=>$UserStory_Status,'Priority'=>$Priority,'Sprint_Number'=>$Sprint_Number,'Release_Number'=>$Release_Number,'Use_case_ID'=>$Use_case_ID,'Remarks'=>$Remarks);
		$this->insert_user_model->form_insert($data);
	}
	  function retrieveUserStoryDetail()
	{}
	  function updateUserStoryDetail()
	{}
	  function deleteUserStoryDetail()
	{}
	  function readUserStories()
	{}


}
class TaskDetail
{
var $Project_ID,$Story_ID,$Task_ID,$Task_Description,$Assigned_To,$Estimated_Hours,$Remaining_Hours,$Task_Status;
	  function checkForTask()
	{}
	  function readTaskDetail()
	{}
	  function insertTaskDetail()
	{}
	  function updateTaskDetail()
	{}
	  function deleteTaskDetail()
	{}
	  function updateTaskStatus()
	{}
	  function updateRemaningHours()
	{}
}
class EmployeeHomePage
{
var $Project_ID,$Project_Name,$Project_Status,$User_ID;
	  function displayEmployeeHomePage()
	{}
	  function selectProject_clk()
	{}
	  function viewProductBacklog_clk()
	{}
	  function buttonViewDashBoard()
	{}
}
class listProjectsForm//mobile
{
var $Project_ID,$Project_Name,$Project_Status,$User_ID;
  function button_ViewDashboard_clk()
	{}
}

  
function empid_exists($storyid)
		{
		$this->load->model('user_reg_model');
		$result = $this->user_reg_model->search($uid);
 
			if($result)
			{
			$this->form_validation->set_message('storyid_exists', 'The story  ID already exists');
			return FALSE;
			}
			else
			{
		
			return TRUE;
			}
		}
}
  class EditUserStoryForm
{
var $Project_ID,$Story_ID,$Story_Name,$UserStory,$UserStory_Status,$Size,$Priority,$Sprint_Number,$Release_Number,$Use_case_ID,$Remarks;
  function displayEditUserStoryForm()
{}
  function submitEditUserStoryForm()
{}
  function validateEditUserStoryForm()
{}
}
  class AdminHomePage
{
var $User_ID,$Project_ID;
	  function buttonAddNewUser_clk()
	{}
	  function displayAdminHomePage()
	{}
	  function buttonEditProject_clk()
	{}
	  function buttonDeleteProject_clk()
	{}
	  function promptForConfirmation()
	{}
	  function buttonDeleteUser_clk()
	{}
	  function buttonEditUserDeatail_clk()
	{}
}
  class UserRegistrationForm
{
	var $User_ID,$User_Name,$User_Status,$Password,$Email_ID;
	  function displayUserRegistrationForm()
	{}
	  function validateUserRegistrationForm()
	{}
	  function submitUserRegistrationForm()
	{}
	  function displaySucessMessage()
	{}
	  function closeForm()
	{}
}
  class CreateProjectForm
{
	var $Project_ID,$Project_Name,$Project_Status;
	  function displayCreateProjectForm()
	{}
	  function submitCreateProjectForm()
	{}
	  function validateProjectDetail()
	{}
	
}
  class EditProjectForm
{
	var $Project_ID,$Project_Name,$Project_Status;
	  function displayEditProjectForm()
	{}
	
	  function validateProjectDetail()
	{}
	
}
  class TeamMember
{
	var $User_ID,$Project_ID;
	  function insertTeamMember()
	{}
	  function updateTeamMember()
	{}
	  function deleteTeamMember()
	{}
	
	
}
  class EditUserDetailForm
{
	var $User_ID,$User_Name,$User_Status,$Email_ID,$Password;
	  function displayEditUserDetailForm()
	{}
	  function submitEditUserDetailForm()
	{}
	  function validateUserDetail()
	{}
}
  class EditTaskForm
{
	var $Project_ID,$Story_ID,$Task_ID,$Task_Description,$Assigned_To,$Estimated_Hours,$Remaining_Hours,$Task_Status;
	  function displayEditTaskForm()
	{}
	  function submitEditTaskForm()
	{}
	  function validateTaskDetail()
	{}
}
  class ViewTaskForm
{
	var $Project_ID,$Story_ID,$Task_ID,$Task_Description,$Assigned_To,$Estimated_Hours,$Remaining_Hours,$Task_Status;
	  function displayViewTaskForm()
	{}
}	
  class AddTaskForm
{
	var $Project_ID,$Story_ID,$Task_ID,$Task_Description,$Assigned_To,$Estimated_Hours,$Remaining_Hours,$Task_Status;
	  function displayAddTaskForm()
	{}
	  function submitEditAddForm()
	{}
	  function validateTaskDetail()
	{}
}	
  class WebLoginPage
{
		var $username,$password;
		  function buttonLogin_clk()
		{}
}
  class ViewProjectDetailForm
{
		var $Project_ID,$Project_Name,$Project_Status;
		  function displayViewProjectDetailForm()
		{}
}
 
  class ViewDashboardPageMobile
{
	 var $Project_ID,$Story_ID,$Task_ID,$Assigned_To,$Estimated_Hours,$Remaining_Hours,$Task_Status;
	   function displayViewDashboardPageMobile()
	 {}
}
 
  class ViewDashboardPage//web
{
	var $Project_ID,$Story_ID,$Task_ID,$Task_Description,$Assigned_To,$Estimated_Hours,$Remaining_Hours,$Task_Status;
	  function displayViewDashboardPage()
	{}
}
  

?>