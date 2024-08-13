<!DOCTYPE html>
<html lang ="ru">
<head>
	<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="Игра в которой нужно логически мыслить и угадать загаданное число">
		<meta name="keywords" content="Игра, числа, больше или меньше">
		<meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">
		<meta name="robots" content="index, follow">
		<meta name="googlebot" content="index, follow">
		<meta name="slurp" content="index, follow">
		<meta name="author" content="Иван Тарарин">
		<meta name="creator" content="Иван Тарарин">
		<meta name="publisher" content="Иван Тарарин">
	
	<title>Угадай число</title>

	<link rel="stylesheet" href="/styles/normalize.css"> 
	<link rel="stylesheet" href="/styles/all_style.css">
	
</head>
<body>

	<header>
		<?php
			include "menu.html";
		?>
	</header>

	<main>

		<h1>Игра в угадай число</h1>

		<img src="/img/think.jpg" height="350" alt="Обезьяна думает за компьютером">


		<p id="info">Цель игры - угадать число от 0 до 100. После каждой неудачной попытки появится подсказка. Введите нужное число, затем щёлкните мышкой за пределами поля. Количество попыток - 7.</p>
		
		<p><input type="number" id="userAnswer" onchange="guess();"></p>
	</main>

	
	<footer>
		<?php
		include "footer.html";
		?>
	</footer>	
	
	<script src="/js/guess_number.js"></script>
</body>
</html>