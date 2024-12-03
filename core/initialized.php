<?php session_start();  ?>
<?php

spl_autoload_register(function($class) {
 require_once $_SERVER['DOCUMENT_ROOT'].'/ITE601-Activities/classes/' . $class . '.php';
});
