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

		<div class="row columns">
			<br />
			<h2>PRINCESS BLOG</h2>
			<br />
			<p>A PRINCESS HAS THE BLOG FOR FUN. DO YOU READ IT?</p>
			<br />
			<div class="row columns princess-blog">
				<div class="callout">
					<div class="row">
						<div class="medium-1 columns">
							<img class="selected" src="img/noonye-dancing.gif" />
						</div>
						<div class="medium-11 columns">
							<h5><a href="#">ASK NOONYE BLOG</a></h5>
							<p>THIS IS PRINCESS BLOG FOR ASKING NOONYE.</p>
						</div>
					</div>
				</div>
				<div class="callout">
					<div class="row">
						<div class="medium-1 columns">
							<img class="selected" src="img/noonye-dancing.gif" />
						</div>
						<div class="medium-11 columns">
							<h5><a href="#">NICPANIC BLOG</a></h5>
							<p>BLOG OF PRINCESS NIC.</p>
						</div>
					</div>
				</div>
				<div class="callout">
					<div class="row">
						<div class="medium-1 columns">
							<img class="selected" src="img/noonye-dancing.gif" />
						</div>
						<div class="medium-11 columns">
							<h5><a href="#">A PENGUIN BLOG</a></h5>
							<p>BLOG OF PRINCESS PENGUIN.</p>
						</div>
					</div>
				</div>
			</div>
			<br />
			<br />
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
					<audio id="audio1" src="audio/03_I_Like_Jump_Rope.mp3" autoplay loop>
						Your browser doesn't support this audio thingy. Get another one if you want to hear noises.
					</audio>
				</div>
				<p><a href="https://ozzed.bandcamp.com/album/8-bit-empire">'I LIKE JUMP ROPE'</a> BY <a href="http://ozzed.net/">OZZED</a> IS PLAYING SONG! <a href="credits.php#princess_blog_license">SEE LICENSE</a>.</p>
			</div>
		</div>
		<!-- End Audio Player -->
		
		<!-- Start Footer -->
		<?php include 'php/footer.php'; ?>
		<!-- End Footer -->

	

	</body>
</html>