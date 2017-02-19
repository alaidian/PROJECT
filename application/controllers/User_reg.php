<?php
<<<<<<< HEAD
//include('class_dia.php');
=======
include('class_dia.php');
>>>>>>> 68a1186b0b4b1e67e2c4408b87da58ab2aa416cc
	 class Admin_controller extends CI_Controller
	{
		public function index()
		{
			$ob=new ProjectDetail();
			$ob->insertProjectDetail();
			$this->load->helper('form');
			$this->load->library('form_validation');
			//validation rules
			$this->form_validation->set_rules('empid', 'Employee id', 'trim|required|alpha_dash|callback_empid_check|callback_empid_exists');
			$this->form_validation->set_rules('empname', 'Name', 'trim|required');
			
			$this->form_validation->set_rules('empemail', 'Email', 'trim|required|valid_email');
			//$this->form_validation->set_message('required', 'Mandatory fields are empty');
			if ($this->form_validation->run() == FALSE)
			
			{
			$this->load->view('user_reg');
			}
			else
			{
				$this->load->model('insert_user_model');
				$pswd=rand(1000,9999);
				
				
				$result = $this->user_reg_model->search($pswd);
				while($result)
				{
					$pswd=rand(1000,9999);
					$result = $this->user_reg_model->search($pswd);
				}
				//INSERT CODE FOR EMAIL
				
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
				$this->email->message("Greetings $name!! .Your username is :$user and password is :$pswd");	
				if($this->email->send()) 
				{
				//echo "Email sent successfully.";
				$data=array('User_Id'=>$this->input->post('empid'),'User_name'=>$this->input->post('empname'),'Email_ID'=>$this->input->post('empemail'),'Password'=>$pswd,'User_Status'=>0);
				$this->insert_user_model->form_insert($data);
				$date['message']='Data inserted sucessfully';
			
				$this->load->view('admin_home_page');
				}				
				else 
				{
				echo "Error in sending Email.";
				show_error($this->email->print_debugger());
				}
				
				
			}
			
		}
		public function empid_check($str)
		{
		if (!preg_match("/^EM/", $str)&&!preg_match("//",$str))
		{
			$this->form_validation->set_message('empid_check', 'Enter an employee id that starts  with EM');
			return FALSE;
		}
		else
		{
			return TRUE;
		}
		}
		public function empid_exists($uid)
		{
		
   
		//$username = $this->input->post('username');
 
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