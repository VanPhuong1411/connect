<?php

    $conn = new mysqli('localhost','phuong', '123', 'data') ;

    if ($conn->connect_error) { 
        die("Connection failed: " . $conn->connect_error);
    }
    mysqli_set_charset($conn, 'UTF8');

?>