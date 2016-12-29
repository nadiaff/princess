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

		<div class="row columns scoreboard">
			<div class="columns">
				<br>

				<div class="row">
					<div class="columns medium-3">
						<a class="button">HI-SCORE</a>
						<a class="button float-right">MY SCORE</a>
						<h4>GAME LIST</h4>
						<ul>
							<li><a href="#">ORIGIN OF PRINCESS</a></li>
							<li><a href="#">OH! THE GALACTIC!!</a></li>
							<li><a href="#">FOOD ATTACK PRINCESS</a></li>
							<li><a href="#">PAKU PAKU PRINCESS</a></li>
						</ul>
					</div>
					<div class="columns medium-8 medium-offset-1">
						<div class="row">
							<h3>HIGH SCORE</h3>
							<table class="unstriped stacked">
								<thead>
									<tr>
										<th>RANK</th>
										<th>SCORE</th>
										<th>NAME</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1ST
										<td>599383</td>
										<td>ABC</td>
									</tr>
									<tr>
										<td>2ND</td>
										<td>52111</td>
										<td>BBQ</td>
									</tr>
									<tr>
										<td>3RD</td>
										<td>40082</td>
										<td>OMG</td>
									</tr>
									<tr>
										<td>4TH</td>
										<td>37599</td>
										<td>WTF</td>
									</tr>
									<tr>
										<td>5TH</td>
										<td>32001</td>
										<td>LOL</td>
									</tr>
									<tr>
										<td>6TH</td>
										<td>25022</td>
										<td>CAT</td>
									</tr>
									<tr>
										<td>7TH</td>
										<td>19926</td>
										<td>ANT</td>
									</tr>
									<tr>
										<td>8TH</td>
										<td>15333</td>
										<td>WAT</td>
									</tr>
									<tr>
										<td>9TH</td>
										<td>1654</td>
										<td>HOW</td>
									</tr>
									<tr>
										<td>10TH</td>
										<td>33</td>
										<td>WHY</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
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
					<audio id="audio1" src="audio/13_March_Of_Infinite_Pride.mp3" autoplay loop>
						Your browser doesn't support this audio thingy. Get another one if you want to hear noises.
					</audio>
				</div>
				<p><a href="https://archive.org/details/8bp030">'MARCH OF INFINITE PRIDE'</a> BY <a href="http://rugarandi.com/">RUGAR</a> IS PLAYING SONG! <a href="credits.php#scoreboard_license">SEE LICENSE</a>.</p>
			</div>
		</div>
		<!-- End Audio Player -->
		
		<!-- Start Footer -->
		<?php include 'php/footer.php'; ?>
		<!-- End Footer -->

	

	</body>
</html>