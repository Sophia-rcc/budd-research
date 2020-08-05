/* Mobile Navigation*/

(function($) {
		jQuery(".menu-toggle").click(function() {
			if(jQuery(".menu-toggle").text() == "☰")
			{
  				jQuery(".menu-toggle").text("✖");
			}
			else
			{        
  				jQuery(".menu-toggle").text("☰");  
			}
			
			jQuery(".menu-item").toggle();
		});
})( jQuery );