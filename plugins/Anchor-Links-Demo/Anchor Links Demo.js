jQuery(function ($) {

    var open_accordion_anchor = $('#open-accordion-dance a');
    open_accordion_anchor.on('click', function(event){
        $('#my-accordian .et_pb_accordion_item_1 .et_pb_toggle_title').click();
        $("html, body").animate({ scrollTop: $('#my-accordian').offset().top }, 1000);
    });

    var open_accordion_anchor = $('#open-tab-dance a');
    open_accordion_anchor.on('click', function(event){
        $('#my-tabs .et_pb_tab_1 a').click();
        $("html, body").animate({ scrollTop: $('#my-tabs').offset().top }, 1000);
    });
    
});