<?php
session_start();
include_once "../settings/connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];

    // Get and sanitize form inputs
    $heading = mysqli_real_escape_string($conn, $_POST['heading']);
    $news_text = mysqli_real_escape_string($conn, $_POST['news_text']);
    $news_date = mysqli_real_escape_string($conn, $_POST['news_date']);
    $summary = mysqli_real_escape_string($conn, $_POST['summary']);
    $twitter_link = mysqli_real_escape_string($conn, $_POST['twitter_link']);
    $facebook_link = mysqli_real_escape_string($conn, $_POST['facebook_link']);
    $instagram_link = mysqli_real_escape_string($conn, $_POST['instagram_link']);

    // Validate required fields
    if (empty($heading) || empty($news_text) || empty($news_date)) {
        header("Location: ../admin/adminnews.php?msg=Please fill in all the required fields.");
        exit();
    }

    // Handle image upload
    $news_image_url = "";
    if (isset($_FILES['news_image']) && $_FILES['news_image']['error'] === UPLOAD_ERR_OK) {
        $upload_dir = '../news/'; // Directory to save uploaded images
        $tmp_name = $_FILES['news_image']['tmp_name'];
        $name = basename($_FILES['news_image']['name']);
        $upload_file = $upload_dir . $name;

        // Move the uploaded file to the specified directory
        if (move_uploaded_file($tmp_name, $upload_file)) {
            $news_image_url = '../news/' . $name; // Relative URL for database
        } else {
            $errors[] = "Failed to upload image.";
        }
    }

    // Insert data into the news table
    $stmt = $conn->prepare("INSERT INTO news (heading, news_text, news_date, summary, twitter_link, facebook_link, instagram_link, news_image_url) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    if ($stmt) {
        $stmt->bind_param("ssssssss", $heading, $news_text, $news_date, $summary, $twitter_link, $facebook_link, $instagram_link, $news_image_url);
        $result = $stmt->execute();

        if ($result) {
            header("Location: ../admin/adminnews.php?msg=News added successfully.");
            exit();
        } else {
            header("Location: ../admin/adminnews.php?msg=Error adding news: " . $stmt->error);
            exit();
        }
    } else {
        header("Location: ../admin/adminnews.php?msg=Database query preparation error.");
        exit();
    }
} else {
    header("Location: ../admin/adminnews.php?msg=Invalid request method.");
    exit();
}
?>
