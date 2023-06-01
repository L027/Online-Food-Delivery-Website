<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "momos_users";
// Create connection
$conn=new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}
session_start();
if(isset($_POST['submit']))
{	 
	 $fullname=mysqli_real_escape_string($conn,$_POST['fullname']);
	 $email =mysqli_real_escape_string($conn, $_POST['email']);
     $message=mysqli_real_escape_string($conn,$_POST['message']);
	 $sql = "INSERT INTO contacted_users(Fullname,Email,Message)  VALUES('$fullname','$email','$message')";
     $result = mysqli_query($conn,$sql);
	 }
     if($result) {
        header("Location:contactus.html");
    }
     
$conn->close();
?>

