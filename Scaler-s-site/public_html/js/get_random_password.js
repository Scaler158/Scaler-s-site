

		var letters = ["q", "w", "e", "r", "t", "y", "u", "i", "o", "p", "a", "s", "d", "f", "g", "h", "j", "k", "l", "z", "x", "c", "v", "b", "n", "m", "1", "2", "3", "4", "5", "6", "7", "8", "9", "0"];

		function readInt(){
			return +document.getElementById("userAnswer").value  
		}

		function write(text){
		document.getElementById("passw").innerHTML=text;
		}

		function getRandomnumber(max){
			return Math.round(Math.random()* max);
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
	