<?php
include "../action/getuserDetails.php";
include "../settings/connection.php";

// Fetch the count of news articles
$newsQuery = "SELECT COUNT(*) as totalNews FROM news";
$newsResult = mysqli_query($conn, $newsQuery);
$newsData = mysqli_fetch_assoc($newsResult);
$totalNews = $newsData['totalNews'];

// Fetch the count of bookings
$bookingQuery = "SELECT COUNT(*) as totalBookings FROM contact";
$bookingResult = mysqli_query($conn, $bookingQuery);
$bookingData = mysqli_fetch_assoc($bookingResult);
$totalBookings = $bookingData['totalBookings'];

$recentBookingsQuery = "SELECT name, email, service_of_interest FROM contact ORDER BY id DESC LIMIT 6";
$recentBookingsResult = mysqli_query($conn, $recentBookingsQuery);
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="../css/admin.css">
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon-16x16.png">
    <link rel="manifest" href="../assets/images/site.webmanifest">
	<title>AdminSite</title>
	<style>
		/* Table Styles */
		.table-responsive {
			overflow-x: auto;
			margin-top: 20px;
		}

		table {
			width: 100%;
			border-collapse: collapse;
			margin: 0;
			padding: 0;
			table-layout: fixed;
			border: 1px solid #ddd;
		}

		table thead {
			background-color: #f4f4f4;
		}

		table th, table td {
			padding: 12px;
			text-align: left;
			border-bottom: 1px solid #ddd;
		}

		table th {
			background-color: #f9fafb;
			color: #333;
			font-weight: 600;
		}

		table tbody tr:hover {
			background-color: #f1f1f1;
		}

		table tbody tr:nth-child(even) {
			background-color: #f9f9f9;
		}

		table tbody tr td {
			color: #555;
			font-size: 14px;
		}
	</style>
</head>
<body>

	<section id="sidebar">
		<a href="../admin/admin.php" class="brand"><i class='bx bxs-smile icon'></i> Lartey Studios</a>
		<ul class="side-menu">
			<li><a href="../admin/admin.php" class="active"><i class='bx bxs-dashboard icon' ></i> Dashboard</a></li>
			<li><a href="../admin/adminnews.php"><i class='bx bxs-news icon' ></i> News</a></li>
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
			<h1 class="title">Dashboard</h1>
			<ul class="breadcrumbs">
				<li><a href="#">Home</a></li>
				<li class="divider">/</li>
				<li><a href="#" class="active">Dashboard</a></li>
			</ul>
			<div class="info-data">
				<div class="card">
					<div class="head">
						<div>
							<h2><?php echo $totalNews; ?></h2>
							<p>News Articles</p>
						</div>
						<i class='bx bx-user icon' ></i>
					</div>
					<span class="progress" data-value="40%"></span>
					<span class="label">40%</span>
				</div>
				<div class="card">
					<div class="head">
						<div>
							<h2><?php echo $totalBookings; ?></h2>
							<p>Bookings</p>
						</div>
						<i class='bx bx-home icon' ></i>
					</div>
					<span class="progress" data-value="60%"></span>
					<span class="label">60%</span>
				</div>
			</div>
			
			<div class="data">
				<div class="content-data">
					<div class="head">
						<h3>Stats</h3>
					</div>
					<div class="chart">
						<canvas id="myChart" style="width:100%;max-width:700px"></canvas>
					</div>
				</div>

				<div class="content-data">
				<div class="head">
					<h3>Bookings</h3>
					<button><a href="../admin/bookings.php" style="color: #fff;"> View All Bookings</a></button>
				</div>
				<div class="table-responsive">
					<table>
						<thead>
							<tr>
								<th>Name</th>
								<th>Email</th>
								<th>Service</th>
							</tr>
						</thead>
						<tbody>
							<?php
							if (mysqli_num_rows($recentBookingsResult) > 0) {
								while ($row = mysqli_fetch_assoc($recentBookingsResult)) {
									echo "<tr>";
									echo "<td>" . htmlspecialchars($row['name']) . "</td>";
									echo "<td>" . htmlspecialchars($row['email']) . "</td>";
									echo "<td>" . htmlspecialchars($row['service_of_interest']) . "</td>";
									echo "</tr>";
								}
							} else {
								echo "<tr><td colspan='3'>No recent bookings found</td></tr>";
							}
							?>
						</tbody>
					</table>
				</div>
			</div>
		</main>
	</section>

	<!-- Scripts -->
	<script src="../public/js/admin.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

	<script>
		// PHP variables passed to JavaScript
		const totalNews = <?php echo $totalNews; ?>;
		const totalBookings = <?php echo $totalBookings; ?>;

		// Data for the chart
		const xValues = ["News Articles", "Bookings"];
		const yValues = [totalNews, totalBookings];
		const barColors = ["#ff6384", "#36a2eb"];

		new Chart("myChart", {
			type: "bar",
			data: {
				labels: xValues,
				datasets: [{
					backgroundColor: barColors,
					data: yValues
				}]
			},
			options: {
				legend: {display: false},
				title: {
					display: true,
					text: "Statistics Overview"
				}
			}
		});
	</script>

</body>
</html>
