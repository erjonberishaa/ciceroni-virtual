<?php
// Connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'user_db');
	if(mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

// Get the user ID from the URL parameter
$user_id = $_GET['id'];

// Delete the corresponding record from the database
$sql = "DELETE FROM visit WHERE user_id = $user_id";
$conn->query($sql);

// Redirect the user back to the main page
header("Location: adminpage.php");
exit();
?>