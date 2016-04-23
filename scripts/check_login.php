<?php
	session_start(); // Starting Session
	$error=""; // Variable To Store Error Message
	if (isset($_POST["submit"])) {
		if (empty($_POST["username"]) || empty($_POST["password"])) {
			$error = "You must enter a Username and Password";
		}
		else {
			// Define $username and $password
			$username=$_POST["username"];
			$password=$_POST["password"];
			$user_type=$_POST["user_type"];
			// Student Login
			if($user_type=="student") {
				// Establishing Connection with Server by passing server_name, user_id and password as a parameter
				$connection = mysqli_connect("localhost", "stu_viewer", "", "student");
				if (!$connection) {
				    $error="Connection error";
		 		    die("Connection failed: " . mysqli_connect_error());
				}
				$error="Connection successfull";
				// To protect MySQL injection for Security purpose
				$username = stripslashes($username);
				$password = stripslashes($password);
				$username = mysqli_real_escape_string($connection ,$username);
				$password = mysqli_real_escape_string($connection ,$password);
				// SQL query to fetch information of registerd users and finds user match.
				$result = mysqli_query($connection, "SELECT username, password FROM student_login WHERE password='$password' AND username='$username'");
				$rows = mysqli_num_rows($result);
				if ($rows == 1) {
					$_SESSION['login_user']=$username; // Initializing Session
					header("location: profile.php"); // Redirecting To Other Page
				} 
				else {
					$error = "Username or Password is invalid";
				}
				mysqli_close($connection); // Closing Connection
			}
			// Faculty Login
			else if($user_type=="faculty"){
				// Establishing Connection with Server by passing server_name, user_id and password as a parameter
				$connection = mysqli_connect("localhost", "fac_editor", "faulty", "faculty");
				if (!$connection) {
				    $error="Connection error";
		 		    die("Connection failed: " . mysqli_connect_error());
				}
				$error="Connection successfull";
				// To protect MySQL injection for Security purpose
				$username = stripslashes($username);
				$password = stripslashes($password);
				$username = mysqli_real_escape_string($connection ,$username);
				$password = mysqli_real_escape_string($connection ,$password);
				// SQL query to fetch information of registerd users and finds user match.
				$result = mysqli_query($connection, "SELECT username, password FROM faculty_login WHERE password='$password' AND username='$username'");
				$rows = mysqli_num_rows($result);
				if ($rows == 1) {
					$_SESSION['login_user']=$username; // Initializing Session
					header("location: index.php"); // Redirecting To Other Page
				} 
				else {
					$error = "Username or Password is invalid";
				}
				mysqli_close($connection); // Closing Connection
				session_destroy();
			}
		}

	}
?>