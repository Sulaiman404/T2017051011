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
//$conn = mysqli_connect(MYSQLCONNSTR_localdb);

//if (mysqli_connect_errno()){
 // die("Failed to connect to MySQL: " . mysqli_connect_error());
//}

$connectstr_dbhost = '';
$connectstr_dbname = '';
$connectstr_dbusername = '';
$connectstr_dbpassword = '';

foreach ($_SERVER as $key => $value) {
    if (strpos($key, "MYSQLCONNSTR_localdb") !== 0) {
        continue;
    }
    
    $connectstr_dbhost = preg_replace("/^.*Data Source=(.+?);.*$/", "\\1", $value);
    $connectstr_dbname = preg_replace("/^.*Database=(.+?);.*$/", "\\1", $value);
    $connectstr_dbusername = preg_replace("/^.*User Id=(.+?);.*$/", "\\1", $value);
    $connectstr_dbpassword = preg_replace("/^.*Password=(.+?)$/", "\\1", $value);
}

$link = mysqli_connect($connectstr_dbhost, $connectstr_dbusername, $connectstr_dbpassword,'t2017051011');

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}


?>
