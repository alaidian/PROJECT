<?php
//include('class_dia.php');
class DashboardController extends CI_Controller
{
	 var $Project_ID,$Project_Name,$Project_Status,$Story_ID,$Story_Name,$UserStory,$UserStory_Status,$Size,$Priority,$Sprint_Number,$Release_Number,$Use_case_ID,$Task_ID,$Task_Description,$Assigned_To,$Estimated_Hours,$Remaining_Hours,$Task_Status;
	  function index()
	  {
		$this->load->library('session');
		$_SESSION['SID']=0;
		$this->load->model('UserStoryDetail');
		$this->load->model('TaskDetail');
		$result=$this->UserStoryDetail->display_UserStories(); 
		$this->load->view('templates/header');
		$this->load->view('DashboardController/ProductBacklogPage');
		$this->load->view('templates/footer');
		
		}
		function productBacklogPage($SID)
		{
		$this->load->library('session');
		$_SESSION['SID']=$SID;
		$data['SID']=$SID;
		$this->load->model('TaskDetail');
		$this->load->model('UserStoryDetail');
		$this->load->model('TaskDetail');
		$result=$this->UserStoryDetail->display_UserStories(); 
		$this->load->view('templates/header');
		$this->load->view('DashboardController/ProductBacklogPage',$data);
		$this->load->view('templates/footer');
		}
		function addUserStoryForm()
		{
			$data['title']='Add UserStory Form';
			$this->load->model('UserStoryDetail');
		$this->validateAddUserStoryForm();
		}
		
		function saveTaskDetail()
		{
		$Project_ID='P009';
		$Story_ID='ST_002';
		$task=$this->input->post('taskid');
		$Task_Description=$this->input->post('taskdescription');
		$Estimated_Hours=$this->input->post('estimatedhours');
		$Assigned_To=$this->input->post('assignedto');
		$Task_ID=$Story_ID.'_'.$task;
		$data1=array('Project_ID'=>$Project_ID,'User_Id'=>$Assigned_To);
		$data=array('Project_ID'=>$Project_ID,'Story_ID'=>$Story_ID,'Task_ID'=>$Task_ID,'Task_Description'=>$Task_Description,'Assigned_To'=>$Assigned_To,'Estimated_Hours'=>$Estimated_Hours,'Remaining_Hours'=>$Estimated_Hours,'Task_Status'=>0);
		$this->load->model('TeamMember');
		$this->TeamMember->insert($data1);
		$this->load->model('TaskDetail');
		$this->TaskDetail->insert($data);
		}
	   function saveUserStoryDetail()
		{
		$this->load->model('UserStoryDetail');
		$Project_ID="P008";
		$Story_ID=$this->input->post('storyid');
		$Story_Name=$this->input->post('storyname');
		$UserStory=$this->input->post('userstory');
		$UserStory_Status=1;
		$Priority=$this->input->post('priority');
		$Size=$this->input->post('size');

		$Sprint_Number=$this->input->post('sprintno');
		$Release_Number=$this->input->post('releaseno');
		$Use_case_ID=$this->input->post('usecase');
		$Remarks=$this->input->post('remarks');
		$data=array('Project_ID'=>$Project_ID,'Story_ID'=>$Story_ID,'Story_Name'=>$Story_Name,'User_Story'=>$UserStory,'User_Story_Status'=>$UserStory_Status,'Size'=>$Size,'Priority'=>$Priority,'Sprint_Number'=>$Sprint_Number,'Release_Number'=>$Release_Number,'Use_case_ID'=>$Use_case_ID,'Remarks'=>$Remarks);
		$this->UserStoryDetail->insert($data);
		
		}
	  function validateAddUserStoryForm()
		{
			$this->load->helper('form');
			$this->load->library('form_validation');
			//validation rules
			$this->form_validation->set_rules('storyid', 'Story id', 'trim|required|callback_storyid_exists');
			$this->form_validation->set_rules('storyname', 'Story Name', 'trim|required');
			
			$this->form_validation->set_rules('userstory', 'UserStory', 'trim|required');
			$this->form_validation->set_rules('size', 'Size', 'trim|integer');
			$this->form_validation->set_rules('priority', 'Priority', 'trim');
			$this->form_validation->set_rules('releaseno', 'Release Number', 'trim');
			$this->form_validation->set_rules('sprintno', 'Sprint Number', 'trim');
			$this->form_validation->set_rules('usecase', 'Use Case', 'trim');
			$this->form_validation->set_rules('remarks', 'Remarks', 'trim');
			//$this->form_validation->set_message('required', 'Mandatory fields are empty');
			if ($this->form_validation->run() == FALSE)
			
				{
					$this->load->view('templates/header');
					$this->load->view('DashboardController/addUserStoryForm');
					$this->load->view('templates/footer');
				}	
			else
				{
				$this->saveUserStoryDetail();
				$this->load->view('templates/header');
				redirect('DashboardController/index');
				//$this->load->view('DashboardController/index');
				$this->load->view('templates/footer');
				}
}

