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

		<div class="row columns">
			<div class="columns">
				<br />
				<h2>OPTIONS</h2>
				<br />
				<div class="columns">
					<p>AUTO PLAY MUSIC?</p>
					<div class="switch large">
					  <input class="switch-input" id="yes-no-music" type="checkbox" name="musicSwitch">
					  <label class="switch-paddle" for="yes-no-music">
						<span class="show-for-sr">AUTO PLAY MUSIC?</span>
						<span class="switch-active" aria-hidden="true">YES</span>
						<span class="switch-inactive" aria-hidden="true">NO</span>
					  </label>
					</div>
					<br />
					<p>PLAY SOUND EFFECT?</p>
					<div class="switch large">
					  <input class="switch-input" id="yes-no-sound" type="checkbox" name="soundSwitch">
					  <label class="switch-paddle" for="yes-no-sound">
						<span class="show-for-sr">PLAY SOUND EFFECT?</span>
						<span class="switch-active" aria-hidden="true">YES</span>
						<span class="switch-inactive" aria-hidden="true">NO</span>
					  </label>
					</div>
					<br />
					<br />
				</div>
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
					<audio id="audio1" src="audio/13_Just_a_Minuet.mp3" autoplay loop>
						Your browser doesn't support this audio thingy. Get another one if you want to hear noises.
					</audio>
				</div>
				<p><a href="https://ozzed.bandcamp.com/album/8-bit-run-n-pun">'JUST A MINUET'</a> BY <a href="http://ozzed.net/">OZZED</a> IS PLAYING SONG! <a href="credits.php#options_license">SEE LICENSE</a>.</p>
			</div>
		</div>
		<!-- End Audio Player -->
		
		<!-- Start Footer -->
		<?php include 'php/footer.php'; ?>
		<!-- End Footer -->

	

	</body>
</html>