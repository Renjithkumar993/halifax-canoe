<!DOCTYPE html>
<html>
<head>
	<title>Role-Based Redirects</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h1>Role-Based Redirects</h1>
		<form method="post" action="redirect.php" class="form-horizontal">
			<div class="form-group">
				<label class="control-label col-sm-2" for="first_name">First Name:</label>
				<div class="col-sm-10">
					<input type="text" id="first_name" name="first_name" required class="form-control">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="last_name">Last Name:</label>
				<div class="col-sm-10">
					<input type="text" id="last_name" name="last_name" required class="form-control">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="role">Role:</label>
				<div class="col-sm-10">
					<select id="role" name="role" class="form-control">
						<option value="admin">Admin</option>
						<option value="manager">Manager</option>
						<option value="ceo">CEO</option>
					</select>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-primary">Submit</button>
				</div>
			</div>
		</form>
	</div>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>

