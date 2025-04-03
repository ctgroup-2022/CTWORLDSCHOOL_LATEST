<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Dashboard | CT World School</title>
  <meta name="author" content="Aryana Software Development Cell">
  <meta name="copyright" content="Aryana Software Development Cell">
  <link rel="shortcut icon" href="img/favicon_io/favicon.ico">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  
  <!-- DataTables CSS -->
  <link rel="stylesheet" href="https://cdn.datatables.net/2.1.0/css/jquery.dataTables.min.css">
  
  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/style.css">
   <!-- DataTables CSS -->
   <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
  
  <!-- Bootstrap JS Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76A5P63mQ5g9xhZjGZlXZ6QZrHJsl3XZT+d0a3i67l85PbqT7MLf6hXKPm7jYMy" crossorigin="anonymous"></script>
  
  <!-- DataTables JS -->
  <script src="https://cdn.datatables.net/2.1.0/js/jquery.dataTables.min.js"></script>
    <style>
        /* Center the button container */
        .button-container {
            display: flex;
            justify-content: center;
            align-items: center;
           
        }

        /* Style the buttons */
        .button-container button {
            background-color: #4CAF50; /* Green background */
            color: white; /* White text */
            padding: 15px 30px; /* Padding for size */
            margin: 10px; /* Space between buttons */
            border: none; /* Remove borders */
            border-radius: 5px; /* Rounded corners */
            font-size: 16px; /* Increase font size */
            cursor: pointer; /* Pointer cursor on hover */
            transition: background-color 0.3s, transform 0.3s; /* Animation for hover */
        }

        /* Hover effects */
        .button-container button:hover {
            background-color: #45a049; /* Darker green on hover */
            transform: scale(1.05); /* Slight zoom on hover */
        }
        /* Center the table container */
        .table-container {
            display: flex;
            justify-content: center; /* Center horizontally */
            align-items: center; /* Center vertically */
            min-height: 100vh; /* Full screen height */
        }

        /* Style the table */
        .table {
            border-collapse: collapse; /* Remove default space between cells */
            width: 80%; /* Set table width */
            margin: 0 auto; /* Center table within its container */
            background-color: #f9f9f9; /* Light background color */
        }

        /* Style table headers */
        .table th, .table td {
            padding: 12px 15px; /* Padding for cells */
            border: 1px solid #ddd; /* Light border */
            text-align: left; /* Left-align text */
        }

        /* Style the table headers */
        .table th {
            background-color: #4CAF50; /* Green background for headers */
            color: white; /* White text */
        }

        /* Add some hover effects for table rows */
        .table tr:hover {
            background-color: #f1f1f1; /* Light gray background on hover */
        }
    </style>
    <script>
        function showTable(tableId) {
            var tables = document.getElementsByClassName('table-container');
            for (var i = 0; i < tables.length; i++) {
                tables[i].style.display = 'none';
            }
            document.getElementById(tableId).style.display = 'block';
        }
    </script>
</head>
<body>
<header>
  <nav class="navbar navbar-expand-lg navbar-dark" style="box-shadow: 1px 1px 15px rgba(0, 0, 0, 0.2); border-bottom: 1px solid rgba(211, 211, 211, 0.596); background: radial-gradient(circle, hsla(45, 93%, 53%, 1) 0%, hsla(100, 59%, 83%, 1) 100%);">
    <div class="container">
      <a class="navbar-brand" href="#">CT World School</a>
      <div class="ml-auto">
        <a href="logout.php" class="btn btn-outline-light rounded-pill" style="border: 1px solid rgb(221, 221, 221); background-color: red;">Log Out</a>
      </div>
    </div>
  </nav>
