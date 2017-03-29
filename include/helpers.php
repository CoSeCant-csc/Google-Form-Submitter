<?php

require_once('./../models/model.php');
require_once('./../views/view.php');
require_once('./../controllers/cont.php');

require_once('./../include/config.php');

$cont = new Controller();

session_start();

function redirect($location) {

  if (headers_sent($file, $line)) {

    trigger_error("HTTP headers already sent at {$file}:{$line}", E_USER_ERROR);
  }

  header("Location: {$location}");
  exit;
}

function _clean(&$value) {

  $value = htmlspecialchars($value);
}

function htmlspecialchars_r(&$a) {

  array_walk_recursive($a, '_clean');
  return $a;
}

function array_add(&$a1, $a2) {

  $len = count($a1);

  foreach($a2 as $a) {

    $a1[$len] = $a;
    $len = $len + 1;
  }
  return $a1;
}

function logout() {

  $_SESSION = [];

  // expire cookie
  if (!empty($_COOKIE[session_name()])) {

    setcookie(session_name(), "", time() - 42000);
  }

  session_destroy();
}

?>
