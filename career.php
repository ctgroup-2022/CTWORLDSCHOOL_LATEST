<?php
include 'config.php';

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $phone = $_POST['Phone'];
    $description = $_POST['Description'];
  
    $target_dir = "admin/uploads/";
    $resume_file = $target_dir . basename($_FILES["Resume"]["name"]);
    $uploadOk = 1;
    $fileType = strtolower(pathinfo($resume_file, PATHINFO_EXTENSION));

    // Check if file is a PDF or Word document
    if ($fileType != "pdf" && $fileType != "doc" && $fileType != "docx") {
        echo "Sorry, only PDF, DOC, & DOCX files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        if (move_uploaded_file($_FILES["Resume"]["tmp_name"], $resume_file)) {
            $stmt = $conn->prepare("INSERT INTO workwithus (Name, Email, Phone, Resume, Description) VALUES (?, ?, ?, ?, ?)");
            $stmt->bind_param("sssss", $name, $email, $phone, $resume_file, $description);

            if ($stmt->execute()) {
                // Redirect to the Thank You page
                header("Location: thankyou.php");
                exit(); // Make sure to exit after redirect
            } else {
                echo "Error: " . $stmt->error;
            }

            $stmt->close();
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}