jQuery(function ($) {

    var open_tab_anchor = $('#menu-item-143 a');
    open_tab_anchor.on('click', function(event){
        $('#event-tabs .first-tab label').click();
        $("html, body").animate({ scrollTop: $('#event-tabs').offset().top }, 1000);
    });
    
});