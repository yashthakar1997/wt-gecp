<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "country";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

$cn = $_POST['cname'];
$ar = $_POST['area'];
$po = $_POST['pop'];


$sql = "INSERT INTO `country`.`city` (`cityname`, `area`, `population`) VALUES
 ('$cn','$ar','$po')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>

