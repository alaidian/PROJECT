<?php
Class product_backlog_model extends CI_Model
{
 function display_userstories()
 {

   $query = $this -> db -> query("SELECT  `Story_ID`, `Story_Name`, `User_Story`, `Size`, `User_Story_Status`, `Priority`, `Sprint_Number`, `Release_Number`, `Use_Case_ID`, `Remarks`FROM `user_story_detail`");

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
