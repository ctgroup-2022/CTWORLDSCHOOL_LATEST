<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $student_name = $conn->real_escape_string($_POST['Student_Name']);
    $parent_name = $conn->real_escape_string($_POST['Parent_Name']);
    $phone = $conn->real_escape_string($_POST['Phone']);
    $grade = $conn->real_escape_string($_POST['Grade']);
    $message = $conn->real_escape_string($_POST['Message']);

    $sql = "INSERT INTO onlineregsitration (Student_Name, Parent_Name, Phone, Grade, Message) VALUES ('$student_name', '$parent_name' , '$phone' , '$grade' ,'$message')";

    if ($conn->query($sql) === TRUE) {
       header("Location:thankyou.php");

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
