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
				<h2>INSTRUCTION BOOKLET</h2>
				<br />
				<p>PAGE HAS NO CONTENTS. YOU CAN COME BACK ANOTHER TIME?</p>
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
					<audio id="audio1" src="audio/Visager_-_Songs_from_an_Unmade_World_-_03_Shrine.mp3" autoplay loop>
						Your browser doesn't support this audio thingy. Get another one if you want to hear noises.
					</audio>
				</div>
				<p><a href="https://visager.bandcamp.com/album/songs-from-an-unmade-world">'SHRINE'</a> by <a href="http://www.visager.us/">VISAGER</a> IS PLAYING SONG! <a href="credits.php#instruction_booklet_license">SEE LICENSE</a>.</p>
			</div>
		</div>
		<!-- End Audio Player -->
		
		<!-- Start Footer -->
		<?php include 'php/footer.php'; ?>
		<!-- End Footer -->

	

	</body>
</html>