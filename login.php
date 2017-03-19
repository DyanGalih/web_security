<?php
session_start();
include "conn.php";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT 
           `user_name`,
           `password` 
        FROM
           `users` 
        WHERE
            `user_name` = '".$_POST['user_name']."'
        AND
            `password` = MD5('".$_POST['password']."')";

$result = $conn->query($sql);

if (!$result) {
    printf("Errormessage: %s\n", $conn->error);
}

if ($result->num_rows > 0) {
    echo "Login Success";
    $_SESSION["is_login"] = 1;
    $_SESSION["user_name"] = $_POST["user_name"];
} else {
    echo "Login Failed";
}
$conn->close();

?>