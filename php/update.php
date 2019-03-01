<?php

$servername ="localhost";
$username = "root"; //your username
$password = "minhminh"; //your pasSword
$database = "gamestore";

//Getting values
$PID = $_POST[""]


//Create connection
$conn = new mysqli ($servername, $username, $password, $database);
//Check connection
if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}else{
    
}



$query = "SELECT product_stock.PID, product_details.PName, product_details.ReleaseDate,
product_details.Price, product_details.Publisher
FROM product_stock
INNER JOIN product_details
ON product_stock.PName=product_details.PName";


$result = mysqli_query($conn,$query);


//store in array
$data = array ();
//while loop through database
while ($row = mysqli_fetch_assoc($result)){
    $data[] = $row;
}

//send $data to front end in JSON format
echo json_encode($data);

    

?>