<?php
class AddUserStoryForm extends CI_Controller
{
	
var $Project_ID,$Story_ID,$Story_Name,$UserStory,$UserStory_Status,$Size,$Priority,$Sprint_Number,$Release_Number,$Use_case_ID,$Remarks;
  //function displayAddUserStoryForm()
  function index()
{
	$this->load->helper('form');
	$this->load->library('form_validation');
	$this->load->library('session');
	//$this->load->view('add_user_story_page');
	$this->validateAddUserStoryForm();
	
}
  function submitAddUserStoryForm()
{
	
	$this->load->model('user_story_model');
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
	$this->user_story_model->form_insert($data);
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
					$this->load->view('add_user_story_page');
				}	
			else
				{
				$this->submitAddUserStoryForm();
				$this->load->view('product_backlog');
				}
}

function storyid_exists($storyId)
		{
		
 
		$this->load->model('user_story_model');
		$Project_ID="P008";
		$result = $this->user_story_model->search($storyId,$Project_ID);
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
}
?>