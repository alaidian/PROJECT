
	
<h1 align='center'>USERS</h1>
<table border='border' align='center'><tr><th>User ID</th><th>User Name</th><th>Email_Id</th><th>User Status</th><th>Edit</th><th>Delete</th></tr>
<?php
//modified by Anne
//include('UserDetail');
//$obj=new UserDetail();
//$result=$obj->display_users();
$this->load->model('UserDetail');
$result=$this->UserDetail->display_users(); 
if($result)
		{
		
			foreach($result as $row)
				{
					echo "<tr><td>".$row->User_ID."</td><td>";
					echo $row->User_Name."</td><td>";
					echo $row->Email_ID."</td><td>";
					echo $row->User_Status.'</td><td><img src="../image/edit1.png" height="10" width="10"/></td><td><img src="../image/delete_user.jpg"height="10" width="10"/></td></tr>';
				}//foreach
			}//if
		echo "</table>";
		echo "<a href='http://localhost/CI/AdminController/addUserDetail'><img src='../image/add_user.jpg'  align='right' height='50' width='50'/></a>";
					
?>