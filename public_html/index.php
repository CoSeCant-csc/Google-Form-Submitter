<?php

/*
**Main file which routes all the requests and calls the required Controller
**along with passing form data.
*/

require_once('./../include/helpers.php');

$tokens = explode('/', rtrim($_SERVER['REQUEST_URI'], '/'));
$token = [];
$forw = [];

$count = count($tokens);

for($i=1; $i<$count; $i=$i+1) {
  $token[$i-1] = $tokens[$i];
}

if($_SERVER["REQUEST_METHOD"] == "POST") {
  $forw = $_POST;

}

if(count($token) == 0) {
  $forw['req'] = ['home'];
}
else {
  $forw['req'] = $token;
}

$cont->run_controller($forw);

?>
