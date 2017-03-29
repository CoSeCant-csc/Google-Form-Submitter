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

    $query = "CREATE TABLE IF NOT EXISTS `users` ( `id` INT(10) NOT NULL AUTO_INCREMENT , `email` VARCHAR(255) NOT NULL , `fname` VARCHAR(255) NOT NULL , `cname` VARCHAR(255) NOT NULL , `password` VARCHAR(255) NOT NULL , `gender` VARCHAR(3) NOT NULL , PRIMARY KEY (`id`), UNIQUE `email` (`email`)) ENGINE = InnoDB;";
    $query = $con->real_escape_string($query);

    $ret = $con->query($query);
    if(!$ret) {

      print("MySQL Error : ");
      print($con->error);
      exit();
    }

    $query = "CREATE TABLE IF NOT EXISTS `market` ( `m_id` INT(10) NOT NULL AUTO_INCREMENT , `u_id` INT(10) NOT NULL , `image` VARCHAR(255) NOT NULL , `title` VARCHAR(255) NOT NULL , `price` DOUBLE NOT NULL , `college` VARCHAR(255) NOT NULL , `category` VARCHAR(255) NOT NULL , `date` BIGINT NOT NULL , PRIMARY KEY (`m_id`)) ENGINE = InnoDB;";
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
