<?php
session_start();
ob_start();
define("DS",DIRECTORY_SEPARATOR);
define("ROOT",dirname(__DIR__));
define("APP",ROOT.DS.'app');
define("CONFIG",APP.DS.'config');
define("CONTROLLER",APP.DS.'controller');
define("VIEW",APP.DS.'view'.DS);
define("CORE",APP.DS.'core');
define("MODEL",APP.DS.'model');
define("CSS",'/noteMVC/public');
define("PATH",'/noteMVC/public');
//echo VIEW;
require_once("../vendor/autoload.php");
$app = new MVC\core\app();
ob_end_flush();


?>