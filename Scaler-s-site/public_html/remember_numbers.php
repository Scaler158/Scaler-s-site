<!DOCTYPE html>
<html lang ="ru">
<head>
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="Игра в которой нужно запомнить ряд чисел.">
		<meta name="keywords" content="Игра, числа, память, внимание">
		<meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">
		<meta name="robots" content="index, follow">
		<meta name="googlebot" content="index, follow">
		<meta name="slurp" content="index, follow">
		<meta name="author" content="Иван Тарарин">
		<meta name="creator" content="Иван Тарарин">
		<meta name="publisher" content="Иван Тарарин">

	<title>Запомни числа</title>

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

		<h1>Игра в запоминание чисел</h1>

		
		<img src="/img/man_in_black.jpg" alt="Люди в чёрном - стирание памяти" class="image_index" height="500"> 

		<p>Цель игры - запомнить последовательность чисел, и затем ответить на связанные с ней вопросы.</p>
		<p><strong><span>⚠️</span>ВАЖНО: Сейчас нет возможности прервать процесс игры! Это будет исправлено в дальнейшем!</strong></p>

		<button onclick="start();" id="button" type="button">Начать</button>
			
	</main>

	<footer>
		<?php
		include "footer.html";
		?>
	</footer>	
	
	<script src="/js/remember_numbers.js"></script>
</body>
</html>