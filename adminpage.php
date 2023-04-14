<?php 
   @include 'config.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome to the Admin Panel Dashboard! </title>
	<link rel="stylesheet" href="style/style_dashboard.css">
</head>
<body>
	<header>
		<h1>Admin Dashboard</h1>
	</header>

	<nav >
		<ul>
            <li><a href="#">Home</a></li>
        	<li><a href="adminpage.php">Dashboard</a></li>
			<li><a href="viewregister.php">Users</a></li>
			<li><a href="view-destination.php">Destinations</a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>
	</nav>

	<main>
		<section>
			<h2>Dashboard</h2>
			<p>Welcome to the admin panel dashboard!</p>
		</section>
	</main>
</body>
</html>