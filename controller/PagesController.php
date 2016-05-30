<?php
require_once("../model/database.php");

class PagesController
{
private $_database;

  function __construct() 
  {
    $this->_database = new MySQLDatabase();
  }

  public function home() 
  {
	  $record_set = $this->_database->find_all_record();
    $array = [];
    while ($row = mysqli_fetch_assoc($record_set)) {
      $array[] = $row;
    }
	  $array_length = count($array);
    require_once('../views/home_languages.php');
  }
	
}
?>