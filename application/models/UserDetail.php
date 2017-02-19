<?php
Class UserDetail extends CI_Model
{
 	function display_users()
 	{
   	$query = $this -> db -> query("select User_ID,User_Name,Email_ID,User_Status from user_detail");

  	 if($query -> num_rows() > 0)
   	{
      		return $query->result();
   	}
   	else
   	{
     		return false;
   	}
 	}
	function insertUserDetail($data)
 	{
  	 $this -> db -> insert('user_detail',$data);
 	}
	
	function select_users()
	{
	$query = $this -> db -> query("select User_ID,User_Name from user_detail");
	 if($query -> num_rows() > 0)
   	{
      		return $query->result();
   	}
   	else
   	{
     		return false;
   	}
	}
	function search($pswd)
	 {
  	 $this -> db -> select('Password');
  	 $this -> db -> from('user_detail');
   	 $this -> db -> where('Password', $pswd);
  	 $query = $this -> db -> get();

  	 if($query -> num_rows() == 1)
   		{
    		 return true;
   		}
   	else
   		{
    	 	return false;
   		}
 	}
}
?>