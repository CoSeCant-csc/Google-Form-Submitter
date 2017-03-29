<?php

class Database extends Controller {

  public static function index($var) {

    parent::$model->add_data($var);

    exit();
  }
}

?>
