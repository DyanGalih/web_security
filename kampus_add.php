<?php
include "conn.php";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO `kampus` (`kampus_nama`) VALUES ('".$_POST['kampus_nama']."') ;";

$result = $conn->query($sql);

if (!$result) {
   printf("Errormessage: %s\n", $conn->error);
}else{
    echo "execute success";
}


?>