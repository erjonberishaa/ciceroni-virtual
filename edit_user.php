<?php
	// connect to database
	$conn = mysqli_connect('localhost', 'root', '', 'user_db');
	if(mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

    // Check if form submitted
    if (isset($_POST['submit'])) {

    // Get user data from form
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $user_type = $_POST['user_type'];
  
    // Update user data in database
    $update = "UPDATE user_form SET name='$name', email='$email', user_type='$user_type' WHERE id='$id'";
    mysqli_query($conn, $update);
    header('location: viewregister.php');
  }
  
  // Get user data from database
  if (isset($_GET['id'])) {
    $id = mysqli_real_escape_string($conn, $_GET['id']);
    $select = "SELECT * FROM user_form WHERE id='$id'";
    $result = mysqli_query($conn, $select);
    $row = mysqli_fetch_assoc($result);
  }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Registered Users</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
	<header>
		<h1>Edit Users</h1>
	</header>

	<nav>
		<ul>
            <li><a href="#">Home</a></li>
        	<li><a href="adminpage.php">Dashboard</a></li>
			<li><a href="C:\xampp\htdocs\ciceroni-virtual\admin\viewregister.php">Users</a></li>
			<li><a href="index.php">Logout</a></li>
		</ul>
	</nav>

	<main>
        <div class="form-container">
        <form method="POST" action="">
        <h3>Edit User</h3>
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <input type="text" name="name" required placeholder="Enter your name" value="<?php echo $row['name']; ?>">
        <input type="email" name="email" required placeholder="Enter your email" value="<?php echo $row['email']; ?>">
        <select name="user_type" id="">
        <option value="user" <?php if ($row['user_type'] == 'user') echo 'selected'; ?>>user</option>
        <option value="admin" <?php if ($row['user_type'] == 'admin') echo 'selected'; ?>>admin</option>
        </select>
        <input type="submit" name="submit" value="Update User" class="form-btn">
        <a href="view_users.php" class="form-btn">Cancel</a>
        </form>
        </div>
    </main>
</body>
</html>

<?php
	// close connection
	mysqli_close($conn);
?>


<style>
    .container {
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 20px;
    padding-bottom: 60px;
}

.container .content {
    text-align: center;
    
}

.container .content h3 {
    font-size: 30px;
    color: #333;
}

.container .content h3 span {
    background: crimson;
    color: #fff;
    border-radius: 5px;
    padding: 0 15px;
}

.container .content h1 {
    font-size: 50px;
    color: #333;
}

.container .content h1 span {
    font-size: 20px;
    margin-bottom: 20px;
}

.container .content p {
    font-size: 25px;
    margin-bottom: 20px;
}

.container .content .btn {
    display: inline-block;
    padding: 10px 30px;
    font-size: 20px;
    background: #333;
    color: #fff;
    margin: 0 5px;
    text-transform: uppercase;
}

.container .content .btn:hover {
    background: crimson;
}

.form-container {
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 20px;
    padding-bottom: 60px;
    background: #eee;
}

.form-container form {
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 5px 10px rgba(0, 0, 0, .1);
    background: #fff;
    text-align: center;
    width: 500px;
}

.form-container form h3 {
    font-size: 30px;
    text-transform: uppercase;
    margin-bottom: 10px;
    color: #333;
}

.form-container form input,
.form-container form select{
    width: 100%;
    padding: 10px 3px;
    font-size: 17px;
    margin: 8px 0;
    background: #eee;
    border-radius: 5px;
}

.form-container form option {
    background: #fff;
}

.form-container form .form-btn {
    background: #fbd0d9;
    color: crimson;
    text-transform: capitalize;
    font-size: 20px;
    cursor: pointer;
}

.form-container form .form-btn:hover {
    background: crimson;
    color: #fff;
}

.form-container p {
    margin-top: 10px;
    font-size: 20px;
    color: #333;
}

.form-container form p {
    margin-top: 10px;
    font-size: 20px;
    color: #333;
}

.form-container form p a {
    color: crimson;
}

.form-container form .error-msg {
    margin: 10px 0;
    display: block;
    background: crimson;
    color:#fff;
    border-radius: 5px;
    font-size: 20px;
}

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

main {
	padding: 20px;
}

section {
	margin-bottom: 20px;
}

section h2 {
	margin-top: 0;
}
</style>