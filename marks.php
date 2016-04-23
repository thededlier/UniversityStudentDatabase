<?php
	include("scripts/student/fetch_marks.php");
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
	
	<div class="row" style="margin-top: 55px;">
		<div class ="container">
			<div class="col-xs-12 col-sm-12 marks">
				<h1 style="text-align: center;">Marks</h1>
				<hr />
				<div class="table-responsive" ng-app="Subject" ng-controller="subCtrl">
					<table class="table-striped marks-table">
						<thead>
							<tr>
								<th>Code</th>
								<th>Subject</th>
								<th>CT1(/10)</th>
								<th>CT2(/10)</th>
								<th>Model(/20)</th>
								<th>Finals(/50)</th>
								<th>ST(/5)</th>
								<th>Attendance(/5)</th>
								<th>Total(/10)</th>
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
											echo "<td>".$row["ct1"]."</td>";
											echo "<td>".$row["ct2"]."</td>";
											echo "<td>".$row["model"]."</td>";
											echo "<td>".$row["final"]."</td>";
											echo "<td>".$row["st"]."</td>";
											echo "<td>".$row["attendance"]."</td>";
											echo "<td>".$row["total"]."</td></tr>";
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
