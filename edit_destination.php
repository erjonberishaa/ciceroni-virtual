<?php
// Connect to the database
@include 'config.php';

// Get the destination ID from the URL parameter
$user_id = $_GET['user_id'];

// Fetch the destination record from the database
$sql = "SELECT * FROM visit WHERE user_id = $user_id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

// Display a form with the current field values for the selected destination
?>
<form action="update_destination.php" method="post">
  <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
  <label for="destination_name">Destination Name:</label>
  <input type="text" name="destination_name" value="<?php echo $row['destination_name']; ?>"><br>
  <label for="price">Price:</label>
  <input type="text" name="price" value="<?php echo $row['price']; ?>"><br>
  <label for="description">Description:</label>
  <textarea name="description"><?php echo $row['description']; ?></textarea><br>
  <label for="image">Image:</label>
  <input type="file" name="image"><br>
  <input type="submit" value="Save">
</form>