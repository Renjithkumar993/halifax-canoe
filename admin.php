<!DOCTYPE html>
<html>
<head>
	<title>Admin Page</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<h1>Welcome to the Admin Page</h1>
		<p>What would you like to do?</p>
		<ul>
			<?php
			session_start();
			if ($_SESSION['role'] == 'admin') {
				echo '<p>First Name: ' . $_SESSION['first_name'] . '</p>';
				echo '<p>Last Name: ' . $_SESSION['last_name'] . '</p>';
				echo '<p>Role: ' . $_SESSION['role'] . '</p>';
				echo '</br>';
				echo '</br>';
				echo '</br>';
				echo '<li><a href="new-account.php" class="btn btn-primary">Create New Account</a></li>';
				echo '<li><a href="isnt-working.php" class="btn btn-primary">My Computer isn\'t Working</a></li>';
			}
			?>
		</ul>
		<form action="logout.php" method="post">
			<input type="submit" name="logout" value="Logout" class="btn btn-danger">
		</form>
	</div>
</body>
</html>
