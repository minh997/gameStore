<?php

$servername ="sql301.epizy.com";
$username = "epiz_23627140"; //your username
$password = "x3iqahkI1Xo"; //your pasSword
$database = "epiz_23627140_gamestore";

//Getting values



//Create connection
$conn = new mysqli ($servername, $username, $password, $database);
//Check connection
if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}else{
    echo "GOOF";
}



?>