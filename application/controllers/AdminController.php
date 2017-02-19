 <?php
 
 class AdminController extends CI_Controller
{
	var $User_ID,$User_Name,$User_Status,$Project_ID,$Project_Name,$Project_Status;
	private $Email_ID,$Password;

	function index()
		{
		$this->load->model('UserDetail');
		$result=$this->UserDetail->display_users(); 
		$this->load->view('templates/header');
		$this->load->view('AdminController/index');
		$this->load->view('templates/footer');	
			
		}
	function addUserDetail()
	{
	$this->load->helper('form');
			$this->load->library('form_validation');
			//validation rules
			$this->form_validation->set_rules('empid', 'Employee id', 'trim|required|callback_empid_exists');
			$this->form_validation->set_rules('empname', 'Name', 'trim|required');
			
			$this->form_validation->set_rules('empemail', 'Email', 'trim|required|valid_email');
			//$this->form_validation->set_message('required', 'Mandatory fields are empty');
			if ($this->form_validation->run() == FALSE)
			
			{
			$this->load->view('templates/header');
			$this->load->view('AdminController/addUserDetail');
			$this->load->view('templates/footer');	
			
			}
			else
			{
				$Password=$this->generatePassword();
				if($this->sendEmail($Password))
				{
				$this->load->view('templates/header');
				$this->load->view('AdminController/index');
				$this->load->view('templates/footer');	
				}
				else 
				{
				echo "Error in sending Email.";
				show_error($this->email->print_debugger());
				}
			}
	
	}

	  function generatePassword()
	{
		$this->load->model('UserDetail');
				$pswd=rand(1000,9999);
				
				$result = $this->UserDetail->search($pswd);
				while($result)
				{
					$pswd=rand(1000,9999);
					$result = $this->UserDetail->search($pswd);
				}
				return $pswd;
	}
	  function sendEmail($Password)
	{
				$config['protocol'] = 'smtp';
				$config['smtp_host'] = 'ssl://smtp.googlemail.com';
				$config['smtp_port'] = 465;//587
				$config['smtp_user'] = 'alaidianrset@gmail.com';
				$config['smtp_pass'] = 'MINIPROJECT';
				$config['mailtype'] = 'html';
				
				$config['charset'] = 'iso-8859-1';
				$config['wordwrap'] = TRUE;

				
				$this->load->library('email');
				$this->email->initialize($config);
				$this->email->set_newline('\r\n');
				$this->email->from('alaidianrset@gmail.com', 'Alaidian');
				$to_email = $this->input->post('empemail'); 
				$this->email->to($to_email);
				$name=$this->input->post('empname');
				$user=$this->input->post('empid');
				$this->email->subject('Agile Scrum Dashboard Account created sucessfully');
				$this->email->message("Greetings $name!! .Your username is :EM$user and password is :$Password");	
				if($this->email->send()) 
				{
					$this->saveUserDetail($Password);
					return TRUE;
				}
	}
	  function selectGivenProject()
	{}
	  function selectGivenUser()
	{}
	  function saveUserDetail($Password)
	{
		
		$User_ID='EM'.$this->input->post('empid');
		$User_Name=$this->input->post('empname');
		$Email_ID=$this->input->post('empemail');
		$data=array('User_ID'=>$User_ID,'User_Name'=>$User_Name,'Email_ID'=>$Email_ID,'Password'=>$Password,'User_Status'=>1);
		$this->load->model('UserDetail');
		$this->UserDetail->insertUserDetail($data);
		
		
	}
	  function saveProjectDetail()
	{}
	function empid_exists($uid)
		{
		$this->load->model('UserDetail');
		$result = $this->UserDetail->search($uid);
 
			if($result)
			{
			$this->form_validation->set_message('empid_exists', 'The given employee ID already exists');
			return FALSE;
			}
			else
			{
		
			return TRUE;
			}
		}
}
?>