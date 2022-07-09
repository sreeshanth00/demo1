<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_student']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['delete_student']);

    $query = "DELETE FROM student WHERE id='$student_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Student Deleted Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Deleted";
        header("Location: index.php");
        exit(0);
    }
}

if(isset($_POST['update_student']))
{
    $student_id = mysqli_real_escape_string($con, $_POST['student_id']);

    $FirstName = mysqli_real_escape_string($con, $_POST['FirstName']);
    $LastName = mysqli_real_escape_string($con, $_POST['LastName']);
    $DateOfBirth = mysqli_real_escape_string($con, $_POST['DateOfBirth']);
    $Gender = mysqli_real_escape_string($con, $_POST['Gender']);
    $Phone = mysqli_real_escape_string($con, $_POST['Phone']);
    $Email = mysqli_real_escape_string($con, $_POST['Email']);
    $Password = mysqli_real_escape_string($con, $_POST['Password']);

    $query = "UPDATE student SET FirstName='$FirstName', LastName='$LastName', DateOfBirth='$DateOfBirth',Gender='$Gender',Phone='$Phone', Email='$Email', Password='$Password' WHERE id='$student_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Student Updated Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Updated";
        header("Location: index.php");
        exit(0);
    }

}


if(isset($_POST['save_student']))
{
  $FirstName = mysqli_real_escape_string($con, $_POST['FirstName']);
  $LastName = mysqli_real_escape_string($con, $_POST['LastName']);
  $DateOfBirth = mysqli_real_escape_string($con, $_POST['DateOfBirth']);
  $Gender = mysqli_real_escape_string($con, $_POST['Gender']);
  $Phone = mysqli_real_escape_string($con, $_POST['Phone']);
  $Email = mysqli_real_escape_string($con, $_POST['Email']);
  $Password = mysqli_real_escape_string($con, $_POST['Password']);

    $query = "INSERT INTO student (FirstName,LastName,DateOfBirth,Gender,Phone,Email,Password) VALUES ('$FirstName','$LastName','$DateOfBirth','$Gender','$Phone','$Email','$Password')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Student Created Successfully";
        header("Location: student-create.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Created";
        header("Location: student-create.php");
        exit(0);
    }
}

?>
