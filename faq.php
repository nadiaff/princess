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
			<div class="columns large-6">
				<br />
				<div class="row">
					<div class="columns small-1">Q</div>
					<div class="columns small-11"><em>WHAT IS PRINCESS?</em></div>
				</div>
				<div class="row">
					<div class="medium-1 columns">A</div>
					<div class="medium-11 columns">PRINCESS IS THE FUN TO BE.</div>
				</div>
				<br />
				<div class="row">
					<div class="columns small-1">Q</div>
					<div class="small-11 columns"><em>WHO IS NOONYE?</em></div>
				</div>
				<div class="row">
					<div class="medium-1 columns">A</div>
					<div class="medium-11 columns">NOONYE IS PRINCESS OF MAGIC LAND WHO FIND OTHER PRINCESS TO TEACH PRINCESS THING.</div>
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