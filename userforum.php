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
			<?php include("Gruppen_de/feedbacktabelle.php") ?>
			
			<?php include("Gruppen_de/userfeedback.php") ?>
		
		</main>
	</body>
</html>

<!--
===================================
=== Feedback Alpers, 2016-10-04 ===
===================================

Hier haben Sie noch ein Missverständnis: Es geht bei den Gruppen darum, HTML-"Fragmente" zu programmieren, die dann in andere HTML-Dokumente integriert werden können. So wie ein einzelnes Puzzle-Teil kein Bild ist, sondern nur mit anderen Puzzle-Teilen zusammen ein vollständiges Bild ergibt, sind auch die Gruppen keine vollständigen HTML-Dokumente, sondern ergeben erst gemeinsam mit anderen Gruppen (und einem umgesetzten view) ein vollständiges HTML-Dokument.

Im Gegensatz dazu haben Sie ein vollständiges HTML-Dokument erstellt.

Schauen wir uns dazu Ihren Entwurf in der strukt.html an:

[II] Userforum
-01- - Textfeld (<title> Titel vom Projekt)
-02- - Textfeld (Überschrift: h1) 
-25- - Tabelle (<table> Inhalt: neueste Feedbacks werden angezeigt)
-50- - Formular Container (Funktion: form Container)
-22- - Eingabefeld (Funktion: Feedback formulieren, in Form einer Textarea)
-23- - Schaltfläche (Label: Feedback absenden)
-49- - Schaltfläche (Label: Hauptmenü) 

Wenn Sie diesen Entwurf so umsetzen, wie Sie ihn definiert haben, ergibt sich folgende Umsetzung der Gruppe:

<title> ... </title>
<h1> ... </h1>
...
<form action=... method=...>
<input type=textarea id=... name=...>
<input type=submit>
</form>

<button action=...>

Wie Sie sehen ist hier noch ein großer Unterschied zwischen dem Entwurf und dem tatsächlichen HTML-Dokument. Deshalb kein Punkt für dieses Dokument.

-->