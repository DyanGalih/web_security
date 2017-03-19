<?php
include "conn.php";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT 
           `kampus_id`,
           `kampus_nama` 
        FROM
           `kampus` 
        WHERE `kampus_nama` = '".$_POST["cari"]."'";

$result = $conn->query($sql);

if (!$result) {
   printf("Errormessage: %s\n", $conn->error);
}

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "kampus_id: " . $row["kampus_id"]. " - kampus_nama: " . $row["kampus_nama"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>