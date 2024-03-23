<!DOCTYPE html>
<html lang ="ru">
<head>
	<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="Калькулятор вклада, который покажет изменение дохода в зависимости от параметров вклада">
		<meta name="keywords" content="Калькулятор, вклад, рассчёты, финансы, проценты">
		<meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">
		<meta name="robots" content="index, follow">
		<meta name="googlebot" content="index, follow">
		<meta name="slurp" content="index, follow">
		<meta name="author" content="Иван Тарарин">
		<meta name="creator" content="Иван Тарарин">
		<meta name="publisher" content="Иван Тарарин">
		
	<title>Калькулятор вклада</title>
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
		<h1>Калькулятор вклада</h1>

		<img src="/img/sad.jpg" alt="грустный взгляд" height="480"> 

		<p>Данная программа позвонит Вам рассчитать прибыть от вклада.</p>

		<p>Введите начальную сумму вклада: <input type="number" placeholder="1000" id="userSum"></p>
		<p>Введите число процента вклада (без %). Вводите десятичные после <strong>точки</strong>: <input type="number" placeholder="5.5" id="procent"></p> 
		<p>Введите срок вклада, выраженный цифрой лет: <input type="number" placeholder="5" id="userYear"></p>

		<output id="info">Здесь будет ответ</output> 

		<button type="button" onclick="start();">Посчитать</button>
			
	</main>

	<footer>
		<?php
		include "footer.html";
		?>
	</footer>	
	
	<script src="/js/contribution.js"></script>
</body>
</html>