<?php
session_start(); // Start the session to access user data

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Retrieve all files from the database
$sql = "SELECT * FROM visit";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html>

<head>
	<title>Suggested Destinations</title>
</head>
<body>
	<header>
		<h1>Suggested Destinations</h1>
	</header>

	<nav>
		<ul>
      <li><a href="#">Home</a></li>
      <li><a href="adminpage.php">Dashboard</a></li>
			<li><a href="viewregister.php">Users</a></li>
			<li><a href="view-destination.php">Destinations</a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>
	</nav>
    <table>
      <thead>
        <tr>
          <th>Destination Name</th>
          <th>Price</th>
          <th>Description</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
      <?php
// Display all users in a table
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>".$row['destination_name']."</td>";
    echo "<td>".$row['price']."</td>";
    echo "<td>".$row['description']."</td>";
    echo "<td><a href='edit_destination.php?id=".$row['user_id']."'>Edit</a> | <a href='delete_destination.php?id=".$row['user_id']."' onclick='return confirm(\"Are you sure you want to delete this user?\")'>Delete</a></td>";
    echo "</tr>";
  }
} else {
  echo "<tr><td colspan='5'>No users found.</td></tr>";
}
?>

      </tbody>
    </table>
  </div>
</body>

</html>

<?php
// Close the database connection
$conn->close();
?>

<style>
    body {
	font-family: Arial, sans-serif;
	margin: 0;
	padding: 0;
}

    header {
	background-color: #333;
	color: #fff;
	padding: 20px;
}

nav {
	background-color: #eee;
	border-bottom: 1px solid #ccc;
}

nav ul {
	margin: 0;
	padding: 0;
	list-style: none;
	display: flex;
}

nav ul li {
	margin-right: 20px;
}

nav ul li a {
	display: block;
	padding: 10px;
	color: #333;
	text-decoration: none;
}

nav ul li a:hover {
	background-color: #ccc;
}
    h1 {
      text-align: left;
      margin-top: 20px;
    }
    table {
      margin: 20px auto;
      border-collapse: collapse;
    }
    th, td {
      padding: 10px;
      border: 1px solid #ccc;
    }
    th {
      background-color: #f2f2f2;
    }
    td img {
      display: block;
      margin: 0 auto;
    }
    .action {
      text-align: center;
    }
    .action a {
      color: #fff;
      background-color: #4CAF50;
      padding: 6px 12px;
      border-radius: 4px;
      text-decoration: none;
      margin-right: 10px;
    }
    .action a:hover {
      background-color: #3e8e41;
    }
    .action a:last-child {
      background-color: #f44336;
    }
  </style>