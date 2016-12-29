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
				<!-- Character Select -->
				<h2>CHARACTER SELECT</h2>
				<br />
				<p>CHOOSE YOUR PRINCESS TO BE:</p>
				<br />
				<div class="row columns">
					<div class="medium-4 columns">
						<img class="selected" src="img/noonye-dancing.gif" />
					</div>
					<!-- Alternate Noonye Options
					<div class="medium-4 columns">
						<img src="img/mysterious3rd.png" />
					</div>
					<div class="medium-4 columns">
						<img src="img/noonyeblue.png" />
					</div>-->

					
				</div>
				<!-- End Character Select -->
				<br />
				<br />
				<!-- Start Main Menu -->
				<h2>MAIN MENU</h2>
				<ul class="heart-menu">
					<li><a href="worlds.php">WORLD SELECT</a></li>
					<li><a href="story.php">STORY MODE</a></li>
					<li><a href="scoreboard.php">HIGH SCORE</a></li>
					<li><a href="options.php">OPTIONS</a></li>
				</ul>
				<!-- Sound to play on Menu Item Hover -->
				<audio id="menu-hover-sfx" preload>
					<source src="audio/sfx/menu-hover7.mp3"></source>
					<source src="audio/sfx/menu-hover2.ogg"></source>
					Your browser doesn't support this audio thingy. Get another one if you want to hear noises.
				</audio>
				
				<script src="js/sfx-menu.js"></script>
	
				<!-- End Main Menu -->
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
					<audio id="audio1" src="audio/Visager_-_Songs_From_An_Unmade_World_2_-_18_Royal_Entrance_-Loop-.mp3" autoplay loop>
						Your browser doesn't support this audio thingy. Get another one if you want to hear noises.
					</audio>
				</div>
				<p><a href="https://visager.bandcamp.com/album/songs-from-an-unmade-world-2">'ROYAL ENTRANCE'</a> BY <a href="https://www.visager.us/">VISAGER</a> IS PLAYING SONG! <a href="credits.php#title_screen_license">SEE LICENSE</a>.</p>
			</div>
		</div>
		<!-- End Audio Player -->
		
		<!-- Start Footer -->
		<?php include 'php/footer.php'; ?>
		<!-- End Footer -->

	

	</body>
</html>