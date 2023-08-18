<?php
// Create Connection
$serverName = "localhost";
$userName = "root";
$pass = "";
$db = "near_by";

$conn = new mysqli( $serverName, $userName, $pass, $db );

if( $conn->connect_error ) {
    echo("Database Connect Fail!") . $conn->connect_error;
} else {
    // echo("Database Connected!");
}