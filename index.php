<!DOCTYPE html>
<html>
	<head>
		<title>Tic-Tac-Toe</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		dhfdafdff
		<header class="top-nav">
			<div class="title">TIC-TAC-TOE</div>
		</header>
		<div class="container">  
			<div style="float:left"> 
				<table border="0">
					<tr>
						<td id="one"></td>
						<td id="two"></td>
						<td id="three"> </td>
					</tr>
					<tr>
						<td id="four"></td>
						<td id="five"></td>
						<td id="six"></td>
					</tr>
					<tr>
						<td id="seven"></td>
						<td id="eight"></td>
						<td id="nine"></td>
					</tr>
				</table>
			</div>
			<div style="float:left">
				<span id="player1" class="player">Player 1: X</span></br>
				<span id="player2" class="player">Player 2: O</span></br>
				<span id="winner" class="player" style="color:red"></span></br>
				<button id="playagain">Play Again!</button>
			</div>
		</div>

		<script type="text/javascript">
		    var count = 0;
		    var tds = new Array();
			tds[0] = document.getElementById('one');
			tds[1] = document.getElementById('two');
			tds[2] = document.getElementById('three');
			tds[3] = document.getElementById('four');
			tds[4] = document.getElementById('five');
			tds[5] = document.getElementById('six');
			tds[6] = document.getElementById('seven');
			tds[7] = document.getElementById('eight');
			tds[8] = document.getElementById('nine');
			var jbutton = document.getElementById('playagain');
			var winner = document.getElementById('winner');
			var text1 = document.createTextNode("Winner: Player 1!");
			var text2 = document.createTextNode("Winner: Player 2!");

			for (var i = 0; i < tds.length; i++) {
				(function(td) {
					td.onclick = function() {
						if (this.innerText !== '')
							return;
						count++;
						var cross = document.createTextNode("X"); 
						var circle = document.createTextNode("O"); 
						if (count == 1)
							td.appendChild(cross);
						else 
							td.appendChild(circle);
						td.disabled = true;
						if(count >= 2)
							count = 0;
						checkWinner();

					};
				})(tds[i]); 
			};
			
			jbutton.onclick = function(){window.location.reload()};

			function disableClick() {
				tds.forEach(function(n) {
					n.onclick = undefined;
				})
			}

			function checkWinner(){
				var hasWinner = false;
				
				// horizontally
				for (var i = 0; i < 9; i+=3) {
					if((tds[i].innerText === 'X') && (tds[i].innerText === tds[i+1].innerText) && (tds[i+1].innerText === tds[i+2].innerText)) {
						winner.appendChild(text1);
						hasWinner = true;
					} else if((tds[i].innerText === 'O') && (tds[i].innerText === tds[i+1].innerText) && (tds[i+1].innerText === tds[i+2].innerText)) {
						winner.appendChild(text2);
						hasWinner = true;
					}
				}

				// vertically
				for (var i = 0; i < 3; i++) {
					if ((tds[i].innerText === 'X') && (tds[i].innerText === tds[i+3].innerText) && (tds[i+3].innerText === tds[i+3+3].innerText)) {
						winner.appendChild(text1);
						hasWinner = true;
					} else if((tds[i].innerText === 'X') && (tds[i].innerText === tds[i+3].innerText) && (tds[i+3].innerText === tds[i+3+3].innerText)) {
						winner.appendChild(text2);
						hasWinner = true;
					}
				}

				// diagonally
				var i = 0;
				if((tds[i].innerText === 'X') && (tds[i].innerText === tds[i+4].innerText) && (tds[i+4].innerText === tds[i+8].innerText)) {
					winner.appendChild(text1);
					hasWinner = true;
				} else if((tds[i].innerText === 'O') && (tds[i].innerText === tds[i+4].innerText) && (tds[i+4].innerText === tds[i+8].innerText)) {
					winner.appendChild(text2);
					hasWinner = true;
				}

				var i = 2;
				if((tds[i].innerText === 'X') && (tds[i].innerText === tds[i+2].innerText) && (tds[i+2].innerText === tds[i+2+2].innerText)) {
					winner.appendChild(text1);
					hasWinner = true;
				} else if((tds[i].innerText === 'O') && (tds[i].innerText === tds[i+2].innerText) && (tds[i+2].innerText === tds[i+2+2].innerText)) {
					winner.appendChild(text2);
					hasWinner = true;
				}
				
				if (hasWinner === true)
					disableClick();
			}
			/*document.querySelector('#one').onclick = function() {
				alert('x');
			}*/

		</script>
		
	</body>
</html>