

<! View for product dashboard page
<html>
	<head>
	<title>DASHBOARD</title>
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
		textarea{ 
        background:  url(http://localhost/CI/image/sticky.png)  ;
        background-attachment:fixed;
        width: '9';
        height: '4';
        line-height:20px;
        padding:30px;
        text-indent:3px;
        margin:0;
        border: none;
    }


	</style>	
	</head>
	<form method="post" action="<?php $_SERVER['PHP_SELF']?>">
	<?php
	
	$this->load->model('UserStoryDetail');
	$result=$this->UserStoryDetail->display_userstories();
	$this->load->helper('url');		
		
		echo "<table  class='table table-striped table-hover w3-white'  align='center' ><tr><th>To Do</th><th>Ongoing</th><th>Completed</th><th></th></tr>
		";
			
			foreach($result as $row)
			{
			//echo "<td>".$row->Story_Name."<td></td><td></td>";
			$this->load->model('TaskDetail');
			$status=0;
			$todo=$this->TaskDetail->task_status($status,$row->Story_ID);
			$status=1;
			$progress=$this->TaskDetail->task_status($status,$row->Story_ID);
			$status=2;
			$completed=$this->TaskDetail->task_status($status,$row->Story_ID);
			//$status_progress=$this->TaskDetail->task_status('1',$row->Story_ID);
			//$status_completed=$this->TaskDetail->task_status('2',$row->Story_ID);
			echo "<tr>";
			if (is_array($todo) || is_object($todo))
			{
				echo "<td>";
				foreach($todo as $r)
				{
					echo "<textarea class=' w3-card-8' id='userstory' name='userstory' rows='4' cols='9'>$r->Task_ID \n $r->Assigned_To \n $r->Remaining_Hours</textarea> ";
				}
				echo "</td>";
			}
			if (is_array($progress) || is_object($progress))
			{
				echo "<td>";
				foreach($progress as $r)
				{
					echo "<textarea class=' w3-card-8' id='userstory' name='userstory' rows='4' cols='9'>$r->Task_ID \n $r->Assigned_To \n $r->Remaining_Hours</textarea>  ";
				}
				echo "</td>";
			}
			if (is_array($completed) || is_object($completed))
			{
				echo "<td>";
				foreach($completed as $r)
				{
					echo "<textarea class=' w3-card-8' id='userstory' name='userstory' rows='4' cols='9'>Task_ID \n $r->Assigned_To \n $r->Remaining_Hours</textarea>  ";
				}
				echo "</td>";
			}
			echo "</tr>";
			}?>
	</form>
