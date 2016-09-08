
<!DOCTYPE html>
<html>
<!-- Hier werden Eingaben aus dem Formular "Quizfrage erstellen/bearbeiten" innderhalb der Datei adminbereich.html verarbeitet -->
	<head>
		<meta charset=utf-8> 
		<title>Quizprojekt</title>
	</head>
	
	<body>
	 
	<?php
		if (!empty ($_POST["frage"])) {
			 echo "Ihre erstellte Quizfrage lautet: <br>"
			. htmlspecialchars ($_POST["frage"])
			. "<br>\n";
		}	
		
		if (isset($_POST["antworten"])) {
			foreach ($_POST["antworten"] as $kk) {
				echo "Die Antworten lauten: " ;
				echo htmlspecialchars ($kk) . "<br> \n";
			}
		}
		
		if (isset($_POST["antwort"])) {
			foreach ($_POST["antwort"] as $ok) {
				echo "Die richtige Antwortmöglichkeit ist Checkbox: " ;
				echo htmlspecialchars ($ok) . "<br> \n";
			}
		}
		echo "<br>";
		echo "<a href=adminbereich.php> <button type=button id=admin>zurück</button></a>";	
		// Info: Quizfrage wird hiermit erstellt, der Admin erstellt die Antworten und wählt anhand von Checkboxen die richtige Antwortmöglichkeit aus.
	?>
	</body>
</html>