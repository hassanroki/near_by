<?php
    $serverName = "localhost";
    $userName = "root";
    $pass = "";

    $conn = new mysqli( $serverName, $userName, $pass );

    if( $conn->connect_error ) {
        die("Connected Fail!") . $conn->connect_error;
    }
    //  else {
    //     echo "Connected Successfully!";
    // }

    // Create Database
    $db = "CREATE DATABASE near_by";

    if( $conn->query( $db ) === TRUE ) {
        echo("Database Created Successfully!");
    } else {
        echo("Database Create Failed!") . $conn->error;
    }

    $conn->close();