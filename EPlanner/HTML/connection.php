<?php

$server_name = "localhost";
$username = "root";
$password = "";
$dbase = "test";

$conn = new mysqli($server_name, $username, $password, $dbase);

if($conn ->connect_error){
    die("connection failed". $conn->connect_error);
}else{
    // echo "all good at connection<br>";
}


?>