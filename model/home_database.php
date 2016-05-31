<?php
include("main_database.php");

class home_database extends MySQLDatabase
{

	public function find_all_record()
  	{
    	$sql = "SELECT name FROM record";
    	$record_set = $this->query($sql);
	  	return $record_set;
	}
}
?>