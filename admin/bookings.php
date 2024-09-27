<?php

include "../action/get_bookings.php";

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
			<li><a href="../admin/admin.php" ><i class='bx bxs-dashboard icon' ></i> Dashboard</a></li>
			<li><a href="../admin/adminnews.php" ><i class='bx bxs-news icon' ></i> News</a></li>
			<li><a href="../admin/bookings.php" class="active"><i class='bx bxs-book icon' ></i> Bookings</a></li>
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
			<h1 class="title">Bookings</h1>
			<ul class="breadcrumbs">
				<li><a href="#">Bookings</a></li>
				<li class="divider">/</li>
				<li><a href="#" class="active">Dashboard</a></li>
			</ul>

            <div class="content-data">
					<div class="head">
					</div>
					<div class="table-responsive">
						<table>
							<thead>
								<tr>
									<th>Name</th>
									<th>Email</th>
									<th>Service</th>
                                    <th>Message</th>
								</tr>
							</thead>
							<tbody>
							    <?php
							    if ($result->num_rows > 0) {
							        while ($row = $result->fetch_assoc()) {
							            echo "<tr>";
							            echo "<td>" . htmlspecialchars($row['name']) . "</td>";
							            echo "<td>" . htmlspecialchars($row['email']) . "</td>";
							            echo "<td>" . htmlspecialchars($row['service_of_interest']) . "</td>";
							            echo "<td>" . htmlspecialchars($row['message']) . "</td>";
							            echo "</tr>";
							        }
							    } else {
							        echo "<tr><td colspan='4'>No bookings found.</td></tr>";
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
            document.addEventListener('DOMContentLoaded', function () {
                const urlParams = new URLSearchParams(window.location.search);
                const message = urlParams.get('msg');
                if (message) {
                    Swal.fire("Notice", message, "info");
                }
            });
        </script>

	<script>
		// Static data for the chart
		const xValues = ["User", "Rooms"];
		const yValues = [150, 200];
		const barColors = ["red", "green"];

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
