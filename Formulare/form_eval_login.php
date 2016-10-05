<!-- Hier werden Eingaben aus login.php verarbeitet -->
	<?php
	echo "Vielen Dank für die Registrierung: ";
	echo htmlspecialchars ($_POST["username"]);
	echo "<br>";
	echo "Ihre E-Mail lautet: ";
	echo htmlspecialchars ($_POST["email"]);
	echo "<br>";
	echo "<a href=../hub.php> <button type=button id=hauptmenue>Hauptmenü</button></a>";
	
	// ===================================
	// === Feedback Alpers, 2016-10-04 ===
	// ===================================
	//
	// Diese Datei ist eine PHP-Datei zur Auswertung eines Formulars, kein HTML-Dokument.
	// Umgesetzt haben Sie dagegen ein HTML-Formular.
	?>

