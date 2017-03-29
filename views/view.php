<?php
class View {

  private static $ins;
  public static $name;

  public function __construct() {

    self::$ins = $this;
    return $this;
  }

  public function set_name($name) {

    self::$name = $name;
  }

  public static function display_error($message, $data = array()){

    if($data)
      extract($data);
    $title = "Error!";
    $controller = self::$name;

    require_once('header.php');
    require_once('error.php');
    require_once('footer.php');

    exit();
  }

  public static function display($file, $data = array()) {

    if($data)
      extract($data);
    $controller = self::$name;

    if(file_exists("./../views/".$file)) {

      require_once($file);
    }

    else {

      self::$ins->display_error("{$file} does not exist!");
    }

  }

  public static function display_hf($file, $data = array()){

    if($data)
      extract($data);
    $controller = self::$name;

    if(file_exists("./../views/".$file)) {

      require_once('header.php');
      require_once($file);
      require_once('footer.php');
    }

    else {

      self::$ins->display_error("{$file} does not exist!");
    }
  }
}
