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