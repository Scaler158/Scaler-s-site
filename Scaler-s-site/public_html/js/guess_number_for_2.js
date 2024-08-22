

		var anwer = parseInt(Math.random() * 100);
		var playerNumber = 1;

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
		
		function change_player(){
			if(playerNumber == 1)
				playerNumber = 2;
			else
				playerNumber = 1;
		}

		function guess() {
				var userAnswer = readInt();
			
				if(userAnswer == anwer){
					write("<b>Поздравляю, игрок " + playerNumber + " - Вы угадали!</b>");
					hide("userAnswer");
					hide("button");
				} else if (userAnswer > anwer){
					change_player();
					write("Это число слишком большое!<p> Следующим ходит игрок " + playerNumber);
				} else if (userAnswer < anwer){
					change_player();
					write("Это число слишком маленькое!<p> Следующим ходит игрок " + playerNumber);
				} 
		}

