<html class="no-js" lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>OH! TO BE PRINCESS!!</title>
		<link rel='shortcut icon' href='img/favicon.ico' type='image/x-icon'/ >
		<link rel="stylesheet" href="css/foundation.css">
		<link rel="stylesheet" href="css/foundation-icons.css">
		<link rel="stylesheet" href="css/mediaelementplayer.css">
		<link rel="stylesheet" href="css/app.css">

				
		<script src="js/vendor/jquery.js"></script>
		<script src="js/mediaelement-and-player.min.js"></script>
		<script src="js/vendor/foundation.js"></script>
		
		<script>
		  $(document).ready(function($) {
				$(document).foundation();
				// using jQuery
				$('video,audio').mediaelementplayer(
					defaultVideoWidth: 480,
					// if the <video height> is not specified, this is the default
					defaultVideoHeight: 270,
					// if set, overrides <video width>
					videoWidth: -1,
					// if set, overrides <video height>
					videoHeight: -1,
					// width of audio player
					audioWidth: 400,
					// height of audio player
					audioHeight: 30,
					// initial volume when the player starts
					startVolume: 0.8,
					// useful for <audio> player loops
					loop: false,
					// enables Flash and Silverlight to resize to content size
					enableAutosize: true,
					// the order of controls you want on the control bar (and other plugins below)
					features: ['playpause','progress','current','duration','tracks','volume','fullscreen'],
					// Hide controls when playing and mouse is not over the video
					alwaysShowControls: false,
					// force iPad's native controls
					iPadUseNativeControls: false,
					// force iPhone's native controls
					iPhoneUseNativeControls: false, 
					// force Android's native controls
					AndroidUseNativeControls: false,
					// forces the hour marker (##:00:00)
					alwaysShowHours: false,
					// show framecount in timecode (##:00:00:00)
					showTimecodeFrameCount: false,
					// used when showTimecodeFrameCount is set to true
					framesPerSecond: 25,
					// turns keyboard support on and off for this instance
					enableKeyboard: true,
					// when this player starts, it will pause other players
					pauseOtherPlayers: true,
					// array of keyboard commands
					keyActions: []
				);
			}); 
		</script>
		
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
				<ul class="heartMenu">
					<li><a href="#">WORLD SELECT</a></li>
					<li><a href="#">STORY MODE</a></li>
					<li><a href="#">HIGH SCORE</a></li>
					<li><a href="#">OPTIONS</a></li>
				</ul>
				<!-- End Main Menu -->
				<br />
			</div>
		</div>
		
		<!-- Start Audio Player -->
		<div class="columns row">
			<audio>
				<source src='audio/Visager_-_02_-_Royal_Entrance.mp3'>
			</audio>
		</div>
		<?php //include 'php/audioplayer.php'; ?>
		<!--		
				</div>
				<p><a href="https://visager.bandcamp.com/album/songs-from-an-unmade-world-2">'Royal Entrance'</a> by <a href="https://visager.bandcamp.com/">Visager</a> IS PLAY SONG!</p>
			</div>
		</div>-->
		<!-- End Audio Player -->
		
		<!-- Start Footer -->
		<?php include 'php/footer.php'; ?>
		<!-- End Footer -->

	

	</body>
</html>