/* Open */
jQuery(document).ready(function() {
    
	jQuery('#mobile-open').click(function(e) {
		document.getElementById("myNav").style.width = "100%"; 
    });

/* Close */
     jQuery('#mobile-close').click(function(e) {
    	document.getElementById("myNav").style.width = "0%";
     });
});