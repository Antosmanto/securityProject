<!DOCTYPE html>
<html>

<head>
	<!-- Link your php/css file -->
	<link rel="stylesheet" href="style.php" media="screen">
	<meta charset="utf-8">
	<title>CRUD Operation on SQLite3 Database using PHP</title>

</head>

<body>
	<h1>Sign This Petition</h1>
	<form method="POST">
		<a href="index.php">Back</a>
		<p>
			<label for="firstname">Firstname:</label>
			<input type="text" id="firstname" name="firstname">
		</p>
		<p>
			<label for="lastname">Lastname:</label>
			<input type="text" id="lastname" name="lastname">
		</p>
		<p>
			<label for="country">Country:</label>
			<input type="text" id="country" name="country">
		</p>
		<input type="submit" name="save" value="Sign now">
	</form>
	<?php
	if (isset($_POST['save'])) {
		//include our connection
		include 'dbconfig.php';

		//insert query
		$sql = "INSERT INTO members (firstname, lastname, country) VALUES ('" . $_POST['firstname'] . "', '" . $_POST['lastname'] . "', '" . $_POST['country'] . "')";
		$db->exec($sql);

		header('location: index.php');

	}
	?>
</body>

</html>