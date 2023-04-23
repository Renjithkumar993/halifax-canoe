<!DOCTYPE html>
<html>
<head>
	<title>Manager Page</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h1 class="my-5">Welcome to the Manager Page</h1>
		<?php

			session_start();
			if ($_SESSION['role'] == 'manager') {
				echo '<div class="row">';
				echo '<div class="col-md-6">';
				echo '<p>First Name: ' . $_SESSION['first_name'] . '</p>';
				echo '<p>Last Name: ' . $_SESSION['last_name'] . '</p>';
				echo '<p>Role: ' . $_SESSION['role'] . '</p>';
				echo '</div>';
				echo '<div class="col-md-6">';
				echo '<form action="new-account.php" method="post">';
				echo '<button class="btn btn-primary" type="submit" name="lost-password">Lost Password</button>';
				echo '</form>';
				echo '</div>';
				echo '</div>';
				echo '<hr>';
				echo '<ul>';
				echo '<li><a href="isnt-working.php">My Computer isn\'t Working</a></li>';
				echo '</ul>';
			}
		?>
		<form action="logout.php" method="post">
			<button class="btn btn-secondary" type="submit" name="logout">Logout</button>
		</form>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
