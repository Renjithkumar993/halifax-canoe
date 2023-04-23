<!DOCTYPE html>
<html>
<head>
	<title>Create New Account</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h1>Create a New Account</h1>
		<form>
			<div class="form-group">
				<label for="email">Email:</label>
				<input type="email" class="form-control" id="email" name="email" required>
			</div>
			<button type="submit" class="btn btn-primary" name="submit">Lost Password</button>
		</form>
		<form action="logout.php" method="post">
			<button type="submit" class="btn btn-danger mt-3" name="logout">Logout</button>
		</form>
	</div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>