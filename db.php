<?php

$servername="localhost";
$username="root";
$password="";
$database="bbc";

$conn =new mysqli("localhost","root","","bbc");

if($conn->connect_error){
    die("connection failed: " . $conn->connect_error);
}
 echo "";

?>