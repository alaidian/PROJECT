<?php
Class sprint extends CI_Model
	{
	
	Public function _construct()
		{
		parent::_construct();
		}
	function sprint()
	{
		$query = $this -> db -> query("SELECT * FROM sprint ");
		$query1 = $this -> db -> query("SELECT * FROM remaining ");
	if($query1 -> num_rows() > 0)
 	  {
    	  return $query1->result();
  	 }
  	 else
  	 {
   	  return false;
 	  }
	}
	}
?>