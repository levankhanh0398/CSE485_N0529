<?php
    // mysql_connect("localhost", "root", "");
    // mysql_select_db("websach");

    $ServerName = "localhost";
    $UserName = "root";
    $PassWord = "";
    $dbName = "websach";

    // Create connection
    $conn = new mysqli($ServerName, $UserName, $PassWord, $dbName);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    mysqli_query ($conn, ' set names UTF8');
?>