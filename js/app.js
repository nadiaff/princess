				
			
		$(document).ready(function($) {
			$(document).foundation();


			
			//Set audio volume to 50% so as not to deafen people
			$('#audio1').prop("volume", 0.5);
			
			//Audio player that works with Foundation Framework
			$('.foundation-player.no-1').foundationPlayer();
			
			//Volume slider for audio since one wasn't included with Foundation Player
			$('#audioSlider').slider({
				orientation: "horizontal",
				value: audio1.volume,
				min: 0,
				max: 1,
				range: 'min',
				animate: true,
				step: .1,
				slide: function(e, ui) {
					audio1.volume = ui.value;
				}
			});
		});