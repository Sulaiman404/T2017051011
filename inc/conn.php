<?php

//$host = 'localhost';
//$host = 't2017051011.scm.azurewebsites.net';
//$host = '';
//$user = 'T2017051011';
//$pass = '12bd43d9ca';
//$user = 'azure';
//$pass = 'password';
//$db = 'T2017051011';

//$conn = mysqli_connect($host, $user, $pass, $db);
$conn = mysqli_connect(MYSQLCONNSTR_localdb);

if (mysqli_connect_errno()){
  die("Failed to connect to MySQL: " . mysqli_connect_error());
}

?>
