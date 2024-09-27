<?php
include_once "../settings/connection.php"; // Include your connection file

$sql = "SELECT name, email, service_of_interest, message FROM contact";
$result = $conn->query($sql);
?>
