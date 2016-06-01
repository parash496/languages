<?php  

function call($controller, $action) 
{
  // require the file that matches the controller name
  require_once(CONTROLLER_PATH.($controller) . "Controller.php");
  switch ($controller) {
    case 'pages':
      $controller = new pagesController();
      break;

    case 'language':
      $controller = new languageController();
      break;

    case 'form':
      $controller = new formController();
      break;

    case 'errors':
      $controller = new errorsController();
      break;
  }      
  $controller->{ $action }();
}

// Mapping controllers to action.
$controllers = [
                  'pages' => ['home'],
                  'language'=>['languages'],
                  'form'=>['enquiry'],
                  'errors'=>['error']
               ];

// check that the requested controller and action are both allowed
// if someone tries to access something else he will be redirected to the error action of the pages controller
if (array_key_exists($controller, $controllers)) {
  if (in_array($action, $controllers[$controller])) {
    call($controller, $action); 
  } else {
    call('errors', 'error');
  }
} else {
  call('errors', 'error');
}
?> 