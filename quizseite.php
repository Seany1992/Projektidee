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
		
		<img><!--Hier Themenspezifische EInblendung von Hintergrundbildern--></img>
		
		<?php include("Gruppen_de/quiz.php") ?>
		
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