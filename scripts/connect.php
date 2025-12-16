<?php


    // Variables to store the connection:
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db_rigetzoo";
    
    // running the connection:
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Testing the connection:
    if (!$conn) {
        echo("connection failed");
    }

?>