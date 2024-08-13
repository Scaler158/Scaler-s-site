<!DOCTYPE html>
<html lang ="ru">
<head>
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="Много загадок, и победители, ответившие на самую сложную.">
		<meta name="keywords" content="Игра, загадки, сложность, правильный ответ">
		<meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">
		<meta name="robots" content="index, follow">
		<meta name="googlebot" content="index, follow">
		<meta name="slurp" content="index, follow">
		<meta name="author" content="Иван Тарарин">
		<meta name="creator" content="Иван Тарарин">
		<meta name="publisher" content="Иван Тарарин">

	<title>Загадки</title>

	<link rel="stylesheet" href="/styles/normalize.css"> 
	<link rel="stylesheet" href="/styles/all_style.css">		
	<link rel="stylesheet" href="/styles/riddles_style.css">	
</head>
<body>

		<?php
			include "menu.html";
		?>
	</header>

	<main>
			<h1>Загадки</h1>

			<img src="/img/riddle_new.png" alt="Головная боль Бакундана" width="456" height="325">
			<p>Введите ответ на загадку в окно под ней (можно ввести ответы на несколько загадок сразу). Затем нажмите кнопку ответить (в самом низу страницы).</p>		

			<aside class="riddles_nav">
					<h3>Разделы страницы:</h3>
					<ul> 
						<li><a href="#riddles_child">Загадки детские и сказочные</a></li>
						<li><a href="#riddles_easy">Загадки простые</a></li>
						<li><a href="#riddles_hard">Загадки средние</a></li>
						<li><a href="#riddles_very_hard">Загадки сложные</a></li>
						<li> <a href="#give_answer">Ответить</a></li>						
					</ul>
					<a class="button_up" href="#top">Наверх</a>
			</aside> 

			<form method="GET">	
							
					<fieldset><legend id="riddles_child">Загадки детские:</legend>

						<p>Висит груша, нельзя скушать. Что это?</p>
						<input type="text" name ="userAnswer_1">						

						<p>Два кольца, два конца, а посередине - гвоздик. Что это?</p>
						<input type="text" name = "userAnswer_2">

						<p class="bold">Загадки про сказки или сказочных персонажей:</p>

						<p>Пенсионер принудил к тяжелому труду на земле женщин и животных! В какой сказке это было?</p> 
						<input type="text" name = "userAnswer_3">
						
						<p>Сбор оброка. Заказы любой сложности. Работаю даже с чертями. Кто я?</p> 
						<input type="text" name = "userAnswer_4">						
						
					</fieldset>
				
					<fieldset><legend id="riddles_easy">Загадки простые:</legend>
					
						<p>Какой человек под проливным дождём не намочит волосы?</p>
						<input type="text" name = "userAnswer_5">

						<p>Что случится с голубым шарфом, если его положить в воду на пять минут?</p>
						<input type="text" name = "userAnswer_6">
						
						<p>У квадратного стола отпилили один угол. Сколько теперь углов у него стало?</p>
						<input type="text" name = "userAnswer_7">
												
					</fieldset>					
					
					<fieldset><legend id="riddles_hard">Загадки средние:</legend>

						<p>Завязать его можно, а развязать не получится.</p>
						<input type="text" name = "userAnswer_8">

						<p>Что бросают, когда в нем нуждаются, и поднимают, когда в нем не нуждаются?</p>
						<input type="text" name = "userAnswer_9">
						
						<p>Это дается нам трижды. Первые два раза бесплатно. А вот за третий придется заплатить.</p> 
						<input type="text" name = "userAnswer_10">
						
						<p>Человек делает так, чтобы он включился, но когда он включается, человек его сразу выключает.</p>
						<input type="text" name = "userAnswer_11">
						
						<p>Что появилось раньше: яйцо или курица?</p>
						<input type="text" name = "userAnswer_12">
						
						<p>Чем больше отдаю, 
							Тем больше вырастаю, 
							Величину свою 
							Отдачей измеряю.</p>
						<input type="text" name = "userAnswer_13">

						<p>На попе сидит и в попу глядит.</p>
						<input type="text" name = "userAnswer_14">
					</fieldset>

					<fieldset><legend>Загадки cложные:</legend>

						<p>Что у женщины на теле, у еврея на уме, применяется в хоккее и на шахматной доске?</p>
						<input type="text" name = "userAnswer_15">
						
						<p>Что принадлежит вам, однако другие этим пользуются чаще, чем вы сами?</p>
						<input type="text" name = "userAnswer_16">
						
						<p>Какое слово начинается с трех букв «Г» и заканчивается тремя буквами «Я»?</p>
						<input type="text" name = "userAnswer_17">
					</fieldset>
					
					<fieldset><legend id="riddles_very_hard">Загадки особенно сложные:</legend> 

						<p>Загадка повышенной сложности:</p>	
							<p>Оно лучше бога, и хуже дьявола. 
								У бедных это есть, у богатых нет. 
								Если это съесть, то умрёшь. Что это?</p>
							<input type="text" name = "userAnswer_18">						

						<p>Загадка элитной сложности:</p> 
						<p>Прямоугольник в плену у 4-х кругов. 
							В каждом кругу по треугольнику. 
							Что это?</p>
						<input type="text" name = "userAnswer_19">
					</fieldset>

					<button name="0" id="give_answer">Ответить</button>
			</form>

			<aside class="answersByUsers">
			<div class="winUsers">	
				Количество правильных ответов на элитную загадку:<span class="bold"> 1</span>
				Правильно ответившие:
				<div><span class="right_answer">&#129351;Лёха</span> (ответил <time datetime="2022-07-26">26.07.22.</time>)</div>
			</div>	
				<hr>
				<details><summary title="Кликай сюда!"><small>Как попасть в этот список?</small></summary> 
					<ol>
						<li>Сообщите Ваш ответ мне на почту, или иным способом.</li> 
						<li>Прикрепите к ответу Ваши ФИО (или иную любую информацию, которая будет идентифицировать Вас).</li>
						<li>Обязательно объяснить ход Ваших рассуждений при решении данной загадки.</li>
					</ol>
				</details>
			</aside>
			
			<?php
				if(isset($_GET['userAnswer_1']) 
						&& isset($_GET['userAnswer_2']) 
						&& isset($_GET['userAnswer_3']) 
						&& isset($_GET['userAnswer_4'])
						&& isset($_GET['userAnswer_5']) 
						&& isset($_GET['userAnswer_6'])		
						&& isset($_GET['userAnswer_7'])
						&& isset($_GET['userAnswer_8'])
						&& isset($_GET['userAnswer_9'])
						&& isset($_GET['userAnswer_10'])
						&& isset($_GET['userAnswer_11'])
						&& isset($_GET['userAnswer_12'])
						&& isset($_GET['userAnswer_13'])
					 	&& isset($_GET['userAnswer_14'])
					 	&& isset($_GET['userAnswer_15'])
						&& isset($_GET['userAnswer_16'])
						&& isset($_GET['userAnswer_17'])
						&& isset($_GET['userAnswer_18'])
						&& isset($_GET['userAnswer_19'])						
						)
						
						{			
							$userAnswer = $_GET["userAnswer_1"];
							$userAnswer = mb_strtolower($userAnswer);
							$score = 0;
							if($userAnswer == "лампа" || $userAnswer == "люстра" || $userAnswer == "лампочка"){
								$score++;
							}

							$userAnswer = $_GET["userAnswer_2"];
							$userAnswer = mb_strtolower($userAnswer);
							if($userAnswer == "ножницы" || $userAnswer == "ножнички"){
								$score++;
							}
							
							$userAnswer = $_GET["userAnswer_3"];
							$userAnswer = mb_strtolower($userAnswer);
							if($userAnswer == "репка" || $userAnswer == "сказка про репку"){
								$score++;
							}
							
							$userAnswer = $_GET["userAnswer_4"];
							$userAnswer = mb_strtolower($userAnswer);
							if($userAnswer == "балда"){
								$score++;
							}							
												
							$userAnswer = $_GET["userAnswer_5"];
							$userAnswer = mb_strtolower($userAnswer);
							if($userAnswer == "лысый" || $userAnswer == "безволосый"){
								$score++;
							}
							
							$userAnswer = $_GET["userAnswer_6"];
							$userAnswer = mb_strtolower($userAnswer);
							if($userAnswer == "намокнет" || $userAnswer == "промокнет" || $userAnswer == "станет мокрым"){
								$score++;
							}
							
							$userAnswer = $_GET["userAnswer_7"];
							$userAnswer = mb_strtolower($userAnswer);
							if($userAnswer == "пять" || $userAnswer == "5"){
								$score++;
							}
							
							$userAnswer = $_GET["userAnswer_8"];
							$userAnswer = mb_strtolower($userAnswer);
							if($userAnswer == "разговор" || $userAnswer == "диалог"){
								$score++;
							}
							
							$userAnswer = $_GET["userAnswer_9"];
							$userAnswer = mb_strtolower($userAnswer);
							if($userAnswer == "якорь"){
								$score++;
							}
							
							$userAnswer = $_GET["userAnswer_10"];
							$userAnswer = mb_strtolower($userAnswer);
							if($userAnswer == "зубы" || $userAnswer == "зубки"){
								$score++;
							}
							
							$userAnswer = $_GET["userAnswer_11"];
							$userAnswer = mb_strtolower($userAnswer);
							if($userAnswer == "будильник"){
								$score++;
							}
							
							$userAnswer = $_GET["userAnswer_12"];
							$userAnswer = mb_strtolower($userAnswer);
							if($userAnswer == "яйцо" || $userAnswer == "яйцо динозавра"){
								$score++;
							}
							
							$userAnswer = $_GET["userAnswer_13"];
							$userAnswer = mb_strtolower($userAnswer);
							if($userAnswer == "яма" || $userAnswer == "ямка"){
								$score++;
							}
							
							$userAnswer = $_GET["userAnswer_14"];
							$userAnswer = mb_strtolower($userAnswer);
							if($userAnswer == "кучер" || $userAnswer == "проктолог"){
								$score++;
							}
							
							$userAnswer = $_GET["userAnswer_15"];
							$userAnswer = mb_strtolower($userAnswer);
							if($userAnswer == "комбинация"){
								$score++;
							}

							$userAnswer = $_GET["userAnswer_16"];
							$userAnswer = mb_strtolower($userAnswer);
							if($userAnswer == "имя" || $userAnswer == "ваше имя"){
								$score++;
							}

							$userAnswer = $_GET["userAnswer_17"];
							$userAnswer = mb_strtolower($userAnswer);
							if($userAnswer == "тригонометрия"){
								$score++;
							}
							
							$userAnswer = $_GET["userAnswer_18"];
							$userAnswer = mb_strtolower($userAnswer);
							if($userAnswer == "ничего" || $userAnswer == "ничто" || $userAnswer == "дети"){
								$score++;
							}

							$userAnswer = $_GET["userAnswer_19"];
							$userAnswer = mb_strtolower($userAnswer);
							if($userAnswer == "объявление" || $userAnswer == "плакат"){
								$score++;
							}

							echo  "Ваш результат - вы угадали " . $score  . " загадок!";		
													
						}
			?>
	
	</main>	

	<footer>
		<?php
		include "footer.html";
		?>
	</footer>	
	

</body>
</html>