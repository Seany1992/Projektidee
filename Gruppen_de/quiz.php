<!DOCTYPE html>
<html lang=de> 
	<head>
		<meta charset=utf-8>  
		<title>Quizprojekt</title> 
	</head>

	<body>
		<header>
			<img><!-- Hier wird das Logo des Quizes eingefügt --></img>
			<h1>Quiz</h1>	 
		</header>
		
		<p>Frage 1 von X</p> 
		<!--Funktion: Wird eine fortlaufende Nummerierung der Fragen z.b. "1"-->
		
		<p><b>Fragestellung</b></p> 
		<!-- Funktion: Momentan noch Platzhalter. Hier wird die Frage eingefügt -->
		<form action=form_eval_quiz.php method=POST>
			
			
			<fieldset>
					<legend>Quizfrage</legend> 
					
					<label for=antwort1> A: Antwort</label> 
					<input type=radio id=antwort1 name=antwort value=antwort1 required> 
					<br>
					<label for=antwort2> B: Antwort</label> 
					<input type=radio id=antwort2 name=antwort value=antwort2 required>
					<br>
					<label for=antwort3> C: Antwort</label> 
					<input type=radio id=antwort3 name=antwort value=antwort3 required>
					<br>
					<label for=antwort4> D: Antwort</label>
					<input type=radio id=antwort4 name=antwort value=antwort4 required>	
			</fieldset>	
			
			<a href=quiz.php> <button type=button id=previous>Vorherige Frage</button> </a>
			
			<a href=quiz.php> <button type=button id=skip>Nächste Frage</button></a>
			
			<a href=auswertung.php> <button type=button id=auswertung>Zur Auswertung</button></a>
			
			<a href=regelwerk.txt> <button type=button id=regelwerk>Regelwerk aufrufen</button></a>
		</form>
		<aside>
			<ul>
			<!-- Info: Hier soll eine Liste mit dem Fortschritt innerhalb des Quizes folgen. Es dient als Orientierungsliste für die Spielrunde. Angezeigt wird die Anzahl der noch offenen- und bereits richtig beantworteten Fragen. Die aktuelle Frage, bei der man sich befindet, wird gekennzeichnet.  -->
				<?php
				echo "<table border=1>\n";
				for ($i = 1; $i <= 20; $i++) 
				{ 
					echo "<td>Frage: $i</td>\n";
					for ($j=1; $j <= 1; $j++)
					{
						echo "<tr>\n";
					}
				}
				echo "</table>\n";
				/* Fortschrittsleiste mithilfe von PHP realisiert, es wird eine Tabelle mit den Fragen von 1-20 angezeigt.
				*/
				?>
			</ul>
		</aside>
		
		 <!-- Info: Bereich, um die Lebensanzeige, das Zeitlimit und die erreichte Punktzahl dynamisch darzustellen, mithilfe von Skripten/Funktionen in PHP -->
		
		<!-- Frage an Herrn Alpers: Welche HTML 5 tags bzw. PHP Funktionen sind sinnvoll, womit ich die genannten Punkte realisieren kann? --> 
		
	</body>
</html>