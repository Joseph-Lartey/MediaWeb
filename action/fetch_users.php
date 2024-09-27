<?php
include "../action/getuserDetails.php";
include "../settings/connection.php";
include "../settings/core.php";

// Assuming you have a way to get the current user's ID
$currentUserId = $_SESSION['user_id']; // Example session variable

// Fetch all users except the current user
$query = "SELECT * FROM users WHERE user_id != ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $currentUserId);
$stmt->execute();
$result = $stmt->get_result();
?>
