<html class="no-js" lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>OH! TO BE PRINCESS!!</title>
		<link rel='shortcut icon' href='img/favicon.ico' type='image/x-icon'/ >
		<link rel="stylesheet" href="css/foundation.css">
		<link rel="stylesheet" href="css/foundation-icons.css">
		<link rel="stylesheet" href="css/foundation-player.css">
		<link rel="stylesheet" href="css/app.css">


				
		<script src="js/vendor/jquery.js"></script>
		<script src="js/vendor/foundation.js"></script>
		<script src="js/foundation-player.js"></script>
		<script>
		  $(document).ready(function($) {
			  $(document).foundation();
			  $('.foundation-player.no-1').foundationPlayer();
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
		<!--<div class="columns row">
			<audio src="audio/Visager_-_02_-_Royal_Entrance.mp3">
				<p>Your browser does not support the <code>audio</code> element </p>
			</audio>
		</div>-->
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
						<li class='player-button volume'>
							<em class='fi-volume'></em>
						</li>
						<li class='player-status time'>
							<span class='elapsed'>00:00</span>
						</li>
						<li class='player-progress'>
							<div class='progress round' role='progressbar'>
								<div class='progress-meter played'></div>
							</div>
						</li>
						<li class='player-status time'>
							<span class='remains'>-00:00</span>
						</li>
					</ul>
				</div>
				<p><a href="https://visager.bandcamp.com/album/songs-from-an-unmade-world-2">'Royal Entrance'</a> by <a href="https://visager.bandcamp.com/">Visager</a> IS PLAY SONG!</p>
			</div>
		</div>
		<!-- End Audio Player -->
		
		<!-- Start Footer -->
		<?php include 'php/footer.php'; ?>
		<!-- End Footer -->

	

	</body>
</html>