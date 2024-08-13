
		


		
		function start() {

			function readInt() {
				var b = document.getElementById("userAnswer").value
				return parseInt(b);
			}

			function write (text){
			document.getElementById("info").innerHTML=text; 
			}

			
			var n = readInt();
			function recursiveFactorial(n) {
				if ( n == 0 ) {
					return 1;
				} else {
					return recursiveFactorial(n-1) * n;
				}
			}

			var rf = recursiveFactorial(n);
			write (rf);
		}	

