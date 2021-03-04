<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?= URL; ?>node_modules/bootstrap/dist/css/bootstrap.css">
	<link rel="stylesheet" href="<?= URL; ?>node_modules/bootstrap-icons/font/bootstrap-icons.css">
	<link rel="stylesheet" href="<?= URL; ?>node_modules/jsgrid/css/theme.css">
	<link rel="stylesheet" href="<?= URL; ?>node_modules/jsgrid/css/jsgrid.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?= URL; ?>assets/css/main.css">
	<title>Dashborad</title><!-- dinamic tile? -->
	<script src="<?= URL; ?>node_modules/jquery/dist/jquery.min.js"></script>
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-light nav-ass">
		<div class="container-fluid">
			<a class="navbar-logo-ass" href="<?= URL; ?>dashboard">
				<img src="<?= URL; ?>assets/images/logo_AS2.png" alt="" width="30" height="24" class="d-inline-block align-top">
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse text-center" id="navbarNav">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item" id="dashboardLink">
						<a class="nav-link" aria-current="page" href="<?= URL; ?>dashboard">Dashboard</a>
					</li>
					<li class="nav-item" id='newEmployeeLink'>
						<a class="nav-link" href="<?= URL; ?>dashboard/newEmployee">Employees</a>
					</li>
					<?= $_SESSION['name'] == 'admin' ? "
					<li class='nav-item' id='usersLink'>
						<a class='nav-link' href='" . URL . "users'>Users</a>
					</li>
					<li class='nav-item' id='newUsersLink'>
						<a class='nav-link' href='" . URL . "users/newUser'>Create User</a>
					</li>"
						: "" ?>
					<li class="nav-item">
						<a class="btn btn-ass float-end" href="<?= URL; ?>main/logout">Logout</a>
					</li>
				</ul>
			</div>

		</div>
	</nav>



	<!-- <script>
		var url = window.location.pathname.split("src/")[1];
		$('.nav-link').filter(function() {
			return $(this).attr('href') == url;
		}).addClass('active');
	</script> -->