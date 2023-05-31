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

if(isset($_GET['submit']))
{	 
	 $address=mysqli_real_escape_string($conn, $_GET['address']);
	 $note = mysqli_real_escape_string($conn,$_GET['note']);
	 $sql = "INSERT INTO users_address(Address,Note)  VALUES('$address','$note')";
	  $result = mysqli_query($conn,$sql);
	 }
     if($result) {
        header("Location:contactus.html");
    }
	 
$conn->close();
?>
