<?php

$servername ="localhost";
$username = "root"; //your username
$password = "minhminh"; //your pasSword
$database = "gamestore";

//Getting values

//Create connection
$conn = new mysqli ($servername, $username, $password, $database);
//Check connection
if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

$query ="SELECT Publisher, AVG(price) 'AvgPrice' from Product_Details group by publisher";

$result = $conn->query($query);
echo "<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\">";
echo "<link rel=\"stylesheet\" href=\"project.css\">
<link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
<link rel=\"icon\" href=\"image/favicon.ico\" type=\"image/x-icon\">";
if($result->num_rows > 0) {
    echo " <table class=\"table table-hover\"><thead class=\"thead-dark\"><tr><th scope=\"col\">Publisher</th><th scope=\"col\">AvgPrice</th></tr></thead><tbody>";
    while($row = $result->fetch_assoc()){
        echo "<tr><th>".$row["Publisher"] . "</th><th>".$row["AvgPrice"]."</th></tr>";
    }
    echo "</tbody></table>";
} else {
    echo "0 results";
}
echo "<button type=\"button\" onclick=\"window.location.href = '../productcontrol.html'\"> Back </button>";


$conn->close();
    
?>