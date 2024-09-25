<!DOCTYPE html>
<html lang ="ru">
<head>
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="Игра, в которой нужно назвать перевод слов с английского языка.">
		<meta name="keywords" content="Перевод, английский, игра">
		<meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">
		<meta name="robots" content="index, follow">
		<meta name="googlebot" content="index, follow">
		<meta name="slurp" content="index, follow">
		<meta name="author" content="Иван Тарарин">
		<meta name="creator" content="Иван Тарарин">
		<meta name="publisher" content="Иван Тарарин">
		
	<title>Переведи с английского</title>

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
	<h1>Игра в перевод слов с английского</h1>

	<img src="/img/translate.png" alt="Шутка про английскую игру слов" width="600"> 
	<p>В процессе игры нужно будет ввести перевод некоторых английских слов.</p>
	<button onclick="start();" id="button" type="button">Начать</button>

	</main>

	<footer>
		<?php
		include "footer.html";
		?>
	</footer>	
	
	<script src="/js/translate.js"></script>
</body>
</html>