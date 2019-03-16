<?php

$servername ="localhost";
$username = "root"; //your username
$password = "minhminh"; //your pasSword
$database = "gamestore";

//Getting values
$Price = $_REQUEST["Price"];
$ReleaseDate = $_REQUEST["ReleaseDate"];
$Publisher = $_REQUEST["Publisher"];
$Quantity = $_REQUEST["Quantity"];
$PID = $_REQUEST["PID"];
$PName = $_REQUEST["PName"];


//Create connection
$conn = new mysqli ($servername, $username, $password, $database);
//Check connection
if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}



$query = "UPDATE product_details
SET Price = $Price


WHERE PName ='$PName'
";

if($conn->query($query) === TRUE){
    echo "Record Updated";
}else{
    echo "error: ".$conn->error;
}
$conn->close();
    

?>