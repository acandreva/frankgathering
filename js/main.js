/* Open */
jQuery(function($) {
	"use strict";
     $('#mobile-open').on('click', function() {
    document.getElementById("myNav").style.height = "100%";
     });

/* Close */
     $('#mobile-close').on('click', function() {
    document.getElementById("myNav").style.height = "0%";
     });
});