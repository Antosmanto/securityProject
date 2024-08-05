<!DOCTYPE html>
<html>

<head>
    <!-- Link your php/css file -->
    <link rel="stylesheet" href="style.php" media="screen">
    <meta charset="utf-8">
    <title>CRUD php with sqllite</title>


</head>

<body>
    <h1>Peace Petition</h1>
    <p>Signing a peace petition is a significant step towards fostering a more harmonious world. It's a declaration of
        support for peace, understanding, and reconciliation. Each signature represents a commitment to resolving
        conflicts through dialogue and mutual respect. By adding their names, individuals contribute to a global
        movement for positive change, inspiring others to join in the pursuit of peace.</p>
    <a href="add.php" class="S">Sign the Petition</a>
    <h3> Petition Signatures</h3>
    <table border="1" cellpadding="10" cellspacing="5">
        <thead>
            <th>ID</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Country</th>
            <th>Actions</th>
        </thead>
        <tbody>
            <?php
            //include our connection
            include 'dbconfig.php';

            //query from the table that we create
            $sql = "SELECT rowid, * FROM members";
            $query = $db->query($sql);

            while ($row = $query->fetchArray()) {
                echo "
					<tr>
						<td>" . $row['rowid'] . "</td>
						<td>" . $row['firstname'] . "</td>
						<td>" . $row['lastname'] . "</td>
						<td>" . $row['country'] . "</td>
						<td>
							<a href='edit.php?id=" . $row['rowid'] . "'>Edit</a>
							<a href='delete.php?id=" . $row['rowid'] . "' >Delete</a>
						</td>
					</tr>
				";
            }
            ?>
        </tbody>
    </table>
</body>

</html>