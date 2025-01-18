<!-- Establishing the connection with mysql via mysqli_connect -->
<?php
    $dbHost = 'localhost';
    $dbUser = 'root';
    $dbPass = "";
    $dbName = "crud";
    $conn = mysqli_connect($dbHost,$dbUser,$dbPass,$dbName);
    // if connection not found
    if(!$conn)
    die("Something Went Wrong");
?>