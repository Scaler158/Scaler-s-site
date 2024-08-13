<!DOCTYPE html>
<html lang ="ru">
<head>
	<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="Программа выдаст случайный пароль выбранной вами длины.">
		<meta name="keywords" content="Пароль, случайность, символы, последовательность, длина">
		<meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">
		<meta name="robots" content="index, follow">
		<meta name="googlebot" content="index, follow">
		<meta name="slurp" content="index, follow">
		<meta name="author" content="Иван Тарарин">
		<meta name="creator" content="Иван Тарарин">
		<meta name="publisher" content="Иван Тарарин">
		
	<title>Генератор паролей</title>

	<link rel="stylesheet" href="/styles/normalize.css"> 
	<link rel="stylesheet" href="/styles/all_style.css">
	<link rel="stylesheet" href="/styles/get_random_password.css">
</head>
<body>

	<header>
		<?php
		include "menu.html";
		?>
	</header>

	<main>

		<h1>Генератор случайных паролей</h1>

		<img src="/img/password.jpg" alt="Забавный комикс про пароль" width="950"> 

		<p>Программа напечатает Вам пароль. Он будет состоять из случайных букв латинского алфавита нижнего регистра и цифр. 
			Для получения пароля укажите его желаемую длину, а для того, чтобы быстро его выделить (особенно удобно, если он длинный) - кликните по нему дважды.</p>
		<p><strong><span>⚠️</span>ВАЖНО: Не рекомендуется вводить числа более 150 - пароль выходит за пределы экрана. В будущем это будет исправлено.</strong></p>
		<div><input type="number" id="userAnswer" placeholder=" " oninput="generate();"><label for="userAnswer">Просто введите число!</label></div>
		<output id ="passw"></output>
	</main>

	
	<footer>
		<?php
		include "footer.html";
		?>
	</footer>	
	
	<script src="/js/get_random_password.js"></script>
</body>
</html>