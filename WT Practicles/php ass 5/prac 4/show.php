<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "country";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);



$sql = "SELECT cityname, area, population FROM city";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo " city = " . $row["cityname"]. " area = " . $row["area"]. " population = " . $row["population"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>