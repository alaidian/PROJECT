<?php
Class user_story_model extends CI_Model
{
 function form_insert($data)
 {
   $this -> db -> insert('user_story_detail',$data);
 }

function search($storyId,$projectId)
 {
   $this -> db -> select('Project_ID','Story_ID');
   $this -> db -> from('user_story_detail');
   $where="Project_ID like '$projectId'AND Story_ID like '$storyId' ";
   $this -> db -> where($where);
  // $this -> db -> and_where('Project_ID', $projectId);
   $query = $this -> db -> get();
   if($query -> num_rows() >=1)
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