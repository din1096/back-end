<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "character";

// maakt connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Verbinding is mislukt: " . $conn->connect_error);
}
echo "Verbinding is gelukt";

?>