<?php
session_start();
if(isset($_POST['submit'])){
 if(empty($_POST['email']) || empty($_POST['password'])){
 $error = "Username or Password is Invalid";
 }
 else
 {
 //Define $user and $pass
 $user=$_POST['email'];
 $pass=$_POST['password'];
 //Establishing Connection with server by passing server_name, user_id and pass as a patameter
 $conn = mysqli_connect("localhost", "root", "");
 //Selecting Database
 $db = mysqli_select_db($conn, "mystore");
 //sql query to fetch information of registerd user and finds user match.
 $query = mysqli_query($conn, "SELECT * FROM teacher WHERE Password='$pass' AND Email='$user'");

 $rows = mysqli_num_rows($query);
 if($rows == 1){
   $_SESSION['email']=$user;
 header("Location: tdashboard.php"); // Redirecting to other page
 }
 else
 {
   echo  "Username of Password is Invalid";
 }
 mysqli_close($conn); // Closing connection
 }
}

?>
