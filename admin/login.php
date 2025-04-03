<?php
// Start the session
session_start();

// Database connection settings
$servername = "localhost";
$db_username = "root"; // Change this to your DB username
$db_password = "";     // Change this to your DB password
$dbname = "ctworld";

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
$sql = "SELECT * FROM login_id WHERE username = ?";
$sql = "SELECT * FROM login_id WHERE password = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username);
$stmt->bind_param("s", $password);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Fetch the user data
    $user = $result->fetch_assoc();

    // Verify the password
    if (password_verify($password, $user['password'])) {
        // Store user information in session variables
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $user['username'];

        // Redirect to a protected page
        header("Location: dashboard.php");
        exit();
    } else {
        echo "Invalid password.";
    }
} else {
    echo "No user found with that username.";
}

// Close the connection
$stmt->close();
$conn->close();
?>
