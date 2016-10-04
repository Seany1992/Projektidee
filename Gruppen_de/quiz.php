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
		</form>
			<a href=quiz.php> <button type=button id=previous>Vorherige Frage</button> </a>
			
			<a href=quiz.php> <button type=button id=skip>Nächste Frage</button></a>
			
			<a href=auswertung.php> <button type=button id=auswertung>Zur Auswertung</button></a>
			
			<a href=regelwerk.txt> <button type=button id=regelwerk>Regelwerk aufrufen</button></a>
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

<!--
===================================
=== Feedback Alpers, 2016-10-04 ===
===================================

Leider haben Sie auch hieraus ein vollständiges HTML-Dokument erstellt und keine Gruppe.

Schauen wir uns auch hier die Umsetzung des Entwurfs an:

[V] Quiz
-01- - Textfeld (<title> Titel vom Projekt)
-44- - Bildbereich "Image" (Inhalt: Das Logo des Quizes)
-02- - Textfeld (Überschrift: h1) 
-50- - Formular Container (Funktion: form Container)
-51- - fieldset Container (Funktion: Gruppierung von Kontrollelementen)
-09- - Schaltfläche (Label: Regelwerk)
-10- - Textfeld (Inhalt: fortlaufende Nummerierung der Fragen z.b. "1")
-11- - Liste (Inhalt: Fortschritt innherhalb des Quiz)
-12- - Textfeld (Inhalt: Fragestellung)
-13- - Textfeld (Inhalt: Antwort)
-14- - Radio Button (Antwortmöglichkeit)
-15- - Hintergrundbild (Themespezifische Einblendung von Bildern)
-16- - Schaltfläche (Label: nächste Frage)
-17- - Schaltfläche (Label: vorherige Frage) 
-18- - Textfeld (Inhalt: Versuche/Lebensanzahl) 
-19- - Textfeld (Inhalt: Punktzahl Spieler)
-20- - Textfeld (Inhalt: Zeitlimit)
-55- - Schaltfläche (Label: Zur Auswertung)

So würde die Umsetzung Ihres Entwurfs in der strukt.html aussehen, wenn die Inhalte fehlen:

<img> ... </img> -44- - Bildbereich "Image" (Inhalt: Das Logo des Quizes)
<h1> ... </h1>	 -02- - Textfeld (Überschrift: h1) 
<form action=form_eval_quiz.php method=POST> -50- - Formular Container (Funktion: form Container)
	<fieldset> -51- - fieldset Container (Funktion: Gruppierung von Kontrollelementen)
	</fieldset>	
</form>
<button action= ... > -09- - Schaltfläche (Label: Regelwerk)
<ol></ol> -11- - Liste (Inhalt: Fortschritt innherhalb des Quiz)
... -12- - Textfeld (Inhalt: Fragestellung)
... -13- - Textfeld (Inhalt: Antwort)
<input type=radio id=... name=...> -14- - Radio Button (Antwortmöglichkeit)
<button action=...>nächste Frage</button> -16- - Schaltfläche (Label: nächste Frage)
<button action=...>vorherige Frage</button> -17- - Schaltfläche (Label: vorherige Frage) 
... -18- - Textfeld (Inhalt: Versuche/Lebensanzahl) 
... -19- - Textfeld (Inhalt: Punktzahl Spieler)
... -20- - Textfeld (Inhalt: Zeitlimit)
<button action=...>Zur Auswertung</button> -55- - Schaltfläche (Label: Zur Auswertung)

Genau wie bei userforum.php unterscheidet sich die Definition der Gruppe leider zu sehr von der Umsetzung, sodass es auch hier keine Punkte gibt.

Bitte beachten Sie aber, dass Sie natürlich durchaus Inhalte an dieser Stelle einbinden sollen.
-->