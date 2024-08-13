<!DOCTYPE html>
<html lang ="ru">
<head>
	<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="Программа для обучения слепой печати.">
		<meta name="keywords" content="Слепая печать, обучение, клавиши">
		<meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">
		<meta name="robots" content="index, follow">
		<meta name="googlebot" content="index, follow">
		<meta name="slurp" content="index, follow">
		<meta name="author" content="Иван Тарарин">
		<meta name="creator" content="Иван Тарарин">
		<meta name="publisher" content="Иван Тарарин">
		
	<title>Слепая печать</title>
	
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
		<h1>Тренировка слепой печати</h1>

		<img src="/img/blind_type.jpg" width="620" alt=" Злобно печатает">

		<p>Это пробная программа для ознакомления со слепой печатью. 
			Цель программы сугубо развлекательная, её нельзя считать полноценным тренажёром для навыка набора текста вслепую. Однако она даёт некое понимание этого процесса.
		</p>

		<p><strong><span>⚠️</span>ВАЖНО: Сейчас нет возможности прервать процесс игры! Это будет исправлено в дальнейшем!</strong></p>

		<button type="button" onclick="start();">Начать</button>
			
	</main>

	<footer>
		<?php
		include "footer.html";
		?>
	</footer>	

<script src="/js/blind_type.js"></script>
</body>
</html>