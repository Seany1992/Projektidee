<!DOCTYPE html>
<html>
<!-- Hier werden Eingaben aus userforum.html verarbeitet -->
	<head>
		<meta charset=utf-8> 
		<title>Quizprojekt</title>
	</head>
	
	<body>
	<?php
		if (!empty ($_POST["feedback"])) {
			 echo "Ihr formuliertes Feedback lautet: <br>"
			. htmlspecialchars ($_POST["feedback"])
			. "<br>\n";
		}	
		echo "Wollen Sie es speichern und senden? ";
		echo "<br>";
		echo "<button type=button id=ja>Ja</button>";
		echo "<button type=button id=nein>Nein</button>";
		// Hiermit soll das Feedback entweder abgespeichert werden oder mit "nein" gelöscht werden.
		
		echo "<br>";
		echo "<a href=userforum.html> <button type=button id=userforum>zurück</button></a>";
		
	?>
	</body>
</html>