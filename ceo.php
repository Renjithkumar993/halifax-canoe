<!DOCTYPE html>
<html>
<head>
	<title>CEO Page</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="container mt-5">
		<h1>Welcome to the CEO Page</h1>
		<p>What would you like to do?</p>
		<?php
			session_start();
			if ($_SESSION['role'] == 'ceo') {
				// Display the user's first name, last name, and role
				echo '<p>First Name: ' . $_SESSION['first_name'] . '</p>';
				echo '<p>Last Name: ' . $_SESSION['last_name'] . '</p>';
				echo '<p>Role: ' . $_SESSION['role'] . '</p>';
				echo '<hr>';
				echo '<p>CEO phone number: +1-999-999-1111</p>';
				echo '<li><a href="isnt-working.php">My Computer isn\'t Working</a></li>';
			}
		?>
		
		<form action="logout.php" method="post">
			<button class="btn btn-primary" type="submit" name="logout">Logout</button>
		</form>
	</div>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
