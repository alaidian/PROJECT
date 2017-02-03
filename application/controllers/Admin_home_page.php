<?php
	 class Admin_home_page extends CI_Controller
	{
		public function index()
		{
			
		//$this->load->view('admin_home_page');
		$this->load->model('admin_home_model');
		$result=$this->admin_home_model->display_users();
		echo "<table border='border' align='center'><tr><th>User ID</th><th>User Name</th><th>Email_Id</th><th>User Status</th><th>Edit</th><th>Delete</th></tr>";
		if($result)
		{
		
			foreach($result as $row)
			{
			echo "<tr><td>".$row->User_ID."</td><td>";
			echo $row->User_Name."</td><td>";
			echo $row->Email_ID."</td><td>";
			echo $row->User_Status.'</td><td><img src="edit1.jpg"/></td><td><img src="delete_user.jpg"/></td></tr>';
         	}//foreach
		}//if
		echo "</table>";
		}//fn
		
	}//class
?>