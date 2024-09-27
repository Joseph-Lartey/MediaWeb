<?php
include "../settings/connection.php";

// Retrieve the specific news article based on the ID from the URL
$news_id = isset($_GET['id']) ? intval($_GET['id']) : 0;
$sql = "SELECT * FROM news WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $news_id);
$stmt->execute();
$result = $stmt->get_result();
$news = $result->fetch_assoc();

// Fetch other news articles for the sidebar
$sql_sidebar = "SELECT id, heading, news_date FROM news WHERE id != ? ORDER BY news_date DESC LIMIT 4";
$stmt_sidebar = $conn->prepare($sql_sidebar);
$stmt_sidebar->bind_param("i", $news_id);
$stmt_sidebar->execute();
$other_news = $stmt_sidebar->get_result();

$news_image_url = $news['news_image_url'];

$facebook_link = $news['facebook_link'];
$twitter_link = $news['twitter_link'];
$instagram_link = $news['instagram_link'];


$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News Details</title>
    <link rel="stylesheet" href="../css/details.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="main" id="home" style="background-image: url('<?= $news_image_url ?>');">
        <div class="navbar">
            <div class="logo-container">
                <img src="../assets/logo3.png" alt="Lartey Studios Logo" class="logo-img">
                <h2 class="logo-text">Lartey Studios</h2>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="../view/home.php">HOME</a></li>
                    <li><a href="../view/about.php">ABOUT</a></li>
                    <li><a href="../view/home.php">SERVICE</a></li>
                    <li><a href="../view/news.php" style="color: #00AEED;">NEWS</a></li>
                    <li><a href="../view/contact.php">CONTACT</a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- News Article Section -->
    <div class="news-container">
        <div class="news-main-content">
            <a href="../view/news.php" class="back-link">< Back to all news</a>
            <h1 class="news-title"><?= $news['heading'] ?></h1>
            <p class="news-date"><?= date('d M Y', strtotime($news['news_date'])) ?></p>
            <p class="news-text"><?= $news['news_text'] ?></p>
            <!-- Add more content as needed -->
        </div>

        <!-- Sidebar Section -->
        <div class="news-sidebar">
            <h3>News</h3>
            <ul>
                <?php while($row = $other_news->fetch_assoc()): ?>
                    <li><a href="../view/details.php?id=<?= $row['id'] ?>"><?= date('d M Y', strtotime($row['news_date'])) ?> - <?= $row['heading'] ?></a></li>
                <?php endwhile; ?>
            </ul>
            <div class="news-social">
            <?php if ($facebook_link): ?>
                <a href="<?= $facebook_link ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
            <?php endif; ?>
            <?php if ($twitter_link): ?>
                <a href="<?= $twitter_link ?>" target="_blank"><i class="fab fa-twitter"></i></a>
            <?php endif; ?>
            <?php if ($instagram_link): ?>
                <a href="<?= $instagram_link ?>" target="_blank"><i class="fab fa-instagram"></i></a>
            <?php endif; ?>

            </div>
            </div>
        </div>
    </div>
</body>
</html>