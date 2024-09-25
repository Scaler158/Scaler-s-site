<!DOCTYPE html>
<html lang ="ru">
<head>
	<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="Конвертер валют позволит узнать, какую сумму в долларах или евро Вы обладаете, исходя из суммы в рублях">
		<meta name="keywords" content="Доллары, евро, курс, валюта">
		<meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">
		<meta name="robots" content="index, follow">
		<meta name="googlebot" content="index, follow">
		<meta name="slurp" content="index, follow">
		<meta name="author" content="Иван Тарарин">
		<meta name="creator" content="Иван Тарарин">
		<meta name="publisher" content="Иван Тарарин">

	<title>Конвертер валют</title>

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
	<h1>Конвертер валют</h1>

	<img src="/img/no_money.jpg" alt="падение рубля" height="438">
	<p>В данном конвертере Вы можете посчитать, какое количество долларов или евро можно получить из заданной суммы рублей.</p>

	<p>Введите число рублей, равное текущей стоимости одного доллара: <input type="number" placeholder="85" id="dollar"></p>
	<p>Введите число рублей, равное текущей стоимости одного евро: <input type="number" placeholder="90" id="euro"></p>
	<p>Введите сумму рублей, которую планируете перевести: <input type="number" placeholder="1000" id="userSum"></p>

	<output id="info"></output>

	<button type="button" onclick="start();">Посчитать</button>
	</main>

	<footer>
		<?php
		include "footer.html";
		?>
	</footer>	

	<script src="/js/converter.js">	</script>
</body>
</html>