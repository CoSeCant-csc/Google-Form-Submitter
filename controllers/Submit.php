<?php

class Submit extends Controller {

  public static function init() {

    $title = 'Submit : Google Form Submitter';

    return get_defined_vars();
  }

  public static function index($var) {

    extract($var);
    parent::$view->display_hf('home.php');
  }
}

?>
