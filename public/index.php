<?php

define('APP_PATH', realpath('../app/'));

require_once APP_PATH . '/config/config.php';
require_once APP_PATH . '/util/Auth.php';

// Also spl_autoload_register (Take a look at it if you like)
function __autoload($class) {
  require LIBS . $class . ".php";
}


// Load the Bootstrap!
$bootstrap = new Bootstrap();

try {
  $bootstrap->init();
} catch (PDOException $e) {
  echo "<h2>DataBase Error</h2><br />".$e->getMessage();
} catch (Exception $e) {
  echo "<h2>General Error</h2><br />".$e->getMessage();
}