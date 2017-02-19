<?php
class TeamMember extends CI_Model
{
	function insert($data)
 	{
   	$this -> db -> insert('team_member',$data);
	}
}
?>