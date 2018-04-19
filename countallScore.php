<?php
session_start();
include_once("countconfig.php");

session_unset();

// Select count score from scores table.
$sql = "SELECT COUNT(score) AS count FROM `scores`";
$result = mysqli_query($conn, $sql);  

// Create a session variable, ct, to store the count score.
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $_SESSION ["ct"] = $row["count"];
} else {
    session_unset();    // remove all session variables
}
    
header('Location:countscores.php');    // go back to original page
?>
