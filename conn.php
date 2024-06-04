<?php

$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "mmassyexpress";

$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);
if(!$conn) {
  die("something went wrong");
}


?>