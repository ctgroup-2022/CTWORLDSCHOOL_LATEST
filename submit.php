<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $conn->real_escape_string($_POST['Name']);
    $email = $conn->real_escape_string($_POST['Email']);
    $phone = $conn->real_escape_string($_POST['Phone']);
    $message = $conn->real_escape_string($_POST['Message']);

    $sql = "INSERT INTO contact (Name, Email, Phone, Message) VALUES ('$name', '$email' , '$phone' , '$message')";

    if ($conn->query($sql) === TRUE) {
       header("Location:thankyou.php");

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
