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
				<h2>WORLD SELECT</h2>
				<br />
				
				<div class="row small-up-2 medium-up-3 large-up-4">
					<div class="column">
						<h5>SAVE ALL PRINCESS!!</h5>
						<img class="thumbnail" src="img/Arabian_Dream.png">					
					</div>
					<div class="column">
						<h5>ORIGIN OF PRINCESS</h5>
						<img class="thumbnail" src="img/origin-of-princess-preview.png">
					</div>
					<div class="column">
						<h5>OH! THE GALACTIC!!</h5>
						<img class="thumbnail" src="img/question_square.png">
					</div>
					<div class="column">
						<h5>FOOD ATTACK PRINCESS</h5>
						<img class="thumbnail" src="img/question_square.png">
					</div>
					<div class="column">
						<h5>PRINCESS INTERPRETER</h5>
						<img class="thumbnail" src="img/question_square.png">
					</div>
					<div class="column">
						<h5>FAIRY TELL PRINCESS</h5>
						<img class="thumbnail" src="img/question_square.png">
					</div>
					<div class="column">
						<h5>PAKU PAKU PRINCESS</h5>
						<img class="thumbnail" src="img/question_square.png">
					</div>
					<div class="column">
						<h5>OH! PRINCESS HOUSE!!</h5>
						<img class="thumbnail" src="img/question_square.png">
					</div>
					<div class="column">
						<h5>?</h5>
						<img class="thumbnail" src="img/question_square.png">
					</div>
					<div class="column">
						<h5>?</h5>
						<img class="thumbnail" src="img/question_square.png">
					</div>
					<div class="column">
						<h5>?</h5>
						<img class="thumbnail" src="img/question_square.png">
					</div>
					<div class="column">
						<h5>?</h5>
						<img class="thumbnail" src="img/question_square.png">
					</div>
				</div>
			</div>
		</div>
		<br />
		<br />
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
					<audio id="audio1" src="audio/Bit_Quest.mp3" autoplay loop></audio>
				</div>
				<p><a href="https://sellfy.com/p/UdAp/">'BIT QUEST'</a> by <a href="http://incompetech.com/">KEVIN MACLEOD</a> IS PLAYING SONG! <span data-tooltip aria-haspopup="true" class="has-tip " title="Bit Quest Kevin MacLeod (incompetech.com) Licensed under Creative Commons: By Attribution 3.0 License http://creativecommons.org/licenses/by/3.0/"><a href="http://creativecommons.org/licenses/by/3.0/">SEE LICENSE</a></span>.</p>
			</div>
		</div>
		<!-- End Audio Player -->
		
		<!-- Start Footer -->
		<?php include 'php/footer.php'; ?>
		<!-- End Footer -->

	</body>
</html>
		<!-- End Footer -->

	

	</body>
</html>