<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "udon";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if($conn){
    echo "ok";
}
?>