<?php
// Start the session
session_start();

// Database connection settings
$servername = "localhost";
$db_username = "Admin"; // Change this to your DB username
$db_password = "gDqx!=CyzH#m";     // Change this to your DB password
$dbname = "ctworld2024";

// Create a connection
$conn = new mysqli($servername, $db_username, $db_password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the submitted form data
$username = $_POST['username'];
$password = $_POST['password'];

// SQL query to select the user
$sql = "SELECT * FROM login_id WHERE username ='$username' AND password ='$password'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {

        // Redirect to a protected page
        header("Location: dashboard.php");
        exit();
    } else {
        header("Location: index.php");
        
    }


// Close the connection
$stmt->close();
$conn->close();
?>
