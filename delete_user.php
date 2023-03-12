<?php
    // connect to database
    $con = mysqli_connect('localhost', 'root', '', 'user_db');
    if(mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    // check if id parameter is set and not empty
    if(isset($_GET['id']) && !empty($_GET['id'])) {
        $id = $_GET['id'];
        
        // delete user with matching id from database
        $query = "DELETE FROM user_form WHERE id=$id";
        if(mysqli_query($con, $query)) {
            header('location:viewregister.php');
        } else {
            echo "Error deleting user: " . mysqli_error($con);
        }
    } else {
        echo "Invalid request";
    }
?>