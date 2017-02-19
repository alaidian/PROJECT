<?php
Class insert_user_model extends CI_Model
{
 function form_insert($data)
 {
   $this -> db -> insert('user_detail',$data);

  
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
?>