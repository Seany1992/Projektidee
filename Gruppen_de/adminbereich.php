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
			<form action=form_eval_verwaltung.php method=POST>
				<table>
					<caption> Userfeedbacks </caption>
					  <tr>
						<td> Spielername: </td>
						<td> Userfeedback:</td>
					  </tr>
					  
					  <tr>
						<td> Spieler 1 </td>
						<td> Userfeedback 1 </td>
					  </tr>
					  
					  <tr>
						<td> Spieler 2 </td>
						<td> Userfeedback 2 </td>
					  </tr>
				</table>
				<!-- Info: Die Tabelle ist nicht vollständig (es handelt sich bei den Bezeichnern noch um Platzhalter). Die Tabelle soll die eingegangenen Userfeedbacks anzeigen. Die Userfeedbacks werden in der Datenbank gespeichert und hier aufgerufen  -->
				
				<button type=button id=feedback >Feedback beantworten</button> 
				<!-- Funktion: Der Admin wird bei Betätigung auf ausgewählte Feedbacks antworten können. --> 
				<br>
								
				<button type=button id=löschen>Feedback löschen</button> 
				<!-- Funktion: Der Admin wird bei Betätigung ausgewählte Feedbacks löschen können. -->
			</form>
		</section>	
		
		<section>
			<form action=form_eval_quizfragen.php method=POST>
				<h2> Quizfrage erstellen/bearbeiten </h2>
				
				<textarea><!-- Funktion: Hier wird der Admin eine neue Frage formulieren können --> </textarea>
				<br>
				<textarea><!-- Funktion: Hier wird der Admin die Antworten zur Fragestellung formulieren können --> </textarea>
				<br>
				<label>
				<input type=checkbox name=antwort1 value=antwort1>
				Antwort1
				</label>
				<label>
				<input type=checkbox name=antwort2 value=antwort2>
				Antwort2
				</label>
				<label>
				<input type=checkbox name=antwort3 value=antwort3>
				Antwort3
				</label>
				<label>
				<input type=checkbox name=antwort4 value=antwort4>
				Antwort4
				</label>
				<!-- Info: Der Admin kann mit den Checkboxen bestimmen, welche der Antwortmöglichkeiten bezüglich der Fragestellung richtig sein soll. -->
				<br>
				<button type=button id=erstellen>Frage erstellen</button> 
				
				<a href=hauptmenue.php> <button type=button id=hauptmenue>Hauptmenü</button>					
		</form>
	</body>
</html>