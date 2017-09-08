<?php 	

$localhost = "localhost";
$username = "imon";
$password = "p@ssw0rd";
$dbname = "stock_management_system";

// db connection
$connect = new mysqli($localhost, $username, $password, $dbname);
// check connection
if($connect->connect_error) {
  die("Connection Failed : " . $connect->connect_error);
} else {
  // echo "Successfully connected";
}

?>