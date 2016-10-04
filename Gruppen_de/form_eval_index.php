<!DOCTYPE html>
<html>
<!-- Hier werden die Eingaben von Index.html verarbeitet -->
	<head>
		<meta charset=utf-8> 
		<title>Quizprojekt</title>
	</head>
	
	<body>
	 
	<?php
	// Aufgrund der PHP Einbindung befindet sich index.html mit dieser Datei im selben Verzeichnis.
	echo "Vielen Dank für die Registrierung: ";
	echo htmlspecialchars ($_POST["username"]);
	echo "<br>";
	echo "Ihre E-Mail lautet: ";
	echo htmlspecialchars ($_POST["email"]);
	echo "<br>";
	echo "<a href=hauptmenue.html> <button type=button id=hauptmenue>Hauptmenü</button></a>";
	?>
	</body>
</html>

// ===================================
// === Feedback Alpers, 2016-10-04 ===
// ===================================
//
// Diese Datei ist eine PHP-Datei zur Auswertung eines Formulars, kein HTML-Dokument.
// Umgesetzt haben Sie dagegen ein HTML-Formular.