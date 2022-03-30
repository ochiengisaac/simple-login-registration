<?php

$servername = "localhost";
$username = "root";
$password = "";
if($_SERVER['SERVER_NAME']=='localhost'||$_SERVER['SERVER_NAME']=='127.0.0.1'){
    $password = "";
}
$dbname = "abc-corp-db";
$con = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($con->connect_error) {
 die("Connection failed: " . $con->connect_error);
}







?>