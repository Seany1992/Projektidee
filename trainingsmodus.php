<!DOCTYPE html>
<html lang=de> 
	<head>
		<meta charset=utf-8> 
		<title>Quizprojekt</title> 
	</head>

	<body>
		<header>
			<img><!-- Hier wird das Logo des Quizes eingefügt --></img>
			<h1>Trainingsmodus</h1>	
		</header>
		
		<img><!--Hier Themenspezifische EInblendung von Hintergrundbildern--></img>
		
		<?php include("Gruppen_de/training.php") ?>	
		
		<?php include("Gruppen_de/quiz.php") ?>	
	</body>
</html>

<!--
===================================
=== Feedback Alpers, 2016-10-04 ===
===================================

Ähnlich wie bei userforum.php und quiz.php haben Sie leider bei der Programmierung weitgehend den Entwurf in der strukt.html ignoriert. An dieser Stelle werde ich nur noch auf das eingehen, was noch nicht schon in den beiden genannten Dokumenten aufgeführt ist.

= <option value=leicht>, ..., <input type=submit value=akzeptieren> (Aus dem Formular)
Bitte prüfen Sie, ob Sie leicht, akzeptieren usw. noch in Anführungszeichen setzen müssen.

-->