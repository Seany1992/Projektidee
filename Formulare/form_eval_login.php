
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
