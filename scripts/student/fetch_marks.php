<?php
	$error = "";
	$connection = mysqli_connect("localhost", "stu_viewer", "", "student");
	session_start();
	$user_check=$_SESSION["login_user"];
	$result = mysqli_query($connection, "SELECT roll_no, branch, batch FROM profile where username='$user_check'");
	$row = mysqli_fetch_assoc($result);
	$roll_check = $row["roll_no"];
	mysqli_close($connection);
	$connection = mysqli_connect("localhost", "stu_viewer", "", "marks");
	$flag = 0;
	switch($row["branch"]) {
		case "Test Branch":
			switch ($row["batch"]) {
				case "2014B1":
				case "2014B2":
				case "2014B3":
					$result = mysqli_query($connection, "SELECT * FROM test_2014 where roll_no='$roll_check'");
					$flag = 1;
					break;		
				default:
					$error = "Could not determine batch";
			}
			break;
		default:
			$error = "Could not determine branch";
	}
?>