<?php
	$connection = mysqli_connect("localhost", "stu_viewer", "", "student");
	session_start();
	$user_check=$_SESSION['login_user'];
	$result = mysqli_query($connection, "SELECT * FROM profile WHERE username='$user_check'");
	$row = mysqli_fetch_assoc($result);
	$login_session =$row['username'];
	if(!isset($login_session)){
		mysqli_close($connection); // Closing Connection
		header('Location: index.php'); // Redirecting To Home Page
	}
?>