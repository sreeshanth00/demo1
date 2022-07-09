<?php
  $FirstName = $_POST['FirstName'];
  $LastName = $_POST['LastName'];
  $DateOfBirth = $_POST['DateOfBirth'];
  $Gender = $_POST['Gender'];
  $Phone = $_POST['Phone'];
  $Email = $_POST['Email'];
  $Password = $_POST['Password'];

$servername = "localhost";
$username = "root";
$passwordb = "";
$dbname = "mystore";

// Create connection
$conn = new mysqli($servername, $username, $passwordb, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO student (FirstName,LastName,DateOfBirth,Gender,Phone,Email,Password)
VALUES ('$FirstName','$LastName','$DateOfBirth','$Gender','$Phone','$Email','$Password')";

if ($conn->query($sql) === TRUE) {
  header("location: tlogin.html");
} else {
  echo "Error";
}

$conn->close();
?>
