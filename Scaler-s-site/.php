<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Сайт Скалера - Генератор паролей</title>
	<link rel="stylesheet" href="style.css">
	<script type="text/javascript">


var letters ["q", "w", "e", "r", "t", "y", "u", "i", "o", "p", "a", "s", "d", "f", "g", "h", "j", "k", "l", "z", "x", "c", "v", "b", "n", "m", "1", "2", "3", "4", "5", "6", "7", "8", "9", "0"];

function readInt(){
			var pass_length = document.getElementById("userlength")  // Здесь код не видит значения. Почему??!
			return parseInt(number);
		}

function write(text){
document.getElementById("passw").innerHTML=text;
}

function getRandomnumber(max){
	return Math.random(Math.random()* max);
}

function generateText(letters, length){
	var text = "";
	for (var i=0; i < length; i++){
		var n = getRandomnumber(letters.length-1);
		text = text + letters[n];
	}
	return text;
}

function generate(){
	var length = readInt();
	var passw = generateText(letters, length);
	write(passw);
	}

	
	</script>

</head>
<body>

<?php 
	include "menu.php";
?>

<h1>Генератор случайных паролей</h1>

<p>Укажите длину желаемого пароля. Он будет состоять из  случайных букв латинского алфавита нижнего регистра и цифр.</p>
<input type="text" id="userAnser">
<h3 id ="passw"></h3>
<a href="#" onclick="generate();" >Получить пароль</a>

<div class="contentWrap">
	<div class="content">
		<div class="center">

		</div>
	</div>
</div>

		<p><a href="index.html">Главная</a>,
<a href="riddles.html">Загадки</a>,
<a href="guess_number.html">Угадай число</a>
<a href="guess_number_for_2.php">Угадай число (на 2-х игроков)</a>

<div class="copyright">
	Copyright &copy; Скалер
</div>

</body>
</html>