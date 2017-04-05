<?php

class Controller {

  protected static $ins;
  protected static $view;
  protected static $model;

  public function __construct() {

    self::$ins = $this;
    self::$model;
    self::$view = new View();
    return $this;
  }

  /*
  **Takes 'controller' and data and
  **loads 'Controller'.php
  */
  public static function run_controller($arr) {

    if(!$arr) {
      self::$view->display_error("Controller Error!");
    }

    $class = ucfirst($arr['req'][0]);
    $path = "./../controllers/{$class}.php";

    if(!file_exists($path)) {
      self::$view->display_error("Invalid Controller");
      exit();
    }

    $v = lcfirst($class);
    self::$view->set_name($class);

    if(count($arr) == 1) {

      if(file_exists("./../views/{$v}.php")) {

        require_once "./../controllers/{$class}.php";
        require_once "./../models/{$v}_model.php";

        $v = "{$v}_model";
        self::$model = new $v(self::$ins);
        $i = new $class();

        if(method_exists($i,"init")) {
          $vars = $i->init();
        }

        $v = lcfirst($class);

        $myfile = fopen("./../views/{$v}.php", "r");
        $f = fread($myfile, filesize("./../views/{$v}.php"));
        fclose($myfile);

        $pos = strpos($f, "<!DOCTYPE");
        if($pos === false) {
          self::$view->display_hf("{$v}.php", $vars);
        }
        else {
          self::$view->display("{$v}.php", $vars);
        }

        exit();
      }
      else {

        $v = lcfirst($class);
        require_once "./../controllers/{$class}.php";

        $i = new $class();
        $i->index($arr);
        exit();
      }

    }
    else {

      $v = lcfirst($class);
      require_once "./../controllers/{$class}.php";
      require_once "./../models/{$v}_model.php";

      $v = "{$v}_model";
      self::$model = new $v(self::$ins);
      $i = new $class();
      $i->index($arr);

      exit();
    }

  }
}

?>
