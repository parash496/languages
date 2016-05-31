<?php
require_once(MODEL_PATH."home_database.php");

class PagesController
{
  private $_database;

  function __construct() 
  {
    $this->_database = new home_database();
  }

  public function home() 
  {
	  $record_set = $this->_database->find_all_record();
    $array = [];
    while ($row = mysqli_fetch_assoc($record_set)) {
      $array[] = $row;
    }
	  $array_length = count($array);
    require_once(VIEW_PATH."home_languages.php");
  }	
}
?>