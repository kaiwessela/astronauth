<!DOCTYPE html>
<html lang="de">
	<head>
		<?php include 'frontend/templates/head.tmp.php'; ?>
		<title>Astronauth</title>
	</head>
	<body>
		<main>
			<h1>Hallo, <?= $username ?></h1>
			<p>
				Folgendes kannst du tun:<br>
				<a href="account">Kontoeinstellungen bearbeiten</a><br>
				<a href="signout">Abmelden</a>
			</p>
		</main>
	</body>
</html>
