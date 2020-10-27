<?php
$servername = "185.27.134.11";
$username = "epiz_27027047";
$password = "TIntW4seMAa1Dkc";
$dbname = "epiz_27027047_XXX";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if($conn){
    echo "ok";
}
?>