<?php
Class admin_home_model extends CI_Model
{
 function display_users()
 {
   /*$this -> db -> select('User_ID','User_Name','Email_ID','User_Status');
   $this -> db -> from('user_detail');
   */
   
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
}
?>