<?php
require_once("database.php");

if (isset($_POST['submit'])) { 
  // Often these are form values in $_POST
  $firstname = isset($_POST['first_name'])? $_POST['first_name']:"";
  $lastname = isset($_POST['last_name'])? $_POST['last_name']:"";
  $email = isset($_POST['email'])? $_POST['email']:"";
  $phone = isset($_POST['phone_no'])? $_POST['phone_no']:"";
  $course =isset($_POST['course'])? $_POST['course']:"";
  //2. Perform database query
  $query = $database->form_entry();
  // Test if there was a query error
  if ($query) {
    // Success
	//$goto = $database->redirect_to("languages.php");
  } else {
    // Failure
    // $message = "Subject creation failed";
    die("Database query failed ".mysqli_error($connection));
	}
}
?>