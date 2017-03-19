<?php
include "conn.php";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT 
           `session_name` 
        FROM
           `session` 
         ";

$result = $conn->query($sql);

if (!$result) {
   printf("Errormessage: %s\n", $conn->error);
}

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "sess: " . $row["session_name"];
    }
} else {
    echo "0 results";
}
$conn->close();
?>