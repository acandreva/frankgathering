jQuery(document).ready(function() {
    jQuery('.toggle-nav').click(function(e) {
        jQuery('.mobile-sitenav ul').slideToggle(500);
 
        e.preventDefault();
    });
    
});