<?php
include "../settings/connection.php"; // Missing semicolon added

// Retrieve news from the database
$sql = "SELECT id, heading, news_text, news_date, news_image_url FROM news ORDER BY news_date DESC";
$result = $conn->query($sql);

$news_items = [];

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $news_items[] = $row;
    }
} else {
    echo "No news found";
}

$conn->close();
?>
