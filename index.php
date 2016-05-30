<?php 
    
    if (isset($_GET['controller']) && isset($_GET['action'])) {
  	    $controller = $_REQUEST['controller'];
        $action  = $_REQUEST['action'];
  	} else {
  		$controller = 'pages';
   		$action  = 'home';
  	}
  require_once('routes.php');
?>