<?php
	$error = "";
	$connection = mysqli_connect("localhost", "stu_viewer", "", "student");
	session_start();
	$user_check=$_SESSION["login_user"];
	$result = mysqli_query($connection, "SELECT branch, batch FROM profile where username='$user_check'");
	$row = mysqli_fetch_assoc($result);
	mysqli_close($connection);
	$connection = mysqli_connect("localhost", "stu_viewer", "", "timetable");
	$flag = 0;
	switch($row["branch"]) {
		case "Test Branch":
			switch($row["batch"]) {
				case "2014B1":
					$result = mysqli_query($connection, "SELECT * FROM test_2014_b1");
					$flag=1;
					break;
				default :
					$error = "Unable to find batch";
			}
			break;
		default: 
			$error = "Unable to find branch";
	}
?>