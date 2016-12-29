<html class="no-js" lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>OH! TO BE PRINCESS!!</title>
		<link rel='shortcut icon' href='img/favicon.ico' type='image/x-icon'/ >
		<?php 
			include 'cssincludes.php'; 
			include 'jsincludes.php';
		?>

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
				<p>PRINCESS NIC IS MAKING PRINCESS NOONYE FIFTEEN YEARS AGO.</p>
				<br />
				<p>ORIGIN IS THAT NOONYE WAS PRINCESS WHO SAVES PRINCESS BY TEACHING THEM FUN</p>
				<p>AND GOOD TIMES FOR DANCING. TEACHING PRINCESS THING TO PRINCESS</p>
				<p>FOR BETTER HAPPINESS AND GOOD FRIENDS!! THE TOOL TO USE IS RPGMAKER.</p>
				<br />
				<p>THEN A SAD THING. THE GAME GETS DELETED BY AN ACCIDENTAL OTHER PERSON.</p>
				<br />
				<p>FIFTEEN YEARS HAPPENS LATER....</p>
				<br />
				<p>PRINCESS NIC HAS FRIEND THAT IS A PENGUIN. A PENGUIN IS THE WEBMAKER TO BE.</p>
				<p>THEY MAKE WEBPAGE FOR NOONYE.</p>
				<br />
				<p>YOU CAN ALSO READ MORE INFORMATION ABOUT THIS THINGS <a href="#">HERE</a>.</p>
				<br />
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