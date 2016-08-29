<!DOCTYPE html>
<html>
<!-- Hier werden die Eingaben von Index.html verarbeitet -->
	<head>
		<meta charset=utf-8> 
		<title>Quizprojekt</title>
	</head>
	
	<body>
	 
	<?php
	echo "Vielen Dank für die Registrierung: ";
	echo htmlspecialchars ($_GET["username"]);
	echo "<br>";
	echo "Ihre E-Mail lautet: ";
	echo htmlspecialchars ($_GET["email"]);
	echo "<a href=hauptmenue.html> <button type=button id=hauptmenue>Hauptmenü</button>";
	?>
	</body>
</html>