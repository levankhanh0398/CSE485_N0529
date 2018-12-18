<?php
    // mysql_connect("localhost", "root", "");
    // mysql_select_db("websach");

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbName = "websach";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbName);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    mysqli_query ($conn, ' set names UTF8');
?>