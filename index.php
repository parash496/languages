<?php 
define('DS', DIRECTORY_SEPARATOR);
define('CONFIG_PATH', 'C:'.DS.'wamp'.DS.'www'.DS.'languages1'.DS.'config'.DS);
define('MODEL_PATH', 'C:'.DS.'wamp'.DS.'www'.DS.'languages1'.DS.'model'.DS);
define('CONTROLLER_PATH', 'C:'.DS.'wamp'.DS.'www'.DS.'languages1'.DS.'controller'.DS);
define('VIEW_PATH', 'C:'.DS.'wamp'.DS.'www'.DS.'languages1'.DS.'views'.DS);
// define('LOGO_PATH', 'C:'.DS.'wamp'.DS.'www'.DS.'languages1'.DS.'logo'.DS);
// define('PUBLIC_PATH', 'http:'.DS.'wamp'.DS.'www'.DS.'languages1'.DS.'public'.DS);
// define('INDEX_PATH', 'C:'.DS.'wamp'.DS.'www'.DS.'languages1'.DS);
// define('CSS_PATH', PUBLIC_PATH.'css'.DS);

   
    if (isset($_GET['controller']) && isset($_GET['action'])) {
  	    $controller = $_REQUEST['controller'];
        $action  = $_REQUEST['action'];
  	} else {
  		$controller = 'pages';
   		$action  = 'home';
  	}
	require_once("routes.php");
?>