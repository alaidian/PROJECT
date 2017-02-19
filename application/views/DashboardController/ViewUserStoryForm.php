<html>
	<head>
	<title>VIEW USER STORY</title>
	<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}



</style>
	
	</head>
	<body>
	
           <h1 align='center'>VIEW USER STORY</h1>
		
<form method="post" action="<?php $_SERVER['PHP_SELF']?>">
<div align="center">
<?php

		$this->load->model('UserStoryDetail');
		$uid=$this->session->userdata('uid');
		$result=$this->UserStoryDetail->single_Userstory($uid); 
		echo "<div class='w3-white'><table class='table table-striped table-hover table-bordered' border='border' align='center'  border='border' align='center' >";
		if($result)
		{

			echo "<tr><th>Story ID</th><td>";
			echo $result->Story_ID."</td></tr>";
			echo "<tr><th>Story Name</th><td>";
			echo $result->Story_Name."</td></tr>";
			echo "<tr><th>User Story</th><td>";
			echo $result->User_Story."</td></tr>";
			echo "<tr><th>Size</th><td>";
			echo $result->Size."</td></tr>";
			echo "<tr><th>Status</th><td>";
			echo $result->User_Story_Status."</td></tr>";
			echo "<tr><th>Priority</th><td>";
			echo $result->Priority."</td></tr>";
			echo "<tr><th>Sprint Number</th><td>";
			echo $result->Sprint_Number."</td></tr>";
			echo "<tr><th>Release Number</th><td>";
			echo $result->Release_Number."</td></tr>";
			echo "<tr><th>Use Case ID</th><td>";
			echo $result->Use_Case_ID."</td></tr>";
			echo "<tr><th>Remarks</th><td>";
			echo $result->Remarks."</td></tr>";
				
         	

		}//if
		

	


	
	
	echo "</table></div>";

?>
</br>

</div>

	</form>
	<div align="center">
	<a href="http://localhost/CI/DashboardController/index"><input type="submit" value="OK" style="color: #FFFFFF;  background-color: #72A4D2;" /></a>
	</div>

	</body>
</html>
