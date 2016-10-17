<!DOCTYPE html>
<html lang=de> 
	<head>
		<meta charset=utf-8> 
		<title>Quizprojekt</title> 
	</head>

	<header>
			<h1>Adminbereich</h1> 
	</header>
	
	<body>
		<section>
			<?php include("Gruppen_de/feedbacktabelle.php") ?>	
		
			<button type=button id=feedback >Feedback beantworten</button> 
			<!-- Funktion: Der Admin wird bei Betätigung auf ausgewählte Feedbacks antworten können. --> 
			 <br>
								
			<button type=button id=löschen>Feedback löschen</button> 
			<!-- Funktion: Der Admin wird bei Betätigung ausgewählte Feedbacks löschen können. -->
		</section>	
		
		<section>
			<?php include("Gruppen_de/quizfragen.php") ?>	
		</section>
	</body>
</html>