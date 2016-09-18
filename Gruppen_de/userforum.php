<!DOCTYPE html>
<html lang=de> 
	<head>
		<meta charset=utf-8> 
		<title>Quizprojekt</title> 
	</head>

	<body>
		<header>
			<img><!-- Hier wird das Logo des Quizes eingefügt --></img>
			<h1>Userforum</h1> 
		</header>
		
		<main>
			<form method=post action="<?php echo $_SERVER["PHP_SELF"]; ?>" >
				<?php
				$array[] = array("Spielername: ", "Userfeedbacks: ");
				$array[] = array("Spieler1", "Userfeedback1");
				$array[] = array("Spieler2", "Userfeedback2");
				echo "<table>";
				foreach($array as $row) 
				{
					echo "<tr>";
					echo "<td>" . implode("</td><td>", $row) . "</td>";
					echo "</tr>";
				}
					echo "</table>";
				?>	
				<!-- Info: Die erzeugteTabelle in PHP, ist nicht vollständig (es handelt sich bei den Bezeichnern noch um Platzhalter). Die Tabelle soll die eingegangenen Userfeedbacks anzeigen. Die Userfeedbacks werden in der Datenbank gespeichert und hier aufgerufen  -->
			</form>
		
			<form action=form_eval_userforum.php method=POST>
				<textarea rows=2 cols=50 name=feedback><!--Funktion: Hier wird der der Nutzer sein gewünschtes Feedback eingeben können --> </textarea>
				<br>
				
				<input type=submit value=speichern>
			</form>
				<a href=hauptmenue.html> <button type=button id=hauptmenue>Hauptmenü</button></a>	
		</main>
	</body>
</html>