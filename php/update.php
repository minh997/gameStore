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


//Create connection
$conn = new mysqli ($servername, $username, $password, $database);
//Check connection
if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}else{
    
}
/*

if($Publisher==""){
    echo"true";
}else{
    echo"false";
}
*/







/*
$query = "UPDATE product_details
SET 


WHERE PName='$PName'
";


$result = mysqli_query($conn,$query);


//store in array
$data = array ();
//while loop through database
while ($row = mysqli_fetch_assoc($result)){
    $data[] = $row;
}

//send $data to front end in JSON format
echo json_encode($data);*/

    

?>