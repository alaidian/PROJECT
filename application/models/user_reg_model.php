<?php
Class user_reg_model extends CI_Model
{
 function search($userid)
 {
   $this -> db -> select('User_ID');
   $this -> db -> from('user_detail');
   $this -> db -> where('User_ID', $userid);
  
  

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