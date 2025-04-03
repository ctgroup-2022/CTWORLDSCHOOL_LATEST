<?php

// Create connection

 $con = mysqli_connect('localhost', 'Admin', 'gDqx!=CyzH#m', 'ctworld2024');

// Check connection

if ($con->connect_errno) {

  echo "Failed to connect to MySQL: " . $mysqli->connect_error;

  exit();

} else {

  // echo "Connected  <br/>";

}

?>