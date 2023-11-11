<!DOCTYPE html>

<html>
	<head>
		<title>Fuck JONAS!!!</title>
		<style>
			body {
				background-color: black;
				background: url('a_very_sad_bean.png');
				font-family: 'Cantarell', 'Arial', 'Verdana', sans-serif;
				text-align: center;
				animation: wee;
				animation-duration: 0.5s;
				animation-iteration-count: infinite;
				animation-delay: 0;
			}

			html {
				animation: wee;
				animation-duration: 0.1s;
				animation-iteration-count: infinite;
				animation-delay: 0;	
			}

			h1 {
				font-size: 60px;
				animation-name: blinkey;
				animation-duration: 0.5s;
				animation-delay: 0;
				animation-iteration-count: infinite;
				transition: 0.4s;
				filter: drop-shadow(0px 0px 5px red);
			}

			@keyframes blinkey {
				0% {
					opacity: 0;
				}
				50% {
					opacity: 1;
				}
				100% {
					opacity: 0;
				}
			}

			@keyframes wee {
				0% {
					filter: invert(100%);
					transform: translateX(20px);
					background-size: cover;
				}
				25% {
					filter: hue-rotate(70deg);
					filter: invert(0);
					font-size: 85px;
					transform: translateX(-20px);
					transform: rotateY(80px);
					background-size: contain;
				}
				50% {
					filter: invert(100%);
					transform: translateX(20px);
					transform: rotateY(-80px);
					background-size: cover;
				}
				75% {
					filter: hue-rotate(70deg);
					filter: invert(0);
					font-size: 85px;
					background-size: contain;
				}
				100% {
					filter: none;
				}
			}
		</style>

			
	</head>
	<body>

	<script>
		var elem = document.documentElement;

		function openFullscreen() {
		  if (elem.requestFullscreen) {
		    elem.requestFullscreen();
		  } else if (elem.webkitRequestFullscreen) { /* Safari */
		    elem.webkitRequestFullscreen();
		  } else if (elem.msRequestFullscreen) { /* IE11 */
		    elem.msRequestFullscreen();
		  }
		}

		openFullscreen();
	</script>
	
<?php
	$one = 1;
	$randomness = rand(1, 12);

	while ($one < 10) {
		if ($randomness < 6) {
			echo "<h1 style=\"color: red\">PK ALERT</h1>";
		} else {
			echo "<h1 style=\"color: red\">I am in your home :3</h1>";
		}
		
		$one += 1;
	}
	
?>

		<audio autoplay loop>
			<source src="/alert.mp3" type="audio/mp3">
			<source src="/horse.mp3" type="audio/mp3">
			<source src="/reverse.mp3" type="audio/mp3">
		your browser sux like jonas
		</audio>
		<audio autoplay loop>
			<source src="/horse.mp3" type="audio/mp3">
		</audio>
		<audio autoplay loop>
			<source src="/reverse.mp3" type="audio/mp3">
		</audio>

		
	</body>
</html>
