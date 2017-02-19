<! Model for Product Backlog Page Written by: Anne>
<?php
Class UserStoryDetail extends CI_Model
{
 function retreiveDetails($project_Id,$story_Id)
 {
	 $query = $this -> db -> query("SELECT  `Story_ID`, `Story_Name`, `User_Story`, `User_Story_Status` FROM `user_story_detail` where `Project_ID`='$project_Id' and `Story_ID`='$story_Id' ");

		if($query -> num_rows() > 0)
		{
      $row= $query->row();
      return $row;
		}
		else
		{
     return false;
		}
 }
 function display_UserStories()
 {

   $query = $this -> db -> query("SELECT  `Story_ID`, `Story_Name`, `User_Story`, `Size`, `User_Story_Status`, `Priority`, `Sprint_Number`, `Release_Number`, `Use_Case_ID`, `Remarks`FROM `user_story_detail` where `Project_ID`='P008'");

   if($query -> num_rows() > 0)
   {
	  
	  return $query->result();
   }
   else
   {
     return false;
   }

 }
function insert_userStoryStatus($userStory_Status,$project_Id,$story_Id)
{
	$where="Project_ID='$project_Id' and Story_ID='$story_Id' ";
	//$query = $this -> db -> query("UPDATE `user_story_detail` SET User_Story_Status='$userStory_Status'  WHERE `Project_ID`=$project_Id' and `Story_ID`='$story_Id'");
	$this->db->set('user_Story_Status', $userStory_Status); //value that used to update column  
	$this->db->where($where); //which row want to upgrade  
	$this->db->update('user_story_detail');  //table name
	if($this->db->affected_rows() > 0)
		return true;
	else 
		return false;
}
function single_Userstory($uid)
{
 $query = $this -> db -> query("SELECT  `Story_ID`, `Story_Name`, `User_Story`, `Size`, `User_Story_Status`, `Priority`, `Sprint_Number`, `Release_Number`, `Use_Case_ID`, `Remarks`FROM `user_story_detail` where `Story_ID`='$uid' and `Project_ID`='P008' ");

   if($query -> num_rows() > 0)
   {
      return $query->row();
   }
   else
   {
     return false;
   }
}
function search($storyId,$Project_ID)
	{
	$query = $this -> db -> query("SELECT  `Story_ID`, `Story_Name`, `User_Story`, `Size`, `User_Story_Status`, `Priority`, `Sprint_Number`, `Release_Number`, `Use_Case_ID`, `Remarks`FROM `user_story_detail` where Project_ID='$Project_ID' and where Story_ID like '$story_ID'");
	}
function insert($data)
 	{
   	$this -> db -> insert(`user_story_detail` ,$data);
	}


}
?>
