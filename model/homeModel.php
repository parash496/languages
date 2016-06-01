<?php
include("model.php");

class homeModel extends model
{

	public function find_record_name()
  	{
    	$sql = "SELECT name FROM record";
    	$record_set = $this->query($sql);
	  	return $record_set;
	}
}
?>