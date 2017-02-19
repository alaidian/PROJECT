<?php
class TaskDetail extends CI_Model
{
	function insert($data)
 	{
   	$this -> db -> insert('task_detail',$data);
	}
	function display_task()
	 {

  	 $query = $this -> db -> query("SELECT  `Task_ID`, `Task_Description`, `Assigned_To`, `Estimated_Hours`, `Remaining_Hours`, `Task_Status` FROM `task_detail` WHERE `Project_ID`='P008' and`Story_ID`='ST_002'");

 	  if($query -> num_rows() > 0)
 	  {
    	  return $query->result();
  	 }
  	 else
  	 {
   	  return false;
 	  }

 	}
	function task_status($status,$sid)
	{
	 $query = $this -> db -> query("SELECT  `Task_ID`, `Assigned_To`, `Remaining_Hours`, `Task_Status` FROM `Task_Detail` WHERE `Project_ID`='P008' and `Story_ID`='$sid' and `Task_Status`='$status' ");

 	  if($query -> num_rows() > 0)
			{
   	   return $query->result();
		   	}
   	else
 	  {
  	   return false;
  	 }
	}
	function single_taskDetail($tid)
	{
	 $query = $this -> db -> query("SELECT  `Task_ID`, `Task_Description`, `Assigned_To`, `Estimated_Hours`, `Remaining_Hours`, `Task_Status` FROM `Task_Detail` WHERE `Project_ID`='P008' and `Task_ID`='$tid' ");

 	  if($query -> num_rows() > 0)
  	 {
   	   return $query->row();
		   	}
   	else
 	  {
  	   return false;
  	 }
	}	
	function update($data,$tid)
 	{
	  $this->db->where('Task_ID',$tid);
   	$query=$this -> db -> update('task_detail',$data);
		echo "$query";
	}
}
?>