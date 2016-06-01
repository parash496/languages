<?php
require_once(MODEL_PATH."languageModel.php");

class formController
{
  
  private $_database;

  function __construct() 
  {
    $this->_database = new languageModel();
  }

  public function entry()
  {
    if (isset($_POST['submit'])) { 
      // Often these are form values in $_POST
      $firstname = isset($_POST['first_name'])? $_POST['first_name']:"";
      $lastname = isset($_POST['last_name'])? $_POST['last_name']:"";
      $email = isset($_POST['email'])? $_POST['email']:"";
      $phone = isset($_POST['phone_no'])? $_POST['phone_no']:"";
      $course =isset($_POST['course'])? $_POST['course']:"";
      //2. Perform database query
      $this->_database->form_entry($firstname,$lastname,$email,$phone,$course);
      // Test if there was a query error
      if ($this->_database) {
        echo "success";
      } else {
          // Failure
          // $message = "Subject creation failed";
          die("Database query failed ".mysqli_error($connection));
	      }
    }
  }
} 
?>