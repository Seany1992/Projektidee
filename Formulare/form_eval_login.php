<!-- Hier werden Eingaben aus login.php verarbeitet -->
	<?php
	echo "Vielen Dank für die Registrierung: ";
	echo htmlspecialchars ($_POST["username"]);
	echo "<br>";
	echo "Ihre E-Mail lautet: ";
	echo htmlspecialchars ($_POST["email"]);
	echo "<br>";
	echo "<a href=hauptmenue.html> <button type=button id=hauptmenue>Hauptmenü</button></a>";
	?>
