<?php
class Model {

  //Goto /include/config.php to alter MySQL settings
  public static $dbName = '';
  public static $user = '';
  public static $password = '';
  public static $host = 'localhost';

  private static $con = '';
  private static $ins;
  private static $cont;

  public function __construct($c) {

    self::$ins = $this;
    self::$cont = $c;

    return $this;
  }

  public static function init() {

    $dbName = self::$dbName;
    $con = new mysqli(self::$host, self::$user, self::$password);

    $query = "CREATE DATABASE IF NOT EXISTS {$dbName}";
    $ret = $con->query($query);
    if(!$ret) {
      print("MySQL Error : ");
      print($con->error);
      exit();
    }

    $query = "USE {$dbName}";
    $ret = $con->query($query);
    if(!$ret) {
      print("MySQL Error : ");
      print($con->error);
      exit();
    }

    mysqli_close($con);

    $con = new mysqli(self::$host, self::$user, self::$password, self::$dbName);

    $query = "CREATE TABLE IF NOT EXISTS `data` ( `id` BIGINT NOT NULL AUTO_INCREMENT , `url` VARCHAR(255) NOT NULL , `entry` VARCHAR(255) NOT NULL , `value` VARCHAR(255) NOT NULL , `submissions` INT NOT NULL , `number` INT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;";
    $query = $con->real_escape_string($query);

    $ret = $con->query($query);
    if(!$ret) {

      print("MySQL Error : ");
      print($con->error);
      exit();
    }

    mysqli_close($con);
  }

  public static function connect() {

    $mysqli = new mysqli(self::$host, self::$user, self::$password, self::$dbName);

    if ($mysqli->connect_errno) {

      echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }

    return $mysqli;
  }

  public static function close($con) {

    mysqli_close($con);
  }

  public static function get_con() {

    if($con != '')
    return $con;
    else
    return false;
  }

}