</header>
    <div class="button-container">
    <button onclick="showTable('table1')">Contact Us/ Book a school tour</button>
    <button onclick="showTable('table2')">Online Registration </button>
    <button onclick="showTable('table3')">Work With Us</button>
    </div>
    <?php
    $servername = "localhost";
    $username = "Admin";
    $password = "gDqx!=CyzH#m";
    $dbname = "ctworld2024";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    // Fetch data for Table 1
    $sql1 = "SELECT * FROM contact ORDER BY Id DESC";
    $result1 = $conn->query($sql1);
    
    // Fetch data for Table 2
    $sql2 = "SELECT * FROM onlineregsitration ORDER BY Id DESC";
    $result2 = $conn->query($sql2);
    
    // Fetch data for Table 3
    $sql3 = "SELECT * FROM workwithus ORDER BY Id DESC";
    $result3 = $conn->query($sql3);
    ?>
    <!-- Table 1 -->
    <div id="table1" class="table-container">
        <table id="example" class="table">
          <thead>            
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Message</th>
                
            </tr>
            </thead>
            <tbody>
            <?php if ($result1->num_rows > 0): ?>
                <?php while($row = $result1->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row['Name']; ?></td>
                        <td><?php echo $row['Email']; ?></td>
                        <td><?php echo $row['Phone']; ?></td>
                        <td><?php echo $row['Message']; ?></td>
                      

                    </tr>
                <?php endwhile; ?>
            <?php else: ?>
                <tr>
                    <td colspan="5">No data found</td> 
                </tr>
            <?php endif; ?>
            </tbody>
        </table>
    </div>
    <!-- Table 2 -->
    <div id="table2" class="table-container">
      <table id="examples" class="table">
          <thead>   
            <tr>
                <th>Student_Name</th>
                <th>Parent_Name</th>
                <th>Phone</th>
                <th>Grade</th>
                <th>Message</th>
                <th>Created At</th>
            </tr>
            </thead>
            <tbody>
            <?php if ($result2->num_rows > 0): ?>
                <?php while($row = $result2->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row['Student_Name']; ?></td>
                        <td><?php echo $row['Parent_Name']; ?></td>
                        <td><?php echo $row['Phone']; ?></td>
                        <td><?php echo $row['Grade']; ?></td>
                        <td><?php echo $row['Message']; ?></td>
                        <td><?php echo $row['Created_at'];?></td>
                        
                    </tr>
                <?php endwhile; ?>
            <?php else: ?>
                <tr>
                    <td colspan="5">No data found</td>
                </tr>
            <?php endif; ?>
            </tbody>
        </table>
    </div>

    <!-- Table 3 -->
    <div id="table3" class="table-container">
    <table id="exampler" class="table">
    <thead>   
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Resume</th>
                <th>Description</th>
                <th>Created At</th>
            </tr>
            </thead>
            <tbody>
            <?php if ($result3->num_rows > 0): ?>
                <?php while($row = $result3->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row['Name']; ?></td>
                        <td><?php echo $row['Email']; ?></td>
                        <td><?php echo $row['Phone']; ?></td>
                        <td>
    <a href="https://www.ctworld.in/admin/uploads/<?php echo htmlspecialchars(basename($row['Resume'])); ?>" target="_blank">View Resume</a>
</td>

                        <td><?php echo $row['Description']; ?></td>
                        <td><?php echo $row['Created_at'];?></td>
                    </tr>
                <?php endwhile; ?>
            <?php else: ?>
                <tr>
                    <td colspan="5">No data found</td>
                </tr>
            <?php endif; ?>
            </tbody>
        </table>
    </div>

    <script>
        // Show the first table by default
        showTable('table1');
        $(document).ready(function() {
            $('#example').DataTable({
                "paging": true,  // Enable pagination
                "pageLength": 10 // Set the number of rows per page
                
            });
        });
        $(document).ready(function() {
            $('#examples').DataTable({
                "paging": true,  // Enable pagination
                "pageLength": 10 // Set the number of rows per page
            });
        });
        $(document).ready(function() {
            $('#exampler').DataTable({
                "paging": true,  // Enable pagination
                "pageLength": 10 // Set the number of rows per page
            });
        });
    </script>

</body>
</html>
    