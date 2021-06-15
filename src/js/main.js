//Fancybox 3
jQuery('[data-fancybox="gallery"]').fancybox({
    buttons : [
        'zoom',
        'close'
    ],
    loop: false,
    gutter : 10,
    keyboard: true,
    arrows: true,
    infobar: true,
    smallBtn: true,
    toolbar: false,
    slideShow: {
        autoStart: false    ,
        speed: 1000
    },
    thumbs : {
        autoStart : true
    }
});

//Calculate number of selected days in sidebar
// jQuery(".property__single-sidebar input.hasDatepicker").change(function () {
//     var start = new Date(getDate(jQuery('#datepicker_start').val()));
//     var end = new Date(getDate(jQuery('#datepicker_end').val()));
//
//     diff = new Date(end - start),
//         days = diff / 1000 / 60 / 60 / 24;
//     if (days == NaN) {
//         jQuery('#txtTotalDays').val(0);
//     } else {
//         alert(jQuery('#txtTotalDays').val(days));
//     }
// });

// jQuery( document ).ready(function() {
//     jQuery( '#datepicker_start .hasDatepicker' ).datepicker({
//         onChange: function(val) {
//             jQuery('#datepicker_end').datepicker( "option", "minDate", val );
//         }
//     });
//
//     jQuery( '#datepicker_end .hasDatepicker' ).datepicker({
//         onChange: function(val) {
//             jQuery('#datepicker_start').datepicker( "option", "maxDate", val );
//         }
//     });
// });