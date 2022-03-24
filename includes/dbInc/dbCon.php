<?php



$dbServerName = "localhost";
$dbUserName = "root";
$dbPassword = "";
$dbName = "site_ecom";

$conn = mysqli_connect($dbServerName,$dbUserName,$dbPassword,$dbName);
if ( mysqli_connect_errno() ) {
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
