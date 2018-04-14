<?php
//session_start(); *** This was not necessary to work on my localhost ***

/*localhost test config*/
/*$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "site16db";*/

/* host login*/
$hostname = "mysql.yaacotu.com";
$username = "studcollab";
$password = "collabor8";
$dbname = "siteghdb";

// Create connection
$conn = mysqli_connect($hostname, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error() . "<br>");
}

?>

