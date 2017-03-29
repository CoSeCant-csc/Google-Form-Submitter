<?php

ini_set("display_errors", true);
error_reporting(E_ALL);

//MySQL Configuration
Model::$dbName = 'Project_2';
Model::$user = 'phsaikiran';
Model::$password = 'Saikiran1!1';
Model::$host = 'localhost';

Model::init();

?>
