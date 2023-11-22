<?php 
    $server = "sql108.infinityfree.com";
    $username = "if0_35467913   ";
    $password = "Qgzr69trQJEvMU";
    $dbname = "if0_35467913_admin";

    $conn = mysqli_connect($server,$username,$password,$dbname);

    if(!$conn){
        die ("Connection Failed:".mysqli_connect_error());
    }
?>