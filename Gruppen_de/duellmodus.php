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
			echo "<table>";
			echo "<caption> Registrierte Nutzer </caption>";
			echo  "<tr>";
			echo	"<td> Spielername: </td>";
			echo	"<td> Highscore: </td>";
			echo  "</tr>";
			  
			echo  "<tr>";
			echo	"<td> Spieler 1 </td>";
			echo	"<td> Zahlenwert 1 </td>";
			echo  "</tr>";
			  
			echo  "<tr>";
			echo	"<td> Spieler 2 </td>";
			echo	"<td> Zahlenwert 2 </td>";
			echo  "</tr>";
			echo "</table>";
			// Info: Die Tabelle ist nicht vollständig (es handelt sich bei den Bezeichnern noch um Platzhalter), sie wird nach und nach mit Nutzern aus der Datenbank gefüllt, d.h. Die registrierten Nutzer werden aufgelistet und der Spieler kann sich einen Gegenspieler aussuchen und ihn herausfordern 
			// Vorbereitung auf MySQL, deshalb soll die Tabelle in PHP umgesetzt werden
		?>
			
			<button type=button id=start>Herausforderung absenden</button>
			<!-- Funktion: Der Spieler sucht sich einen Gegenspieler aus der Tabelle aus und fordert ihn mit der Betätigung des Buttons zu einem Multiplayerspiel heraus -->
			
			<a href=regelwerk.txt> <button type=button id=regelwerk>Regelwerk aufrufen</button></a>
			
			<a href=quiz.php> <button type=button id=start>Quizstart</button></a>
		</form>
	</body>
</html>