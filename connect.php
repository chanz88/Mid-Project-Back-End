<?php 
    $dbHost = "localhost";
    $dbUser = "root";
    $dbPass = "";
    $dbName = "perpustakaan";

    $conn = mysqli_connect(
        $dbHost, 
        $dbUser, 
        $dbPass, 
        $dbName
    );
    
    if (!$conn) {
        die("Something went Wrong");
    } 
?>