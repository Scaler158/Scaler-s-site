<!DOCTYPE html>
<html lang ="ru">
<head>
	<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="Игра в которой нужно логически мыслить и угадать загаданное число, играя против другого игрока.">
		<meta name="keywords" content="Игра, числа, больше или меньше, два игрока">
		<meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">
		<meta name="robots" content="index, follow">
		<meta name="googlebot" content="index, follow">
		<meta name="slurp" content="index, follow">
		<meta name="author" content="Иван Тарарин">
		<meta name="creator" content="Иван Тарарин">
		<meta name="publisher" content="Иван Тарарин">
		
	<title>Угадай число (на 2-х)</title>

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
		
		<h1>Игра в угадай число для 2-х игроков</h1>

		<img src="/img/monkeys.jpg" width="441" height="310" alt="Обезьяны за компьютером">


		<p id="info" style="white-space:pre-line">Цель игры - угадать число от 0 до 100, игроки должны вводить числа по очереди. После каждой неудачной попытки появится подсказка. 
			Введите нужное число, затем щёлкните мышкой за пределами поля. Количество попыток неограничено.
		Первым ходит игрок 1.</p>
		<p><input type="number" id="userAnswer" onchange="guess();"></p>
	</main>


	<footer>
		<?php
		include "footer.html";
		?>
	</footer>	

	<script src="/js/guess_number_for_2.js"></script>
</body>
</html>