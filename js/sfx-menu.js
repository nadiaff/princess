				$(".heart-menu a")
				  .each(function(i) {
					if (i != 0) { 
					  $("#menu-hover-sfx")
						.clone()
						.attr("id", "menu-hover-sfx" + i)
						.appendTo($(this).parent()); 
					}
					$(this).data("beeper", i);
				  })
				  .mouseenter(function() {
					$("#menu-hover-sfx" + $(this).data("beeper"))[0].play();
				  });
				$("#menu-hover-sfx").attr("id", "menu-hover-sfx0");