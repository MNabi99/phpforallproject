<?php
session_start();

// require_once ('lib/Template.php')

 require_once 'config.php';

// Include Helper
 require_once 'helper/helper.php';

// Autoloader
function __autoload($class_name){
    require_once 'lib/'.$class_name. '.php';
}




?>