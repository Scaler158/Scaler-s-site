

		

		function readInt1(){
			var userAnswer1 = document.getElementById("userSum").value
			return parseFloat(userAnswer1);
		}
		
		function readInt2(){
		var userAnswer2 = document.getElementById("procent").value
			return parseFloat(userAnswer2);
		}	

		function readInt3(){
		var userAnswer2 = document.getElementById("userYear").value
			return parseFloat(userAnswer2);
		}

		function write (text){
			document.getElementById("info").innerHTML = text;
		}
	 
		function start() {										

			var sum = readInt1();
			var	procent = readInt2();
			var year_number = readInt3();

			for (var year = 1; year < year_number+1; year++){
				var procent_for_year = (sum/100) * procent;
				var sum_result = sum + procent_for_year;
				sum = sum_result;
			}
			write("<b>Итоговый размер вклада за " + (year-1) + "-й год = " + sum + "</b>");		
			}	
	