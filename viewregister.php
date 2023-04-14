<?php
	// connect to database
	$con = mysqli_connect('localhost', 'root', '', 'user_db');
	if(mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Registered Users</title>
</head>
<body>
	<header>
		<h1>Registered Users</h1>
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

	<main>
		<section>
			<h2>User List</h2>
			<table>
				<thead>
					<tr>
                        <th>ID:</th>
						<th>Name</th>
						<th>Email</th>
                        <th>User Type</th>
					</tr>
				</thead>
				<tbody>
                <?php 
                        $query = "SELECT * FROM user_form";
                        $query_run = mysqli_query($con, $query);

                        if(mysqli_num_rows($query_run) > 0) {
                            while($row = mysqli_fetch_assoc($query_run)) {
                                ?>
                                <tr>
                                    <th><?php echo $row['id'] ?></th>
                                    <th><?php echo $row['name'] ?></th>
                                    <th><?php echo $row['email'] ?></th>
                                    <th><?php echo $row['user_type'] ?></th>
                                    <td class="edit-button"><a href="edit_user.php?id=<?php echo $row['id']; ?>">Edit</a></td>
                                    <td class="delete-button"><a href="delete_user.php?id=<?php echo $row['id']; ?>">Delete</a></td>
                                </tr>
                                <?php
                            }
                        }

                        else 
                        {
                        ?>
                            <tr>
                                <td colspan="3">No record found</td>
                            </tr>
                        
                        <?php
                        }
                        ?>
				</tbody>
			</table>
		</section>
	</main>
</body>
</html>

<?php
	// close connection
	mysqli_close($con);
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

main {
	padding: 20px;
}

section {
	margin-bottom: 20px;
}

section h2 {
	margin-top: 0;
}

table {
	border-collapse: collapse;
	width: 100%;
}

th, td {
	padding: 8px;
	text-align: left;
	border-bottom: 1px solid #ddd;
}

th {
	background-color: #333;
	color: #fff;
}

tfoot td {
	font-weight: bold;
}

.edit-button a,
.delete-button a {
  display: inline-block;
  padding: 8px 12px;
  background-color: #4CAF50;
  color: white;
  text-align: center;
  text-decoration: none;
  font-size: 14px;
  border-radius: 4px;
  transition: background-color 0.3s;
}

.edit-button a:hover,
.delete-button a:hover {
  background-color: #3e8e41;
}
 

</style>