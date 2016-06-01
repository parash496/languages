<?php 
<<<<<<< HEAD
defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);
defined('CONFIG_PATH') ? null : define('CONFIG_PATH', 'C:'.DS.'wamp'.DS.'www'.DS.'languages1'.DS.'config'.DS);
defined('MODEL_PATH') ? null : define('MODEL_PATH', 'C:'.DS.'wamp'.DS.'www'.DS.'languages1'.DS.'model'.DS);
defined('CONTROLLER_PATH') ? null : define('CONTROLLER_PATH', 'C:'.DS.'wamp'.DS.'www'.DS.'languages1'.DS.'controller'.DS);
defined('VIEW_PATH') ? null : define('VIEW_PATH', 'C:'.DS.'wamp'.DS.'www'.DS.'languages1'.DS.'views'.DS);
// define('LOGO_PATH', 'C:'.DS.'wamp'.DS.'www'.DS.'languages1'.DS.'logo'.DS);
// define('PUBLIC_PATH', 'http:'.DS.'wamp'.DS.'www'.DS.'languages1'.DS.'public'.DS);
// define('INDEX_PATH', 'C:'.DS.'wamp'.DS.'www'.DS.'languages1'.DS);
// define('CSS_PATH', PUBLIC_PATH.'css'.DS);
=======
define('DS', DIRECTORY_SEPARATOR);
define('CONFIG_PATH', 'C:'.DS.'wamp'.DS.'www'.DS.'languages1'.DS.'config'.DS);
define('MODEL_PATH', 'C:'.DS.'wamp'.DS.'www'.DS.'languages1'.DS.'model'.DS);
define('CONTROLLER_PATH', 'C:'.DS.'wamp'.DS.'www'.DS.'languages1'.DS.'controller'.DS);
define('VIEW_PATH', 'C:'.DS.'wamp'.DS.'www'.DS.'languages1'.DS.'views'.DS);
>>>>>>> origin/master

    if (isset($_GET['controller']) && isset($_GET['action'])) {
  	    $controller = $_GET['controller'];
        $action  = $_GET['action'];
  	} else {
  		$controller = 'pages';
   		$action  = 'home';
  	}
	require_once("routes.php");
?>
