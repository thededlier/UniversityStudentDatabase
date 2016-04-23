<?php
	include("scripts/student/fetch_profile.php");
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
			<div class="col-xs-12 col-sm-12 student-details">
				<h1>Welcome, <?php echo $row["name"] ?></h1>
				<hr />
				<img class="col-xs-12 col-sm-3" src="img/John-Reese-person-of-interest.jpg">
				<ul class="col-sm-2 col-xs-12" float="left">
					<li>Name</li>         
					<li>Roll Number</li>  
					<li>DOB</li>          
					<li>Fathers name</li> 
					<li>College</li> 	 
					<li>Branch</li> 		 
					<li>Batch</li>		
				</ul>
				<ul class="col-sm-7 col-xs-12" style="color: #00007b">
					<li>: <?php echo $row["name"] ?></li>
					<li>: <?php echo $row["roll_no"] ?></li>
					<li>: <?php echo $row["dob"] ?></li>          
					<li>: <?php echo $row["fathers_name"] ?></li> 
					<li>: <?php echo $row["college"] ?></li> 	 
					<li>: <?php echo $row["branch"] ?></li> 		 
					<li>: <?php echo $row["batch"] ?></li>
				</p>
			</div>
			<div class="col-xs-12 col-sm-12 news-feed">
				<h3>Updates</h3>
				<hr />
					<ul>
						<?php
							// Create connection
							$connection = mysqli_connect("localhost", "stu_viewer", "", "news");
							// Check connection
							if (!$connection) {
							    die("Connection failed: " . mysqli_connect_error());
							}

							$result = mysqli_query($connection, "SELECT news_title, news_link FROM news_feed");
							$rows = mysqli_num_rows($result);
							if($rows > 0) {
								$count = 0;
								while($row = mysqli_fetch_assoc($result) and $count< 6) {
									echo "<li><a href=".$row["news_link"].">".$row["news_title"]."</a></li>";
									$count++;
								}
							}
							mysqli_close($connection);
						?>
					</ul>
			</div>
		</div>
	</div>
	<br />
	<footer class="footer">
		<p>Rohans Student Database</p>
	</footer>
	
</body>

</html>