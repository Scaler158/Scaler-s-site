

		function compare_answers(userAnswer, answer) {
			if(userAnswer == answer){
				alert("Всё верно!");
			} else {
		 		alert ("А вот и нет. Правильный ответ " + answer);
			}
		}

		function generateRandomNumbers(length){
			var arr = [];

			for (var i = 0; i < length; i++){
				var randomNumber = Math.round(Math.random() * 100);
				arr.push(randomNumber);
			}	
				return arr;
			
		}

		function getRandomNumber(){
			var rand = Math.round(Math.random()*(numbers.length - 1));
			return rand;
		}


		var numbers = generateRandomNumbers(5);
		

		function start() {
			alert("Запомните числа и их порядок: " + numbers);

			var userAnswer = +prompt ("Каким было первое число?");
			compare_answers(userAnswer, numbers[0]);

			var userAnswer = +prompt ("А последнее?");
			compare_answers(userAnswer, numbers[ numbers.length -1 ]);

			var n = getRandomNumber();
			var userAnswer = +prompt ("А как на счёт числа под номером " + (n+1) + "?");
			compare_answers(userAnswer, numbers [n]);
		}
	