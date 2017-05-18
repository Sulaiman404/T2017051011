<?php

//$host = 'localhost';
//$host = 't2017051011.scm.azurewebsites.net';
$host = '127.0.0.1';
//$user = 'T2017051011';
//$pass = '12bd43d9ca';
$user = 'azure';
$pass = 'password';
$db = 'T2017051011';

$conn = mysqli_connect($host, $user, $pass, $db);

if (mysqli_connect_errno()){
  die("Failed to connect to MySQL: " . mysqli_connect_error());
}

?>
