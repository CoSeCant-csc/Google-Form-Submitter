<?php

ini_set("display_errors", true);
error_reporting(E_ALL);

//MySQL Configuration
Model::$dbName = '';
Model::$user = '';
Model::$password = '';
Model::$host = 'localhost';

Model::init();

?>
