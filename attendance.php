<?php
	include("scripts/student/fetch_attendance.php");
?>

<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	 <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
	<link rel="stylesheet" href="css/stylesheet.css" type="text/css">
	
	<title>Student Portal</title>	
	
</head>

<body>

	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php">SRM Student Portal</a>
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="profile.php">Profile</a></li>
					<li><a href="timetable.php">Timetable</a></li>
					<li><a href="marks.php">Marks</a></li>
					<li><a href="attendance.php">Attendance</a></li>
					<li><a href="scripts/logout.php">Logout</a></li>
				</ul>
			</div>
		</div>
	</nav>
	
	<div class="row" style="margin-top: 55px;" ng-app="Subject" ng-controller="subCtrl">
		<div class ="container">
			<div class="col-xs-12 col-sm-12 attendance">
				<h1 style="text-align: center;">Attendance</h1>
				<hr />
				<div class="table-responsive">
					<table class="table-striped attendance-table">
						<thead>
							<tr>
								<th>Code</th>
								<th>Subject</th>
								<th>Hours Missed</th>
								<th>Hours Attended</th>
								<th>Hours Taken</th>
								<th>Attendance</th>
							</tr>
						</thead>
						<tbody>
							<?php 
								if($flag == 1) {
									$rows = mysqli_num_rows($result);
									if($rows > 0) {
										while($row = mysqli_fetch_assoc($result)) {
											echo "<tr><td>".$row["subject_code"]."</td>";
											echo "<td>".$row["subject"]."</td>";
											echo "<td>".$row["hours_missed"]."</td>";
											echo "<td>".$row["hours_attended"]."</td>";
											echo "<td>".$row["hours_taken"]."</td>";
											echo "<td>".$row["total_attendance"]."</td></tr>";
										}
									}
								}
								mysqli_close($connection);
							?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

	<footer class="footer">
		<p>Rohans Student Database</p>
	</footer>
</body>

</html>