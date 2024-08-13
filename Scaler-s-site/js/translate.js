
		function start(){
		
			var words = [
				["food", "еда" , "пища"],
				["bike", "велосипед", "велик"],
				["apple", "яблоко", "яблочко"],
				["do", "делать", "совершать"],
				["mean", "иметь в виду", "значить"],
			];
			var hardwords= [
				["cry", "плакать", "рыдать"],
				["castle", "замок", "дворец"],
				["homeland", "родина", "отечество"],
				["sewerage", "канализация", "сток"],
				["bottom", "дно", "низ"],
			];

			function askForWords(words){
				while(words.length != 0){
				var i = parseInt(Math.random() * words.length)
				var userAnswer = prompt ("Назовите перевод слова: " + words [i][0]);
				userAnswer = userAnswer.toLowerCase();  
				
				if (userAnswer == words[i][1] || userAnswer == words[i][2]) {
				alert ("Это правильный ответ!");
				words.splice(i, 1);
				} else { 
				alert ("Ответ неверен! Правильный ответ: " + words[i][1]);
				}
			}
			}

			askForWords(words);
			askForWords(hardwords);
			
			alert ("Вы ответили все слова верно! Поздравляем!")
		}

	