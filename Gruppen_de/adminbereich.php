<!DOCTYPE html>
<html lang=de> 
	<head>
		<meta charset=utf-8> 
		<title>Quizprojekt</title> 
	</head>

	<header>
			<img><!-- Hier wird das Logo des Quizes eingefügt --></img>
			<h1>Adminbereich</h1> 
	</header>
	
	<body>
		<section>
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
				<button type=button id=feedback >Feedback beantworten</button> 
				<!-- Funktion: Der Admin wird bei Betätigung auf ausgewählte Feedbacks antworten können. --> 
				<br>
								
				<button type=button id=löschen>Feedback löschen</button> 
				<!-- Funktion: Der Admin wird bei Betätigung ausgewählte Feedbacks löschen können. -->
			
		</section>	
		
		<section>
			<form action=form_eval_quizfragen.php method=POST>
				<h2> Quizfrage erstellen/bearbeiten </h2>
				
				<label>Quizfrageformulieren: </label>
				<br>
				<textarea rows=4 cols=50 name=frage><!-- Funktion: Hier wird der Admin eine neue Frage formulieren können --> </textarea>
				<br>
				<label>Antworten formulieren: </label>
				<br>
				<textarea rows=2 cols=50 name="antworten[]"><!-- Funktion: Hier wird der Admin seine Antworten formulieren können --> </textarea>
				<br>
				<textarea rows=2 cols=50 name="antworten[]"><!-- Funktion: Hier wird der Admin seine Antworten formulieren können --> </textarea>
				<br>
				<textarea rows=2 cols=50 name="antworten[]"><!-- Funktion: Hier wird der Admin seine Antworten formulieren können --> </textarea>
				<br>
				<textarea rows=2 cols=50 name="antworten[]"><!-- Funktion: Hier wird der Admin seine Antworten formulieren können --> </textarea>
				<br>
				<label>
				<input type=checkbox name="antwort[]" value=antwort1>
				Antwort1
				</label>
				<label>
				<input type=checkbox name="antwort[]" value=antwort2>
				Antwort2
				</label>
				<label>
				<input type=checkbox name="antwort[]" value=antwort3>
				Antwort3
				</label>
				<label>
				<input type=checkbox name="antwort[]" value=antwort4>
				Antwort4
				</label>
				<!-- Info: Der Admin kann mit den Checkboxen bestimmen, welche der Antwortmöglichkeiten bezüglich der Fragestellung richtig sein soll. -->
				<br>
				<input type=submit value=speichern>
			</form>
				<a href=hauptmenue.html> <button type=button id=hauptmenue>Hauptmenü</button></a>					
	</body>
</html>