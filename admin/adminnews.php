<?php
include "../action/getuserDetails.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

	<link rel="stylesheet" href="../css/adminnews.css">
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon-16x16.png">
    <link rel="manifest" href="../assets/images/site.webmanifest">
	<title>AdminSite</title>

</head>
<body>

	<section id="sidebar">
		<a href="../admin/admin.php" class="brand"><i class='bx bxs-smile icon'></i> Lartey Studios</a>
		<ul class="side-menu">
			<li><a href="../admin/admin.php" ><i class='bx bxs-dashboard icon' ></i> Dashboard</a></li>
			<li><a href="../admin/adminnews.php" class="active"><i class='bx bxs-news icon' ></i> News</a></li>
			<li><a href="../admin/bookings.php"><i class='bx bxs-book icon' ></i> Bookings</a></li>
			<li><a href="../admin/profile.php"><i class='bx bxs-user icon' ></i> Profile</a></li>
			<li><a href="../admin/users.php"><i class='bx bxs-user-account icon' ></i> Users</a></li>


		</ul>
		<div class="ads">
			<div class="wrapper">
				<a href="../login/logout.php" class="btn-upgrade">Logout</a>
			</div>
		</div>
	</section>

	<section id="content">

		<nav>
			<i class='bx bx-menu toggle-sidebar' ></i>
			<form action="#">
				<div class="form-group">
					<input type="text" placeholder="Search...">
					<i class='bx bx-search icon' ></i>
				</div>
			</form>
			<a href="#" class="nav-link">
				<i class='bx bxs-bell icon' ></i>
				<span class="badge">5</span>
			</a>
			<a href="#" class="nav-link">
				<i class='bx bxs-message-square-dots icon' ></i>
				<span class="badge">8</span>
			</a>
			<span class="divider"></span>
			<div class="profile">
			<?php echo getUserProfileImage(); ?>
				<ul class="profile-link">
					<li><a href="#"><i class='bx bxs-user-circle icon' ></i> Profile</a></li>
					<li><a href="#"><i class='bx bxs-log-out-circle' ></i> Logout</a></li>
				</ul>
			</div>
		</nav>
	
		<main>
			<h1 class="title">News</h1>
			<ul class="breadcrumbs">
				<li><a href="#">Add news</a></li>
				<li class="divider">/</li>
				<li><a href="#" class="active">Dashboard</a></li>
			</ul>

		<div class="container">
			<h2>Add news</h2>
			<div class="contact-container">
				<form action="../action/add_news.php" method="POST" enctype="multipart/form-data">
					<!-- Heading Field -->
					<label for="heading">Heading</label>
					<input type="text" id="heading" name="heading" required>

					<!-- News Text Field -->
					<label for="news_text">News Text</label>
					<textarea id="news_text" name="news_text" rows="4" required></textarea>

					<!-- News Date Field -->
					<label for="news_date">News Date</label>
					<input type="date" id="news_date" name="news_date" required>

					<!-- Summary Field -->
					<label for="summary">Summary</label>
					<textarea id="summary" name="summary" rows="2"></textarea>

					<!-- Twitter Link Field -->
					<label for="twitter_link">Twitter Link</label>
					<input type="url" id="twitter_link" name="twitter_link" placeholder="https://twitter.com/yourprofile">

					<!-- Facebook Link Field -->
					<label for="facebook_link">Facebook Link</label>
					<input type="url" id="facebook_link" name="facebook_link" placeholder="https://facebook.com/yourprofile">

					<!-- Instagram Link Field -->
					<label for="instagram_link">Instagram Link</label>
					<input type="url" id="instagram_link" name="instagram_link" placeholder="https://instagram.com/yourprofile">

					<!-- Image Upload Field -->
					<label for="news_image">Upload Image</label>
        			<input type="file" id="news_image" name="news_image" accept="image/*">

					<!-- Submit Button -->
					<input type="submit" value="Submit News">
				</form>
			</div>
		</div>

		</main>
	</section>

	<!-- Scripts -->
	<script src="../public/js/admin.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

	<script>
		document.addEventListener('DOMContentLoaded', function () {
        const urlParams = new URLSearchParams(window.location.search);
        const message = urlParams.get('msg');
        if (message) {
            Swal.fire("Notice", message, "info");
        }
    });

	</script>

		<script>
            document.addEventListener('DOMContentLoaded', function () {
                const urlParams = new URLSearchParams(window.location.search);
                const message = urlParams.get('msg');
                if (message) {
                    Swal.fire("Notice", message, "info");
                }
            });
        </script>

</body>
</html>
