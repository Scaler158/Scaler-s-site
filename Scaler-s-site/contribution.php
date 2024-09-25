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

	<link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
	<link rel="manifest" href="/favicon/site.webmanifest">

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

		<p>Данная программа позвонит Вам рассчитать прибыть от вклада. В данный момент расчёт возможен только по годам, без возможности рассчитать доход за месяцы.</p>

		<p>Введите начальную сумму вклада: <input type="number" placeholder="1000" id="userSum"></p>
		<p>Введите число процента вклада (без значка %). Вводите десятичные после <strong>точки</strong>: <input type="number" placeholder="5.5" id="procent"></p> 
		<p>Введите срок вклада, выраженный цифрой лет: <input type="number" placeholder="5" id="userYear"></p>

		<output id="info"><i>Здесь будет ответ</i></output> 

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