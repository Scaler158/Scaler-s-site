

		var anwer = parseInt(Math.random() * 100);
		var tryCount = 0;
		var MaxTryCount = 7;

		function readInt(){
			var number = document.getElementById("userAnswer").value
			return parseInt(number);
		}

		function write (text){
			document.getElementById("info").innerHTML = text;
		}

		function hide (id){
			document.getElementById(id).style.display="none";
		}

		function guess() {
			tryCount++;
			var userAnswer = readInt();
			
			if(userAnswer == anwer){
				write("<b>Поздравляю, Вы угадали!</b>")
				hide("userAnswer");
				hide("button");
			} else if(tryCount >= MaxTryCount){
				write("Ваши попытки кончились! Попробуйте заново!<p>Правильный ответ: " + anwer);
				hide("userAnswer");
				hide("button");
			} else if (userAnswer > anwer){
				write("Это число слишком большое!<p>Попробуйте ещё раз");
			} else if (userAnswer < anwer){
				write("Это число слишком маленькое!<p>Попробуйте ещё раз");
			} 
		}
	