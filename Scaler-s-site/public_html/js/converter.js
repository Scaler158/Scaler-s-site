
		function write (text){
			document.getElementById("info").innerHTML = text;
		}
		
		function start() {
			var a = document.getElementById("dollar").value
			var b = document.getElementById("euro").value
			var c = document.getElementById("userSum").value

			a = parseInt(a);
			b = parseInt(b);
			c = parseInt(c);

			var d = c / a ;
			var e = c / b;
			
			write("<b>У вас будет " + d.toFixed(2) + " долларов или "+ e.toFixed(2) + " евро</b>");
		}
			


