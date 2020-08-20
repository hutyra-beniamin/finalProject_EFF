<?php
// this will avoid mysql_connect() deprecation error.
error_reporting( ~E_DEPRECATED & ~E_NOTICE );
$db_host = 'localhost';
$db_username = 'root';
$db_password = '%sKDC4kkzW';
$db_name = 'final_project';
$connect = new mysqli($db_host, $db_username, $db_password, $db_name);

$connect = mysqli_connect($db_host, $db_username, $db_password, $db_name);


if  ( !$connect ) {
 die("Connection failed : " . mysqli_error());
}


?>