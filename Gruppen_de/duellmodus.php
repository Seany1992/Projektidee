<!DOCTYPE html>
<html lang=de> 
	<head>
		<meta charset=utf-8> 
		<title>Quizprojekt</title> 
	<body>
		<header>
			<img><!-- Hier wird das Logo des Quizes eingefügt --></img>
			<h1>Duellmodus</h1>	
		</header>
		
		<form method=post action="<?php echo $_SERVER["PHP_SELF"]; ?>" >
		<?php
			$array[] = array("Spielername: ", "Highscore: ");
			$array[] = array("Spieler1", "Zahlenwert1");
			$array[] = array("Spieler2", "Zahlenwert2");
			echo "<table>";
			foreach($array as $row) 
			{
				echo "<tr>";
				echo "<td>" . implode("</td><td>", $row) . "</td>";
				echo "</tr>";
			}
				echo "</table>";
			// Info: Die Tabelle ist nicht vollständig (es handelt sich bei den Bezeichnern noch um Platzhalter), sie wird nach und nach mit Nutzern aus der Datenbank gefüllt, d.h. Die registrierten Nutzer werden aufgelistet und der Spieler kann sich einen Gegenspieler aussuchen und ihn herausfordern 
			
		?>
		</form>
			<button type=button id=start>Herausforderung absenden</button>
			<!-- Funktion: Der Spieler sucht sich einen Gegenspieler aus der Tabelle aus und fordert ihn mit der Betätigung des Buttons zu einem Multiplayerspiel heraus -->
			
			<a href=regelwerk.txt> <button type=button id=regelwerk>Regelwerk aufrufen</button></a>
			
			<a href=quiz.php> <button type=button id=start>Quizstart</button></a>
	</body>
</html>