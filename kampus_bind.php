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
        WHERE `kampus_id` = ?";
$stmt = $conn->stmt_init();

if (!$stmt->prepare($sql)) {
    die('prepare failed');
} else {

    $stmt->bind_param('s', $kampus_id);

    $kampus_id = $_GET["id"];

    $stmt->execute();

    $result = $stmt->bind_result($kampus_id, $kampus_name);

    while ($stmt->fetch()) {
        printf("%s (%s)\n", $kampus_id, $kampus_name);
    }

    $stmt->close();
}
$conn->close();
?>