		function storyid_exists($storyId)
		{
		
 
		$this->load->model('UserStoryDetail');
		$Project_ID="P008";
		$result = $this->UserStoryDetail->search($storyId,$Project_ID);
		if($result===TRUE)
			{
			$this->form_validation->set_message('storyid_exists', 'The given Story ID already exists ');
			return FALSE;
			}
		else
			{
			return TRUE;
			}
		}

	   function ifTaskExists()
	 {}
	   function selectGivenUserStory($uid)
	 {
		 //echo "$uid";
		 $this->load->library('session');
		$_SESSION['uid']=$uid;
		$this->load->model('UserStoryDetail');
		$result=$this->UserStoryDetail->single_Userstory($uid); 
		$this->load->view('templates/header');
		$this->load->view('DashboardController/ViewUserStoryForm');
		$this->load->view('templates/footer');
	 }
	   function Login()
	 {}
	   function getNewStatus()
	 {}
	   function selectGivenProject()
	 {}
	   function getDashboardDetails()
	 {}
	   function selectGivenTask()
	 {}
	   function remainingHours_dblclk()
	 {}
	   function selectGivenUserDetail($uid)
	 {
		//$uid = $this->session->userdata('UserStory_ID');
		
		}
	  function validateAddTaskForm()
	{
			$this->load->helper('form');
			$this->load->library('form_validation');
			//validation rules
			$this->form_validation->set_rules('taskid', 'Task id', 'trim|required|alpha_dash');
			$this->form_validation->set_rules('taskdescription', 'Task Description', 'trim|required');
			$this->form_validation->set_rules('estimatedhours', 'Estimated hours', 'trim|required|integer');
			$this->load->model('UserDetail');
			//$this->form_validation->set_message('required', 'Mandatory fields are empty');
			if ($this->form_validation->run() == FALSE)
			
				{
					//redirect('home');
					$this->load->view('templates/header');
					$this->load->view('DashboardController/addTaskForm');
					$this->load->view('templates/footer');
				}	
			else
				{
				$this->saveTaskDetail();
				$this->load->view('templates/header');
				redirect('DashboardController/index');
				$this->load->view('templates/footer');
				
				}
	}
	function updateTaskDetail($tid)
		{
		$Project_ID='P008';
		$Story_ID='ST_002';
		
		//$task=$this->input->post('taskid');
		$Task_Description=$this->input->post('taskdescription');
		$Estimated_Hours=$this->input->post('estimatedhours');
		$Assigned_To=$this->input->post('assignedto');
		$Remaining_Hours=$this->input->post('remaininghours');
		$Task_status=$this->input->post('taskstatus');
		
		$data1=array('Project_ID'=>$Project_ID,'User_Id'=>$Assigned_To);
		$data=array('Project_ID'=>$Project_ID,'Story_ID'=>$Story_ID,'Task_Description'=>$Task_Description,'Assigned_To'=>$Assigned_To,'Estimated_Hours'=>$Estimated_Hours,'Remaining_Hours'=>$Remaining_Hours,'Task_Status'=>$Task_status);
		//$this->load->model('TeamMember');
		//$this->TeamMember->updata($data1);
		$this->load->model('TaskDetail');
		$yes=$this->TaskDetail->update($data,$tid);
		
		
		}
	 function validateEditTaskForm($tid)
	{
			$this->load->helper('form');
			$this->load->library('form_validation');
			//validation rules
			$this->load->model('TaskDetail');
			
			$result=$this->TaskDetail->single_taskDetail($tid);
			
			
			$this->form_validation->set_rules('taskdescription', 'Task Description', 'trim|required');
			$this->form_validation->set_rules('estimatedhours', 'Estimated hours', 'trim|required|integer');
			$this->form_validation->set_rules('remaininghours', 'Remaining hours', 'trim|required|integer');
			$this->load->model('UserDetail');
			//$this->form_validation->set_message('required', 'Mandatory fields are empty');
			if ($this->form_validation->run() == FALSE)
			
				{
					//redirect('home');
					$this->load->view('templates/header');
					$this->load->view("DashboardController/editTaskForm");
					$this->load->view('templates/footer');
				}	
			else
				{
				//$this->submitAdduserStoryForm();
				$this->updateTaskDetail($tid);
				 $this->load->view('templates/header');
				redirect('DashboardController/index');
				//$this->load->view('DashboardController');
				$this->load->view('templates/footer');
				
				}
	}
	function editTaskForm($tid)
	{
	$this->load->model('TaskDetail');
	$result=$this->TaskDetail->single_taskDetail($tid); 
	$data['title']='Edit Task Form';
	$_SESSION['tid']=$tid;	
	$this->validateEditTaskForm($tid);
	
	}
	function viewDashboard()
	{
		$this->load->model('UserStoryDetail');
		$this->load->model('TaskDetail');
		$result=$this->UserStoryDetail->display_UserStories();
	$this->load->view('templates/header');
	$this->load->view('DashboardController/ViewDashboard');
	$this->load->view('templates/footer');
	}
	
