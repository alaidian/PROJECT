 <?php
 include('class_dia.php');
 class AdminController extends CI_Controller
{
	var $User_ID,$User_Name,$User_Status,$Project_ID,$Project_Name,$Project_Status;
	private $Email_ID,$Password;
	function index()
		{
			$ob=new ProjectDetail();
			$ob->insertProjectDetail();
			$this->load->helper('form');
			$this->load->library('form_validation');
			//validation rules
			$this->form_validation->set_rules('empid', 'Employee id', 'trim|required|callback_empid_exists');
			$this->form_validation->set_rules('empname', 'Name', 'trim|required');
			
			$this->form_validation->set_rules('empemail', 'Email', 'trim|required|valid_email');
			//$this->form_validation->set_message('required', 'Mandatory fields are empty');
			if ($this->form_validation->run() == FALSE)
			
			{
			$this->load->view('user_reg');
			}
			else
			{
				$Password=$this->generatePassword();
				if($this->sendEmail($Password))
				{
				$this->load->view('admin_home_page');
				$this->load->model('admin_home_model');
				$result=$this->admin_home_model->display_users();
				echo "<h1 align='center'>USERS</h1>";
				echo "<table border='border' align='center'><tr><th>User ID</th><th>User Name</th><th>Email_Id</th><th>User Status</th><th>Edit</th><th>Delete</th></tr>";
				if($result)
				{
		
					foreach($result as $row)
					{
					echo "<tr><td>".$row->User_ID."</td><td>";
					echo $row->User_Name."</td><td>";
					echo $row->Email_ID."</td><td>";
					echo $row->User_Status.'</td><td><img src="../images/edit1.png" height="10" width="10"/></td><td><img src="../images/delete_user.jpg"height="10" width="10"/></td></tr>';
					}//foreach
			}//if
		echo "</table>";
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
		$this->load->model('insert_user_model');
				$pswd=rand(1000,9999);
				
				$result = $this->user_reg_model->search($pswd);
				while($result)
				{
					$pswd=rand(1000,9999);
					$result = $this->user_reg_model->search($pswd);
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
				$this->email->message("Greetings $name!! .Your username is :$user and password is :$Password");	
				if($this->email->send()) 
				{
					$this->saveUserDetail();
					return TRUE;
				};
	}
	  function selectGivenProject()
	{}
	  function selectGivenUser()
	{}
	  function saveUserDetail()
	{
		$ob=new UserDetail();
		$User_ID=$this->input->post('empid');
		$User_Name=$this->input->post('empname');
		$Email_ID=$this->input->post('empemail');
		$ob->insertUserDetail($User_ID,$User_Name,$User_Status,$Email_ID,$Password);
		$this->insert_user_model->form_insert($data);
		
	}
	  function saveProjectDetail()
	{}
	function empid_exists($uid)
		{
		$this->load->model('user_reg_model');
		$result = $this->user_reg_model->search($uid);
 
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