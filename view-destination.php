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

<body>
    <h1>Admin Panel</h1>
    <a href="logout.php">Logout</a> <!-- Add logout button to log out the admin -->
    <table>
      <thead>
        <tr>
          <th>Destination Name</th>
          <th>Price</th>
          <th>Description</th>
          <th>Image</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
          // Display all files in a table
          if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
              echo "<tr>";
              echo "<td>".$row['destination_name']."</td>";
              echo "<td>".$row['price']."</td>";
              echo "<td>".$row['description']."</td>";
              echo "<td><img src='images_db/'".$row['image']."' width='100'></td>";
              echo "<td><a href='edit.php?id=".$row['user_id']."'>Edit</a> | <a href='delete.php?id=".$row['user_id']."' onclick='return confirm(\"Are you sure you want to delete this file?\")'>Delete</a></td>";
              echo "</tr>";
            }
          } else {
            echo "<tr><td colspan='5'>No files found.</td></tr>";
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
      font-size: 16px;
    }
    h1 {
      text-align: center;
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