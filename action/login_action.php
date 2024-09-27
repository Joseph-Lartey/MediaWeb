<?php
session_start();
include_once "../settings/connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];

    if (empty($_POST['email'])) {
        $errors[] = "Email is required.";
    } else {
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Invalid email format.";
        }
    }

    if (empty($_POST['password'])) {
        $errors[] = "Password is required.";
    }

    if (empty($errors)) {
        $password = $_POST['password'];

        $stmt = $conn->prepare("SELECT user_id, fname, lname, password_hash, role FROM users WHERE email=?");
        if ($stmt) {
            $stmt->bind_param("s", $email);
            $stmt->execute();

            if (!$stmt) {
                $errors[] = "Database query error: " . $conn->error;
            } else {
                $result = $stmt->get_result();

                if ($result->num_rows == 1) {
                    $row = $result->fetch_assoc();
                    if (password_verify($password, $row['password_hash'])) {
                        if ($row['role'] == 2) {
                            $_SESSION['user_id'] = $row['user_id'];
                            $_SESSION['fname'] = $row['fname'];
                            $_SESSION['lname'] = $row['lname'];
                            header("Location: ../admin/admin.php");
                            exit();
                        } else {
                            $errors[] = "You do not have authorization to access this page.";
                        }
                    } else {
                        $errors[] = "Invalid email or password.";
                    }
                } else {
                    $errors[] = "Invalid email or password.";
                }
                $stmt->close();
            }
        } else {
            $errors[] = "Database query preparation error.";
        }
    }

    if (!empty($errors)) {
        $_SESSION['message'] = [
            'type' => 'error',
            'title' => 'Error!',
            'text' => implode("<br>", $errors)
        ];
        header("Location: ../login/login.php");
        exit();
    }
} else {
    $_SESSION['message'] = [
        'type' => 'error',
        'title' => 'Error!',
        'text' => 'Invalid request method.'
    ];
    header("Location: ../login/login.php");
    exit();
}
