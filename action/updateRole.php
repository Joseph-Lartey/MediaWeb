<?php
include "../settings/connection.php"; // Your database connection file

if (isset($_GET['action']) && isset($_GET['id'])) {
    $action = $_GET['action'];
    $userId = (int)$_GET['id'];

    if ($action == 'makeAdmin') {
        $newRole = 2; // Admin role
    } elseif ($action == 'removeAdmin') {
        $newRole = 1; // Regular user role
    } else {
        exit('Invalid action');
    }

    $query = "UPDATE users SET role = ? WHERE user_id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ii", $newRole, $userId);
    
    if ($stmt->execute()) {
        header("Location: ../admin/users.php?msg=Role updated successfully");
    } else {
        header("Location: ../admin/users.php?msg=Failed to update role");
    }
} else {
    exit('Invalid parameters');
}
?>
