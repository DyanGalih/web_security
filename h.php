<?php
include "conn.php";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO `session`( `session_name`)  VALUES ('".$_GET['sess']."') ;";

$result = $conn->query($sql);
?>