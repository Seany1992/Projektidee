<!DOCTYPE html>
<html lang=de> 
	<head>
		<meta charset=utf-8> 
		<title>Quizprojekt</title> 
	</head>

	<body>
		<header>
			<img><!-- Hier wird das Logo des Quizes eingefügt --></img>
			<h1>Trainingsmodus</h1>	
		</header>
			
		<form method=post action="<?php echo $_SERVER["PHP_SELF"]; ?>" >
			<p>Schwierigkeitsgrad auswählen: </p>
			<select name=schwierigkeitsgrad>
				<option value=leicht>Leicht</option>
				<option value=mittel>Mittel</option>
				<option value=schwer>Schwer</option>
			</select>
			<!-- Info: Der Schwierigkeitsgrad für den CPU Gegner kann bestimmt werden, der NPC adaptiert das Verhalten eines registrierten Nutzerprofiles -->
			<br>
			<input type=submit value=akzeptieren>
			<br>
		</form>
			<a href=regelwerk.txt> <button type=button id=regelwerk>Regelwerk aufrufen</button> </a>
		
		<?php
		// Das formular <select> wird übermittelt und mittels PHP verarbeitet.
			if (isset($_POST["schwierigkeitsgrad"])){
			echo "Der gewählte Schwierigkeitsgrad ist:  ";
			echo htmlspecialchars ($_POST["schwierigkeitsgrad"]);
			echo "<br>";
			echo "Viel Spaß beim Quiz " ;
			echo "<br>";
			echo "<a href=quiz.php> <button type=button id=start>Quizstart</button></a>";
			}
		?>
	</body>
</html>

<!--
===================================
=== Feedback Alpers, 2016-10-04 ===
===================================

Ähnlich wie bei userforum.php und quiz.php haben Sie leider bei der Programmierung weitgehend den Entwurf in der strukt.html ignoriert. An dieser Stelle werde ich nur noch auf das eingehen, was noch nicht schon in den beiden genannten Dokumenten aufgeführt ist.

= <option value=leicht>, ..., <input type=submit value=akzeptieren> (Aus dem Formular)
Bitte prüfen Sie, ob Sie leicht, akzeptieren usw. noch in Anführungszeichen setzen müssen.

-->