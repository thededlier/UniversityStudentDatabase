<?php
	include("scripts/check_login.php");
	if(isset($_SESSION["login_user"])){
		header("location: profile.php");
	}
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

<body style="background:url(img/logbg.jpg); background-size: 100% auto; position: fixed">

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
					<li><a href="index.php">Home</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="row" style="margin-top: 55px">
		<div class="container">
			<div class="col-sm-4 col-xs-12 login">
				<h3>SRM University</h3>
				<h2>Login</h2>
				<hr />
				<form action="" method="POST">
					<input type="text" id="username" name="username" autofocus="on" placeholder="Username">
					<input type="password" id="password" name="password" placeholder="Password">
					<input type="radio" name="user_type" value="student" checked><span style="margin: 1px 3px 1px 3px;">Student</span>
					<input type="radio" name="user_type" value="faculty"><span style="margin: 1px 3px 1px 3px;">Faculty</span>
					<input type="submit" name="submit" value="Login">
					<span style="color: #ff0000"><?php echo $error; ?></span>
				</form>
			</div>
		</div>
	</div>

	<footer class="footer">
		<p>Rohans Student Database</p>
	</footer>

</body>

</html>