	function addTaskForm()
	{
	$data['title']='Add Task Form';
	$this->validateAddTaskForm();
	//$this->load->view('AddTaskForm');
	}
	function submitUpdateUserStoryForm()
	{
	
	$this->load->model('UserStoryDetail');
	$project_Id="P008";
	$story_Id="ST_002";
	$userStory_Status=$this->input->post('userStory_Status');
	$ret=$this->UserStoryDetail->insert_userStoryStatus($userStory_Status,$project_Id,$story_Id);
	echo " $ret";
	}
	function updateUserStoryStatus()
	{
	$data['title']='Update UserStory Status';	
	$project_Id="P008";
	$story_Id="ST_002";
	$story_Name=$userStory=$userStory_Status=" ";
	$this->load->model('UserStoryDetail');
	$ret = $this->UserStoryDetail->retreiveDetails($project_Id,$story_Id);
   $story_Name=$ret->Story_Name;
   $userStory=$ret->User_Story;
   $userStory_Status=$ret->User_Story_Status;
	switch($userStory_Status)
	{
	case 0:$status=0;
			break;
	case 1:$status=1;
			break;
	case 2:$status=2;
			break;
	case 3:$status=3;
			break;
	case 4:$status=4;
			break;
	}
	$data = array('story_Id' => $story_Id,'story_Name'=>$story_Name,'userStory'=>$userStory,'userStory_Status'=>$userStory_Status,'status'=>$status);
	$this->load->helper('form');
	$this->load->view('templates/header');
	$this->load->view('DashboardController/updateUserStoryStatus', $data);
	$this->load->view('templates/footer');
	if($this->submitUpdateUserStoryForm()==true)
		{
		//echo "yes";
		redirect('DashboardController/index');
		}
	
	}
	
}
?>