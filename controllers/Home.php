<?php

class Home extends Controller {

  public static function init() {

    $title = 'Home';

    return get_defined_vars();
  }

  public static function index($var) {

    extract($var);
    parent::$view->display_hf('home.php');
  }
}

?>
