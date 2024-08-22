<!DOCTYPE html>
<html lang ="ru">
<head>
	<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="Подсчёт факториала числа онлайн.">
		<meta name="keywords" content="Факториал, числа, посчитать, счёт, подсчёт">
		<meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">
		<meta name="robots" content="index, follow">
		<meta name="googlebot" content="index, follow">
		<meta name="slurp" content="index, follow">
		<meta name="author" content="Иван Тарарин">
		<meta name="creator" content="Иван Тарарин">
		<meta name="publisher" content="Иван Тарарин">

	<title>Факториал</title>
	
	<link rel="stylesheet" href="/styles/normalize.css"> 
	<link rel="stylesheet" href="/styles/all_style.css">
	<link rel="stylesheet" href="/styles/factorial.css">
</head>
<body>

	<header>
		<?php
			include "menu.html";
		?>
	</header>

	<main>

		<h1>Вычисление факториала числа</h1>

		<img src="/img/factorial.PNG" alt="Смешное чтение факториалов" height="600">

		<p>Факториал числа n — это произведение всех натуральных чисел от 1 до <var>n</var> включительно. Обозначается в математике как n!
		К примеру, 4! = 1 * 2 * 3 * 4 = 24</p>

		<p><input type="number" id="userAnswer" placeholder=" " oninput="start();"><label for="userAnswer">Просто введите число!</label>

			<output id ="info"></output>
		</p>	

	</main>

	<footer>
		<?php
		include "footer.html";
		?>
	</footer>	

	<script src ="/js/factorial.js"></script>
</body>
</html>