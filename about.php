<html class="no-js" lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>OH! TO BE PRINCESS!!</title>
		<link rel='shortcut icon' href='img/favicon.ico' type='image/x-icon'/ >
		<link rel="stylesheet" href="css/foundation.css">
		<link rel="stylesheet" href="css/foundation-icons.css">
		<link rel="stylesheet" href="css/jquery-ui.css">
		<link rel="stylesheet" href="css/foundation-player.css">
		<link rel="stylesheet" href="css/app.css">
				
		<script src="js/vendor/jquery.js"></script>
		<script src="js/jquery-ui.js"></script>
		<script src="js/vendor/foundation.js"></script>
		<script src="js/foundation-player.js"></script>
		<script src="js/app.js"></script>

	</head>
	<body>
  
		<!-- Start Top Bar -->
		<?php include 'php/titlebar.php'; ?>
		<!-- Navigation -->
		<?php include 'php/topnav.php'; ?>
		<!-- End Navigation -->
		<!-- End Top Bar -->

		<div class="row columns centerContent">
			<div class="columns">
				<br />
				<h2>ABOUT PRINCESS</h2>
				<br />
				<p>PRINCESS NIC IS MAKING PRINCESS NOONYE FIFTEEN YEARS AGO. ORIGIN IS THAT NOONYE WAS PRINCESS WHO SAVES PRINCESS BY TEACHING THEM FUN AND GOOD TIMES FOR DANCING, TEACHING PRINCESS THING TO PRINCESS FOR BETTER HAPPINESS AND GOOD FRIENDS!! THE TOOL TO USE IS RPGMAKER.</p>
				<p>THEN A SAD THING. THE GAME GETS DELETED BY AN ACCIDENTAL OTHER PERSON.</p>
				<p>FIFTEEN YEARS HAPPENS LATER....</p>
				<p>PRINCESS NIC HAS FRIEND THAT IS A PENGUIN. A PENGUIN IS THE WEBMAKER TO BE. THEY MAKE WEBPAGE FOR NOONYE.</p>
				<p>YOU CAN ALSO READ MORE INFORMATION ABOUT THIS THINGS <a href="#">HERE</a>.</p>
				<br />
				<div class="row columns">
					<div class="medium-4 columns">
						<img class="selected" src="img/noonye-dancing.gif" />
					</div>
				</div>
				<br />
			</div>
		</div>
		
		<!-- Start Audio Player -->
		<div class="row column">
			
			<div class='player-wrapper'>
				<div class='foundation-player no-1'>
					<ul class='player menu simple noselect'>
						<li class='player-button play'>
							<em class='fi-music'></em>
						</li>
						<li class='player-button rewind'>
							<em class='fi-refresh'></em>
						</li>
						<li class='player-progress'>
							<div class='progress round' role='progressbar'>
								<div class='progress-meter played'></div>
							</div>
						</li>
						<li class='player-status time'>
							<span class='elapsed'>00:00</span>
						</li>
						<li class='player-button volume'>
							<em class='fi-volume'></em>
						</li>
						<li class="volume-slider">
							<div id="audioSlider"></div>
						</li>
					</ul>
					<audio id="audio1" src="audio/Pinball_Spring.mp3" autoplay loop>
						Your browser doesn't support this audio thingy. Get another one if you want to hear noises.
					</audio>
				</div>
				<p><a href="http://incompetech.com/music/royalty-free/?keywords=pinball">'PINBALL SPRING'</a> BY <a href="http://incompetech.com/">KEVIN MACLEOD</a> IS PLAYING SONG! <a href="credits.php#story_mode_license">SEE LICENSE</a>.</p>
			</div>
		</div>
		<!-- End Audio Player -->
		
		<!-- Start Footer -->
		<?php include 'php/footer.php'; ?>
		<!-- End Footer -->

	

	</body>
</html>