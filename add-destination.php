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

//
if(!isset($_SESSION['user_name'])){
    header('location: login.php');
    exit;
  }
  
// Check if the user has submitted the form
if (isset($_POST['post'])) {
  // Get the product details from the form
  $destination_name = $_POST['destination_name'];
  $price = $_POST['price'];
  $description = $_POST['description']; // Retrieve the selected value from the form

  // Upload the image file and get its path
  $image = "";
  if ($_FILES['image']['error'] == 0) {
    $target_dir = "images_db/";
    $target_file = $target_dir . basename($_FILES['image']['name']);
    move_uploaded_file($_FILES['image']['tmp_name'], $target_file);
    $image_path = $target_file;
  }

  // Insert the product into the database
  $sql = "INSERT INTO visit (destination_name, price, description, image)
  VALUES ('$destination_name', '$price', '$description', '$image')";
  if ($conn->query($sql) === TRUE) {
    // Redirect to index.php
    header('Location: index.php');
    exit;
  } else {
    echo "Error posting product: " . $conn->error;
  }
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html>

<body>
    <h1>Sygjeroni destinacion!</h1>
    <form method="POST" enctype="multipart/form-data">
      <label>Destination name:</label><br>
      <input type="text" name="destination_name"><br>
      <label>Price:</label><br>
      <input type="text" name="price"><br>
      <label>Description:</label><br>
      <textarea name="description"></textarea><br>
      <label>Image:</label><br>
      <input type="file" name="image"><br>
      <input type="submit" name="post" value="Post">
    </form>
  </div>
</body>

</html>

<style>
  body {
  background-color: #f5f5f5;
  font-family: Arial, sans-serif;
}

h1 {
      text-align: center;
      color: #333;
      font-family: Arial, sans-serif;
}

form {
  max-width: 500px;
  margin: 0 auto;
  padding: 20px;
  background-color: #fff;
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}

label {
  display: block;
  margin-top: 10px;
  font-weight: bold;
}

input[type="text"],
textarea {
  width: 100%;
  padding: 10px;
  margin-top: 5px;
  margin-bottom: 15px;
  border: 1px solid #ccc;
  border-radius: 5px;
  box-sizing: border-box;
  font-size: 16px;
}

input[type="file"] {
  margin-top: 5px;
}

input[type="submit"] {
  background-color: #4CAF50;
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  font-size: 16px;
  margin-top: 10px;
}

input[type="submit"]:hover {
  background-color: #3e8e41;
}

</style>